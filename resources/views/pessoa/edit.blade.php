@extends('layout')

@section('content')
    <div class="col-md-6">
        <form action="{{route('pessoa.update', ['id'=>$pessoa->id])}}" method="post">
            <input type="hidden" name="_method" value="put">
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" name="nome" class="form-control" id="nome" placeholder="Nome completo" value="{{$pessoa->nome}}">
            </div>
            <div class="form-group">
                <label for="apelido">Apelido</label>
                <input type="text" name="apelido" class="form-control" id="apelido" placeholder="Apelido" value="{{$pessoa->apelido}}">
            </div>
            {{--<div class="form-group">--}}
                {{--<label for="exampleInputFile">File input</label>--}}
                {{--<input type="file" id="exampleInputFile">--}}
                {{--<p class="help-block">Example block-level help text here.</p>--}}
            {{--</div>--}}
            <div class="checkbox">
                <label>
                    <input type="radio" name="sexo" value="M" {{($pessoa->sexo == 'M') ? 'checked' : null }}> <i class="fa fa-male"></i>
                    <input type="radio" name="sexo" value="F" {{($pessoa->sexo == 'F') ? 'checked' : null }}> <i class="fa fa-female"></i>
                </label>
            </div>
            <button type="submit" class="btn btn-primary">Atualizar</button>
        </form>
    </div>
    <div class="col-md-6">
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @include('partials.telefone', ['telefones' => $pessoa->telefones])
    </div>
@endsection