<?php //f42f3f5706fd79d1ec10f585f485a515
/** @noinspection all */

namespace LaravelIdea\Helper\Tzsk\Payu\Models {

    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Database\Query\Expression;
    use Illuminate\Pagination\LengthAwarePaginator;
    use Illuminate\Pagination\Paginator;
    use Illuminate\Support\Collection;
    use LaravelIdea\Helper\_BaseBuilder;
    use LaravelIdea\Helper\_BaseCollection;
    use Tzsk\Payu\Models\PayuTransaction;
    
    /**
     * @method PayuTransaction|null getOrPut($key, $value)
     * @method PayuTransaction|$this shift(int $count = 1)
     * @method PayuTransaction|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method PayuTransaction|$this pop(int $count = 1)
     * @method PayuTransaction|null pull($key, \Closure $default = null)
     * @method PayuTransaction|null last(callable $callback = null, \Closure $default = null)
     * @method PayuTransaction|$this random(callable|int|null $number = null)
     * @method PayuTransaction|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method PayuTransaction|null get($key, \Closure $default = null)
     * @method PayuTransaction|null first(callable $callback = null, \Closure $default = null)
     * @method PayuTransaction|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method PayuTransaction|null find($key, $default = null)
     * @method PayuTransaction[] all()
     */
    class _IH_PayuTransaction_C extends _BaseCollection {
        /**
         * @param int $size
         * @return PayuTransaction[][]|Collection<_IH_PayuTransaction_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_PayuTransaction_QB whereId($value)
     * @method _IH_PayuTransaction_QB wherePaidForId($value)
     * @method _IH_PayuTransaction_QB wherePaidForType($value)
     * @method _IH_PayuTransaction_QB whereTransactionId($value)
     * @method _IH_PayuTransaction_QB whereGateway($value)
     * @method _IH_PayuTransaction_QB whereBody($value)
     * @method _IH_PayuTransaction_QB whereDestination($value)
     * @method _IH_PayuTransaction_QB whereHash($value)
     * @method _IH_PayuTransaction_QB whereResponse($value)
     * @method _IH_PayuTransaction_QB whereStatus($value)
     * @method _IH_PayuTransaction_QB whereVerifiedAt($value)
     * @method _IH_PayuTransaction_QB whereDeletedAt($value)
     * @method _IH_PayuTransaction_QB whereCreatedAt($value)
     * @method _IH_PayuTransaction_QB whereUpdatedAt($value)
     * @method PayuTransaction baseSole(array|string $columns = ['*'])
     * @method PayuTransaction create(array $attributes = [])
     * @method _IH_PayuTransaction_C|PayuTransaction[] cursor()
     * @method PayuTransaction|null|_IH_PayuTransaction_C|PayuTransaction[] find($id, array|string $columns = ['*'])
     * @method _IH_PayuTransaction_C|PayuTransaction[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method PayuTransaction|_IH_PayuTransaction_C|PayuTransaction[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method PayuTransaction|_IH_PayuTransaction_C|PayuTransaction[] findOrFail($id, array|string $columns = ['*'])
     * @method PayuTransaction|_IH_PayuTransaction_C|PayuTransaction[] findOrNew($id, array|string $columns = ['*'])
     * @method PayuTransaction first(array|string $columns = ['*'])
     * @method PayuTransaction firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method PayuTransaction firstOrCreate(array $attributes = [], array $values = [])
     * @method PayuTransaction firstOrFail(array|string $columns = ['*'])
     * @method PayuTransaction firstOrNew(array $attributes = [], array $values = [])
     * @method PayuTransaction firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method PayuTransaction forceCreate(array $attributes)
     * @method _IH_PayuTransaction_C|PayuTransaction[] fromQuery(string $query, array $bindings = [])
     * @method _IH_PayuTransaction_C|PayuTransaction[] get(array|string $columns = ['*'])
     * @method PayuTransaction getModel()
     * @method PayuTransaction[] getModels(array|string $columns = ['*'])
     * @method _IH_PayuTransaction_C|PayuTransaction[] hydrate(array $items)
     * @method _IH_PayuTransaction_C|PayuTransaction[] lazy(int $chunkSize = 1000)
     * @method _IH_PayuTransaction_C|PayuTransaction[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_PayuTransaction_C|PayuTransaction[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method PayuTransaction make(array $attributes = [])
     * @method PayuTransaction newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|PayuTransaction[]|_IH_PayuTransaction_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method PayuTransaction restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|PayuTransaction[]|_IH_PayuTransaction_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method PayuTransaction sole(array|string $columns = ['*'])
     * @method PayuTransaction updateOrCreate(array $attributes, array $values = [])
     * @method _IH_PayuTransaction_QB failed()
     * @method _IH_PayuTransaction_QB locate(string $id)
     * @method _IH_PayuTransaction_QB pending()
     * @method _IH_PayuTransaction_QB successful()
     * @method _IH_PayuTransaction_QB verifiable()
     */
    class _IH_PayuTransaction_QB extends _BaseBuilder {}
}