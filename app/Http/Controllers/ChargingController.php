<?php

namespace App\Http\Controllers;

use App\Charging;
use Illuminate\Http\Request;

class ChargingController extends Controller
{
    //列举所有充电桩
    public function index()
    {
        $chargings = Charging::all();
        return view('chargings.list')->withChargings($chargings);
    }

    //创建充电桩
    public function create()
    {
        return view('chargings.create');
    }

    //存储充电桩
    public function store(Request $request)
    {
        $charging = new Charging;
        $charging->name = $request->name;
        $charging->latitude = $request->latitude;
        $charging->longitude = $request->longitude;
        $charging->url = $request->url;
        $charging->status = "normal";
        $charging->used = "unused";
        $charging->save();

        return view('chargings.show')->withCharging($charging);
    }

    //显示充电桩具体信息
    public function show($id)
    {
        $charging = Charging::FindOrFail($id);
        return view('chargings.show')->withCharging($charging);
    }

    //修改充电桩
    public function update(Request $request, $id)
    {
        $charging = Charging::FindOrFail($id);
        $charging->name = $request->name;
        $charging->latitude = $request->latitude;
        $charging->longitude = $request->longitude;
        $charging->url = $request->url;
        $charging->save();
        return view('chargings.show')->withCharging($charging);
    }

    //删除充电桩
    public function destroy($id)
    {
        $charging = Charging::FindOrFail($id);
        $charging->delete();
        return redirect('/chargings');
    }
}
