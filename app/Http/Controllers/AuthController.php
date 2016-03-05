<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;


use DB;
use Auth;
use Hash;
use Session;

class AuthController extends Controller {

	
	public function index()
	{
		//
	}
	public function loginform(){
		return view('auth.login');
	}
	public function logout(){
		Auth::logout();
		return redirect('/auth/login');
	}
    
	public function authenticate(Request $request){
        
		if($request->has('login') && $request->has('password')){
            
			$login = $request->input('login');
			$password = $request->input('password');
			
		
			if (Auth::attempt(['login' => $login, 'password' => $password])){
                
                $select_id = DB::select("select id from `users` where login = '".$login."'");
			    $id = $select_id[0]->id; 
                
				Session::put('userid',"$id");
				return redirect("/user/$id");
			}else{
				return view('auth.login',['error'=>'Ошибка авторизации']);
			}
		
			
			
		}
	}

	public function signupview(){
		return view('auth.register');
	}
    
    public function signup(Request $request){
        
        //dd($request->all());
        
        $input = $request->all();
        
        $rules = array(
            'login'  => 'required|max:50|unique:users',
            'password' => 'required',
            'desc' => 'required',
            'telephone' => 'required',
            'type' => 'required',
            'worktime' => 'required',
            
        );
        
        $validation = Validator::make($input, $rules);

        if ($validation->fails())
        {
            echo "err";
        }else{
            echo "ok";
            $name = $request->name;
            $type = $request->type[0];
            $desc = $request->desc;
            $telephone = $request->telephone;
            $worktime = $request->worktime;
            $login = $request->login;
            $pass = Hash::make($request->password);

            $res = DB::insert("insert into `users` ( name,description,telephone,work_time,login,password,type) 
			 values ( '$name' ,'$desc' ,'$telephone', '$worktime' , '$login' ,'$pass','$type')");
            if($res == true){
                return redirect('/auth/login');
            }
            
        }
        
    }
    
}
