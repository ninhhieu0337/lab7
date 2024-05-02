@extends('dashboard')

@section('content')
    <main class="signup-form">
        <div class="cotainer">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="card">
                        <h3 class="text-center">Đăng Ký</h3>
                        <div class="card-body">
                            <form action="{{ route('user.createUser') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group mb-3">
                                    <div class="row">
                                        <div class="col-md-3"><span>Mã SV</span></div>
                                        <div class="col-md-9"> <input type="text" id="mssv" class="form-control" name="mssv"
                                           required autofocus> </div>
                                    </div>
                                    @if ($errors->has('name'))
                                        <span class="text-danger">{{ $errors->first('mssv') }}</span>
                                    @endif
                                </div>
                                <div class="form-group mb-3">
                                    <div class="row">
                                        <div class="col-md-3"><span>Username</span></div>
                                        <div class="col-md-9"> <input type="text" id="name" class="form-control" name="name"
                                           required autofocus> </div>
                                    </div>
                                    @if ($errors->has('name'))
                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>
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
                                    <div class="row">
                                        <div class="col-md-3"><span>Phone</span></div>
                                        <div class="col-md-9"> <input type="number" id="phone" class="form-control"
                                           name="phone" required autofocus>
                                     </div>
                                    </div>
                                    @if ($errors->has('phone'))
                                        <span class="text-danger">{{ $errors->first('phone') }}</span>
                                    @endif
                                </div>
                                <div class="form-group mb-3">
                                    <div class="row">
                                        <div class="col-md-3"><span>Sở Thích</span></div>
                                        <div class="col-md-9"> <input type="text" id="sothich" class="form-control"
                                           name="sothich" required autofocus>
                                     </div>
                                    </div>
                                    @if ($errors->has('name'))
                                        <span class="text-danger">{{ $errors->first('sothich') }}</span>
                                    @endif
                                </div>

                                <div class="form-group mb-3">
                                    <input type="file" placeholder="fileToUpload" id="fileToUpload" class="form-control"
                                           name="image" required>
                                    @if ($errors->has('phone_image'))
                                        <span class="text-danger">{{ $errors->first('image') }}</span>
                                    @endif
                                </div>
                                <div class="form-group row mt-2">
                                <div class="col-6">
                                    <div class="form-check">
                                        
                                        <label class="form-check-label" for="hasAccount" style="color: blue">Đã có tài khoản?</label>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="d-grid mx-auto">
                                        <button type="submit" class="btn btn-primary btn-block">Đăng Ký</button>
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
