<?php $route = Request::path();?>
<div class="col-md-12">
    <ol class="breadcrumb">
    @if ($route == 'home')
        <li class="active">Dashboard</li>
    @elseif ($route == 'prai')  
        <li><a href="{{ route('home') }}">Dashboard</a></li>
        <li class="active">Prai</li>    
    @elseif ($route == 'roadtanker')  
        <li><a href="{{ route('home') }}">Dashboard</a></li>
        <li class="active">Roadtanker</li>
    @elseif ($route == 'upload')  
        <li><a href="{{ route('home') }}">Dashboard</a></li>
        <li><a href="{{ route('pages.roadtanker') }}">Roadtanker</a></li>
        <li class="active">Upload Roadtanker</li>
    @endif
    </ol>
</div>