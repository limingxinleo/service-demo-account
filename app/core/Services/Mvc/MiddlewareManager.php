<?php
// +----------------------------------------------------------------------
// | MiddlewareManager.php [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2016-2017 limingxinleo All rights reserved.
// +----------------------------------------------------------------------
// | Author: limx <715557344@qq.com> <https://github.com/limingxinleo>
// +----------------------------------------------------------------------
namespace App\Core\Services\Mvc;

use App\Core\Services\ServiceProviderInterface;
use App\Middleware\UserAuthMiddleware;
use Phalcon\Config;
use Phalcon\DI\FactoryDefault;
use App\Middleware\AuthMiddleware;
use Xin\Phalcon\Middleware\Manager;

class MiddlewareManager implements ServiceProviderInterface
{
    public function register(FactoryDefault $di, Config $config)
    {
        $di->setShared('middlewareManager', function () {
            $middlewareManager = new Manager();
            //注册中间件
            $middlewareManager->add('auth', AuthMiddleware::class);
            $middlewareManager->add('user.auth', UserAuthMiddleware::class);
            return $middlewareManager;
        });
    }
}