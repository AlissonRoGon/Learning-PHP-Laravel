<h1>{{$disciplina->titulo}}</h1>
<p>Ementa: {{$disciplina->ementa}}</p>
<p>Data de criação: {{$disciplina->created_at}}</p>
<p>Data de atualização: {{$disciplina->updated_at}}</p>

<a href="/disciplinas/{{$disciplina->id}}/edit">Editar</a>
<br>
<br>
<a href="/">Voltar</a>