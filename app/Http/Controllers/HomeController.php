<?php namespace App\Http\Controllers;

use DB;
use Session;
use Illuminate\Http\Request;

class HomeController extends Controller {

	
	public function __construct()
	{
		$this->middleware('auth');
	}

	
    
	public function index($id)
	{
		$user_data = DB::select("select id,type,name,description,adress,lat,lng,work_time,img_path from `users` where id = '".$id."'");
			
		$menu_data = DB::select("select * from `menu` where parent_id = '".$id."' order by id desc");

		return view('userpage',['user_data'=>$user_data,'menu_data'=>$menu_data]);
	}

	
	

	public function addtomenuview(){
		return view('menuadd');
	}

	public function addtomenu(Request $request){
		
		if($request->has('name') && $request->has('price')){
                
            if($request->hasFile('image')){
                $destenition = public_path()."/img/";
                $extension = $request->file('image')->getClientOriginalExtension();
                $fileName = rand(11111,99999).'.'.$extension;
                $request->file('image')->move($destenition,$fileName);
		    }
            
            $typeoffood = $request->typeoffood;
			$name = $request->name;
			$price = $request->price;
			$desc = $request->desc;
			$id = Session::get('userid');
           
            
            if(isset($fileName)){
                $add = DB::insert("insert into `menu` ( name,price,description,parent_id,imgpath,typeoffood) 
				values ( '$name' ,'$price' ,'$desc' ,'$id','$fileName','$typeoffood')");
		    }else{
                $add = DB::insert("insert into `menu` ( name,price,description,parent_id,typeoffood) 
				values ( '$name' ,'$price' ,'$desc' ,'$id','$typeoffood')");
            }
            
			
			if($add == true){
				return redirect("/user/$id");
			}
			
		}

	}
    
    public function addAvatar(Request $request){
        
        $id = Session::get('userid');
        
        if($request->hasFile('avatarimage')){
                $destenition = public_path()."/img/";
                $extension = $request->file('avatarimage')->getClientOriginalExtension();
                $fileName = rand(11111,99999).'.'.$extension;
                $request->file('avatarimage')->move($destenition,$fileName);
        }
        
        if(isset($fileName)){
                $rest_img = $destenition.$fileName;
                $add = DB::update("update users set img_path = '".$fileName."' where id=$id");
                //$add = DB::update("update users set rest_img = '".$rest_img."' where id=$id");
        }
        
        if($add == true){
				return redirect("/user/$id");
        }else{
            echo "err";
        }
    }
    
    public function map(){
        
        return view('mapadd');
    }

    public function postdatatomap(Request $request){
    	$id = Session::get('userid');
    	$add = DB::update("update users set adress = '".addslashes($request->adress)."', lat = '".$request->lat."', lng = '".$request->lng."', city = '".addslashes($request->city)."'  where id=$id");
   
    	if($add == true){
				return redirect("/user/$id");
        }else{
            echo "err";
        }

    }
    
    public function deletemenucart($id){
        $userid = Session::get('userid');
        $delete = DB::delete("delete from menu where id = '$id'");
        if($delete){
            return redirect("/user/$userid");
        }else{
            echo "err";
        }
    }
    
    public function viewaddavatar(){
        return view('addavatar');
    }
    
    public function getupdatemenu($id){
        $menu_data = DB::select("select * from `menu` where id = '".$id."'");
        
        return view('updatemenu',['menu_data' => $menu_data]);
    }
     public function postupdatemenu(Request $request){
        if($request->has('name') && $request->has('price')){
                
            if($request->hasFile('image')){
                $destenition = public_path()."/img/";
                $extension = $request->file('image')->getClientOriginalExtension();
                $fileName = rand(11111,99999).'.'.$extension;
                $request->file('image')->move($destenition,$fileName);
		    }
            
            $typeoffood = $request->typeoffood;
			$name = $request->name;
			$price = $request->price;
			$desc = $request->desc;
			$id = $request->menuid;
            
            $userid = Session::get('userid');
            
            if(isset($fileName)){
                $add = DB::update("update `menu`set  name = '$name',price = '$price',description = '$desc',imgpath = '$fileName',typeoffood ='$typeoffood' where id = '$id'");
				
		    }else{
                $add = DB::update("update `menu`set  name = '$name',price = '$price',description = '$desc',typeoffood ='$typeoffood' where id = '$id'");
            }
            
			
			if($add == true){
				return redirect("/user/$userid");
			}
			
		}
    }

}
