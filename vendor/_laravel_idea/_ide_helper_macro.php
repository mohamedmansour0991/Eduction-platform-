<?php //4cba6413c2fac3a89ad6bdb20a2cf1d4
/** @noinspection all */

namespace Illuminate\Database\Eloquent {

    use Illuminate\Support\HigherOrderTapProxy;

    /**
     * @method void downloadExcel(string $fileName, string $writerType = null, $withHeadings = false)
     * @method void import(string $filename, string $disk = null, string $readerType = null)
     * @method void importAs(string $filename, callable $mapping, string $disk = null, string $readerType = null)
     * @method $this onlyTrashed()
     * @method int restore()
     * @method $this|Model|HigherOrderTapProxy|mixed restoreOrCreate(array $attributes = [], array $values = [])
     * @method void storeExcel(string $filePath, string $disk = null, string $writerType = null, $withHeadings = false)
     * @method $this withTrashed($withTrashed = true)
     * @method $this withoutTrashed()
     */
    class Builder {}
}

namespace Illuminate\Http {

    /**
     * @method bool hasValidRelativeSignature()
     * @method bool hasValidSignatureWhileIgnoring($ignoreQuery = [], $absolute = true)
     */
    class Request {}
}

namespace Illuminate\Redis {

    /**
     * @mixin \Illuminate\Redis\Connections\PhpRedisConnection
     * @mixin \Redis
     */
    class RedisManager {}
}

namespace Illuminate\Support {

    /**
     * @method $this debug()
     * @method void downloadExcel(string $fileName, string $writerType = null, $withHeadings = false, array $responseHeaders = [])
     * @method void storeExcel(string $filePath, string $disk = null, string $writerType = null, $withHeadings = false)
     */
    class Collection {}
}

namespace Illuminate\Support\Facades {

    /**
     * @method void auth($options = [])
     * @method void bitPayWebhook(string $uri = 'laravel-bitpay/webhook')
     * @method void confirmPassword()
     * @method void emailVerification()
     * @method void resetPassword()
     */
    class Route {}
}
