<header>

    <div id="menu-bar" class="fas fa-bars"></div>

    <a href="#" class="logo"><span>T</span>ravel</a>

    <nav class="navbar">
        <a href="/">home</a>
        <a href="services">Activity</a>
        <a href="about">about</a>
        <a href="contact">contact</a>
    </nav>

    {{-- <div class="icons">
        <i class="fas fa-search" id="search-btn"></i>

        <i class="fas fa-user" id="login-btn"></i>
    </div> --}}

    <div class="dropdown row">
       
            <i class="fas fa-user " style=" font-size:3rem; color:white;" data-bs-toggle="dropdown" aria-expanded="false"></i>
       
        <ul class="dropdown-menu "  style="color:black">
          <li><a class="dropdown-item btn p-1" style="color:black !important" href="#">Register</a></li>
          <li><a class="dropdown-item btn p-1" style="color:black !important" href="#">LogIn</a></li>
        </ul>
      </div>

    <form action="" class="search-bar-container">
        <input type="search" id="search-bar" placeholder="search here...">
        <label for="search-bar" class="fas fa-search"></label>
    </form>

</header>

<!-- login form container  -->
<div class="login-form-container">

    <i class="fas fa-times" id="form-close"></i>

    <form action="">
        <h3>login</h3>
        <input type="email" class="box" placeholder="enter your email">
        <input type="password" class="box" placeholder="enter your password">
        <input type="submit" value="login now" class="btn">
        <input type="checkbox" id="remember">
        <label for="remember">remember me</label>
        <p>forget password? <a href="#">click here</a></p>
        <p>don't have and account? <a href="#">register now</a></p>
    </form>

</div>