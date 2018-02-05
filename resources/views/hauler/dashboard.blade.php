@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @include('components.breadcrumb')
        @include('components.menu')
        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <div class="panel-body">
                   
                    @if(count($user) > 0)
                        @foreach($user as $i)
                            <p>username : {{ $i->username }}</p>
                            <p>email : {{ $i->email }}</p>
                            <p>Hauler : {{$i->hauler->name}} ({{ $i->hauler->code }})</p>
                        @endforeach
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
