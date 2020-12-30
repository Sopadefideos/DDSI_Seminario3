<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Seminario3!</title>
</head>

<body>
    <h1>Seminario3!</h1>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('add') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Nombre</label>
                    <input type="text" class="form-control" name="nombre">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

        <ul class="list-group">
            @isset($nombres):
                @forelse ($nombres as $nombre):
                    <li class="list-group-item">{{ $nombre->name }}</li>
                @empty 
                    <li class="list-group-item">No hay ningun nombre para listar</li>
                @endforelse
            @else:
                <li class="list-group-item">No hay ningun nombre para listar</li>
            @endisset

        </ul>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
    </script>


</body>

</html>