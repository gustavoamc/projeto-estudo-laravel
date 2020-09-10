@include('layouts.head')
{!! Form::model((isset($produto) ? $produto : null), ['url' => route('manipulation_produto', (isset($produto) ? $produto->id : null)), 'method' => 'POST']) !!}
    {!! Form::hidden('id') !!}
    {!! Form::label('nome', 'Nome') !!}
    {!! Form::text('nome') !!}
    {!! Form::label('tipo', 'Tipo') !!}
    {!! Form::select('tipo', [
        '' => 'Selecione',
        'pão' => 'Pão',
        'bebida' => 'Bebida',
        'doce' => 'Doce',
        'salgado' => 'Salgado'
    ]) !!}
    {!! Form::label('preco', 'Preço') !!}
    {!! Form::text('preco') !!}
    {!! Form::submit('Enviar') !!}
{!! Form::close() !!}
@include('layouts.footer')
