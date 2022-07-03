@extends('front.layout')
@section('body')

<style>
    .btnn1 {
        border: 1px solid #80808045;
        padding: 10px 60px 10px 60px;
        border-bottom-left-radius: 6px;
        border-bottom-right-radius: 6px;
        border-top-left-radius: 6px;
        border-top-right-radius: 6px;
        background-color: #fafafa;
    }

    .btnn1:hover {
        border: 1px solid #fafafa;
    }

    .justifyc {
        justify-content: end;
    }

    .tae {
        text-align: end;
    }

    .fnt {
        font-size: 12px;
        font-weight: 700;
        margin-bottom: 3px;
        text-transform: uppercase;
    }

    .btnn2 {
        border: 1px solid #80808045;
        padding: 5px 20px 5px 20px;
        border-bottom-left-radius: 6px;
        border-bottom-right-radius: 6px;
        border-top-left-radius: 6px;
        border-top-right-radius: 6px;
        background-color: #fafafa;
    }

    .brd {
        border: 1px solid #80808045;
        background-color: #fafafa;
        border-bottom-left-radius: 6px;
        border-bottom-right-radius: 6px;
        border-top-left-radius: 6px;
        border-top-right-radius: 6px;

    }
</style>

<body class="homepage-9 hp-6 homepage-1">
    @section('main')

    <div class="container">
        <div class="row mt-3">
            <div class="col-lg-4">
                <div class="card text-dark  mb-3 wth">
                    <div class="card-header">
                        <h5>Most Viewed in Pakistan</h5>
                    </div>
                    <div class="card-body cl">
                        <div class="row">
                            <div class="col-lg-9">
                                <p>Lahore, 5 Marla</p>
                            </div>
                            <div class="col-lg-3"><span class="flot">1.70%</span></div>
                        </div>
                        <div class="row">
                            <div class="col-lg-9">
                                <p>Karachi, DHA Phase 4</p>
                            </div>
                            <div class="col-lg-3"><span class="flot">8.70%</span></div>
                        </div>
                        <div class="row">
                            <div class="col-lg-9">
                                <p>Islamabad</p>
                            </div>
                            <div class="col-lg-3"><span class="flot">11.70%</span></div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card text-dark  mb-3 wth">
                    <div class="card-header">
                        <h5>Top Gainers (May 2022)</h5>
                    </div>
                    <div class="card-body cl">
                        <div class="row">
                            <div class="col-lg-9">
                                <p>Lahore, 5 Marla</p>
                            </div>
                            <div class="col-lg-3"><span class="flot">1.70%</span></div>
                        </div>
                        <div class="row">
                            <div class="col-lg-9">
                                <p>Karachi, DHA Phase 4</p>
                            </div>
                            <div class="col-lg-3"><span class="flot">8.70%</span></div>
                        </div>
                        <div class="row">
                            <div class="col-lg-9">
                                <p>Islamabad</p>
                            </div>
                            <div class="col-lg-3"><span class="flot">11.70%</span></div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card text-dark  mb-3 wth">
                    <div class="card-header">
                        <h5>Top Losers (May 2022)</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-9 cl">
                                <p>Lahore, 5 Marla</p>
                            </div>
                            <div class="col-lg-3 cl2"><span class="flot">1.70%</span></div>
                        </div>
                        <div class="row">
                            <div class="col-lg-9 cl">
                                <p>Karachi, DHA Phase 4</p>
                            </div>
                            <div class="col-lg-3 cl2"><span class="flot">8.70%</span></div>
                        </div>
                        <div class="row">
                            <div class="col-lg-9 cl">
                                <p>Islamabad</p>
                            </div>
                            <div class="col-lg-3 cl2"><span class="flot">11.70%</span></div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row mt-3">
            <div class="col-lg-12">
                <div class="card text-dark  mb-3 wth">
                    <div class="card-header">
                        <h5>Pakistan House Price Index (May 2022)</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <button class="btnn1">Houses</button>
                                <button class="btnn1">Plot</button>
                                <button class="btnn1">Residential Property</button>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-lg-12 mt-2"></div>
                            <h3 class="ml-5">PRICE/Sq. Ft.</h3>
                            <h3 class="ml-5">Index</h3>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-lg-8 mt-2 tae">
                                <button class="btnn2">1 month</button>
                                <button class="btnn2">3 month</button>
                                <button class="btnn2">1 year</button>
                                <button class="btnn2">max</button>
                                <canvas id="myChart" style="width:100%;max-width:700px"></canvas>
                            </div>
                            <div class="col-lg-4 mt-2 text-center">
                                <span class="fnt">CURRENT PRICE/Sq. Ft.</span>
                                <span>(May 2022)</span>
                                <h5 class="mt-3">PKR <b> 14,982 </b> / Sq. Ft.</h5>
                                <hr>
                                <span class="fnt">HISTORICAL PRICE/Sq. Ft.</span>
                                <div class="container mt-3 brd">
                                    <div class="row mt-3">
                                        <div class="col-lg-6">
                                            <p>6 Month Ago</p>
                                        </div>
                                        <div class="col-lg-6">
                                            <p>14,500</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <p>12 Month Ago</p>
                                        </div>
                                        <div class="col-lg-6">
                                            <p>12,800</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <p>24 Month Ago</p>
                                        </div>
                                        <div class="col-lg-6">
                                            <p>10,790</p>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <span class="fnt">PRICE/Sq. Ft. CHANGE IN THE SELECTED PERIOD</span>
                                <span>(Jan 2011 - May 2022)</span>
                                <h3 class="mt-3">PKR <b>10,406 </b> (227.40%) </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js">
    </script>
    <script>
        var myChart = new Chart("myChart", {
            type: "line",
            data: {},
            options: {}
        });
    </script>
    @endsection