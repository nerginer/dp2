@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Proposal</div>
                 
                <div class="panel-body">
                   
                    <div><br></div>
                   
                       
                            <?php $proposal->increment('views'); ?> 
                        
                       
                        <div>
                            <p><b>Name: {{ $proposal->name }}</b></p>
                            <p><b>Loaded here by:</b>{{ $proposal->user->name }}</p>
                        </div>
                       
                        <br>
                         <p><b>Download single merged schematic file:</b> Coming Soon</p>
                        <br>
                        <p style="text-align: justify;"><b>Description:</b> {{ $proposal->description }}</p>
                        
                        
                         <b>Design Patterns used in this Proposal:</b>
                        <ul>
                             <?php $temp=''; ?> {{--bu değişken arka arkaya aynı categoryi yazmamak için--}}
                             @foreach ($proposal->dps as $dp)
                                 @foreach ($dp->categories as $cat)
                                     @if (($cat->parent_id!=0)  and ($temp!=$cat->name)) 
                                       {{$cat->name}}
                                        <?php $temp=$cat->name; ?>  
                                     @endif 
                                 @endforeach
                                 
                                 
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
