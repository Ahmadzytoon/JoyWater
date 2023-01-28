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
    <form action="{{route('user.signup.store')}}" method="post" id="form" >
        @csrf

        <h2>Sign up here</h2>
    
        <input type="text" class="form-control border border-primary" name="name"  id="signin1" value="{{ old('name')}}"  aria-describedby="emailHelp" class="@error('name') is-invalid @enderror">
        <p id="sigh1">    
             @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
           @enderror</p>
    {{-- _______________________________________ --}}
      
     {{-- _______________________________________ --}}
        <input type="email" class="form-control border border-primary" name="email" id="signin3" value="{{ old('email')}}" aria-describedby="emailHelp" class="@error('email') is-invalid @enderror">

        <p id="sigh3">
            @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
           @enderror
        </p>



     {{-- _______________________________________ --}}
     <input type="number" class="form-control border border-primary" name="phone" id="signin4" value="{{ old('phone')}}" aria-describedby="emailHelp" class="@error('phone') is-invalid @enderror">
       
        <p id="sigh4">
            @error('phone')
            <div class="alert alert-danger">{{ $message }}</div>
           @enderror
        </p>


    {{-- _______________________________________ --}}
    <input type="password" class="form-control border border-primary" id="signin5"  name="password" value="{{ old('password')}}" class="@error('password') is-invalid @enderror">

        <p id="sigh5">
            @error('password')
            <div class="alert alert-danger">{{ $message }}</div>
           @enderror
        </p>
        <p class="mb-0  text-center">Do you have an account? <a href="{{route('user.login')}}"
            class="text-primary fw-bold">Login</a></p>

     {{-- _______________________________________ --}}
        <button id="btn" type="submit" >Register</button>
         
    </form> 
</body>
</html>


{{-- _______________________________________ --}}

<div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control border border-primary" id="exampleInputPassword1" name="password" value="{{ old('password')}}" class="@error('password') is-invalid @enderror">
    @error('password')
    <div class="alert alert-danger">{{ $message }}</div>
   @enderror
</div>
{{-- <p class="small"><a class="text-primary" href="forget-password.html">Forgot password?</a></p> --}}
<div class="d-grid">
    <button class="btn btn-primary" type="submit">Sign Up</button>
</div>
</form>
<div class="mt-3">
<p class="mb-0  text-center">Do you have an account? <a href="{{route('user.login')}}"
        class="text-primary fw-bold">Login</a></p>
</div>
</div>
</div>