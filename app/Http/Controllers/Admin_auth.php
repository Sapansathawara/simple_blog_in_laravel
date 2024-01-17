<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Admin_auth extends Controller
{
    function login_submit(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');

        $result = DB::table('users')
            ->where('email', $email)
            ->where('password', $password)
            ->get();
        if (isset($result[0]->id)) {
            if ($result[0]->status == 1) {
                $request->session()->put('BLOG_USER_ID', $result[0]->id);
                $request->session()->put('BLOG_USER_NAME', $result[0]->name);
                return redirect('admin/post/list');
            } else {
                $request->session()->flash('msg', 'Account deactivated');
                return redirect('admin/login');
            }
        } else {
            $request->session()->flash('msg', 'Please enter valid login details');
            return redirect('admin/login');
        }
    }
}
