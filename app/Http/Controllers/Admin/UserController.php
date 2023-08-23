<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\RoleModel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function UserIndex(){
        $User = User::join('users as creator_by', 'creator_by.id', '=', 'users.creator')
            ->leftJoin('users as modifier_by', 'modifier_by.id', '=', 'users.modifier')
            ->leftJoin('role', 'role.role_id', '=', 'users.role_id')
            ->select(
                'creator_by.name as creator_by',
                'modifier_by.name as modifier_by',
                'role.role_title',
                'users.*'
            )
            ->orderBy('id','asc')->paginate(10);
        return view('Admin/Pages/User/UserIndex',compact('User'));
    }

    public function UserCreate(){
        $Role = RoleModel::where('status',1)->get();
        return view('Admin/Pages/User/UserCreate',compact('Role'));
    }

    public function UserEntry(Request $request){
        $validation = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'number' => 'required|unique:users',
            'username' => 'required|unique:users',
            'role_id' => 'required',
            'password' => 'required|min:6|max:12',
            'confirm_password' => 'required|same:password',
        ]);
        $data =  array();
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['number'] = $request->number;
        $data['username'] = $request->username;
        $data['password'] = Hash::make($request->password);
        $data['role_id'] = $request->role_id;
        $data['status'] = 1;
        $data['creator'] = 1;
        $data['modifier'] = 1;
        $data['created_date'] = date("Y-m-d h:i:s");
        $data['modified_date'] = date("Y-m-d h:i:s");

        $res = User::insert($data);
        if ($res){
            return back()->with('success_message','User Add Successfully!');
        }else{
            return back()->with('error_message','User Add Fail!');
        }
    }

    public function UserEdit($id){
        $Role = RoleModel::where('status',1)->get();
        $User = User::where('id',$id)->first();
        return view('Admin/Pages/User/UserUpdate',compact('User','Role'));
    }

    public function UserUpdate(Request $request, $id){

        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users,email,'. $id .',id',
            'number' => 'required|unique:users,number,'. $id .',id',
            'username' => 'required|unique:users,username,'. $id .',id',
            'role_id' => 'required',
        ]);

        $data =  array();
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['number'] = $request->number;
        $data['username'] = $request->username;
        $data['role_id'] = $request->role_id;
        $data['status'] = $request->status;
        $data['modifier'] = 1;
        $data['modified_date'] = date("Y-m-d h:i:s");

        $res = User::where('id','=',$id)->update($data);

        if ($res){
            return back()->with('success_message','User Update Successfully!');
        }else{
            return back()->with('error_message','User Update Fail!');
        }

    }

}
