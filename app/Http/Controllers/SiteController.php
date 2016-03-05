<?php namespace App\Http\Controllers;
use DB;

class SiteController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	/*public function index()
	{
        	$user_data = DB::select("select * from `users` ");
        
		return view('site.index',['user_data' => $user_data]);
	}*/
	public function index()
	{
       $data = DB::select("select * from `users` ");
	   return view('site.placelist',['data' => $data]);
	}

	public function viewplace($id)
	{
		$data = DB::select("select * from `users` where id = $id ");
		$menudata = DB::select("select * from `menu` where parent_id = $id ");

		return view('site.placedetail',['data' => $data,'menudata' => $menudata]);
	}

	public function viewplacelist($id){
		$data = DB::select("select * from `users` where type = '".$id."' ");
		return view('site.placelist',['data' => $data]);
	}

	

}
