<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserDataRequest;
use App\Models\DataBase;

class UserDataController extends Controller
{
    public function submit(UserDataRequest $data){
        $info = new DataBase();
        $info->Name=$data->input('name');
        $info->Email=$data->input('email');
        $info->message=$data->input('message');

        $info->save();

        return redirect()->route('home')->with('success', 'Заявка отправлена!');
    }

    public function allData() {
        $info = new DataBase();
        return view('reviews', ['data' => $info->orderBy('created_at','desc')->take(5)->get()]);
    }
}
