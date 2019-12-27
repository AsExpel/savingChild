<?php
/**
 * Created by PhpStorm.
 * User: Lauro
 * Date: 2019/12/27
 * Time: 23:28
 */

namespace app\admin\controller;
use think\facade\Env;
use think\facade\Db;
use app\BaseController;

class Admin extends BaseController
{
    public function index()
    {
        dump("in admin");
        return 'in admin_admin';
    }
}