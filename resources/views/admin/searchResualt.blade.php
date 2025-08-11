@extends('admin.Base')


@section('maincontent')
    <div class="container">
        <div class="seach" style="float:right">

        </div>
        <table class="table m-auto ms-5">
            <thead>
                <tr>
                    <th scope="col">SN</th>
                    <th scope="col">Image</th>
                    <th scope="col">title</th>
                    <th scope="col">Price</th>
                    <th scope="col">description</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($foodResult as $item)
                    <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td>
                            @if ($item->image)
                                <img src="{{ asset('upload/posts/' . $item->image) }}" alt=""
                                    style="width: 80px; height: 80px;">
                            @else
                                <span>No Image</span>
                            @endif
                        </td>
                        <td>{{ $item->title }}</td>
                        <td>{{ $item->price }}</td>
                        <td>{{ $item->description }}</td>
                              <td>
                            <span><a href="" class="btn btn-warning" ><i class="fa fa-edit "></i></a></span>
                            <span><a href=""  class="btn btn-danger" ><i class="fa fa-trash"></i></a></span>

                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
