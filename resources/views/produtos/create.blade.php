@extends('master')

@section('content')
    <div class="container-fluid">
    	<div class="row">
    		<div class="col-md-8 col-md-offset-2">
    			<div class="panel panel-default">
    				<div class="panel-heading">Novo Produto</div>
    				<div class="panel-body">

                          @if ($errors->any())
                            <div class="alert alert-danger">
                                <strong>Atenção!</strong> Os dados informados não foram validados<br><br>
                                <ul>
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                          @endif

                         {!! Form::open(['route'=>'produtos.insert']) !!}

                         <div class="form-group">
                             {!! Form::label('cod_pro', 'Código Barras:') !!}
                             {!! Form::text('cod_pro', null, ['class'=>'form-control']) !!}
                         </div>

                         <!-- Nome Form Input -->
                         <div class="form-group">
                             {!! Form::label('nome_pro', 'Descrição:') !!}
                             {!! Form::text('nome_pro', null, ['class'=>'form-control']) !!}
                         </div>

                         <div class="form-group">
                             {!! Form::label('estoque_pro', 'Qtd. Estoque:') !!}
                             {!! Form::text('estoque_pro', null, ['class'=>'form-control']) !!}
                         </div>

                         <div class="form-group">
                             {!! Form::label('custo_pro', 'Vr. Custo:') !!}
                             {!! Form::text('custo_pro', null, ['class'=>'form-control']) !!}
                         </div>

                         <div class="form-group">
                             {!! Form::label('venda_pro', 'Vr. Venda:') !!}
                             {!! Form::text('venda_pro', null, ['class'=>'form-control']) !!}
                         </div>

                         <div class="form-group">
                              {!! Form::submit('Criar Produto', ['class'=>'btn btn-primary']) !!}
                         </div>

                         {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection