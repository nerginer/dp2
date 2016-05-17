@extends('layouts.app')
<script id="dsq-count-scr" src="//makerstorage.disqus.com/count.js" async></script>
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-3">
            @include('category',['categories'=>$categories])
            
            @include('tag',['tags'=>$tags])
            
        </div>    
        <div class="col-sm-9">    
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row">
                        <h3 class="panel-title" style="padding-left:15px;">Design Patterns (total:{!!  $dps->total() !!})</h3>
                        @include('search',['url'=>'/dp_q','link'=>'dps/create'])
                    </div>
                    
                </div>
                    
                 
                <div class="panel-body">
                    All Design Patterns 
                    @if (isset($tag) && $tag!==0)
                           <b> <br> tag: {{$tag->name}}</b>
                    @endif
                    @if (isset($category))
                           <b> <br> category: {{$category->name}}</b>
                    @endif
                        
                    @if (count($dps) === 0)
                        <br> <b>No Design Pattern Found</b>
                    @endif
                    
                    <div><br></div>
                    
                    
                    
                    
                    <div class="row">    
                        @foreach ($dps as $dp)
                        <div class="col-sm-6">
                            <a href="/dps/{{ $dp->id }}">
                                <div class="card " >
                                     <img class="card-img-top" src="/thumbnail/{{ $dp->slug }}.jpg" height="190" width="220">                
                                     <div class="card-block">
                                         <h4 class="card-title"> {{ $dp->name }}</h4>
                                         <p class="card-text">by:{{ $dp->user->name }} &nbsp;&nbsp;&nbsp;
                                          {{   \DB::table('dp_likes')->where('dp_id',$dp->id)->count()   }}
                                         Likes: &nbsp;&nbsp;&nbsp; <a href="/dps/{{ $dp->id }}#disqus_thread"></a>
                                        
                                         
                                         </p>
                                         
                                    </div>
                                </div>   
                            </a>
                             
                                        
                        </div>    
                        @endforeach
                    </div> 
                    
                    
                
                {!! $dps->render() !!}
            </div>
        </div>
        
    </div>
</div>
</div>
@endsection
