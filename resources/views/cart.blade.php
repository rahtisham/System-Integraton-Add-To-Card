@extends('layouts.pages')

@section('content')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
<div class="container" style="margin-top: 120px;">
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="row" style="padding-bottom: 60px;">
        <form method="post" action="{{ route('checkout') }}">
            @csrf
            <div class="col-sm-5">
                <h2>Complete Your Order</h2><br><br>

                    <div class="form-group">
                        <input type="contact" name="contact" value="{{ old('contact') }}" class="form-control form-control-lg" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="03000000000">
                        @error('contact')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <select class="form-control form-control-lg" name="payment">
                            <option value="Cash on Delivery">Cash on Delivery</option>
                        </select>
                        @error('payment')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="text" name="name" value="{{ old('name') }}" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Your Name">
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" value="{{ old('email') }}" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Your Email">
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                    <input type="text" name="city" value="{{ old('city') }}" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="City">
                        @error('city')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <textarea name="deliveryAddress" value="{{ old('deliveryAddress') }}" class="form-control form-control-lg" placeholder="Delivery Address" id="deliveryAddress" cols="30" rows="10"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="text" name="landmark" value="{{ old('landmark') }}" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Your Landmark">
                        @error('landmark')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="text" name="requirement" value="{{ old('requirement') }}" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Enter your extra requirement">
                        @error('requirement')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

            </div><!--end of col-sm-4-->
            <div class="col-sm-7">
                @error('productName')
                 <div class="alert alert-danger" role="alert">
                    {{ $message }}
                  </div>
                @enderror
                @error('price')
                <div class="alert alert-danger" role="alert">
                   {{ $message }}
                 </div>
               @enderror
               @error('quantity')
               <div class="alert alert-danger" role="alert">
                  {{ $message }}
                </div>
              @enderror
              @error('subtotal')
              <div class="alert alert-danger" role="alert">
                 {{ $message }}
               </div>
             @enderror
                <table id="cart" class="table table-hover table-condensed ">
                    <thead>
                        <tr style="background-color: gray;">
                            <th style="width:50%; color: black;">Product</th>
                            <th style="width:10%; color: black;">Price</th>
                            <th style="width:8%; color: black;">Quantity</th>
                            <th style="width:22%; color: black;" class="text-center">Subtotal</th>
                            <th style="width:10%; color: black;"></th>
                        </tr>
                    </thead>
                        <tbody>
                            @php $total = 0 @endphp
                            @if(session('cart'))
                                @foreach(session('cart') as $id => $details)
                                    @php $total += $details['price'] * $details['quantity'] @endphp
                                    <tr data-id="{{ $id }}">
                                        <td data-th="Product">
                                            <div class="row centerlizeCart">
                                                <div class="col-sm-3 hidden-xs"><img src="/files/{{ $details['image'] }}" width="50" height="50" class="img-responsive"/></div>
                                                <div class="col-sm-9 align-middle">
                                                    <h4 class="nomargin">{{ $details['sub_name'] }}</h4>
                                                    <input type="hidden" name="productName[]" value="{{ $details['sub_name'] }}">
                                                    <input type="hidden" name="subid[]" value="{{ $id }}">
                                                </div>
                                            </div>
                                        </td>
                                        <td data-th="Price"><h4 class="prices">{{ $details['price'] }}</h4>
                                        <input type="hidden" name="price" value="{{ $details['price'] }}">
                                        </td>
                                        <td data-th="Quantity">
                                            <input style="width: 100%" type="number" name="quantity[]"  value="{{ $details['quantity'] }}" class="form-control quantity update-cart" />
                                        </td>
                                        <td data-th="Subtotal" class="text-center">
                                            <h4 class="prices">{{ $details['price'] * $details['quantity'] }}</h4>
                                            <input style="width: 100%" type="hidden" name="subtotal[]"  value="{{ $details['price'] * $details['quantity'] }}" class="form-control quantity update-cart" />
                                        </td>
                                        <td class="actions" data-th="">
                                            <button class="btn btn-danger btn-sm remove-from-cart"><i class="glyphicon glyphicon-trash" aria-hidden="true"></i></button>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                        <tfoot>
                            <tr>
                                <th colspan="5" class="text-right"><h3 class="total">Total &nbsp;&nbsp;<strong>    PKR = {{ $total }} <input type="hidden" name="totalAmount" value="{{ $total }}"> </strong></h3></th>
                            </tr>
                            <tr>
                                <th colspan="5" class="text-right"><h3 class="total">Delivery Charges &nbsp;&nbsp;<strong>    PKR = 200 <input type="hidden" name="totalAmount" value="{{ $total }}"> </strong></h3></th>
                            </tr>
                            <tr>
                                <th colspan="5" class="text-right"><h3 class="total">Total With Delviery Charges &nbsp;&nbsp;<strong>    PKR = {{ $total + 200 }} <input type="hidden" name="totalAmount" value="{{ $total }}"> </strong></h3></th>
                            </tr>
                            <tr>
                                <td colspan="5" class="text-right">
                                    <a href="{{ url('/') }}" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a>
                                    <button type="submit" class="btn btn-success">Checkout</button>
                                </td>
                            </tr>
                        </tfoot>
                </table>
            </div><!--end of col-sm-7-->
        </form>
    </div>
</div>

<script type="text/javascript">

    $(".update-cart").change(function (e) {
        e.preventDefault();

        var ele = $(this);

        $.ajax({
            url: '{{ route('update.cart') }}',
            method: "patch",
            data: {
                _token: '{{ csrf_token() }}',
                id: ele.parents("tr").attr("data-id"),
                quantity: ele.parents("tr").find(".quantity").val()
            },
            success: function (response) {
               window.location.reload();
            }
        });
    });

    $(".remove-from-cart").click(function (e) {
        e.preventDefault();

        var ele = $(this);

        if(confirm("Are you sure want to remove?")) {
            $.ajax({
                url: '{{ route('remove.from.cart') }}',
                method: "DELETE",
                data: {
                    _token: '{{ csrf_token() }}',
                    id: ele.parents("tr").attr("data-id")
                },
                success: function (response) {
                    window.location.reload();
                }
            });
        }
    });

</script>

@endsection




<style>
    .centerlizeCart{
        margin: 0px!important;
        justify-content: center;
        align-items: center;
        display: flex;
    }
    .nomargin
    {
        color: black;
    }
    .prices
    {
        margin-top: 14px;
        color: black;
    }
    .total
    {
        color: black;
    }
    .btn-sm, .btn-group-sm > .btn {

        padding: 9px 9px !important;
        font-size: 12px;
        line-height: 1.5;
        border-radius: 7px!important;
    }

</style>

