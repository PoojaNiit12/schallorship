<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>order-details</title>
  </head>
  <body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                make payment
            </div>
            <div class="card-body">
                @if (session()->has('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if (session()->has('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif



                    <form action="{{ ('rozarpay') }}" method="POST" >
                        @csrf

                        <div class="form-group row">
                            <label  class="col-sm-2 col-form-label">Amount</label>
                            <div class="col-sm-10">
                              <input type="text"  class="form-control" id="inputpassword" placeholder="amount"name="amount">
                              @error('amount')
                              <font color="red">{{$message }}</font>

                              @enderror
                            </div>
                    </div>


                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-primary">Make Payment</button>
                    </div>
                </form>
            </div>
        </div>

    </div>


  </body>
</html>
