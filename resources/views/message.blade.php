@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Message:</div>
                 
                <div class="panel-body">
                    
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    
                    @endif
                    
                     @if (count($message) > 0)
                       
                        <div>{{$message}}</div>
                    
                    @endif
                    
                    
                   
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection