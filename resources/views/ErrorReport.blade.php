@extends('layouts.app')
@section('content')
{{$error->getMessage()->withInput()}}
@endsection