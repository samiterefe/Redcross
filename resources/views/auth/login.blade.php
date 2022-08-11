<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ERC | Login</title>
    <link rel="stylesheet" href="./backend/css/auth-form.css" />
  </head>
  <body>
    <div class="wrapper">
      <div class="header">
        <a class="navbrand" href="index.html">
          <img src="./backend/assets/redcross.png" alt="logo" />
        </a>
        <ul>
          <li><a href="{{url('/login')}}">Login</a></li>
          <li><a href="{{ url('/')}}">Home</a></li>
        </ul>
      </div>
      <div class="form-container">
       <!-- Session Status -->
        
        <div class="form">
          <a class="navbrand" href="index.html">
            <img src="./backend/assets/redcross.png" alt="logo" />
          </a>
          <h1>Login into ERC</h1>

          <x-auth-session-status :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="text-blue-600/100" :errors="$errors" />
          

        
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group">
              <label for="email"  :value="__('Email')">Email</label>
              <input type="email" name="email" :value="old('email')" id="email" placeholder="Email" required autofocus/>
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" id="password" placeholder="Password"   type="password"
              name="password"
              required autocomplete="current-password"/>
            </div>
            <x-button class="ml-3">
                {{ __('Log in') }}
            </x-button>
          </form>
          No account? <a href="register.html">Register</a>
        </div>
      </div>
    </div>
  </body>
</html>
