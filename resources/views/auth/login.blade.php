@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">

        <div class="col-md-7 dark-blue">
            <div class="thumb">
                <img src="/img/logo.png" alt="">
            </div>
            <div class="text">
                <h2>Seja bem-vindo ao Ocorrente</h2>
                <h3>Aqui seu registro será atendido em menos de 8 minutos.</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <a href="/register" class="btn btn-primary btn-first">Registre-se agora</a>
            </div>

                    <nav class="navbar-first">
                    <a href="">Política de privacidade</a>
                    <a href="">Arquivos</a>
                    <a href="">Entrar</a>
                    <a href="">Registrar-se</a>
                 </nav>

        </div>

        <div class="col-md-5 light-blue">
                <div class="card-body">
                    <h2 class="text-center light-blue-text">Entre com sua conta existente no Ocorrente</h2>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label  style="color: #1976d2;" for="email" class="col-sm-4 col-form-label text-md-right" >{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="E-mail" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label style="color: #1976d2;" for="password" class="col-md-4 col-form-label text-md-right">{{ __('Senha') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Senha" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <p class="form-check-label" for="remember">
                                        Lembrar-me
                                    </p>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Entrar') }}
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Esqueceu-se da senha?') }}
                                </a><br><br>
                                <span class="text-center">Ou</span>
                                <br>
                                <a  href="/register" class="btn btn-primary btn-second mt-4">Cadastre-se agora</a>
                            </div>
                        </div>

                    </form>
                </div>
            </div>

            <nav class="navbar-last">
                <a href="">Política de privacidade</a>
                <a href="">Arquivos</a>
                <a href="">Entrar</a>
                <a href="">Registrar-se</a>
           </nav>

    </div>
</div>

@endsection
