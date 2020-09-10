@include('layouts.head')
    <a href="{{route('manipulate_produto')}}">ADICIONAR</a>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>NOME</th>
                <th>TIPO</th>
                <th>PREÇO</th>
                <th>AÇÕES</th>
            </tr>
        </thead>
        <tbody>
            @if (count($produtos) > 0)
                @foreach ($produtos as $produto)
                    <tr>
                        <td>{{$produto->nome}}</td>
                        <td>{{$produto->tipo}}</td>
                        <td>{{$produto->preco}}</td>
                        <td>
                            <a href="{{route('manipulate_produto', $produto->id)}}">ALTERAR</a>
                            <br>
                            <a href="{{route('destroy_produto', $produto->id)}}">DELETAR</a>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="5">SEM REGISTROS</td>
                </tr>
            @endif
        </tbody>
    </table>
@include('layouts.footer')
