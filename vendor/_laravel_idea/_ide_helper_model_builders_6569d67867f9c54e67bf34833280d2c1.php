<?php //edf8d54e7340862183d98a5ed02bb305
/** @noinspection all */

namespace LaravelIdea\Helper\AKCybex\JazzCash\Models {

    use AKCybex\JazzCash\Models\JazzCashTransaction;
    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Database\Query\Expression;
    use Illuminate\Pagination\LengthAwarePaginator;
    use Illuminate\Pagination\Paginator;
    use Illuminate\Support\Collection;
    use LaravelIdea\Helper\_BaseBuilder;
    use LaravelIdea\Helper\_BaseCollection;
    
    /**
     * @method JazzCashTransaction|null getOrPut($key, $value)
     * @method JazzCashTransaction|$this shift(int $count = 1)
     * @method JazzCashTransaction|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method JazzCashTransaction|$this pop(int $count = 1)
     * @method JazzCashTransaction|null pull($key, \Closure $default = null)
     * @method JazzCashTransaction|null last(callable $callback = null, \Closure $default = null)
     * @method JazzCashTransaction|$this random(callable|int|null $number = null)
     * @method JazzCashTransaction|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method JazzCashTransaction|null get($key, \Closure $default = null)
     * @method JazzCashTransaction|null first(callable $callback = null, \Closure $default = null)
     * @method JazzCashTransaction|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method JazzCashTransaction|null find($key, $default = null)
     * @method JazzCashTransaction[] all()
     */
    class _IH_JazzCashTransaction_C extends _BaseCollection {
        /**
         * @param int $size
         * @return JazzCashTransaction[][]|Collection<_IH_JazzCashTransaction_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_JazzCashTransaction_QB whereId($value)
     * @method _IH_JazzCashTransaction_QB whereTxnRefNo($value)
     * @method _IH_JazzCashTransaction_QB whereOrder($value)
     * @method _IH_JazzCashTransaction_QB whereRequest($value)
     * @method _IH_JazzCashTransaction_QB whereResponse($value)
     * @method _IH_JazzCashTransaction_QB whereStatus($value)
     * @method _IH_JazzCashTransaction_QB whereCreatedAt($value)
     * @method _IH_JazzCashTransaction_QB whereUpdatedAt($value)
     * @method JazzCashTransaction baseSole(array|string $columns = ['*'])
     * @method JazzCashTransaction create(array $attributes = [])
     * @method _IH_JazzCashTransaction_C|JazzCashTransaction[] cursor()
     * @method JazzCashTransaction|null|_IH_JazzCashTransaction_C|JazzCashTransaction[] find($id, array|string $columns = ['*'])
     * @method _IH_JazzCashTransaction_C|JazzCashTransaction[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method JazzCashTransaction|_IH_JazzCashTransaction_C|JazzCashTransaction[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method JazzCashTransaction|_IH_JazzCashTransaction_C|JazzCashTransaction[] findOrFail($id, array|string $columns = ['*'])
     * @method JazzCashTransaction|_IH_JazzCashTransaction_C|JazzCashTransaction[] findOrNew($id, array|string $columns = ['*'])
     * @method JazzCashTransaction first(array|string $columns = ['*'])
     * @method JazzCashTransaction firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method JazzCashTransaction firstOrCreate(array $attributes = [], array $values = [])
     * @method JazzCashTransaction firstOrFail(array|string $columns = ['*'])
     * @method JazzCashTransaction firstOrNew(array $attributes = [], array $values = [])
     * @method JazzCashTransaction firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method JazzCashTransaction forceCreate(array $attributes)
     * @method _IH_JazzCashTransaction_C|JazzCashTransaction[] fromQuery(string $query, array $bindings = [])
     * @method _IH_JazzCashTransaction_C|JazzCashTransaction[] get(array|string $columns = ['*'])
     * @method JazzCashTransaction getModel()
     * @method JazzCashTransaction[] getModels(array|string $columns = ['*'])
     * @method _IH_JazzCashTransaction_C|JazzCashTransaction[] hydrate(array $items)
     * @method _IH_JazzCashTransaction_C|JazzCashTransaction[] lazy(int $chunkSize = 1000)
     * @method _IH_JazzCashTransaction_C|JazzCashTransaction[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_JazzCashTransaction_C|JazzCashTransaction[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method JazzCashTransaction make(array $attributes = [])
     * @method JazzCashTransaction newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|JazzCashTransaction[]|_IH_JazzCashTransaction_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method JazzCashTransaction restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|JazzCashTransaction[]|_IH_JazzCashTransaction_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method JazzCashTransaction sole(array|string $columns = ['*'])
     * @method JazzCashTransaction updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_JazzCashTransaction_QB extends _BaseBuilder {}
}