<h1>Duvida {{ $support->id }}</h1>

<form action="{{ route('supports.store') }}" method="post">
    @csrf() {{-- Criacao automatica do token de validacao csrf --}}
    <input type="text" placeholder="Assunto" name="subject" value="{{ $support->subject }}">
    <textarea name="body" cols="30" rows="5" placeholder="Descricao">{{ $support->body }}</textarea>
    <button type="submit">Enviar</button>
</form>

{{-- @method('PUT') Por default, o method de envio "Put" nao exist, entao a directiva @method cria pra mim --}}