<!DOCTYPE html>
<html>
<head>
    <title>Checkout</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <!-- Button trigger modal -->
{{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button> --}}

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5 text-info" id="exampleModalLabel">Oder Placed</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
            <div class="alert alert-success text-center shadow p-4 rounded" role="alert" style="font-size: 1.2rem;">
        <h4 class="alert-heading"><i class="fa-solid fa-check"></i> Order Placed Successfully!</h4>
        <p class="mb-0">Thank you for your order. We’ll process it shortly.</p>
    </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>      </div>
    </div>
  </div>
</div>


<div class="container mt-2">
    <div class="text-center">
        <h2 class="mb-1"><u class="text-success" ><b class="text-info">Checkout Page</b></u></h2>
    </div>
    <div class="mb-2 ms-3">
       <span><a href="{{route('cartview.index')}}"><i class="fa-solid fa-backward"></i></a></span>
    </div>

    {{-- Cart Summary --}}
    <div class="card mb-2 show shadow">
        <div class="card-header bg-secondary text-white">Your Order</div>
        <div class="card-body">
            <ul class="list-group">
                @foreach ($cartItems as $item)
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                   (x{{ $item->quantity }})
                        <span>Tsh {{ $item->total_price }}</span>
                    </li>
                @endforeach
                <li class="list-group-item d-flex justify-content-between fw-bold">
                    Total
                    <span>Tsh {{ $totalPrice }}</span>
                </li>
            </ul>
        </div>
    </div>

    {{-- Payment Form --}}
    <form action="{{route('order')}}" method="POST">
        @csrf

        <div class="card mb-2 show shadow ">
            <div class="card-header text-success">Select Payment Method</div>
            <div class="card-body">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="payment_method" id="card" value="card" required>
                    <label class="form-check-label" for="card">Credit/Debit Card</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="payment_method" id="halotel" value="halotel">
                    <label class="form-check-label" for="halotel">Halotel Pesa</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="payment_method" id="tigopesa" value="tigopesa">
                    <label class="form-check-label" for="tigopesa">Tigo Pesa</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="payment_method" id="mpesa" value="mpesa">
                    <label class="form-check-label" for="mpesa">M-Pesa</label>
                </div>
                <input type="hidden" value="{{ $totalPrice }}" name="amount" id="">
            </div>
        </div>

        <div class="mb-3">
            <label for="phone_number" class="form-label">Phone Number (for mobile payments)</label>
            <input type="text" name="phone_number" class="form-control" placeholder="e.g. 07XXXXXXXX" required>
        </div>

        <button type="submit"  data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-primary w-100">Place Order</button>
    </form>
</div>

</body>
</html>
