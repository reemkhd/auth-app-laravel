<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Log;
use App\Models\donations;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Redirect;

class Donation extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $donations = DB::table('list_donation')->get();        
        return view('list-donation', ['donations' => $donations]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Log::info('create');
        return view('new-donation');
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $i=0;

        $req_furniture = $request['furniture'];
        // Log::info($furniture);
        $req_furniture_number = $request['furniture_number'];
        Log::info($request['furniture']);
        if($request['furniture'][0]==NULL){
            Log::info('null');
            $furniture = 'null,null';
        }

        else{
            Log::info('else');
            foreach ($req_furniture as $key) {
                $furniture[$i] = '"'.$req_furniture[$i].','.$req_furniture_number[$i].'"';
                // Log::info($db);
                $i = $i + 1;
            }
        }
        // $req_clothes = $request['clothes'];
        // $req_clothes_number = $request['clothes_number'];
        // foreach ($req_clothes as $key) {
        //     $clothes[$i] = '"'.$req_clothes[$i].','.$req_clothes_number[$i].'"';
        //     // Log::info($db);
        //     $i = $i + 1;
        // }

        // Log::info($db);
        // $user = Auth::user();
        // $user->donations()->create($request->all());
        // $furniture1 = trim(json_encode([$request['furniture'], $request['furniture_number']]), '[]');
        // $furniture = json_encode($request['furniture'][1], $request['furniture_number'][1]);
        // Log::info($furniture);
        // Log::info($request['furniture'][1]);
        // Log::info($request['furniture_number'][1]);
        // $req = $request['furniture'];
        // Log::info($req);
        // $clothes = trim(json_encode([$request['clothes'], $request['clothes_number']]), '[]');
        $dishes = trim(json_encode([$request['dishes'], $request['dishes_number']]), '[]');
        $electrical_tools = trim(json_encode([$request['electrical_tools'], $request['electrical_tools_number']]), '[]');
        $baby_things = trim(json_encode([$request['baby_things'], $request['baby_things_number']]), '[]');
        $luxuries = trim(json_encode([$request['luxuries'], $request['luxuries_number']]), '[]');
        $accessories_and_mobiles = trim(json_encode([$request['accessories_and_mobiles'], $request['accessories_and_mobiles_number']]), '[]');
        $medical_devices = trim(json_encode([$request['medical_devices'], $request['medical_devices_number']]), '[]');
        $miscellaneous = trim(json_encode([$request['miscellaneous'], $request['miscellaneous_number']]), '[]');

        $donations = new donations;
        $donations->user_id = Auth::user()->id;
        $donations->order_number = rand(10000,100000);
        // $donations->furniture = str_replace('"', '', $furniture);
        $donations->furniture = str_replace('"', '', trim(json_encode($furniture), '[]'));
        // $donations->clothes = str_replace('"', '', $clothes);
        // $donations->clothes = str_replace('\"', '', trim(json_encode($clothes), '[]'));
        $donations->dishes = str_replace('"', '', $dishes);
        $donations->electrical_tools = str_replace('"', '', $electrical_tools);
        $donations->baby_things = str_replace('"', '', $baby_things);
        $donations->luxuries = str_replace('"', '', $luxuries);
        $donations->accessories_and_mobiles = str_replace('"', '', $accessories_and_mobiles);
        $donations->medical_devices = str_replace('"', '', $medical_devices);
        $donations->miscellaneous = str_replace('"', '', $miscellaneous);
        $donations->save();
        // return redirect()->route('info-connect');
        return view('info-connect');
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
    public function edit(Request $request) {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $order_number)
    {
        $status = $request->input('status');
        Log::info($status);
        DB::update('update list_donation set status = ? where order_number = ?',[$status, $order_number]);

        return $this->index();
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

    public function edit_don(Request $request) {

        $furniture = trim(json_encode([$request['furniture'], $request['furniture_number']]), '[]');
        $clothes = trim(json_encode([$request['clothes'], $request['clothes_number']]), '[]');
        $dishes = trim(json_encode([$request['dishes'], $request['dishes_number']]), '[]');
        $electrical_tools = trim(json_encode([$request['electrical_tools'], $request['electrical_tools_number']]), '[]');
        $baby_things = trim(json_encode([$request['baby_things'], $request['baby_things_number']]), '[]');
        $luxuries = trim(json_encode([$request['luxuries'], $request['luxuries_number']]), '[]');
        $accessories_and_mobiles = trim(json_encode([$request['accessories_and_mobiles'], $request['accessories_and_mobiles_number']]), '[]');
        $medical_devices = trim(json_encode([$request['medical_devices'], $request['medical_devices_number']]), '[]');
        $miscellaneous = trim(json_encode([$request['miscellaneous'], $request['miscellaneous_number']]), '[]');

        DB::update("update list_donation set furniture = ?, clothes = ? ,dishes = ?, electrical_tools = ? ,baby_things = ?, luxuries = ? ,accessories_and_mobiles = ?, medical_devices = ?, miscellaneous = ? where order_number = '40805'",[$furniture, $clothes, $dishes, $electrical_tools, $baby_things, $luxuries, $accessories_and_mobiles, $medical_devices, $miscellaneous]);

        return $this->index();
    }
}
