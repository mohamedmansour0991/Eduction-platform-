<?php //3f2fd2b20a85442ab8b67a29829c1627
/** @noinspection all */

namespace LaravelIdea\Helper\Cviebrock\EloquentSluggable\Tests\Models {

    use Cviebrock\EloquentSluggable\Tests\Models\Author;
    use Cviebrock\EloquentSluggable\Tests\Models\Post;
    use Cviebrock\EloquentSluggable\Tests\Models\PostNotSluggable;
    use Cviebrock\EloquentSluggable\Tests\Models\PostShortConfig;
    use Cviebrock\EloquentSluggable\Tests\Models\PostShortConfigWithScopeHelpers;
    use Cviebrock\EloquentSluggable\Tests\Models\PostWithCustomCallableMethod;
    use Cviebrock\EloquentSluggable\Tests\Models\PostWithCustomEngine2;
    use Cviebrock\EloquentSluggable\Tests\Models\PostWithCustomEngine;
    use Cviebrock\EloquentSluggable\Tests\Models\PostWithCustomEngineOptions;
    use Cviebrock\EloquentSluggable\Tests\Models\PostWithCustomMethod;
    use Cviebrock\EloquentSluggable\Tests\Models\PostWithCustomSeparator;
    use Cviebrock\EloquentSluggable\Tests\Models\PostWithCustomSource;
    use Cviebrock\EloquentSluggable\Tests\Models\PostWithCustomSuffix;
    use Cviebrock\EloquentSluggable\Tests\Models\PostWithEmptySeparator;
    use Cviebrock\EloquentSluggable\Tests\Models\PostWithFirstUniqueSuffix;
    use Cviebrock\EloquentSluggable\Tests\Models\PostWithForeignRuleset;
    use Cviebrock\EloquentSluggable\Tests\Models\PostWithIdSource;
    use Cviebrock\EloquentSluggable\Tests\Models\PostWithIdSourceOnSaved;
    use Cviebrock\EloquentSluggable\Tests\Models\PostWithIncludeTrashed;
    use Cviebrock\EloquentSluggable\Tests\Models\PostWithMaxLength;
    use Cviebrock\EloquentSluggable\Tests\Models\PostWithMaxLengthSplitWords;
    use Cviebrock\EloquentSluggable\Tests\Models\PostWithMultipleSlugs;
    use Cviebrock\EloquentSluggable\Tests\Models\PostWithMultipleSlugsAndCustomSlugKey;
    use Cviebrock\EloquentSluggable\Tests\Models\PostWithMultipleSlugsAndHelperTrait;
    use Cviebrock\EloquentSluggable\Tests\Models\PostWithMultipleSources;
    use Cviebrock\EloquentSluggable\Tests\Models\PostWithNoSource;
    use Cviebrock\EloquentSluggable\Tests\Models\PostWithOnUpdate;
    use Cviebrock\EloquentSluggable\Tests\Models\PostWithRelation;
    use Cviebrock\EloquentSluggable\Tests\Models\PostWithReservedSlug;
    use Cviebrock\EloquentSluggable\Tests\Models\PostWithSoftDeleting;
    use Cviebrock\EloquentSluggable\Tests\Models\PostWithSoftDeletingIncludeTrashed;
    use Cviebrock\EloquentSluggable\Tests\Models\PostWithUniqueSlugConstraints;
    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Query\Expression;
    use Illuminate\Pagination\LengthAwarePaginator;
    use Illuminate\Pagination\Paginator;
    use Illuminate\Support\Collection;
    use LaravelIdea\Helper\_BaseBuilder;
    use LaravelIdea\Helper\_BaseCollection;
    
    /**
     * @method Author|null getOrPut($key, $value)
     * @method Author|$this shift(int $count = 1)
     * @method Author|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Author|$this pop(int $count = 1)
     * @method Author|null pull($key, \Closure $default = null)
     * @method Author|null last(callable $callback = null, \Closure $default = null)
     * @method Author|$this random(callable|int|null $number = null)
     * @method Author|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Author|null get($key, \Closure $default = null)
     * @method Author|null first(callable $callback = null, \Closure $default = null)
     * @method Author|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Author|null find($key, $default = null)
     * @method Author[] all()
     */
    class _IH_Author_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Author[][]|Collection<_IH_Author_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_Author_QB whereId($value)
     * @method _IH_Author_QB whereName($value)
     * @method Author baseSole(array|string $columns = ['*'])
     * @method Author create(array $attributes = [])
     * @method _IH_Author_C|Author[] cursor()
     * @method Author|null|_IH_Author_C|Author[] find($id, array|string $columns = ['*'])
     * @method _IH_Author_C|Author[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Author|_IH_Author_C|Author[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Author|_IH_Author_C|Author[] findOrFail($id, array|string $columns = ['*'])
     * @method Author|_IH_Author_C|Author[] findOrNew($id, array|string $columns = ['*'])
     * @method Author first(array|string $columns = ['*'])
     * @method Author firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Author firstOrCreate(array $attributes = [], array $values = [])
     * @method Author firstOrFail(array|string $columns = ['*'])
     * @method Author firstOrNew(array $attributes = [], array $values = [])
     * @method Author firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Author forceCreate(array $attributes)
     * @method _IH_Author_C|Author[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Author_C|Author[] get(array|string $columns = ['*'])
     * @method Author getModel()
     * @method Author[] getModels(array|string $columns = ['*'])
     * @method _IH_Author_C|Author[] hydrate(array $items)
     * @method _IH_Author_C|Author[] lazy(int $chunkSize = 1000)
     * @method _IH_Author_C|Author[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_Author_C|Author[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method Author make(array $attributes = [])
     * @method Author newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Author[]|_IH_Author_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Author restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|Author[]|_IH_Author_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Author sole(array|string $columns = ['*'])
     * @method Author updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Author_QB extends _BaseBuilder {}
    
    /**
     * @method PostNotSluggable|null getOrPut($key, $value)
     * @method PostNotSluggable|$this shift(int $count = 1)
     * @method PostNotSluggable|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method PostNotSluggable|$this pop(int $count = 1)
     * @method PostNotSluggable|null pull($key, \Closure $default = null)
     * @method PostNotSluggable|null last(callable $callback = null, \Closure $default = null)
     * @method PostNotSluggable|$this random(callable|int|null $number = null)
     * @method PostNotSluggable|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method PostNotSluggable|null get($key, \Closure $default = null)
     * @method PostNotSluggable|null first(callable $callback = null, \Closure $default = null)
     * @method PostNotSluggable|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method PostNotSluggable|null find($key, $default = null)
     * @method PostNotSluggable[] all()
     */
    class _IH_PostNotSluggable_C extends _BaseCollection {
        /**
         * @param int $size
         * @return PostNotSluggable[][]|Collection<_IH_PostNotSluggable_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_PostNotSluggable_QB whereId($value)
     * @method _IH_PostNotSluggable_QB whereTitle($value)
     * @method _IH_PostNotSluggable_QB whereSubtitle($value)
     * @method _IH_PostNotSluggable_QB whereSlug($value)
     * @method _IH_PostNotSluggable_QB whereDummy($value)
     * @method _IH_PostNotSluggable_QB whereAuthorId($value)
     * @method _IH_PostNotSluggable_QB whereDeletedAt($value)
     * @method PostNotSluggable baseSole(array|string $columns = ['*'])
     * @method PostNotSluggable create(array $attributes = [])
     * @method _IH_PostNotSluggable_C|PostNotSluggable[] cursor()
     * @method PostNotSluggable|null|_IH_PostNotSluggable_C|PostNotSluggable[] find($id, array|string $columns = ['*'])
     * @method _IH_PostNotSluggable_C|PostNotSluggable[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method PostNotSluggable|_IH_PostNotSluggable_C|PostNotSluggable[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method PostNotSluggable|_IH_PostNotSluggable_C|PostNotSluggable[] findOrFail($id, array|string $columns = ['*'])
     * @method PostNotSluggable|_IH_PostNotSluggable_C|PostNotSluggable[] findOrNew($id, array|string $columns = ['*'])
     * @method PostNotSluggable first(array|string $columns = ['*'])
     * @method PostNotSluggable firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method PostNotSluggable firstOrCreate(array $attributes = [], array $values = [])
     * @method PostNotSluggable firstOrFail(array|string $columns = ['*'])
     * @method PostNotSluggable firstOrNew(array $attributes = [], array $values = [])
     * @method PostNotSluggable firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method PostNotSluggable forceCreate(array $attributes)
     * @method _IH_PostNotSluggable_C|PostNotSluggable[] fromQuery(string $query, array $bindings = [])
     * @method _IH_PostNotSluggable_C|PostNotSluggable[] get(array|string $columns = ['*'])
     * @method PostNotSluggable getModel()
     * @method PostNotSluggable[] getModels(array|string $columns = ['*'])
     * @method _IH_PostNotSluggable_C|PostNotSluggable[] hydrate(array $items)
     * @method _IH_PostNotSluggable_C|PostNotSluggable[] lazy(int $chunkSize = 1000)
     * @method _IH_PostNotSluggable_C|PostNotSluggable[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_PostNotSluggable_C|PostNotSluggable[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method PostNotSluggable make(array $attributes = [])
     * @method PostNotSluggable newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|PostNotSluggable[]|_IH_PostNotSluggable_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method PostNotSluggable restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|PostNotSluggable[]|_IH_PostNotSluggable_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method PostNotSluggable sole(array|string $columns = ['*'])
     * @method PostNotSluggable updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_PostNotSluggable_QB extends _BaseBuilder {}
    
    /**
     * @method PostShortConfigWithScopeHelpers|null getOrPut($key, $value)
     * @method PostShortConfigWithScopeHelpers|$this shift(int $count = 1)
     * @method PostShortConfigWithScopeHelpers|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method PostShortConfigWithScopeHelpers|$this pop(int $count = 1)
     * @method PostShortConfigWithScopeHelpers|null pull($key, \Closure $default = null)
     * @method PostShortConfigWithScopeHelpers|null last(callable $callback = null, \Closure $default = null)
     * @method PostShortConfigWithScopeHelpers|$this random(callable|int|null $number = null)
     * @method PostShortConfigWithScopeHelpers|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method PostShortConfigWithScopeHelpers|null get($key, \Closure $default = null)
     * @method PostShortConfigWithScopeHelpers|null first(callable $callback = null, \Closure $default = null)
     * @method PostShortConfigWithScopeHelpers|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method PostShortConfigWithScopeHelpers|null find($key, $default = null)
     * @method PostShortConfigWithScopeHelpers[] all()
     */
    class _IH_PostShortConfigWithScopeHelpers_C extends _BaseCollection {
        /**
         * @param int $size
         * @return PostShortConfigWithScopeHelpers[][]|Collection<_IH_PostShortConfigWithScopeHelpers_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_PostShortConfigWithScopeHelpers_QB whereId($value)
     * @method _IH_PostShortConfigWithScopeHelpers_QB whereTitle($value)
     * @method _IH_PostShortConfigWithScopeHelpers_QB whereSubtitle($value)
     * @method _IH_PostShortConfigWithScopeHelpers_QB whereSlug($value)
     * @method _IH_PostShortConfigWithScopeHelpers_QB whereDummy($value)
     * @method _IH_PostShortConfigWithScopeHelpers_QB whereAuthorId($value)
     * @method _IH_PostShortConfigWithScopeHelpers_QB whereDeletedAt($value)
     * @method PostShortConfigWithScopeHelpers baseSole(array|string $columns = ['*'])
     * @method PostShortConfigWithScopeHelpers create(array $attributes = [])
     * @method _IH_PostShortConfigWithScopeHelpers_C|PostShortConfigWithScopeHelpers[] cursor()
     * @method PostShortConfigWithScopeHelpers|null|_IH_PostShortConfigWithScopeHelpers_C|PostShortConfigWithScopeHelpers[] find($id, array|string $columns = ['*'])
     * @method _IH_PostShortConfigWithScopeHelpers_C|PostShortConfigWithScopeHelpers[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method PostShortConfigWithScopeHelpers|_IH_PostShortConfigWithScopeHelpers_C|PostShortConfigWithScopeHelpers[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method PostShortConfigWithScopeHelpers|_IH_PostShortConfigWithScopeHelpers_C|PostShortConfigWithScopeHelpers[] findOrFail($id, array|string $columns = ['*'])
     * @method PostShortConfigWithScopeHelpers|_IH_PostShortConfigWithScopeHelpers_C|PostShortConfigWithScopeHelpers[] findOrNew($id, array|string $columns = ['*'])
     * @method PostShortConfigWithScopeHelpers first(array|string $columns = ['*'])
     * @method PostShortConfigWithScopeHelpers firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method PostShortConfigWithScopeHelpers firstOrCreate(array $attributes = [], array $values = [])
     * @method PostShortConfigWithScopeHelpers firstOrFail(array|string $columns = ['*'])
     * @method PostShortConfigWithScopeHelpers firstOrNew(array $attributes = [], array $values = [])
     * @method PostShortConfigWithScopeHelpers firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method PostShortConfigWithScopeHelpers forceCreate(array $attributes)
     * @method _IH_PostShortConfigWithScopeHelpers_C|PostShortConfigWithScopeHelpers[] fromQuery(string $query, array $bindings = [])
     * @method _IH_PostShortConfigWithScopeHelpers_C|PostShortConfigWithScopeHelpers[] get(array|string $columns = ['*'])
     * @method PostShortConfigWithScopeHelpers getModel()
     * @method PostShortConfigWithScopeHelpers[] getModels(array|string $columns = ['*'])
     * @method _IH_PostShortConfigWithScopeHelpers_C|PostShortConfigWithScopeHelpers[] hydrate(array $items)
     * @method _IH_PostShortConfigWithScopeHelpers_C|PostShortConfigWithScopeHelpers[] lazy(int $chunkSize = 1000)
     * @method _IH_PostShortConfigWithScopeHelpers_C|PostShortConfigWithScopeHelpers[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_PostShortConfigWithScopeHelpers_C|PostShortConfigWithScopeHelpers[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method PostShortConfigWithScopeHelpers make(array $attributes = [])
     * @method PostShortConfigWithScopeHelpers newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|PostShortConfigWithScopeHelpers[]|_IH_PostShortConfigWithScopeHelpers_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method PostShortConfigWithScopeHelpers restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|PostShortConfigWithScopeHelpers[]|_IH_PostShortConfigWithScopeHelpers_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method PostShortConfigWithScopeHelpers sole(array|string $columns = ['*'])
     * @method PostShortConfigWithScopeHelpers updateOrCreate(array $attributes, array $values = [])
     * @method _IH_PostShortConfigWithScopeHelpers_QB findSimilarSlugs(string $attribute, array $config, string $slug)
     * @method _IH_PostShortConfigWithScopeHelpers_QB whereSlug(string $slug)
     * @method _IH_PostShortConfigWithScopeHelpers_QB withUniqueSlugConstraints(Model $model, string $attribute, array $config, string $slug)
     */
    class _IH_PostShortConfigWithScopeHelpers_QB extends _BaseBuilder {}
    
    /**
     * @method PostShortConfig|null getOrPut($key, $value)
     * @method PostShortConfig|$this shift(int $count = 1)
     * @method PostShortConfig|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method PostShortConfig|$this pop(int $count = 1)
     * @method PostShortConfig|null pull($key, \Closure $default = null)
     * @method PostShortConfig|null last(callable $callback = null, \Closure $default = null)
     * @method PostShortConfig|$this random(callable|int|null $number = null)
     * @method PostShortConfig|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method PostShortConfig|null get($key, \Closure $default = null)
     * @method PostShortConfig|null first(callable $callback = null, \Closure $default = null)
     * @method PostShortConfig|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method PostShortConfig|null find($key, $default = null)
     * @method PostShortConfig[] all()
     */
    class _IH_PostShortConfig_C extends _BaseCollection {
        /**
         * @param int $size
         * @return PostShortConfig[][]|Collection<_IH_PostShortConfig_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_PostShortConfig_QB whereId($value)
     * @method _IH_PostShortConfig_QB whereTitle($value)
     * @method _IH_PostShortConfig_QB whereSubtitle($value)
     * @method _IH_PostShortConfig_QB whereSlug($value)
     * @method _IH_PostShortConfig_QB whereDummy($value)
     * @method _IH_PostShortConfig_QB whereAuthorId($value)
     * @method _IH_PostShortConfig_QB whereDeletedAt($value)
     * @method PostShortConfig baseSole(array|string $columns = ['*'])
     * @method PostShortConfig create(array $attributes = [])
     * @method _IH_PostShortConfig_C|PostShortConfig[] cursor()
     * @method PostShortConfig|null|_IH_PostShortConfig_C|PostShortConfig[] find($id, array|string $columns = ['*'])
     * @method _IH_PostShortConfig_C|PostShortConfig[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method PostShortConfig|_IH_PostShortConfig_C|PostShortConfig[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method PostShortConfig|_IH_PostShortConfig_C|PostShortConfig[] findOrFail($id, array|string $columns = ['*'])
     * @method PostShortConfig|_IH_PostShortConfig_C|PostShortConfig[] findOrNew($id, array|string $columns = ['*'])
     * @method PostShortConfig first(array|string $columns = ['*'])
     * @method PostShortConfig firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method PostShortConfig firstOrCreate(array $attributes = [], array $values = [])
     * @method PostShortConfig firstOrFail(array|string $columns = ['*'])
     * @method PostShortConfig firstOrNew(array $attributes = [], array $values = [])
     * @method PostShortConfig firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method PostShortConfig forceCreate(array $attributes)
     * @method _IH_PostShortConfig_C|PostShortConfig[] fromQuery(string $query, array $bindings = [])
     * @method _IH_PostShortConfig_C|PostShortConfig[] get(array|string $columns = ['*'])
     * @method PostShortConfig getModel()
     * @method PostShortConfig[] getModels(array|string $columns = ['*'])
     * @method _IH_PostShortConfig_C|PostShortConfig[] hydrate(array $items)
     * @method _IH_PostShortConfig_C|PostShortConfig[] lazy(int $chunkSize = 1000)
     * @method _IH_PostShortConfig_C|PostShortConfig[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_PostShortConfig_C|PostShortConfig[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method PostShortConfig make(array $attributes = [])
     * @method PostShortConfig newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|PostShortConfig[]|_IH_PostShortConfig_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method PostShortConfig restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|PostShortConfig[]|_IH_PostShortConfig_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method PostShortConfig sole(array|string $columns = ['*'])
     * @method PostShortConfig updateOrCreate(array $attributes, array $values = [])
     * @method _IH_PostShortConfig_QB findSimilarSlugs(string $attribute, array $config, string $slug)
     * @method _IH_PostShortConfig_QB withUniqueSlugConstraints(Model $model, string $attribute, array $config, string $slug)
     */
    class _IH_PostShortConfig_QB extends _BaseBuilder {}
    
    /**
     * @method PostWithCustomCallableMethod|null getOrPut($key, $value)
     * @method PostWithCustomCallableMethod|$this shift(int $count = 1)
     * @method PostWithCustomCallableMethod|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method PostWithCustomCallableMethod|$this pop(int $count = 1)
     * @method PostWithCustomCallableMethod|null pull($key, \Closure $default = null)
     * @method PostWithCustomCallableMethod|null last(callable $callback = null, \Closure $default = null)
     * @method PostWithCustomCallableMethod|$this random(callable|int|null $number = null)
     * @method PostWithCustomCallableMethod|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method PostWithCustomCallableMethod|null get($key, \Closure $default = null)
     * @method PostWithCustomCallableMethod|null first(callable $callback = null, \Closure $default = null)
     * @method PostWithCustomCallableMethod|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method PostWithCustomCallableMethod|null find($key, $default = null)
     * @method PostWithCustomCallableMethod[] all()
     */
    class _IH_PostWithCustomCallableMethod_C extends _BaseCollection {
        /**
         * @param int $size
         * @return PostWithCustomCallableMethod[][]|Collection<_IH_PostWithCustomCallableMethod_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_PostWithCustomCallableMethod_QB whereId($value)
     * @method _IH_PostWithCustomCallableMethod_QB whereTitle($value)
     * @method _IH_PostWithCustomCallableMethod_QB whereSubtitle($value)
     * @method _IH_PostWithCustomCallableMethod_QB whereSlug($value)
     * @method _IH_PostWithCustomCallableMethod_QB whereDummy($value)
     * @method _IH_PostWithCustomCallableMethod_QB whereAuthorId($value)
     * @method _IH_PostWithCustomCallableMethod_QB whereDeletedAt($value)
     * @method PostWithCustomCallableMethod baseSole(array|string $columns = ['*'])
     * @method PostWithCustomCallableMethod create(array $attributes = [])
     * @method _IH_PostWithCustomCallableMethod_C|PostWithCustomCallableMethod[] cursor()
     * @method PostWithCustomCallableMethod|null|_IH_PostWithCustomCallableMethod_C|PostWithCustomCallableMethod[] find($id, array|string $columns = ['*'])
     * @method _IH_PostWithCustomCallableMethod_C|PostWithCustomCallableMethod[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method PostWithCustomCallableMethod|_IH_PostWithCustomCallableMethod_C|PostWithCustomCallableMethod[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method PostWithCustomCallableMethod|_IH_PostWithCustomCallableMethod_C|PostWithCustomCallableMethod[] findOrFail($id, array|string $columns = ['*'])
     * @method PostWithCustomCallableMethod|_IH_PostWithCustomCallableMethod_C|PostWithCustomCallableMethod[] findOrNew($id, array|string $columns = ['*'])
     * @method PostWithCustomCallableMethod first(array|string $columns = ['*'])
     * @method PostWithCustomCallableMethod firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method PostWithCustomCallableMethod firstOrCreate(array $attributes = [], array $values = [])
     * @method PostWithCustomCallableMethod firstOrFail(array|string $columns = ['*'])
     * @method PostWithCustomCallableMethod firstOrNew(array $attributes = [], array $values = [])
     * @method PostWithCustomCallableMethod firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method PostWithCustomCallableMethod forceCreate(array $attributes)
     * @method _IH_PostWithCustomCallableMethod_C|PostWithCustomCallableMethod[] fromQuery(string $query, array $bindings = [])
     * @method _IH_PostWithCustomCallableMethod_C|PostWithCustomCallableMethod[] get(array|string $columns = ['*'])
     * @method PostWithCustomCallableMethod getModel()
     * @method PostWithCustomCallableMethod[] getModels(array|string $columns = ['*'])
     * @method _IH_PostWithCustomCallableMethod_C|PostWithCustomCallableMethod[] hydrate(array $items)
     * @method _IH_PostWithCustomCallableMethod_C|PostWithCustomCallableMethod[] lazy(int $chunkSize = 1000)
     * @method _IH_PostWithCustomCallableMethod_C|PostWithCustomCallableMethod[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_PostWithCustomCallableMethod_C|PostWithCustomCallableMethod[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method PostWithCustomCallableMethod make(array $attributes = [])
     * @method PostWithCustomCallableMethod newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|PostWithCustomCallableMethod[]|_IH_PostWithCustomCallableMethod_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method PostWithCustomCallableMethod restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|PostWithCustomCallableMethod[]|_IH_PostWithCustomCallableMethod_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method PostWithCustomCallableMethod sole(array|string $columns = ['*'])
     * @method PostWithCustomCallableMethod updateOrCreate(array $attributes, array $values = [])
     * @method _IH_PostWithCustomCallableMethod_QB findSimilarSlugs(string $attribute, array $config, string $slug)
     * @method _IH_PostWithCustomCallableMethod_QB withUniqueSlugConstraints(Model $model, string $attribute, array $config, string $slug)
     */
    class _IH_PostWithCustomCallableMethod_QB extends _BaseBuilder {}
    
    /**
     * @method PostWithCustomEngine2|null getOrPut($key, $value)
     * @method PostWithCustomEngine2|$this shift(int $count = 1)
     * @method PostWithCustomEngine2|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method PostWithCustomEngine2|$this pop(int $count = 1)
     * @method PostWithCustomEngine2|null pull($key, \Closure $default = null)
     * @method PostWithCustomEngine2|null last(callable $callback = null, \Closure $default = null)
     * @method PostWithCustomEngine2|$this random(callable|int|null $number = null)
     * @method PostWithCustomEngine2|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method PostWithCustomEngine2|null get($key, \Closure $default = null)
     * @method PostWithCustomEngine2|null first(callable $callback = null, \Closure $default = null)
     * @method PostWithCustomEngine2|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method PostWithCustomEngine2|null find($key, $default = null)
     * @method PostWithCustomEngine2[] all()
     */
    class _IH_PostWithCustomEngine2_C extends _BaseCollection {
        /**
         * @param int $size
         * @return PostWithCustomEngine2[][]|Collection<_IH_PostWithCustomEngine2_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_PostWithCustomEngine2_QB whereId($value)
     * @method _IH_PostWithCustomEngine2_QB whereTitle($value)
     * @method _IH_PostWithCustomEngine2_QB whereSubtitle($value)
     * @method _IH_PostWithCustomEngine2_QB whereSlug($value)
     * @method _IH_PostWithCustomEngine2_QB whereDummy($value)
     * @method _IH_PostWithCustomEngine2_QB whereAuthorId($value)
     * @method _IH_PostWithCustomEngine2_QB whereDeletedAt($value)
     * @method PostWithCustomEngine2 baseSole(array|string $columns = ['*'])
     * @method PostWithCustomEngine2 create(array $attributes = [])
     * @method _IH_PostWithCustomEngine2_C|PostWithCustomEngine2[] cursor()
     * @method PostWithCustomEngine2|null|_IH_PostWithCustomEngine2_C|PostWithCustomEngine2[] find($id, array|string $columns = ['*'])
     * @method _IH_PostWithCustomEngine2_C|PostWithCustomEngine2[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method PostWithCustomEngine2|_IH_PostWithCustomEngine2_C|PostWithCustomEngine2[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method PostWithCustomEngine2|_IH_PostWithCustomEngine2_C|PostWithCustomEngine2[] findOrFail($id, array|string $columns = ['*'])
     * @method PostWithCustomEngine2|_IH_PostWithCustomEngine2_C|PostWithCustomEngine2[] findOrNew($id, array|string $columns = ['*'])
     * @method PostWithCustomEngine2 first(array|string $columns = ['*'])
     * @method PostWithCustomEngine2 firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method PostWithCustomEngine2 firstOrCreate(array $attributes = [], array $values = [])
     * @method PostWithCustomEngine2 firstOrFail(array|string $columns = ['*'])
     * @method PostWithCustomEngine2 firstOrNew(array $attributes = [], array $values = [])
     * @method PostWithCustomEngine2 firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method PostWithCustomEngine2 forceCreate(array $attributes)
     * @method _IH_PostWithCustomEngine2_C|PostWithCustomEngine2[] fromQuery(string $query, array $bindings = [])
     * @method _IH_PostWithCustomEngine2_C|PostWithCustomEngine2[] get(array|string $columns = ['*'])
     * @method PostWithCustomEngine2 getModel()
     * @method PostWithCustomEngine2[] getModels(array|string $columns = ['*'])
     * @method _IH_PostWithCustomEngine2_C|PostWithCustomEngine2[] hydrate(array $items)
     * @method _IH_PostWithCustomEngine2_C|PostWithCustomEngine2[] lazy(int $chunkSize = 1000)
     * @method _IH_PostWithCustomEngine2_C|PostWithCustomEngine2[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_PostWithCustomEngine2_C|PostWithCustomEngine2[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method PostWithCustomEngine2 make(array $attributes = [])
     * @method PostWithCustomEngine2 newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|PostWithCustomEngine2[]|_IH_PostWithCustomEngine2_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method PostWithCustomEngine2 restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|PostWithCustomEngine2[]|_IH_PostWithCustomEngine2_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method PostWithCustomEngine2 sole(array|string $columns = ['*'])
     * @method PostWithCustomEngine2 updateOrCreate(array $attributes, array $values = [])
     * @method _IH_PostWithCustomEngine2_QB findSimilarSlugs(string $attribute, array $config, string $slug)
     * @method _IH_PostWithCustomEngine2_QB withUniqueSlugConstraints(Model $model, string $attribute, array $config, string $slug)
     */
    class _IH_PostWithCustomEngine2_QB extends _BaseBuilder {}
    
    /**
     * @method PostWithCustomEngineOptions|null getOrPut($key, $value)
     * @method PostWithCustomEngineOptions|$this shift(int $count = 1)
     * @method PostWithCustomEngineOptions|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method PostWithCustomEngineOptions|$this pop(int $count = 1)
     * @method PostWithCustomEngineOptions|null pull($key, \Closure $default = null)
     * @method PostWithCustomEngineOptions|null last(callable $callback = null, \Closure $default = null)
     * @method PostWithCustomEngineOptions|$this random(callable|int|null $number = null)
     * @method PostWithCustomEngineOptions|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method PostWithCustomEngineOptions|null get($key, \Closure $default = null)
     * @method PostWithCustomEngineOptions|null first(callable $callback = null, \Closure $default = null)
     * @method PostWithCustomEngineOptions|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method PostWithCustomEngineOptions|null find($key, $default = null)
     * @method PostWithCustomEngineOptions[] all()
     */
    class _IH_PostWithCustomEngineOptions_C extends _BaseCollection {
        /**
         * @param int $size
         * @return PostWithCustomEngineOptions[][]|Collection<_IH_PostWithCustomEngineOptions_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_PostWithCustomEngineOptions_QB whereId($value)
     * @method _IH_PostWithCustomEngineOptions_QB whereTitle($value)
     * @method _IH_PostWithCustomEngineOptions_QB whereSubtitle($value)
     * @method _IH_PostWithCustomEngineOptions_QB whereSlug($value)
     * @method _IH_PostWithCustomEngineOptions_QB whereDummy($value)
     * @method _IH_PostWithCustomEngineOptions_QB whereAuthorId($value)
     * @method _IH_PostWithCustomEngineOptions_QB whereDeletedAt($value)
     * @method PostWithCustomEngineOptions baseSole(array|string $columns = ['*'])
     * @method PostWithCustomEngineOptions create(array $attributes = [])
     * @method _IH_PostWithCustomEngineOptions_C|PostWithCustomEngineOptions[] cursor()
     * @method PostWithCustomEngineOptions|null|_IH_PostWithCustomEngineOptions_C|PostWithCustomEngineOptions[] find($id, array|string $columns = ['*'])
     * @method _IH_PostWithCustomEngineOptions_C|PostWithCustomEngineOptions[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method PostWithCustomEngineOptions|_IH_PostWithCustomEngineOptions_C|PostWithCustomEngineOptions[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method PostWithCustomEngineOptions|_IH_PostWithCustomEngineOptions_C|PostWithCustomEngineOptions[] findOrFail($id, array|string $columns = ['*'])
     * @method PostWithCustomEngineOptions|_IH_PostWithCustomEngineOptions_C|PostWithCustomEngineOptions[] findOrNew($id, array|string $columns = ['*'])
     * @method PostWithCustomEngineOptions first(array|string $columns = ['*'])
     * @method PostWithCustomEngineOptions firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method PostWithCustomEngineOptions firstOrCreate(array $attributes = [], array $values = [])
     * @method PostWithCustomEngineOptions firstOrFail(array|string $columns = ['*'])
     * @method PostWithCustomEngineOptions firstOrNew(array $attributes = [], array $values = [])
     * @method PostWithCustomEngineOptions firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method PostWithCustomEngineOptions forceCreate(array $attributes)
     * @method _IH_PostWithCustomEngineOptions_C|PostWithCustomEngineOptions[] fromQuery(string $query, array $bindings = [])
     * @method _IH_PostWithCustomEngineOptions_C|PostWithCustomEngineOptions[] get(array|string $columns = ['*'])
     * @method PostWithCustomEngineOptions getModel()
     * @method PostWithCustomEngineOptions[] getModels(array|string $columns = ['*'])
     * @method _IH_PostWithCustomEngineOptions_C|PostWithCustomEngineOptions[] hydrate(array $items)
     * @method _IH_PostWithCustomEngineOptions_C|PostWithCustomEngineOptions[] lazy(int $chunkSize = 1000)
     * @method _IH_PostWithCustomEngineOptions_C|PostWithCustomEngineOptions[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_PostWithCustomEngineOptions_C|PostWithCustomEngineOptions[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method PostWithCustomEngineOptions make(array $attributes = [])
     * @method PostWithCustomEngineOptions newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|PostWithCustomEngineOptions[]|_IH_PostWithCustomEngineOptions_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method PostWithCustomEngineOptions restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|PostWithCustomEngineOptions[]|_IH_PostWithCustomEngineOptions_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method PostWithCustomEngineOptions sole(array|string $columns = ['*'])
     * @method PostWithCustomEngineOptions updateOrCreate(array $attributes, array $values = [])
     * @method _IH_PostWithCustomEngineOptions_QB findSimilarSlugs(string $attribute, array $config, string $slug)
     * @method _IH_PostWithCustomEngineOptions_QB withUniqueSlugConstraints(Model $model, string $attribute, array $config, string $slug)
     */
    class _IH_PostWithCustomEngineOptions_QB extends _BaseBuilder {}
    
    /**
     * @method PostWithCustomEngine|null getOrPut($key, $value)
     * @method PostWithCustomEngine|$this shift(int $count = 1)
     * @method PostWithCustomEngine|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method PostWithCustomEngine|$this pop(int $count = 1)
     * @method PostWithCustomEngine|null pull($key, \Closure $default = null)
     * @method PostWithCustomEngine|null last(callable $callback = null, \Closure $default = null)
     * @method PostWithCustomEngine|$this random(callable|int|null $number = null)
     * @method PostWithCustomEngine|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method PostWithCustomEngine|null get($key, \Closure $default = null)
     * @method PostWithCustomEngine|null first(callable $callback = null, \Closure $default = null)
     * @method PostWithCustomEngine|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method PostWithCustomEngine|null find($key, $default = null)
     * @method PostWithCustomEngine[] all()
     */
    class _IH_PostWithCustomEngine_C extends _BaseCollection {
        /**
         * @param int $size
         * @return PostWithCustomEngine[][]|Collection<_IH_PostWithCustomEngine_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_PostWithCustomEngine_QB whereId($value)
     * @method _IH_PostWithCustomEngine_QB whereTitle($value)
     * @method _IH_PostWithCustomEngine_QB whereSubtitle($value)
     * @method _IH_PostWithCustomEngine_QB whereSlug($value)
     * @method _IH_PostWithCustomEngine_QB whereDummy($value)
     * @method _IH_PostWithCustomEngine_QB whereAuthorId($value)
     * @method _IH_PostWithCustomEngine_QB whereDeletedAt($value)
     * @method PostWithCustomEngine baseSole(array|string $columns = ['*'])
     * @method PostWithCustomEngine create(array $attributes = [])
     * @method _IH_PostWithCustomEngine_C|PostWithCustomEngine[] cursor()
     * @method PostWithCustomEngine|null|_IH_PostWithCustomEngine_C|PostWithCustomEngine[] find($id, array|string $columns = ['*'])
     * @method _IH_PostWithCustomEngine_C|PostWithCustomEngine[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method PostWithCustomEngine|_IH_PostWithCustomEngine_C|PostWithCustomEngine[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method PostWithCustomEngine|_IH_PostWithCustomEngine_C|PostWithCustomEngine[] findOrFail($id, array|string $columns = ['*'])
     * @method PostWithCustomEngine|_IH_PostWithCustomEngine_C|PostWithCustomEngine[] findOrNew($id, array|string $columns = ['*'])
     * @method PostWithCustomEngine first(array|string $columns = ['*'])
     * @method PostWithCustomEngine firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method PostWithCustomEngine firstOrCreate(array $attributes = [], array $values = [])
     * @method PostWithCustomEngine firstOrFail(array|string $columns = ['*'])
     * @method PostWithCustomEngine firstOrNew(array $attributes = [], array $values = [])
     * @method PostWithCustomEngine firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method PostWithCustomEngine forceCreate(array $attributes)
     * @method _IH_PostWithCustomEngine_C|PostWithCustomEngine[] fromQuery(string $query, array $bindings = [])
     * @method _IH_PostWithCustomEngine_C|PostWithCustomEngine[] get(array|string $columns = ['*'])
     * @method PostWithCustomEngine getModel()
     * @method PostWithCustomEngine[] getModels(array|string $columns = ['*'])
     * @method _IH_PostWithCustomEngine_C|PostWithCustomEngine[] hydrate(array $items)
     * @method _IH_PostWithCustomEngine_C|PostWithCustomEngine[] lazy(int $chunkSize = 1000)
     * @method _IH_PostWithCustomEngine_C|PostWithCustomEngine[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_PostWithCustomEngine_C|PostWithCustomEngine[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method PostWithCustomEngine make(array $attributes = [])
     * @method PostWithCustomEngine newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|PostWithCustomEngine[]|_IH_PostWithCustomEngine_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method PostWithCustomEngine restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|PostWithCustomEngine[]|_IH_PostWithCustomEngine_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method PostWithCustomEngine sole(array|string $columns = ['*'])
     * @method PostWithCustomEngine updateOrCreate(array $attributes, array $values = [])
     * @method _IH_PostWithCustomEngine_QB findSimilarSlugs(string $attribute, array $config, string $slug)
     * @method _IH_PostWithCustomEngine_QB withUniqueSlugConstraints(Model $model, string $attribute, array $config, string $slug)
     */
    class _IH_PostWithCustomEngine_QB extends _BaseBuilder {}
    
    /**
     * @method PostWithCustomMethod|null getOrPut($key, $value)
     * @method PostWithCustomMethod|$this shift(int $count = 1)
     * @method PostWithCustomMethod|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method PostWithCustomMethod|$this pop(int $count = 1)
     * @method PostWithCustomMethod|null pull($key, \Closure $default = null)
     * @method PostWithCustomMethod|null last(callable $callback = null, \Closure $default = null)
     * @method PostWithCustomMethod|$this random(callable|int|null $number = null)
     * @method PostWithCustomMethod|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method PostWithCustomMethod|null get($key, \Closure $default = null)
     * @method PostWithCustomMethod|null first(callable $callback = null, \Closure $default = null)
     * @method PostWithCustomMethod|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method PostWithCustomMethod|null find($key, $default = null)
     * @method PostWithCustomMethod[] all()
     */
    class _IH_PostWithCustomMethod_C extends _BaseCollection {
        /**
         * @param int $size
         * @return PostWithCustomMethod[][]|Collection<_IH_PostWithCustomMethod_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_PostWithCustomMethod_QB whereId($value)
     * @method _IH_PostWithCustomMethod_QB whereTitle($value)
     * @method _IH_PostWithCustomMethod_QB whereSubtitle($value)
     * @method _IH_PostWithCustomMethod_QB whereSlug($value)
     * @method _IH_PostWithCustomMethod_QB whereDummy($value)
     * @method _IH_PostWithCustomMethod_QB whereAuthorId($value)
     * @method _IH_PostWithCustomMethod_QB whereDeletedAt($value)
     * @method PostWithCustomMethod baseSole(array|string $columns = ['*'])
     * @method PostWithCustomMethod create(array $attributes = [])
     * @method _IH_PostWithCustomMethod_C|PostWithCustomMethod[] cursor()
     * @method PostWithCustomMethod|null|_IH_PostWithCustomMethod_C|PostWithCustomMethod[] find($id, array|string $columns = ['*'])
     * @method _IH_PostWithCustomMethod_C|PostWithCustomMethod[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method PostWithCustomMethod|_IH_PostWithCustomMethod_C|PostWithCustomMethod[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method PostWithCustomMethod|_IH_PostWithCustomMethod_C|PostWithCustomMethod[] findOrFail($id, array|string $columns = ['*'])
     * @method PostWithCustomMethod|_IH_PostWithCustomMethod_C|PostWithCustomMethod[] findOrNew($id, array|string $columns = ['*'])
     * @method PostWithCustomMethod first(array|string $columns = ['*'])
     * @method PostWithCustomMethod firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method PostWithCustomMethod firstOrCreate(array $attributes = [], array $values = [])
     * @method PostWithCustomMethod firstOrFail(array|string $columns = ['*'])
     * @method PostWithCustomMethod firstOrNew(array $attributes = [], array $values = [])
     * @method PostWithCustomMethod firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method PostWithCustomMethod forceCreate(array $attributes)
     * @method _IH_PostWithCustomMethod_C|PostWithCustomMethod[] fromQuery(string $query, array $bindings = [])
     * @method _IH_PostWithCustomMethod_C|PostWithCustomMethod[] get(array|string $columns = ['*'])
     * @method PostWithCustomMethod getModel()
     * @method PostWithCustomMethod[] getModels(array|string $columns = ['*'])
     * @method _IH_PostWithCustomMethod_C|PostWithCustomMethod[] hydrate(array $items)
     * @method _IH_PostWithCustomMethod_C|PostWithCustomMethod[] lazy(int $chunkSize = 1000)
     * @method _IH_PostWithCustomMethod_C|PostWithCustomMethod[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_PostWithCustomMethod_C|PostWithCustomMethod[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method PostWithCustomMethod make(array $attributes = [])
     * @method PostWithCustomMethod newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|PostWithCustomMethod[]|_IH_PostWithCustomMethod_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method PostWithCustomMethod restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|PostWithCustomMethod[]|_IH_PostWithCustomMethod_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method PostWithCustomMethod sole(array|string $columns = ['*'])
     * @method PostWithCustomMethod updateOrCreate(array $attributes, array $values = [])
     * @method _IH_PostWithCustomMethod_QB findSimilarSlugs(string $attribute, array $config, string $slug)
     * @method _IH_PostWithCustomMethod_QB withUniqueSlugConstraints(Model $model, string $attribute, array $config, string $slug)
     */
    class _IH_PostWithCustomMethod_QB extends _BaseBuilder {}
    
    /**
     * @method PostWithCustomSeparator|null getOrPut($key, $value)
     * @method PostWithCustomSeparator|$this shift(int $count = 1)
     * @method PostWithCustomSeparator|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method PostWithCustomSeparator|$this pop(int $count = 1)
     * @method PostWithCustomSeparator|null pull($key, \Closure $default = null)
     * @method PostWithCustomSeparator|null last(callable $callback = null, \Closure $default = null)
     * @method PostWithCustomSeparator|$this random(callable|int|null $number = null)
     * @method PostWithCustomSeparator|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method PostWithCustomSeparator|null get($key, \Closure $default = null)
     * @method PostWithCustomSeparator|null first(callable $callback = null, \Closure $default = null)
     * @method PostWithCustomSeparator|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method PostWithCustomSeparator|null find($key, $default = null)
     * @method PostWithCustomSeparator[] all()
     */
    class _IH_PostWithCustomSeparator_C extends _BaseCollection {
        /**
         * @param int $size
         * @return PostWithCustomSeparator[][]|Collection<_IH_PostWithCustomSeparator_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_PostWithCustomSeparator_QB whereId($value)
     * @method _IH_PostWithCustomSeparator_QB whereTitle($value)
     * @method _IH_PostWithCustomSeparator_QB whereSubtitle($value)
     * @method _IH_PostWithCustomSeparator_QB whereSlug($value)
     * @method _IH_PostWithCustomSeparator_QB whereDummy($value)
     * @method _IH_PostWithCustomSeparator_QB whereAuthorId($value)
     * @method _IH_PostWithCustomSeparator_QB whereDeletedAt($value)
     * @method PostWithCustomSeparator baseSole(array|string $columns = ['*'])
     * @method PostWithCustomSeparator create(array $attributes = [])
     * @method _IH_PostWithCustomSeparator_C|PostWithCustomSeparator[] cursor()
     * @method PostWithCustomSeparator|null|_IH_PostWithCustomSeparator_C|PostWithCustomSeparator[] find($id, array|string $columns = ['*'])
     * @method _IH_PostWithCustomSeparator_C|PostWithCustomSeparator[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method PostWithCustomSeparator|_IH_PostWithCustomSeparator_C|PostWithCustomSeparator[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method PostWithCustomSeparator|_IH_PostWithCustomSeparator_C|PostWithCustomSeparator[] findOrFail($id, array|string $columns = ['*'])
     * @method PostWithCustomSeparator|_IH_PostWithCustomSeparator_C|PostWithCustomSeparator[] findOrNew($id, array|string $columns = ['*'])
     * @method PostWithCustomSeparator first(array|string $columns = ['*'])
     * @method PostWithCustomSeparator firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method PostWithCustomSeparator firstOrCreate(array $attributes = [], array $values = [])
     * @method PostWithCustomSeparator firstOrFail(array|string $columns = ['*'])
     * @method PostWithCustomSeparator firstOrNew(array $attributes = [], array $values = [])
     * @method PostWithCustomSeparator firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method PostWithCustomSeparator forceCreate(array $attributes)
     * @method _IH_PostWithCustomSeparator_C|PostWithCustomSeparator[] fromQuery(string $query, array $bindings = [])
     * @method _IH_PostWithCustomSeparator_C|PostWithCustomSeparator[] get(array|string $columns = ['*'])
     * @method PostWithCustomSeparator getModel()
     * @method PostWithCustomSeparator[] getModels(array|string $columns = ['*'])
     * @method _IH_PostWithCustomSeparator_C|PostWithCustomSeparator[] hydrate(array $items)
     * @method _IH_PostWithCustomSeparator_C|PostWithCustomSeparator[] lazy(int $chunkSize = 1000)
     * @method _IH_PostWithCustomSeparator_C|PostWithCustomSeparator[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_PostWithCustomSeparator_C|PostWithCustomSeparator[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method PostWithCustomSeparator make(array $attributes = [])
     * @method PostWithCustomSeparator newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|PostWithCustomSeparator[]|_IH_PostWithCustomSeparator_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method PostWithCustomSeparator restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|PostWithCustomSeparator[]|_IH_PostWithCustomSeparator_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method PostWithCustomSeparator sole(array|string $columns = ['*'])
     * @method PostWithCustomSeparator updateOrCreate(array $attributes, array $values = [])
     * @method _IH_PostWithCustomSeparator_QB findSimilarSlugs(string $attribute, array $config, string $slug)
     * @method _IH_PostWithCustomSeparator_QB withUniqueSlugConstraints(Model $model, string $attribute, array $config, string $slug)
     */
    class _IH_PostWithCustomSeparator_QB extends _BaseBuilder {}
    
    /**
     * @method PostWithCustomSource|null getOrPut($key, $value)
     * @method PostWithCustomSource|$this shift(int $count = 1)
     * @method PostWithCustomSource|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method PostWithCustomSource|$this pop(int $count = 1)
     * @method PostWithCustomSource|null pull($key, \Closure $default = null)
     * @method PostWithCustomSource|null last(callable $callback = null, \Closure $default = null)
     * @method PostWithCustomSource|$this random(callable|int|null $number = null)
     * @method PostWithCustomSource|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method PostWithCustomSource|null get($key, \Closure $default = null)
     * @method PostWithCustomSource|null first(callable $callback = null, \Closure $default = null)
     * @method PostWithCustomSource|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method PostWithCustomSource|null find($key, $default = null)
     * @method PostWithCustomSource[] all()
     */
    class _IH_PostWithCustomSource_C extends _BaseCollection {
        /**
         * @param int $size
         * @return PostWithCustomSource[][]|Collection<_IH_PostWithCustomSource_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_PostWithCustomSource_QB whereId($value)
     * @method _IH_PostWithCustomSource_QB whereTitle($value)
     * @method _IH_PostWithCustomSource_QB whereSubtitle($value)
     * @method _IH_PostWithCustomSource_QB whereSlug($value)
     * @method _IH_PostWithCustomSource_QB whereDummy($value)
     * @method _IH_PostWithCustomSource_QB whereAuthorId($value)
     * @method _IH_PostWithCustomSource_QB whereDeletedAt($value)
     * @method PostWithCustomSource baseSole(array|string $columns = ['*'])
     * @method PostWithCustomSource create(array $attributes = [])
     * @method _IH_PostWithCustomSource_C|PostWithCustomSource[] cursor()
     * @method PostWithCustomSource|null|_IH_PostWithCustomSource_C|PostWithCustomSource[] find($id, array|string $columns = ['*'])
     * @method _IH_PostWithCustomSource_C|PostWithCustomSource[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method PostWithCustomSource|_IH_PostWithCustomSource_C|PostWithCustomSource[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method PostWithCustomSource|_IH_PostWithCustomSource_C|PostWithCustomSource[] findOrFail($id, array|string $columns = ['*'])
     * @method PostWithCustomSource|_IH_PostWithCustomSource_C|PostWithCustomSource[] findOrNew($id, array|string $columns = ['*'])
     * @method PostWithCustomSource first(array|string $columns = ['*'])
     * @method PostWithCustomSource firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method PostWithCustomSource firstOrCreate(array $attributes = [], array $values = [])
     * @method PostWithCustomSource firstOrFail(array|string $columns = ['*'])
     * @method PostWithCustomSource firstOrNew(array $attributes = [], array $values = [])
     * @method PostWithCustomSource firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method PostWithCustomSource forceCreate(array $attributes)
     * @method _IH_PostWithCustomSource_C|PostWithCustomSource[] fromQuery(string $query, array $bindings = [])
     * @method _IH_PostWithCustomSource_C|PostWithCustomSource[] get(array|string $columns = ['*'])
     * @method PostWithCustomSource getModel()
     * @method PostWithCustomSource[] getModels(array|string $columns = ['*'])
     * @method _IH_PostWithCustomSource_C|PostWithCustomSource[] hydrate(array $items)
     * @method _IH_PostWithCustomSource_C|PostWithCustomSource[] lazy(int $chunkSize = 1000)
     * @method _IH_PostWithCustomSource_C|PostWithCustomSource[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_PostWithCustomSource_C|PostWithCustomSource[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method PostWithCustomSource make(array $attributes = [])
     * @method PostWithCustomSource newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|PostWithCustomSource[]|_IH_PostWithCustomSource_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method PostWithCustomSource restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|PostWithCustomSource[]|_IH_PostWithCustomSource_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method PostWithCustomSource sole(array|string $columns = ['*'])
     * @method PostWithCustomSource updateOrCreate(array $attributes, array $values = [])
     * @method _IH_PostWithCustomSource_QB findSimilarSlugs(string $attribute, array $config, string $slug)
     * @method _IH_PostWithCustomSource_QB withUniqueSlugConstraints(Model $model, string $attribute, array $config, string $slug)
     */
    class _IH_PostWithCustomSource_QB extends _BaseBuilder {}
    
    /**
     * @method PostWithCustomSuffix|null getOrPut($key, $value)
     * @method PostWithCustomSuffix|$this shift(int $count = 1)
     * @method PostWithCustomSuffix|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method PostWithCustomSuffix|$this pop(int $count = 1)
     * @method PostWithCustomSuffix|null pull($key, \Closure $default = null)
     * @method PostWithCustomSuffix|null last(callable $callback = null, \Closure $default = null)
     * @method PostWithCustomSuffix|$this random(callable|int|null $number = null)
     * @method PostWithCustomSuffix|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method PostWithCustomSuffix|null get($key, \Closure $default = null)
     * @method PostWithCustomSuffix|null first(callable $callback = null, \Closure $default = null)
     * @method PostWithCustomSuffix|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method PostWithCustomSuffix|null find($key, $default = null)
     * @method PostWithCustomSuffix[] all()
     */
    class _IH_PostWithCustomSuffix_C extends _BaseCollection {
        /**
         * @param int $size
         * @return PostWithCustomSuffix[][]|Collection<_IH_PostWithCustomSuffix_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_PostWithCustomSuffix_QB whereId($value)
     * @method _IH_PostWithCustomSuffix_QB whereTitle($value)
     * @method _IH_PostWithCustomSuffix_QB whereSubtitle($value)
     * @method _IH_PostWithCustomSuffix_QB whereSlug($value)
     * @method _IH_PostWithCustomSuffix_QB whereDummy($value)
     * @method _IH_PostWithCustomSuffix_QB whereAuthorId($value)
     * @method _IH_PostWithCustomSuffix_QB whereDeletedAt($value)
     * @method PostWithCustomSuffix baseSole(array|string $columns = ['*'])
     * @method PostWithCustomSuffix create(array $attributes = [])
     * @method _IH_PostWithCustomSuffix_C|PostWithCustomSuffix[] cursor()
     * @method PostWithCustomSuffix|null|_IH_PostWithCustomSuffix_C|PostWithCustomSuffix[] find($id, array|string $columns = ['*'])
     * @method _IH_PostWithCustomSuffix_C|PostWithCustomSuffix[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method PostWithCustomSuffix|_IH_PostWithCustomSuffix_C|PostWithCustomSuffix[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method PostWithCustomSuffix|_IH_PostWithCustomSuffix_C|PostWithCustomSuffix[] findOrFail($id, array|string $columns = ['*'])
     * @method PostWithCustomSuffix|_IH_PostWithCustomSuffix_C|PostWithCustomSuffix[] findOrNew($id, array|string $columns = ['*'])
     * @method PostWithCustomSuffix first(array|string $columns = ['*'])
     * @method PostWithCustomSuffix firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method PostWithCustomSuffix firstOrCreate(array $attributes = [], array $values = [])
     * @method PostWithCustomSuffix firstOrFail(array|string $columns = ['*'])
     * @method PostWithCustomSuffix firstOrNew(array $attributes = [], array $values = [])
     * @method PostWithCustomSuffix firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method PostWithCustomSuffix forceCreate(array $attributes)
     * @method _IH_PostWithCustomSuffix_C|PostWithCustomSuffix[] fromQuery(string $query, array $bindings = [])
     * @method _IH_PostWithCustomSuffix_C|PostWithCustomSuffix[] get(array|string $columns = ['*'])
     * @method PostWithCustomSuffix getModel()
     * @method PostWithCustomSuffix[] getModels(array|string $columns = ['*'])
     * @method _IH_PostWithCustomSuffix_C|PostWithCustomSuffix[] hydrate(array $items)
     * @method _IH_PostWithCustomSuffix_C|PostWithCustomSuffix[] lazy(int $chunkSize = 1000)
     * @method _IH_PostWithCustomSuffix_C|PostWithCustomSuffix[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_PostWithCustomSuffix_C|PostWithCustomSuffix[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method PostWithCustomSuffix make(array $attributes = [])
     * @method PostWithCustomSuffix newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|PostWithCustomSuffix[]|_IH_PostWithCustomSuffix_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method PostWithCustomSuffix restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|PostWithCustomSuffix[]|_IH_PostWithCustomSuffix_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method PostWithCustomSuffix sole(array|string $columns = ['*'])
     * @method PostWithCustomSuffix updateOrCreate(array $attributes, array $values = [])
     * @method _IH_PostWithCustomSuffix_QB findSimilarSlugs(string $attribute, array $config, string $slug)
     * @method _IH_PostWithCustomSuffix_QB withUniqueSlugConstraints(Model $model, string $attribute, array $config, string $slug)
     */
    class _IH_PostWithCustomSuffix_QB extends _BaseBuilder {}
    
    /**
     * @method PostWithEmptySeparator|null getOrPut($key, $value)
     * @method PostWithEmptySeparator|$this shift(int $count = 1)
     * @method PostWithEmptySeparator|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method PostWithEmptySeparator|$this pop(int $count = 1)
     * @method PostWithEmptySeparator|null pull($key, \Closure $default = null)
     * @method PostWithEmptySeparator|null last(callable $callback = null, \Closure $default = null)
     * @method PostWithEmptySeparator|$this random(callable|int|null $number = null)
     * @method PostWithEmptySeparator|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method PostWithEmptySeparator|null get($key, \Closure $default = null)
     * @method PostWithEmptySeparator|null first(callable $callback = null, \Closure $default = null)
     * @method PostWithEmptySeparator|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method PostWithEmptySeparator|null find($key, $default = null)
     * @method PostWithEmptySeparator[] all()
     */
    class _IH_PostWithEmptySeparator_C extends _BaseCollection {
        /**
         * @param int $size
         * @return PostWithEmptySeparator[][]|Collection<_IH_PostWithEmptySeparator_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_PostWithEmptySeparator_QB whereId($value)
     * @method _IH_PostWithEmptySeparator_QB whereTitle($value)
     * @method _IH_PostWithEmptySeparator_QB whereSubtitle($value)
     * @method _IH_PostWithEmptySeparator_QB whereSlug($value)
     * @method _IH_PostWithEmptySeparator_QB whereDummy($value)
     * @method _IH_PostWithEmptySeparator_QB whereAuthorId($value)
     * @method _IH_PostWithEmptySeparator_QB whereDeletedAt($value)
     * @method PostWithEmptySeparator baseSole(array|string $columns = ['*'])
     * @method PostWithEmptySeparator create(array $attributes = [])
     * @method _IH_PostWithEmptySeparator_C|PostWithEmptySeparator[] cursor()
     * @method PostWithEmptySeparator|null|_IH_PostWithEmptySeparator_C|PostWithEmptySeparator[] find($id, array|string $columns = ['*'])
     * @method _IH_PostWithEmptySeparator_C|PostWithEmptySeparator[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method PostWithEmptySeparator|_IH_PostWithEmptySeparator_C|PostWithEmptySeparator[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method PostWithEmptySeparator|_IH_PostWithEmptySeparator_C|PostWithEmptySeparator[] findOrFail($id, array|string $columns = ['*'])
     * @method PostWithEmptySeparator|_IH_PostWithEmptySeparator_C|PostWithEmptySeparator[] findOrNew($id, array|string $columns = ['*'])
     * @method PostWithEmptySeparator first(array|string $columns = ['*'])
     * @method PostWithEmptySeparator firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method PostWithEmptySeparator firstOrCreate(array $attributes = [], array $values = [])
     * @method PostWithEmptySeparator firstOrFail(array|string $columns = ['*'])
     * @method PostWithEmptySeparator firstOrNew(array $attributes = [], array $values = [])
     * @method PostWithEmptySeparator firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method PostWithEmptySeparator forceCreate(array $attributes)
     * @method _IH_PostWithEmptySeparator_C|PostWithEmptySeparator[] fromQuery(string $query, array $bindings = [])
     * @method _IH_PostWithEmptySeparator_C|PostWithEmptySeparator[] get(array|string $columns = ['*'])
     * @method PostWithEmptySeparator getModel()
     * @method PostWithEmptySeparator[] getModels(array|string $columns = ['*'])
     * @method _IH_PostWithEmptySeparator_C|PostWithEmptySeparator[] hydrate(array $items)
     * @method _IH_PostWithEmptySeparator_C|PostWithEmptySeparator[] lazy(int $chunkSize = 1000)
     * @method _IH_PostWithEmptySeparator_C|PostWithEmptySeparator[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_PostWithEmptySeparator_C|PostWithEmptySeparator[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method PostWithEmptySeparator make(array $attributes = [])
     * @method PostWithEmptySeparator newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|PostWithEmptySeparator[]|_IH_PostWithEmptySeparator_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method PostWithEmptySeparator restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|PostWithEmptySeparator[]|_IH_PostWithEmptySeparator_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method PostWithEmptySeparator sole(array|string $columns = ['*'])
     * @method PostWithEmptySeparator updateOrCreate(array $attributes, array $values = [])
     * @method _IH_PostWithEmptySeparator_QB findSimilarSlugs(string $attribute, array $config, string $slug)
     * @method _IH_PostWithEmptySeparator_QB withUniqueSlugConstraints(Model $model, string $attribute, array $config, string $slug)
     */
    class _IH_PostWithEmptySeparator_QB extends _BaseBuilder {}
    
    /**
     * @method PostWithFirstUniqueSuffix|null getOrPut($key, $value)
     * @method PostWithFirstUniqueSuffix|$this shift(int $count = 1)
     * @method PostWithFirstUniqueSuffix|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method PostWithFirstUniqueSuffix|$this pop(int $count = 1)
     * @method PostWithFirstUniqueSuffix|null pull($key, \Closure $default = null)
     * @method PostWithFirstUniqueSuffix|null last(callable $callback = null, \Closure $default = null)
     * @method PostWithFirstUniqueSuffix|$this random(callable|int|null $number = null)
     * @method PostWithFirstUniqueSuffix|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method PostWithFirstUniqueSuffix|null get($key, \Closure $default = null)
     * @method PostWithFirstUniqueSuffix|null first(callable $callback = null, \Closure $default = null)
     * @method PostWithFirstUniqueSuffix|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method PostWithFirstUniqueSuffix|null find($key, $default = null)
     * @method PostWithFirstUniqueSuffix[] all()
     */
    class _IH_PostWithFirstUniqueSuffix_C extends _BaseCollection {
        /**
         * @param int $size
         * @return PostWithFirstUniqueSuffix[][]|Collection<_IH_PostWithFirstUniqueSuffix_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_PostWithFirstUniqueSuffix_QB whereId($value)
     * @method _IH_PostWithFirstUniqueSuffix_QB whereTitle($value)
     * @method _IH_PostWithFirstUniqueSuffix_QB whereSubtitle($value)
     * @method _IH_PostWithFirstUniqueSuffix_QB whereSlug($value)
     * @method _IH_PostWithFirstUniqueSuffix_QB whereDummy($value)
     * @method _IH_PostWithFirstUniqueSuffix_QB whereAuthorId($value)
     * @method _IH_PostWithFirstUniqueSuffix_QB whereDeletedAt($value)
     * @method PostWithFirstUniqueSuffix baseSole(array|string $columns = ['*'])
     * @method PostWithFirstUniqueSuffix create(array $attributes = [])
     * @method _IH_PostWithFirstUniqueSuffix_C|PostWithFirstUniqueSuffix[] cursor()
     * @method PostWithFirstUniqueSuffix|null|_IH_PostWithFirstUniqueSuffix_C|PostWithFirstUniqueSuffix[] find($id, array|string $columns = ['*'])
     * @method _IH_PostWithFirstUniqueSuffix_C|PostWithFirstUniqueSuffix[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method PostWithFirstUniqueSuffix|_IH_PostWithFirstUniqueSuffix_C|PostWithFirstUniqueSuffix[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method PostWithFirstUniqueSuffix|_IH_PostWithFirstUniqueSuffix_C|PostWithFirstUniqueSuffix[] findOrFail($id, array|string $columns = ['*'])
     * @method PostWithFirstUniqueSuffix|_IH_PostWithFirstUniqueSuffix_C|PostWithFirstUniqueSuffix[] findOrNew($id, array|string $columns = ['*'])
     * @method PostWithFirstUniqueSuffix first(array|string $columns = ['*'])
     * @method PostWithFirstUniqueSuffix firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method PostWithFirstUniqueSuffix firstOrCreate(array $attributes = [], array $values = [])
     * @method PostWithFirstUniqueSuffix firstOrFail(array|string $columns = ['*'])
     * @method PostWithFirstUniqueSuffix firstOrNew(array $attributes = [], array $values = [])
     * @method PostWithFirstUniqueSuffix firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method PostWithFirstUniqueSuffix forceCreate(array $attributes)
     * @method _IH_PostWithFirstUniqueSuffix_C|PostWithFirstUniqueSuffix[] fromQuery(string $query, array $bindings = [])
     * @method _IH_PostWithFirstUniqueSuffix_C|PostWithFirstUniqueSuffix[] get(array|string $columns = ['*'])
     * @method PostWithFirstUniqueSuffix getModel()
     * @method PostWithFirstUniqueSuffix[] getModels(array|string $columns = ['*'])
     * @method _IH_PostWithFirstUniqueSuffix_C|PostWithFirstUniqueSuffix[] hydrate(array $items)
     * @method _IH_PostWithFirstUniqueSuffix_C|PostWithFirstUniqueSuffix[] lazy(int $chunkSize = 1000)
     * @method _IH_PostWithFirstUniqueSuffix_C|PostWithFirstUniqueSuffix[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_PostWithFirstUniqueSuffix_C|PostWithFirstUniqueSuffix[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method PostWithFirstUniqueSuffix make(array $attributes = [])
     * @method PostWithFirstUniqueSuffix newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|PostWithFirstUniqueSuffix[]|_IH_PostWithFirstUniqueSuffix_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method PostWithFirstUniqueSuffix restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|PostWithFirstUniqueSuffix[]|_IH_PostWithFirstUniqueSuffix_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method PostWithFirstUniqueSuffix sole(array|string $columns = ['*'])
     * @method PostWithFirstUniqueSuffix updateOrCreate(array $attributes, array $values = [])
     * @method _IH_PostWithFirstUniqueSuffix_QB findSimilarSlugs(string $attribute, array $config, string $slug)
     * @method _IH_PostWithFirstUniqueSuffix_QB withUniqueSlugConstraints(Model $model, string $attribute, array $config, string $slug)
     */
    class _IH_PostWithFirstUniqueSuffix_QB extends _BaseBuilder {}
    
    /**
     * @method PostWithForeignRuleset|null getOrPut($key, $value)
     * @method PostWithForeignRuleset|$this shift(int $count = 1)
     * @method PostWithForeignRuleset|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method PostWithForeignRuleset|$this pop(int $count = 1)
     * @method PostWithForeignRuleset|null pull($key, \Closure $default = null)
     * @method PostWithForeignRuleset|null last(callable $callback = null, \Closure $default = null)
     * @method PostWithForeignRuleset|$this random(callable|int|null $number = null)
     * @method PostWithForeignRuleset|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method PostWithForeignRuleset|null get($key, \Closure $default = null)
     * @method PostWithForeignRuleset|null first(callable $callback = null, \Closure $default = null)
     * @method PostWithForeignRuleset|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method PostWithForeignRuleset|null find($key, $default = null)
     * @method PostWithForeignRuleset[] all()
     */
    class _IH_PostWithForeignRuleset_C extends _BaseCollection {
        /**
         * @param int $size
         * @return PostWithForeignRuleset[][]|Collection<_IH_PostWithForeignRuleset_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_PostWithForeignRuleset_QB whereId($value)
     * @method _IH_PostWithForeignRuleset_QB whereTitle($value)
     * @method _IH_PostWithForeignRuleset_QB whereSubtitle($value)
     * @method _IH_PostWithForeignRuleset_QB whereSlug($value)
     * @method _IH_PostWithForeignRuleset_QB whereDummy($value)
     * @method _IH_PostWithForeignRuleset_QB whereAuthorId($value)
     * @method _IH_PostWithForeignRuleset_QB whereDeletedAt($value)
     * @method PostWithForeignRuleset baseSole(array|string $columns = ['*'])
     * @method PostWithForeignRuleset create(array $attributes = [])
     * @method _IH_PostWithForeignRuleset_C|PostWithForeignRuleset[] cursor()
     * @method PostWithForeignRuleset|null|_IH_PostWithForeignRuleset_C|PostWithForeignRuleset[] find($id, array|string $columns = ['*'])
     * @method _IH_PostWithForeignRuleset_C|PostWithForeignRuleset[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method PostWithForeignRuleset|_IH_PostWithForeignRuleset_C|PostWithForeignRuleset[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method PostWithForeignRuleset|_IH_PostWithForeignRuleset_C|PostWithForeignRuleset[] findOrFail($id, array|string $columns = ['*'])
     * @method PostWithForeignRuleset|_IH_PostWithForeignRuleset_C|PostWithForeignRuleset[] findOrNew($id, array|string $columns = ['*'])
     * @method PostWithForeignRuleset first(array|string $columns = ['*'])
     * @method PostWithForeignRuleset firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method PostWithForeignRuleset firstOrCreate(array $attributes = [], array $values = [])
     * @method PostWithForeignRuleset firstOrFail(array|string $columns = ['*'])
     * @method PostWithForeignRuleset firstOrNew(array $attributes = [], array $values = [])
     * @method PostWithForeignRuleset firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method PostWithForeignRuleset forceCreate(array $attributes)
     * @method _IH_PostWithForeignRuleset_C|PostWithForeignRuleset[] fromQuery(string $query, array $bindings = [])
     * @method _IH_PostWithForeignRuleset_C|PostWithForeignRuleset[] get(array|string $columns = ['*'])
     * @method PostWithForeignRuleset getModel()
     * @method PostWithForeignRuleset[] getModels(array|string $columns = ['*'])
     * @method _IH_PostWithForeignRuleset_C|PostWithForeignRuleset[] hydrate(array $items)
     * @method _IH_PostWithForeignRuleset_C|PostWithForeignRuleset[] lazy(int $chunkSize = 1000)
     * @method _IH_PostWithForeignRuleset_C|PostWithForeignRuleset[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_PostWithForeignRuleset_C|PostWithForeignRuleset[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method PostWithForeignRuleset make(array $attributes = [])
     * @method PostWithForeignRuleset newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|PostWithForeignRuleset[]|_IH_PostWithForeignRuleset_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method PostWithForeignRuleset restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|PostWithForeignRuleset[]|_IH_PostWithForeignRuleset_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method PostWithForeignRuleset sole(array|string $columns = ['*'])
     * @method PostWithForeignRuleset updateOrCreate(array $attributes, array $values = [])
     * @method _IH_PostWithForeignRuleset_QB findSimilarSlugs(string $attribute, array $config, string $slug)
     * @method _IH_PostWithForeignRuleset_QB withUniqueSlugConstraints(Model $model, string $attribute, array $config, string $slug)
     */
    class _IH_PostWithForeignRuleset_QB extends _BaseBuilder {}
    
    /**
     * @method PostWithIdSourceOnSaved|null getOrPut($key, $value)
     * @method PostWithIdSourceOnSaved|$this shift(int $count = 1)
     * @method PostWithIdSourceOnSaved|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method PostWithIdSourceOnSaved|$this pop(int $count = 1)
     * @method PostWithIdSourceOnSaved|null pull($key, \Closure $default = null)
     * @method PostWithIdSourceOnSaved|null last(callable $callback = null, \Closure $default = null)
     * @method PostWithIdSourceOnSaved|$this random(callable|int|null $number = null)
     * @method PostWithIdSourceOnSaved|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method PostWithIdSourceOnSaved|null get($key, \Closure $default = null)
     * @method PostWithIdSourceOnSaved|null first(callable $callback = null, \Closure $default = null)
     * @method PostWithIdSourceOnSaved|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method PostWithIdSourceOnSaved|null find($key, $default = null)
     * @method PostWithIdSourceOnSaved[] all()
     */
    class _IH_PostWithIdSourceOnSaved_C extends _BaseCollection {
        /**
         * @param int $size
         * @return PostWithIdSourceOnSaved[][]|Collection<_IH_PostWithIdSourceOnSaved_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_PostWithIdSourceOnSaved_QB whereId($value)
     * @method _IH_PostWithIdSourceOnSaved_QB whereTitle($value)
     * @method _IH_PostWithIdSourceOnSaved_QB whereSubtitle($value)
     * @method _IH_PostWithIdSourceOnSaved_QB whereSlug($value)
     * @method _IH_PostWithIdSourceOnSaved_QB whereDummy($value)
     * @method _IH_PostWithIdSourceOnSaved_QB whereAuthorId($value)
     * @method _IH_PostWithIdSourceOnSaved_QB whereDeletedAt($value)
     * @method PostWithIdSourceOnSaved baseSole(array|string $columns = ['*'])
     * @method PostWithIdSourceOnSaved create(array $attributes = [])
     * @method _IH_PostWithIdSourceOnSaved_C|PostWithIdSourceOnSaved[] cursor()
     * @method PostWithIdSourceOnSaved|null|_IH_PostWithIdSourceOnSaved_C|PostWithIdSourceOnSaved[] find($id, array|string $columns = ['*'])
     * @method _IH_PostWithIdSourceOnSaved_C|PostWithIdSourceOnSaved[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method PostWithIdSourceOnSaved|_IH_PostWithIdSourceOnSaved_C|PostWithIdSourceOnSaved[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method PostWithIdSourceOnSaved|_IH_PostWithIdSourceOnSaved_C|PostWithIdSourceOnSaved[] findOrFail($id, array|string $columns = ['*'])
     * @method PostWithIdSourceOnSaved|_IH_PostWithIdSourceOnSaved_C|PostWithIdSourceOnSaved[] findOrNew($id, array|string $columns = ['*'])
     * @method PostWithIdSourceOnSaved first(array|string $columns = ['*'])
     * @method PostWithIdSourceOnSaved firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method PostWithIdSourceOnSaved firstOrCreate(array $attributes = [], array $values = [])
     * @method PostWithIdSourceOnSaved firstOrFail(array|string $columns = ['*'])
     * @method PostWithIdSourceOnSaved firstOrNew(array $attributes = [], array $values = [])
     * @method PostWithIdSourceOnSaved firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method PostWithIdSourceOnSaved forceCreate(array $attributes)
     * @method _IH_PostWithIdSourceOnSaved_C|PostWithIdSourceOnSaved[] fromQuery(string $query, array $bindings = [])
     * @method _IH_PostWithIdSourceOnSaved_C|PostWithIdSourceOnSaved[] get(array|string $columns = ['*'])
     * @method PostWithIdSourceOnSaved getModel()
     * @method PostWithIdSourceOnSaved[] getModels(array|string $columns = ['*'])
     * @method _IH_PostWithIdSourceOnSaved_C|PostWithIdSourceOnSaved[] hydrate(array $items)
     * @method _IH_PostWithIdSourceOnSaved_C|PostWithIdSourceOnSaved[] lazy(int $chunkSize = 1000)
     * @method _IH_PostWithIdSourceOnSaved_C|PostWithIdSourceOnSaved[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_PostWithIdSourceOnSaved_C|PostWithIdSourceOnSaved[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method PostWithIdSourceOnSaved make(array $attributes = [])
     * @method PostWithIdSourceOnSaved newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|PostWithIdSourceOnSaved[]|_IH_PostWithIdSourceOnSaved_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method PostWithIdSourceOnSaved restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|PostWithIdSourceOnSaved[]|_IH_PostWithIdSourceOnSaved_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method PostWithIdSourceOnSaved sole(array|string $columns = ['*'])
     * @method PostWithIdSourceOnSaved updateOrCreate(array $attributes, array $values = [])
     * @method _IH_PostWithIdSourceOnSaved_QB findSimilarSlugs(string $attribute, array $config, string $slug)
     * @method _IH_PostWithIdSourceOnSaved_QB withUniqueSlugConstraints(Model $model, string $attribute, array $config, string $slug)
     */
    class _IH_PostWithIdSourceOnSaved_QB extends _BaseBuilder {}
    
    /**
     * @method PostWithIdSource|null getOrPut($key, $value)
     * @method PostWithIdSource|$this shift(int $count = 1)
     * @method PostWithIdSource|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method PostWithIdSource|$this pop(int $count = 1)
     * @method PostWithIdSource|null pull($key, \Closure $default = null)
     * @method PostWithIdSource|null last(callable $callback = null, \Closure $default = null)
     * @method PostWithIdSource|$this random(callable|int|null $number = null)
     * @method PostWithIdSource|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method PostWithIdSource|null get($key, \Closure $default = null)
     * @method PostWithIdSource|null first(callable $callback = null, \Closure $default = null)
     * @method PostWithIdSource|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method PostWithIdSource|null find($key, $default = null)
     * @method PostWithIdSource[] all()
     */
    class _IH_PostWithIdSource_C extends _BaseCollection {
        /**
         * @param int $size
         * @return PostWithIdSource[][]|Collection<_IH_PostWithIdSource_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_PostWithIdSource_QB whereId($value)
     * @method _IH_PostWithIdSource_QB whereTitle($value)
     * @method _IH_PostWithIdSource_QB whereSubtitle($value)
     * @method _IH_PostWithIdSource_QB whereSlug($value)
     * @method _IH_PostWithIdSource_QB whereDummy($value)
     * @method _IH_PostWithIdSource_QB whereAuthorId($value)
     * @method _IH_PostWithIdSource_QB whereDeletedAt($value)
     * @method PostWithIdSource baseSole(array|string $columns = ['*'])
     * @method PostWithIdSource create(array $attributes = [])
     * @method _IH_PostWithIdSource_C|PostWithIdSource[] cursor()
     * @method PostWithIdSource|null|_IH_PostWithIdSource_C|PostWithIdSource[] find($id, array|string $columns = ['*'])
     * @method _IH_PostWithIdSource_C|PostWithIdSource[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method PostWithIdSource|_IH_PostWithIdSource_C|PostWithIdSource[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method PostWithIdSource|_IH_PostWithIdSource_C|PostWithIdSource[] findOrFail($id, array|string $columns = ['*'])
     * @method PostWithIdSource|_IH_PostWithIdSource_C|PostWithIdSource[] findOrNew($id, array|string $columns = ['*'])
     * @method PostWithIdSource first(array|string $columns = ['*'])
     * @method PostWithIdSource firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method PostWithIdSource firstOrCreate(array $attributes = [], array $values = [])
     * @method PostWithIdSource firstOrFail(array|string $columns = ['*'])
     * @method PostWithIdSource firstOrNew(array $attributes = [], array $values = [])
     * @method PostWithIdSource firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method PostWithIdSource forceCreate(array $attributes)
     * @method _IH_PostWithIdSource_C|PostWithIdSource[] fromQuery(string $query, array $bindings = [])
     * @method _IH_PostWithIdSource_C|PostWithIdSource[] get(array|string $columns = ['*'])
     * @method PostWithIdSource getModel()
     * @method PostWithIdSource[] getModels(array|string $columns = ['*'])
     * @method _IH_PostWithIdSource_C|PostWithIdSource[] hydrate(array $items)
     * @method _IH_PostWithIdSource_C|PostWithIdSource[] lazy(int $chunkSize = 1000)
     * @method _IH_PostWithIdSource_C|PostWithIdSource[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_PostWithIdSource_C|PostWithIdSource[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method PostWithIdSource make(array $attributes = [])
     * @method PostWithIdSource newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|PostWithIdSource[]|_IH_PostWithIdSource_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method PostWithIdSource restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|PostWithIdSource[]|_IH_PostWithIdSource_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method PostWithIdSource sole(array|string $columns = ['*'])
     * @method PostWithIdSource updateOrCreate(array $attributes, array $values = [])
     * @method _IH_PostWithIdSource_QB findSimilarSlugs(string $attribute, array $config, string $slug)
     * @method _IH_PostWithIdSource_QB withUniqueSlugConstraints(Model $model, string $attribute, array $config, string $slug)
     */
    class _IH_PostWithIdSource_QB extends _BaseBuilder {}
    
    /**
     * @method PostWithIncludeTrashed|null getOrPut($key, $value)
     * @method PostWithIncludeTrashed|$this shift(int $count = 1)
     * @method PostWithIncludeTrashed|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method PostWithIncludeTrashed|$this pop(int $count = 1)
     * @method PostWithIncludeTrashed|null pull($key, \Closure $default = null)
     * @method PostWithIncludeTrashed|null last(callable $callback = null, \Closure $default = null)
     * @method PostWithIncludeTrashed|$this random(callable|int|null $number = null)
     * @method PostWithIncludeTrashed|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method PostWithIncludeTrashed|null get($key, \Closure $default = null)
     * @method PostWithIncludeTrashed|null first(callable $callback = null, \Closure $default = null)
     * @method PostWithIncludeTrashed|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method PostWithIncludeTrashed|null find($key, $default = null)
     * @method PostWithIncludeTrashed[] all()
     */
    class _IH_PostWithIncludeTrashed_C extends _BaseCollection {
        /**
         * @param int $size
         * @return PostWithIncludeTrashed[][]|Collection<_IH_PostWithIncludeTrashed_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_PostWithIncludeTrashed_QB whereId($value)
     * @method _IH_PostWithIncludeTrashed_QB whereTitle($value)
     * @method _IH_PostWithIncludeTrashed_QB whereSubtitle($value)
     * @method _IH_PostWithIncludeTrashed_QB whereSlug($value)
     * @method _IH_PostWithIncludeTrashed_QB whereDummy($value)
     * @method _IH_PostWithIncludeTrashed_QB whereAuthorId($value)
     * @method _IH_PostWithIncludeTrashed_QB whereDeletedAt($value)
     * @method PostWithIncludeTrashed baseSole(array|string $columns = ['*'])
     * @method PostWithIncludeTrashed create(array $attributes = [])
     * @method _IH_PostWithIncludeTrashed_C|PostWithIncludeTrashed[] cursor()
     * @method PostWithIncludeTrashed|null|_IH_PostWithIncludeTrashed_C|PostWithIncludeTrashed[] find($id, array|string $columns = ['*'])
     * @method _IH_PostWithIncludeTrashed_C|PostWithIncludeTrashed[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method PostWithIncludeTrashed|_IH_PostWithIncludeTrashed_C|PostWithIncludeTrashed[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method PostWithIncludeTrashed|_IH_PostWithIncludeTrashed_C|PostWithIncludeTrashed[] findOrFail($id, array|string $columns = ['*'])
     * @method PostWithIncludeTrashed|_IH_PostWithIncludeTrashed_C|PostWithIncludeTrashed[] findOrNew($id, array|string $columns = ['*'])
     * @method PostWithIncludeTrashed first(array|string $columns = ['*'])
     * @method PostWithIncludeTrashed firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method PostWithIncludeTrashed firstOrCreate(array $attributes = [], array $values = [])
     * @method PostWithIncludeTrashed firstOrFail(array|string $columns = ['*'])
     * @method PostWithIncludeTrashed firstOrNew(array $attributes = [], array $values = [])
     * @method PostWithIncludeTrashed firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method PostWithIncludeTrashed forceCreate(array $attributes)
     * @method _IH_PostWithIncludeTrashed_C|PostWithIncludeTrashed[] fromQuery(string $query, array $bindings = [])
     * @method _IH_PostWithIncludeTrashed_C|PostWithIncludeTrashed[] get(array|string $columns = ['*'])
     * @method PostWithIncludeTrashed getModel()
     * @method PostWithIncludeTrashed[] getModels(array|string $columns = ['*'])
     * @method _IH_PostWithIncludeTrashed_C|PostWithIncludeTrashed[] hydrate(array $items)
     * @method _IH_PostWithIncludeTrashed_C|PostWithIncludeTrashed[] lazy(int $chunkSize = 1000)
     * @method _IH_PostWithIncludeTrashed_C|PostWithIncludeTrashed[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_PostWithIncludeTrashed_C|PostWithIncludeTrashed[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method PostWithIncludeTrashed make(array $attributes = [])
     * @method PostWithIncludeTrashed newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|PostWithIncludeTrashed[]|_IH_PostWithIncludeTrashed_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method PostWithIncludeTrashed restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|PostWithIncludeTrashed[]|_IH_PostWithIncludeTrashed_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method PostWithIncludeTrashed sole(array|string $columns = ['*'])
     * @method PostWithIncludeTrashed updateOrCreate(array $attributes, array $values = [])
     * @method _IH_PostWithIncludeTrashed_QB findSimilarSlugs(string $attribute, array $config, string $slug)
     * @method _IH_PostWithIncludeTrashed_QB withUniqueSlugConstraints(Model $model, string $attribute, array $config, string $slug)
     */
    class _IH_PostWithIncludeTrashed_QB extends _BaseBuilder {}
    
    /**
     * @method PostWithMaxLengthSplitWords|null getOrPut($key, $value)
     * @method PostWithMaxLengthSplitWords|$this shift(int $count = 1)
     * @method PostWithMaxLengthSplitWords|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method PostWithMaxLengthSplitWords|$this pop(int $count = 1)
     * @method PostWithMaxLengthSplitWords|null pull($key, \Closure $default = null)
     * @method PostWithMaxLengthSplitWords|null last(callable $callback = null, \Closure $default = null)
     * @method PostWithMaxLengthSplitWords|$this random(callable|int|null $number = null)
     * @method PostWithMaxLengthSplitWords|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method PostWithMaxLengthSplitWords|null get($key, \Closure $default = null)
     * @method PostWithMaxLengthSplitWords|null first(callable $callback = null, \Closure $default = null)
     * @method PostWithMaxLengthSplitWords|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method PostWithMaxLengthSplitWords|null find($key, $default = null)
     * @method PostWithMaxLengthSplitWords[] all()
     */
    class _IH_PostWithMaxLengthSplitWords_C extends _BaseCollection {
        /**
         * @param int $size
         * @return PostWithMaxLengthSplitWords[][]|Collection<_IH_PostWithMaxLengthSplitWords_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_PostWithMaxLengthSplitWords_QB whereId($value)
     * @method _IH_PostWithMaxLengthSplitWords_QB whereTitle($value)
     * @method _IH_PostWithMaxLengthSplitWords_QB whereSubtitle($value)
     * @method _IH_PostWithMaxLengthSplitWords_QB whereSlug($value)
     * @method _IH_PostWithMaxLengthSplitWords_QB whereDummy($value)
     * @method _IH_PostWithMaxLengthSplitWords_QB whereAuthorId($value)
     * @method _IH_PostWithMaxLengthSplitWords_QB whereDeletedAt($value)
     * @method PostWithMaxLengthSplitWords baseSole(array|string $columns = ['*'])
     * @method PostWithMaxLengthSplitWords create(array $attributes = [])
     * @method _IH_PostWithMaxLengthSplitWords_C|PostWithMaxLengthSplitWords[] cursor()
     * @method PostWithMaxLengthSplitWords|null|_IH_PostWithMaxLengthSplitWords_C|PostWithMaxLengthSplitWords[] find($id, array|string $columns = ['*'])
     * @method _IH_PostWithMaxLengthSplitWords_C|PostWithMaxLengthSplitWords[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method PostWithMaxLengthSplitWords|_IH_PostWithMaxLengthSplitWords_C|PostWithMaxLengthSplitWords[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method PostWithMaxLengthSplitWords|_IH_PostWithMaxLengthSplitWords_C|PostWithMaxLengthSplitWords[] findOrFail($id, array|string $columns = ['*'])
     * @method PostWithMaxLengthSplitWords|_IH_PostWithMaxLengthSplitWords_C|PostWithMaxLengthSplitWords[] findOrNew($id, array|string $columns = ['*'])
     * @method PostWithMaxLengthSplitWords first(array|string $columns = ['*'])
     * @method PostWithMaxLengthSplitWords firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method PostWithMaxLengthSplitWords firstOrCreate(array $attributes = [], array $values = [])
     * @method PostWithMaxLengthSplitWords firstOrFail(array|string $columns = ['*'])
     * @method PostWithMaxLengthSplitWords firstOrNew(array $attributes = [], array $values = [])
     * @method PostWithMaxLengthSplitWords firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method PostWithMaxLengthSplitWords forceCreate(array $attributes)
     * @method _IH_PostWithMaxLengthSplitWords_C|PostWithMaxLengthSplitWords[] fromQuery(string $query, array $bindings = [])
     * @method _IH_PostWithMaxLengthSplitWords_C|PostWithMaxLengthSplitWords[] get(array|string $columns = ['*'])
     * @method PostWithMaxLengthSplitWords getModel()
     * @method PostWithMaxLengthSplitWords[] getModels(array|string $columns = ['*'])
     * @method _IH_PostWithMaxLengthSplitWords_C|PostWithMaxLengthSplitWords[] hydrate(array $items)
     * @method _IH_PostWithMaxLengthSplitWords_C|PostWithMaxLengthSplitWords[] lazy(int $chunkSize = 1000)
     * @method _IH_PostWithMaxLengthSplitWords_C|PostWithMaxLengthSplitWords[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_PostWithMaxLengthSplitWords_C|PostWithMaxLengthSplitWords[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method PostWithMaxLengthSplitWords make(array $attributes = [])
     * @method PostWithMaxLengthSplitWords newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|PostWithMaxLengthSplitWords[]|_IH_PostWithMaxLengthSplitWords_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method PostWithMaxLengthSplitWords restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|PostWithMaxLengthSplitWords[]|_IH_PostWithMaxLengthSplitWords_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method PostWithMaxLengthSplitWords sole(array|string $columns = ['*'])
     * @method PostWithMaxLengthSplitWords updateOrCreate(array $attributes, array $values = [])
     * @method _IH_PostWithMaxLengthSplitWords_QB findSimilarSlugs(string $attribute, array $config, string $slug)
     * @method _IH_PostWithMaxLengthSplitWords_QB withUniqueSlugConstraints(Model $model, string $attribute, array $config, string $slug)
     */
    class _IH_PostWithMaxLengthSplitWords_QB extends _BaseBuilder {}
    
    /**
     * @method PostWithMaxLength|null getOrPut($key, $value)
     * @method PostWithMaxLength|$this shift(int $count = 1)
     * @method PostWithMaxLength|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method PostWithMaxLength|$this pop(int $count = 1)
     * @method PostWithMaxLength|null pull($key, \Closure $default = null)
     * @method PostWithMaxLength|null last(callable $callback = null, \Closure $default = null)
     * @method PostWithMaxLength|$this random(callable|int|null $number = null)
     * @method PostWithMaxLength|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method PostWithMaxLength|null get($key, \Closure $default = null)
     * @method PostWithMaxLength|null first(callable $callback = null, \Closure $default = null)
     * @method PostWithMaxLength|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method PostWithMaxLength|null find($key, $default = null)
     * @method PostWithMaxLength[] all()
     */
    class _IH_PostWithMaxLength_C extends _BaseCollection {
        /**
         * @param int $size
         * @return PostWithMaxLength[][]|Collection<_IH_PostWithMaxLength_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_PostWithMaxLength_QB whereId($value)
     * @method _IH_PostWithMaxLength_QB whereTitle($value)
     * @method _IH_PostWithMaxLength_QB whereSubtitle($value)
     * @method _IH_PostWithMaxLength_QB whereSlug($value)
     * @method _IH_PostWithMaxLength_QB whereDummy($value)
     * @method _IH_PostWithMaxLength_QB whereAuthorId($value)
     * @method _IH_PostWithMaxLength_QB whereDeletedAt($value)
     * @method PostWithMaxLength baseSole(array|string $columns = ['*'])
     * @method PostWithMaxLength create(array $attributes = [])
     * @method _IH_PostWithMaxLength_C|PostWithMaxLength[] cursor()
     * @method PostWithMaxLength|null|_IH_PostWithMaxLength_C|PostWithMaxLength[] find($id, array|string $columns = ['*'])
     * @method _IH_PostWithMaxLength_C|PostWithMaxLength[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method PostWithMaxLength|_IH_PostWithMaxLength_C|PostWithMaxLength[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method PostWithMaxLength|_IH_PostWithMaxLength_C|PostWithMaxLength[] findOrFail($id, array|string $columns = ['*'])
     * @method PostWithMaxLength|_IH_PostWithMaxLength_C|PostWithMaxLength[] findOrNew($id, array|string $columns = ['*'])
     * @method PostWithMaxLength first(array|string $columns = ['*'])
     * @method PostWithMaxLength firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method PostWithMaxLength firstOrCreate(array $attributes = [], array $values = [])
     * @method PostWithMaxLength firstOrFail(array|string $columns = ['*'])
     * @method PostWithMaxLength firstOrNew(array $attributes = [], array $values = [])
     * @method PostWithMaxLength firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method PostWithMaxLength forceCreate(array $attributes)
     * @method _IH_PostWithMaxLength_C|PostWithMaxLength[] fromQuery(string $query, array $bindings = [])
     * @method _IH_PostWithMaxLength_C|PostWithMaxLength[] get(array|string $columns = ['*'])
     * @method PostWithMaxLength getModel()
     * @method PostWithMaxLength[] getModels(array|string $columns = ['*'])
     * @method _IH_PostWithMaxLength_C|PostWithMaxLength[] hydrate(array $items)
     * @method _IH_PostWithMaxLength_C|PostWithMaxLength[] lazy(int $chunkSize = 1000)
     * @method _IH_PostWithMaxLength_C|PostWithMaxLength[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_PostWithMaxLength_C|PostWithMaxLength[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method PostWithMaxLength make(array $attributes = [])
     * @method PostWithMaxLength newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|PostWithMaxLength[]|_IH_PostWithMaxLength_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method PostWithMaxLength restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|PostWithMaxLength[]|_IH_PostWithMaxLength_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method PostWithMaxLength sole(array|string $columns = ['*'])
     * @method PostWithMaxLength updateOrCreate(array $attributes, array $values = [])
     * @method _IH_PostWithMaxLength_QB findSimilarSlugs(string $attribute, array $config, string $slug)
     * @method _IH_PostWithMaxLength_QB withUniqueSlugConstraints(Model $model, string $attribute, array $config, string $slug)
     */
    class _IH_PostWithMaxLength_QB extends _BaseBuilder {}
    
    /**
     * @method PostWithMultipleSlugsAndCustomSlugKey|null getOrPut($key, $value)
     * @method PostWithMultipleSlugsAndCustomSlugKey|$this shift(int $count = 1)
     * @method PostWithMultipleSlugsAndCustomSlugKey|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method PostWithMultipleSlugsAndCustomSlugKey|$this pop(int $count = 1)
     * @method PostWithMultipleSlugsAndCustomSlugKey|null pull($key, \Closure $default = null)
     * @method PostWithMultipleSlugsAndCustomSlugKey|null last(callable $callback = null, \Closure $default = null)
     * @method PostWithMultipleSlugsAndCustomSlugKey|$this random(callable|int|null $number = null)
     * @method PostWithMultipleSlugsAndCustomSlugKey|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method PostWithMultipleSlugsAndCustomSlugKey|null get($key, \Closure $default = null)
     * @method PostWithMultipleSlugsAndCustomSlugKey|null first(callable $callback = null, \Closure $default = null)
     * @method PostWithMultipleSlugsAndCustomSlugKey|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method PostWithMultipleSlugsAndCustomSlugKey|null find($key, $default = null)
     * @method PostWithMultipleSlugsAndCustomSlugKey[] all()
     */
    class _IH_PostWithMultipleSlugsAndCustomSlugKey_C extends _BaseCollection {
        /**
         * @param int $size
         * @return PostWithMultipleSlugsAndCustomSlugKey[][]|Collection<_IH_PostWithMultipleSlugsAndCustomSlugKey_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method PostWithMultipleSlugsAndCustomSlugKey baseSole(array|string $columns = ['*'])
     * @method PostWithMultipleSlugsAndCustomSlugKey create(array $attributes = [])
     * @method _IH_PostWithMultipleSlugsAndCustomSlugKey_C|PostWithMultipleSlugsAndCustomSlugKey[] cursor()
     * @method PostWithMultipleSlugsAndCustomSlugKey|null|_IH_PostWithMultipleSlugsAndCustomSlugKey_C|PostWithMultipleSlugsAndCustomSlugKey[] find($id, array|string $columns = ['*'])
     * @method _IH_PostWithMultipleSlugsAndCustomSlugKey_C|PostWithMultipleSlugsAndCustomSlugKey[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method PostWithMultipleSlugsAndCustomSlugKey|_IH_PostWithMultipleSlugsAndCustomSlugKey_C|PostWithMultipleSlugsAndCustomSlugKey[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method PostWithMultipleSlugsAndCustomSlugKey|_IH_PostWithMultipleSlugsAndCustomSlugKey_C|PostWithMultipleSlugsAndCustomSlugKey[] findOrFail($id, array|string $columns = ['*'])
     * @method PostWithMultipleSlugsAndCustomSlugKey|_IH_PostWithMultipleSlugsAndCustomSlugKey_C|PostWithMultipleSlugsAndCustomSlugKey[] findOrNew($id, array|string $columns = ['*'])
     * @method PostWithMultipleSlugsAndCustomSlugKey first(array|string $columns = ['*'])
     * @method PostWithMultipleSlugsAndCustomSlugKey firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method PostWithMultipleSlugsAndCustomSlugKey firstOrCreate(array $attributes = [], array $values = [])
     * @method PostWithMultipleSlugsAndCustomSlugKey firstOrFail(array|string $columns = ['*'])
     * @method PostWithMultipleSlugsAndCustomSlugKey firstOrNew(array $attributes = [], array $values = [])
     * @method PostWithMultipleSlugsAndCustomSlugKey firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method PostWithMultipleSlugsAndCustomSlugKey forceCreate(array $attributes)
     * @method _IH_PostWithMultipleSlugsAndCustomSlugKey_C|PostWithMultipleSlugsAndCustomSlugKey[] fromQuery(string $query, array $bindings = [])
     * @method _IH_PostWithMultipleSlugsAndCustomSlugKey_C|PostWithMultipleSlugsAndCustomSlugKey[] get(array|string $columns = ['*'])
     * @method PostWithMultipleSlugsAndCustomSlugKey getModel()
     * @method PostWithMultipleSlugsAndCustomSlugKey[] getModels(array|string $columns = ['*'])
     * @method _IH_PostWithMultipleSlugsAndCustomSlugKey_C|PostWithMultipleSlugsAndCustomSlugKey[] hydrate(array $items)
     * @method _IH_PostWithMultipleSlugsAndCustomSlugKey_C|PostWithMultipleSlugsAndCustomSlugKey[] lazy(int $chunkSize = 1000)
     * @method _IH_PostWithMultipleSlugsAndCustomSlugKey_C|PostWithMultipleSlugsAndCustomSlugKey[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_PostWithMultipleSlugsAndCustomSlugKey_C|PostWithMultipleSlugsAndCustomSlugKey[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method PostWithMultipleSlugsAndCustomSlugKey make(array $attributes = [])
     * @method PostWithMultipleSlugsAndCustomSlugKey newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|PostWithMultipleSlugsAndCustomSlugKey[]|_IH_PostWithMultipleSlugsAndCustomSlugKey_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method PostWithMultipleSlugsAndCustomSlugKey restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|PostWithMultipleSlugsAndCustomSlugKey[]|_IH_PostWithMultipleSlugsAndCustomSlugKey_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method PostWithMultipleSlugsAndCustomSlugKey sole(array|string $columns = ['*'])
     * @method PostWithMultipleSlugsAndCustomSlugKey updateOrCreate(array $attributes, array $values = [])
     * @method _IH_PostWithMultipleSlugsAndCustomSlugKey_QB findSimilarSlugs(string $attribute, array $config, string $slug)
     * @method _IH_PostWithMultipleSlugsAndCustomSlugKey_QB whereSlug(string $slug)
     * @method _IH_PostWithMultipleSlugsAndCustomSlugKey_QB withUniqueSlugConstraints(Model $model, string $attribute, array $config, string $slug)
     */
    class _IH_PostWithMultipleSlugsAndCustomSlugKey_QB extends _BaseBuilder {}
    
    /**
     * @method PostWithMultipleSlugsAndHelperTrait|null getOrPut($key, $value)
     * @method PostWithMultipleSlugsAndHelperTrait|$this shift(int $count = 1)
     * @method PostWithMultipleSlugsAndHelperTrait|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method PostWithMultipleSlugsAndHelperTrait|$this pop(int $count = 1)
     * @method PostWithMultipleSlugsAndHelperTrait|null pull($key, \Closure $default = null)
     * @method PostWithMultipleSlugsAndHelperTrait|null last(callable $callback = null, \Closure $default = null)
     * @method PostWithMultipleSlugsAndHelperTrait|$this random(callable|int|null $number = null)
     * @method PostWithMultipleSlugsAndHelperTrait|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method PostWithMultipleSlugsAndHelperTrait|null get($key, \Closure $default = null)
     * @method PostWithMultipleSlugsAndHelperTrait|null first(callable $callback = null, \Closure $default = null)
     * @method PostWithMultipleSlugsAndHelperTrait|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method PostWithMultipleSlugsAndHelperTrait|null find($key, $default = null)
     * @method PostWithMultipleSlugsAndHelperTrait[] all()
     */
    class _IH_PostWithMultipleSlugsAndHelperTrait_C extends _BaseCollection {
        /**
         * @param int $size
         * @return PostWithMultipleSlugsAndHelperTrait[][]|Collection<_IH_PostWithMultipleSlugsAndHelperTrait_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_PostWithMultipleSlugsAndHelperTrait_QB whereId($value)
     * @method _IH_PostWithMultipleSlugsAndHelperTrait_QB whereTitle($value)
     * @method _IH_PostWithMultipleSlugsAndHelperTrait_QB whereSubtitle($value)
     * @method _IH_PostWithMultipleSlugsAndHelperTrait_QB whereSlug($value)
     * @method _IH_PostWithMultipleSlugsAndHelperTrait_QB whereDummy($value)
     * @method _IH_PostWithMultipleSlugsAndHelperTrait_QB whereAuthorId($value)
     * @method _IH_PostWithMultipleSlugsAndHelperTrait_QB whereDeletedAt($value)
     * @method PostWithMultipleSlugsAndHelperTrait baseSole(array|string $columns = ['*'])
     * @method PostWithMultipleSlugsAndHelperTrait create(array $attributes = [])
     * @method _IH_PostWithMultipleSlugsAndHelperTrait_C|PostWithMultipleSlugsAndHelperTrait[] cursor()
     * @method PostWithMultipleSlugsAndHelperTrait|null|_IH_PostWithMultipleSlugsAndHelperTrait_C|PostWithMultipleSlugsAndHelperTrait[] find($id, array|string $columns = ['*'])
     * @method _IH_PostWithMultipleSlugsAndHelperTrait_C|PostWithMultipleSlugsAndHelperTrait[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method PostWithMultipleSlugsAndHelperTrait|_IH_PostWithMultipleSlugsAndHelperTrait_C|PostWithMultipleSlugsAndHelperTrait[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method PostWithMultipleSlugsAndHelperTrait|_IH_PostWithMultipleSlugsAndHelperTrait_C|PostWithMultipleSlugsAndHelperTrait[] findOrFail($id, array|string $columns = ['*'])
     * @method PostWithMultipleSlugsAndHelperTrait|_IH_PostWithMultipleSlugsAndHelperTrait_C|PostWithMultipleSlugsAndHelperTrait[] findOrNew($id, array|string $columns = ['*'])
     * @method PostWithMultipleSlugsAndHelperTrait first(array|string $columns = ['*'])
     * @method PostWithMultipleSlugsAndHelperTrait firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method PostWithMultipleSlugsAndHelperTrait firstOrCreate(array $attributes = [], array $values = [])
     * @method PostWithMultipleSlugsAndHelperTrait firstOrFail(array|string $columns = ['*'])
     * @method PostWithMultipleSlugsAndHelperTrait firstOrNew(array $attributes = [], array $values = [])
     * @method PostWithMultipleSlugsAndHelperTrait firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method PostWithMultipleSlugsAndHelperTrait forceCreate(array $attributes)
     * @method _IH_PostWithMultipleSlugsAndHelperTrait_C|PostWithMultipleSlugsAndHelperTrait[] fromQuery(string $query, array $bindings = [])
     * @method _IH_PostWithMultipleSlugsAndHelperTrait_C|PostWithMultipleSlugsAndHelperTrait[] get(array|string $columns = ['*'])
     * @method PostWithMultipleSlugsAndHelperTrait getModel()
     * @method PostWithMultipleSlugsAndHelperTrait[] getModels(array|string $columns = ['*'])
     * @method _IH_PostWithMultipleSlugsAndHelperTrait_C|PostWithMultipleSlugsAndHelperTrait[] hydrate(array $items)
     * @method _IH_PostWithMultipleSlugsAndHelperTrait_C|PostWithMultipleSlugsAndHelperTrait[] lazy(int $chunkSize = 1000)
     * @method _IH_PostWithMultipleSlugsAndHelperTrait_C|PostWithMultipleSlugsAndHelperTrait[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_PostWithMultipleSlugsAndHelperTrait_C|PostWithMultipleSlugsAndHelperTrait[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method PostWithMultipleSlugsAndHelperTrait make(array $attributes = [])
     * @method PostWithMultipleSlugsAndHelperTrait newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|PostWithMultipleSlugsAndHelperTrait[]|_IH_PostWithMultipleSlugsAndHelperTrait_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method PostWithMultipleSlugsAndHelperTrait restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|PostWithMultipleSlugsAndHelperTrait[]|_IH_PostWithMultipleSlugsAndHelperTrait_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method PostWithMultipleSlugsAndHelperTrait sole(array|string $columns = ['*'])
     * @method PostWithMultipleSlugsAndHelperTrait updateOrCreate(array $attributes, array $values = [])
     * @method _IH_PostWithMultipleSlugsAndHelperTrait_QB findSimilarSlugs(string $attribute, array $config, string $slug)
     * @method _IH_PostWithMultipleSlugsAndHelperTrait_QB whereSlug(string $slug)
     * @method _IH_PostWithMultipleSlugsAndHelperTrait_QB withUniqueSlugConstraints(Model $model, string $attribute, array $config, string $slug)
     */
    class _IH_PostWithMultipleSlugsAndHelperTrait_QB extends _BaseBuilder {}
    
    /**
     * @method PostWithMultipleSlugs|null getOrPut($key, $value)
     * @method PostWithMultipleSlugs|$this shift(int $count = 1)
     * @method PostWithMultipleSlugs|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method PostWithMultipleSlugs|$this pop(int $count = 1)
     * @method PostWithMultipleSlugs|null pull($key, \Closure $default = null)
     * @method PostWithMultipleSlugs|null last(callable $callback = null, \Closure $default = null)
     * @method PostWithMultipleSlugs|$this random(callable|int|null $number = null)
     * @method PostWithMultipleSlugs|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method PostWithMultipleSlugs|null get($key, \Closure $default = null)
     * @method PostWithMultipleSlugs|null first(callable $callback = null, \Closure $default = null)
     * @method PostWithMultipleSlugs|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method PostWithMultipleSlugs|null find($key, $default = null)
     * @method PostWithMultipleSlugs[] all()
     */
    class _IH_PostWithMultipleSlugs_C extends _BaseCollection {
        /**
         * @param int $size
         * @return PostWithMultipleSlugs[][]|Collection<_IH_PostWithMultipleSlugs_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_PostWithMultipleSlugs_QB whereId($value)
     * @method _IH_PostWithMultipleSlugs_QB whereTitle($value)
     * @method _IH_PostWithMultipleSlugs_QB whereSubtitle($value)
     * @method _IH_PostWithMultipleSlugs_QB whereSlug($value)
     * @method _IH_PostWithMultipleSlugs_QB whereDummy($value)
     * @method _IH_PostWithMultipleSlugs_QB whereAuthorId($value)
     * @method _IH_PostWithMultipleSlugs_QB whereDeletedAt($value)
     * @method PostWithMultipleSlugs baseSole(array|string $columns = ['*'])
     * @method PostWithMultipleSlugs create(array $attributes = [])
     * @method _IH_PostWithMultipleSlugs_C|PostWithMultipleSlugs[] cursor()
     * @method PostWithMultipleSlugs|null|_IH_PostWithMultipleSlugs_C|PostWithMultipleSlugs[] find($id, array|string $columns = ['*'])
     * @method _IH_PostWithMultipleSlugs_C|PostWithMultipleSlugs[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method PostWithMultipleSlugs|_IH_PostWithMultipleSlugs_C|PostWithMultipleSlugs[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method PostWithMultipleSlugs|_IH_PostWithMultipleSlugs_C|PostWithMultipleSlugs[] findOrFail($id, array|string $columns = ['*'])
     * @method PostWithMultipleSlugs|_IH_PostWithMultipleSlugs_C|PostWithMultipleSlugs[] findOrNew($id, array|string $columns = ['*'])
     * @method PostWithMultipleSlugs first(array|string $columns = ['*'])
     * @method PostWithMultipleSlugs firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method PostWithMultipleSlugs firstOrCreate(array $attributes = [], array $values = [])
     * @method PostWithMultipleSlugs firstOrFail(array|string $columns = ['*'])
     * @method PostWithMultipleSlugs firstOrNew(array $attributes = [], array $values = [])
     * @method PostWithMultipleSlugs firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method PostWithMultipleSlugs forceCreate(array $attributes)
     * @method _IH_PostWithMultipleSlugs_C|PostWithMultipleSlugs[] fromQuery(string $query, array $bindings = [])
     * @method _IH_PostWithMultipleSlugs_C|PostWithMultipleSlugs[] get(array|string $columns = ['*'])
     * @method PostWithMultipleSlugs getModel()
     * @method PostWithMultipleSlugs[] getModels(array|string $columns = ['*'])
     * @method _IH_PostWithMultipleSlugs_C|PostWithMultipleSlugs[] hydrate(array $items)
     * @method _IH_PostWithMultipleSlugs_C|PostWithMultipleSlugs[] lazy(int $chunkSize = 1000)
     * @method _IH_PostWithMultipleSlugs_C|PostWithMultipleSlugs[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_PostWithMultipleSlugs_C|PostWithMultipleSlugs[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method PostWithMultipleSlugs make(array $attributes = [])
     * @method PostWithMultipleSlugs newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|PostWithMultipleSlugs[]|_IH_PostWithMultipleSlugs_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method PostWithMultipleSlugs restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|PostWithMultipleSlugs[]|_IH_PostWithMultipleSlugs_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method PostWithMultipleSlugs sole(array|string $columns = ['*'])
     * @method PostWithMultipleSlugs updateOrCreate(array $attributes, array $values = [])
     * @method _IH_PostWithMultipleSlugs_QB findSimilarSlugs(string $attribute, array $config, string $slug)
     * @method _IH_PostWithMultipleSlugs_QB withUniqueSlugConstraints(Model $model, string $attribute, array $config, string $slug)
     */
    class _IH_PostWithMultipleSlugs_QB extends _BaseBuilder {}
    
    /**
     * @method PostWithMultipleSources|null getOrPut($key, $value)
     * @method PostWithMultipleSources|$this shift(int $count = 1)
     * @method PostWithMultipleSources|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method PostWithMultipleSources|$this pop(int $count = 1)
     * @method PostWithMultipleSources|null pull($key, \Closure $default = null)
     * @method PostWithMultipleSources|null last(callable $callback = null, \Closure $default = null)
     * @method PostWithMultipleSources|$this random(callable|int|null $number = null)
     * @method PostWithMultipleSources|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method PostWithMultipleSources|null get($key, \Closure $default = null)
     * @method PostWithMultipleSources|null first(callable $callback = null, \Closure $default = null)
     * @method PostWithMultipleSources|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method PostWithMultipleSources|null find($key, $default = null)
     * @method PostWithMultipleSources[] all()
     */
    class _IH_PostWithMultipleSources_C extends _BaseCollection {
        /**
         * @param int $size
         * @return PostWithMultipleSources[][]|Collection<_IH_PostWithMultipleSources_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_PostWithMultipleSources_QB whereId($value)
     * @method _IH_PostWithMultipleSources_QB whereTitle($value)
     * @method _IH_PostWithMultipleSources_QB whereSubtitle($value)
     * @method _IH_PostWithMultipleSources_QB whereSlug($value)
     * @method _IH_PostWithMultipleSources_QB whereDummy($value)
     * @method _IH_PostWithMultipleSources_QB whereAuthorId($value)
     * @method _IH_PostWithMultipleSources_QB whereDeletedAt($value)
     * @method PostWithMultipleSources baseSole(array|string $columns = ['*'])
     * @method PostWithMultipleSources create(array $attributes = [])
     * @method _IH_PostWithMultipleSources_C|PostWithMultipleSources[] cursor()
     * @method PostWithMultipleSources|null|_IH_PostWithMultipleSources_C|PostWithMultipleSources[] find($id, array|string $columns = ['*'])
     * @method _IH_PostWithMultipleSources_C|PostWithMultipleSources[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method PostWithMultipleSources|_IH_PostWithMultipleSources_C|PostWithMultipleSources[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method PostWithMultipleSources|_IH_PostWithMultipleSources_C|PostWithMultipleSources[] findOrFail($id, array|string $columns = ['*'])
     * @method PostWithMultipleSources|_IH_PostWithMultipleSources_C|PostWithMultipleSources[] findOrNew($id, array|string $columns = ['*'])
     * @method PostWithMultipleSources first(array|string $columns = ['*'])
     * @method PostWithMultipleSources firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method PostWithMultipleSources firstOrCreate(array $attributes = [], array $values = [])
     * @method PostWithMultipleSources firstOrFail(array|string $columns = ['*'])
     * @method PostWithMultipleSources firstOrNew(array $attributes = [], array $values = [])
     * @method PostWithMultipleSources firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method PostWithMultipleSources forceCreate(array $attributes)
     * @method _IH_PostWithMultipleSources_C|PostWithMultipleSources[] fromQuery(string $query, array $bindings = [])
     * @method _IH_PostWithMultipleSources_C|PostWithMultipleSources[] get(array|string $columns = ['*'])
     * @method PostWithMultipleSources getModel()
     * @method PostWithMultipleSources[] getModels(array|string $columns = ['*'])
     * @method _IH_PostWithMultipleSources_C|PostWithMultipleSources[] hydrate(array $items)
     * @method _IH_PostWithMultipleSources_C|PostWithMultipleSources[] lazy(int $chunkSize = 1000)
     * @method _IH_PostWithMultipleSources_C|PostWithMultipleSources[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_PostWithMultipleSources_C|PostWithMultipleSources[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method PostWithMultipleSources make(array $attributes = [])
     * @method PostWithMultipleSources newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|PostWithMultipleSources[]|_IH_PostWithMultipleSources_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method PostWithMultipleSources restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|PostWithMultipleSources[]|_IH_PostWithMultipleSources_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method PostWithMultipleSources sole(array|string $columns = ['*'])
     * @method PostWithMultipleSources updateOrCreate(array $attributes, array $values = [])
     * @method _IH_PostWithMultipleSources_QB findSimilarSlugs(string $attribute, array $config, string $slug)
     * @method _IH_PostWithMultipleSources_QB withUniqueSlugConstraints(Model $model, string $attribute, array $config, string $slug)
     */
    class _IH_PostWithMultipleSources_QB extends _BaseBuilder {}
    
    /**
     * @method PostWithNoSource|null getOrPut($key, $value)
     * @method PostWithNoSource|$this shift(int $count = 1)
     * @method PostWithNoSource|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method PostWithNoSource|$this pop(int $count = 1)
     * @method PostWithNoSource|null pull($key, \Closure $default = null)
     * @method PostWithNoSource|null last(callable $callback = null, \Closure $default = null)
     * @method PostWithNoSource|$this random(callable|int|null $number = null)
     * @method PostWithNoSource|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method PostWithNoSource|null get($key, \Closure $default = null)
     * @method PostWithNoSource|null first(callable $callback = null, \Closure $default = null)
     * @method PostWithNoSource|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method PostWithNoSource|null find($key, $default = null)
     * @method PostWithNoSource[] all()
     */
    class _IH_PostWithNoSource_C extends _BaseCollection {
        /**
         * @param int $size
         * @return PostWithNoSource[][]|Collection<_IH_PostWithNoSource_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_PostWithNoSource_QB whereId($value)
     * @method _IH_PostWithNoSource_QB whereTitle($value)
     * @method _IH_PostWithNoSource_QB whereSubtitle($value)
     * @method _IH_PostWithNoSource_QB whereSlug($value)
     * @method _IH_PostWithNoSource_QB whereDummy($value)
     * @method _IH_PostWithNoSource_QB whereAuthorId($value)
     * @method _IH_PostWithNoSource_QB whereDeletedAt($value)
     * @method PostWithNoSource baseSole(array|string $columns = ['*'])
     * @method PostWithNoSource create(array $attributes = [])
     * @method _IH_PostWithNoSource_C|PostWithNoSource[] cursor()
     * @method PostWithNoSource|null|_IH_PostWithNoSource_C|PostWithNoSource[] find($id, array|string $columns = ['*'])
     * @method _IH_PostWithNoSource_C|PostWithNoSource[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method PostWithNoSource|_IH_PostWithNoSource_C|PostWithNoSource[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method PostWithNoSource|_IH_PostWithNoSource_C|PostWithNoSource[] findOrFail($id, array|string $columns = ['*'])
     * @method PostWithNoSource|_IH_PostWithNoSource_C|PostWithNoSource[] findOrNew($id, array|string $columns = ['*'])
     * @method PostWithNoSource first(array|string $columns = ['*'])
     * @method PostWithNoSource firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method PostWithNoSource firstOrCreate(array $attributes = [], array $values = [])
     * @method PostWithNoSource firstOrFail(array|string $columns = ['*'])
     * @method PostWithNoSource firstOrNew(array $attributes = [], array $values = [])
     * @method PostWithNoSource firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method PostWithNoSource forceCreate(array $attributes)
     * @method _IH_PostWithNoSource_C|PostWithNoSource[] fromQuery(string $query, array $bindings = [])
     * @method _IH_PostWithNoSource_C|PostWithNoSource[] get(array|string $columns = ['*'])
     * @method PostWithNoSource getModel()
     * @method PostWithNoSource[] getModels(array|string $columns = ['*'])
     * @method _IH_PostWithNoSource_C|PostWithNoSource[] hydrate(array $items)
     * @method _IH_PostWithNoSource_C|PostWithNoSource[] lazy(int $chunkSize = 1000)
     * @method _IH_PostWithNoSource_C|PostWithNoSource[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_PostWithNoSource_C|PostWithNoSource[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method PostWithNoSource make(array $attributes = [])
     * @method PostWithNoSource newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|PostWithNoSource[]|_IH_PostWithNoSource_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method PostWithNoSource restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|PostWithNoSource[]|_IH_PostWithNoSource_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method PostWithNoSource sole(array|string $columns = ['*'])
     * @method PostWithNoSource updateOrCreate(array $attributes, array $values = [])
     * @method _IH_PostWithNoSource_QB findSimilarSlugs(string $attribute, array $config, string $slug)
     * @method _IH_PostWithNoSource_QB withUniqueSlugConstraints(Model $model, string $attribute, array $config, string $slug)
     */
    class _IH_PostWithNoSource_QB extends _BaseBuilder {}
    
    /**
     * @method PostWithOnUpdate|null getOrPut($key, $value)
     * @method PostWithOnUpdate|$this shift(int $count = 1)
     * @method PostWithOnUpdate|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method PostWithOnUpdate|$this pop(int $count = 1)
     * @method PostWithOnUpdate|null pull($key, \Closure $default = null)
     * @method PostWithOnUpdate|null last(callable $callback = null, \Closure $default = null)
     * @method PostWithOnUpdate|$this random(callable|int|null $number = null)
     * @method PostWithOnUpdate|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method PostWithOnUpdate|null get($key, \Closure $default = null)
     * @method PostWithOnUpdate|null first(callable $callback = null, \Closure $default = null)
     * @method PostWithOnUpdate|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method PostWithOnUpdate|null find($key, $default = null)
     * @method PostWithOnUpdate[] all()
     */
    class _IH_PostWithOnUpdate_C extends _BaseCollection {
        /**
         * @param int $size
         * @return PostWithOnUpdate[][]|Collection<_IH_PostWithOnUpdate_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_PostWithOnUpdate_QB whereId($value)
     * @method _IH_PostWithOnUpdate_QB whereTitle($value)
     * @method _IH_PostWithOnUpdate_QB whereSubtitle($value)
     * @method _IH_PostWithOnUpdate_QB whereSlug($value)
     * @method _IH_PostWithOnUpdate_QB whereDummy($value)
     * @method _IH_PostWithOnUpdate_QB whereAuthorId($value)
     * @method _IH_PostWithOnUpdate_QB whereDeletedAt($value)
     * @method PostWithOnUpdate baseSole(array|string $columns = ['*'])
     * @method PostWithOnUpdate create(array $attributes = [])
     * @method _IH_PostWithOnUpdate_C|PostWithOnUpdate[] cursor()
     * @method PostWithOnUpdate|null|_IH_PostWithOnUpdate_C|PostWithOnUpdate[] find($id, array|string $columns = ['*'])
     * @method _IH_PostWithOnUpdate_C|PostWithOnUpdate[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method PostWithOnUpdate|_IH_PostWithOnUpdate_C|PostWithOnUpdate[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method PostWithOnUpdate|_IH_PostWithOnUpdate_C|PostWithOnUpdate[] findOrFail($id, array|string $columns = ['*'])
     * @method PostWithOnUpdate|_IH_PostWithOnUpdate_C|PostWithOnUpdate[] findOrNew($id, array|string $columns = ['*'])
     * @method PostWithOnUpdate first(array|string $columns = ['*'])
     * @method PostWithOnUpdate firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method PostWithOnUpdate firstOrCreate(array $attributes = [], array $values = [])
     * @method PostWithOnUpdate firstOrFail(array|string $columns = ['*'])
     * @method PostWithOnUpdate firstOrNew(array $attributes = [], array $values = [])
     * @method PostWithOnUpdate firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method PostWithOnUpdate forceCreate(array $attributes)
     * @method _IH_PostWithOnUpdate_C|PostWithOnUpdate[] fromQuery(string $query, array $bindings = [])
     * @method _IH_PostWithOnUpdate_C|PostWithOnUpdate[] get(array|string $columns = ['*'])
     * @method PostWithOnUpdate getModel()
     * @method PostWithOnUpdate[] getModels(array|string $columns = ['*'])
     * @method _IH_PostWithOnUpdate_C|PostWithOnUpdate[] hydrate(array $items)
     * @method _IH_PostWithOnUpdate_C|PostWithOnUpdate[] lazy(int $chunkSize = 1000)
     * @method _IH_PostWithOnUpdate_C|PostWithOnUpdate[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_PostWithOnUpdate_C|PostWithOnUpdate[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method PostWithOnUpdate make(array $attributes = [])
     * @method PostWithOnUpdate newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|PostWithOnUpdate[]|_IH_PostWithOnUpdate_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method PostWithOnUpdate restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|PostWithOnUpdate[]|_IH_PostWithOnUpdate_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method PostWithOnUpdate sole(array|string $columns = ['*'])
     * @method PostWithOnUpdate updateOrCreate(array $attributes, array $values = [])
     * @method _IH_PostWithOnUpdate_QB findSimilarSlugs(string $attribute, array $config, string $slug)
     * @method _IH_PostWithOnUpdate_QB withUniqueSlugConstraints(Model $model, string $attribute, array $config, string $slug)
     */
    class _IH_PostWithOnUpdate_QB extends _BaseBuilder {}
    
    /**
     * @method PostWithRelation|null getOrPut($key, $value)
     * @method PostWithRelation|$this shift(int $count = 1)
     * @method PostWithRelation|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method PostWithRelation|$this pop(int $count = 1)
     * @method PostWithRelation|null pull($key, \Closure $default = null)
     * @method PostWithRelation|null last(callable $callback = null, \Closure $default = null)
     * @method PostWithRelation|$this random(callable|int|null $number = null)
     * @method PostWithRelation|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method PostWithRelation|null get($key, \Closure $default = null)
     * @method PostWithRelation|null first(callable $callback = null, \Closure $default = null)
     * @method PostWithRelation|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method PostWithRelation|null find($key, $default = null)
     * @method PostWithRelation[] all()
     */
    class _IH_PostWithRelation_C extends _BaseCollection {
        /**
         * @param int $size
         * @return PostWithRelation[][]|Collection<_IH_PostWithRelation_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_PostWithRelation_QB whereId($value)
     * @method _IH_PostWithRelation_QB whereTitle($value)
     * @method _IH_PostWithRelation_QB whereSubtitle($value)
     * @method _IH_PostWithRelation_QB whereSlug($value)
     * @method _IH_PostWithRelation_QB whereDummy($value)
     * @method _IH_PostWithRelation_QB whereAuthorId($value)
     * @method _IH_PostWithRelation_QB whereDeletedAt($value)
     * @method PostWithRelation baseSole(array|string $columns = ['*'])
     * @method PostWithRelation create(array $attributes = [])
     * @method _IH_PostWithRelation_C|PostWithRelation[] cursor()
     * @method PostWithRelation|null|_IH_PostWithRelation_C|PostWithRelation[] find($id, array|string $columns = ['*'])
     * @method _IH_PostWithRelation_C|PostWithRelation[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method PostWithRelation|_IH_PostWithRelation_C|PostWithRelation[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method PostWithRelation|_IH_PostWithRelation_C|PostWithRelation[] findOrFail($id, array|string $columns = ['*'])
     * @method PostWithRelation|_IH_PostWithRelation_C|PostWithRelation[] findOrNew($id, array|string $columns = ['*'])
     * @method PostWithRelation first(array|string $columns = ['*'])
     * @method PostWithRelation firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method PostWithRelation firstOrCreate(array $attributes = [], array $values = [])
     * @method PostWithRelation firstOrFail(array|string $columns = ['*'])
     * @method PostWithRelation firstOrNew(array $attributes = [], array $values = [])
     * @method PostWithRelation firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method PostWithRelation forceCreate(array $attributes)
     * @method _IH_PostWithRelation_C|PostWithRelation[] fromQuery(string $query, array $bindings = [])
     * @method _IH_PostWithRelation_C|PostWithRelation[] get(array|string $columns = ['*'])
     * @method PostWithRelation getModel()
     * @method PostWithRelation[] getModels(array|string $columns = ['*'])
     * @method _IH_PostWithRelation_C|PostWithRelation[] hydrate(array $items)
     * @method _IH_PostWithRelation_C|PostWithRelation[] lazy(int $chunkSize = 1000)
     * @method _IH_PostWithRelation_C|PostWithRelation[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_PostWithRelation_C|PostWithRelation[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method PostWithRelation make(array $attributes = [])
     * @method PostWithRelation newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|PostWithRelation[]|_IH_PostWithRelation_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method PostWithRelation restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|PostWithRelation[]|_IH_PostWithRelation_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method PostWithRelation sole(array|string $columns = ['*'])
     * @method PostWithRelation updateOrCreate(array $attributes, array $values = [])
     * @method _IH_PostWithRelation_QB findSimilarSlugs(string $attribute, array $config, string $slug)
     * @method _IH_PostWithRelation_QB withUniqueSlugConstraints(Model $model, string $attribute, array $config, string $slug)
     */
    class _IH_PostWithRelation_QB extends _BaseBuilder {}
    
    /**
     * @method PostWithReservedSlug|null getOrPut($key, $value)
     * @method PostWithReservedSlug|$this shift(int $count = 1)
     * @method PostWithReservedSlug|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method PostWithReservedSlug|$this pop(int $count = 1)
     * @method PostWithReservedSlug|null pull($key, \Closure $default = null)
     * @method PostWithReservedSlug|null last(callable $callback = null, \Closure $default = null)
     * @method PostWithReservedSlug|$this random(callable|int|null $number = null)
     * @method PostWithReservedSlug|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method PostWithReservedSlug|null get($key, \Closure $default = null)
     * @method PostWithReservedSlug|null first(callable $callback = null, \Closure $default = null)
     * @method PostWithReservedSlug|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method PostWithReservedSlug|null find($key, $default = null)
     * @method PostWithReservedSlug[] all()
     */
    class _IH_PostWithReservedSlug_C extends _BaseCollection {
        /**
         * @param int $size
         * @return PostWithReservedSlug[][]|Collection<_IH_PostWithReservedSlug_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_PostWithReservedSlug_QB whereId($value)
     * @method _IH_PostWithReservedSlug_QB whereTitle($value)
     * @method _IH_PostWithReservedSlug_QB whereSubtitle($value)
     * @method _IH_PostWithReservedSlug_QB whereSlug($value)
     * @method _IH_PostWithReservedSlug_QB whereDummy($value)
     * @method _IH_PostWithReservedSlug_QB whereAuthorId($value)
     * @method _IH_PostWithReservedSlug_QB whereDeletedAt($value)
     * @method PostWithReservedSlug baseSole(array|string $columns = ['*'])
     * @method PostWithReservedSlug create(array $attributes = [])
     * @method _IH_PostWithReservedSlug_C|PostWithReservedSlug[] cursor()
     * @method PostWithReservedSlug|null|_IH_PostWithReservedSlug_C|PostWithReservedSlug[] find($id, array|string $columns = ['*'])
     * @method _IH_PostWithReservedSlug_C|PostWithReservedSlug[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method PostWithReservedSlug|_IH_PostWithReservedSlug_C|PostWithReservedSlug[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method PostWithReservedSlug|_IH_PostWithReservedSlug_C|PostWithReservedSlug[] findOrFail($id, array|string $columns = ['*'])
     * @method PostWithReservedSlug|_IH_PostWithReservedSlug_C|PostWithReservedSlug[] findOrNew($id, array|string $columns = ['*'])
     * @method PostWithReservedSlug first(array|string $columns = ['*'])
     * @method PostWithReservedSlug firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method PostWithReservedSlug firstOrCreate(array $attributes = [], array $values = [])
     * @method PostWithReservedSlug firstOrFail(array|string $columns = ['*'])
     * @method PostWithReservedSlug firstOrNew(array $attributes = [], array $values = [])
     * @method PostWithReservedSlug firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method PostWithReservedSlug forceCreate(array $attributes)
     * @method _IH_PostWithReservedSlug_C|PostWithReservedSlug[] fromQuery(string $query, array $bindings = [])
     * @method _IH_PostWithReservedSlug_C|PostWithReservedSlug[] get(array|string $columns = ['*'])
     * @method PostWithReservedSlug getModel()
     * @method PostWithReservedSlug[] getModels(array|string $columns = ['*'])
     * @method _IH_PostWithReservedSlug_C|PostWithReservedSlug[] hydrate(array $items)
     * @method _IH_PostWithReservedSlug_C|PostWithReservedSlug[] lazy(int $chunkSize = 1000)
     * @method _IH_PostWithReservedSlug_C|PostWithReservedSlug[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_PostWithReservedSlug_C|PostWithReservedSlug[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method PostWithReservedSlug make(array $attributes = [])
     * @method PostWithReservedSlug newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|PostWithReservedSlug[]|_IH_PostWithReservedSlug_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method PostWithReservedSlug restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|PostWithReservedSlug[]|_IH_PostWithReservedSlug_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method PostWithReservedSlug sole(array|string $columns = ['*'])
     * @method PostWithReservedSlug updateOrCreate(array $attributes, array $values = [])
     * @method _IH_PostWithReservedSlug_QB findSimilarSlugs(string $attribute, array $config, string $slug)
     * @method _IH_PostWithReservedSlug_QB withUniqueSlugConstraints(Model $model, string $attribute, array $config, string $slug)
     */
    class _IH_PostWithReservedSlug_QB extends _BaseBuilder {}
    
    /**
     * @method PostWithSoftDeletingIncludeTrashed|null getOrPut($key, $value)
     * @method PostWithSoftDeletingIncludeTrashed|$this shift(int $count = 1)
     * @method PostWithSoftDeletingIncludeTrashed|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method PostWithSoftDeletingIncludeTrashed|$this pop(int $count = 1)
     * @method PostWithSoftDeletingIncludeTrashed|null pull($key, \Closure $default = null)
     * @method PostWithSoftDeletingIncludeTrashed|null last(callable $callback = null, \Closure $default = null)
     * @method PostWithSoftDeletingIncludeTrashed|$this random(callable|int|null $number = null)
     * @method PostWithSoftDeletingIncludeTrashed|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method PostWithSoftDeletingIncludeTrashed|null get($key, \Closure $default = null)
     * @method PostWithSoftDeletingIncludeTrashed|null first(callable $callback = null, \Closure $default = null)
     * @method PostWithSoftDeletingIncludeTrashed|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method PostWithSoftDeletingIncludeTrashed|null find($key, $default = null)
     * @method PostWithSoftDeletingIncludeTrashed[] all()
     */
    class _IH_PostWithSoftDeletingIncludeTrashed_C extends _BaseCollection {
        /**
         * @param int $size
         * @return PostWithSoftDeletingIncludeTrashed[][]|Collection<_IH_PostWithSoftDeletingIncludeTrashed_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_PostWithSoftDeletingIncludeTrashed_QB whereId($value)
     * @method _IH_PostWithSoftDeletingIncludeTrashed_QB whereTitle($value)
     * @method _IH_PostWithSoftDeletingIncludeTrashed_QB whereSubtitle($value)
     * @method _IH_PostWithSoftDeletingIncludeTrashed_QB whereSlug($value)
     * @method _IH_PostWithSoftDeletingIncludeTrashed_QB whereDummy($value)
     * @method _IH_PostWithSoftDeletingIncludeTrashed_QB whereAuthorId($value)
     * @method _IH_PostWithSoftDeletingIncludeTrashed_QB whereDeletedAt($value)
     * @method PostWithSoftDeletingIncludeTrashed baseSole(array|string $columns = ['*'])
     * @method PostWithSoftDeletingIncludeTrashed create(array $attributes = [])
     * @method _IH_PostWithSoftDeletingIncludeTrashed_C|PostWithSoftDeletingIncludeTrashed[] cursor()
     * @method PostWithSoftDeletingIncludeTrashed|null|_IH_PostWithSoftDeletingIncludeTrashed_C|PostWithSoftDeletingIncludeTrashed[] find($id, array|string $columns = ['*'])
     * @method _IH_PostWithSoftDeletingIncludeTrashed_C|PostWithSoftDeletingIncludeTrashed[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method PostWithSoftDeletingIncludeTrashed|_IH_PostWithSoftDeletingIncludeTrashed_C|PostWithSoftDeletingIncludeTrashed[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method PostWithSoftDeletingIncludeTrashed|_IH_PostWithSoftDeletingIncludeTrashed_C|PostWithSoftDeletingIncludeTrashed[] findOrFail($id, array|string $columns = ['*'])
     * @method PostWithSoftDeletingIncludeTrashed|_IH_PostWithSoftDeletingIncludeTrashed_C|PostWithSoftDeletingIncludeTrashed[] findOrNew($id, array|string $columns = ['*'])
     * @method PostWithSoftDeletingIncludeTrashed first(array|string $columns = ['*'])
     * @method PostWithSoftDeletingIncludeTrashed firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method PostWithSoftDeletingIncludeTrashed firstOrCreate(array $attributes = [], array $values = [])
     * @method PostWithSoftDeletingIncludeTrashed firstOrFail(array|string $columns = ['*'])
     * @method PostWithSoftDeletingIncludeTrashed firstOrNew(array $attributes = [], array $values = [])
     * @method PostWithSoftDeletingIncludeTrashed firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method PostWithSoftDeletingIncludeTrashed forceCreate(array $attributes)
     * @method _IH_PostWithSoftDeletingIncludeTrashed_C|PostWithSoftDeletingIncludeTrashed[] fromQuery(string $query, array $bindings = [])
     * @method _IH_PostWithSoftDeletingIncludeTrashed_C|PostWithSoftDeletingIncludeTrashed[] get(array|string $columns = ['*'])
     * @method PostWithSoftDeletingIncludeTrashed getModel()
     * @method PostWithSoftDeletingIncludeTrashed[] getModels(array|string $columns = ['*'])
     * @method _IH_PostWithSoftDeletingIncludeTrashed_C|PostWithSoftDeletingIncludeTrashed[] hydrate(array $items)
     * @method _IH_PostWithSoftDeletingIncludeTrashed_C|PostWithSoftDeletingIncludeTrashed[] lazy(int $chunkSize = 1000)
     * @method _IH_PostWithSoftDeletingIncludeTrashed_C|PostWithSoftDeletingIncludeTrashed[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_PostWithSoftDeletingIncludeTrashed_C|PostWithSoftDeletingIncludeTrashed[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method PostWithSoftDeletingIncludeTrashed make(array $attributes = [])
     * @method PostWithSoftDeletingIncludeTrashed newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|PostWithSoftDeletingIncludeTrashed[]|_IH_PostWithSoftDeletingIncludeTrashed_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method PostWithSoftDeletingIncludeTrashed restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|PostWithSoftDeletingIncludeTrashed[]|_IH_PostWithSoftDeletingIncludeTrashed_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method PostWithSoftDeletingIncludeTrashed sole(array|string $columns = ['*'])
     * @method PostWithSoftDeletingIncludeTrashed updateOrCreate(array $attributes, array $values = [])
     * @method _IH_PostWithSoftDeletingIncludeTrashed_QB findSimilarSlugs(string $attribute, array $config, string $slug)
     * @method _IH_PostWithSoftDeletingIncludeTrashed_QB withUniqueSlugConstraints(Model $model, string $attribute, array $config, string $slug)
     */
    class _IH_PostWithSoftDeletingIncludeTrashed_QB extends _BaseBuilder {}
    
    /**
     * @method PostWithSoftDeleting|null getOrPut($key, $value)
     * @method PostWithSoftDeleting|$this shift(int $count = 1)
     * @method PostWithSoftDeleting|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method PostWithSoftDeleting|$this pop(int $count = 1)
     * @method PostWithSoftDeleting|null pull($key, \Closure $default = null)
     * @method PostWithSoftDeleting|null last(callable $callback = null, \Closure $default = null)
     * @method PostWithSoftDeleting|$this random(callable|int|null $number = null)
     * @method PostWithSoftDeleting|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method PostWithSoftDeleting|null get($key, \Closure $default = null)
     * @method PostWithSoftDeleting|null first(callable $callback = null, \Closure $default = null)
     * @method PostWithSoftDeleting|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method PostWithSoftDeleting|null find($key, $default = null)
     * @method PostWithSoftDeleting[] all()
     */
    class _IH_PostWithSoftDeleting_C extends _BaseCollection {
        /**
         * @param int $size
         * @return PostWithSoftDeleting[][]|Collection<_IH_PostWithSoftDeleting_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_PostWithSoftDeleting_QB whereId($value)
     * @method _IH_PostWithSoftDeleting_QB whereTitle($value)
     * @method _IH_PostWithSoftDeleting_QB whereSubtitle($value)
     * @method _IH_PostWithSoftDeleting_QB whereSlug($value)
     * @method _IH_PostWithSoftDeleting_QB whereDummy($value)
     * @method _IH_PostWithSoftDeleting_QB whereAuthorId($value)
     * @method _IH_PostWithSoftDeleting_QB whereDeletedAt($value)
     * @method PostWithSoftDeleting baseSole(array|string $columns = ['*'])
     * @method PostWithSoftDeleting create(array $attributes = [])
     * @method _IH_PostWithSoftDeleting_C|PostWithSoftDeleting[] cursor()
     * @method PostWithSoftDeleting|null|_IH_PostWithSoftDeleting_C|PostWithSoftDeleting[] find($id, array|string $columns = ['*'])
     * @method _IH_PostWithSoftDeleting_C|PostWithSoftDeleting[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method PostWithSoftDeleting|_IH_PostWithSoftDeleting_C|PostWithSoftDeleting[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method PostWithSoftDeleting|_IH_PostWithSoftDeleting_C|PostWithSoftDeleting[] findOrFail($id, array|string $columns = ['*'])
     * @method PostWithSoftDeleting|_IH_PostWithSoftDeleting_C|PostWithSoftDeleting[] findOrNew($id, array|string $columns = ['*'])
     * @method PostWithSoftDeleting first(array|string $columns = ['*'])
     * @method PostWithSoftDeleting firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method PostWithSoftDeleting firstOrCreate(array $attributes = [], array $values = [])
     * @method PostWithSoftDeleting firstOrFail(array|string $columns = ['*'])
     * @method PostWithSoftDeleting firstOrNew(array $attributes = [], array $values = [])
     * @method PostWithSoftDeleting firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method PostWithSoftDeleting forceCreate(array $attributes)
     * @method _IH_PostWithSoftDeleting_C|PostWithSoftDeleting[] fromQuery(string $query, array $bindings = [])
     * @method _IH_PostWithSoftDeleting_C|PostWithSoftDeleting[] get(array|string $columns = ['*'])
     * @method PostWithSoftDeleting getModel()
     * @method PostWithSoftDeleting[] getModels(array|string $columns = ['*'])
     * @method _IH_PostWithSoftDeleting_C|PostWithSoftDeleting[] hydrate(array $items)
     * @method _IH_PostWithSoftDeleting_C|PostWithSoftDeleting[] lazy(int $chunkSize = 1000)
     * @method _IH_PostWithSoftDeleting_C|PostWithSoftDeleting[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_PostWithSoftDeleting_C|PostWithSoftDeleting[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method PostWithSoftDeleting make(array $attributes = [])
     * @method PostWithSoftDeleting newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|PostWithSoftDeleting[]|_IH_PostWithSoftDeleting_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method PostWithSoftDeleting restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|PostWithSoftDeleting[]|_IH_PostWithSoftDeleting_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method PostWithSoftDeleting sole(array|string $columns = ['*'])
     * @method PostWithSoftDeleting updateOrCreate(array $attributes, array $values = [])
     * @method _IH_PostWithSoftDeleting_QB findSimilarSlugs(string $attribute, array $config, string $slug)
     * @method _IH_PostWithSoftDeleting_QB withUniqueSlugConstraints(Model $model, string $attribute, array $config, string $slug)
     */
    class _IH_PostWithSoftDeleting_QB extends _BaseBuilder {}
    
    /**
     * @method PostWithUniqueSlugConstraints|null getOrPut($key, $value)
     * @method PostWithUniqueSlugConstraints|$this shift(int $count = 1)
     * @method PostWithUniqueSlugConstraints|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method PostWithUniqueSlugConstraints|$this pop(int $count = 1)
     * @method PostWithUniqueSlugConstraints|null pull($key, \Closure $default = null)
     * @method PostWithUniqueSlugConstraints|null last(callable $callback = null, \Closure $default = null)
     * @method PostWithUniqueSlugConstraints|$this random(callable|int|null $number = null)
     * @method PostWithUniqueSlugConstraints|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method PostWithUniqueSlugConstraints|null get($key, \Closure $default = null)
     * @method PostWithUniqueSlugConstraints|null first(callable $callback = null, \Closure $default = null)
     * @method PostWithUniqueSlugConstraints|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method PostWithUniqueSlugConstraints|null find($key, $default = null)
     * @method PostWithUniqueSlugConstraints[] all()
     */
    class _IH_PostWithUniqueSlugConstraints_C extends _BaseCollection {
        /**
         * @param int $size
         * @return PostWithUniqueSlugConstraints[][]|Collection<_IH_PostWithUniqueSlugConstraints_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_PostWithUniqueSlugConstraints_QB whereId($value)
     * @method _IH_PostWithUniqueSlugConstraints_QB whereTitle($value)
     * @method _IH_PostWithUniqueSlugConstraints_QB whereSubtitle($value)
     * @method _IH_PostWithUniqueSlugConstraints_QB whereSlug($value)
     * @method _IH_PostWithUniqueSlugConstraints_QB whereDummy($value)
     * @method _IH_PostWithUniqueSlugConstraints_QB whereAuthorId($value)
     * @method _IH_PostWithUniqueSlugConstraints_QB whereDeletedAt($value)
     * @method PostWithUniqueSlugConstraints baseSole(array|string $columns = ['*'])
     * @method PostWithUniqueSlugConstraints create(array $attributes = [])
     * @method _IH_PostWithUniqueSlugConstraints_C|PostWithUniqueSlugConstraints[] cursor()
     * @method PostWithUniqueSlugConstraints|null|_IH_PostWithUniqueSlugConstraints_C|PostWithUniqueSlugConstraints[] find($id, array|string $columns = ['*'])
     * @method _IH_PostWithUniqueSlugConstraints_C|PostWithUniqueSlugConstraints[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method PostWithUniqueSlugConstraints|_IH_PostWithUniqueSlugConstraints_C|PostWithUniqueSlugConstraints[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method PostWithUniqueSlugConstraints|_IH_PostWithUniqueSlugConstraints_C|PostWithUniqueSlugConstraints[] findOrFail($id, array|string $columns = ['*'])
     * @method PostWithUniqueSlugConstraints|_IH_PostWithUniqueSlugConstraints_C|PostWithUniqueSlugConstraints[] findOrNew($id, array|string $columns = ['*'])
     * @method PostWithUniqueSlugConstraints first(array|string $columns = ['*'])
     * @method PostWithUniqueSlugConstraints firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method PostWithUniqueSlugConstraints firstOrCreate(array $attributes = [], array $values = [])
     * @method PostWithUniqueSlugConstraints firstOrFail(array|string $columns = ['*'])
     * @method PostWithUniqueSlugConstraints firstOrNew(array $attributes = [], array $values = [])
     * @method PostWithUniqueSlugConstraints firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method PostWithUniqueSlugConstraints forceCreate(array $attributes)
     * @method _IH_PostWithUniqueSlugConstraints_C|PostWithUniqueSlugConstraints[] fromQuery(string $query, array $bindings = [])
     * @method _IH_PostWithUniqueSlugConstraints_C|PostWithUniqueSlugConstraints[] get(array|string $columns = ['*'])
     * @method PostWithUniqueSlugConstraints getModel()
     * @method PostWithUniqueSlugConstraints[] getModels(array|string $columns = ['*'])
     * @method _IH_PostWithUniqueSlugConstraints_C|PostWithUniqueSlugConstraints[] hydrate(array $items)
     * @method _IH_PostWithUniqueSlugConstraints_C|PostWithUniqueSlugConstraints[] lazy(int $chunkSize = 1000)
     * @method _IH_PostWithUniqueSlugConstraints_C|PostWithUniqueSlugConstraints[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_PostWithUniqueSlugConstraints_C|PostWithUniqueSlugConstraints[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method PostWithUniqueSlugConstraints make(array $attributes = [])
     * @method PostWithUniqueSlugConstraints newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|PostWithUniqueSlugConstraints[]|_IH_PostWithUniqueSlugConstraints_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method PostWithUniqueSlugConstraints restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|PostWithUniqueSlugConstraints[]|_IH_PostWithUniqueSlugConstraints_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method PostWithUniqueSlugConstraints sole(array|string $columns = ['*'])
     * @method PostWithUniqueSlugConstraints updateOrCreate(array $attributes, array $values = [])
     * @method _IH_PostWithUniqueSlugConstraints_QB findSimilarSlugs(string $attribute, array $config, string $slug)
     * @method _IH_PostWithUniqueSlugConstraints_QB withUniqueSlugConstraints(Model $model, string $attribute, array $config, string $slug)
     */
    class _IH_PostWithUniqueSlugConstraints_QB extends _BaseBuilder {}
    
    /**
     * @method Post|null getOrPut($key, $value)
     * @method Post|$this shift(int $count = 1)
     * @method Post|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Post|$this pop(int $count = 1)
     * @method Post|null pull($key, \Closure $default = null)
     * @method Post|null last(callable $callback = null, \Closure $default = null)
     * @method Post|$this random(callable|int|null $number = null)
     * @method Post|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Post|null get($key, \Closure $default = null)
     * @method Post|null first(callable $callback = null, \Closure $default = null)
     * @method Post|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Post|null find($key, $default = null)
     * @method Post[] all()
     */
    class _IH_Post_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Post[][]|Collection<_IH_Post_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_Post_QB whereId($value)
     * @method _IH_Post_QB whereTitle($value)
     * @method _IH_Post_QB whereSubtitle($value)
     * @method _IH_Post_QB whereSlug($value)
     * @method _IH_Post_QB whereDummy($value)
     * @method _IH_Post_QB whereAuthorId($value)
     * @method _IH_Post_QB whereDeletedAt($value)
     * @method Post baseSole(array|string $columns = ['*'])
     * @method Post create(array $attributes = [])
     * @method _IH_Post_C|Post[] cursor()
     * @method Post|null|_IH_Post_C|Post[] find($id, array|string $columns = ['*'])
     * @method _IH_Post_C|Post[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Post|_IH_Post_C|Post[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Post|_IH_Post_C|Post[] findOrFail($id, array|string $columns = ['*'])
     * @method Post|_IH_Post_C|Post[] findOrNew($id, array|string $columns = ['*'])
     * @method Post first(array|string $columns = ['*'])
     * @method Post firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Post firstOrCreate(array $attributes = [], array $values = [])
     * @method Post firstOrFail(array|string $columns = ['*'])
     * @method Post firstOrNew(array $attributes = [], array $values = [])
     * @method Post firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Post forceCreate(array $attributes)
     * @method _IH_Post_C|Post[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Post_C|Post[] get(array|string $columns = ['*'])
     * @method Post getModel()
     * @method Post[] getModels(array|string $columns = ['*'])
     * @method _IH_Post_C|Post[] hydrate(array $items)
     * @method _IH_Post_C|Post[] lazy(int $chunkSize = 1000)
     * @method _IH_Post_C|Post[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_Post_C|Post[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method Post make(array $attributes = [])
     * @method Post newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Post[]|_IH_Post_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Post restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|Post[]|_IH_Post_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Post sole(array|string $columns = ['*'])
     * @method Post updateOrCreate(array $attributes, array $values = [])
     * @method _IH_Post_QB findSimilarSlugs(string $attribute, array $config, string $slug)
     * @method _IH_Post_QB withUniqueSlugConstraints(Model $model, string $attribute, array $config, string $slug)
     */
    class _IH_Post_QB extends _BaseBuilder {}
}