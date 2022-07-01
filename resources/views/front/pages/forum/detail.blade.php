@extends('front.layout')
@section('body')
<style>
    .justifyc{
        justify-content: end;
    }
    .lst{list-style-type: none;}
</style>

<body class="homepage-9 hp-6 homepage-1">
    @section('main')



    <div class="container">
        <div class="row mt-5 clr2">
            <div class="col-lg-6"><span>Topic</span></div>
            <div class="col-lg-6">
                <ul class="d-flex styl justifyc lst">
                <li class="ml-">Replies</li>
        <li class="ml-5">Views</li>
    <li class="ml-5">Activities</li>
</ul>
</div>
        </div>
        <hr class="bord2">
        <div class="row mt-4">
            <div class="col-lg-6"><h5>New Metro City Gujjar Khan</h5>
        <ul class="clr2"><li>Buying Property</li></ul></div>
            <div class="col-lg-3">  <img src="{{asset('Front/images/img1.jpg')}}"class="" alt="...">
            <img src="{{asset('Front/images/45.png')}}"class="ms-5" alt="..."></div>
            <div class="col-lg-1 clr2 text-center">11</div>
            <div class="col-lg-1 clr2 text-center">833</div>
           <div class="col-lg-1 clr2 text-center">9h</div>
               </div>
               <hr class="bord3">
               <div class="row mt-4">
            <div class="col-lg-6"><h5>Impact of Budget 2022-23 on Real Estate</h5>
        <ul class="clr2"><li>Invester Design</li></ul></div>
            <div class="col-lg-3">  <img src="{{asset('Front/images/45.png')}}"class="" alt="...">
            <img src="{{asset('Front/images/50.png')}}"class="ms-5" alt="..."></div>
            <div class="col-lg-1 clr2 text-center">510</div>
            <div class="col-lg-1  text-center">20.5k</div>
           <div class="col-lg-1 clr2 text-center">5h</div>
               </div>
               <hr class="bord3">
               <div class="row mt-4">
            <div class="col-lg-6"><h5>Faisal Hills D block vs New City</h5>
        <ul class="clr2"><li>Where To Buy</li></ul></div>
            <div class="col-lg-3">  <img src="{{asset('Front/images/45.png')}}"class="" alt="...">
            <img src="{{asset('Front/images/9.png')}}"class="ms-3 flot" alt="...">  </div>
            <div class="col-lg-1 clr2 text-center">5</div>
            <div class="col-lg-1 clr2 text-center">20</div>
           <div class="col-lg-1 clr2 text-center">5h</div>
               </div>
               <hr class="bord3">
    </div>


    @endsection
</body>
@endsection
