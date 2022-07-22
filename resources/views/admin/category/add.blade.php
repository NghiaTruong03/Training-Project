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
                    <h4 class="card-title">Add Category</h4>
                    <form method="POST" action="{{route('category.store')}}" class="form-horizontal mt-4">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Category name<span class="help"></span></label>
                                    <input type="text" name="cate_name" class="form-control" value="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Parent category</label>
                                    <select name="parent_id" class="custom-select col-12" id="">
                                        <option value="null" selected>Choose...</option>
                                        @foreach ($category_parent as $value)
                                            <option value="{{$value->id}}">{{$value->cate_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>                   
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="cate_status" id="" value="0" checked>
                            Show
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="cate_status" id="" value="1">
                            Hide
                            </label>
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