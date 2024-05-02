@extends('dashboard')

@section('content')
<main class="login-form">
    <div class="container">
        <div class="row justify-content-center">
            <table class="table table-striped table-bordered">
                <thead class="bg-primary text-white">
                    <tr>
                        <th>ID</th>
                        <th>User Id</th>
                        <th>Tên bài viết</th>
                        <th>Nội dung bài viết</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($posts as $item)
                    <tr>
                        <th>{{ $item->post_id }}</th>
                        <th>{{ $item->user_id }}</th>
                        <th>{{ $item->post_name }}</th>
                        <th>{{ $item->post_description }}</th>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
</main>
@endsection