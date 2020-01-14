@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Usuário</div>

                <div class="card-body">
                <!--tudo o que está dentro do @auth só executará se o usuário estiver logado/autenticado-->
                    @auth
                        <h1>Usuário Autenticado</h1>
                        <hr>
                        <h4>Nome: {{ Auth::user()->name }}</h4>
                        <h4>email: {{ Auth::user()->email }}</h4>

                    @endauth

                    <!--tudo o que está dentro do @guest só executará se o usuário não estiver logado/autenticado-->
                    @guest
                        <h1>Usuário NÃO Autenticado</h1>
                    @endguest
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
