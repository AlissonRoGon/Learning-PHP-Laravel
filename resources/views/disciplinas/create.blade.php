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
        <div class="row">
            <div class="col-12 text-center mt-5">
                <h1>Cadastro de Disciplina</h1>
            </div>
            <div class="col-12 d-flex justify-content-center mt-4">
                <form method="POST" action="/disciplinas">
                    {{csrf_field()}}
                    <input class="mb-2" style="width:100%;" name="titulo" placeholder="Insira o titulo da disciplina...">
                    <textarea style="width:100%;" name="ementa" placeholder="Descreva a ementa da disciplina..."></textarea>
                    <div class="d-flex justify-content-center">
                        <button type="submit"> Salvar </button>
                    </div>

                </form>
            </div>
        </div>
        <div class="row mt-5 ml-5">
            <a href="/">
                < Voltar 
            </a> 
        </div> 
    </div> 
</body> 
</html>