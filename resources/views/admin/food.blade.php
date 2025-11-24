@extends('admin.Base')

@section('maincontent')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-sm p-4">
                <h3 class="text-center text-success mb-4">Add New Food Item</h3>
                <form method="POST" enctype="multipart/form-data" action="{{ route('foods.store') }}">
                    @csrf

                    <div class="mb-3">
                        <input type="text" name="title" placeholder="Title" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <input type="number" name="price" placeholder="Price" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="image" class="form-label">Image</label>
                        <input type="file" name="image" class="form-control" id="image" required>
                    </div>

                    <div class="mb-3">
                        <textarea name="description" placeholder="Description" class="form-control" rows="4" required></textarea>
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="btn btn-success btn-block">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
