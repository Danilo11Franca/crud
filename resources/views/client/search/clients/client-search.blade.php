@extends("layouts.template")
@section("title", "Clientes")
@section("content")

<div class="container">

    <a href="{{route('clients.get.view')}}" type="button" class="mt-4 mb-4 btn btn-primary">Voltar</a>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>CPF</th>
                            <th>Idade</th>
                            <th>Ações</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($clients as $client)
                        <tr>
                            <td>{{$client->name}}</td>
                            <td>{{$client->cpf}}</td>
                            <td>{{$client->age}}</td>
                            <td><a title="Detalhes do cliente" class="btn btn-primary mr-1" href="{{route('client.get.view', $client->id)}}">detalhes</a>
                                <a title="Editar" class="btn btn-info mr-1" href="{{route('client.get.edit', $client)}}">editar</a>
                                <form action="{{route('client.delete.delete', $client)}}" method="POST">
                                    @csrf
                                    @method("delete")
                                    <button type="submit" class="btn btn-danger mt-1">Excluir</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            {{$clients->links()}}
        </div>
    </div>

</div>
@endsection