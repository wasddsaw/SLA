<?php $route = Request::path();?>
<div class="col-md-3">

    @if ($route == 'home')
    <div class="list-group">
        <a href="{{ route('home') }}" class="list-group-item active">Dashboard</a>
        <a href="#" class="list-group-item">KVDT<span class="badge">2</span></a>
        <a href="#" class="list-group-item">Lumut</a>
        <a href="{{ route('terminal.prai') }}" class="list-group-item">Prai</a>
        <a href="#" class="list-group-item">Langkawi</a>
        <a href="#" class="list-group-item">Kuantan</a>
        <a href="#" class="list-group-item">Kerteh</a>
        <a href="#" class="list-group-item">Melaka</a>
        <a href="#" class="list-group-item">Westport</a>
        <a href="#" class="list-group-item">Pasir Gudang</a>
    </div>
    <div class="list-group">
        <a href="#" class="list-group-item">Hauler</a>
        <a href="{{ route('pages.roadtanker') }}" class="list-group-item">Roadtanker</a>
    </div>
    @elseif ($route == 'prai')
    <div class="list-group">
        <a href="{{ route('home') }}" class="list-group-item">Dashboard</a>
        <a href="#" class="list-group-item">KVDT<span class="badge">2</span></a>
        <a href="#" class="list-group-item">Lumut</a>
        <a href="{{ route('terminal.prai') }}" class="list-group-item active">Prai <span class="badge">{{ $prai }}</span></a>
        <a href="#" class="list-group-item">Langkawi</a>
        <a href="#" class="list-group-item">Kuantan</a>
        <a href="#" class="list-group-item">Kerteh</a>
        <a href="#" class="list-group-item">Melaka</a>
        <a href="#" class="list-group-item">Westport</a>
        <a href="#" class="list-group-item">Pasir Gudang</a>
    </div>
    <div class="list-group">
        <a href="#" class="list-group-item">Hauler</a>
        <a href="{{ route('pages.roadtanker') }}" class="list-group-item">Roadtanker</a>
    </div>
    @elseif ($route == 'roadtanker')
    <div class="list-group">
        <a href="{{ route('home') }}" class="list-group-item">Dashboard</a>
        <a href="#" class="list-group-item">KVDT<span class="badge">2</span></a>
        <a href="#" class="list-group-item">Lumut</a>
        <a href="{{ route('terminal.prai') }}" class="list-group-item">Prai</a>
        <a href="#" class="list-group-item">Langkawi</a>
        <a href="#" class="list-group-item">Kuantan</a>
        <a href="#" class="list-group-item">Kerteh</a>
        <a href="#" class="list-group-item">Melaka</a>
        <a href="#" class="list-group-item">Westport</a>
        <a href="#" class="list-group-item">Pasir Gudang</a>
    </div>
    <div class="list-group">
        <a href="#" class="list-group-item">Hauler</a>
        <a href="{{ route('pages.roadtanker') }}" class="list-group-item active">Roadtanker</a>
    </div>
    @endif
</div>