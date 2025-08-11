@extends('admin.Base')

@section('maincontent')
    <div class="container mt-5">
        <div class="form ms-5">
            <div class=" m-auto col-md-8">
                <form class="m-auto" method="POST" enctype="multipart/form-data" action="{{ route('foods.store') }}">
                    @csrf
                    <div class="mb-3">

                        <input type="text" name="title" placeholder="title" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">

                        <input type="number" placeholder="price" name="price" class="form-control"
                            id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Image</label>
                        <input type="file" name="image" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <textarea name="description" id="" placeholder="description" class="form-label" cols="20" rows="5"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>

        </div>
    </div>
@endsection
