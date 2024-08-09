<?php //d8b18d6bb2a23a70ae19b17a12915d51
/** @noinspection all */

namespace LaravelIdea\Helper\SebaCarrasco93\LaravelPayku\Models {

    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Database\Query\Expression;
    use Illuminate\Pagination\LengthAwarePaginator;
    use Illuminate\Pagination\Paginator;
    use Illuminate\Support\Collection;
    use LaravelIdea\Helper\_BaseBuilder;
    use LaravelIdea\Helper\_BaseCollection;
    use SebaCarrasco93\LaravelPayku\Models\PaykuPayment;
    use SebaCarrasco93\LaravelPayku\Models\PaykuTransaction;
    
    /**
     * @method PaykuPayment|null getOrPut($key, $value)
     * @method PaykuPayment|$this shift(int $count = 1)
     * @method PaykuPayment|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method PaykuPayment|$this pop(int $count = 1)
     * @method PaykuPayment|null pull($key, \Closure $default = null)
     * @method PaykuPayment|null last(callable $callback = null, \Closure $default = null)
     * @method PaykuPayment|$this random(callable|int|null $number = null)
     * @method PaykuPayment|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method PaykuPayment|null get($key, \Closure $default = null)
     * @method PaykuPayment|null first(callable $callback = null, \Closure $default = null)
     * @method PaykuPayment|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method PaykuPayment|null find($key, $default = null)
     * @method PaykuPayment[] all()
     */
    class _IH_PaykuPayment_C extends _BaseCollection {
        /**
         * @param int $size
         * @return PaykuPayment[][]|Collection<_IH_PaykuPayment_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_PaykuPayment_QB whereTransactionId($value)
     * @method _IH_PaykuPayment_QB whereStart($value)
     * @method _IH_PaykuPayment_QB whereEnd($value)
     * @method _IH_PaykuPayment_QB whereMedia($value)
     * @method _IH_PaykuPayment_QB whereVerificationKey($value)
     * @method _IH_PaykuPayment_QB whereAuthorizationCode($value)
     * @method _IH_PaykuPayment_QB whereLast4Digits($value)
     * @method _IH_PaykuPayment_QB whereInstallments($value)
     * @method _IH_PaykuPayment_QB whereCardType($value)
     * @method _IH_PaykuPayment_QB whereAdditionalParameters($value)
     * @method _IH_PaykuPayment_QB whereCurrency($value)
     * @method _IH_PaykuPayment_QB whereCreatedAt($value)
     * @method _IH_PaykuPayment_QB whereUpdatedAt($value)
     * @method _IH_PaykuPayment_QB wherePaymentKey($value)
     * @method _IH_PaykuPayment_QB whereTransactionKey($value)
     * @method _IH_PaykuPayment_QB whereDepositDate($value)
     * @method PaykuPayment baseSole(array|string $columns = ['*'])
     * @method PaykuPayment create(array $attributes = [])
     * @method _IH_PaykuPayment_C|PaykuPayment[] cursor()
     * @method PaykuPayment|null|_IH_PaykuPayment_C|PaykuPayment[] find($id, array|string $columns = ['*'])
     * @method _IH_PaykuPayment_C|PaykuPayment[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method PaykuPayment|_IH_PaykuPayment_C|PaykuPayment[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method PaykuPayment|_IH_PaykuPayment_C|PaykuPayment[] findOrFail($id, array|string $columns = ['*'])
     * @method PaykuPayment|_IH_PaykuPayment_C|PaykuPayment[] findOrNew($id, array|string $columns = ['*'])
     * @method PaykuPayment first(array|string $columns = ['*'])
     * @method PaykuPayment firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method PaykuPayment firstOrCreate(array $attributes = [], array $values = [])
     * @method PaykuPayment firstOrFail(array|string $columns = ['*'])
     * @method PaykuPayment firstOrNew(array $attributes = [], array $values = [])
     * @method PaykuPayment firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method PaykuPayment forceCreate(array $attributes)
     * @method _IH_PaykuPayment_C|PaykuPayment[] fromQuery(string $query, array $bindings = [])
     * @method _IH_PaykuPayment_C|PaykuPayment[] get(array|string $columns = ['*'])
     * @method PaykuPayment getModel()
     * @method PaykuPayment[] getModels(array|string $columns = ['*'])
     * @method _IH_PaykuPayment_C|PaykuPayment[] hydrate(array $items)
     * @method _IH_PaykuPayment_C|PaykuPayment[] lazy(int $chunkSize = 1000)
     * @method _IH_PaykuPayment_C|PaykuPayment[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_PaykuPayment_C|PaykuPayment[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method PaykuPayment make(array $attributes = [])
     * @method PaykuPayment newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|PaykuPayment[]|_IH_PaykuPayment_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method PaykuPayment restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|PaykuPayment[]|_IH_PaykuPayment_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method PaykuPayment sole(array|string $columns = ['*'])
     * @method PaykuPayment updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_PaykuPayment_QB extends _BaseBuilder {}
    
    /**
     * @method PaykuTransaction|null getOrPut($key, $value)
     * @method PaykuTransaction|$this shift(int $count = 1)
     * @method PaykuTransaction|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method PaykuTransaction|$this pop(int $count = 1)
     * @method PaykuTransaction|null pull($key, \Closure $default = null)
     * @method PaykuTransaction|null last(callable $callback = null, \Closure $default = null)
     * @method PaykuTransaction|$this random(callable|int|null $number = null)
     * @method PaykuTransaction|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method PaykuTransaction|null get($key, \Closure $default = null)
     * @method PaykuTransaction|null first(callable $callback = null, \Closure $default = null)
     * @method PaykuTransaction|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method PaykuTransaction|null find($key, $default = null)
     * @method PaykuTransaction[] all()
     */
    class _IH_PaykuTransaction_C extends _BaseCollection {
        /**
         * @param int $size
         * @return PaykuTransaction[][]|Collection<_IH_PaykuTransaction_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_PaykuTransaction_QB whereId($value)
     * @method _IH_PaykuTransaction_QB whereStatus($value)
     * @method _IH_PaykuTransaction_QB whereOrder($value)
     * @method _IH_PaykuTransaction_QB whereEmail($value)
     * @method _IH_PaykuTransaction_QB whereSubject($value)
     * @method _IH_PaykuTransaction_QB whereUrl($value)
     * @method _IH_PaykuTransaction_QB whereAmount($value)
     * @method _IH_PaykuTransaction_QB whereNotifiedAt($value)
     * @method _IH_PaykuTransaction_QB whereCreatedAt($value)
     * @method _IH_PaykuTransaction_QB whereUpdatedAt($value)
     * @method _IH_PaykuTransaction_QB whereFullName($value)
     * @method PaykuTransaction baseSole(array|string $columns = ['*'])
     * @method PaykuTransaction create(array $attributes = [])
     * @method _IH_PaykuTransaction_C|PaykuTransaction[] cursor()
     * @method PaykuTransaction|null|_IH_PaykuTransaction_C|PaykuTransaction[] find($id, array|string $columns = ['*'])
     * @method _IH_PaykuTransaction_C|PaykuTransaction[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method PaykuTransaction|_IH_PaykuTransaction_C|PaykuTransaction[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method PaykuTransaction|_IH_PaykuTransaction_C|PaykuTransaction[] findOrFail($id, array|string $columns = ['*'])
     * @method PaykuTransaction|_IH_PaykuTransaction_C|PaykuTransaction[] findOrNew($id, array|string $columns = ['*'])
     * @method PaykuTransaction first(array|string $columns = ['*'])
     * @method PaykuTransaction firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method PaykuTransaction firstOrCreate(array $attributes = [], array $values = [])
     * @method PaykuTransaction firstOrFail(array|string $columns = ['*'])
     * @method PaykuTransaction firstOrNew(array $attributes = [], array $values = [])
     * @method PaykuTransaction firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method PaykuTransaction forceCreate(array $attributes)
     * @method _IH_PaykuTransaction_C|PaykuTransaction[] fromQuery(string $query, array $bindings = [])
     * @method _IH_PaykuTransaction_C|PaykuTransaction[] get(array|string $columns = ['*'])
     * @method PaykuTransaction getModel()
     * @method PaykuTransaction[] getModels(array|string $columns = ['*'])
     * @method _IH_PaykuTransaction_C|PaykuTransaction[] hydrate(array $items)
     * @method _IH_PaykuTransaction_C|PaykuTransaction[] lazy(int $chunkSize = 1000)
     * @method _IH_PaykuTransaction_C|PaykuTransaction[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_PaykuTransaction_C|PaykuTransaction[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method PaykuTransaction make(array $attributes = [])
     * @method PaykuTransaction newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|PaykuTransaction[]|_IH_PaykuTransaction_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method PaykuTransaction restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|PaykuTransaction[]|_IH_PaykuTransaction_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method PaykuTransaction sole(array|string $columns = ['*'])
     * @method PaykuTransaction updateOrCreate(array $attributes, array $values = [])
     * @method _IH_PaykuTransaction_QB pending()
     * @method _IH_PaykuTransaction_QB register()
     * @method _IH_PaykuTransaction_QB success()
     */
    class _IH_PaykuTransaction_QB extends _BaseBuilder {}
}