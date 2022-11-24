<link rel="icon" type="image/x-icon" href="{{ asset('img/favicon/bina logo.png') }}">
<title>Bina Swalayan | Login</title>
<div class="section">
     <div class="container"> 
         <div class="form"> 
             <div class="left-side"> 
             <link rel="stylesheet" href="/login.css">
             <script src="login.js"></script>
                <form action="/loginkan" method="POST">
                    @csrf
                    <div> 
                        <span class="brand"><img src="{{ asset('img/favicon/bina logo.png') }}"><small>Bina Swalayan</small></span> 
                        <h2 class="mytitle" >L O G I N</h2>
                        <div class="form-inputs"> <input name="username" type="text" placeholder="Username"> 
                        <div class="password"> <input name="password" id="password" type="password" placeholder="Password"> <span class="showpass" onclick="toggle()"> <img id="changepasseye" src="https://i.imgur.com/d1M6y1W.jpg"> </span> <p class="random_password"></p> </div> 
                        <input id="submit_button" type="submit"> <p class="login-text">Don't have an account? <a href="/register">Register</a></p> 
                        </div>
                    </div>
                </form>
             </div> 
            <div class="right-side">
                <img src="{{ asset('img/favicon/bina logo.png') }}" width="350px" height="350px" > 
            </div> 
        </div> 
    </div>
</div>

