<?php //6d720c8aa83334b2d8df976f2f509f80
/** @noinspection all */

namespace Illuminate\Database\Eloquent {

    use Illuminate\Support\HigherOrderTapProxy;

    /**
     * @method static void downloadExcel(string $fileName, string $writerType = null, $withHeadings = false)
     * @method static void import(string $filename, string $disk = null, string $readerType = null)
     * @method static void importAs(string $filename, callable $mapping, string $disk = null, string $readerType = null)
     * @method static $this onlyTrashed()
     * @method static int restore()
     * @method static $this|Model|HigherOrderTapProxy|mixed restoreOrCreate(array $attributes = [], array $values = [])
     * @method static void storeExcel(string $filePath, string $disk = null, string $writerType = null, $withHeadings = false)
     * @method static $this withTrashed($withTrashed = true)
     * @method static $this withoutTrashed()
     */
    class Builder {}
}

namespace Illuminate\Http {

    /**
     * @method static bool hasValidRelativeSignature()
     * @method static bool hasValidSignatureWhileIgnoring($ignoreQuery = [], $absolute = true)
     */
    class Request {}
}

namespace Illuminate\Support {

    /**
     * @method static $this debug()
     * @method static void downloadExcel(string $fileName, string $writerType = null, $withHeadings = false, array $responseHeaders = [])
     * @method static void storeExcel(string $filePath, string $disk = null, string $writerType = null, $withHeadings = false)
     */
    class Collection {}
}

namespace Illuminate\Support\Facades {

    /**
     * @method static void auth($options = [])
     * @method static void bitPayWebhook(string $uri = 'laravel-bitpay/webhook')
     * @method static void confirmPassword()
     * @method static void emailVerification()
     * @method static void resetPassword()
     */
    class Route {}
}
