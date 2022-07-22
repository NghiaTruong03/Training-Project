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
                    {{-- <div class="card-body">
                        <h4 class="card-title">Category Table</h4>
                        <div class="table-responsive">
                            <table id="zero_config" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Category name</th>
                                        <th>Parent category</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($parent_category as $item)
                                    <tr>
                                        <th scope="row">{{$item->id}}</th>
                                        <td>{{$item->cate_name}}</td>
                                        <td>{{ !empty($item->parentCategories) ? $item->parentCategories->cate_name : '' }}
                                        </td>
                                        @if ($item->cate_status == 0)
                                        <td>Show</td>
                                        @else
                                        <td>Hide</td>
                                        @endif
                                        <td>
                                            <form id="delete-form-{{$item->id}}"
                                                action="{{ route('category.destroy',$item->id) }}" method="GET">
                                                @csrf
                                                @method('DELETE')
                                                <a class="btn btn-md" href="{{route('category.edit',$item->id)}}"><i
                                                        class="nav-icon far fa-edit"></i></a>
                                                <button type="button" class="btn btn-md"><i
                                                        class="nav-icon fas fa-times" data-toggle="modal"
                                                        data-target="#modal-delete-{{$item->id}}"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                    <div class="modal fade" id="modal-delete-{{$item->id}}" tabindex="-1" role="dialog"
                                        aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Notify</h4>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">Confirm delete?</div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">
                                                        Close
                                                    </button>
                                                    <button type="button" class="btn btn-danger"
                                                        onclick="event.preventDefault();document.getElementById('delete-form-{{$item->id}}').submit()">Delete</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>ID</th>
                                        <th>Category name</th>
                                        <th>Parent category</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div> --}}
                    <div class="card-body">
                        <h4 class="card-title">Category Table</h4>
                        <div class="table-responsive">
                            <table id="list_category" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Parent Category</th>
                                        <th>Status</th>
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
        <!-- End PAge Content -->
        <!-- ============================================================== -->

    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    @push('script')
        <script>
            $(document).ready(function(){
                var datatableUser = $('#list_category').DataTable({
                responsive: true,
                processing: true,
                serverSide: true,
                "bLengthChange" : false,
                searching: true,
                "ordering": true,
                ajax: {
                    url: '{{ route('category.index') }}',
                },
                columns: [
                 {data: 'id', name: 'id', className:'align-middle'},
                 {data: 'cate_name', name: 'cate_name', className:'align-middle'},
                 {data: 'parent_cate', name: 'parent_cate', className:'align-middle'},
                 {data: 'status', name: 'status', className:'align-middle'},
                 {data: 'action', name: 'action', className:'align-middle'},
                ]
                });
            })

        </script>

    @endpush


@endsection
