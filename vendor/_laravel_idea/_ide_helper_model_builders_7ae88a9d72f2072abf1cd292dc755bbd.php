<?php //7f8d33d96e1e174aa96a376496c1d693
/** @noinspection all */

namespace LaravelIdea\Helper\MacsiDigital\OAuth2 {

    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Database\Query\Expression;
    use Illuminate\Pagination\LengthAwarePaginator;
    use Illuminate\Pagination\Paginator;
    use LaravelIdea\Helper\_BaseBuilder;
    use LaravelIdea\Helper\_BaseCollection;
    use MacsiDigital\OAuth2\Integration;

    /**
     * @method Integration|null getOrPut($key, $value)
     * @method Integration|$this shift(int $count = 1)
     * @method Integration|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Integration|$this pop(int $count = 1)
     * @method Integration|null pull($key, \Closure $default = null)
     * @method Integration|null last(callable $callback = null, \Closure $default = null)
     * @method Integration|$this random(callable|int|null $number = null)
     * @method Integration|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Integration|null get($key, \Closure $default = null)
     * @method Integration|null first(callable $callback = null, \Closure $default = null)
     * @method Integration|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Integration|null find($key, $default = null)
     * @method Integration[] all()
     */
    class _IH_Integration_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Integration[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method Integration baseSole(array|string $columns = ['*'])
     * @method Integration create(array $attributes = [])
     * @method _IH_Integration_C|Integration[] cursor()
     * @method Integration|null|_IH_Integration_C|Integration[] find($id, array|string $columns = ['*'])
     * @method _IH_Integration_C|Integration[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Integration|_IH_Integration_C|Integration[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Integration|_IH_Integration_C|Integration[] findOrFail($id, array|string $columns = ['*'])
     * @method Integration|_IH_Integration_C|Integration[] findOrNew($id, array|string $columns = ['*'])
     * @method Integration first(array|string $columns = ['*'])
     * @method Integration firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Integration firstOrCreate(array $attributes = [], array $values = [])
     * @method Integration firstOrFail(array|string $columns = ['*'])
     * @method Integration firstOrNew(array $attributes = [], array $values = [])
     * @method Integration firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Integration forceCreate(array $attributes)
     * @method _IH_Integration_C|Integration[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Integration_C|Integration[] get(array|string $columns = ['*'])
     * @method Integration getModel()
     * @method Integration[] getModels(array|string $columns = ['*'])
     * @method _IH_Integration_C|Integration[] hydrate(array $items)
     * @method Integration make(array $attributes = [])
     * @method Integration newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Integration[]|_IH_Integration_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Integration[]|_IH_Integration_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Integration sole(array|string $columns = ['*'])
     * @method Integration updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Integration_QB extends _BaseBuilder {}
}
