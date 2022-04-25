@extends('front.layout')
@section('main')
    <style>
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            ;
        }

        li {
            float: left;
        }

        li a {
            display: block;
            color: white;
            text-align: center;
            /* padding: 30px; */
            text-decoration: none;
        }

    </style>
    <div class="container-fluid bg-white-2">
        <div class="row pb-5 pt-5">
            <div class="col-12 mt-5">
                <h2 class="mt-5" style="text-align: center">{{ $category->name }} for sale in all cities of
                    Pakistan</h2>
                <div class="mt-5" style="margin-left: 100px;">
                    <div class="col-12">
                        <div class="row">
                            @foreach ($check as $check)
                                <div class="col-3 p-1">
                                    <a  style="color: black;font-size:15px;"
                                        href="{{ url('/' . $category->name . '/' . $check->url_slug) }}">
                                         {{ $check->title }}</a>

                                </div>
                            @endforeach
                            <div class="col-4"></div>
                        </div>

                    </div>

                </div>


            </div>
        </div>
    </div>
@endsection
