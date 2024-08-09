<?php //9581d1392ede9b440388ef604fe9c05e
/** @noinspection all */

namespace LaravelIdea\Helper\App {

    use App\User;
    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Database\Query\Expression;
    use Illuminate\Pagination\LengthAwarePaginator;
    use Illuminate\Pagination\Paginator;
    use Illuminate\Support\Collection;
    use LaravelIdea\Helper\_BaseBuilder;
    use LaravelIdea\Helper\_BaseCollection;
    
    /**
     * @method User|null getOrPut($key, $value)
     * @method User|$this shift(int $count = 1)
     * @method User|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method User|$this pop(int $count = 1)
     * @method User|null pull($key, \Closure $default = null)
     * @method User|null last(callable $callback = null, \Closure $default = null)
     * @method User|$this random(callable|int|null $number = null)
     * @method User|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method User|null get($key, \Closure $default = null)
     * @method User|null first(callable $callback = null, \Closure $default = null)
     * @method User|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method User|null find($key, $default = null)
     * @method User[] all()
     */
    class _IH_User_C extends _BaseCollection {
        /**
         * @param int $size
         * @return User[][]|Collection<_IH_User_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_User_QB whereId($value)
     * @method _IH_User_QB whereFullName($value)
     * @method _IH_User_QB whereRoleName($value)
     * @method _IH_User_QB whereRoleId($value)
     * @method _IH_User_QB whereAvatar($value)
     * @method _IH_User_QB whereMobile($value)
     * @method _IH_User_QB whereEmail($value)
     * @method _IH_User_QB wherePassword($value)
     * @method _IH_User_QB whereGoogleId($value)
     * @method _IH_User_QB whereFacebookId($value)
     * @method _IH_User_QB whereRememberToken($value)
     * @method _IH_User_QB whereStatus($value)
     * @method _IH_User_QB whereCreatedAt($value)
     * @method _IH_User_QB whereUpdatedAt($value)
     * @method _IH_User_QB whereDeletedAt($value)
     * @method _IH_User_QB whereHeadline($value)
     * @method _IH_User_QB whereAbout($value)
     * @method _IH_User_QB whereOrganId($value)
     * @method _IH_User_QB whereIdentity($value)
     * @method _IH_User_QB whereCoverImg($value)
     * @method _IH_User_QB whereLanguage($value)
     * @method _IH_User_QB whereNewsletter($value)
     * @method _IH_User_QB wherePublicMessage($value)
     * @method _IH_User_QB whereAccountType($value)
     * @method _IH_User_QB whereIban($value)
     * @method _IH_User_QB whereAccountId($value)
     * @method _IH_User_QB whereIdentityScan($value)
     * @method _IH_User_QB whereAddress($value)
     * @method _IH_User_QB whereBio($value)
     * @method _IH_User_QB whereBan($value)
     * @method _IH_User_QB whereBanStartAt($value)
     * @method _IH_User_QB whereBanEndAt($value)
     * @method _IH_User_QB whereCommission($value)
     * @method _IH_User_QB whereOffline($value)
     * @method _IH_User_QB whereOfflineMessage($value)
     * @method _IH_User_QB whereFinancialApproval($value)
     * @method _IH_User_QB whereInstallmentApproval($value)
     * @method _IH_User_QB whereEnableInstallments($value)
     * @method _IH_User_QB whereDisableCashback($value)
     * @method _IH_User_QB whereCertificate($value)
     * @method _IH_User_QB whereAffiliate($value)
     * @method _IH_User_QB whereCountryId($value)
     * @method _IH_User_QB whereProvinceId($value)
     * @method _IH_User_QB whereCityId($value)
     * @method _IH_User_QB whereDistrictId($value)
     * @method _IH_User_QB whereLocation($value)
     * @method _IH_User_QB whereGroupMeeting($value)
     * @method _IH_User_QB whereMeetingType($value)
     * @method _IH_User_QB whereTimezone($value)
     * @method _IH_User_QB whereCanCreateStore($value)
     * @method _IH_User_QB whereAccessContent($value)
     * @method _IH_User_QB whereAvatarSettings($value)
     * @method _IH_User_QB whereLoggedCount($value)
     * @method _IH_User_QB whereCurrency($value)
     * @method _IH_User_QB whereEnableRegistrationBonus($value)
     * @method _IH_User_QB whereRegistrationBonusAmount($value)
     * @method _IH_User_QB whereEnableAiContent($value)
     * @method _IH_User_QB whereEnableProfileStatistics($value)
     * @method _IH_User_QB whereProfileVideo($value)
     * @method User baseSole(array|string $columns = ['*'])
     * @method User create(array $attributes = [])
     * @method _IH_User_C|User[] cursor()
     * @method User|null|_IH_User_C|User[] find($id, array|string $columns = ['*'])
     * @method _IH_User_C|User[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method User|_IH_User_C|User[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method User|_IH_User_C|User[] findOrFail($id, array|string $columns = ['*'])
     * @method User|_IH_User_C|User[] findOrNew($id, array|string $columns = ['*'])
     * @method User first(array|string $columns = ['*'])
     * @method User firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method User firstOrCreate(array $attributes = [], array $values = [])
     * @method User firstOrFail(array|string $columns = ['*'])
     * @method User firstOrNew(array $attributes = [], array $values = [])
     * @method User firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method User forceCreate(array $attributes)
     * @method _IH_User_C|User[] fromQuery(string $query, array $bindings = [])
     * @method _IH_User_C|User[] get(array|string $columns = ['*'])
     * @method User getModel()
     * @method User[] getModels(array|string $columns = ['*'])
     * @method _IH_User_C|User[] hydrate(array $items)
     * @method _IH_User_C|User[] lazy(int $chunkSize = 1000)
     * @method _IH_User_C|User[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_User_C|User[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method User make(array $attributes = [])
     * @method User newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|User[]|_IH_User_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method User restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|User[]|_IH_User_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method User sole(array|string $columns = ['*'])
     * @method User updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_User_QB extends _BaseBuilder {}
}