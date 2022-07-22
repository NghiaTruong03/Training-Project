@extends('admin.master')
@section('content')
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <!-- .row -->
        <div class="row">
            <div class="col-sm-12">
                <div class="card card-body">
                    <h4 class="card-title">Edit Product</h4>
                    <form method="POST" action="{{route('product.update',$product->id)}}" enctype="multipart/form-data" class="form-horizontal mt-4">
                        @csrf
                        <div class="form-group">
                            <label>Product name<span class="help"></span></label>
                            <input type="text" name="pro_name" class="form-control" value="{{$product->pro_name}}">
                        </div>
                        <div class="form-group">
                            <label>Price<span class="help"></span></label>
                            <input type="text" name="pro_price" class="form-control" value="{{$product->pro_price}}">
                        </div>
                        <div class="form-group">
                            <label>Sale price<span class="help"></span></label>
                            <input type="text" name="pro_sale_price" class="form-control" value="{{$product->pro_sale_price}}">
                        </div>
                        <div class="form-group">
                            <label>Quantity<span class="help"></span></label>
                            <input type="text" name="pro_quantity" class="form-control" value="{{$product->pro_quantity}}">
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea class="form-control" name="pro_description" value="{{$product->pro_description}}" rows="5"></textarea>
                        </div>
                        
                        <div class="form-group">
                            <label>Categories</label>
                            <select name="category_id" class="custom-select col-12" id="">
                                <option value="null" selected>Choose...</option>
                                @foreach ($category as $cate_value)
                                    <option value="{{$cate_value->id}}">{{$cate_value->cate_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Image file upload</label>
                            <input class="form-control" name="pro_image" accept="image/*" type='file' id="imgInp" />
                            <img id="previewImg" src="{{url('storage/'.$product->pro_image)}}" alt="your image" />
                            {{-- <input type="file" name="pro_image" class="form-control"> --}}
                        </div>
                        <div class="form-group">
                            <label>Sub-Image file upload</label>
                            <input type="file" name="sub_image[]" multiple class="form-control">
                        </div>
                        {{-- <div class="form-group">
                            <label>Custom File upload</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Upload</span>
                                </div>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="inputGroupFile01">
                                    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                </div>
                            </div>
                        </div> --}}

                        <button type="submit" class="btn waves-effect waves-light btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
@endsection