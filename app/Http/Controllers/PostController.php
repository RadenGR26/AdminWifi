<?php

    namespace App\Http\Controllers;
    
    use Illuminate\Http\Request;
    use App\Product;
    
    class PostController extends Controller
    {
        public function index(){
            $post   = Product::all();
            return view('index')->with('post', $post);
        }
    }