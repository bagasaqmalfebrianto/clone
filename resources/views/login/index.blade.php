<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Sign In</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- STYLE CSS -->
		<link rel="stylesheet" href="css/login.css">
        <link rel="shortcut icon" href="/front/img/logo.jpeg">
	</head>
    <body>
    <div class="container">
      <div class="login">
         <div class="container">

              <h1>Sign in</h1>
              @if (Session::has('loginError'))
              <div class="alert alert-danger">
                  {{ Session::get('loginError') }}
              </div>
          @endif

          @if (Session::has('success'))
              <div class="alert alert-success">
                  {{ Session::get('success') }}
              </div>
          @endif

          <form action="/login" method="POST">
              @csrf
              <input type="email" id="email" name="email" placeholder="Email" required>
              <input type="password" id="pass" name="password" placeholder="Password" required><br>
              <input type="checkbox"><span>Ingat saya</span>
              <a href="#">Lupa kata sandi?</a>
              <button>log in</button>
          </form>
              <span>Have an Account? <a href="/register" class="login-here">Create Here.</a></span>
         </div>
      </div>
      <div class="register">
        <div class="container">
            <i class="fas fa-user-plus fa-5x"></i>
            <h2>Hello, friend!</h2>
            <p>Ayo Daftar di iGenProtection.</p>
            <a href="/register" class="register-link">Register</a>
        </div>
    </div>

    </div>

    {{-- @include('sweetalert::alert') --}}
	</body>
</html>
