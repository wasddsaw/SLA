<?php $route = Request::path();?>
<div class="col-md-12">
    <ol class="breadcrumb">

    @if (Auth::guard('hauler_admin')->check())
        @if ($route == 'hauler_admin')
                <li class="active">Dashboard</li>
        @elseif ($route == 'hauler_admin/prai')  
            <li><a href="{{ route('hauler_admin.dashboard') }}">Dashboard</a></li>
            <li class="active">Prai</li> 
        @elseif ($route == 'hauler_admin/kerteh')  
            <li><a href="{{ route('hauler_admin.dashboard') }}">Dashboard</a></li>
            <li class="active">Kerteh</li>   
        @elseif ($route == 'hauler_admin/kuantan')  
            <li><a href="{{ route('hauler_admin.dashboard') }}">Dashboard</a></li>
            <li class="active">Kuantan</li>   
        @elseif ($route == 'hauler_admin/kvdt')  
            <li><a href="{{ route('hauler_admin.dashboard') }}">Dashboard</a></li>
            <li class="active">KVDT</li>
        @elseif ($route == 'hauler_admin/langkawi')  
            <li><a href="{{ route('hauler_admin.dashboard') }}">Dashboard</a></li>
            <li class="active">Langkawi</li> 
        @elseif ($route == 'hauler_admin/lumut')  
            <li><a href="{{ route('hauler_admin.dashboard') }}">Dashboard</a></li>
            <li class="active">Lumut</li>
        @elseif ($route == 'hauler_admin/melaka')  
            <li><a href="{{ route('hauler_admin.dashboard') }}">Dashboard</a></li>
            <li class="active">Melaka</li>   
        @elseif ($route == 'hauler_admin/pgudang')  
            <li><a href="{{ route('hauler_admin.dashboard') }}">Dashboard</a></li>
            <li class="active">Pasir Gudang</li>
        @elseif ($route == 'hauler_admin/westport')  
            <li><a href="{{ route('hauler_admin.dashboard') }}">Dashboard</a></li>
            <li class="active">Westport</li>
        <!-- start status-->    
        @elseif ($route == 'hauler_admin/status/Prai')  
            <li><a href="{{ route('hauler_admin.dashboard') }}">Dashboard</a></li>
            <li><a href="{{ route('hauler_admin.prai') }}">Prai</a></li>
            <li class="active">Status</li>
        @elseif ($route == 'hauler_admin/status/Kerteh')  
            <li><a href="{{ route('hauler_admin.dashboard') }}">Dashboard</a></li>
            <li><a href="{{ route('hauler_admin.kerteh') }}">Kerteh</a></li>
            <li class="active">Status</li>
        @elseif ($route == 'hauler_admin/status/Kuantan')  
            <li><a href="{{ route('hauler_admin.dashboard') }}">Dashboard</a></li>
            <li><a href="{{ route('hauler_admin.kuantan') }}">Kuantan</a></li>
            <li class="active">Status</li>
        @elseif ($route == 'hauler_admin/status/KVDT')  
            <li><a href="{{ route('hauler_admin.dashboard') }}">Dashboard</a></li>
            <li><a href="{{ route('hauler_admin.kvdt') }}">KVDT</a></li>
            <li class="active">Status</li>
        @elseif ($route == 'hauler_admin/status/Langkawi')  
            <li><a href="{{ route('hauler_admin.dashboard') }}">Dashboard</a></li>
            <li><a href="{{ route('hauler_admin.langkawi') }}">Langkawi</a></li>
            <li class="active">Status</li> 
        @elseif ($route == 'hauler_admin/status/Lumut')  
            <li><a href="{{ route('hauler_admin.dashboard') }}">Dashboard</a></li>
            <li><a href="{{ route('hauler_admin.lumut') }}">Lumut</a></li>
            <li class="active">Status</li>
        @elseif ($route == 'hauler_admin/status/Melaka')  
            <li><a href="{{ route('hauler_admin.dashboard') }}">Dashboard</a></li>
            <li><a href="{{ route('hauler_admin.melaka') }}">Melaka</a></li>
            <li class="active">Status</li>
        @elseif ($route == 'hauler_admin/status/Pasir%20Gudang')  
            <li><a href="{{ route('hauler_admin.dashboard') }}">Dashboard</a></li>
            <li><a href="{{ route('hauler_admin.pgudang') }}">Pasir Gudang</a></li>
            <li class="active">Status</li>
        @elseif ($route == 'hauler_admin/status/Westport')  
            <li><a href="{{ route('hauler_admin.dashboard') }}">Dashboard</a></li>
            <li><a href="{{ route('hauler_admin.westport') }}">Westport</a></li>
            <li class="active">Status</li>       
        @endif
    @endif

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
        @elseif ($route == 'status_history')  
            <li><a href="{{ route('home') }}">Dashboard</a></li>
            <li class="active">Status Histoy</li>    
        <!-- start kerteh -->    
        @elseif ($route == 'create_status/Kerteh')  
            <li><a href="{{ route('home') }}">Dashboard</a></li>
            <li><a href="{{ route('terminal.kerteh') }}">Kerteh</a></li>
            <li class="active">Create Status</li>   
        @elseif ($route == 'show_status/Kerteh')  
            <li><a href="{{ route('home') }}">Dashboard</a></li>
            <li><a href="{{ route('terminal.kerteh') }}">Kerteh</a></li>
            <li class="active">Show Status</li>   
        <!-- end kerteh -->
        <!-- start kuantan -->    
        @elseif ($route == 'create_status/Kuantan')  
            <li><a href="{{ route('home') }}">Dashboard</a></li>
            <li><a href="{{ route('terminal.kuantan') }}">Kuantan</a></li>
            <li class="active">Create Status</li>   
        @elseif ($route == 'show_status/Kuantan')  
            <li><a href="{{ route('home') }}">Dashboard</a></li>
            <li><a href="{{ route('terminal.kuantan') }}">Kuantan</a></li>
            <li class="active">Show Status</li>   
        <!-- end kuantan -->
        <!-- start kvdt -->    
        @elseif ($route == 'create_status/KVDT')  
            <li><a href="{{ route('home') }}">Dashboard</a></li>
            <li><a href="{{ route('terminal.kvdt') }}">KVDT</a></li>
            <li class="active">Create Status</li>   
        @elseif ($route == 'show_status/KVDT')  
            <li><a href="{{ route('home') }}">Dashboard</a></li>
            <li><a href="{{ route('terminal.kvdt') }}">KVDT</a></li>
            <li class="active">Show Status</li>   
        <!-- end kvdt -->     
        <!-- start langkawi -->    
        @elseif ($route == 'create_status/Langkawi')  
            <li><a href="{{ route('home') }}">Dashboard</a></li>
            <li><a href="{{ route('terminal.langkawi') }}">Langkawi</a></li>
            <li class="active">Create Status</li>   
        @elseif ($route == 'show_status/Langkawi')  
            <li><a href="{{ route('home') }}">Dashboard</a></li>
            <li><a href="{{ route('terminal.langkawi') }}">Langkawi</a></li>
            <li class="active">Show Status</li>   
        <!-- end langkawi -->
        <!-- start lumut -->    
        @elseif ($route == 'create_status/Lumut')  
            <li><a href="{{ route('home') }}">Dashboard</a></li>
            <li><a href="{{ route('terminal.lumut') }}">Lumut</a></li>
            <li class="active">Create Status</li>   
        @elseif ($route == 'show_status/Lumut')  
            <li><a href="{{ route('home') }}">Dashboard</a></li>
            <li><a href="{{ route('terminal.lumut') }}">Lumut</a></li>
            <li class="active">Show Status</li>   
        <!-- end lumut -->   
        <!-- start melaka -->    
        @elseif ($route == 'create_status/Melaka')  
            <li><a href="{{ route('home') }}">Dashboard</a></li>
            <li><a href="{{ route('terminal.melaka') }}">Melaka</a></li>
            <li class="active">Create Status</li>   
        @elseif ($route == 'show_status/Melaka')  
            <li><a href="{{ route('home') }}">Dashboard</a></li>
            <li><a href="{{ route('terminal.melaka') }}">Melaka</a></li>
            <li class="active">Show Status</li>   
        <!-- end melaka -->   
        <!-- start pgudang -->    
        @elseif ($route == 'create_status/Pasir%20Gudang')  
            <li><a href="{{ route('home') }}">Dashboard</a></li>
            <li><a href="{{ route('terminal.pgudang') }}">Pasir Gudang</a></li>
            <li class="active">Create Status</li>   
        @elseif ($route == 'show_status/Pasir%20Gudang')  
            <li><a href="{{ route('home') }}">Dashboard</a></li>
            <li><a href="{{ route('terminal.pgudang') }}">Pasir Gudang</a></li>
            <li class="active">Show Status</li>   
        <!-- end pgudang --> 
        <!-- start prai -->    
        @elseif ($route == 'create_status/Prai')  
            <li><a href="{{ route('home') }}">Dashboard</a></li>
            <li><a href="{{ route('terminal.prai') }}">Prai</a></li>
            <li class="active">Create Status</li>   
        @elseif ($route == 'show_status/Prai')  
            <li><a href="{{ route('home') }}">Dashboard</a></li>
            <li><a href="{{ route('terminal.prai') }}">Prai</a></li>
            <li class="active">Show Status</li>   
        <!-- end prai --> 
        <!-- start westport -->    
        @elseif ($route == 'create_status/Westport')  
            <li><a href="{{ route('home') }}">Dashboard</a></li>
            <li><a href="{{ route('terminal.westport') }}">Westport</a></li>
            <li class="active">Create Status</li>   
        @elseif ($route == 'show_status/Westport')  
            <li><a href="{{ route('home') }}">Dashboard</a></li>
            <li><a href="{{ route('terminal.westport') }}">Westport</a></li>
            <li class="active">Show Status</li>   
        <!-- end westport -->
        @endif
    </ol>
</div>