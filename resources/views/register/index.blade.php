<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Register</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- STYLE CSS -->
		<link rel="stylesheet" href="css/register.css">
        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.2.0/fonts/remixicon.css" rel="stylesheet">
        <link rel="shortcut icon" href="/front/img/logo.jpeg">
	</head>

	<body>
        {{-- @include('sweetalert::alert') --}}
    <div class="container">
      <div class="login">
         <div class="container">
              <h1>Sign Up</h1>
              @if (Session::has('errors'))
              <ul>
                @foreach (Session::get('errors') as $error)
                <li style="color:red">{{$error[0]}}</li>
                @endforeach
              </ul>
              @endif
              <form action="/register" method="post" id="registrationForm">
                  @csrf
                  <input type="text" name="no_lac" id="no_lac"  placeholder="Nomer Lac" autofocus required value="{{ old('no_lac') }}">
                  <input type="text" name="no_polis" id="no_polis"  placeholder="Nomer Polis" autofocus required value="{{ old('no_polis') }}">
                  <input type="text" name="username" id="username"  placeholder="Username" autofocus required value="{{ old('username') }}">
                  <input type="text" name="email" id="email"  placeholder="Email" autofocus required value="{{ old('email') }}">
                  <input type="hidden" name="is_polis" id="is_pembeli" autofocus required value="1">
                  <div class="password-container">
                        <input required type="password" name="password" id="password" placeholder="Password">
                        <i class="ri-eye-fill" id="togglePassword1"></i>
                    </div>
                  <div class="password-container">
                        <input required type="password" name="konfirmasi_password" id="konfirmasi_password" placeholder="Konfirmasi Password">
                        <i class="ri-eye-fill" id="togglePassword2"></i>
                    </div>

                  <button type="submit">Register</button>
              </form>
              <span>Have an Account? <a href="/login" class="login-here">Login here.</a></span>
         </div>
      </div>

    </div>
    @include('sweetalert::alert')
	</body>
    <script src="/admin_asset/vendor/jquery/jquery.min.js"></script>
    <script>
      const passwordInput = document.getElementById("password");
      const konfirmasiInput = document.getElementById("konfirmasi_password");
      const togglePasswordIcon1 = document.getElementById("togglePassword1");
      const togglePasswordIcon2 = document.getElementById("togglePassword2");

      togglePasswordIcon1.addEventListener("click", function () {
          if (passwordInput.type === "password") {
              passwordInput.type = "text";
              togglePasswordIcon1.classList.remove("ri-eye-fill");
              togglePasswordIcon1.classList.add("ri-eye-off-fill");
          } else {
              passwordInput.type = "password";
              togglePasswordIcon1.classList.remove("ri-eye-off-fill");
              togglePasswordIcon1.classList.add("ri-eye-fill");
          }
      });

      togglePasswordIcon2.addEventListener("click", function () {
          if (konfirmasiInput.type === "password") {
              konfirmasiInput.type = "text";
              togglePasswordIcon2.classList.remove("ri-eye-fill");
              togglePasswordIcon2.classList.add("ri-eye-off-fill");
          } else {
              konfirmasiInput.type = "password";
              togglePasswordIcon2.classList.remove("ri-eye-off-fill");
              togglePasswordIcon2.classList.add("ri-eye-fill");
          }
      });
    </script>
</html>
