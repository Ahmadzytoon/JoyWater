<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="logo.png">
    <title>Checker</title>
    <link rel="stylesheet" href="{{asset('assets/Signup.css')}}">

    <script src="https://kit.fontawesome.com/73358cb070.js" crossorigin="anonymous"></script>
    
    <!-- <link rel="stylesheet" href="login.css"> -->
</head>
<body>
    
    <a href="index.html"><img  id="logoSignUp" src="logo.png" alt="logo"></a>

    <form action="{{route('user.login.check')}}" method="post" id="form" >
        @method('GET')

        @csrf

        <h2>login here</h2>
    
        <input type="email" class="form-control border border-primary"  id="signin3" aria-describedby="emailHelp" name="email" class="@error('email') is-invalid @enderror" value="{{ old('email')}}">

        @error('email')
        <div class="alert alert-danger">{{ $message }}</div>
       @enderror

{{-- _______________________________________ --}}
<input type="password" class="form-control border border-primary" id="signin4"  name="password" class="@error('password') is-invalid @enderror" value="{{ old('password')}}">

   @error('password')
        <div class="alert alert-danger">{{ $message }}</div>
       @enderror
      
        <button id="btn" type="submit" >Login</button>
    </form> 
    <script src="signup_in.js"></script>
</body>
</html>

{{-- _______________________________________ --}}
