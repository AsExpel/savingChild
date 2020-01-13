<?php
declare (strict_types = 1);

namespace app\admin\model;

use think\Model;
use think\model\Collection;

/**
 * @mixin think\Model
 */
class user extends Model
{
    //
    public static function getUsers():Collection{
        return self::select();
    }


    public static function searchUser(int $userId):Collection{
        return self::where("user_id",$userId)
            ->select();
    }

}
