<div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row">
                        <h3 class="panel-title" style="padding-left:15px;">Tags</h3>
                       
                    </div>
                    
                </div>
                    
                 
                <div class="panel-body">
                    
                    <ul>
                     
                        @foreach ($tags as $t)
                           <a href="/dps/tags/{{ $t->id }}"> <li>{{ $t->name }}</li></a>
                        @endforeach
                       
                    </ul>
                   
                </div>
</div> 