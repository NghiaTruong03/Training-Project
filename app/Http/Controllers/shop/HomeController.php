<?php

namespace App\Http\Controllers\shop;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\SubImage;
use App\Models\Attribute;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
        public function index(){
            // $products = Product::all();
            $products = DB::table('products')->get();
            return view('shop.index',compact('products'));
        }

        public function product_detail($id){
            $details = Product::find($id);
            $subImgList = SubImage::where('product_id',$id)->get();
            return view('shop.product_detail',compact('details','subImgList'));
        }
        
        public function product_list(Request $request, Product $product){
            $categories = DB::table('categories')->whereNull('parent_id')->get();
            $productList = $product->getListProduct($request);
            // dd($productList);
            // $products = DB::table('products')
            //                 ->orderBy('created_at','desc')
            //                 ->get();
            $colors = DB::table('colors')->get();
            $sizes = DB::table('sizes')->get();
            return view('shop.product_list',compact('colors','sizes','productList','categories'));
        }
}
