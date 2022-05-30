@extends('userside.layout')
@section('main')
    @include('userside.layouts.advertise_sidebar')
    <div id="rightcolumn" style="
                    width:79% " class="rightcolumn_div post_story_margin">

        <div style="height:30px;margin-bottom:10px; display: block;" id="bc_container">
            <span class="worddashbord" style="display:inline;"> <a href="index.php?tabs=6&section=favourites">Tools</a>
                &raquo; Favourite </span>
        </div>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="box_title">
            <div><b>Cart</b></div>
        </div>
        <div class="box_body">
            <span id="table_container" class="d-none">

                <div class="ant-table" id="data_Sale" style="height:auto">

                    <table id="myTable" class="table table-responsive listing_table table-bordered text-nowrap">
                        <thead class="thead-light" id="table_head">
                            <tr>
                                <th>Type</th>
                                <th>Price(PKR)</th>
                                <th>Quantity</th>
                                <th>Subtotal</th>
                                <th>Controller</th>
                            </tr>
                        </thead>
                        <tbody id="table_data" style="float: none;">
                            @php $total = 0 @endphp
                            @if (session('cart'))
                                @foreach (session('cart') as $id => $details)
                                    @php $total += $details['price'] * $details['quantity'] @endphp
                                    <tr data-id="{{ $id }}">
                                        <td data-th="Product">
                                            <div class="row">
                                                <div class="col-sm-9">
                                                    <h4 class="nomargin">{{ $details['name'] }}</h4>
                                                </div>
                                            </div>
                                        </td>
                                        <td data-th="Price">{{ $details['price'] }}</td>
                                        <td data-th="Quantity">
                                            <input type="number" style="width: 40px;" value="{{ $details['quantity'] }}"
                                                class="form-control quantity update-cart" />
                                        </td>
                                        <td data-th="Subtotal" class="text-center">
                                            (PKR)
                                            {{ $details['price'] * $details['quantity'] }}</td>
                                        <td class="actions" data-th="">
                                            <button class="btn-danger btn-sm remove-from-cart"><i
                                                    class="fa fa-trash-o"></i></button>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="5" class="text-right">
                                    <h3><strong>Total ${{ $total }}</strong></h3>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="5" class="text-right">
                                    <a href="{{ url()->previous() }}"><button><i class="fa fa-angle-left"></i>
                                            Continue</a></button>
                                    <a href="/user/checkout"><button class="btn-success" style="float: right;cursor: pointer">Checkout</button></a>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </span>
        </div>
    </div>
    </div>
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>
    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': "{{ csrf_token() }}"
            }
        });
        $(".update-cart").change(function(e) {
            e.preventDefault();
            var ele = $(this);
            $.ajax({
                type: 'POST',
                url: "{{ route('update.cart') }}",
                data: {
                    _token: '{{ csrf_token() }}',
                    id: ele.parents("tr").attr("data-id"),
                    quantity: ele.parents("tr").find(".quantity").val()
                },
                success: function(response) {
                    window.location.reload();
                }
            });
        });
        $(".remove-from-cart").click(function(e) {
            e.preventDefault();
            var ele = $(this);
            swal({
                    title: "Are you sure!",
                    text: "You will not be able to recover!",
                    type: "error",
                    confirmButtonClass: "btn-danger",
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "Yes!",
                    showCancelButton: true,
                },
                function() {
                    $.ajax({
                        type: 'POST',
                        url: "{{ route('remove.from.cart') }}",
                        data: {
                            _token: '{{ csrf_token() }}',
                            id: ele.parents("tr").attr("data-id"),
                        },
                        success: function(result) {
                            swal("Deleted!", "Product removed successfully.", "success");
                            location.reload();
                        }
                    });
                });

        });
    </script>
@endsection
