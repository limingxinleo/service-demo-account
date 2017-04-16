<?php
// +----------------------------------------------------------------------
// | DB 工具类 [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2016-2017 limingxinleo All rights reserved.
// +----------------------------------------------------------------------
// | Author: limx <715557344@qq.com> <https://github.com/limingxinleo>
// +----------------------------------------------------------------------
// | Desc: 这里默认使用 limx\phalcon\DB工具类，如果需要请自行修改。
// +----------------------------------------------------------------------
namespace MyApp\Utils;

use limx\phalcon\DB as LDB;

class DB implements DBInterface
{
    /**
     * @desc   查询结果集合
     * @author limx
     * @param       $sql
     * @param array $params
     * @return array
     */
    public static function query($sql, $params = [])
    {
        return LDB::query($sql, $params);
    }

    /**
     * @desc   查询一条数据
     * @author limx
     * @param       $sql
     * @param array $params
     * @return array
     */
    public static function fetch($sql, $params = [])
    {
        return LDB::fetch($sql, $params);
    }

    /**
     * @desc   更新数据
     * @author limx
     * @param       $sql          SQL语句
     * @param array $params       参数
     * @param bool  $withRowCount 是否返回影响的行数
     * @return int|mixed
     */
    public static function execute($sql, $params = [], $withRowCount = false)
    {
        return LDB::execute($sql, $params, $withRowCount);
    }

    /**
     * @desc   执行Sql并返回影响的行数
     * @author limx
     * @param       $sql
     * @param array $params
     * @return int|mixed
     */
    public static function execWithRowCount($sql, $params = [])
    {
        return LDB::execWithRowCount($sql, $params);
    }

    /**
     * @desc   事务开始
     * @author limx
     * @return mixed
     */
    public static function begin()
    {
        return LDB::begin();
    }

    /**
     * @desc   事务回滚
     * @author limx
     * @return mixed
     */
    public static function rollback()
    {
        return LDB::rollback();
    }

    /**
     * @desc   事务提交
     * @author limx
     * @return mixed
     */
    public static function commit()
    {
        return LDB::commit();
    }
}