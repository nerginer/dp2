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
                <div class="panel-heading">
                     <div class="row">
                       <div class="col-md-8">
                        <b> {{ $dp->name }}</b>
                       </div>
                       <div class="col-md-2">
                         <b>Price: ${{ $dp->price }}</b>
                       </div>
                       <div class="col-md-2 btn-group ">
                         <form action="/cart" method="POST">
                              {!! csrf_field() !!}
                              <input type="hidden" name="id" value="{{ $dp->id }}">
                              <input type="hidden" name="name" value="{{ $dp->name }}">
                              <input type="hidden" name="price" value="{{ $dp->price }}">
                              <input type="submit" class="btn btn-success btn-sm" value="Add to Cart">
                            </form>
                       </div>
                       
                     </div>
     
     
                     
                </div>
                 
                <div class="panel-body">
                     
                        
                       
                        
                        
                    
                   
                       
                    
                        
                        <div><embed src="/sch_pdf/{{ $dp->slug }}.pdf#page=1&view=FitV" width="100%" height="650" alt="pdf" pluginspage="http://www.adobe.com/products/acrobat/readstep2.html"></div>  
                       
                        <div>
                            
                            <p><b>Loaded here by:</b>{{ $dp->user->name }}</p>
                        </div>
                       
                        <br>
                        
                        
                        <p style="text-align: justify;"><b>Description:</b> {{ $dp->description }}</p>
                        <p><b>Licance:</b> <a href="{{ $dp->licence_link }}">{{ $dp->license }}</a></p>
                        
                        
                        <p><b>Product Used in:</b><a href="{{ $dp->productUsedIn }}"> {{ $dp->productUsedIn }}</a></p>
                         
                        <b>Tags:</b>
                        <ul>
                        
                             @foreach ($dp->tags as $tag)
                                  
                                <a href="tags/{{ $tag->id }}"> <li> {{ $tag->name }}</li></a>
                             
                            @endforeach
                        
                        </ul>
                        @if (Auth::check())
                             <p><b>Source:</b>  <a href="/eagle_sch/{{ $dp->slug }}.sch"> Eagle File </a></p>
                        @else
                             <p><b>Login to download Eagle File</b> </p>
                        @endif
                        
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
                      <span><b>Total Likes:</span><span id="countSpan"> {{ $totalLikes}}</b></span>
                      
                      
                      
                      
                                         
                      
                      
                      
                      
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
