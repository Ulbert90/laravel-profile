<?php

use App\Models\Setting;

function get_setting_value($key)
{
    $data = Setting::where('key')->frist();
    if (isset($data->value)) {
        return $data->value;
    } else {
        return 'empty';
    }
}
