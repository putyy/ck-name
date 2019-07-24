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
// | Date : 2019/7/24 14:04
// +----------------------------------------------------------------------
use WGCKeyName\RedisKName;
use WGCKeyName\CreateKName;
require_once '../vendor/autoload.php';

// 框架初始化执行
RedisKName::setBeforePrefix('WGC');
RedisKName::setAfterPrefix('666');

$a = RedisKName::getZSetName(['TEST','a','b']);
var_dump($a); // WGC:zset:666:TEST:a:b


// 有时候避免不了切换 切换完记得还原
RedisKName::setBeforePrefix();
RedisKName::setAfterPrefix();
$a = RedisKName::getListName(['888']);
var_dump($a);// list:888

// 可以自行封装
class cont
{
    const TEST = 'test';

    static function make($uid)
    {
        return [self::TEST, $uid];
    }
}



// 基本方式
RedisKName::setBeforePrefix('2019');
$a = CreateKName::create(['member_table','key']);
var_dump($a);

RedisKName::setBeforePrefix();
$a = RedisKName::getHashName(cont::make(11111));
var_dump($a);// hash:test:11111



// 使用示列
$key = CreateKName::create(['member_num'], 'set');

$redis = new \Redis();
$redis->connect('127.0.0.1');
$redis->set($key, 10500, 300);
$value = $redis->get($key);
var_dump($value);
