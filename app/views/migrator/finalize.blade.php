@extends('layouts.bootstrap')
@section('content')
<a href="{{url('download\migrations\\').Session::get('uniqid')}}">Download Migrations</a>
<a href="{{url('download\seeds\\').Session::get('uniqid')}}">Download Seed Files</a>
<a href="{{url('download\sql\\').Session::get('uniqid')}}">Download SQL File</a>
@stop