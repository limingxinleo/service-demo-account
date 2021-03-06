<?php
// +----------------------------------------------------------------------
// | LoginValidator.php [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2016-2017 limingxinleo All rights reserved.
// +----------------------------------------------------------------------
// | Author: limx <715557344@qq.com> <https://github.com/limingxinleo>
// +----------------------------------------------------------------------
namespace App\Support\Validation;

use App\Core\Validation\Validator;
use Phalcon\Validation\Validator\PresenceOf;

class GithubUserValidator extends Validator
{
    public function initialize()
    {
        $this->add([
            'name',
        ], new PresenceOf([
            'message' => '参数 :name 不能为空'
        ]));
    }

}