@extends('dashboard')

@section('content')
    <main class="login-form">
        <div class="cotainer">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="card">
                        <h3 class="text-center">Đăng Nhập</h3>
                        <div class="card-body">
                            <form method="POST" action="{{route('user.login')}}">
                                @csrf
                                <div class="form-group mb-3">
                                    <div class="row">
                                        <div class="col-md-3"><span>Email</span></div>
                                        <div class="col-md-9"> <input type="text" id="email" class="form-control" name="email" required
                                           autofocus> </div>
                                    </div>
                                    @if ($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                                <div class="form-group mb-3">
                                    <div class="row">
                                        <div class="col-md-3"><span>Mật Khẩu</span></div>
                                        <div class="col-md-9"> <input type="password" id="password" class="form-control" name="password" required>
                                     </div>
                                    </div>
                                    @if ($errors->has('password'))
                                        <span class="text-danger">{{ $errors->first('password') }}</span>
                                    @endif
                                </div>
                                <div class="form-group mb-3">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember"> Remember Me
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group row mt-2">
                                <div class="col-6">
                                    <div class="form-check">
                                        
                                        <label class="form-check-label" for="hasAccount" style="color: blue">Quên mật khẩu?</label>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="d-grid mx-auto">
                                        <button type="submit" class="btn btn-primary btn-block">Đăng Nhập</button>
                                    </div>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
