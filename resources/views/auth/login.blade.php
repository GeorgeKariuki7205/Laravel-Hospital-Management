@extends('superTemplates\basicTemplate')

@section('body')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}



<div style="background-image:url(&quot;design/assets/img/pexels-photo-433267.jpeg&quot;);">
    <form id="form" style="font-family:Quicksand, sans-serif;background-color:rgba(34,30,42,0.65);width:320px;padding:40px;" action="{{ route('login') }}" method="post">
        {{ csrf_field() }}
        <h2 id="head" style="color:rgb(88,222,55);font-family:Times New Roman;"><strong>LOGIN&nbsp;</strong></h2>
        <div style="text-align:center;"><img class="rounded-circle img-fluid" src="design/assets/img/download (1).png" id="image" style="width:auto;height:auto;"></div>
        <div class="form-group"><label for="from-phone" style="font-family:Times New Roman;"><strong>Email :</strong></label><span class="required-input">*</span>
            <div class="input-group">
                <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-user"></i></span></div><input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror</div>
        </div>
        <div class="form-group"><label for="from-phone" style="font-family:Times New Roman;"><strong>Password</strong></label><span class="required-input">*</span>
            <div class="input-group">
                <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-key"></i></span></div> <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="current-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror</div>
        </div>
        
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

            <label class="form-check-label" for="remember" style="color:white">
                {{ __('Remember Me') }}
            </label>
        </div>

        <button class="btn btn-success" type="submit" id="butonas" style="width:100%;height:100%;margin-bottom:10px;background-color:rgb(18,217,14);font-family:Times New Roman;color:rgb(255,255,255);"><strong>LOG IN&nbsp; &nbsp; &nbsp;&nbsp;</strong><i class="fa fa-unlock" style="font-size:32px;"></i></button>
        @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
    </form>
</div>
@endsection
