@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-3">
        
            
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row">
                        <h3 class="panel-title" style="padding-left:15px;">Tags</h3>
                       
                    </div>
                    
                </div>
                    
                 
                <div class="panel-body">
                    
                    <ul>
                     
                        @foreach ($tags as $t)
                           <a href="/proposals/tags/{{ $t->id }}"> <li>{{ $t->name }}</li></a>
                        @endforeach
                       
                    </ul>
                   
                </div>
            </div> 
            
        </div>    
        <div class="col-sm-8">    
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row">
                        <h3 class="panel-title" style="padding-left:15px;">Proposals (total:{!!  $proposals->total() !!})</h3>
                        @include('search',['url'=>'/proposal_q','link'=>'proposals/create'])
                    </div>
                    
                </div>
                    
                 
                <div class="panel-body">
                    All Proposals 
                    @if (isset($tag) && $tag!==0)
                           <b> <br> tag: {{$tag->name}}</b>
                    @endif
                
                        
                    @if (count($proposals) === 0)
                        <br> <b>No Proposal Found</b>
                    @endif
                    
                    <div><br></div>
                    
                    <div class="row">  
                        <table class="table table-striped">
                                <thead>
                                  <tr>
                                    <th>Downloads</th>
                                    <th>Views</th>
                                    <th>Comments</th>
                                    <th>Name</th>
                                    <th>Short Description</th>
                                    <th>User</th>
                                    
                                  </tr>
                                </thead>
                                <tbody>
                                  @foreach ($proposals as $proposal)
                                      <tr>
                                        <td><a href="/proposals/{{ $proposal->id }}">{{ $proposal->vote}}</a></td> <!-- cahge to votes -->
                                        <td><a href="/proposals/{{ $proposal->id }}">{{ $proposal->views}}</a></td>
                                        <td><a href="/proposals/{{ $proposal->id }}">{{ $proposal->comments}}</a></td>
                                        <td><a href="/proposals/{{ $proposal->id }}">{{ $proposal->name}}</a></td>
                                        <td><a href="/proposals/{{ $proposal->id }}">{{ $proposal->short_description}}</a></td>
                                        <td><a href="/proposals/{{ $proposal->id }}">{{ $proposal->user->name}}</a></td>
                                      </tr>
                                        
                         
                                  @endforeach
                                </tbody>
                        </table>
                    </div> 
                    
                    
                
                {!! $proposals->render() !!}
            </div>
        </div>
        
    </div>
</div>
@endsection
