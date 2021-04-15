@extends("layouts.template")
@section("title", "Criar Cliente")
@section("content")
<div class="container mt-4">
    <form method="POST" action="{{route('client.post.new')}}">
        @csrf

        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label>Nome</label>
                    <input type="text" class="form-control" id="" name="name">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>CPF</label>
                    <input type="text" class="form-control" id="" name="cpf">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Idade</label>
                    <input type="text" class="form-control" id="" name="age">
                </div>
            </div>
        </div>

        <div class="form-group mt-4">
            <label>email</label>
            <input type="email" class="form-control" id="" name="email">
        </div>
        <button type="submit" class="btn btn-primary mt-4">Enviar</button>
    </form>
</div>
@endsection