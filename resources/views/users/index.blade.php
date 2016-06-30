@extends('master')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Usuários</div>
				<div class="panel-body">
				    <ul>
                        @foreach($users as $user)
                           <li>{{{ $user->name }}}</li>
                        @endforeach
                    </ul>
                    @stop
				</div>
			</div>
		</div>
	</div>
</div>
@endsection