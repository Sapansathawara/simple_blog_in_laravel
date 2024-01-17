<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Users;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function listing()
    {
        $data['result'] = DB::table('users')->orderBy('id', 'desc')->get();

        return view('admin.user.listing', $data);
    }

    function submit(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'username' => 'required|unique:users',
            'email' => 'required',
            'password' => 'required',
        ]);

        $data = array(
            'name' => $request->input('name'),
            'username' => $request->input('username'),
            'email' => $request->input('email'),
            'password' => $request->input('password'),
            'status' => 1,
            'created_at' => date('Y-m-d h:i:s')
        );
        DB::table('users')->insert($data);
        $request->session()->flash('msg', 'User Inserted');
        
        return redirect('/admin/user/list');
    }

    function edit(Request $request, $id)
    {
        $data['result'] = DB::table('users')->where('id', $id)->get();
        return view('admin.user.edit', $data);
    }

    function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'username' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        $data = array(
            'name' => $request->input('name'),
            'username' => $request->input('username'),
            'email' => $request->input('email'),
            'password' => $request->input('password'),
            'status' => 1,
            'updated_at' => date('Y-m-d h:i:s')
        );

        DB::table('users')->where('id', $id)->update($data);
        $request->session()->flash('msg', 'User Updated');
        return redirect('/admin/user/list');
    }

    function delete(Request $request, $id)
    {
        DB::table('users')->where('id', $id)->delete();
        $request->session()->flash('msg', 'User Deleted');
        return redirect('/admin/user/list');
    }

    public function status(Request $request, $status, $id)
    {
        $model = Users::find($id);
        $model->status = $status;
        $model->save();
        $request->session()->flash('message', 'User Status Updated');
        return redirect('/admin/user/list');
    }
}
