@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Download your merged schematic:</div>
                 
                <div class="panel-body">
                    
                   
                      
                        <div><b><a href="/download_sch/{{ $myoutput }}">{{ $myoutput }}</a></b></div>
                    
                    
                    
                    
                   
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection