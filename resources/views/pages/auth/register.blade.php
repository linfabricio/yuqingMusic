@extends('layout.master2')

@section('content')
<div class="page-content d-flex align-items-center justify-content-center">

  <div class="row w-100 mx-0 auth-page">
    <div class="col-md-8 col-xl-6 mx-auto">
      <div class="card">
        <div class="row">
          <div class="col-md-4 pr-md-0">
            <div class="auth-left-wrapper unique-background" style="background-image: url('{{ asset('img/99bed7580186626809f7a16c029df471.jpg') }}');">
            </div>
          </div>
          <div class="col-md-8 pl-md-0">
            <div class="auth-form-wrapper px-4 py-5">
              <a href="#" class="noble-ui-logo logo-light d-block mb-2">yuqing<span>Music</span></a>
              <h5 class="text-muted font-weight-normal mb-4">Create una cuenta!</h5>
              <form class="forms-sample">
                <div class="form-group">
                  <label for="exampleInputUsername1">Nombre del usuario</label>
                  <input type="text" class="form-control" id="exampleInputUsername1" autocomplete="Username" placeholder="Username">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Contraseña</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" autocomplete="current-password" placeholder="Password">
                </div>
                <div class="form-check form-check-flat form-check-primary">
                  <label class="form-check-label">
                    <input type="checkbox" class="form-check-input">
                    Recuerdame
                  </label>
                </div>
                <div class="mt-3">
                    <a href="{{ url('/') }}" class="btn btn-primary mr-2 mb-2 mb-md-0">Logear</a>
                  </div>
                <a href="{{ url('/auth/login') }}" class="d-block mt-3 text-muted">Ya tienes una cuenta? Logeate!</a>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>
@endsection
