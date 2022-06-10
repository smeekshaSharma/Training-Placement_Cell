<link href="{{URL::asset('assets/css/style.css')}}" rel="stylesheet">
@extends('layouts.app')
@section('content')
<div class="back" style="height:890px;margin-top:-5px;width:100%;">
  <div class="overhide"></div>
  <div class="col-md-10" style="margin-left:100px;width:100%;margin-top:50px;">
    <div class="card" style="border-radius:50px;width:60%;margin-left:200px;margin-top:20px;">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body1">
                    <form method="POST" style="height:730px;" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3" style="margin-top:20px;">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name :') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="fname" class="col-md-4 col-form-label text-md-end">{{ __('Father Name :') }}</label>

                            <div class="col-md-6">
                                <input id="fname" type="text" class="form-control @error('fname') is-invalid @enderror" name="fname" value="{{ old('fname') }}" required autocomplete="fname" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="postal" class="col-md-4 col-form-label text-md-end">{{ __('Postal Address :') }}</label>

                            <div class="col-md-6">
                                <input id="postal" type="text" class="form-control @error('postal') is-invalid @enderror" name="postal" value="{{ old('postal') }}" required autocomplete="postal_address" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="personal" class="col-md-4 col-form-label text-md-end">{{ __('Personal Address :') }}</label>

                            <div class="col-md-6">
                                <input id="personal" type="text" class="form-control @error('personal') is-invalid @enderror" name="personal" value="{{ old('personal') }}" required autocomplete="personal_address" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="sex" class="col-md-4 col-form-label text-md-end">{{ __('Sex :') }}</label>

                            <div class="col-md-6">
                                <input id="sex" type="text" class="form-control @error('sex') is-invalid @enderror" name="sex" value="{{ old('sex') }}" required autocomplete="sex" autofocus>
                            </div>
                        </div>
                        <!-- <div class="form-check form-check-inline">
                            <label for="exampleInputPassword1" class="form-label" style="float:left;margin-right:120px;margin-left:0px;">Sex :</label>
                            <input class="form-check-input" type="radio" name="sex" id="inlineRadio1" value="Male">
                            <label class="form-check-label" style="padding-right:80px;" for="inlineRadio1">Male</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="sex" id="inlineRadio2" value="Female">
                            <label class="form-check-label" for="inlineRadio2">Female</label>
                        </div> -->

                        <div class="row mb-3">
                            <label for="city" class="col-md-4 col-form-label text-md-end">{{ __('City :') }}</label>

                            <div class="col-md-6">
                                <input id="city" type="text" class="form-control @error('city') is-invalid @enderror" name="city" value="{{ old('city') }}" required autocomplete="city" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- <div class="row mb-3">
                            <label for="course" class="col-md-4 col-form-label text-md-end">{{ __('Course') }}</label>

                            <div class="col-md-6">
                                <input id="course" type="text" class="form-control @error('course') is-invalid @enderror" name="course" value="{{ old('course') }}" required autocomplete="course" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> -->
                        
                        <div class="row md-3">
                        <label for="course" class="col-md-4 col-form-label text-md-end">{{ __('Course :') }}</label>
                            <div class="col-md-6">
                                <select id="inputState" class="form-select" name="course" style="width:315px;margin-bottom:10px;" >
                                <option selected>Choose Course</option>
                                <option>B.tech(CSE)</option>
                                <option>BCA</option>
                                <option>B.tech(ME)</option>
                                <option>M.tech(CSE)</option>
                                <option>MCA</option>
                                <option>M.tech(ME)</option>
                                </select>
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label for="district" class="col-md-4 col-form-label text-md-end">{{ __('District :') }}</label>

                            <div class="col-md-6">
                                <input id="district" type="text" class="form-control @error('district') is-invalid @enderror" name="district" value="{{ old('district') }}" required autocomplete="district" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address :') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="mobile" class="col-md-4 col-form-label text-md-end">{{ __('Mobile Number :') }}</label>

                            <div class="col-md-6">
                                <input id="mobile" type="number" class="form-control @error('mobile') is-invalid @enderror" name="mobile" value="{{ old('mobile') }}" required autocomplete="mobile">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password :') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password :') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4" style="margin-top:20px;">
                                <button type="submit" class="btn btn-primary" onclick="Swal.fire({
                                    position: 'center',
                                    icon: 'success',
                                    title: 'Registered Successfully',
                                    showConfirmButton: false,
                                    timer: 1500
                                  })">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
