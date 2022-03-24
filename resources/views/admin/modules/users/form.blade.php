@extends('admin.master')
@section('css')
    <!--INTERNAL Select2 css -->
    <link href="{{ URL::asset('assets/plugins/select2/select2.min.css') }}" rel="stylesheet" />
@endsection
@section('page-header')
    <!--Page header-->
    <div class="page-header">
        <div class="page-leftheader">
            <h4 class="page-title mb-0">Create new User</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#"><i class="fe fe-file-text mr-2 fs-14"></i>Users</a></li>
                <li class="breadcrumb-item active" aria-current="page"><a href="#">Create new User</a></li>
            </ol>
        </div>
        <div class="page-rightheader">
            <div class="btn btn-list">
                <a href="#" class="btn btn-danger"><i class="fe fe-block mr-1"></i> Block </a>
            </div>
        </div>
    </div>
    <!--End Page header-->
@endsection
@section('content')
    <!-- Row -->
    <div class="row">
        <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Gerenal Elements</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <form class="form-horizontal">
                                <div class="row col-md-12 col-xl-12 col-lg-12 col-xs-12 col-sm-12">
                                    <div class="form-group col-md-6 col-xl-6 col-lg-6 col-xs-12 col-sm-12 row">
                                        <label class="col-md-2 form-label flexCenterText">Name:</label>
                                        <div class="col-md-10 flexCenterText">
                                            <input class="form-control" type="text" name="name">
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6 col-xl-6 col-lg-6 col-xs-12 col-sm-12 row">
                                        <label class="col-md-2 form-label flexCenterText" for="example-email">Email:</label>
                                        <div class="col-md-10 flexCenterText">
                                            <input type="email" id="example-email" name="example-email" class="form-control"
                                                placeholder="Email">
                                        </div>
                                    </div>
                                </div>
                                <div class="row col-md-12 col-xl-12 col-lg-12 col-xs-12 col-sm-12">
                                    <div class="form-group col-md-6 col-xl-6 col-lg-6 col-xs-12 col-sm-12 row">
                                        <label class="col-md-2 form-label flexCenterText" for="example-email">Date:</label>
                                        <div class="col-md-10 flexCenterText">
                                            <input class="form-control" type="date" name="date">
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6 col-xl-6 col-lg-6 col-xs-12 col-sm-12 row">
                                        <label class="col-md-2 form-label flexCenterText" for="example-email">Password:</label>
                                        <div class="col-md-10 flexCenterText">
                                            <input type="password" class="form-control" value="password">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 form-label">Placeholder</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" placeholder="text">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 form-label">Text area</label>
                                    <div class="col-md-9">
                                        <textarea class="form-control" rows="6">Hiiiii.....</textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 form-label">Readonly</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" readonly="" value="Readonly value">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 form-label">Disabled</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" disabled="" value="Disabled value">
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <label class="col-md-3 form-label">Number</label>
                                    <div class="col-md-9">
                                        <input class="form-control" type="number" name="number">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <form class="form-horizontal">
                                <div class="form-group row">
                                    <label class="col-md-3 form-label">Month</label>
                                    <div class="col-md-9">
                                        <input class="form-control" type="month" name="month">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 form-label">Time</label>
                                    <div class="col-md-9">
                                        <input class="form-control" type="time" name="time">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 form-label">Week</label>
                                    <div class="col-md-9">
                                        <input class="form-control" type="week" name="week">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 form-label">Week</label>
                                    <div class="col-md-9">
                                        <input class="form-control" type="color" value="#DB29B4">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 form-label">URL</label>
                                    <div class="col-md-9">
                                        <input class="form-control" type="url" name="url">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 form-label">Search</label>
                                    <div class="col-md-9">
                                        <input class="form-control" type="search" name="search">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 form-label">Tel</label>
                                    <div class="col-md-9">
                                        <input class="form-control" type="tel" name="tel">
                                    </div>
                                </div>
                                <div class="form-group row mb-0">
                                    <label class="col-md-3 form-label">Input Select</label>
                                    <div class="col-md-9">
                                        <select class="form-control select2">
                                            <option>Apple</option>
                                            <option>Orange</option>
                                            <option>Mango</option>
                                            <option>Grapes</option>
                                            <option>Banana</option>
                                        </select>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Row -->
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <form method="post" class="card">
                <div class="card-header">
                    <h3 class="card-title">form elements</h3>
                </div>
                <div class=" card-body">
                    <div class="row">
                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                <div class="form-label">Toggle switch single</div>
                                <label class="custom-switch">
                                    <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input">
                                    <span class="custom-switch-indicator"></span>
                                    <span class="custom-switch-description">I agree with terms and conditions</span>
                                </label>
                            </div>
                            <div class="form-group ">
                                <label class="form-label">Your skills</label>
                                <div class="selectgroup selectgroup-pills">
                                    <label class="selectgroup-item">
                                        <input type="checkbox" name="value" value="HTML" class="selectgroup-input"
                                            checked="">
                                        <span class="selectgroup-button">HTML</span>
                                    </label>
                                    <label class="selectgroup-item">
                                        <input type="checkbox" name="value" value="CSS" class="selectgroup-input">
                                        <span class="selectgroup-button">CSS</span>
                                    </label>
                                    <label class="selectgroup-item">
                                        <input type="checkbox" name="value" value="PHP" class="selectgroup-input">
                                        <span class="selectgroup-button">PHP</span>
                                    </label>
                                    <label class="selectgroup-item">
                                        <input type="checkbox" name="value" value="JavaScript" class="selectgroup-input">
                                        <span class="selectgroup-button">JavaScript</span>
                                    </label>
                                    <label class="selectgroup-item">
                                        <input type="checkbox" name="value" value="Angular" class="selectgroup-input">
                                        <span class="selectgroup-button">Angular</span>
                                    </label>
                                    <label class="selectgroup-item">
                                        <input type="checkbox" name="value" value="Java" class="selectgroup-input">
                                        <span class="selectgroup-button">Java</span>
                                    </label>
                                    <label class="selectgroup-item">
                                        <input type="checkbox" name="value" value="C++" class="selectgroup-input">
                                        <span class="selectgroup-button">C++</span>
                                    </label>
                                </div>
                            </div>
                            <div class="form-group m-0">
                                <label class="form-label">Select Color</label>
                                <div class="row gutters-xs">
                                    <div class="col-auto">
                                        <label class="colorinput">
                                            <input name="color" type="checkbox" value="azure" class="colorinput-input"
                                                checked />
                                            <span class="colorinput-color bg-azure"></span>
                                        </label>
                                    </div>
                                    <div class="col-auto">
                                        <label class="colorinput">
                                            <input name="color" type="checkbox" value="indigo" class="colorinput-input" />
                                            <span class="colorinput-color bg-indigo"></span>
                                        </label>
                                    </div>
                                    <div class="col-auto">
                                        <label class="colorinput">
                                            <input name="color" type="checkbox" value="purple" class="colorinput-input" />
                                            <span class="colorinput-color bg-purple"></span>
                                        </label>
                                    </div>
                                    <div class="col-auto">
                                        <label class="colorinput">
                                            <input name="color" type="checkbox" value="pink" class="colorinput-input" />
                                            <span class="colorinput-color bg-pink"></span>
                                        </label>
                                    </div>
                                    <div class="col-auto">
                                        <label class="colorinput">
                                            <input name="color" type="checkbox" value="red" class="colorinput-input" />
                                            <span class="colorinput-color bg-red"></span>
                                        </label>
                                    </div>
                                    <div class="col-auto">
                                        <label class="colorinput">
                                            <input name="color" type="checkbox" value="orange" class="colorinput-input" />
                                            <span class="colorinput-color bg-orange"></span>
                                        </label>
                                    </div>
                                    <div class="col-auto">
                                        <label class="colorinput">
                                            <input name="color" type="checkbox" value="yellow" class="colorinput-input" />
                                            <span class="colorinput-color bg-yellow"></span>
                                        </label>
                                    </div>
                                    <div class="col-auto">
                                        <label class="colorinput">
                                            <input name="color" type="checkbox" value="lime" class="colorinput-input" />
                                            <span class="colorinput-color bg-lime"></span>
                                        </label>
                                    </div>
                                    <div class="col-auto">
                                        <label class="colorinput">
                                            <input name="color" type="checkbox" value="green" class="colorinput-input" />
                                            <span class="colorinput-color bg-green"></span>
                                        </label>
                                    </div>
                                    <div class="col-auto">
                                        <label class="colorinput">
                                            <input name="color" type="checkbox" value="teal" class="colorinput-input" />
                                            <span class="colorinput-color bg-teal"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="form-group ">
                                <div class="form-label">Radios</div>
                                <div class="custom-controls-stacked">
                                    <label class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" name="example-radios"
                                            value="option1" checked>
                                        <span class="custom-control-label">Option 1</span>
                                    </label>
                                    <label class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" name="example-radios"
                                            value="option2">
                                        <span class="custom-control-label">Option 2</span>
                                    </label>
                                    <label class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" name="example-radios"
                                            value="option3" disabled>
                                        <span class="custom-control-label">Option Disabled</span>
                                    </label>
                                    <label class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" name="example-radios2"
                                            value="option4" disabled checked>
                                        <span class="custom-control-label">Option Disabled Checked</span>
                                    </label>
                                </div>
                            </div>

                            <div class="form-group m-0">
                                <div class="form-label">Checkboxes</div>
                                <div class="custom-controls-stacked">
                                    <label class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" name="example-checkbox1"
                                            value="option1" checked>
                                        <span class="custom-control-label">Option 1</span>
                                    </label>
                                    <label class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" name="example-checkbox2"
                                            value="option2">
                                        <span class="custom-control-label">Option 2</span>
                                    </label>
                                    <label class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" name="example-checkbox3"
                                            value="option3" disabled>
                                        <span class="custom-control-label">Option Disabled</span>
                                    </label>
                                    <label class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" name="example-checkbox4"
                                            value="option4" checked disabled>
                                        <span class="custom-control-label">Option Disabled Checked</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Switches </div>
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item">
                            Bootstrap Switch Default
                            <div class="material-switch pull-right">
                                <input id="someSwitchOptionDefault" name="someSwitchOption001" type="checkbox" />
                                <label for="someSwitchOptionDefault" class="label-default"></label>
                            </div>
                        </li>
                        <li class="list-group-item">
                            Bootstrap Switch Primary
                            <div class="material-switch pull-right">
                                <input id="someSwitchOptionPrimary" name="someSwitchOption001" type="checkbox" />
                                <label for="someSwitchOptionPrimary" class="label-primary"></label>
                            </div>
                        </li>
                        <li class="list-group-item">
                            Bootstrap Switch Success
                            <div class="material-switch pull-right">
                                <input id="someSwitchOptionSuccess" name="someSwitchOption001" type="checkbox" />
                                <label for="someSwitchOptionSuccess" class="label-success"></label>
                            </div>
                        </li>
                        <li class="list-group-item">
                            Bootstrap Switch Info
                            <div class="material-switch pull-right">
                                <input id="someSwitchOptionInfo" name="someSwitchOption001" type="checkbox" />
                                <label for="someSwitchOptionInfo" class="label-info"></label>
                            </div>
                        </li>
                        <li class="list-group-item">
                            Bootstrap Switch Warning
                            <div class="material-switch pull-right">
                                <input id="someSwitchOptionWarning" name="someSwitchOption001" type="checkbox" />
                                <label for="someSwitchOptionWarning" class="label-warning"></label>
                            </div>
                        </li>
                        <li class="list-group-item">
                            Bootstrap Switch Danger
                            <div class="material-switch pull-right">
                                <input id="someSwitchOptionDanger" name="someSwitchOption001" type="checkbox" />
                                <label for="someSwitchOptionDanger" class="label-danger"></label>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Row-->
    <div class="row">
        <div class="col-lg-12 col-xl-6 col-md-12 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Vertical Form</h4>
                </div>
                <div class="card-body">
                    <form>
                        <div class="">
												<div class=" form-group">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1"
                                placeholder="Password">
                        </div>
                        <label class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
                            <span class="custom-control-label">Check me Out</span>
                        </label>
                </div>
                <button type="submit" class="btn btn-primary mt-4 mb-0">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <div class="col-lg-12 col-xl-6 col-md-12 col-sm-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Horizontal Form</h4>
            </div>
            <div class="card-body">
                <form class="form-horizontal">
                    <div class="form-group row">
                        <label for="inputName" class="col-md-3 form-label">User Name</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="inputName" placeholder="Name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-md-3 form-label">Email</label>
                        <div class="col-md-9">
                            <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-md-3 form-label">Password</label>
                        <div class="col-md-9">
                            <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                        </div>
                    </div>
                    <div class="form-group mb-0 row justify-content-end">
                        <div class="col-md-9">
                            <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="example-checkbox2"
                                    value="option2">
                                <span class="custom-control-label">Check me Out</span>
                            </label>
                        </div>
                    </div>
                    <div class="form-group mb-0 mt-4 row justify-content-end">
                        <div class="col-md-9">
                            <button type="submit" class="btn btn-primary">Sign in</button>
                            <button type="submit" class="btn btn-secondary">Cancel</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    <!-- End Row -->

    <div class="row">
        <div class="col-md-12 col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Shipping Details</h3>
                </div>
                <div class="card-body">
                    <div class="form-row">
                        <div class="form-group col-md-6 mb-0">
                            <div class="form-group">
                                <input type="text" class="form-control" id="name1" placeholder="First Name">
                            </div>
                        </div>
                        <div class="form-group col-md-6 mb-0">
                            <div class="form-group">
                                <input type="text" class="form-control" id="name2" placeholder="Last Name">
                            </div>
                        </div>
                    </div>
                    <div class="form-group ">
                        <input type="email" class="form-control" id="inputEmail5" placeholder="Email Address">
                    </div>
                    <div class="form-group ">
                        <input type="text" class="form-control" id="address" placeholder="AddressLine1">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6 mb-0">
                            <div class="form-group">
                                <input type="text" class="form-control" id="country" placeholder="Country">
                            </div>
                        </div>
                        <div class="form-group col-md-6 mb-0">
                            <div class="form-group">
                                <input type="text" class="form-control" id="region" placeholder="Country/Region">
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6 mb-0">
                            <div class="form-group">
                                <input type="text" class="form-control" id="city" placeholder="City">
                            </div>
                        </div>
                        <div class="form-group col-md-6 mb-0">
                            <div class="form-group">
                                <input type="number" class="form-control" id="postal" placeholder="Zip/Postal">
                            </div>
                        </div>
                    </div>
                    <div class="form-footer mt-2">
                        <a href="#" class="btn btn-primary">Confirm Details</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">CheckOut</h3>
                    <div class="card-options">
                        <div class="btn-group">
                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"
                                aria-expanded="false">
                                Visa<span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="#">Visa</a></li>
                                <li><a href="#">Rupay</a></li>
                                <li><a href="#">Mastercard</a></li>
                                <li><a href="#">PayPal</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="form">
                        <div class="form-group">
                            <div class="form-group">
                                <label class="form-label">CardHolder Name</label>
                                <input type="text" class="form-control" id="name11" placeholder="First Name">
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-9 mb-0">
                            <div class="form-group">
                                <label class="form-label">Credit card Number</label>
                                <input type="number" class="form-control" id="number" placeholder="number">
                            </div>
                        </div>
                        <div class="form-group col-md-3 mb-0">
                            <div class="form-group">
                                <label class="form-label">CVV Number</label>
                                <input type="number" class="form-control" id="region1" placeholder="675">
                            </div>
                        </div>
                    </div>
                    <div class="form-group m-0">
                        <label class="form-label">Expiration Date</label>
                        <div class="row gutters-xs">
                            <div class="col-6">
                                <select name="user[month]" class="form-control custom-select select2">
                                    <option value="">Month</option>
                                    <option value="1">January</option>
                                    <option value="2">February</option>
                                    <option value="3">March</option>
                                    <option value="4">April</option>
                                    <option value="5">May</option>
                                    <option value="6">June</option>
                                    <option value="7">July</option>
                                    <option value="8">August</option>
                                    <option value="9">September</option>
                                    <option value="10">October</option>
                                    <option value="11">November</option>
                                    <option value="12">December</option>
                                </select>
                            </div>
                            <div class="col-6">
                                <select name="user[year]" class="form-control custom-select select2">
                                    <option value="">Year</option>
                                    <option value="2014">2040</option>
                                    <option value="2014">2039</option>
                                    <option value="2014">2037</option>
                                    <option value="2014">2036</option>
                                    <option value="2014">2035</option>
                                    <option value="2014">2034</option>
                                    <option value="2014">2033</option>
                                    <option value="2014">2032</option>
                                    <option value="2014">2031</option>
                                    <option value="2014">2030</option>
                                    <option value="2014">2030</option>
                                    <option value="2013">2029</option>
                                    <option value="2012">2028</option>
                                    <option value="2011">2027</option>
                                    <option value="2010">2026</option>
                                    <option value="2009">2025</option>
                                    <option value="2008">2024</option>
                                    <option value="2007">2023</option>
                                    <option value="2006">2022</option>
                                    <option value="2005">2021</option>
                                    <option value="2004">2020</option>
                                    <option value="2003">2019</option>
                                    <option value="2002">2018</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 mb-0 text-dark">
                        Your Credit card information is encrypted
                    </div>
                    <div class="form-footer mt-2">
                        <a href="#" class="btn btn-primary">Make Payment</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-6 col-lg-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Billing Information</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-6 col-md-6">
                            <div class="form-group">
                                <label class="form-label">First Name <span class="text-red">*</span></label>
                                <input type="text" class="form-control" placeholder="First name">
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <div class="form-group">
                                <label class="form-label">Last Name <span class="text-red">*</span></label>
                                <input type="text" class="form-control" placeholder="Last name">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-label">Company Name <span class="text-red">*</span></label>
                                <input type="text" class="form-control" placeholder="Company name">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-label">Email address <span class="text-red">*</span></label>
                                <input type="email" class="form-control" placeholder="Email">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-label">Country <span class="text-red">*</span></label>
                                <select class="form-control custom-select select2">
                                    <option value="0">--Select--</option>
                                    <option value="1">Germany</option>
                                    <option value="2">Canada</option>
                                    <option value="3">Usa</option>
                                    <option value="4">Aus</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-label">Address <span class="text-red">*</span></label>
                                <input type="text" class="form-control" placeholder="Home Address">
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <div class="form-group">
                                <label class="form-label">City <span class="text-red">*</span></label>
                                <input type="text" class="form-control" placeholder="City">
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <div class="form-group">
                                <label class="form-label">Postal Code <span class="text-red">*</span></label>
                                <input type="number" class="form-control" placeholder="ZIP Code">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-lg-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Payment Information</h3>
                </div>
                <div class="card-body">
                    <div class="card-pay">
                        <ul class="tabs-menu nav">
                            <li class=""><a href=" #tab20" class="active" data-toggle="tab"><i
                                    class="fa fa-credit-card"></i> Credit Card</a></li>
                            <li><a href="#tab21" data-toggle="tab" class=""><i class=" fa fa-paypal"></i> Paypal</a>
                            </li>
                            <li><a href="#tab22" data-toggle="tab" class=""><i class=" fa fa-university"></i> Bank
                                    Transfer</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active show" id="tab20">
                                <div class="bg-danger-transparent-2 text-danger px-4 py-2 br-3 mb-4" role="alert">Please
                                    Enter Valid Details</div>
                                <div class="form-group">
                                    <label class="form-label">CardHolder Name</label>
                                    <input type="text" class="form-control" placeholder="First Name">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Card number</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search for...">
                                        <span class="input-group-append">
                                            <button class="btn btn-secondary box-shadow-0" type="button"><i
                                                    class="fa fa-cc-visa"></i> &nbsp; <i class="fa fa-cc-amex"></i>
                                                &nbsp;
                                                <i class="fa fa-cc-mastercard"></i></button>
                                        </span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-8">
                                        <div class="form-group">
                                            <label class="form-label">Expiration</label>
                                            <div class="input-group">
                                                <input type="number" class="form-control" placeholder="MM" name="Month">
                                                <input type="number" class="form-control" placeholder="YY" name="Year">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="form-label">CVV <i
                                                    class="fa fa-question-circle"></i></label>
                                            <input type="number" class="form-control" required="">
                                        </div>
                                    </div>
                                </div>
                                <a href="#" class="btn  btn-lg btn-primary">Confirm</a>
                            </div>
                            <div class="tab-pane" id="tab21">
                                <p>Paypal is easiest way to pay online</p>
                                <p><a href="#" class="btn btn-primary"><i class="fa fa-paypal"></i> Log in my Paypal</a>
                                </p>
                                <p class="mb-0"><strong>Note:</strong> Nemo enim ipsam voluptatem quia voluptas
                                    sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione
                                    voluptatem sequi nesciunt. </p>
                            </div>
                            <div class="tab-pane" id="tab22">
                                <p>Bank account details</p>
                                <dl class="card-text">
                                    <dt>BANK: </dt>
                                    <dd> THE UNION BANK 0456</dd>
                                </dl>
                                <dl class="card-text">
                                    <dt>Accaunt number: </dt>
                                    <dd> 67542897653214</dd>
                                </dl>
                                <dl class="card-text">
                                    <dt>IBAN: </dt>
                                    <dd>543218769</dd>
                                </dl>
                                <p class="mb-0"><strong>Note:</strong> Nemo enim ipsam voluptatem quia voluptas
                                    sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione
                                    voluptatem sequi nesciunt. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div><!-- end app-content-->
    </div>
@endsection
@section('js')
    <!--INTERNAL Select2 js -->
    <script src="{{ URL::asset('assets/plugins/select2/select2.full.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/select2.js') }}"></script>
@endsection
