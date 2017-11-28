<?php


namespace App\Http\Controllers;
use App\Http\Model\member;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
class IndexController extends Controller{
    public function index(){
        //$pdo=DB::connection()->getPdo();
        //dd($pdo);
        //$user=DB::table('members')->where('user_id','1')->get();
        //dd($user);
        //echo config('database.default');
        
        $user=member::where('user_id','>',-1)->get();
        //echo header('Content-Type: application/json; charset=utf-8');
        //echo $user;
        //echo $user[0]['user_id'];
        //$user=member::find(1);
        /*for($i=0;$i<count($user);$i++){
            echo $user[$i]['user_id'];
        }*/
        return response()->json($user);
        //return response($content,$status)->header('Content-Type',application/json);
        //$user->user_name='7777';
        //dd($user);
       // $user_id= $user->user_id;
        //echo $user_id; 
    }
}