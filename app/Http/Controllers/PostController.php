<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class PostController extends Controller {

    public function index(){
        
        // $time_start = microtime(time());
        // $db = DB::table('address')->get();
        // $tiem_end = microtime(time());
        $data = DB::table('address')->where('level','2')->get();
        // $data = DB::table('address')->leftJoin('address','address.id','=','address.upid')->get();
        //查看 SQL语句
        // app('db')->connection()->enableQueryLog();
        // $sql = app('db')->getQueryLog();
        // dd($sql);
        // DB::enableQueryLog();
        // $a = DB::getQueryLog();
        return [
            'status' => 0,
            'data' => $data,
            'meg' => '',
        ];
    }

    

}