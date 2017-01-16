@extends ('layouts.app')

@section ('content')

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<ul class="breadcrumb">
				<li><a href="{{url ('/home')}}" >Dashboard</a></li>
				<li  class="active">Penulis</li>
			</ul>

			<div class="panel panel-default">
				<div class="panel-heading">
					<h2 class="panel-title">Penulis</h2>
				</div>
					
				<div class="panel-body">
				<p><a class="btn btn-success" href="{{route('authors.create')}}" >tambah</a></p>

					{!!$isi->table(['class'=>'table-striped','style'=> 'color:black;' ]) !!}
				</div>
			</div>
		</div>
	</div>
</div>	
@endsection

@section('scripts')
 {!!$isi->scripts() !!}

@endsection