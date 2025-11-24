@extends('admin.Base')

@section('maincontent')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg p-4">
                <h3 class="text-center text-success mb-4">All Users</h3>

                <div class="table-responsive">
                    <table class="table table-hover align-middle text-center">
                        <thead class="table-light">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($alluser as $index => $item)
                                <tr>
                                    <th scope="row">{{ $index + 1 }}</th>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>
                                        @if ($item->user_type == '0')
                                            <a href="{{ route('deleteuser', $item->id) }}" 
                                               class="btn btn-danger btn-sm shadow-sm"
                                               onclick="return confirm('Are you sure you want to delete this user?')">
                                               Delete
                                            </a>
                                        @else
                                            <span class="btn btn-warning btn-sm shadow-sm">Not allowed</span>
                                        @endif
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="text-center text-warning fs-5">
                                        No Users Found
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
