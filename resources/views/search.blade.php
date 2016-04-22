


<form action="{{$url}}" class='navbar-form navbar-left' method="GET">



<a href="{{ url($link) }}" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-plus"></span> Add</a>

<div class="input-group custom-search-form">
    <input type="text" class="form-control" name="search" placeholder="Search...">
    <span class="input-group-btn">
        <button class="btn btn-default-sm" type="submit">
            <i class="fa fa-search"></i>
        </button>
    </span>
</div>
</form>