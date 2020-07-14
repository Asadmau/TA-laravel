<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Register Form</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="{{ url('assets/css/normalize.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/cs-skin-elastic.css') }}">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="{{ url('assets/scss/style.css') }}">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>

<body class="bg-dark">
    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <a href="{{route('register')}}">
                        <img class="align-content" src="{{ url('images/logo.png') }}" alt="">
                    </a>
                </div>
                <form class="card" method="POST" action="{{url('/register')}}">
                    @csrf
                    <div class="card-header">
                        <strong>Form</strong> <small>Register</small>
                    </div>
                    <div class="card-body card-block">
                        <div class="form-group">
                            <label class=" form-control-label">User Name</label>
                            <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-male"></i></div>
                                <input type="text"
                                    class="form-control {{ $errors->has('username') ? 'is-invalid' : ''}}"
                                    placeholder="User Name" name="username" value="{{ old('username') }}" required>
                            </div>
                            @error('username')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            {{-- @if ($errors->has('username'))
                            <small class="form-text text-muted">Karakter kurang dari 5</small>
                            @endif --}}
                        </div>
                        <div class="form-group">
                            <label class=" form-control-label">Email</label>
                            <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-phone"></i></div>
                                <input type="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : ''}}"
                                    placeholder="Email" name="email" value="{{ old('email') }}" required>
                            </div>
                            @if ($errors->has('email'))
                            <small class="form-text text-muted">Email tidak valid</small>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class=" form-control-label">Password</label>
                            <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-usd"></i></div>
                                <input class="form-control {{ $errors->has('password') ? 'is-invalid' : ''}}"
                                    type="password" placeholder="Password" name="password" value="{{ old('password') }}"
                                    required>
                            </div>
                            @if ($errors->has('password'))
                            <small class="form-text text-muted">Password kurang</small>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">User Role</label>
                            <div class="form-group">
                                <select class="form-control {{ $errors->has('role') ? 'is-invalid' : ''}}" name="role"
                                    value="{{ old('role') }}" required>
                                    <option value="Admin">Admin</option>
                                    <option value="User">User</option>
                                </select>
                            </div>
                            @if ($errors->has('role'))
                            <small class="form-text text-muted">Tidak boleh kosong</small>
                            @endif
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Register</button>
                        </div>
                    </div>
                </form>
                {{-- <div class="login-form"> --}}
                {{-- action="{{ route('register') }} --}}
                {{-- <form class="form-horizontal" method="POST" ">
                    {{ csrf_field() }}
                <div class="form-group">
                    <label>User Name</label>
                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required
                        autofocus>

                    @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="form-group">
                    <label>Email address</label>
                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}"
                        required>

                    @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input id="password" type="password" class="form-control" name="password" required>

                    @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                    @endif

                    <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                        required>
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox"> Agree the terms and policy
                    </label>
                </div>
                <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Register</button>
                <div class="register-link m-t-15 text-center">
                    <p>Already have account ? <a href="#"> Sign in</a></p>
                </div>
                </form> --}}
                {{-- </div> --}}
            </div>
        </div>
    </div>

    <script src="{{ url('assets/js/vendor/jquery-2.1.4.min.js') }}"></script>
    <script src="{{ url('assets/js/popper.min.js') }}"></script>
    <script src="{{ url('assets/js/plugins.js') }}"></script>
    <script src="{{ url('assets/js/main.js') }}"></script>


</body>

</html>