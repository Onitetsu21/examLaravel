<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">



<form method="post" action="{{route('CreateCommandPost')}}">
    @csrf
    <div class="form-group row">
        <label for="staticEmail" class="col-sm-2 col-form-label">Nom de la commande</label>
        <div class="col-sm-10">
            <input type="text" name="name" class="form-control-plaintext" id="staticEmail" placeholder="entrez ici la commande">
        </div>
    </div>
    <div class="form-group row">
        <label for="staticEmail" class="col-sm-2 col-form-label">Description</label>
        <div class="col-sm-10">
            <input type="text" name="description" class="form-control-plaintext" id="staticEmail" placeholder="entrez ici la description">
        </div>
    </div>

    <button type="submit" class="btn btn-primary mb-2">Créer</button>

</form>
