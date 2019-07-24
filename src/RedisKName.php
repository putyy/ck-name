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
    const ZSET = 'zset';

    const SET  = 'set';

    const HASH = 'hash';

    const KEY  = 'key';

    const LIST = 'list';

    public static function getHashName($value = [])
    {
        return self::compileKeyName($value, self::HASH);
    }

    public static function getZSetName($value = [])
    {
        return self::compileKeyName($value, self::ZSET);

    }

    public static function getSetName($value = [])
    {
        return self::compileKeyName($value, self::SET);

    }

    public static function getKeyName($value = [])
    {
        return self::compileKeyName($value, self::KEY);
    }

    public static function getListName($value = [])
    {
        return self::compileKeyName($value, self::LIST);
    }
}
