<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Log;
use App\Models\infoconnectt;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class infoConnectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Log::info('store info');
        $user = Auth::user();
        // $user->infoconnects()->create($request->all());

        // $furniture = trim(json_encode([$request['furniture'], $request['furniture_number']]), '[]');
        // $clothes = trim(json_encode([$request['clothes'], $request['clothes_number']]), '[]');
        // $dishes = trim(json_encode([$request['dishes'], $request['dishes_number']]), '[]');
        // $electrical_tools = trim(json_encode([$request['electrical_tools'], $request['electrical_tools_number']]), '[]');
        // $baby_things = trim(json_encode([$request['baby_things'], $request['baby_things_number']]), '[]');
        // $luxuries = trim(json_encode([$request['luxuries'], $request['luxuries_number']]), '[]');
        // $accessories_and_mobiles = trim(json_encode([$request['accessories_and_mobiles'], $request['accessories_and_mobiles_number']]), '[]');
        // $medical_devices = trim(json_encode([$request['medical_devices'], $request['medical_devices_number']]), '[]');
        // $miscellaneous = trim(json_encode([$request['miscellaneous'], $request['miscellaneous_number']]), '[]');

        $info = new infoconnectt;
        $info->user_id = Auth::user()->id;
        $info->name = $request['name'];
        $info->numberphone = $request['numberphone'];
        $info->birth_date = $request['birth_date'];
        $info->time = $request['time'];
        $info->neighborhood_name = $request['neighborhood_name'];
        $info->house_number = $request['house_number'];
        $info->street_name = $request['street_name'];
        $info->nearest_landmark = $request['nearest_landmark'];
        $info->save();
        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
