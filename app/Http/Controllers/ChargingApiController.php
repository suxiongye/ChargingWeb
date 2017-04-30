<?php
/**
 * Created by PhpStorm.
 * User: su
 * Date: 2017/4/28
 * Time: 下午5:46
 */

namespace App\Http\Controllers;

use App\Charging;

class ChargingApiController extends Controller
{
    //返回所有充电桩数组
    public function index()
    {
        $chargings = Charging::all();
        return $chargings->makeHidden(['url', 'created_at', 'updated_at'])->toArray();
    }

    //查看是否开启
    public function isOpen($id)
    {
        $charging = Charging::Find($id);
        if (!$charging) {
            return "No such charging";
        }
        if ($charging->used == "used")
            return "used";
        else
            return "unused";
    }

    //开启充电桩
    public function open($id)
    {
        $charging = Charging::Find($id);
        if (!$charging) {
            return "No such charging";
        }

        if ($charging->status == "normal" && $charging->used == "unused") {
            $charging->used = "used";
            $charging->save();
            return "Success";
        }
        return "The charging is broken or be used";
    }

    //关闭充电桩
    public function close($id)
    {
        $charging = Charging::Find($id);
        if (!$charging) {
            return "No such charging";
        }

        if ($charging->status == "normal") {
            $charging->used = "unused";
            $charging->save();
            return "Success";
        }
        return "The charging is broken";
    }

}