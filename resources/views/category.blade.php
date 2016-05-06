<div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row">
                        <h3 class="panel-title" style="padding-left:15px;">Categories</h3>
                       
                    </div>
                    
                </div>
                    
                 
                <div class="panel-body">
                    
                    <ul>
                        @foreach ($categories as $cat)
                          @if ($cat->parent_id==0)
                              <a href="/dps/categories/{{ $cat->id }}"><b> <li>{{ $cat->name }}</li></b></a>
                              @foreach ($categories as $subcat)
                                 @if ($subcat->parent_id == $cat->id)
                                   <a href="/dps/categories/{{ $subcat->id }}"> - {{ $subcat->name }} <br></a>
                                 @endif 
                                 
                              @endforeach
                           
                          @endif 
                          
                        @endforeach
                    </ul>
                   
                </div>
</div> 