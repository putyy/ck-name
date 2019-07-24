<?php
// +----------------------------------------------------------------------
// | Created by PhpStorm.
// +----------------------------------------------------------------------
// | user : 放下
// +----------------------------------------------------------------------
// | blog : www.putyy.com
// +----------------------------------------------------------------------
// | email: 10945014@qq.com
// +----------------------------------------------------------------------
// | Date : 2019/7/24 13:55
// +----------------------------------------------------------------------


namespace WGCKeyName;

use WGCKeyName\Abstracts\BaseAbstract;

class RedisKName extends BaseAbstract
{
    const REDIS_ZSET = 'zset';

    const REDIS_SET  = 'set';

    const REDIS_HASH = 'hash';

    const REDIS_KEY  = 'key';

    const REDIS_LISTS = 'list';

    public static function getHashName($value = [])
    {
        return self::compileKeyName($value, self::REDIS_HASH);
    }

    public static function getZSetName($value = [])
    {
        return self::compileKeyName($value, self::REDIS_ZSET);

    }

    public static function getSetName($value = [])
    {
        return self::compileKeyName($value, self::REDIS_SET);

    }

    public static function getKeyName($value = [])
    {
        return self::compileKeyName($value, self::REDIS_KEY);
    }

    public static function getListName($value = [])
    {
        return self::compileKeyName($value, self::REDIS_LISTS);
    }
}
