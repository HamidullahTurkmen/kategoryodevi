<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller{
    function showVisible(){
        //$users = DB::table('users')->get();
        $users = User::all();
        return view ('newpage',compact('users'));
    }

    function urunler(){
        $users = DB::table('products')->get();
        return view ('urunler',compact('users'));
    }
    function user_products(){
        $user_products = DB::table('user_products')->get();
        return view ('user_products',compact('user_products'));
    }
   function birlestirme(){
       $data = DB::table('users')
           ->join('products','products.id','=','users.id')
           ->select('users.name','products.name')
           ->get();
       return view('birlestirme',compact('data'));
   }
    function user_product(){
        $data = DB::table('user_products')
            ->join('users','users.id','=','user_products.userId')
            ->join('products','products.id','=','user_products.productId')
            ->select('user_products.id','users.name','products.name','products.description','products.price')
            ->get();
        return view('user_products',compact('data'));
    }


}
