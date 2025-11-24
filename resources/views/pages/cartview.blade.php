<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .cart-header {
            margin-bottom: 30px;
        }

        .cart-card {
            padding: 20px;
            background-color: #fff;
            border-radius: 12px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }

        .cart-total {
            font-size: 1.2rem;
        }

        table img {
            border-radius: 8px;
        }

        .action-btns form {
            display: inline-block;
        }

        .action-btns button,
        .action-btns input[type="submit"] {
            margin-right: 5px;
        }

        @media (max-width: 768px) {
            .cart-card {
                padding: 15px;
            }

            table {
                font-size: 0.9rem;
            }

            .action-btns input[type="number"] {
                width: 60px;
            }
        }
    </style>
</head>

<body>

    <div class="container mt-5">
        <div class="cart-header text-center">
            <h2 class="text-success"><u>My Selected Foods</u></h2>
        </div>

        <div class="cart-card mx-auto col-12 col-md-10">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <span class="btn btn-info cart-total">
                    Total Grand: <b>${{ $countprice ?? 0 }}</b>
                </span>
            </div>

            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead class="table-light">
                        <tr>
                            <th scope="col">SN</th>
                            <th scope="col">Image</th>
                            <th scope="col">Title</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Price</th>
                            <th scope="col">Sum</th>
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
                                    <td>${{ $item->total_price }}</td>
                                    <td class="action-btns">
                                        <form method="POST" action="{{ route('cartview.update', $item->id) }}">
                                            @csrf
                                            @method('PUT')
                                            <input type="number" min="1" value="{{ $item->quantity }}"
                                                name="quantity" class="form-control form-control-sm d-inline-block"
                                                style="width: 70px;">
                                            <input type="submit" value="Update" class="btn btn-sm btn-primary">
                                        </form>

                                        <form action="{{ route('cartview.destroy', $item->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-sm btn-danger"
                                                onclick="return confirm('Are you sure to delete this item?')">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="7" class="text-center text-danger">No Items Selected</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>

            <div class="d-flex justify-content-between mt-4">
                <a href="{{ route('home') }}" class="btn btn-success">Back</a>
                @if (isset($cartItem) && count($cartItem) > 0)
                    <a href="{{ route('payment') }}" class="btn btn-secondary">CheckOut</a>
                @endif
            </div>
        </div>
    </div>

</body>

</html>
