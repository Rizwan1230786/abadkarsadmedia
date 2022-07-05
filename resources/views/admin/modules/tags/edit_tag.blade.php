@extends('admin.master')
@section('css')
@include('admin.layouts.select2CssFiles')
@include('admin.layouts.fancy-uploader-css')
@endsection
@section('page-header')               
               <form action="/admin/update/tag" enctype="multipart/form-data" method="Post">
               @csrf
                      <input type="hidden" name="id" value="{{$tag->id}}">

                             <div class="card-body pb-2">
                                   @if ($message = Session::get('message'))
                                        <div class="alert alert-success alert-block">
                                            <button type="button" class="close" data-dismiss="alert">×</button>
                                                <strong style="color:white;">{{ $message }}</strong>
                            </div>
                                    @endif
               <div class="card-body pb-2">
                                <div class="row row-sm">
                           <div class="col-6 form-group">
                                        <label class="form-label">Tags Name</label>
                                        <input class="form-control notrequired" placeholder="Tags Name" name="name" value="{{$tag->name}}"  type="text">
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="btn btn-list" style="text-align:center;width:100%">
                                            <button type="submit" class="btn btn-primary user_form submit_button">Save
                                            </button>
                                            <button type="button" href="#" class="btn btn-warning">Cancel </button>
                                        </div>


                                </div>        
                         </div>               
                 </form>

                 @endsection
@section('js')
<script src="{{ URL::asset('assets/plugins/select2/select2.full.min.js') }}"></script>
@include('admin.layouts.select2JsFiles')
@include('admin.layouts.fancy-uploader-js')
@include('admin.layouts.tinymce-js')
@include('admin.layouts.templateJquery')
<script src="{{ URL::asset('assets/themeJquery/agency/jquery.js') }}"></script>
@endsection
