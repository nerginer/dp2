@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Proposal</div>
                 
                <div class="panel-body">
                   
                    <div><br></div>
                   
                       
                    
                        
                       
                        <div>
                            <p><b>Name: {{ $proposal->name }}</b></p>
                            <p><b>Loaded here by:</b>{{ $proposal->user->name }}</p>
                        </div>
                       
                        <br>
                        
                        
                        <p style="text-align: justify;"><b>Description:</b> {{ $proposal->description }}</p>
                        
                        
                         <b>Design Patterns used in this Proposal:</b>
                        <ul>
                        
                             @foreach ($proposal->dps as $dp)
                                  
                                <a href="/dps/{{ $dp->id }}"> <li> {{ $dp->name }}</li></a>
                             
                            @endforeach
                        
                        </ul>
                        
                         
                        <b>Tags:</b>
                        <ul>
                        
                             @foreach ($proposal->tags as $tag)
                                  
                                <a href="tags/{{ $tag->id }}"> <li> {{ $tag->name }}</li></a>
                             
                            @endforeach
                        
                        </ul>
                        
                        
                      
                      
                      
                                                    
                      
                      
                      
                      
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
