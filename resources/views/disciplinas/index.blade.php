<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Other links -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/ad4cd082d3.js" crossorigin="anonymous"></script>

    <!-- Styles -->
    <style>
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row  mb-5">
            <div class="col-6 d-flex justify-content-center mt-4">
                <h1>Home Disciplinas</h1>
            </div>
            <div class="col-6 d-flex align-items-center justify-content-around">
                <div style="border: 1px solid; padding:5px;" >
                    <a href="disciplinas/create">Cadastrar nova disciplina</a>
                </div>
            </div>
        </div>
    </div>
    @foreach ($disciplinas as $disciplina)
    <div style="border: 2px solid;" class="row mx-5 mb-5">
        <div class="col-6 d-flex justify-content-center align-items-center">
            <h3>Título: &nbsp;</h3>
            <a style=" font-size: 25px;" href="/disciplinas/{{$disciplina->id}}">
                {{$disciplina->titulo }}
            </a>
        </div>
        <div class="col-6 mb-1">
            <div class="col-12 d-flex justify-content-center">
                <a href="/disciplinas/{{$disciplina->id}}/edit">Editar</a>

            </div>
            <div class="col-12 d-flex justify-content-center">
                <form method="POST" action="/disciplinas/{{$disciplina->id}}">
                    {{csrf_field()}}
                    {{method_field('delete')}}
                    <button style="color: white; border-radius: 5px; background-color: blue; border: none;" type="submit">Apagar</button>
                </form>
            </div>
        </div>
    </div>
    @endforeach
</body>

</html>