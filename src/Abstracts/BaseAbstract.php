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
// | Date : 2019/7/24 12:01
// +----------------------------------------------------------------------
namespace WGCKeyName\Abstracts;

abstract class BaseAbstract
{

    protected static $before_prefix = '';
    protected static $after_prefix = '';
    const            NAME_SEP = ':';

    /**
     * 设置前缀
     * Date : 2019/7/24 15:06
     * @param string $before_prefix
     */
    public static function setBeforePrefix(string $before_prefix = ''): void
    {
        static::$before_prefix = $before_prefix;
        if ($before_prefix) {
            static::$before_prefix = static::$before_prefix . self::NAME_SEP;
        }
    }

    /**
     * 设置后缀
     * Date : 2019/7/24 15:06
     * @param string $after_prefix
     */
    public static function setAfterPrefix(string $after_prefix = ''): void
    {
        static::$after_prefix = $after_prefix;
        if ($after_prefix) {
            static::$after_prefix =  self::NAME_SEP . static::$after_prefix;
        }
    }

    protected static function compileKeyName(array $value = [], string $prefix = ''): string
    {
        $names = [];

        if ($value) {
            $names  = array_merge($names, $value);
        }

        if ($prefix) {
            $prefix = $prefix . static::$after_prefix;
            array_unshift($names, $prefix);
        }
        return self::$before_prefix . implode(static::NAME_SEP, $names);
    }
}
