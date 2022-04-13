@extends('admin.master')
@section('css')
@include('admin.layouts.select2CssFiles')
@include('admin.layouts.fancy-uploader-css')
@endsection
@section('page-header')
<div class="page-header">
    <div class="page-leftheader">
        <h4 class="page-title mb-0">Create</h4>
    </div>
    <div class="page-rightheader">
        <div class="btn btn-list">
            <a href="{{ route('admin:state') }}" class="btn btn-primary"><i class="fe fe-block mr-1"></i> Back </a>
        </div>
    </div>
</div>
@endsection
@section('content')
<div class="row">
    <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Our Area</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <form class="validationForm formSubmited" id="myForm" enctype="multipart/form-data" method="POST" action="{{ route('admin:area_submit', [$data['updateId'] ?? 0]) }}">
                            @csrf
                            <input type="hidden" name="id" value="{{$data['updateId'] ?? 0}}">
                            <div class="card-body pb-2">
                                <div class="row row-sm">
                                    <div class="col-12 form-group">
                                        <label class="form-label">Area Name</label>
                                        <input class="form-control notrequired" placeholder="Name" name="areaname" value="{{ $data['record']->areaname ?? '' }}" type="text">
                                    </div>
                                    <div class="col-lg-12 form-group ">
                                        <label class="form-label">Select City</label>
                                        <select id="cars" class="form-control" name="city">
                                            <option value="">--select--</option>
                                            @foreach($city as $city)
                                            <option value="{{$city->id}}" <?php if (($data['record']->city ?? '') == $city->name) {
                                                                                echo 'selected';
                                                                            } ?>>{{$city->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="btn btn-list" style="text-align:center;width:100%">
                                            <button type="submit" class="btn btn-primary user_form submit_button">Save
                                            </button>
                                            <button type="button" href="{{ route('admin:area') }}" class="btn btn-warning">Cancel </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
@endsection
@section('js')
<script src="{{ URL::asset('assets/plugins/select2/select2.full.min.js') }}"></script>
@include('admin.layouts.select2JsFiles')
@include('admin.layouts.fancy-uploader-js')
@include('admin.layouts.tinymce-js')
@include('admin.layouts.templateJquery')
<script src="{{ URL::asset('assets/themeJquery/area/jquery.js') }}"></script>
@endsection
