<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;
session_start();

class AdminController extends Controller
{

    public function checkAuth(){
        $check = Session::get('admin_id');
        if(!$check) return Redirect::to('/admin')->send();
    }

    
    public function index(){
        return view('admin.admin_login');
    }

    public function dashboard(){
        $this->checkAuth();
        return view('admin.dashboard');
    }


    public function admin_dashboard(Request $request){
        $admin_email  = $request->admin_email;
        $admin_password = md5($request->admin_password);

        $result = DB::table('tbl_admin')->where('admin_email', $admin_email)->where('admin_password', $admin_password)->first();
        if ($result){
            Session::put('admin_name', $result->admin_name);
            Session::put('admin_id', $result->id);
            Session::put('admin_image', $result->admin_image);
            return Redirect::to('/dashboard');
        } else {
            Session::put('message', 'Try Again');
            return Redirect::to('/admin');
        }
        
    }
    public function logout(){
        Session::put('admin_name', null);
        Session::put('admin_id', null);
        Session::put('admin_image', null);
        return Redirect::to('/admin');
    }
}
