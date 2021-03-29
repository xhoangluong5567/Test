<?php

namespace App\Http\Controllers;


use App\Jobs\SentReminderEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\User;
use App\Category;
use App\Product;
use App\Product as AppProduct;
use Illuminate\Foundation\Auth\User as AuthUser;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $products = Product::all();
        $categories = Category::all();
        return view('frontend.home', ['products' => $products,
        'categories' => $categories]);
    }
    

}
