<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>{{$title}}</title>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Rubik:400,700'>
  <link rel="stylesheet" href="{{asset('assets/css/login.css')}}">

</head>
<body>
<!-- partial:index.partial.html -->
<section class="login">
    <div class="login-form">
      <form>
        <h1>Login</h1>
        <div class="content">
          <div class="input-field">
            <input type="email" placeholder="Email" autocomplete="nope">
          </div>
          <div class="input-field">
            <input type="password" placeholder="Password" autocomplete="new-password">
          </div>
          <a href="#" class="link">Forgot Your Password?</a>
        </div>
        <div class="action">
          {{-- <button>Register</button> --}}
          <button>Sign in</button>
        </div>
      </form>
    </div>
</section>
<!-- partial -->
  <script  src="{{asset('assets/js/login.js')}}"></script>

</body>
</html>