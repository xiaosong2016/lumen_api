<?php

namespace App\Http\Controllers;
use App\Http\Models\Address;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redis;
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

    public function stroe_into_redis(){
        Redis::set('name','xiaoming');
        return Redis::get('name');
    }

    public function testModel(){



        return Address::simplePaginate(30);
//        return Address::paginate(30);

    }

}