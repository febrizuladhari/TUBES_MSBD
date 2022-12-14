<link rel="icon" type="image/x-icon" href="{{ asset('img/favicon/bina logo.png') }}">
<title>Bina Swalayan | Login</title>
<div class="section" style="background-color: blue">
    @include('sweetalert::alert')
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
                        <span class="brand">Bina Swalayan</span>
                        <h2 class="mytitle" >LOGIN</h2>
                        @error('login_gagal')
                        <br>
                        <h4 class="mytitle" style="color: red">{{ $message }}</h4>
                        @enderror
                        @error('login_error')
                        <br>
                        <h4 class="mytitle" style="color: red">{{ $message }}</h4>
                        @enderror
                        <div class="form-inputs">
                            <label for="username" class="form-label">Username</label>
                            <input name="username" type="text" placeholder="Username" id="username">
                            <div class="password">
                                <label for="password" class="form-label">Password</label>
                                <input name="password" id="password" type="password" placeholder="Password" required> <span class="showpass" onclick="toggle()"><p class="random_password"></p>
                            </div>
                            <button ></button>
                            <input id="submit_button" type="submit">
                        </div>
                    </div>
                </form>
            </div>
            <div class="right-side" style="background-color: white">
                <img src="{{ asset('img/favicon/bina logo.png') }}" width="350px" height="350px" >
            </div>
        </div>
    </div>
</div>
