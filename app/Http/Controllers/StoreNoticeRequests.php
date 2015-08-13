<?php
/**
 * Created by PhpStorm.
 * User: donhey
 * Date: 15-08-13
 * Time: 3:59 PM
 */

namespace App\Http\Requests;


class StoreNoticeRequests {

    public function authorize()
    {
        return session()->hasKey('dmca');
    }

    public function rules()
    {
        return [
            'template' => 'required|min:50'
        ];
    }
}