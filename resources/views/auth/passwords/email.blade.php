@extends('layouts.app')

@section('content')



 <div class="page-inner">
                <div id="main-wrapper">
                    <div class="row">
                        <div class="col-md-3 center">
                            <div class="panel panel-white" id="js-alerts">
                                <div class="panel-body">
                                    <div class="login-box">
                                        <a href="index.html" class="logo-name text-lg text-center m-t-xs">Recuperar Contraseña</a>
                                        <p class="text-center m-t-md">Ingresa tu correo electronico para recibir contraseña</p>
                                        @if (session('status'))
                                            <div class="alert alert-success">
                                                {{ session('status') }}
                                            </div>
                                        @endif

                                         <form class="m-t-md" role="form" method="POST" action="{{ route('password.email') }}">
                                            {{ csrf_field() }}

                                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                               

                                                <div class="col-md-12" align="center">
                                                    <input id="email" type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}" required>

                                                    @if ($errors->has('email'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('email') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-md-6 col-md-offset-4">
                                                <br>
                                                    <button type="submit" class="btn btn-success btn-block m-b-xs">Enviar</button>
                                                    <a href="login.html" class="btn btn-default btn-block">Atrás</a>
                                                </div>
                                            </div>
                                        </form>
                                        
                                                            
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p class="text-center m-t-xs text-sm">2017 &copy; Altavida</p>
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->
            </div><!-- Page Inner -->
@endsection