<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Food;
use App\Models\order;
use App\Models\FoodGallery;
use App\Models\testimony;
use Illuminate\Auth\Events\Login;
use Illuminate\Cache\RedisTaggedCache;
use PHPUnit\Framework\Test;

class HomeController extends Controller
{
    public function menu(){

        $data = food::all();
        $user_id=Auth::id();
        $count=cart::where('user_id', $user_id)->count();

        return view("menu", compact('data','count'));
    }

    public function index()
    {
        if (Auth::id()) {
            return redirect('redirects');
        } else
            $data = food::all();
        $datagallery = FoodGallery::all();
        $testimonydata = testimony::all();
        return view("home", compact("data", "datagallery", "testimonydata"));
    }

    public function redirects()
    {
        $data = food::all();
        $datagallery = FoodGallery::all();
        $testimonydata = testimony::all();
        $usertype = Auth::user()->usertype;

        if ($usertype == '1') {
            return view('admin.admin');
        } else {

            $testimonydata = testimony::all();
            $user_id = Auth::id();
            $count = cart::where('user_id', $user_id)->count();
            return view('home', compact('data', "datagallery", "count", "testimonydata" ));
        }
    }

    public function addcart(Request $request, $id)
    {

        if (auth::id()) {
            $user_id = Auth::id();

            $foodid = $id;
            $quantity = $request->quantity;

            $cart = new Cart();
            $cart->user_id = $user_id;
            $cart->food_id = $foodid;
            $cart->quantity = $quantity;
            $cart->save();
            return redirect()->back();
        } else {
            return redirect('/login');
        }
    }

    public function showcart(Request $request, $id)
    {
        $count = cart::where('user_id', $id)->count();

        if (Auth::id() == $id) {
if('user_id' )
            $cartdata = cart::select('*')->where('user_id', '=', $id)->get();

            $data = cart::where('user_id', $id)->join('food', 'carts.food_id', "=", "food.id")->get();

            return view('showcart', compact('count', 'data', 'cartdata'));
            
        } else {
            return redirect()->back();
        }
    }

    public function remove($id)
    {

        $data = cart::find($id);
        $data->delete();

        return redirect()->back();
    }

    public function orderconfirm(Request $request)
    {
        foreach ($request->foodname as $key => $foodname) {
            $data = new order;
            $data->foodname = $foodname;

            $data->price = $request->price[$key];
            $data->quantity = $request->quantity[$key];

            $data->name = $request->name;
            $data->phone = $request->phone;
            $data->date = $request->date;
            $data->address = $request->address;
            $data->notes = $request->notes;


            $data->save();
        }
        return redirect()->back()->with('success', 'Order Success!', 'You will be contacted by our admin soon!');
    }



    public function addtestimony(Request $request)
    {
        $data = new testimony();

        $data->name = $request->name;
        $data->comment = $request->comment;

        $data->save();
        return redirect()->back();
    }



//     public function showtestimony(Request $request, $id)
//     {

//         if (Auth::id() == $id) {
// if('user_id' )
//             $testimonydata = testimony::select('*')->where('user_id', '=', $id)->get();

//             $data = testimony::where('user_id', $id)->join('users', 'testimony.user_id', "=", "users.id")->get();

//             return view('showtestimony', compact('data', 'testimonydata'));
            
//         } else {
//             return redirect()->back();
//         }
//     }



}