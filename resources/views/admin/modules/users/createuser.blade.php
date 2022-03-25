@extends('admin.master')
@section('css')
    @include('admin.layouts.select2CssFiles')
    @include('admin.layouts.fancy-uploader-css')
@endsection
@section('page-header')
    <div class="page-header">
        <div class="page-leftheader">
            <h4 class="page-title mb-0">Edit Proflie</h4>
        </div>
        <div class="page-rightheader">
            <div class="btn btn-list">
                <a href="{{ route('admin:users') }}" class="btn btn-primary"><i class="fe fe-block mr-1"></i> Back </a>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Create User</h4>
                </div>
                <div class="card-body">
               
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                        <form class="validationForm formSubmit" action="{{url('admin/signup_user')}}"  enctype="multipart/form-data" method="post">
                                @csrf
                                <div class="card-body pb-2">
                                   @if ($message = Session::get('error'))
                                        <div class="alert alert-danger alert-block">
                                            <button type="button" class="close" data-dismiss="alert">×</button>	
                                                <strong style="color:red;">{{ $message }}</strong>
                                        </div>
                                    @endif
                                    <div class="row row-sm">
                                        <div class="col-lg-6 form-group">
                                            <label class="form-label">Name</label>
                                            <input class="form-control " placeholder="name" name="name" type="text">
                                                 @if($errors->has('name'))
                                                    <div style="color:red;">{{ $errors->first('name') }}</div>
                                                @endif
                                         </div>
                                        <div class="col-lg-6 form-group">
                                            <label class="form-label">Email</label>
                                            <input class="form-control" placeholder="email" name="email"
                                                 type="email" >
                                                 @if($errors->has('email'))
                                                    <div style="color:red;">{{ $errors->first('email') }}</div>
                                                @endif 
                                        </div>
                                        <div class="col-lg-6 form-group">
                                            <label class="form-label">Role</label>
                                            <select class="form-control" name="roles" id="dog-names">
                                                <option value=""><--select--></option>
                                                <option value="superadmin">SuperAdmin</option>
                                                <option value="admin">Admin</option>
                                                <option value="doctor">Doctor</option>
                                            </select>  
                                        </div>
                                        <div class="col-lg-6 form-group">
                                            <label class="form-label">password</label>
                                            <input class="form-control" placeholder="password" name="password"
                                                 type="password" >
                                                 @if($errors->has('password'))
                                                    <div style="color:red;">{{ $errors->first('password') }}</div>
                                                @endif 
                                        </div>
                                        <div class="col-lg-6 form-group">
                                            <label class="form-label">Confrom password</label>
                                            <input class="form-control" placeholder="Confrom password" name="c_password" 
                                                 type="password" >
                                                 @if($errors->has('c_password'))
                                                    <div style="color:red;">{{ $errors->first('c_password') }}</div>
                                                @endif
                                        </div>
                                        <div class="col-lg-6 col-sm-12 form-group">
                                            <label class="form-label">Image</label>
                                            <input type="file" name="image" class="dropify notrequired"
                                            data-default-file="{{asset('assets/images/photos/bcstart_right_image.jpg')}}" data-height="180"/>
                                            @if($errors->has('image'))
                                                <div style="color:red;">{{ $errors->first('image') }}</div>
                                            @endif
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="btn btn-list" style="text-align:center;width:100%">
                                                <button type="submit" class="btn btn-primary user_form submit_button">Save
                                                </button>
                                                <button type="button" href="{{ url('admin/users') }}"
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
    @include('admin.layouts.select2JsFiles')
    @include('admin.layouts.fancy-uploader-js')
    @include('admin.layouts.tinymce-js')
    @include('admin.layouts.templateJquery')
    <script src="{{ URL::asset('assets/themeJquery/users/jquery1.js') }}"></script>
@endsection
