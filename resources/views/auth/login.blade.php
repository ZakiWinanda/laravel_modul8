@extends('layouts.app')

@section('content')
    <div style="background-color: #007bff; height: 100vh; display: flex; justify-content: center; align-items: center;">
        <div
            style="background: white; padding: 30px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); width: 350px;">
            <div style="text-align: center; margin-bottom: 20px;">
                <img src="{{ asset('storage/images/aku.jpg') }}" alt="Logo" style="width: 50px; height: 50px;">
                <h4 style="margin-top: 10px; color: #000000;">Employee Data Master</h4>
            </div>
            <hr>
            <br>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="mb-3">
                    <input id="email" type="email" name="email" placeholder="Enter Your Email"
                        class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required
                        autofocus style="margin-bottom: 15px;">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <input id="password" type="password" name="password" placeholder="Enter Your Password"
                        class="form-control @error('password') is-invalid @enderror" required>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <br>
                <hr>
                <br>
                <button type="submit" class="btn btn-primary w-100" style="margin-bottom: 10px;">Log In</button>
                <div style="text-align: center;">
                </div>
            </form>
        </div>
    </div>
@endsection
