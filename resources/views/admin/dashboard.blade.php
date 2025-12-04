@extends('admin.Base')

@section('maincontent')
<div class="container mt-5">
    <!-- Search Form -->
    <div class="row justify-content-center mb-4">
        <div class="col-md-6">
            <form action="{{ route('search') }}" method="GET" class="d-flex shadow-sm p-3 rounded bg-light">
                @csrf
                <input type="text" name="title" class="form-control me-2" placeholder="Search by title">
                <button type="submit" class="btn btn-info">Search</button>
            </form>
        </div>
    </div>

    <!-- Food List Card -->
    <div class="row justify-content-center mx-5">
        <div class="col-md-10 mx-5">
            <div class="card shadow-lg p-4 mx-5">
                <h3 class="text-center text-success mb-4">Food Items List</h3>

                <div class="table-responsive mx-5">
                    <table class="table table-hover align-middle text-center ">
                        <thead class="table-light">
                            <tr>
                                <th scope="col">SN</th>
                                <th scope="col">Image</th>
                                <th scope="col">Title</th>
                                <th scope="col">Price</th>
                                <th scope="col">Description</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($adminFoods as $item)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>
                                        @if ($item->image)
                                            <img src="{{ asset('upload/posts/' . $item->image) }}" alt="" class="rounded-circle border" style="width: 80px; height: 80px; object-fit: cover;">
                                        @else
                                            <span class="text-muted">No Image</span>
                                        @endif
                                    </td>
                                    <td>{{ $item->title }}</td>
                                    <td class="text-primary fw-bold">Tsh: {{ $item->price }}</td>
                                    <td>{{ $item->description }}</td>
                                    <td class="d-flex justify-content-center gap-2">
                                        <a href="{{ route('foods.edit', $item->id) }}" class="btn btn-warning btn-sm shadow-sm">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <form action="{{ route('foods.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm shadow-sm">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="text-center text-danger">No items found</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
