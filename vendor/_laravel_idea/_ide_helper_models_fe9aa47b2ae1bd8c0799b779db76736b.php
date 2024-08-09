<?php //cd29c161800070545ad8b7b25cdf635e
/** @noinspection all */

namespace Cviebrock\EloquentSluggable\Tests\Models {

    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\BelongsTo;
    use Illuminate\Support\Carbon;
    use LaravelIdea\Helper\Cviebrock\EloquentSluggable\Tests\Models\_IH_Author_C;
    use LaravelIdea\Helper\Cviebrock\EloquentSluggable\Tests\Models\_IH_Author_QB;
    use LaravelIdea\Helper\Cviebrock\EloquentSluggable\Tests\Models\_IH_PostNotSluggable_C;
    use LaravelIdea\Helper\Cviebrock\EloquentSluggable\Tests\Models\_IH_PostNotSluggable_QB;
    use LaravelIdea\Helper\Cviebrock\EloquentSluggable\Tests\Models\_IH_PostShortConfigWithScopeHelpers_C;
    use LaravelIdea\Helper\Cviebrock\EloquentSluggable\Tests\Models\_IH_PostShortConfigWithScopeHelpers_QB;
    use LaravelIdea\Helper\Cviebrock\EloquentSluggable\Tests\Models\_IH_PostShortConfig_C;
    use LaravelIdea\Helper\Cviebrock\EloquentSluggable\Tests\Models\_IH_PostShortConfig_QB;
    use LaravelIdea\Helper\Cviebrock\EloquentSluggable\Tests\Models\_IH_PostWithCustomCallableMethod_C;
    use LaravelIdea\Helper\Cviebrock\EloquentSluggable\Tests\Models\_IH_PostWithCustomCallableMethod_QB;
    use LaravelIdea\Helper\Cviebrock\EloquentSluggable\Tests\Models\_IH_PostWithCustomEngine2_C;
    use LaravelIdea\Helper\Cviebrock\EloquentSluggable\Tests\Models\_IH_PostWithCustomEngine2_QB;
    use LaravelIdea\Helper\Cviebrock\EloquentSluggable\Tests\Models\_IH_PostWithCustomEngineOptions_C;
    use LaravelIdea\Helper\Cviebrock\EloquentSluggable\Tests\Models\_IH_PostWithCustomEngineOptions_QB;
    use LaravelIdea\Helper\Cviebrock\EloquentSluggable\Tests\Models\_IH_PostWithCustomEngine_C;
    use LaravelIdea\Helper\Cviebrock\EloquentSluggable\Tests\Models\_IH_PostWithCustomEngine_QB;
    use LaravelIdea\Helper\Cviebrock\EloquentSluggable\Tests\Models\_IH_PostWithCustomMethod_C;
    use LaravelIdea\Helper\Cviebrock\EloquentSluggable\Tests\Models\_IH_PostWithCustomMethod_QB;
    use LaravelIdea\Helper\Cviebrock\EloquentSluggable\Tests\Models\_IH_PostWithCustomSeparator_C;
    use LaravelIdea\Helper\Cviebrock\EloquentSluggable\Tests\Models\_IH_PostWithCustomSeparator_QB;
    use LaravelIdea\Helper\Cviebrock\EloquentSluggable\Tests\Models\_IH_PostWithCustomSource_C;
    use LaravelIdea\Helper\Cviebrock\EloquentSluggable\Tests\Models\_IH_PostWithCustomSource_QB;
    use LaravelIdea\Helper\Cviebrock\EloquentSluggable\Tests\Models\_IH_PostWithCustomSuffix_C;
    use LaravelIdea\Helper\Cviebrock\EloquentSluggable\Tests\Models\_IH_PostWithCustomSuffix_QB;
    use LaravelIdea\Helper\Cviebrock\EloquentSluggable\Tests\Models\_IH_PostWithEmptySeparator_C;
    use LaravelIdea\Helper\Cviebrock\EloquentSluggable\Tests\Models\_IH_PostWithEmptySeparator_QB;
    use LaravelIdea\Helper\Cviebrock\EloquentSluggable\Tests\Models\_IH_PostWithFirstUniqueSuffix_C;
    use LaravelIdea\Helper\Cviebrock\EloquentSluggable\Tests\Models\_IH_PostWithFirstUniqueSuffix_QB;
    use LaravelIdea\Helper\Cviebrock\EloquentSluggable\Tests\Models\_IH_PostWithForeignRuleset_C;
    use LaravelIdea\Helper\Cviebrock\EloquentSluggable\Tests\Models\_IH_PostWithForeignRuleset_QB;
    use LaravelIdea\Helper\Cviebrock\EloquentSluggable\Tests\Models\_IH_PostWithIdSourceOnSaved_C;
    use LaravelIdea\Helper\Cviebrock\EloquentSluggable\Tests\Models\_IH_PostWithIdSourceOnSaved_QB;
    use LaravelIdea\Helper\Cviebrock\EloquentSluggable\Tests\Models\_IH_PostWithIdSource_C;
    use LaravelIdea\Helper\Cviebrock\EloquentSluggable\Tests\Models\_IH_PostWithIdSource_QB;
    use LaravelIdea\Helper\Cviebrock\EloquentSluggable\Tests\Models\_IH_PostWithIncludeTrashed_C;
    use LaravelIdea\Helper\Cviebrock\EloquentSluggable\Tests\Models\_IH_PostWithIncludeTrashed_QB;
    use LaravelIdea\Helper\Cviebrock\EloquentSluggable\Tests\Models\_IH_PostWithMaxLengthSplitWords_C;
    use LaravelIdea\Helper\Cviebrock\EloquentSluggable\Tests\Models\_IH_PostWithMaxLengthSplitWords_QB;
    use LaravelIdea\Helper\Cviebrock\EloquentSluggable\Tests\Models\_IH_PostWithMaxLength_C;
    use LaravelIdea\Helper\Cviebrock\EloquentSluggable\Tests\Models\_IH_PostWithMaxLength_QB;
    use LaravelIdea\Helper\Cviebrock\EloquentSluggable\Tests\Models\_IH_PostWithMultipleSlugsAndCustomSlugKey_C;
    use LaravelIdea\Helper\Cviebrock\EloquentSluggable\Tests\Models\_IH_PostWithMultipleSlugsAndCustomSlugKey_QB;
    use LaravelIdea\Helper\Cviebrock\EloquentSluggable\Tests\Models\_IH_PostWithMultipleSlugsAndHelperTrait_C;
    use LaravelIdea\Helper\Cviebrock\EloquentSluggable\Tests\Models\_IH_PostWithMultipleSlugsAndHelperTrait_QB;
    use LaravelIdea\Helper\Cviebrock\EloquentSluggable\Tests\Models\_IH_PostWithMultipleSlugs_C;
    use LaravelIdea\Helper\Cviebrock\EloquentSluggable\Tests\Models\_IH_PostWithMultipleSlugs_QB;
    use LaravelIdea\Helper\Cviebrock\EloquentSluggable\Tests\Models\_IH_PostWithMultipleSources_C;
    use LaravelIdea\Helper\Cviebrock\EloquentSluggable\Tests\Models\_IH_PostWithMultipleSources_QB;
    use LaravelIdea\Helper\Cviebrock\EloquentSluggable\Tests\Models\_IH_PostWithNoSource_C;
    use LaravelIdea\Helper\Cviebrock\EloquentSluggable\Tests\Models\_IH_PostWithNoSource_QB;
    use LaravelIdea\Helper\Cviebrock\EloquentSluggable\Tests\Models\_IH_PostWithOnUpdate_C;
    use LaravelIdea\Helper\Cviebrock\EloquentSluggable\Tests\Models\_IH_PostWithOnUpdate_QB;
    use LaravelIdea\Helper\Cviebrock\EloquentSluggable\Tests\Models\_IH_PostWithRelation_C;
    use LaravelIdea\Helper\Cviebrock\EloquentSluggable\Tests\Models\_IH_PostWithRelation_QB;
    use LaravelIdea\Helper\Cviebrock\EloquentSluggable\Tests\Models\_IH_PostWithReservedSlug_C;
    use LaravelIdea\Helper\Cviebrock\EloquentSluggable\Tests\Models\_IH_PostWithReservedSlug_QB;
    use LaravelIdea\Helper\Cviebrock\EloquentSluggable\Tests\Models\_IH_PostWithSoftDeletingIncludeTrashed_C;
    use LaravelIdea\Helper\Cviebrock\EloquentSluggable\Tests\Models\_IH_PostWithSoftDeletingIncludeTrashed_QB;
    use LaravelIdea\Helper\Cviebrock\EloquentSluggable\Tests\Models\_IH_PostWithSoftDeleting_C;
    use LaravelIdea\Helper\Cviebrock\EloquentSluggable\Tests\Models\_IH_PostWithSoftDeleting_QB;
    use LaravelIdea\Helper\Cviebrock\EloquentSluggable\Tests\Models\_IH_PostWithUniqueSlugConstraints_C;
    use LaravelIdea\Helper\Cviebrock\EloquentSluggable\Tests\Models\_IH_PostWithUniqueSlugConstraints_QB;
    use LaravelIdea\Helper\Cviebrock\EloquentSluggable\Tests\Models\_IH_Post_C;
    use LaravelIdea\Helper\Cviebrock\EloquentSluggable\Tests\Models\_IH_Post_QB;
    
    /**
     * @property int $id
     * @property string $name
     * @method static _IH_Author_QB onWriteConnection()
     * @method _IH_Author_QB newQuery()
     * @method static _IH_Author_QB on(null|string $connection = null)
     * @method static _IH_Author_QB query()
     * @method static _IH_Author_QB with(array|string $relations)
     * @method _IH_Author_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Author_C|Author[] all()
     * @foreignLinks id,\Cviebrock\EloquentSluggable\Tests\Models\PostNotSluggable,author_id
     * @mixin _IH_Author_QB
     */
    class Author extends Model {}
    
    /**
     * @property int $id
     * @property string $title
     * @property string|null $subtitle
     * @property string|null $slug
     * @property string|null $dummy
     * @property int|null $author_id
     * @property Carbon|null $deleted_at
     * @method static _IH_Post_QB onWriteConnection()
     * @method _IH_Post_QB newQuery()
     * @method static _IH_Post_QB on(null|string $connection = null)
     * @method static _IH_Post_QB query()
     * @method static _IH_Post_QB with(array|string $relations)
     * @method _IH_Post_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Post_C|Post[] all()
     * @ownLinks author_id,\Cviebrock\EloquentSluggable\Tests\Models\Author,id
     * @mixin _IH_Post_QB
     */
    class Post extends Model {}
    
    /**
     * @property int $id
     * @property string $title
     * @property string|null $subtitle
     * @property string|null $slug
     * @property string|null $dummy
     * @property int|null $author_id
     * @property Carbon|null $deleted_at
     * @method static _IH_PostNotSluggable_QB onWriteConnection()
     * @method _IH_PostNotSluggable_QB newQuery()
     * @method static _IH_PostNotSluggable_QB on(null|string $connection = null)
     * @method static _IH_PostNotSluggable_QB query()
     * @method static _IH_PostNotSluggable_QB with(array|string $relations)
     * @method _IH_PostNotSluggable_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_PostNotSluggable_C|PostNotSluggable[] all()
     * @ownLinks author_id,\Cviebrock\EloquentSluggable\Tests\Models\Author,id
     * @mixin _IH_PostNotSluggable_QB
     */
    class PostNotSluggable extends Model {}
    
    /**
     * @property int $id
     * @property string $title
     * @property string|null $subtitle
     * @property string|null $slug
     * @property string|null $dummy
     * @property int|null $author_id
     * @property Carbon|null $deleted_at
     * @method static _IH_PostShortConfig_QB onWriteConnection()
     * @method _IH_PostShortConfig_QB newQuery()
     * @method static _IH_PostShortConfig_QB on(null|string $connection = null)
     * @method static _IH_PostShortConfig_QB query()
     * @method static _IH_PostShortConfig_QB with(array|string $relations)
     * @method _IH_PostShortConfig_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_PostShortConfig_C|PostShortConfig[] all()
     * @ownLinks author_id,\Cviebrock\EloquentSluggable\Tests\Models\Author,id
     * @mixin _IH_PostShortConfig_QB
     */
    class PostShortConfig extends Model {}
    
    /**
     * @property int $id
     * @property string $title
     * @property string|null $subtitle
     * @property string|null $slug
     * @property string|null $dummy
     * @property int|null $author_id
     * @property Carbon|null $deleted_at
     * @method static _IH_PostShortConfigWithScopeHelpers_QB onWriteConnection()
     * @method _IH_PostShortConfigWithScopeHelpers_QB newQuery()
     * @method static _IH_PostShortConfigWithScopeHelpers_QB on(null|string $connection = null)
     * @method static _IH_PostShortConfigWithScopeHelpers_QB query()
     * @method static _IH_PostShortConfigWithScopeHelpers_QB with(array|string $relations)
     * @method _IH_PostShortConfigWithScopeHelpers_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_PostShortConfigWithScopeHelpers_C|PostShortConfigWithScopeHelpers[] all()
     * @ownLinks author_id,\Cviebrock\EloquentSluggable\Tests\Models\Author,id
     * @mixin _IH_PostShortConfigWithScopeHelpers_QB
     */
    class PostShortConfigWithScopeHelpers extends Model {}
    
    /**
     * @property int $id
     * @property string $title
     * @property string|null $subtitle
     * @property string|null $slug
     * @property string|null $dummy
     * @property int|null $author_id
     * @property Carbon|null $deleted_at
     * @method static _IH_PostWithCustomCallableMethod_QB onWriteConnection()
     * @method _IH_PostWithCustomCallableMethod_QB newQuery()
     * @method static _IH_PostWithCustomCallableMethod_QB on(null|string $connection = null)
     * @method static _IH_PostWithCustomCallableMethod_QB query()
     * @method static _IH_PostWithCustomCallableMethod_QB with(array|string $relations)
     * @method _IH_PostWithCustomCallableMethod_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_PostWithCustomCallableMethod_C|PostWithCustomCallableMethod[] all()
     * @ownLinks author_id,\Cviebrock\EloquentSluggable\Tests\Models\Author,id
     * @mixin _IH_PostWithCustomCallableMethod_QB
     */
    class PostWithCustomCallableMethod extends Model {}
    
    /**
     * @property int $id
     * @property string $title
     * @property string|null $subtitle
     * @property string|null $slug
     * @property string|null $dummy
     * @property int|null $author_id
     * @property Carbon|null $deleted_at
     * @method static _IH_PostWithCustomEngine_QB onWriteConnection()
     * @method _IH_PostWithCustomEngine_QB newQuery()
     * @method static _IH_PostWithCustomEngine_QB on(null|string $connection = null)
     * @method static _IH_PostWithCustomEngine_QB query()
     * @method static _IH_PostWithCustomEngine_QB with(array|string $relations)
     * @method _IH_PostWithCustomEngine_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_PostWithCustomEngine_C|PostWithCustomEngine[] all()
     * @ownLinks author_id,\Cviebrock\EloquentSluggable\Tests\Models\Author,id
     * @mixin _IH_PostWithCustomEngine_QB
     */
    class PostWithCustomEngine extends Model {}
    
    /**
     * @property int $id
     * @property string $title
     * @property string|null $subtitle
     * @property string|null $slug
     * @property string|null $dummy
     * @property int|null $author_id
     * @property Carbon|null $deleted_at
     * @method static _IH_PostWithCustomEngine2_QB onWriteConnection()
     * @method _IH_PostWithCustomEngine2_QB newQuery()
     * @method static _IH_PostWithCustomEngine2_QB on(null|string $connection = null)
     * @method static _IH_PostWithCustomEngine2_QB query()
     * @method static _IH_PostWithCustomEngine2_QB with(array|string $relations)
     * @method _IH_PostWithCustomEngine2_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_PostWithCustomEngine2_C|PostWithCustomEngine2[] all()
     * @ownLinks author_id,\Cviebrock\EloquentSluggable\Tests\Models\Author,id
     * @mixin _IH_PostWithCustomEngine2_QB
     */
    class PostWithCustomEngine2 extends Model {}
    
    /**
     * @property int $id
     * @property string $title
     * @property string|null $subtitle
     * @property string|null $slug
     * @property string|null $dummy
     * @property int|null $author_id
     * @property Carbon|null $deleted_at
     * @method static _IH_PostWithCustomEngineOptions_QB onWriteConnection()
     * @method _IH_PostWithCustomEngineOptions_QB newQuery()
     * @method static _IH_PostWithCustomEngineOptions_QB on(null|string $connection = null)
     * @method static _IH_PostWithCustomEngineOptions_QB query()
     * @method static _IH_PostWithCustomEngineOptions_QB with(array|string $relations)
     * @method _IH_PostWithCustomEngineOptions_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_PostWithCustomEngineOptions_C|PostWithCustomEngineOptions[] all()
     * @ownLinks author_id,\Cviebrock\EloquentSluggable\Tests\Models\Author,id
     * @mixin _IH_PostWithCustomEngineOptions_QB
     */
    class PostWithCustomEngineOptions extends Model {}
    
    /**
     * @property int $id
     * @property string $title
     * @property string|null $subtitle
     * @property string|null $slug
     * @property string|null $dummy
     * @property int|null $author_id
     * @property Carbon|null $deleted_at
     * @method static _IH_PostWithCustomMethod_QB onWriteConnection()
     * @method _IH_PostWithCustomMethod_QB newQuery()
     * @method static _IH_PostWithCustomMethod_QB on(null|string $connection = null)
     * @method static _IH_PostWithCustomMethod_QB query()
     * @method static _IH_PostWithCustomMethod_QB with(array|string $relations)
     * @method _IH_PostWithCustomMethod_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_PostWithCustomMethod_C|PostWithCustomMethod[] all()
     * @ownLinks author_id,\Cviebrock\EloquentSluggable\Tests\Models\Author,id
     * @mixin _IH_PostWithCustomMethod_QB
     */
    class PostWithCustomMethod extends Model {}
    
    /**
     * @property int $id
     * @property string $title
     * @property string|null $subtitle
     * @property string|null $slug
     * @property string|null $dummy
     * @property int|null $author_id
     * @property Carbon|null $deleted_at
     * @method static _IH_PostWithCustomSeparator_QB onWriteConnection()
     * @method _IH_PostWithCustomSeparator_QB newQuery()
     * @method static _IH_PostWithCustomSeparator_QB on(null|string $connection = null)
     * @method static _IH_PostWithCustomSeparator_QB query()
     * @method static _IH_PostWithCustomSeparator_QB with(array|string $relations)
     * @method _IH_PostWithCustomSeparator_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_PostWithCustomSeparator_C|PostWithCustomSeparator[] all()
     * @ownLinks author_id,\Cviebrock\EloquentSluggable\Tests\Models\Author,id
     * @mixin _IH_PostWithCustomSeparator_QB
     */
    class PostWithCustomSeparator extends Model {}
    
    /**
     * @property int $id
     * @property string $title
     * @property string|null $subtitle
     * @property string|null $slug
     * @property string|null $dummy
     * @property int|null $author_id
     * @property Carbon|null $deleted_at
     * @method static _IH_PostWithCustomSource_QB onWriteConnection()
     * @method _IH_PostWithCustomSource_QB newQuery()
     * @method static _IH_PostWithCustomSource_QB on(null|string $connection = null)
     * @method static _IH_PostWithCustomSource_QB query()
     * @method static _IH_PostWithCustomSource_QB with(array|string $relations)
     * @method _IH_PostWithCustomSource_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_PostWithCustomSource_C|PostWithCustomSource[] all()
     * @ownLinks author_id,\Cviebrock\EloquentSluggable\Tests\Models\Author,id
     * @mixin _IH_PostWithCustomSource_QB
     */
    class PostWithCustomSource extends Model {}
    
    /**
     * @property int $id
     * @property string $title
     * @property string|null $subtitle
     * @property string|null $slug
     * @property string|null $dummy
     * @property int|null $author_id
     * @property Carbon|null $deleted_at
     * @method static _IH_PostWithCustomSuffix_QB onWriteConnection()
     * @method _IH_PostWithCustomSuffix_QB newQuery()
     * @method static _IH_PostWithCustomSuffix_QB on(null|string $connection = null)
     * @method static _IH_PostWithCustomSuffix_QB query()
     * @method static _IH_PostWithCustomSuffix_QB with(array|string $relations)
     * @method _IH_PostWithCustomSuffix_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_PostWithCustomSuffix_C|PostWithCustomSuffix[] all()
     * @ownLinks author_id,\Cviebrock\EloquentSluggable\Tests\Models\Author,id
     * @mixin _IH_PostWithCustomSuffix_QB
     */
    class PostWithCustomSuffix extends Model {}
    
    /**
     * @property int $id
     * @property string $title
     * @property string|null $subtitle
     * @property string|null $slug
     * @property string|null $dummy
     * @property int|null $author_id
     * @property Carbon|null $deleted_at
     * @method static _IH_PostWithEmptySeparator_QB onWriteConnection()
     * @method _IH_PostWithEmptySeparator_QB newQuery()
     * @method static _IH_PostWithEmptySeparator_QB on(null|string $connection = null)
     * @method static _IH_PostWithEmptySeparator_QB query()
     * @method static _IH_PostWithEmptySeparator_QB with(array|string $relations)
     * @method _IH_PostWithEmptySeparator_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_PostWithEmptySeparator_C|PostWithEmptySeparator[] all()
     * @ownLinks author_id,\Cviebrock\EloquentSluggable\Tests\Models\Author,id
     * @mixin _IH_PostWithEmptySeparator_QB
     */
    class PostWithEmptySeparator extends Model {}
    
    /**
     * @property int $id
     * @property string $title
     * @property string|null $subtitle
     * @property string|null $slug
     * @property string|null $dummy
     * @property int|null $author_id
     * @property Carbon|null $deleted_at
     * @method static _IH_PostWithFirstUniqueSuffix_QB onWriteConnection()
     * @method _IH_PostWithFirstUniqueSuffix_QB newQuery()
     * @method static _IH_PostWithFirstUniqueSuffix_QB on(null|string $connection = null)
     * @method static _IH_PostWithFirstUniqueSuffix_QB query()
     * @method static _IH_PostWithFirstUniqueSuffix_QB with(array|string $relations)
     * @method _IH_PostWithFirstUniqueSuffix_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_PostWithFirstUniqueSuffix_C|PostWithFirstUniqueSuffix[] all()
     * @ownLinks author_id,\Cviebrock\EloquentSluggable\Tests\Models\Author,id
     * @mixin _IH_PostWithFirstUniqueSuffix_QB
     */
    class PostWithFirstUniqueSuffix extends Model {}
    
    /**
     * @property int $id
     * @property string $title
     * @property string|null $subtitle
     * @property string|null $slug
     * @property string|null $dummy
     * @property int|null $author_id
     * @property Carbon|null $deleted_at
     * @method static _IH_PostWithForeignRuleset_QB onWriteConnection()
     * @method _IH_PostWithForeignRuleset_QB newQuery()
     * @method static _IH_PostWithForeignRuleset_QB on(null|string $connection = null)
     * @method static _IH_PostWithForeignRuleset_QB query()
     * @method static _IH_PostWithForeignRuleset_QB with(array|string $relations)
     * @method _IH_PostWithForeignRuleset_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_PostWithForeignRuleset_C|PostWithForeignRuleset[] all()
     * @ownLinks author_id,\Cviebrock\EloquentSluggable\Tests\Models\Author,id
     * @mixin _IH_PostWithForeignRuleset_QB
     */
    class PostWithForeignRuleset extends Model {}
    
    /**
     * @property int $id
     * @property string $title
     * @property string|null $subtitle
     * @property string|null $slug
     * @property string|null $dummy
     * @property int|null $author_id
     * @property Carbon|null $deleted_at
     * @method static _IH_PostWithIdSource_QB onWriteConnection()
     * @method _IH_PostWithIdSource_QB newQuery()
     * @method static _IH_PostWithIdSource_QB on(null|string $connection = null)
     * @method static _IH_PostWithIdSource_QB query()
     * @method static _IH_PostWithIdSource_QB with(array|string $relations)
     * @method _IH_PostWithIdSource_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_PostWithIdSource_C|PostWithIdSource[] all()
     * @ownLinks author_id,\Cviebrock\EloquentSluggable\Tests\Models\Author,id
     * @mixin _IH_PostWithIdSource_QB
     */
    class PostWithIdSource extends Model {}
    
    /**
     * @property int $id
     * @property string $title
     * @property string|null $subtitle
     * @property string|null $slug
     * @property string|null $dummy
     * @property int|null $author_id
     * @property Carbon|null $deleted_at
     * @method static _IH_PostWithIdSourceOnSaved_QB onWriteConnection()
     * @method _IH_PostWithIdSourceOnSaved_QB newQuery()
     * @method static _IH_PostWithIdSourceOnSaved_QB on(null|string $connection = null)
     * @method static _IH_PostWithIdSourceOnSaved_QB query()
     * @method static _IH_PostWithIdSourceOnSaved_QB with(array|string $relations)
     * @method _IH_PostWithIdSourceOnSaved_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_PostWithIdSourceOnSaved_C|PostWithIdSourceOnSaved[] all()
     * @ownLinks author_id,\Cviebrock\EloquentSluggable\Tests\Models\Author,id
     * @mixin _IH_PostWithIdSourceOnSaved_QB
     */
    class PostWithIdSourceOnSaved extends Model {}
    
    /**
     * @property int $id
     * @property string $title
     * @property string|null $subtitle
     * @property string|null $slug
     * @property string|null $dummy
     * @property int|null $author_id
     * @property Carbon|null $deleted_at
     * @method static _IH_PostWithIncludeTrashed_QB onWriteConnection()
     * @method _IH_PostWithIncludeTrashed_QB newQuery()
     * @method static _IH_PostWithIncludeTrashed_QB on(null|string $connection = null)
     * @method static _IH_PostWithIncludeTrashed_QB query()
     * @method static _IH_PostWithIncludeTrashed_QB with(array|string $relations)
     * @method _IH_PostWithIncludeTrashed_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_PostWithIncludeTrashed_C|PostWithIncludeTrashed[] all()
     * @ownLinks author_id,\Cviebrock\EloquentSluggable\Tests\Models\Author,id
     * @mixin _IH_PostWithIncludeTrashed_QB
     */
    class PostWithIncludeTrashed extends Model {}
    
    /**
     * @property int $id
     * @property string $title
     * @property string|null $subtitle
     * @property string|null $slug
     * @property string|null $dummy
     * @property int|null $author_id
     * @property Carbon|null $deleted_at
     * @method static _IH_PostWithMaxLength_QB onWriteConnection()
     * @method _IH_PostWithMaxLength_QB newQuery()
     * @method static _IH_PostWithMaxLength_QB on(null|string $connection = null)
     * @method static _IH_PostWithMaxLength_QB query()
     * @method static _IH_PostWithMaxLength_QB with(array|string $relations)
     * @method _IH_PostWithMaxLength_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_PostWithMaxLength_C|PostWithMaxLength[] all()
     * @ownLinks author_id,\Cviebrock\EloquentSluggable\Tests\Models\Author,id
     * @mixin _IH_PostWithMaxLength_QB
     */
    class PostWithMaxLength extends Model {}
    
    /**
     * @property int $id
     * @property string $title
     * @property string|null $subtitle
     * @property string|null $slug
     * @property string|null $dummy
     * @property int|null $author_id
     * @property Carbon|null $deleted_at
     * @method static _IH_PostWithMaxLengthSplitWords_QB onWriteConnection()
     * @method _IH_PostWithMaxLengthSplitWords_QB newQuery()
     * @method static _IH_PostWithMaxLengthSplitWords_QB on(null|string $connection = null)
     * @method static _IH_PostWithMaxLengthSplitWords_QB query()
     * @method static _IH_PostWithMaxLengthSplitWords_QB with(array|string $relations)
     * @method _IH_PostWithMaxLengthSplitWords_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_PostWithMaxLengthSplitWords_C|PostWithMaxLengthSplitWords[] all()
     * @ownLinks author_id,\Cviebrock\EloquentSluggable\Tests\Models\Author,id
     * @mixin _IH_PostWithMaxLengthSplitWords_QB
     */
    class PostWithMaxLengthSplitWords extends Model {}
    
    /**
     * @property int $id
     * @property string $title
     * @property string|null $subtitle
     * @property string|null $slug
     * @property string|null $dummy
     * @property int|null $author_id
     * @property Carbon|null $deleted_at
     * @method static _IH_PostWithMultipleSlugs_QB onWriteConnection()
     * @method _IH_PostWithMultipleSlugs_QB newQuery()
     * @method static _IH_PostWithMultipleSlugs_QB on(null|string $connection = null)
     * @method static _IH_PostWithMultipleSlugs_QB query()
     * @method static _IH_PostWithMultipleSlugs_QB with(array|string $relations)
     * @method _IH_PostWithMultipleSlugs_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_PostWithMultipleSlugs_C|PostWithMultipleSlugs[] all()
     * @ownLinks author_id,\Cviebrock\EloquentSluggable\Tests\Models\Author,id
     * @mixin _IH_PostWithMultipleSlugs_QB
     */
    class PostWithMultipleSlugs extends Model {}
    
    /**
     * @method static _IH_PostWithMultipleSlugsAndCustomSlugKey_QB onWriteConnection()
     * @method _IH_PostWithMultipleSlugsAndCustomSlugKey_QB newQuery()
     * @method static _IH_PostWithMultipleSlugsAndCustomSlugKey_QB on(null|string $connection = null)
     * @method static _IH_PostWithMultipleSlugsAndCustomSlugKey_QB query()
     * @method static _IH_PostWithMultipleSlugsAndCustomSlugKey_QB with(array|string $relations)
     * @method _IH_PostWithMultipleSlugsAndCustomSlugKey_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_PostWithMultipleSlugsAndCustomSlugKey_C|PostWithMultipleSlugsAndCustomSlugKey[] all()
     * @mixin _IH_PostWithMultipleSlugsAndCustomSlugKey_QB
     */
    class PostWithMultipleSlugsAndCustomSlugKey extends Model {}
    
    /**
     * @property int $id
     * @property string $title
     * @property string|null $subtitle
     * @property string|null $slug
     * @property string|null $dummy
     * @property int|null $author_id
     * @property Carbon|null $deleted_at
     * @method static _IH_PostWithMultipleSlugsAndHelperTrait_QB onWriteConnection()
     * @method _IH_PostWithMultipleSlugsAndHelperTrait_QB newQuery()
     * @method static _IH_PostWithMultipleSlugsAndHelperTrait_QB on(null|string $connection = null)
     * @method static _IH_PostWithMultipleSlugsAndHelperTrait_QB query()
     * @method static _IH_PostWithMultipleSlugsAndHelperTrait_QB with(array|string $relations)
     * @method _IH_PostWithMultipleSlugsAndHelperTrait_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_PostWithMultipleSlugsAndHelperTrait_C|PostWithMultipleSlugsAndHelperTrait[] all()
     * @ownLinks author_id,\Cviebrock\EloquentSluggable\Tests\Models\Author,id
     * @mixin _IH_PostWithMultipleSlugsAndHelperTrait_QB
     */
    class PostWithMultipleSlugsAndHelperTrait extends Model {}
    
    /**
     * @property int $id
     * @property string $title
     * @property string|null $subtitle
     * @property string|null $slug
     * @property string|null $dummy
     * @property int|null $author_id
     * @property Carbon|null $deleted_at
     * @method static _IH_PostWithMultipleSources_QB onWriteConnection()
     * @method _IH_PostWithMultipleSources_QB newQuery()
     * @method static _IH_PostWithMultipleSources_QB on(null|string $connection = null)
     * @method static _IH_PostWithMultipleSources_QB query()
     * @method static _IH_PostWithMultipleSources_QB with(array|string $relations)
     * @method _IH_PostWithMultipleSources_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_PostWithMultipleSources_C|PostWithMultipleSources[] all()
     * @ownLinks author_id,\Cviebrock\EloquentSluggable\Tests\Models\Author,id
     * @mixin _IH_PostWithMultipleSources_QB
     */
    class PostWithMultipleSources extends Model {}
    
    /**
     * @property int $id
     * @property string $title
     * @property string|null $subtitle
     * @property string|null $slug
     * @property string|null $dummy
     * @property int|null $author_id
     * @property Carbon|null $deleted_at
     * @method static _IH_PostWithNoSource_QB onWriteConnection()
     * @method _IH_PostWithNoSource_QB newQuery()
     * @method static _IH_PostWithNoSource_QB on(null|string $connection = null)
     * @method static _IH_PostWithNoSource_QB query()
     * @method static _IH_PostWithNoSource_QB with(array|string $relations)
     * @method _IH_PostWithNoSource_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_PostWithNoSource_C|PostWithNoSource[] all()
     * @ownLinks author_id,\Cviebrock\EloquentSluggable\Tests\Models\Author,id
     * @mixin _IH_PostWithNoSource_QB
     */
    class PostWithNoSource extends Model {}
    
    /**
     * @property int $id
     * @property string $title
     * @property string|null $subtitle
     * @property string|null $slug
     * @property string|null $dummy
     * @property int|null $author_id
     * @property Carbon|null $deleted_at
     * @method static _IH_PostWithOnUpdate_QB onWriteConnection()
     * @method _IH_PostWithOnUpdate_QB newQuery()
     * @method static _IH_PostWithOnUpdate_QB on(null|string $connection = null)
     * @method static _IH_PostWithOnUpdate_QB query()
     * @method static _IH_PostWithOnUpdate_QB with(array|string $relations)
     * @method _IH_PostWithOnUpdate_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_PostWithOnUpdate_C|PostWithOnUpdate[] all()
     * @ownLinks author_id,\Cviebrock\EloquentSluggable\Tests\Models\Author,id
     * @mixin _IH_PostWithOnUpdate_QB
     */
    class PostWithOnUpdate extends Model {}
    
    /**
     * @property int $id
     * @property string $title
     * @property string|null $subtitle
     * @property string|null $slug
     * @property string|null $dummy
     * @property int|null $author_id
     * @property Carbon|null $deleted_at
     * @property Author|null $author
     * @method BelongsTo|_IH_Author_QB author()
     * @method static _IH_PostWithRelation_QB onWriteConnection()
     * @method _IH_PostWithRelation_QB newQuery()
     * @method static _IH_PostWithRelation_QB on(null|string $connection = null)
     * @method static _IH_PostWithRelation_QB query()
     * @method static _IH_PostWithRelation_QB with(array|string $relations)
     * @method _IH_PostWithRelation_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_PostWithRelation_C|PostWithRelation[] all()
     * @ownLinks author_id,\Cviebrock\EloquentSluggable\Tests\Models\Author,id
     * @mixin _IH_PostWithRelation_QB
     */
    class PostWithRelation extends Model {}
    
    /**
     * @property int $id
     * @property string $title
     * @property string|null $subtitle
     * @property string|null $slug
     * @property string|null $dummy
     * @property int|null $author_id
     * @property Carbon|null $deleted_at
     * @method static _IH_PostWithReservedSlug_QB onWriteConnection()
     * @method _IH_PostWithReservedSlug_QB newQuery()
     * @method static _IH_PostWithReservedSlug_QB on(null|string $connection = null)
     * @method static _IH_PostWithReservedSlug_QB query()
     * @method static _IH_PostWithReservedSlug_QB with(array|string $relations)
     * @method _IH_PostWithReservedSlug_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_PostWithReservedSlug_C|PostWithReservedSlug[] all()
     * @ownLinks author_id,\Cviebrock\EloquentSluggable\Tests\Models\Author,id
     * @mixin _IH_PostWithReservedSlug_QB
     */
    class PostWithReservedSlug extends Model {}
    
    /**
     * @property int $id
     * @property string $title
     * @property string|null $subtitle
     * @property string|null $slug
     * @property string|null $dummy
     * @property int|null $author_id
     * @property Carbon|null $deleted_at
     * @method static _IH_PostWithSoftDeleting_QB onWriteConnection()
     * @method _IH_PostWithSoftDeleting_QB newQuery()
     * @method static _IH_PostWithSoftDeleting_QB on(null|string $connection = null)
     * @method static _IH_PostWithSoftDeleting_QB query()
     * @method static _IH_PostWithSoftDeleting_QB with(array|string $relations)
     * @method _IH_PostWithSoftDeleting_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_PostWithSoftDeleting_C|PostWithSoftDeleting[] all()
     * @ownLinks author_id,\Cviebrock\EloquentSluggable\Tests\Models\Author,id
     * @mixin _IH_PostWithSoftDeleting_QB
     */
    class PostWithSoftDeleting extends Model {}
    
    /**
     * @property int $id
     * @property string $title
     * @property string|null $subtitle
     * @property string|null $slug
     * @property string|null $dummy
     * @property int|null $author_id
     * @property Carbon|null $deleted_at
     * @method static _IH_PostWithSoftDeletingIncludeTrashed_QB onWriteConnection()
     * @method _IH_PostWithSoftDeletingIncludeTrashed_QB newQuery()
     * @method static _IH_PostWithSoftDeletingIncludeTrashed_QB on(null|string $connection = null)
     * @method static _IH_PostWithSoftDeletingIncludeTrashed_QB query()
     * @method static _IH_PostWithSoftDeletingIncludeTrashed_QB with(array|string $relations)
     * @method _IH_PostWithSoftDeletingIncludeTrashed_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_PostWithSoftDeletingIncludeTrashed_C|PostWithSoftDeletingIncludeTrashed[] all()
     * @ownLinks author_id,\Cviebrock\EloquentSluggable\Tests\Models\Author,id
     * @mixin _IH_PostWithSoftDeletingIncludeTrashed_QB
     */
    class PostWithSoftDeletingIncludeTrashed extends Model {}
    
    /**
     * @property int $id
     * @property string $title
     * @property string|null $subtitle
     * @property string|null $slug
     * @property string|null $dummy
     * @property int|null $author_id
     * @property Carbon|null $deleted_at
     * @property Author|null $author
     * @method BelongsTo|_IH_Author_QB author()
     * @method static _IH_PostWithUniqueSlugConstraints_QB onWriteConnection()
     * @method _IH_PostWithUniqueSlugConstraints_QB newQuery()
     * @method static _IH_PostWithUniqueSlugConstraints_QB on(null|string $connection = null)
     * @method static _IH_PostWithUniqueSlugConstraints_QB query()
     * @method static _IH_PostWithUniqueSlugConstraints_QB with(array|string $relations)
     * @method _IH_PostWithUniqueSlugConstraints_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_PostWithUniqueSlugConstraints_C|PostWithUniqueSlugConstraints[] all()
     * @ownLinks author_id,\Cviebrock\EloquentSluggable\Tests\Models\Author,id
     * @mixin _IH_PostWithUniqueSlugConstraints_QB
     */
    class PostWithUniqueSlugConstraints extends Model {}
}