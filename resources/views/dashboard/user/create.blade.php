@extends('dashboard.layouts.main')

@section('content')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Input Data User</h1>
  </div>

  <div class="row">
    <div class="col-6">


<form action="/dashboard-user" method="post">
    @csrf
      <div class="mb-3">
        <label for="name" class="form-label">Nama </label>
        <input type="text" class="form-control @error('name') is-invalid @enderror"
        name="name" id="name" value="{{ old('name') }}">
        @error('name')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror

      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control @error('email') is-invalid @enderror"
        name="email" id="email" value="{{ old('email') }}">
        @error('email')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">password </label>
        <input type="password" class="form-control @error('password') is-invalid @enderror"
        name="password" id="password" value="{{ old('password') }}">
        @error('password')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>

      {{-- <div class="mb-3">
        <label for="password" class="form-label">password</label>
        <textarea class="form-control" id="password" name="password" rows="3"></textarea>
      </div> --}}
      <div class="mb-3">

        <input type="submit" class="btn btn-primary" name="submit">
      </div>
</form>
</div>
</div>
@endsection
