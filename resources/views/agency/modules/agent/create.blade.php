@extends('agency.master')
@section('css')
    @include('agency.layouts.select2CssFiles')
    @include('agency.layouts.fancy-uploader-css')
@endsection
@section('page-header')
    <div class="page-header">
        <div class="page-leftheader">
            <h4 class="page-title mb-0">Create</h4>
        </div>
        <div class="page-rightheader">
            <div class="btn btn-list">
                <a href="{{ route('agency:agent') }}" class="btn btn-primary"><i class="fe fe-block mr-1"></i> Back </a>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Our Agent</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <form class="validationForm formSubmited2" id="myForm" enctype="multipart/form-data"
                                method="POST" action="{{ route('agency:agent_submit', [$data['updateId'] ?? 0]) }}">
                                @csrf
                                <input type="hidden" name="id" value="{{ $data['updateId'] ?? 0 }}">
                                <div class="card-body pb-2">
                                    <div class="row row-sm">
                                        <div class="col-6 form-group">
                                            <label class="form-label">Agent Name</label>
                                            <input class="form-control notrequired" placeholder="Name" name="name"
                                                value="{{ $data['record']->name ?? '' }}" type="text">
                                        </div>
                                        <div class="col-lg-6 form-group">
                                            <label class="form-label">Email</label>
                                            <input class="form-control" placeholder="email"
                                                value="{{ $data['record']->email ?? '' }}" name="email" type="email">
                                        </div>
                                        <div class="col-lg-6 form-group">
                                            <label class="form-label">Desigination</label>
                                            <input class="form-control" placeholder="Desigination"
                                                value="{{ $data['record']->desgination ?? '' }}" name="desgination" type="text">
                                        </div>
                                        <div class="col-6 form-group">
                                            <label class="form-label">Office Address</label>
                                            <input class="form-control notrequired" placeholder="Office Adress "
                                                name="office_address" value="{{ $data['record']->office_address ?? '' }}"
                                                type="text">
                                        </div>
                                        <div class="col-6 form-group">
                                            <label class="form-label">Office No.</label>
                                            <input class="form-control notrequired" placeholder="Office.no"
                                                name="office_number" value="{{ $data['record']->office_number ?? '' }}"
                                                type="number">
                                        </div>

                                        <div class="col-6 form-group">
                                            <label class="form-label">Mobile No.</label>
                                            <input class="form-control notrequired" placeholder="Mobile.no"
                                                name="mobile_number" value="{{ $data['record']->mobile_number ?? '' }}"
                                                type="number">
                                        </div>
                                        <div class="col-6 form-group">
                                            <label class="form-label">Fax No.</label>
                                            <input class="form-control notrequired" placeholder="Fax.no" name="fax_number"
                                                value="{{ $data['record']->fax_number ?? '' }}" type="number">
                                        </div>
                                        <div class="col-6 form-group">
                                            <label class="form-label">Agency</label>
                                            <select id="cars" class="form-control" name="agency">
                                                <option value="null">Select a agency</option>
                                                @foreach ($agency as $agency)
                                                    <option value="{{ $agency->id }}" <?php if (($data['record']->agency ?? '') == $agency->id) {
    echo 'selected';
} ?>>
                                                        {{ $agency->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-6 form-group">
                                            <label class="form-label">Select City</label>
                                            <select id="cars" class="form-control" name="city_name">
                                                <option value="">--select--</option>
                                                @foreach ($city as $city)
                                                    <option value="{{ $city->name }}" <?php if (($data['record']->city_name ?? '') == $city->name) {
    echo 'selected';
} ?>>
                                                        {{ $city->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="col-6 form-group ">
                                            <label class="form-label">Description</label>
                                            <textarea class="form-control notrequired" placeholder="Short Description" name="descripition" rows="5"
                                                spellcheck="false">{{ $data['record']->descripition ?? '' }}</textarea>
                                        </div>
                                        <div class="col-lg-6 col-sm-12 form-group">
                                            <label class="form-label">Image</label>
                                            @if (isset($data['record']->image) && !empty($data['record']->image))
                                                <input type="file" name="image" class="dropify notrequired"
                                                    data-default-file="{{ asset('assets/images/agent/'.$data['record']->image) }}"
                                                    data-height="180" />
                                            @else
                                                <input type="file" name="image" class="dropify notrequired"
                                                    data-default-file="{{ asset('assets/images/photos/bcstart_right_image.jpg') }}"
                                                    data-height="180" />
                                            @endif
                                        </div>


                                        <div class="col-lg-12">
                                            <div class="btn btn-list" style="text-align:center;width:100%">
                                                <button type="submit" class="btn btn-primary user_form submit_button">Save
                                                </button>
                                                <button type="button" href="{{ route('agency:agent') }}"
                                                    class="btn btn-warning">Cancel </button>
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
    @include('agency.layouts.select2JsFiles')
    @include('agency.layouts.fancy-uploader-js')
    @include('agency.layouts.tinymce-js')
    @include('agency.layouts.templateJquery')
    <script src="{{ URL::asset('assets/themeJquery/agent/jquery.js') }}"></script>
@endsection
