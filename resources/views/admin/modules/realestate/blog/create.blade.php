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
                <a href="{{ route('admin:blog.index') }}" class="btn btn-primary"><i class="fe fe-block mr-1"></i> Back </a>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Our Blogs</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            {{-- @if ($errors->any())
                                @foreach ($errors->all() as $err)
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <li>{{ $err }}</li>
                                        <button type="button" class="close" data-dismiss="alert"
                                            aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                @endforeach
                            @endif --}}
                            <form class="validationForm formSubmited" id="myForm" enctype="multipart/form-data"
                                method="POST" action="{{ route('admin:blog.store') }}">
                                @csrf
                                <div class="card-body pb-2">
                                    <div class="row row-sm">
                                        <div class="col-12">
                                            <div class="col-12 form-group padding">
                                                <label class="form-label">Title</label>
                                                <input class="form-control notrequired" placeholder="Name" name="title"
                                                     type="text">
                                                @if ($errors->has('title'))
                                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                    <li>{{{ $errors->first('title') }}}</li>
                                                    <button type="button" class="close" data-dismiss="alert"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                @endif
                                            </div>
                                            <div class="col-lg-12 form-group padding">
                                                <label class="form-label">Description</label>
                                                <textarea class="form-control notrequired" placeholder="Meta Description" name="descripition" rows="5"
                                                    spellcheck="false"></textarea>
                                                    @if ($errors->has('descripition'))
                                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                        <li>{{{ $errors->first('descripition') }}}</li>
                                                        <button type="button" class="close" data-dismiss="alert"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="col-lg-12 col-sm-12 form-group padding">
                                                <label class="form-label">Image</label>
                                                <input type="file" class="form-control" style="padding-bottom: 35px" name="image" data-default-file="" data-height="180"/>
                                                @if ($errors->has('image'))
                                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                    <li>{{{ $errors->first('image') }}}</li>
                                                    <button type="button" class="close" data-dismiss="alert"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                            @endif
                                            </div>
                                            <div class="col-lg-12 form-group padding">
                                                <label class="form-label">Content</label>
                                                <textarea class="ckeditor form-control disc_2 notrequired" name="content"
                                                    id="disc_2">{{ $data['record']->content ?? '' }}</textarea>
                                                    @if ($errors->has('content'))
                                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                        <li>{{{ $errors->first('content') }}}</li>
                                                        <button type="button" class="close" data-dismiss="alert"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                @endif
                                            </div>
                                            
    
                                            
                                             
                                             <h3>Tags</h3>
                                <div class="property-form-group">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <ul class="pro-feature-add pl-0">
                                                <li class="fl-wrap filter-tags clearfix">
                                                    <div class="filter-tags-wrap">
                                                    @foreach($tag as $tag)
                                                        <label style="font-size: 16px;font-weight: 100;">{{ Form::checkbox('tag_id[]', $tag->id, false, ['class' => 'seting']) }}
                                                            {{ $tag->name }}</label>
                                                        @endforeach
                                                    </div>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="btn btn-list" style="text-align:center;width:100%">
                                                <button type="submit" class="btn btn-primary user_form submit_button">Save
                                                </button>
                                                <button type="button" href="{{ route('admin:blog.index') }}"
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
    {{-- <script src="{{ URL::asset('assets/themeJquery/property/jquery.js') }}"></script> --}}
@endsection
