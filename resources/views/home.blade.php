@extends('master')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Home</div>
                @if (Session::has('flash_alert'))
                    <div class="alert alert-info">{{ Session::get('flash_alert') }}</div>
                @endif
				<div class="panel-body">
				    <b>Route Name:</b> {{ Route::current()->getUri() }} <br>
					Você está logado ! (Usuário: {{ Auth::user()->name }} )
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
