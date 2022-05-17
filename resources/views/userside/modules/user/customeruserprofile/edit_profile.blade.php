@extends('userside.layout')
@section('css')
    @include('admin.layouts.select2CssFiles')
    @include('admin.layouts.fancy-uploader-css')
@endsection
    @section('main')
        <div class="container rounded bg-gray mt-5 mb-5">
            <form class="formSubmit" action="{{ url('user/update_user/' . Auth::guard('customeruser')->user()->id) }}"
                method="post">
                @csrf
                <div class="row">
                    <div class="col-md-3 border-right">
                        <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                            <span><img class="rounded-circle"
                                    src="{{ URL::asset('assets/images/userphoto/' . Auth::guard('customeruser')->user()->image ?? '') }}"
                                    alt=""></span><span
                                class="mt-4">{{ Auth::guard('customeruser')->user()->firstname }}</span><span
                                class="text-black-50">{{ Auth::guard('customeruser')->user()->email }}</span>
                        </div>
                    </div>
                    <div class="col-md-5 border-right">
                        <div class="p-3 py-5">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h4 class="text-right">Profile Settings</h4>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-6"><label class="labels">Name</label><input type="text"
                                        name="firstname" class="form-control" placeholder="first name"
                                        value="{{ Auth::guard('customeruser')->user()->firstname }}"></div>
                                <div class="col-md-6"><label class="labels">Surname</label><input type="text"
                                        name="lastname" class="form-control"
                                        value="{{ Auth::guard('customeruser')->user()->lastname }}" placeholder="surname">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-12"><label class="labels">PhoneNumber</label><input
                                        type="number" name="contact" class="form-control" placeholder="enter phone number"
                                        value="{{ Auth::guard('customeruser')->user()->contact }}"></div>

                                <div class="col-lg-12 form-group">
                                    <label class="labels">Address</label>
                                    <textarea class="form-control notrequired" placeholder="Description" name="address" rows="3"
                                        spellcheck="false">{{ Auth::guard('customeruser')->user()->address }}</textarea>
                                </div>

                                <div class="col-md-12"><label class="labels">Email ID</label><input type="text"
                                        name="email" class="form-control" placeholder="enter email id"
                                        value="{{ Auth::guard('customeruser')->user()->email }}"></div>
                                @if (Auth::guard('customeruser')->user()->education)
                                <div class="col-md-12"><label class="labels">Education</label>
                                    <select id="cars" class="form-control" name="education">
                                        <option value="{{ Auth::guard('customeruser')->user()->education }}">{{ Auth::guard('customeruser')->user()->education }}</option>
                                        <option value="metric">Metric</option>
                                        <option value="intermediate">intermediate</option>
                                        <option value="Bachelor">Bachelor's</option>
                                        <option value="master">Master</option>
                                    </select>
                                </div>
                                @else
                                <div class="col-md-12"><label class="labels">Education</label>
                                    <select id="cars" class="form-control" name="education">
                                        <option value="">--select--</option>
                                        <option value="metric">Metric</option>
                                        <option value="intermediate">intermediate</option>
                                        <option value="Bachelor">Bachelor's</option>
                                        <option value="master">Master</option>
                                    </select>
                                </div>
                                @endif
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-6"><label class="labels">Country</label><input type="text"
                                        name="country" class="form-control" placeholder="country"
                                        value="{{ Auth::guard('customeruser')->user()->country }}"></div>
                                <div class="col-md-6"><label class="labels">State/Region</label><input
                                        type="text" name="region" class="form-control"
                                        value="{{ Auth::guard('customeruser')->user()->region }}" placeholder="state">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="p-3 py-5">
                            <div class="d-flex justify-content-between align-items-center experience"><span>Edit
                                    Experience</span><span class="border px-3 p-1 add-experience"></div><br>
                            <div class="col-md-12"><label class="labels">Experience in
                                    Designing</label><input type="text" class="form-control" placeholder="experience"
                                   name="experience" value="{{ Auth::guard('customeruser')->user()->experience }}"></div> <br>
                            <div class="col-lg-12 form-group">
                                <label class="labels">Additional Details</label>
                                <textarea class="form-control notrequired" placeholder="Additional Details" name="detail" rows="3"
                                  spellcheck="false">{{ Auth::guard('customeruser')->user()->detail }}</textarea>
                            </div>
                            <div class="col-lg-12 col-sm-12 form-group">
                                <label class="labels">Edit Image</label>
                                <input type="file" name="image" class="dropify notrequired"
                                    data-default-file="{{ asset('assets/images/userphoto/' . Auth::guard('customeruser')->user()->image) ?? '' }}"
                                    data-height="180" name="image" />
                            </div>
                            <div class="mt-5 text-center"><button class="btn btn-primary profile-button submit_button"
                                    type="submit">Save
                                    Profile</button>
                            </div>

                        </div>
                    </div>
                </div>
            </form>
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
<script src="{{ URL::asset('assets/themeJquery/customeruser/jquery1.js') }}"></script>
@endsection
