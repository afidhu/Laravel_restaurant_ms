@extends('admin.Base')

@section('maincontent')
<div class="container mt-5 mx-5">
    <div class="row justify-content-center mx-5">
        <div class="col-md-10 mx-5">
            <div class="card shadow-lg p-4 mx-5">
                <h3 class="text-center text-success mb-4">All Orders</h3>
                
                <div class="table-responsive">
                    <table class="table table-hover align-middle text-center">
                        <thead class="table-light">
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
                            @forelse ($allorders as $index => $item)
                                <tr>
                                    <th scope="row">{{ $index + 1 }}</th>
                                    <td>{{ $item->name }}</td>
                                    <td class="text-primary fw-bold">Tsh: {{ $item->amount }}</td>
                                    <td>{{ $item->phone_number }}</td>
                                    <td>{{ $item->created_at->format('d-M-Y H:i') }}</td>
                                    <td>
                                        @if ($item->status == 'pending')
                                            <button class="btn btn-warning shadow-sm" disabled>
                                                <i class="fas fa-spinner fa-spin"></i> Pending
                                            </button>
                                        @else
                                            <span class="btn btn-success shadow-sm">Paid</span>
                                        @endif
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="text-center text-warning fs-5">
                                        No Orders Found
                                    </td>
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
