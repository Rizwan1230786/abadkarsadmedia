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
            <h4 class="page-title mb-0">Developer</h4>
        </div>
        <div class="page-rightheader">
            <div class="btn btn-list">
                <a href="{{route('admin:developer.submit')}}" class="btn btn-primary"><i class="fe fe-user mr-1"></i> Add
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
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Projects Listing</div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered text-nowrap" id="example1">
                            <thead>
                                <tr>
                                    <th class="wd-15p border-bottom-0">ID</th>
                                    <th class="wd-15p border-bottom-0">image</th>
                                    <th class="wd-15p border-bottom-0">Address</th>
                                    <th class="wd-15p border-bottom-0">Phone Number </th>
                                    <th class="wd-10p border-bottom-0">Created at</th>
                                    <th class="wd-25p border-bottom-0">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                    @foreach ($developer as $develop)
                                        
                                        <tr>
                                            <td>{{ $develop->id }}</td>
                                            <?php if (strpos($_SERVER['HTTP_ACCEPT'], 'image/image_webp') !== false) { ?>
                                            <td><img src="{{ is_null($develop->file) ? asset('assets/images/developer/multiimages/webp/' . $develop->image_webp) : asset('assets/images/developer/' . $develop->image) }}" width="50px" height="50px"></td>
                                            <?php } else { ?>
                                                <td><img src="{{ is_null($develop->file) ? asset('assets/images/developer/multiimages/jpg/' . $develop->image) : asset('assets/images/developer/' . $develop->image) }}" width="50px" height="50px"></td>
                                                <?php } ?>
                                            <td>{{Str::limit($develop->address, 20)}}</td>
                                            <td>{{ $develop->phone_no}}</td>
                                            <td style="text-align: center;"><span
                                                    class="m-badge  m-badge--wide">{{$develop->created_at}}</span>
                                            </td>
                                            <td>
                                                <ul class="icons-list">
                                                
                                                    <a href="{{ route('admin:developer.update', [$data->id ?? '']) }}"><li class="icons-list-item"><i class="fe fe-edit-3" data-toggle="tooltip" title="" data-original-title="Edit"></i></li></a>
                                                   
                                                    <a href="#">
                                                    <li class="icons-list-item view_details" rel="" ><i class="fe fe-file-text" data-toggle="tooltip" title="" data-original-title="Detail"></i></li>
                                                    </a>
                                                    
                                                    <a href="javascript:void(0)">
                                                      <li class="icons-list-item publish" rel="" status=""><i class="fe fe-arrow-up" data-toggle="tooltip" title="" data-original-title="Publish"></i></li>
                                                    </a>
                                                   
                                                    <a href="{{route('admin:developer.delete', [$pannel->id ?? '' ])}}">
                                                      <li class="icons-list-item delete_record" data-id=""><i class="fa fa-trash-o"  data-toggle="tooltip" title="" data-original-title="Delete"></i></li>
                                                    </a>
                                                </ul>
                                            </td>
                                        </tr>
                                    @endforeach
                                
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
     <script src="{{ URL::asset('assets/themeJquery/projects/jquery.js') }}"></script>
@endsection
