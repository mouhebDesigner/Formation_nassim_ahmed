@extends('layouts.layout')

@section('content')
    
<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b>Platforme d'education</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Connecter a votre compte</p>

      <form action="../../index3.html" method="post">
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Mot de passe">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Connecter</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      
      <!-- /.social-auth-links -->

      <p class="mb-1">
        <a href="forgot-password.html">J'ai oublié mon mot de passe</a>
      </p>
      <p class="mb-0">
        <a href="register.html" class="text-center">Créer un nouveau compte</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
@endsection