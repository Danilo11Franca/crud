@extends("layouts.template")
@section("title", "Clientes")
@section("content")

<div class="container">

    <a href="{{route('clientes.inserir')}}" type="button" class="mt-4 mb-4 btn btn-primary">Inserir Cliente</a>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">

        <div class="card-body">
            <div class="table-responsive">
                <form class="d-flex mb-3" method="POST" action="{{route('clientes.search')}}">
                    @csrf
                    <input class="form-control me-2" type="text" placeholder="Buscar Cliente" aria-label="Search" name="nome">
                    <button class="btn btn-outline-success" type="submit">Buscar</button>
                </form>
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
                        @foreach($clientes as $cliente)
                        <tr>
                            <td>{{$cliente->nome}}</td>
                            <td>{{$cliente->cpf}}</td>
                            <td>{{$cliente->idade}}</td>
                            <td><a title="Detalhes do Cliente" class="btn btn-primary mr-1" href="{{route('clientes.detalhes', $cliente->id)}}">detalhes</a>
                                <a title="Editar" class="btn btn-info mr-1" href="{{route('clientes.edit', $cliente)}}">editar</a>
                                <form action="{{route('clientes.delete', $cliente)}}" method="POST">
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
            {{$clientes->links()}}
        </div>
    </div>

</div>
@endsection