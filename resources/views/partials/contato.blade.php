<div class="panel @if($pessoa->sexo == 'M') panel-info @else panel-danger @endif">
    <div class="panel-heading">
        <h3 class="panel-title">
            @if($pessoa->sexo == 'M')
                <i class="fa fa-male"></i>
            @else
                <i class="fa fa-female"></i>
            @endif
            {{$pessoa->apelido}}
            <span class="pull-right">
                <a href="#" class="btn btn-success btn-xs" data-toggle="tooltip" data-placement="top" title="Editar"><i class="fa fa-edit"></i></a>
                <a href="{{route('contato.destroy', ['id' => $pessoa->id])}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Excluir contato"><i class="fa fa-minus-circle"></i></a>
            </span>
        </h3>
    </div>
    <div class="panel-body">
        <h3>{{$pessoa->nome}}</h3>
        <table class="table table-hover">
            @foreach($pessoa->telefones as $telefone)
                <tr>
                    <td>{{$telefone->descricao}}</td>
                    <td>{{$telefone->numero}}</td>
                    <td>
                        <a href="{{route('telefone.destroy', ['id'=>$telefone->id])}}" class="text-danger" data-toggle="tooltip" data-placement="top" title="Excluir telefone"><i class="fa fa-minus-circle"></i></a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</div>