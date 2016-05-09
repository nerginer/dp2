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
                   
                       
                    
                        
                        <div><embed src="/sch_pdf/{{ $dp->slug }}.pdf" width="900" height="600" alt="pdf" pluginspage="http://www.adobe.com/products/acrobat/readstep2.html"></div>  
                       
                        <div>
                            <p><b> {{ $dp->name }}</b></p>
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
                      
                      
                      
                      
                                <div id="disqus_thread"></div>
                                <script>
                                /**
                                * RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                                * LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables
                                */
                                /*
                                var disqus_config = function () {
                                this.page.url = PAGE_URL; // Replace PAGE_URL with your page's canonical URL variable
                                this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                                };
                                */
                                (function() { // DON'T EDIT BELOW THIS LINE
                                var d = document, s = d.createElement('script');
                                
                                s.src = '//makerstorage.disqus.com/embed.js';
                                
                                s.setAttribute('data-timestamp', +new Date());
                                (d.head || d.body).appendChild(s);
                                })();
                                </script>
                                <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>
                                                      
                      
                      
                      
                      
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
