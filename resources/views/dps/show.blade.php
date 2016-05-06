@extends('layouts.app')

@section('content')
<script>
function likeDp(dp_id,type)
{
	$.get('{{URL::to("/")}}/dps/'+dp_id+'/like?type='+type,function(data){
		responseData=eval(data);
		var total_likes=responseData['total_likes'];
		if(type=='like')
		{
		 
		 $("#youLikeThis").show();
		 $("#likeBtn").hide();
		 $("#countSpan").text(total_likes);
		}
		else
		{
			 $("#youLikeThis").hide();
			 $("#likeBtn").show();
			 $("#countSpan").text(total_likes);
			
		}
		
	});
	
}

</script>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Design Patterns</div>
                 
                <div class="panel-body">
                    Design Patterns
                    <div><br></div>
                   
                       
                    
                        
                        <div><embed src="/sch_pdf/{{ $dp->slug }}.pdf" width="800" height="600" alt="pdf" pluginspage="http://www.adobe.com/products/acrobat/readstep2.html"></div>  
                       
                        <div>
                            <p> {{ $dp->name }}</p>
                            <p>by:{{ $dp->user->name }}</p>
                        </div>
                       
                        <br>
                        
                        
                        <p><b>Description:</b> {{ $dp->description }}</p>
                        <p><b>Licance:</b> {{ $dp->license }}</p>
                        <p><b>Product Used in:</b><a href="{{ $dp->productUsedIn }}"> {{ $dp->productUsedIn }}</a></p>
                         
                        Tags:
                        <ul>
                        
                             @foreach ($dp->tags as $tag)
                                  
                                <a href="tags/{{ $tag->id }}"> <li> {{ $tag->name }}</li></a>
                             
                            @endforeach
                        
                        </ul>
                        @if (Auth::check())
                        
                            <p>
                                <a style="@if($isUserLiked==1) 
                                             display:none; 
                                          @endif 
                                          background-color:grey;
                                          color:white"  
                                          href="javascript:;" id="likeBtn" 
                                          onclick="likeDp({{  $dp->id }},'like')" 
                                          class="btn">
                                          <span class="glyphicon glyphicon-thumbs-up"></span> Like
                                </a>
                            </p>
                              
                            <p>
                                <a  @if($isUserLiked==0) 
                                        style="display:none;" 
                                    @endif 
                                    onclick="likeDp({{  $dp->id }},'unlike')"  
                                    href="javascript:;" id="youLikeThis"  
                                    class="btn btn-primary">
                                    <span class="glyphicon glyphicon-thumbs-up"></span>Like
                                </a> 
                            </p>
                        @endif  
                      <span>Total Likes:</span><span id="countSpan"> {{ $totalLikes}}</span>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
