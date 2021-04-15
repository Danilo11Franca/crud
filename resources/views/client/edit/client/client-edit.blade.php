@extends("layouts.template")
@section("title", "Editar Client")
@section("content")
<div class="container mt-4">

    <a href="{{route('clients.get.view')}}" type="button" class="mt-4 mb-4 btn btn-primary">Voltar</a>

    <form method="POST" action="{{route('client.put.edit', $client)}}">
        @csrf
        @method("put")

        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label>Nome</label>
                    <input type="text" class="form-control" id="" name="name" value="{{$client->name}}">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>CPF</label>
                    <input type="text" class="form-control" id="" name="cpf" value="{{$client->cpf}}">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Idade</label>
                    <input type="text" class="form-control" id="" name="age" value="{{$client->age}}">
                </div>
            </div>
        </div>

        <div class="form-group mt-4">
            <label>Descrição</label>
            <input type="email" class="form-control" id="" name="email" value="{{$client->email}}">
        </div>
        <button type="submit" class="btn btn-primary mt-4">Enviar</button>
    </form>
</div>
@endsection