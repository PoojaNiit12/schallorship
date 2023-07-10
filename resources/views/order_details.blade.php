<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Payment page</title>
  </head>
  <body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                make payment
            </div>
            <div class="card-body">


                        <div class="form-group row">
                            {{-- <label  class="col-sm-2 col-form-label">Amount</label>
                            <div class="col-sm-10">
                              <input type="text"  class="form-control" id="inputpassword" placeholder="amount"name="amount">
                              @error('amount')
                              <font color="red">{{$message }}</font>

                              @enderror
                            </div> --}}
                            <div class="col-mg-10">
                            <p><strong>Order ID:</strong>  {{ $orderid }}</p>
                            <p><strong> Amount: </strong>{{ number_format($razorpayOrder->amount / 100, 2) }}</p>
                            </div>
                    </div>


                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-primary" id="rzp-button1">Make Payment</button>
                    </div>

            </div>
        </div>

    </div>
    <button >Pay</button>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
    var urls = "{{ route('success') }}";
var options = {
    "key": "rzp_test_mQnvnD1wDNDgpK",
    "amount": "{{ $razorpayOrder->amount }}",
    "currency": "INR",
    "name": "Acme Corp",
    "description": "Test Transaction",
    "image": "https://example.com/your_logo",
    "order_id": "{{ $razorpayOrder->id }}",
    "handler": function (response) {
        // console.log(response);
        window.location.href = urls + '?payment_id=' + response.razorpay_payment_id;
    },
    "prefill": {
        "name": "Pooja Rani",
        "email": "poojarani0113@gmail.com",
        "contact": "7500784809"
    }
};

var rzp1 = new Razorpay(options);
rzp1.on('payment.failed', function (response){
        alert(response.error.code);
        alert(response.error.description);
        alert(response.error.source);
        alert(response.error.step);
        alert(response.error.reason);
        alert(response.error.metadata.order_id);
        alert(response.error.metadata.payment_id);
});
document.getElementById('rzp-button1').onclick = function(e){
    rzp1.open();
    e.preventDefault();
}
</script>

  </body>
</html>
