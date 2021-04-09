@extends("layouts.template")
@section("title", "Editar Cliente")
@section("content")
<div class="container mt-4">

    <a href="{{route('clientes')}}" type="button" class="mt-4 mb-4 btn btn-primary">Voltar</a>

    <form method="POST" action="{{route('clientes.editar', $cliente)}}">
        @csrf
        @method("put")

        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label>Nome</label>
                    <input type="text" class="form-control" id="" name="nome" value="{{$cliente->nome}}">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>CPF</label>
                    <input type="text" class="form-control" id="" name="cpf" value="{{$cliente->cpf}}">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Idade</label>
                    <input type="text" class="form-control" id="" name="idade" value="{{$cliente->idade}}">
                </div>
            </div>
        </div>

        <div class="form-group mt-4">
            <label>Descrição</label>
            <input type="email" class="form-control" id="" name="email" value="{{$cliente->email}}">
        </div>
        <button type="submit" class="btn btn-primary mt-4">Enviar</button>
    </form>
</div>
@endsection