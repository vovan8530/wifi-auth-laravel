<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\SettingsRequest;
use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SettingsController extends Controller
{
    /**
     * @param $key
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index($key)
    {
        $settings = Setting::query()->get();
        return view('admin.settings', compact('settings', 'key'));
    }


    /**
     * @param SettingsRequest $request
     * @param $key
     * @return \Illuminate\Http\RedirectResponse
     */
    public function updateValue(SettingsRequest $request, $key)
    {
        $settings = $request->all();
        foreach($settings as $settingName => $settingValue) {
            Setting::query()
                ->where('settings_name', '=', $settingName)
                ->update(['settings_value' => $settingValue ? $settingValue: '']);
        }

        return redirect()->route('admin.settings.index', ['key' => $key]);
    }
}


