@extends('admin.master')
@section('css')
    <!-- INTERNAL Data tables -->
    @include('admin.layouts.dataTableCssFiles');
    <!-- INTERNAL Select2 js -->
    @include('admin.layouts.select2CssFiles');
@endsection
@section('page-header')
    <!--Page header-->
    <div class="page-header">
        <div class="page-leftheader">
            <h4 class="page-title mb-0">Blogs</h4>
        </div>
        <div class="page-rightheader">
            <div class="btn btn-list">
                <a href="{{ route('admin:blog.create') }}" class="btn btn-primary"><i class="fe fe-user mr-1"></i> Add
                    New</a>

            </div>
        </div>
    </div>
    <!--End Page header-->
@endsection
@section('content')
    <!-- Row -->
    <div class="row">
        <div class="col-12">
            @if (Session::has('message'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">

                    {{ Session::get('message') }}

                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Blog Listing</div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered text-nowrap" id="example1">
                            <thead>
                                <tr>
                                    <th class="wd-15p border-bottom-0">ID</th>
                                    <th class="wd-15p border-bottom-0">Image</th>
                                    <th class="wd-15p border-bottom-0">Title</th>
                                    <th class="wd-25p border-bottom-0">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @isset($record)
                                    @foreach ($record as $item)
                                        <tr>
                                            <td>{{ $item->id }}</td>
                                            <td><img src="{{ asset('storage/' . $item->image) }}" width="50" height="50" alt=""></td>
                                            <td>{{ $item->title }}</td>
                                            <td>
                                                <ul class="icons-list">
                                                    <a href="{{ route('admin:blog.edit', $item->id) }}">
                                                        <li class="icons-list-item"><i class="fe fe-edit-3"
                                                                data-toggle="tooltip" title="" data-original-title="Edit"></i>
                                                        </li>
                                                    </a>
                                                    <a href="#">
                                                        <li class="icons-list-item view_details" rel="{{ $item->id }}"><i
                                                                class="fe fe-file-text" data-toggle="tooltip" title=""
                                                                data-original-title="Detail"></i></li>
                                                    </a>
                                                    <a href="javascript:void(0)">
                                                        <li class="icons-list-item delete_record" data-id="{{ $item->id }}">
                                                            <i class="fa fa-trash-o" data-toggle="tooltip" title=""
                                                                data-original-title="Delete"></i>
                                                        </li>
                                                    </a>
                                                </ul>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endisset
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Row -->
    </div>
    </div><!-- end app-content-->
    </div>
@endsection
@section('js')
    <!-- INTERNAL Data tables -->
    @include('admin.layouts.dataTableJsFiles')
    <!-- INTERNAL Select2 js -->
    @include('admin.layouts.select2JsFiles')

    {{-- sweet alert --}}
    <script>
        $(document).on('click', '.delete_record', function(e) {
            e.preventDefault();
            var id = $(this).data('id');

            swal({
                    title: "Are you sure!",
                    text: "You will not be able to recover this imaginary file!",
                    type: "error",
                    confirmButtonClass: "btn-danger",
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "Yes!",
                    showCancelButton: true,
                },
                function() {
                    $.ajax({
                        type: "post",
                        url: '/admin/delete_blog/' + id,
                        data: {
                            id: id
                        },
                        success: function(data) {
                            swal("Deleted!", "Product has been deleted.", "success");
                            location.reload();
                        }
                    });
                });
        });
    </script>
@endsection
