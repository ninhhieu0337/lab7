@extends('dashboard')

@section('content')
<main class="login-form">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="product-details d-flex">
                    <div class="product-image" style=" margin-right: 50px;">
                        <img src="{{ asset('uploads/image/' . $user->image) }}" alt="Image">
                    </div>
                    <div class="product-info">
                    <h2 class="product-mssv">{{ $user->mssv }}</h2>
                    <h4 class="product-name">{{ $user->name }}</h4>
                    <p class="product-id">ID: {{ $user->user_id }}</p>
                    <p class="product-email">Email: {{ $user->email }}</p>
                    <p class="product-phone">Phone: {{ $user->phone }}</p>
                    <p class="product-phone">Sở Thích: {{ $user->sothich }}</p>
                    </div>
                </div>
                <h3>Hiển thị thông tin user được trích xuất từ user_profile:</h3>
                        @foreach($userProfile as $item)
                        {{ $item->first_name }} <br>
                        {{ $item->last_name }} <br>
                        @if($item->sex == 0)
                        Nam <br>
                        @elseif($item->sex == 1)
                        Nữ <br>
                        @else
                        Khác <br>
                        @endif
                        {{ $item->phone }} <br>
                        {{ $item->address }} <br>
                        @endforeach

                        <h3>Hiển thị thông tin bài viết được đăng bởi user</h3>
                        @foreach($userPost as $item)
                        <span><b>ID bài viết:</b></span> {{ $item->post_id }} <br>
                        <span><b>Tên bài viết:</b></span> {{ $item->post_name }} <br>
                        @endforeach

                        <h3>Hiển thị thông tin sở thích của user</h3>
                        @foreach($userFavoritie as $item)
                        <span><b>ID sở thích:</b></span> {{ $item->favorite_id }} <br>
                        <span><b>Tên sở thích:</b></span> {{ $item->favorite_name }} <br>
                        @endforeach
            </div>
        </div>
    </div>
</main>
@endsection
