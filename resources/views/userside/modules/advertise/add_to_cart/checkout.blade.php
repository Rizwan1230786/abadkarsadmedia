@extends('userside.layout')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<style>
    .form-control {
        font-size: 11px;
    }

    .tr td {
        font-size: 11px;

    }

    .th th {
        font-size: 11px;
    }

    .card-footer {
        padding: 0.1rem 1rem
    }

    .btn-danger {
        background-color: #FF385c;
        border-color: #FF385c;
    }

</style>
@section('main')
    <section class="section-content bg padding-y">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    @if (Session::has('error'))
                        <p class="alert alert-danger">{{ Session::get('error') }}</p>
                    @endif
                </div>
            </div>
            <form action="{{ url('user/place-order') }}" method="POST" role="form">
                @csrf
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <header class="card-header">
                                <h4 class="card-title mt-2">Billing Details</h4>
                            </header>
                            <input type="hidden" value="{{ Auth::user()->id }}" name="user_id">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-6 form-group">
                                        <label>First name</label>
                                        <input type="text" class="form-control" value="{{ auth()->user()->firstname }}"
                                            name="first_name">
                                        @if ($errors->has('first_name'))
                                            <div class="error">{{ $errors->first('first_name') }}</div>
                                        @endif
                                    </div>
                                    <div class="col-6 form-group">
                                        <label>Last name</label>
                                        <input type="text" class="form-control" value="{{ auth()->user()->lastname }}"
                                            name="last_name">
                                        @if ($errors->has('last_name'))
                                            <div class="error">{{ $errors->first('last_name') }}</div>
                                        @endif
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label>Address</label>
                                        <textarea class="form-control" name="address" rows="3">{{ Auth::user()->address }}</textarea>
                                        @if ($errors->has('address'))
                                            <div class="error">{{ $errors->first('address') }}</div>
                                        @endif
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>City</label>
                                        <input type="text" class="form-control" value="{{ auth()->user()->city }}"
                                            name="city">
                                        @if ($errors->has('city'))
                                            <div class="error">{{ $errors->first('city') }}</div>
                                        @endif
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label>Country</label>
                                        <input type="text" class="form-control" value="{{ auth()->user()->country }}"
                                            name="country">
                                        @if ($errors->has('country'))
                                            <div class="error">{{ $errors->first('country') }}</div>
                                        @endif
                                    </div>
                                    <div class="form-group  col-md-6">
                                        <label>Post Code</label>
                                        <input type="number" class="form-control" name="zipcode">
                                        @if ($errors->has('zipcode'))
                                            <div class="error">{{ $errors->first('zipcode') }}</div>
                                        @endif
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group  col-md-6">
                                        <label>Phone Number</label>
                                        @if (Auth::user()->contact)
                                            <input type="text" class="form-control" id="account-phone" value="+92{{ Auth::user()->contact }}"
                                                name="phone_number">
                                        @else
                                            <input type="number" class="form-control" id="account-phone" value='+92'
                                                name="phone_number">
                                            @if ($errors->has('phone_number'))
                                                <div class="error">{{ $errors->first('phone_number') }}</div>
                                            @endif
                                        @endif
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Email Address</label>
                                        <input type="email" class="form-control" name="email"
                                            value="{{ auth()->user()->email }}" disabled>
                                        <small class="form-text text-muted">We'll never share your email with anyone
                                            else.</small>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <label>Order Notes</label>
                                        <textarea class="form-control" name="notes" rows="6"></textarea>
                                        @if ($errors->has('notes'))
                                            <div class="error">{{ $errors->first('notes') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <header class="card-header">
                                        <h4 class="card-title mt-2">Your Order</h4>
                                    </header>
                                    @php $total = 0 @endphp
                                    @if (session('cart'))
                                        <table class="table table-striped table-bordered">
                                            <thead>
                                                <tr class="th">
                                                    <th>Type</th>
                                                    <th>Qty</th>
                                                    <th>Price</th>
                                                    <th>SubTotla (PKR)</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach (session('cart') as $id => $details)
                                                    @php $total += $details['price'] * $details['quantity'] @endphp
                                                    <tr class="tr">
                                                        <td>{{ $details['name'] }}</td>
                                                        <td>{{ $details['quantity'] }}</td>
                                                        <td>{{ $details['price'] }}</td>
                                                        <td data-th="Subtotal" class="text-center">
                                                            {{ $details['price'] * $details['quantity'] }}</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        <div class="card-footer">

                                            <strong>Total ${{ $total }}</strong>

                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-12 mt-4">
                                <button type="submit" style="width: 100%;"
                                    class="subscribe btn btn-danger btn-sm btn-block">Place Order</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection
@section('js')
    <script src="{{ URL::asset('front/js/Tellcustom.js') }}"></script>
    <link href="{{ URL::asset('front/css/intlTelInput.css?1613236686837') }}" rel="stylesheet">
    <script src="{{ URL::asset('front/js/Tellprism.js') }}"></script>
    <script src="{{ URL::asset('front/js/intlTelInput.js') }}"></script>
    <script src="{{ URL::asset('front/js/Tellinput.js') }}"></script>
@endsection
