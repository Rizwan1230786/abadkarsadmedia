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
                <a href="{{ route('admin:properties') }}" class="btn btn-success"><i class="fe fe-block mr-1"></i> Back </a>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Our Properties</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <form class="validationForm formSubmited" id="myForm" enctype="multipart/form-data"
                                method="POST" action="{{ route('admin:properties_submit', [$data['updateId'] ?? 0]) }}">
                                @csrf
                                <input type="hidden" name="id" value="{{ $data['updateId'] ?? 0 }}">
                                <div class="card-body pb-2">
                                    <div class="row row-sm">
                                        <div class="col-9">
                                            <div class="col-md-6 form-group">
                                                <label class="form-label">Title</label>
                                                <input class="form-control notrequired" placeholder="title" name="title"
                                                    value="{{ $data['record']->name ?? '' }}" type="text">
                                            </div>

                                            <div class="col-4">
                                                <div class="btn btn-list" style="text-align:center;width:100%">
                                                    <button type="submit"
                                                        class="btn btn-success user_form submit_button">Save
                                                    </button>
                                                    <button type="button" href="{{ route('admin:features') }}"
                                                        class="btn btn-warning">Cancel </button>
                                                </div>
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label class="form-label">Type</label>
                                                <select class="form-control" name="type" id="dog-names"
                                                    value="{{ $data['record']->type ?? '' }}">
                                                    <option value="rent">Rent</option>
                                                    <option value="sale">Sale</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-7 form-group p-0">
                                            <label class="form-label">Descripition</label>
                                            <textarea name="descripition" rows="8" class="form-control"></textarea>
                                        </div>

                                        <div class="col-md-7 form-group p-0">
                                            <label class="form-label">Content</label>
                                            <textarea name="content" class="ckeditor"></textarea>
                                        </div>
                                        <div class="col-md-7 col-sm-12 form-group p-0">
                                            <label class="form-label">Image</label>
                                            <input type="file" name="image" class="dropify notrequired" data-height="180"
                                                name="image" />
                                        </div>
                                        <div class="col-md-7 form-group">
                                            <label class="form-label">City</label>
                                            <select class="form-control" name="city" id="dog-names"
                                                value="{{ $data['record']->city ?? '' }}">
                                                <option value="">--select--</option>
                                                <option value="lahore">Lahore</option>
                                                <option value="karachi">Karachi</option>
                                            </select>
                                        </div>
                                        <div class="col-7 form-group">
                                            <label class="form-label">Property location</label>
                                            <input class="form-control notrequired" placeholder="Property Location"
                                                name="property_location" value="{{ $data['record']->name ?? '' }}"
                                                type="text">
                                        </div>
                                        <div class="row ml-1 mr-1">
                                            <div class="form-group mb-3 col-md-6">
                                                <label for="latitude" class="form-label">Latitude</label>
                                                <input class="form-control" placeholder="Ex: 103.812530" data-counter="25"
                                                    name="latitude" type="text" id="latitude">
                                                <a class="help-block form-control" style="background-color: #d9edf7"
                                                    href="https://www.latlong.net/convert-address-to-lat-long.html"
                                                    target="_blank" rel="nofollow">
                                                    Go here to get Latitude from address. </a>
                                            </div>
                                            <div class="form-group mb-3 col-md-6">
                                                <label for="longitude" class="form-label">Longitude</label>
                                                <input class="form-control" placeholder="Ex: 103.812530" data-counter="25"
                                                    name="longitude" type="text" id="longitude">
                                                <a class="help-block form-control" style="background-color: #d9edf7"
                                                    href="https://www.latlong.net/convert-address-to-lat-long.html"
                                                    target="_blank" rel="nofollow">
                                                    Go here to get Longitude from address. </a>
                                            </div>
                                        </div>

                                        <div class="row ml-1 mr-1">
                                            <div class="col-4 form-group">
                                                <label class="form-label">Number Bedroms</label>
                                                <input class="form-control notrequired" placeholder="number bedrooms"
                                                    name="number_bedroom"
                                                    value="{{ $data['record']->number_bedroom ?? '' }}" type="text">
                                            </div>
                                            <div class="col-4 form-group">
                                                <label class="form-label">Number Bathrooms</label>
                                                <input class="form-control notrequired" placeholder="number bathroom"
                                                    name="number_bathroom"
                                                    value="{{ $data['record']->number_bathroom ?? '' }}" type="text">
                                            </div>
                                            <div class="col-4 form-group">
                                                <label class="form-label">Number floors</label>
                                                <input class="form-control notrequired" placeholder="number floor"
                                                    name="number_floor" value="{{ $data['record']->number_floor ?? '' }}"
                                                    type="text">
                                            </div>

                                        </div>
                                        <div class="row ml-1 mr-1">
                                            <div class="col-4 form-group">
                                                <label class="form-label">Square (m²)</label>
                                                <input class="form-control notrequired" placeholder="square :unit"
                                                    name="square" value="{{ $data['record']->square ?? '' }}"
                                                    type="text">
                                            </div>
                                            <div class="col-4 form-group">
                                                <label class="form-label">Marala</label>
                                                <input class="form-control notrequired" placeholder="marala" name="marala"
                                                    value="{{ $data['record']->marala ?? '' }}" type="text">
                                            </div>
                                            <div class="col-4 form-group">
                                                <label class="form-label">Price</label>
                                                <input class="form-control notrequired" placeholder="price" name="price"
                                                    value="{{ $data['record']->price ?? '' }}" type="text">
                                            </div>

                                        </div>

                                        <div class="row ml-1 mr-1">
                                            <div class="col-4 form-group">
                                                <label class="form-label">Currency</label>
                                                <select class="form-control" name="currency" id="dog-names"
                                                    value="{{ $data['record']->currency ?? '' }}">
                                                    <option value="">--select--</option>
                                                    <option value="pkr">PKR</option>
                                                    <option value="usd">USD</option>
                                                </select>
                                            </div>
                                            <div class="col-4 form-group">
                                                <label class="form-label">Period</label>
                                                <select class="form-control" name="period" id="dog-names"
                                                    value="{{ $data['record']->period ?? '' }}">
                                                    <option value=""></option>
                                                    <option value="day">Day</option>
                                                    <option value="month">Month</option>
                                                    <option value="year">Year</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-3">

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
    <script src="{{ URL::asset('assets/themeJquery/features/jquery.js') }}"></script>
@endsection
