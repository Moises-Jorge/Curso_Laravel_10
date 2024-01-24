<h1>Nova Duvida</h1>

<form action="{{ route('supports.store') }}" method="post">
    {{-- <input type="hidden" value="{{ csrf_token() }}" name="_token"> --}}
    @csrf() {{-- Criacao automatica do token de validacao csrf --}}
    <input type="text" placeholder="Assunto" name="subject">
    <textarea name="body" cols="30" rows="5" placeholder="Descricao"></textarea>
    <button type="submit">Enviar</button>
</form>