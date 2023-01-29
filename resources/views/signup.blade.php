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
    
        <input type="text"  name="name"  id="signin1" value="{{ old('name')}}"  aria-describedby="emailHelp" class="@error('name') is-invalid @enderror">
        <p id="sigh1">    
             @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
           @enderror</p>
    {{-- _______________________________________ --}}
      
     {{-- _______________________________________ --}}
        <input type="email"  name="email" id="signin3" value="{{ old('email')}}" aria-describedby="emailHelp" class="@error('email') is-invalid @enderror">

        <p id="sigh3">
            @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
           @enderror
        </p>



     {{-- _______________________________________ --}}
     <input type="number"  name="phone" id="signin4" value="{{ old('phone')}}" aria-describedby="emailHelp" class="@error('phone') is-invalid @enderror">
       
        <p id="sigh4">
            @error('phone')
            <div class="alert alert-danger">{{ $message }}</div>
           @enderror
        </p>


    {{-- _______________________________________ --}}
    <input type="password"  id="signin5"  name="password" value="{{ old('password')}}" class="@error('password') is-invalid @enderror">

        <p id="sigh5">
            @error('password')
            <div class="alert alert-danger">{{ $message }}</div>
           @enderror
        </p>
        <p class="">Do you have an account? <a href="{{route('user.login')}}"
            class="">Login</a></p>

     {{-- _______________________________________ --}}
        <button id="btn" type="submit" >Register</button>
         
    </form> 
</body>
</html>


{{-- _______________________________________ --}}

