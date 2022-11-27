<link rel="icon" type="image/x-icon" href="{{ asset('img/favicon/bina logo.png') }}">
<title>Bina Swalayan | Login</title>
<div class="section">
     <div class="container"> 
         <div class="form">
            {{-- Error Alert --}}
            @if(session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{session('error')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif
             <div class="left-side"> 
             <link rel="stylesheet" href="/login.css">
             <script src="login.js"></script>
                <form method="POST" action="{{url('proses_login')}}">
                    @csrf
                    <div> 
                        <span class="brand"><img src="{{ asset('img/favicon/bina logo.png') }}"><small>Bina Swalayan</small></span> 
                        <h2 class="mytitle" >L O G I N</h2>
                        <div class="form-inputs"> <input name="username" type="text" placeholder="Username" id="username"> 
                        <div class="password"> <input name="password" id="password" type="password" placeholder="Password"> <span class="showpass" onclick="toggle()"><p class="random_password"></p> </div> 
                        <input id="submit_button" type="submit">
                        @error('login_gagal')
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <span class="alert-inner--text"><strong>Login Error</strong> {{ $message }}</span>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        @enderror
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