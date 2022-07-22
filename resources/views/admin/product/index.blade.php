@extends('admin.master')
@section('content')
<div class="page-wrapper">
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <!-- basic table -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Product Table</h4>
                        <div class="table-responsive">
                            <table id="list_product" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Image</th>
                                        <th>Category</th>
                                        <th>Price</th>
                                        <th>Sale Price</th>
                                        <th>Quantity</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
         
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Page Content -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->   
    @push('script')
        <script>
            $(document).ready(function(){
                var datatableUser = $('#list_product').DataTable({
                responsive: true,
                processing: true,
                serverSide: true,
                "bLengthChange" : false,
                searching: true,
                "ordering": true,
                ajax: {
                    url: '{{ route('product.index') }}',
                },
                columns: [
                    {data: 'id', name: 'id', className:'align-middle'},
                    {data: 'pro_name', name: 'pro_name', className:'align-middle'},
                    {data: 'pro_image', name: 'pro_image', className:'align-middle',},
                    {data: 'cate_name', name: 'cate_name', className:'align-middle',},
                    {data: 'pro_price', name: 'pro_price', className:'align-middle'},
                    {data: 'pro_sale_price', name: 'pro_sale_price', className:'align-middle'},
                    {data: 'pro_quantity', name: 'pro_quantity', className:'align-middle'},
                    {data: 'action', name: 'action', className:'align-middle'},
                ]
                });
            }   )

        </script>

    @endpush
@endsection
