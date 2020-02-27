@extends('layouts.master')
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
            <div class="col-6 d-flex justify-content-center mt-4">
                <h1>{{$disciplina->titulo}}</h1>
            </div>
        </div>
        <div class="row ml-5 mb-5">
            <div style="border: 1px solid;" class="offset-7 col-2 text-center">
                <a href="disciplinas/create">Cadastrar nova disciplina</a>
            </div>
        </div>
    </div>
    <div class="row mb-5 pl-5">
        <div style="border: 2px solid;" class="col-5 pl-2">
            <p>Ementa: {{$disciplina->ementa}}</p>
        </div>
        <div style="border: 2px solid;" class="col-3">
            <p>Data de criação: {{$disciplina->created_at}}</p>
        </div>
        <div style="border: 2px solid;" class="col-3">
            <p>Data de atualização: {{$disciplina->updated_at}}</p>
        </div>
    </div>
    <div class="row">
        <div class="col-12 ml-5">
            <h2>Turmas: </h2>
            @foreach ($disciplina->turmas as $turma)
            <div class="row ml-1">
                <div style="padding-left: 10px; border: 1px solid;" class="col-2">
                    {{ $turma->ministrante }}
                    
                </div>
                <div style="padding-left: 10px; border: 1px solid;"class="col-2">
                    {{ $turma->inicio }}
                </div>
            </div>
            @endforeach
            <br>
            <a href="/disciplinas/{{ $disciplina->id }}/turmas/create">Inserir Turma</a>
            <br>
            <br>
            <br>
            <a href="/">< Voltar</a>
        </div>

    </div>

</body>

</html>