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
                    <form method="POST" action="{{route('product.update', $product->id)}}" class="form-horizontal mt-4" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
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
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea class="form-control" name="pro_description" rows="5" value="{{$product->pro_description}}"></textarea>
                                </div>
                                {{-- <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            @foreach ($colors as $color)
                                            <div class="form-check">
                                              <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" name="color_id[]" id="" value="{{$color->id}}">
                                                {{$color->color_value}}
                                              </label>
                                            </div>
                                            @endforeach                           
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            @foreach ($sizes as $size)
                                            <div class="form-check">
                                              <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" name="size_id[]" id="" value="{{$size->id}}" >
                                                {{$size->size_value}}
                                              </label>
                                            </div>
                                            @endforeach                           
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
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
                            <input type="file" name="pro_image" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Sub-Image file upload</label>
                            <input type="file" name="sub_image[]" multiple class="form-control">
                        </div>
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