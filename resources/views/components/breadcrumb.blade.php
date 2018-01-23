<?php $route = Request::path();?>
<div class="col-md-12">
    <ol class="breadcrumb">
    @if ($route == 'home')
        <li class="active">Dashboard</li>
    @elseif ($route == 'prai')  
        <li><a href="{{ route('home') }}">Dashboard</a></li>
        <li class="active">Prai</li> 
    @elseif ($route == 'kerteh')  
        <li><a href="{{ route('home') }}">Dashboard</a></li>
        <li class="active">Kerteh</li>   
    @elseif ($route == 'kuantan')  
        <li><a href="{{ route('home') }}">Dashboard</a></li>
        <li class="active">Kuantan</li>   
    @elseif ($route == 'kvdt')  
        <li><a href="{{ route('home') }}">Dashboard</a></li>
        <li class="active">KVDT</li>
    @elseif ($route == 'langkawi')  
        <li><a href="{{ route('home') }}">Dashboard</a></li>
        <li class="active">Langkawi</li> 
    @elseif ($route == 'lumut')  
        <li><a href="{{ route('home') }}">Dashboard</a></li>
        <li class="active">Lumut</li>
    @elseif ($route == 'melaka')  
        <li><a href="{{ route('home') }}">Dashboard</a></li>
        <li class="active">Melaka</li>   
    @elseif ($route == 'pgudang')  
        <li><a href="{{ route('home') }}">Dashboard</a></li>
        <li class="active">Pasir Gudang</li>
    @elseif ($route == 'westport')  
        <li><a href="{{ route('home') }}">Dashboard</a></li>
        <li class="active">Westport</li>  
    @elseif ($route == 'hauler')  
        <li><a href="{{ route('home') }}">Dashboard</a></li>
        <li class="active">Hauler</li>
    @elseif ($route == 'create_hauler')  
        <li><a href="{{ route('home') }}">Dashboard</a></li>
        <li><a href="{{ route('pages.hauler') }}">Hauler</a></li>
        <li class="active">Create Hauler Admin</li>                              
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