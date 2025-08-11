@extends('admin.Base')

@section('maincontent')

    <div class="container ">
        <div class="table  ms-5">
            <table class="table ms-5">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Amount</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Created</th>
                        <th scope="col">Status</th>

                    </tr>
                </thead>
                <tbody>
                    @if (count($allorders) > 0)
                        @foreach ($allorders as $item)
                            <tr>
                                <th scope="row">1</th>
                                <td>{{ $item->name }}</td>
                                <td>Tsh: {{ $item->amount }}</td>
                                <td>{{ $item->phone_number }}</td>
                                <td>{{ $item->created_at }}</td>
                                <td>
                                    @if ($item->status == 'pending')
                                        <form action="">
                                            <button class=" btn btn-warning">
                                               <i class="fas fa-spinner fa-spin"></i>

                                            </button>
                                        </form>

                                        @else
                                        <span class="btn btn-success" >Paid</span>
                                    @endif


                                </td>
                            </tr>
                        @endforeach
                    @else
                        <td class="ms-5 text-center"><span class="ms-5 text-warning text-center" style="margin-left: 30px; font-size:30px" >NO Orders</span></td>
                    @endif
                </tbody>
            </table>
        </div>
    </div>


@endsection
