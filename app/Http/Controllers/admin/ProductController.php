<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Color;
use App\Models\Size;
use App\Models\SubImage;
use App\Models\Attribute;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\DataTables;


class ProductController extends Controller
{
    public function index(Request $request, Product $product){
       
        if($request->ajax()){
            $data = $product->getListProduct($request);
            // foreach($data as $value){
            //     dump($value->category->cate_name);
            // }die();
            return DataTables::of($data)
            ->addIndexColumn()
            ->addColumn('id', function($pro_value) {
                return $pro_value->id ? $pro_value->id : '';
            })
            ->addColumn('pro_name', function($pro_value){
                return $pro_value->pro_name ? $pro_value->pro_name : '';
            })
            ->addColumn('pro_image', function($pro_value){
                $img_url = asset('storage/'.$pro_value->pro_image);
                return '<img src="' . $img_url . '" alt="" class="product_img">';
            })
            ->addColumn('cate_name', function($pro_value){
                return $pro_value->category->cate_name ? $pro_value->category->cate_name : '';
            })
            ->addColumn('pro_price', function($pro_value){
                return $pro_value->pro_price ? '$ ' .number_format($pro_value->pro_price, 2 ) : '';
            })
            ->addColumn('pro_sale_price', function($pro_value) {
                return $pro_value->pro_sale_price ? '$ ' .number_format($pro_value->pro_sale_price, 2 ) : '';
            })
            ->addColumn('pro_quantity', function($pro_value) {
                return $pro_value->pro_quantity ? $pro_value->pro_quantity : '';
            })
            // ->editColumn('action', function($pro_value){
            //     return '<a href="'. route('product.edit', $pro_value->id).'">
            //                 <i class="fas fa-pencil-alt"></i>
            //             </a>
            //             <a href="'. route('product.destroy', $pro_value->id).'">
            //                 <i class="fas fas fa-times"></i>
            //             </a>
            //             ';               
            // })
            ->addColumn('action', function ($pro_value) {
                return '<a href="'. route('product.edit', $pro_value->id) .'" class="btn btn-xs btn-success"><i class="fa fa-pencil-alt"></i> Edit</a> 
                        <a href="'. route('product.destroy', $pro_value->id).'" class="btn btn-xs btn-danger btn-delete"><i class="fa fa-times"></i> Delete</a>';
            })
            ->rawColumns(['id','name','pro_image','cate_name','price','sale price','quantity','action'])

            ->make(true);   
        }
        return view('admin.product.index');

    }
    public function create(){
        $category_list = Category::whereNotNull('parent_id')->get();
        $sizes = Size::all();
        $colors = Color::all();
        return view('admin.product.add',compact('category_list','sizes','colors'));
    }
    public function store(Request $request){
        $data = $request->all();
        // dd($request->all());        
        //Checking if exist image request then add
        if($request->file('pro_image')){
            $img_name = $request->file('pro_image')->getClientOriginalName();
            $request->file('pro_image')->storeAs('public',$img_name);
            $data['pro_image'] = $img_name;
        }
        $product_create = Product::create($data)->id;   
        foreach($request['size_id'] as $size_id){
            foreach($request['color_id'] as $color_id)
            $attribute_create = Attribute::create([
                'product_id' => $product_create,
                'size_id' => $size_id,
                'color_id' => $color_id,
            ]);
        }
        if($product_create){
                //checking if exist sub_image request then add
                if($request->file('sub_image')){
                    foreach($request->file('sub_image') as $value){
                        $value->store('public');
                        $data['sub_image'] = $value->getClientOriginalName();
                        $subImg_create = SubImage::create([
                            'sub_image' => $data['sub_image'],
                            'product_id' => $product_create,
                        ]);
                    }    
                
                }
            return redirect()->route('product.index'); 
        }else{
            dd('Them that bai');
        }



    }

    public function edit($id){
        $product = Product::find($id); 
        $sizes = Size::all();
        $colors = Color::all();
        $category = Category::whereNotNull('parent_id')->get();
        return view('admin.product.edit',compact('product','category','sizes','colors'));
    }

    public function update(Request $request,$id){
        $product_update = Product::find($id);
        $data = $request->all();
        // dd($data);
        //Checking if exist image request
        if($request->file('pro_image')){
            //save new image to storage
            $img_name = $request->file('pro_image')->getClientOriginalName();
            $request->file('pro_image')->storeAs('public',$img_name);
            $data['pro_image'] = $img_name;
            //if exist old img then delete old img in storage folder and add new one
            if($product_update->pro_image){
                $old_img = $product_update->pro_image;
                Storage::delete('/public/'.$old_img);
            }
        }
        //Checking if exist sub_image request
        if($request->file('sub_image')){
            $check_img = SubImage::where('product_id','=',$id)->get();
            //if sub_img already exist in db then delete img in storage 
            if($check_img){
                foreach($check_img as $img){
                    $name = $img->sub_image;
                    Storage::delete('/public/'.$name);
                }
            }
            //add new sub_image 
            $sub_imgs = $request->file('sub_image');
            foreach($sub_imgs as $sub_img){
                $sub_img_name = $sub_img->getClientOriginalName();
                $sub_img->storeAs('public',$sub_img_name);
                // dd($sub_img_name);
                $update = SubImage::create([
                    'sub_image' => $sub_img_name,
                    'product_id' => $id,
                ]); 
            }
            
        }

        $product_update->update($data);
        if($product_update){
            return redirect()->route('product.index');
        }else{
            return redirect()->route('product.index');
        }
    }

    public function destroy($id){
        $delete = Product::find($id);
        $delete->delete();
        if($delete){
            return redirect()->route('product.index');
        }else{
            dd('xoá thất bại');
        }

    }

}
