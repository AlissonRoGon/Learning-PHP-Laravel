<form method="POST" action="/disciplinas">
    {{csrf_field()}}
    Nome: <input name="titulo" placeholder="Insira o titulo da disciplina...">
    Ementa: <textarea name="ementa" placeholder="Descreva a ementa da dsiciplina..."></textarea>
    <button type="submit"> Salvar </button>
</form>