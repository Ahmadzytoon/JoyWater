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
    <form id="form" >

        <h2>Sign up here</h2>
    
        <input id="signin1"  type="text"       placeholder="First Name">
        <p id="sigh1"></p>
    
        <input id="signin2"  type="text"       placeholder="Last Name">
        <p id="sigh2"></p>
    
        <input id="signin3"  type="email"      placeholder="E-mail">
        <p id="sigh3"></p>
    
        <input id="signin4"  type="password"   placeholder="Enter password">
        <p id="sigh4"></p>

        <input id="signin5"  type="password"   placeholder="Repassword">
        <p id="sigh5"></p>
    
        <button id="btn" onclick="func()" value="register" >Register</button>
         
    </form> 
    <script src="signup_in.js"></script>
</body>
</html>