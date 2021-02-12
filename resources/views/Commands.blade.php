<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

<h1 style="text-align: center; margin: 50px">Liste collaborative des lignes de commandes php artisan</h1>

<table class="table">
    <thead>
    <tr>
        <th scope="col">Nom de la commande</th>
        <th scope="col">Description</th>
        <th scope="col">Mettre à jour</th>
        <th scope="col">Supprimer</th>

    </tr>
    </thead>
    <tbody>

    @foreach($Commands as $Command)

        <tr>
            <th scope="row">{{$Command->id}}</th>
            <td>{{$Command->name}}</td>
            <td>{{$Command->description}}</td>
            <td><a href="{{route('CommandEdit', $Command->id)}}">MAJ</a></td>
            <td>
                <form action="{{route('DeleteCommand', $Command->id)}}" method="post">
                    @csrf
                    @method('Delete')
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach

    </tbody>

</table>

<a class="btn btn-primary mb-2" href="{{route('CreateCommand')}}">Ajouter un commande !</a>
