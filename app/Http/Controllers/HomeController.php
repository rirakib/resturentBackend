<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //
    public function index(){
        $usertype = Auth::user()->usertype;

        if($usertype =='1'){
            return view('adminDashboard');
        }
        else{
            return view('welcome');
        }
    }

    public function orderStore(Request $request){
        $validated = $request->validate([
            'where' => 'required',
            'item' => 'required',
            'item-quantity'=>'required',
            'number'=>'required'
        ]);
        $data = $request->all(['where','item','item-quantity','number']);
        Order::create($data);
        return view('welcome');
    }

    
}
