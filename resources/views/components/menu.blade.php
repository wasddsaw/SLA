<?php $route = Request::path();?>
<div class="col-md-3">

    @if ($route == 'home')
    <div class="list-group">
        <a href="{{ route('home') }}" class="list-group-item active">Dashboard</a>
        <a href="{{ route('terminal.kvdt') }}" class="list-group-item">KVDT </a>
        <a href="{{ route('terminal.lumut') }}" class="list-group-item">Lumut</a>
        <a href="{{ route('terminal.prai') }}" class="list-group-item">Prai </a>
        <a href="{{ route('terminal.langkawi') }}" class="list-group-item">Langkawi</a>
        <a href="{{ route('terminal.kuantan') }}" class="list-group-item">Kuantan</a>
        <a href="{{ route('terminal.kerteh') }}" class="list-group-item">Kerteh</a>
        <a href="{{ route('terminal.melaka') }}" class="list-group-item">Melaka</a>
        <a href="{{ route('terminal.westport') }}" class="list-group-item">Westport</a>
        <a href="{{ route('terminal.pgudang') }}" class="list-group-item">Pasir Gudang</a>
    </div>
    <div class="list-group">
        <a href="{{ route('pages.hauler') }}" class="list-group-item">Hauler</a>
        <a href="{{ route('pages.roadtanker') }}" class="list-group-item">Roadtanker</a>
        <a href="#" class="list-group-item">Status History</a>
    </div>
    @elseif ($route == 'prai')
    <div class="list-group">
        <a href="{{ route('home') }}" class="list-group-item">Dashboard</a>
        <a href="{{ route('terminal.kvdt') }}" class="list-group-item">KVDT </a>
        <a href="{{ route('terminal.lumut') }}" class="list-group-item">Lumut</a>
        <a href="{{ route('terminal.prai') }}" class="list-group-item active">Prai </a>
        <a href="{{ route('terminal.langkawi') }}" class="list-group-item">Langkawi</a>
        <a href="{{ route('terminal.kuantan') }}" class="list-group-item">Kuantan</a>
        <a href="{{ route('terminal.kerteh') }}" class="list-group-item">Kerteh</a>
        <a href="{{ route('terminal.melaka') }}" class="list-group-item">Melaka</a>
        <a href="{{ route('terminal.westport') }}" class="list-group-item">Westport</a>
        <a href="{{ route('terminal.pgudang') }}" class="list-group-item">Pasir Gudang</a>
    </div>
    <div class="list-group">
        <a href="{{ route('pages.hauler') }}" class="list-group-item">Hauler</a>
        <a href="{{ route('pages.roadtanker') }}" class="list-group-item">Roadtanker</a>
        <a href="#" class="list-group-item">Status History</a>
    </div>
    @elseif ($route == 'kerteh')
    <div class="list-group">
        <a href="{{ route('home') }}" class="list-group-item">Dashboard</a>
        <a href="{{ route('terminal.kvdt') }}" class="list-group-item">KVDT </a>
        <a href="{{ route('terminal.lumut') }}" class="list-group-item">Lumut</a>
        <a href="{{ route('terminal.prai') }}" class="list-group-item">Prai </a>
        <a href="{{ route('terminal.langkawi') }}" class="list-group-item">Langkawi</a>
        <a href="{{ route('terminal.kuantan') }}" class="list-group-item">Kuantan</a>
        <a href="{{ route('terminal.kerteh') }}" class="list-group-item active">Kerteh</a>
        <a href="{{ route('terminal.melaka') }}" class="list-group-item">Melaka</a>
        <a href="{{ route('terminal.westport') }}" class="list-group-item">Westport</a>
        <a href="{{ route('terminal.pgudang') }}" class="list-group-item">Pasir Gudang</a>
    </div>
    <div class="list-group">
        <a href="{{ route('pages.hauler') }}" class="list-group-item">Hauler</a>
        <a href="{{ route('pages.roadtanker') }}" class="list-group-item">Roadtanker</a>
        <a href="#" class="list-group-item">Status History</a>
    </div>
    @elseif ($route == 'kuantan')
    <div class="list-group">
        <a href="{{ route('home') }}" class="list-group-item">Dashboard</a>
        <a href="{{ route('terminal.kvdt') }}" class="list-group-item">KVDT </a>
        <a href="{{ route('terminal.lumut') }}" class="list-group-item">Lumut</a>
        <a href="{{ route('terminal.prai') }}" class="list-group-item">Prai </a>
        <a href="{{ route('terminal.langkawi') }}" class="list-group-item">Langkawi</a>
        <a href="{{ route('terminal.kuantan') }}" class="list-group-item active">Kuantan</a>
        <a href="{{ route('terminal.kerteh') }}" class="list-group-item">Kerteh</a>
        <a href="{{ route('terminal.melaka') }}" class="list-group-item">Melaka</a>
        <a href="{{ route('terminal.westport') }}" class="list-group-item">Westport</a>
        <a href="{{ route('terminal.pgudang') }}" class="list-group-item">Pasir Gudang</a>
    </div>
    <div class="list-group">
        <a href="{{ route('pages.hauler') }}" class="list-group-item">Hauler</a>
        <a href="{{ route('pages.roadtanker') }}" class="list-group-item">Roadtanker</a>
        <a href="#" class="list-group-item">Status History</a>
    </div>
    @elseif ($route == 'kvdt')
    <div class="list-group">
        <a href="{{ route('home') }}" class="list-group-item">Dashboard</a>
        <a href="{{ route('terminal.kvdt') }}" class="list-group-item active">KVDT </a>
        <a href="{{ route('terminal.lumut') }}" class="list-group-item">Lumut</a>
        <a href="{{ route('terminal.prai') }}" class="list-group-item">Prai </a>
        <a href="{{ route('terminal.langkawi') }}" class="list-group-item">Langkawi</a>
        <a href="{{ route('terminal.kuantan') }}" class="list-group-item">Kuantan</a>
        <a href="{{ route('terminal.kerteh') }}" class="list-group-item">Kerteh</a>
        <a href="{{ route('terminal.melaka') }}" class="list-group-item">Melaka</a>
        <a href="{{ route('terminal.westport') }}" class="list-group-item">Westport</a>
        <a href="{{ route('terminal.pgudang') }}" class="list-group-item">Pasir Gudang</a>
    </div>
    <div class="list-group">
        <a href="{{ route('pages.hauler') }}" class="list-group-item">Hauler</a>
        <a href="{{ route('pages.roadtanker') }}" class="list-group-item">Roadtanker</a>
        <a href="#" class="list-group-item">Status History</a>
    </div>
    @elseif ($route == 'langkawi')
    <div class="list-group">
        <a href="{{ route('home') }}" class="list-group-item">Dashboard</a>
        <a href="{{ route('terminal.kvdt') }}" class="list-group-item">KVDT </a>
        <a href="{{ route('terminal.lumut') }}" class="list-group-item">Lumut</a>
        <a href="{{ route('terminal.prai') }}" class="list-group-item">Prai </a>
        <a href="{{ route('terminal.langkawi') }}" class="list-group-item active">Langkawi</a>
        <a href="{{ route('terminal.kuantan') }}" class="list-group-item">Kuantan</a>
        <a href="{{ route('terminal.kerteh') }}" class="list-group-item">Kerteh</a>
        <a href="{{ route('terminal.melaka') }}" class="list-group-item">Melaka</a>
        <a href="{{ route('terminal.westport') }}" class="list-group-item">Westport</a>
        <a href="{{ route('terminal.pgudang') }}" class="list-group-item">Pasir Gudang</a>
    </div>
    <div class="list-group">
        <a href="{{ route('pages.hauler') }}" class="list-group-item">Hauler</a>
        <a href="{{ route('pages.roadtanker') }}" class="list-group-item">Roadtanker</a>
        <a href="#" class="list-group-item">Status History</a>
    </div>
    @elseif ($route == 'lumut')
    <div class="list-group">
        <a href="{{ route('home') }}" class="list-group-item">Dashboard</a>
        <a href="{{ route('terminal.kvdt') }}" class="list-group-item">KVDT </a>
        <a href="{{ route('terminal.lumut') }}" class="list-group-item active">Lumut</a>
        <a href="{{ route('terminal.prai') }}" class="list-group-item">Prai </a>
        <a href="{{ route('terminal.langkawi') }}" class="list-group-item">Langkawi</a>
        <a href="{{ route('terminal.kuantan') }}" class="list-group-item">Kuantan</a>
        <a href="{{ route('terminal.kerteh') }}" class="list-group-item">Kerteh</a>
        <a href="{{ route('terminal.melaka') }}" class="list-group-item">Melaka</a>
        <a href="{{ route('terminal.westport') }}" class="list-group-item">Westport</a>
        <a href="{{ route('terminal.pgudang') }}" class="list-group-item">Pasir Gudang</a>
    </div>
    <div class="list-group">
        <a href="{{ route('pages.hauler') }}" class="list-group-item">Hauler</a>
        <a href="{{ route('pages.roadtanker') }}" class="list-group-item">Roadtanker</a>
        <a href="#" class="list-group-item">Status History</a>
    </div>
    @elseif ($route == 'melaka')
    <div class="list-group">
        <a href="{{ route('home') }}" class="list-group-item">Dashboard</a>
        <a href="{{ route('terminal.kvdt') }}" class="list-group-item">KVDT </a>
        <a href="{{ route('terminal.lumut') }}" class="list-group-item">Lumut</a>
        <a href="{{ route('terminal.prai') }}" class="list-group-item">Prai </a>
        <a href="{{ route('terminal.langkawi') }}" class="list-group-item">Langkawi</a>
        <a href="{{ route('terminal.kuantan') }}" class="list-group-item">Kuantan</a>
        <a href="{{ route('terminal.kerteh') }}" class="list-group-item">Kerteh</a>
        <a href="{{ route('terminal.melaka') }}" class="list-group-item active">Melaka</a>
        <a href="{{ route('terminal.westport') }}" class="list-group-item">Westport</a>
        <a href="{{ route('terminal.pgudang') }}" class="list-group-item">Pasir Gudang</a>
    </div>
    <div class="list-group">
        <a href="{{ route('pages.hauler') }}" class="list-group-item">Hauler</a>
        <a href="{{ route('pages.roadtanker') }}" class="list-group-item">Roadtanker</a>
        <a href="#" class="list-group-item">Status History</a>
    </div>
    @elseif ($route == 'pgudang')
    <div class="list-group">
        <a href="{{ route('home') }}" class="list-group-item">Dashboard</a>
        <a href="{{ route('terminal.kvdt') }}" class="list-group-item">KVDT </a>
        <a href="{{ route('terminal.lumut') }}" class="list-group-item">Lumut</a>
        <a href="{{ route('terminal.prai') }}" class="list-group-item">Prai </a>
        <a href="{{ route('terminal.langkawi') }}" class="list-group-item">Langkawi</a>
        <a href="{{ route('terminal.kuantan') }}" class="list-group-item">Kuantan</a>
        <a href="{{ route('terminal.kerteh') }}" class="list-group-item">Kerteh</a>
        <a href="{{ route('terminal.melaka') }}" class="list-group-item">Melaka</a>
        <a href="{{ route('terminal.westport') }}" class="list-group-item">Westport</a>
        <a href="{{ route('terminal.pgudang') }}" class="list-group-item active">Pasir Gudang</a>
    </div>
    <div class="list-group">
        <a href="{{ route('pages.hauler') }}" class="list-group-item">Hauler</a>
        <a href="{{ route('pages.roadtanker') }}" class="list-group-item">Roadtanker</a>
        <a href="#" class="list-group-item">Status History</a>
    </div>
    @elseif ($route == 'westport')
    <div class="list-group">
        <a href="{{ route('home') }}" class="list-group-item">Dashboard</a>
        <a href="{{ route('terminal.kvdt') }}" class="list-group-item">KVDT </a>
        <a href="{{ route('terminal.lumut') }}" class="list-group-item">Lumut</a>
        <a href="{{ route('terminal.prai') }}" class="list-group-item">Prai </a>
        <a href="{{ route('terminal.langkawi') }}" class="list-group-item">Langkawi</a>
        <a href="{{ route('terminal.kuantan') }}" class="list-group-item">Kuantan</a>
        <a href="{{ route('terminal.kerteh') }}" class="list-group-item">Kerteh</a>
        <a href="{{ route('terminal.melaka') }}" class="list-group-item">Melaka</a>
        <a href="{{ route('terminal.westport') }}" class="list-group-item active">Westport</a>
        <a href="{{ route('terminal.pgudang') }}" class="list-group-item">Pasir Gudang</a>
    </div>
    <div class="list-group">
        <a href="{{ route('pages.hauler') }}" class="list-group-item">Hauler</a>
        <a href="{{ route('pages.roadtanker') }}" class="list-group-item">Roadtanker</a>
        <a href="#" class="list-group-item">Status History</a>
    </div>
    @elseif ($route == 'hauler')
    <div class="list-group">
        <a href="{{ route('home') }}" class="list-group-item">Dashboard</a>
        <a href="{{ route('terminal.kvdt') }}" class="list-group-item">KVDT </a>
        <a href="{{ route('terminal.lumut') }}" class="list-group-item">Lumut</a>
        <a href="{{ route('terminal.prai') }}" class="list-group-item">Prai </a>
        <a href="{{ route('terminal.langkawi') }}" class="list-group-item">Langkawi</a>
        <a href="{{ route('terminal.kuantan') }}" class="list-group-item">Kuantan</a>
        <a href="{{ route('terminal.kerteh') }}" class="list-group-item">Kerteh</a>
        <a href="{{ route('terminal.melaka') }}" class="list-group-item">Melaka</a>
        <a href="{{ route('terminal.westport') }}" class="list-group-item">Westport</a>
        <a href="{{ route('terminal.pgudang') }}" class="list-group-item">Pasir Gudang</a>
    </div>
    <div class="list-group">
        <a href="{{ route('pages.hauler') }}" class="list-group-item active">Hauler</a>
        <a href="{{ route('pages.roadtanker') }}" class="list-group-item">Roadtanker</a>
        <a href="#" class="list-group-item">Status History</a>
    </div>
    @elseif ($route == 'roadtanker')
    <div class="list-group">
        <a href="{{ route('home') }}" class="list-group-item">Dashboard</a>
        <a href="{{ route('terminal.kvdt') }}" class="list-group-item">KVDT </a>
        <a href="{{ route('terminal.lumut') }}" class="list-group-item">Lumut</a>
        <a href="{{ route('terminal.prai') }}" class="list-group-item">Prai </a>
        <a href="{{ route('terminal.langkawi') }}" class="list-group-item">Langkawi</a>
        <a href="{{ route('terminal.kuantan') }}" class="list-group-item">Kuantan</a>
        <a href="{{ route('terminal.kerteh') }}" class="list-group-item">Kerteh</a>
        <a href="{{ route('terminal.melaka') }}" class="list-group-item">Melaka</a>
        <a href="{{ route('terminal.westport') }}" class="list-group-item">Westport</a>
        <a href="{{ route('terminal.pgudang') }}" class="list-group-item">Pasir Gudang</a>
    </div>
    <div class="list-group">
        <a href="{{ route('pages.hauler') }}" class="list-group-item">Hauler</a>
        <a href="{{ route('pages.roadtanker') }}" class="list-group-item active">Roadtanker</a>
        <a href="#" class="list-group-item">Status History</a>
    </div>
    @endif
</div>