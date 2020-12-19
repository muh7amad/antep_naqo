<?php

 namespace App\Http\Controllers;
 use Illuminate\support\Facades\DB;
 use App\Models\User;

class HomeController extends Controller
{
   public function show()
    {
       // $users = DB::table('users')->get(); //select * from users
       //$users = User::all();

       // $name = $users[0]->name;
        return view('About',compact('users'));

    }
    public function ShowProducts()
    {
       return $products = DB::table('products')->simplePaginate(1);

        //return view('Products',compact('products'));

    }

    public function ShowUserProducts()
    {
        $UserProducts = DB::table('user_products')->get(); //select * from user_products

        return view('UserProduct_view',compact('UserProducts'));

    }
}
