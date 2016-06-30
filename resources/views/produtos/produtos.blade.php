@extends('master')

@section('content')
    <div class="container-fluid">
    	<div class="row">
    		<div class="col-md-8 col-md-offset-2">
    			<div class="panel panel-default">
    				<div class="panel-heading">Produtos</div>
    				<div class="panel-body">
    				    <a href="{{ route('produtos.create') }}" class="btn btn-default">Novo Produto</a>
    				    <br /><br />

                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Código</th>
                                    <th>Descrição</th>
                                    <th>Qtd. Estoque</th>
                                    <th>Vr. Custo</th>
                                    <th>Vr. Venda</th>
                                    <th>Ação</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($produtos as $produto)
                                    <tr>
                                        <td>{{ $produto->cod_itens }}</td>
                                        <td>{{ $produto->cod_pro }}</td>
                                        <td>{{ $produto->nome_pro }}</td>
                                        <td>{{ $produto->estoque_pro }}</td>
                                        <td>{{ $produto->custo_pro }}</td>
                                        <td>{{ $produto->venda_pro }}</td>
                                        <td>
                                            <a href="{{ route('produtos.edit',['id'=>$produto->cod_itens]) }}" class="btn-sm btn-success">Editar</a>
                                            <a href="{{ route('produtos.delete',['id'=>$produto->cod_itens]) }}" class="btn-sm btn-danger">Remover</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="pagination"> <?php echo $produtos->render(); ?> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection