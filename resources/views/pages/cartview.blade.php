<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous">
    </script>
    <title>Cart Details</title>
</head>

<body>

    <div class="container mt-5">
        <div class="row mt-5 ms-5">
            <div class="head">
                <header>

                    <h4 class="m-auto text-center"><u style="color: red"> <b class="text-success"> My Selected Foods  </b>
                        </u></h4>
                </header>
            </div>
            <div class="data-table mt-1  col-md-8 ms-5">
                <div class="sum  btn btn-info ms-5  mt-3 mb-4 "> <b class="text-white"><u class="">Tatal
                            Grands:</u></b>
                    <span class=" "><b> $ {{ $countprice }}</b></span>
                </div>
                <table class="table border ms-5 show shadow">
                    <thead>
                        <tr>
                            <th scope="col">SN</th>
                            <th scope="col">Image</th>
                            <th scope="col">title</th>
                            <th scope="col">quantity</th>
                            <th scope="col">price</th>
                            <th scope="col">sum</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (isset($cartItem) && is_iterable($cartItem) && count($cartItem) > 0)

                            @foreach ($cartItem as $item)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>
                                        @if ($item->image)
                                            <img src="{{ asset('upload/posts/' . $item->image) }}" alt=""
                                                style="width: 80px; height: 80px;">
                                        @else
                                            <span>No Image</span>
                                        @endif
                                    </td>
                                    <td>{{ $item->title }}</td>
                                    <td>{{ $item->quantity }}</td>
                                    <td>${{ $item->price }}</td>
                                    <td>$ {{ $item->total_price }}</td>
                                    <td>
                                        <div class="d-flex align-items-center">

                                            <form method="POST" action="{{ route('cartview.update', $item->id) }}"
                                                class="d-flex align-items-center me-3">
                                                @csrf
                                                @method('PUT')
                                                <input type="number" min="1" value="{{ $item->quantity }}"
                                                    name="quantity" class="form-control form-control-sm me-2"
                                                    style="width: 70px;">
                                                <input type="submit" value="Update" class="btn btn-sm btn-primary">
                                            </form>

                                            <form action="{{ route('cartview.destroy', $item->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger"
                                                    onclick="return confirm('Are want to Delete Item??')">
                                                    <a>
                                                        <i class="fa fa-trash bg-danger"></i>
                                                    </a>
                                                </button>
                                            </form>
                                        </div>
                                    </td>

                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td class="ms-5 text-danger">No Items Selected</td>
                            </tr>

                        @endif

                    </tbody>
                </table>

                <div class="row ms-5">
                    <div class="col-md-2">
                        <div class="back">
                            <span>
                                <a href="{{ route('home') }} " class="btn btn-success">Back</a>
                            </span>
                        </div>
                    </div>
                    @if (isset($cartItem) && is_iterable($cartItem) && count($cartItem) > 0)
                        <div class="col-md-2">
                            <div class="checkout">
                                <span>
                                    <a href=" {{ route('payment') }}" class="btn btn-secondary">CheckOut</a>
                                </span>
                            </div>
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>


</body>

</html>
