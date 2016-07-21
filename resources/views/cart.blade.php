@extends('layouts.app')

@section('content')

    <div class="container">
        
        <h1>Your Design Cart</h1>

        <hr>

        @if (session()->has('success_message'))
            <div class="alert alert-success">
                {{ session()->get('success_message') }}
            </div>
        @endif

        @if (session()->has('error_message'))
            <div class="alert alert-danger">
                {{ session()->get('error_message') }}
            </div>
        @endif

        @if (sizeof(Cart::instance(auth()->id())->content()) > 0)

            <table class="table">
                <thead>
                    <tr>
                        <th class="table-image"></th>
                        <th>Design Pattern(s)</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th class="column-spacer"></th>
                        <th></th>
                    </tr>
                </thead>

                <tbody>
                    @foreach (Cart::instance(auth()->id())->content() as $item)
                    <tr>
                        <td class="table-image"><a href="{{ url('dps', [$item->id]) }}"><img src="/thumbnail/{{ $item->model->slug }}.jpg" height="190" width="220" alt="product" class="img-responsive cart-image"></a></td>
                        <td><a href="{{ url('dps', [$item->id]) }}">{{ $item->name }}</a></td>
                        <td>
                            <label class="quantity">{{ $item->qty}}</label> 
                        </td>
                        <td>${{ $item->subtotal }}</td>
                        <td class=""></td>
                        <td>
                            <form action="{{ url('cart_remove', $item->rowId) }}" method="POST" class="side-by-side">
                                {!! csrf_field() !!}
                                <input type="hidden" name="_method" value="DELETE">
                                <input type="submit" class="btn btn-danger btn-sm" value="Remove">
                            </form>

                            
                        </td>
                    </tr>
                    @endforeach

                    <tr class="border-bottom">
                        <td class="table-image"></td>
                        <td style="padding: 40px;"></td>
                        <td class="small-caps table-bg" style="text-align: right">Your Total</td>
                        <td class="table-bg">${{ Cart::instance(auth()->id())->total() }}</td>
                        <td class="column-spacer"></td>
                        <td></td>
                    </tr>

                </tbody>
            </table>

            <a href="/dps" class="btn btn-primary btn-lg">Browse More </a> &nbsp;
            <a href="/cart_run" onclick="myFunction()" id="demo" class="btn btn-success btn-lg">Download as Single Eagle File</a>
            
            <div style="float:right">
                <form action="/emptyCart" method="POST">
                    {!! csrf_field() !!}
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="submit" class="btn btn-danger btn-lg" value="Empty Cart">
                </form>
            </div>

        @else

            <h3>You have no items in your shopping cart</h3>
            <a href="/dps" class="btn btn-primary btn-lg">Continue Shopping</a>

        @endif

        <div class="spacer"></div>

    </div> <!-- end container -->

@endsection


    <script>
       function myFunction() {
        //   alert('Please wait while form is submitting');
        $('#demo').attr("disabled", "disabled");
        document.getElementById("demo").innerHTML = "Merging Files Please Wait...";
       // document.getElementById("demo").prop('disabled', true);
        
       
        
       }
    </script>
