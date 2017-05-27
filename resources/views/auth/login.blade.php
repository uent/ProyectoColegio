
@extends('layouts.app')

@section('content')

<body class="page-login">
    <main class="page-content">
        <div class="page-inner">
            <div id="main-wrapper">
                <div class="row">
                    <div class="col-md-3 center">
                        <div class="panel panel-white" id="js-alerts">
                            <div class="panel-body">
                                <div class="login-box" align="center">
                                    <a href="index.html" class="logo-name text-lg text-center m-t-xs">Altavida</a>
                                    <img src="{{asset('images/altavida-logo.png')}}" style="width:100px;" >
                                    <form class="m-t-md" role="form" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <div class="form-group">
                                <input id="email" type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            

                            <div class="form-group">
                                <input id="password" type="password" class="form-control" placeholder="Contraseña" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success btn-block">Ingresar</button>
                        <a class="display-block text-center m-t-md text-sm" href="{{ route('password.request') }}">Olvidaste tu contraseña?</a>
                        
                    </form>
                                    
                                    <p class="text-center m-t-xs text-sm">2017 &copy; Altavida</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- Row -->
            </div><!-- Main Wrapper -->
        </div><!-- Page Inner -->
    </main><!-- Page Content -->
</body>

@endsection

