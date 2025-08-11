@extends('admin.Base')

@section('maincontent')
    <div class="container  mt-5">
        <div class="table mt-5">
            <table class="table ms-5"  >
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($alluser as $item)


                    <tr>
                        <th scope="row"></th>
                        <td>{{$item->name}}</td>
                        <td>{{$item->email}}</td>
                        <td>
                            @if ($item->user_type =='0')
                                <span><a href="{{route('deleteuser', $item->id)}}" class="btn btn-danger" onclick="return confirm('Are want to Delete')" >Delete</a></span>

                                @else
                                <span><a href="" class="btn btn-warning" >Not allowed</a></span>

                            @endif
                        </td>
                    </tr>
                       @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
