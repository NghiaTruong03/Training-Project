<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;


class CategoryController extends Controller
{
    public function index(Request $request, Category $category){
        if($request->ajax()){
            $data = $category->getListCategory($request);
            return DataTables::of($data)
            ->addIndexColumn()
            ->addColumn('id', function($cate_value){
                return $cate_value->id ? $cate_value->id : '';
            })
            ->addColumn('cate_name', function($cate_value){
                return $cate_value->cate_name ? $cate_value->cate_name : '';
            })
            ->addColumn('parent_cate', function($cate_value){
                return $cate_value->parentCategories ? $cate_value->parentCategories->cate_name : '';
            })
            ->addColumn('status', function($cate_value){
                return $cate_value->cate_status == 0 ? 'Show' : 'Hide';
            })
            ->addColumn('action', function ($cate_value) {
                return '<a href="'. route('category.edit', $cate_value->id) .'" class="btn btn-xs btn-warning"><i class="fa fa-pencil-alt"></i> Edit</a> 
                        <a href="'. route('category.destroy', $cate_value->id).'" class="btn btn-xs btn-danger btn-delete"><i class="fa fa-times"></i> Delete</a>';
            })
            ->rawColumns(['id','name','parent category','status','action'])

            ->make(true);   
        }
        return view('admin.category.index');

    }

    public function create(){
        $category_parent = Category::whereNull('parent_id')->get();
        return view('admin.category.add',compact('category_parent'));
    }

    public function store(Request $request){
        // dd($request->all());
        $category = Category::create($request->all());
        return redirect()->route('category.index');
    }

    public function edit($id){
        $category_parent = Category::whereNull('parent_id')->get();
        $category = Category::find($id);
        return view('admin.category.edit',compact('category','category_parent'));
    }

    public function update(Request $request,$id){
        $update = Category::find($id);
        $update->update($request->all());
        if($update){
            return redirect()->route('category.index');
        }else{
            dd('thất bại');
        }
    }

    public function destroy($id){
        $delete = Category::find($id);
        $delete->delete();
        if($delete){
            return redirect()->route('category.index');
        }else{
            dd('xoá thất bại');
        }

    }
}
