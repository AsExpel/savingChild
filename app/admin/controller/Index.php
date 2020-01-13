<?php
declare (strict_types = 1);

namespace app\admin\controller;

use app\admin\model\user;
use think\facade\Log;

class Index
{
    public function index()
    {
        $userId = (int)$_GET["user_id"];
        dump(
            user::getUsers()
                ->each(
                    function(user $item) {
                        $randomAge = rand(10,100);
                        dump($item);
                        $res = $item->where("user_id",$item->user_id)
                            ->find();
                        $res->age = $randomAge;
                        $res->save();
                    }
                )

        );
        return '您好！这是一个[admin]示例应用';
    }
}
