<?php

namespace App\PaymentChannels;


class BasePaymentChannel
{

    protected array $credentialItems;

    public function makeAmountByCurrency($amount, $currency)
    {
        $userCurrencyItem = getUserCurrencyItem(null, $currency);

        return convertPriceToUserCurrency($amount, $userCurrencyItem);
    }

    public function getCredentialItems(): array
    {
        return $this->credentialItems ?? [];
    }

    public function setCredentialItems($paymentChannel): void
    {
        $credentialItems = $this->credentialItems ?? [];

        if (!empty($credentialItems) and !empty($paymentChannel->credentials)) {

            foreach ($credentialItems as $credentialItem) {
                if (!empty($paymentChannel->credentials[$credentialItem])) {
                    $this->{$credentialItem} = $paymentChannel->credentials[$credentialItem];
                }
            }

            $this->test_mode = false;

            if (!empty($paymentChannel->credentials['test_mode'])) {
                $this->test_mode = true;
            }
        }
    }


}
