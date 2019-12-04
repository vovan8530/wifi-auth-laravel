@extends('admin.index')

@section('content')
    <div class="row mt-3 mb-3" style="
            display: flex;
            justify-content: space-between;
            padding: 1em;
            box-sizing: border-box;">
        <div>
            <h2>Users list</h2>
        </div>
        <div>
            <a class="btn btn-warning mb-3" href="{{ route('export') }}">Export Users Data</a>
        </div>
    </div>
    <div class="row">
        <div class="table-responsive">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">First name</th>
                    <th scope="col">Second name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Provider</th>
                    <th scope="col">Provider_id</th>
                    <th scope="col">Created_at</th>
                </tr>
                </thead>
                <tbody>

                @foreach($users as $user)
                    <tr>
                        <th scope="row">{{ $loop -> index + 1 }}</th>
                        <td>{{ $user -> first_name }}</td>
                        <td>{{ $user -> second_name }}</td>
                        <td>{{ $user -> email }}</td>
                        <td>{{ $user -> gender }}</td>
                        <td>{{ $user -> provider }}</td>
                        <td>{{ $user -> provider_id }}</td>
                        <td>{{ $user -> created_at }}</td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>
@endsection
