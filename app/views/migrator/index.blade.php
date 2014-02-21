@extends('layouts.bootstrap')
@section('content')

<div class="row">
	<div class="col-md-12">
		<h1>SQL to Migratons Generator</h1>
		<div class="well">
			{{Former::vertical_open()->action('generate')->files()}}
			<div class="row">
				<div class="col-md-6">{{Former::text('prefix')->label('Table Prefix')}}</div>
				<div class="col-md-6">{{Former::file('sql_file')->label('Upload SQL File:')}}</div>
			</div>
			{{Former::textarea('sql')->label('Type SQL statements')->rows(10)}}
			{{Former::submit('Generate Migrations')->class('btn btn-success btn-lg')}}<div class="pull-right">Designed by ralphowino</div>
			{{Former::close()}}			
			
		</div>
	</div>
</div>
@stop