@extends('headerNfooter.main')

@section('main-section')
<div class="container">
    <div class="info-container p-2">
        <div class="row">
            <div class="col-lg-6 blue-container p-4 px-5">
                <h2>INFORMATION</h2>
                <p class="py-3">
                    Hireme is an online recruitment platform whose main purpose is to help employers and jobseekers meet online with ease.
                    <br> <br>
                    As a jobseeker, you no longer need to go through the painstaking and costly process of printing and photocopying numerous CVs and physically dropping them at employers’ desks that you are not even sure that they have a vacancy.
                    <br> <br>
                    As an employer, we help you meet your recruitment and staffing needs within the shortest time possible and without having to incur the costs of advertising job vacancies
                </p>
                <a href="{{route('login')}}"><button class="btn btn-danger">Have an Account</button></a>
            </div>
            <div class="col-lg-6 white-container p-4 px-5">
                <h2 style="color: #6495ed">Title</h2>
                @if($errors->any())
                  <div class="alert alert-danger">
                    Please provide necessary and correct details
                  </div>
                @endif
                @if(session()->has('success'))
                  <div class="alert alert-success">
                    <p>{{ session()->get('success') }}</p>
                  </div>
                @endif
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
        
                                <div class="row mb-3">
                                    <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>
        
                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
        
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
        
                                <div class=" row mb-3">
                                    <div>
                                      <label class="col-md-4 col-form-label text-md-end">Choose Your Category</label>
                                      <br>
                                      <label class="form-check-label" for="exampleCheck1">
                                          I am an Employer
                                          <input type="radio" name="user_type" class="form-check-input" id="exampleCheck1" value="employer">
                                          <span class="checkmark"></span>
                                      </label>
                                      <label class="form-check-label" for="exampleCheck1">
                                          I am a job seeker
                                          <input type="radio" name="user_type" class="form-check-input" id="exampleCheck1" value="job_seeker">
                                          <span class="checkmark"></span>
                                      </label>
                                    </div>
                                    @if($errors->has('user_type'))
                                      <div class="alert">
                                        <p class="text-danger">
                                          {{ $errors->first('user_type') }}
                                        </p>
                                      </div>
                                    @endif
                                  </div> 
        
                                <div class="row mb-3">
                                    <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>
        
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
                                    <label for="email" class="col-md-4 col-form-label text-md-end">Phone Number</label>
        
                                    <div class="col-md-6">
                                        <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}">
        
                                        @error('phone')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
        
        
                                <div class="row mb-3">
                                    <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>
        
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
                                    <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>
        
                                    <div class="col-md-6">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                    </div>
                                </div>
        
                                <div class="row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Register') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
            </div>
        </div>
    </div>
    {{-- <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class=" row mb-3">
                            <div>
                              <label class="col-md-4 col-form-label text-md-end">Choose Your Category</label>
                              <br>
                              <label class="form-check-label" for="exampleCheck1">
                                  I am an Employer
                                  <input type="radio" name="user_type" class="form-check-input" id="exampleCheck1" value="employer">
                                  <span class="checkmark"></span>
                              </label>
                              <label class="form-check-label" for="exampleCheck1">
                                  I am a job seeker
                                  <input type="radio" name="user_type" class="form-check-input" id="exampleCheck1" value="job_seeker">
                                  <span class="checkmark"></span>
                              </label>
                            </div>
                            @if($errors->has('user_type'))
                              <div class="alert">
                                <p class="text-danger">
                                  {{ $errors->first('user_type') }}
                                </p>
                              </div>
                            @endif
                          </div> 

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

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
                            <label for="email" class="col-md-4 col-form-label text-md-end">Phone Number</label>

                            <div class="col-md-6">
                                <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}">

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

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
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> --}}
</div>
@endsection
