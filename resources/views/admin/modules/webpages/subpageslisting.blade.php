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
            <h4 class="page-title mb-0">Sub-Webpages</h4>
        </div>
        <div class="page-rightheader">
            <div class="btn btn-list">
                <a href="{{ url('admin/createsubpages')}}" class="btn btn-primary"><i class="fe fe-user mr-1"></i> Add
                    New</a>
                    <a href="{{ route('admin:webpages')}}" class="btn btn-primary"><i class="fe fe-user mr-1"></i> Back</a>

            </div>
        </div>
    </div>
    <!--End Page header-->
@endsection
@section('content')
    <!-- Row -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Webpages Listing</div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered text-nowrap" id="example1">
                            <thead>
                                <tr>
                                    <th class="wd-15p border-bottom-0">ID</th>
                                    <th class="wd-15p border-bottom-0">Title</th>
                                    <th class="wd-20p border-bottom-0">Url Slug</th>
                                    <th class="wd-15p border-bottom-0">Page priority</th>
                                    <th class="wd-10p border-bottom-0">Status</th>
                                    <th class="wd-25p border-bottom-0">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @isset($subpage)
                                    @foreach ($subpage as $item)
                                        @php
                                            $status = $item->is_publish ?? 0;
                                        @endphp
                                        <tr>
                                            <td>{{ $item->id }}</td>
                                            <td>{{ $item->page_title }}</td>
                                            <td>{{ $item->url_slug }}</td>
                                            <td>{{ $item->page_rank }}</td>
                                            <td><span
                                                    class="m-badge  m-badge--{{ $status != '1' ? 'danger' : 'info' }} m-badge--wide">{{ $status != '1' ? 'Unactive' : 'Active' }}</span>
                                            </td>
                                            <td>
                                                <ul class="icons-list">
                                                <a href="{{ route('admin:createsubpages.form', ['id'=>$item->id]) }}"><li class="icons-list-item"><i class="fe fe-edit-3" data-toggle="tooltip" title="" data-original-title="Edit"></i></li></a>
                                                    <li class="icons-list-item view_details" rel="{{ $item->id }}" ><i class="fe fe-file-text" data-toggle="tooltip" title="" data-original-title="Detail"></i></li>
                                                    @if($status == 1)
                                                    <a href="javascript:void(0)">
                                                      <li class="icons-list-item publish" rel="{{ $item->id }}" status="{{ $status }}"><i class="fe fe-arrow-up" data-toggle="tooltip" title="" data-original-title="Publish"></i></li>
                                                    </a>
                                                    @else
                                                    <a href="javascript:void(0)">
                                                    <li class="icons-list-item publish" rel="{{ $item->id }}"  status="{{ $status }}"><i class="fe fe-arrow-down" data-toggle="tooltip" title="" data-original-title="Un Publish"></i></li>
                                                    </a>
                                                    @endif
                                                    <a href="javascript:void(0)">
                                                      <li class="icons-list-item subpage_delete_record" data-id="{{ $item->id }}"><i class="fa fa-trash-o"  data-toggle="tooltip" title="" data-original-title="Delete"></i></li>
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
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': "{{ csrf_token() }}"
        }
    });
    $(document).on("click", ".publish", function(event) {
            event.preventDefault();
            var id = $(this).attr('rel');
            var status = $(this).attr('status');
            $.ajax({
                type: 'POST',
                url: "{{url('admin/update_status_subpages')}}",
                data: {
                    'id': id,
                    'status': status
                },
                async: false,
                success: function(result) {
                    var message = (_.hasIn(result, "message") ? result.message : "");
                    var type = (_.hasIn(result, "type") ? result.type : 'success');
                    if (_.isEqual(type, 'success')) {
                        toastr['success'](message, { showMethod: 'slideDown', hideMethod: 'slideUp', timeOut: 2000 });
                        location.reload();
                    }
                }
            });
        });
        ////sweet alerts////////
        $(document).on('click', '.subpage_delete_record', function (e) {
        e.preventDefault();
        var id = $(this).data('id');
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        
        swal({
                title: "Are you sure!",
                text: "You will not be able to recover this imaginary file!",
                type: "error",
                confirmButtonClass: "btn-danger",
                confirmButtonColor : "#DD6B55",
                confirmButtonText: "Yes!",
                showCancelButton: true,
            },
            function() {
                $.ajax({
                    type: "delete",
                    url: "{{url('admin/subwebpage/delete')}}/" + id,
                    data: {id:id,_token:CSRF_TOKEN},
                    success: function (data) {
                            swal("Deleted!", "Page has been deleted.", "success");
                            location.reload();
                        }         
                }); 
            });
        });
</script>
@endsection
