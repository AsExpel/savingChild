<?php
//declare (strict_types = 1);

namespace app\subscribe;
use think\Facade\Event;

class User extends Event
{
    public function onUserLogin($user)
    {
        // UserLogin事件响应处理
    }

    public function onUserLogout($user)
    {
        // UserLogout事件响应处理
    }

}
