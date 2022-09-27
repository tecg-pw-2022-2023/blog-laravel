<?php //577b1ab948a1b66ff327f1f524b7a130
/** @noinspection all */

namespace Illuminate\Database\Eloquent {
    
    /**
     * @method static $this onlyTrashed(Builder $builder)
     * @method static int restore(Builder $builder)
     * @method static $this withTrashed(Builder $builder, $withTrashed = true)
     * @method static $this withoutTrashed(Builder $builder)
     */
    class Builder {}
}

namespace Illuminate\Http {
    
    /**
     * @method static bool hasValidRelativeSignature()
     * @method static bool hasValidSignature($absolute = true)
     * @method static bool hasValidSignatureWhileIgnoring($ignoreQuery = [], $absolute = true)
     * @method static array validate(array $rules, ...$params)
     * @method static array validateWithBag(string $errorBag, array $rules, ...$params)
     */
    class Request {}
}