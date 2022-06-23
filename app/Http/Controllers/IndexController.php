<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class IndexController extends Controller
{
    //
    public function user_reg(Request $request){
        $data = $request->all();
        // dd($data);
        // die;
        $user = new User;
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->password = $data['email'];
        $user->save();

        // return redirect()->back();
    }
}
