@extends('layouts.main')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

      <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>

      <form class="mx-1 mx-md-4" method="POST" action="/register">
        @csrf

        <div class="d-flex flex-row align-items-center mb-4">
          <i class="fas fa-user fa-lg me-3 fa-fw"></i>
          <div data-mdb-input-init class="form-outline flex-fill mb-0">
            <input type="text" id="name" name="name" class="form-control" required />
            <label class="form-label" for="name">Your Name</label>
          </div>
        </div>

        <div class="d-flex flex-row align-items-center mb-4">
          <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
          <div data-mdb-input-init class="form-outline flex-fill mb-0">
            <input type="email" id="email" name="email" class="form-control" required />
            <label class="form-label" for="email">Your Email</label>
          </div>
        </div>

        <div class="d-flex flex-row align-items-center mb-4">
          <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
          <div data-mdb-input-init class="form-outline flex-fill mb-0">
            <input type="password" id="password" name="password" class="form-control" required />
            <label class="form-label" for="password">Password</label>
          </div>
        </div>

        <div class="d-flex flex-row align-items-center mb-4">
            <i class="fas fa-key fa-lg me-3 fa-fw"></i>
            <div data-mdb-input-init class="form-outline flex-fill mb-0">
              <input type="password" id="password-confirm" name="password_confirmation" class="form-control" required/>
              <label class="form-label" for="password-confirm">Password Confirm</label>

            </div>
          </div>

          <img src="{{ captcha_src('math') }}" alt="captcha">
              <div class="mt-2"></div>
              <input
                  type="text" name="captcha" class="form-control @error('captcha') is-invalid @enderror" placeholder="Please Insert Captch"
                  >
               @error('captcha')
               <div class="invalid-feedback">{{ $message }}</div> @enderror

        <div class="text-center">Already Have Account? <a href="/login">Login</a></div>

        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
          <button type="submit" class="btn btn-primary btn-lg">Register</button>
        </div>

      </form>

    </div>
    <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

      <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp"
        class="img-fluid" alt="Sample image">

    </div>
  </div>
</div>
@endsection
