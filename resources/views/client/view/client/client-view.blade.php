@extends("layouts.template")
@section("title", "cliente")
@section("content")

<div class="container">
    <div class="jumbotron">
        <h1 class="display-4"><?php echo $client->name ?></h1>
        <p class="lead">Email: <?php echo $client->email ?></p>
        <hr class="my-4">
        <p><?php echo $client->age ?> Anos</p>
        <p class="lead">
            <a class="btn btn-primary btn-lg" href="{{route('clients.get.view')}}" role="button">Ver Clientes</a>
        </p>
    </div>
</div>

@endsection