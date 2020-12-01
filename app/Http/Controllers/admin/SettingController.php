<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\GeneralSetting;
use Illuminate\Http\Request;


//This Controller only has edit and update because by it comes with default settings we build in seed
class SettingController extends Controller
{
    //Any link using this controller will need to be logged in
    public function __construct()
    {
        $this->middleware('auth');
    }

    //This is Edit 
    public function general()
    {
        $id = 1; // make $id to always be one
        //Find general_setting by id in general_settings table and store it in "$general_setting" variable
        $general_setting = GeneralSetting::find($id);
        return view('admin/settings/general', [
            'general_setting' => $general_setting,
        ]);
    }

    //This is Update 
    public function savegeneral()
    {
        $id = 1; // make $id to always be one
        //Add validation for new general_setting info being inputed in table
        request()->validate([
            'site_title' => ['required', 'string', 'max:255'],
            'logo_image_url' => ['required', 'string'],
            'address_1' => ['required', 'string'],
            'address_2' => ['nullable', 'string'],
            'city' => ['required', 'string'],
            'state' => ['required', 'string'],
            'zipcode' => ['required', 'string'],
            'phone_number' => ['required', 'digits:10']
        ]);

        //Select general_setting by id and rename every value
        $general_setting = GeneralSetting::find($id);
        $general_setting->site_title = request('site_title');
        $general_setting->logo_image_url = request('logo_image_url');
        $general_setting->address_1 = request('address_1');
        $general_setting->address_2 = request('address_2');
        $general_setting->city = request('city');
        $general_setting->state = request('state');
        $general_setting->zipcode = request('zipcode');
        $general_setting->phone_number = request('phone_number');
        $general_setting->save();
        return redirect('admin/settings/general');
    }
}
