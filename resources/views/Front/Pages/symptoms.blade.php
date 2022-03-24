@extends('Front.template')
@section('content')
<section class="symptoms" id="symptoms">

    <h1 class="heading">covid-19 symptoms</h1>

    <div class="column">

        <div class="main-image">
            <img src="{{asset('Front')}}/images/main-symp-img.png" alt="">
        </div>

        <div class="box-container">

            <div class="box" id="box">
                <img src="{{asset('Front')}}/images/symp-a.png" alt="">
                <h3>dry cough</h3>
            </div>

            <div class="box" id="box">
                <img src="{{asset('Front')}}/images/symp-b.png" alt="">
                <h3>sore throat</h3>
            </div>

            <div class="box" id="box">
                <img src="{{asset('Front')}}/images/symp-c.png" alt="">
                <h3>cold</h3>
            </div>

            <div class="box" id="box">
                <img src="{{asset('Front')}}/images/symp-d.png" alt="">
                <h3>fever</h3>
            </div>

            <div class="box" id="box">
                <img src="{{asset('Front')}}/images/symp-e.png" alt="">
                <h3>headache</h3>
            </div>

            <div class="box" id="box">
                <img src="{{asset('Front')}}/images/symp-f.png" alt="">
                <h3>vomiting</h3>
            </div>

        </div>

    </div>

</section>
@endsection