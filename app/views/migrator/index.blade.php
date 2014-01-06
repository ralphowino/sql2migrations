@extends('layouts.bootstrap')
@section('content')
{{Form::open(array('url' => 'generate','files'=>true))}}
{{Form::label('Upload SQL File:')}}
{{Form::file('sql_file')}}

{{Form::label('Or type SQL statements')}}
{{Form::textarea('sql')}}

{{Form::label('Table Prefix')}}
{{Form::text('prefix')}}

{{Form::submit('Generate')}}
@stop