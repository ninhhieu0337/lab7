@extends('dashboard')

@section('content')
<main class="login-form">
    <div class="container">
        <div class="row justify-content-center">
            <table class="table table-striped table-bordered">
                <thead class="bg-primary text-white">
                    <tr>
                        <th>ID</th>
                        <th>MSSV</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Sở Thích</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <th>{{ $user->user_id }}</th>
                        <th>{{ $user->mssv }}</th>
                        <th>{{ $user->name }}</th>
                        <th>{{ $user->email }}</th>
                        <th>{{ $user->phone }}</th>
                        <th>{{ $user->sothich }}</th>
                        <td><img style="width: 80px; height: 80px" src="{{ asset('uploads/image/' . $user->image) }}"
                                alt="Image"></td>
                        <td>
                            <a href="{{ route('users.detail', ['id' => $user->user_id]) }}"
                                class="btn btn-info">View</a>
                            <a href=" route('user.UpdatetUser', ['id' => $user->id]) " class="btn btn-warning">Edit</a>
                            <a href="{{ route('user.deleteUser',['id' => $user->user_id]) }}"
                                class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                    @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
    {{ $users->links()}}
</main>
@endsection