@extends('template-default')
@section('content')

<div class="d-flex align-items-center min-vh-100">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-sm-12 col-md-4 shadow-lg p-3 mb-5 bg-white rounded">
                <div class="d-flex justify-content-center">
                    <img class="img-fluid logo" src="{{ asset('img/logo.png') }}">
                </div>
                <div class="row">
                    <form class="p-3" method="POST" autocomplete="off" action="{{ route('sign.up.store') }}">
                        @csrf
                            <h3 class="mt-3 fw-bold">Registre-se</h3>
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" placeholder="Nome completo">
                                <p class="text-danger">{{ $errors->first('name') }}</p>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="document" placeholder="CPF">
                                <p class="text-danger">{{ $errors->first('document') }}</p>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email"placeholder="Email">
                                <p class="text-danger">{{ $errors->first('email') }}</p>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" placeholder="Senha">
                                <p class="text-danger">{{ $errors->first('password') }}</p>
                            </div>
                        <button type="submit" class="btn btn-lg btn-primary w-100">Registrar</button>
                    </form>
                </div>
                <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        <a href="{{ route('public.signIn') }}">Já tenho uma conta</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
