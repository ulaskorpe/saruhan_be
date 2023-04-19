<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{

    public function index(){
        return view('admin.index');
    }

    public function login(){
        if(empty(Session::get('admin_id'))){
        return view('admin.login');
        }else{
            return redirect(route('admin.index'));
        }
    }

    public function logout(){

        Session::put('admin_id',null);
        Session::put('name_surname',null);
        Session::put('user_type',null);

        return redirect(route('admin.login'));
    }


    public function loginPost(Request $request){



        if ($request->isMethod('post')) {
            // return $request;

            $messages = [];
            $rules = [

            ];
            $this->validate($request, $rules, $messages);
            $resultArray = DB::transaction(function () use ($request) {

                $check = User::where('email','=',$request['email'])
                    ->whereIn('user_type',['sudo','admin'])
                    ->where('password','=',md5($request['password']))->first();

                if($check['id']){
                    Session::put('admin_id',$check['id']);
                    Session::put('name_surname',$check['name']);
                    Session::put('user_type',$check['user_type']);




                   if(!empty($request['remember_me']))
                   {
                       Cookie::queue('admin_id',);
                       Cookie::queue("email",$request['email'],120);
                       Cookie::queue("password",$request['password'],120);
                       Cookie::queue("remember",true,120);
                   }

                    return [ 'Giriş Başarılı', 'success', route('admin.index'), '', ''];
                }else{
                    return ['Kullanıcı bulunamadı', 'error', route('admin.index'), '', ''];

                }



            });
            return json_encode($resultArray);

        }
    }
}
