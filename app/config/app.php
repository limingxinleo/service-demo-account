<?php
// +----------------------------------------------------------------------
// | APP ENV [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2016 http://www.lmx0536.cn All rights reserved.
// +----------------------------------------------------------------------
// | Author: limx <715557344@qq.com> <http://www.lmx0536.cn>
// +----------------------------------------------------------------------
return [
    'project-name' => 'limx-phalcon-project',
    // 定时执行的脚本
    'cron-tasks' => [
        // ['task' => 'System\\Clear', 'action' => 'view', 'params' => ['yes'], 'schedule' => ['dailyAt', [2, 0]]],
    ],
    'error-code' => [
        500 => '服务器错误！',
    ],

    'store' => [
        'engine' => 'qiniu',
        'qiniu' => [
            'accessKey' => env('QINIU_ACCESS_KEY'),
            'secretKey' => env('QINIU_SECRET_KEY'),
            'bucketName' => env('QINIU_BUCKET_NAME'),
            'baseUrl' => env('QINIU_BASE_URL')
        ],
    ],

    'es' => [
        'host' => [
            env('ELASTIC_SEARCH_HOST', '127.0.0.1')
        ],
        'footmark' => [
            'index' => 'account',
            'type' => 'footmark',
            'properties' => [
                'id' => ['type' => 'long'],
                'user_id' => ['type' => 'long'],
                'image' => ['type' => 'string'],
                'message' => ['type' => 'string'],
                'location' => ['type' => 'geo_point'],
            ],
        ],
    ],
];