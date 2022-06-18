@extends('template')

@section('title', 'Arquivos')

@section('content_header')
    <h1>Arquivos</h1>
@stop

@section('content')
    <div class="row">
        <div class="col">
            <div class="card card-outline card-primary">
                <div class="card-header">
                    Formulário
                </div>
                <div class="card-body">
                    @if(!isset($arquivo))
                        {!! Form::open(['method' => 'POST', 'route' => 'arquivos.store', 'class' => 'form-horizontal', 'files' => true]) !!}
                    @else
                        {!! Form::model($arquivo, ['route' => ['arquivos.update', $arquivo->id], 'method' => 'PUT', 'class' => 'form-horizontal', 'files' => true]) !!}
                    @endif
                    
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                            {!! Form::label('nome', 'Nome') !!}
                            {!! Form::text('nome', null, ['class' => 'form-control', 'required' => 'required']) !!}
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                            {!! Form::label('keywords', 'Palavras-chaves') !!}
                            {!! Form::text('keywords', null, ['class' => 'form-control', 'required' => 'required']) !!}
                            </div>
                        </div>
                        <div class="col-md-4">
                            {!! Form::label('arquivo', 'Arquivo') !!}
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="arquivo" id="customFile">
                                <label class="custom-file-label" for="customFile">Choose file</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                            {!! Form::label('pasta', 'Pasta') !!}
                            {!! Form::text('pasta', null, ['class' => 'form-control', 'required' => 'required']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="btn-group pull-right">
                        <button class="btn btn-success">{{isset($arquivo) ? 'Atualizar' : 'Cadastrar' }}</button>
                    </div>
                    {!! Form::close() !!}
                    
                </div>
            </div>
        </div>
    </div>
@stop

@section('css')

<link href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.0.3/css/buttons.dataTables.min.css">
@endsection

@push('js')
@endpush
