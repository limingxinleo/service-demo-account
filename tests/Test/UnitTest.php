<?php
// +----------------------------------------------------------------------
// | UnitTest [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2016 http://www.lmx0536.cn All rights reserved.
// +----------------------------------------------------------------------
// | Author: limx <715557344@qq.com> <http://www.lmx0536.cn>
// +----------------------------------------------------------------------
// | Date: 2016/11/26 Time: 16:46
// +----------------------------------------------------------------------
namespace Test;

use limx\tools\LRedis;
use limx\tools\MyRedis;

/**
 * Class UnitTest
 */
class UnitTest extends \UnitTestCase
{
    public function testTestCase()
    {
        $this->assertEquals(
            "works",
            "works",
            "This is OK"
        );
    }

    public function testRedisCase()
    {
        $config = [
            'host' => env('REDIS_HOST', '127.0.0.1'),
            'auth' => env('REDIS_AUTH'),
            'port' => env('REDIS_PORT', '6379'),
            'database' => env('REDIS_INDEX', 0),
        ];
        $redis = LRedis::getInstance($config);
        $time = time();
        $redis->set('phalcon:test', $time);
        $this->assertEquals(
            $time,
            $redis->get('phalcon:test')
        );
    }
}