@extends('dashboard')

@section('content')
<main class="login-form">
    <div class="container">
        <div class="row justify-content-center">
            <table class="table table-striped table-bordered">
                <thead class="bg-primary text-white">
                    <tr>
                        <th>ID</th>
                        <th>Tên sở thích</th>
                        <th>Nội dung sở thích</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($favorities as $item)
                    <tr>
                        <th>{{ $item->favorite_id }}</th>
                        <th>{{ $item->favorite_name }}</th>
                        <th>{{ $item->favorite_description }}</th>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
</main>
@endsection