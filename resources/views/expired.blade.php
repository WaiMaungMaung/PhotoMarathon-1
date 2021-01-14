@extends('layouts.app')
<style>
    #txtdiv{
        visibility: hidden;
        height: 100%;
    }
</style>
@section('content')
<div class="row justify-content-center">
    <div class="col-md-10">
        <div class="card">
            <div class="card-header">{{ __('Expired!') }}</div>
            <div class="card-body">
                @if ($msg != "")
                    {{ $msg }}
                @endif             
            </div>
        </div>
    </div>
</div>    
@endsection