<?php namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Response;

class RestController extends Controller {



	
	public function getallcafe()
	{
	
	$user_data = DB::select("select id,type,name,description,adress,work_time,img_path,telephone,lat,lng from `users` ");
        //dd($user_data);
        //return response()->json(['error' => false, 'data' => $user_data,'status_code' => 200]);
        return response()->json(['data' => $user_data], 200, ['Content-Type' => 'application/json; charset=UTF-8','charset' => 'utf-8'], JSON_UNESCAPED_UNICODE);
	}

    public function getcafe($id){
        //dd($user_data);
        $user_data = DB::select("select id,type,name,description,adress,work_time,img_path,city,telephone,lat,lng from `users` where id = '".$id."'");
        
        $menu_data = DB::select("select * from `menu` where parent_id = '".$id."'");
        
        return response()->json(['user_data' => $user_data,'menu_data' => $menu_data], 200, ['Content-Type' => 'application/json; charset=UTF-8','charset' => 'utf-8'], JSON_UNESCAPED_UNICODE);
    }
    
    public function getcafebytype($type){
        $user_data = DB::select("select id,type,name,description,adress,work_time,img_path,telephone,lat,lng from `users` where type = '".$type."' ");
        //dd($user_data);
        //return response()->json(['error' => false, 'data' => $user_data,'status_code' => 200]);
        return response()->json(['data' => $user_data], 200, ['Content-Type' => 'application/json; charset=UTF-8','charset' => 'utf-            8'], JSON_UNESCAPED_UNICODE);
    }

    public function getmenu($id){
    	//$user_data = DB::select("select * from `menu` where parent_id = '".$id."' ");
        //dd($user_data);
        //return response()->json(['error' => false, 'data' => $user_data,'status_code' => 200]);
        
        
        
     
        
        $menu = [];
        
        
        DB::transaction(function() use ($id,&$menu)
        {
          $drink =   DB::select("select * from `menu` where typeoffood = 'напиток' and parent_id = '".$id."'  ");

          $first =   DB::select("select * from `menu` where typeoffood = 'первое' and parent_id = '".$id."'  ");
            
          $second =  DB::select("select * from `menu` where typeoffood = 'второе' and parent_id = '".$id."' ");
            
          $seaproduct =  DB::select("select * from `menu` where typeoffood = 'морепродукты' and parent_id = '".$id."' ");
            
          $snacks =  DB::select("select * from `menu` where typeoffood = 'закуски' and parent_id = '".$id."' ");
            
          $confectionery =  DB::select("select * from `menu` where typeoffood = 'кондитерские изделия' and parent_id = '".$id."' ");
            
          $bread =  DB::select("select * from `menu` where typeoffood = 'хлебо булочные изделия' and parent_id = '".$id."' ");
            
          //$categoryres = DB::select("select distinct typeoffood from `menu` ");
            
          $menu = ['drink' => $drink,'first'=>$first,'second' => $second,'seaproduct'=>$seaproduct,'snacks'=>$snacks,'confectionery' => $confectionery,'bread' => $bread];  
          
          //$category = $categoryres;
            
          
            
        });






        
        //$category = ['drink'=>'напиток','first' => 'первое','seond' => 'второе','seaproduct' => 'морепродукты','snacks' => 'закуски',  'confectionery' => 'кондитерские изделия','bakery products' => 'хлебо булочные изделия'];    
        
          return response()->json(['data' => $menu], 200, ['Content-Type' => 'application/json; charset=UTF-8','charset' => 'utf-            8'], JSON_UNESCAPED_UNICODE);
        
        //dd($menu);
        
       // DB::beginTransaction();
          
        
        
        
    }

}
