@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @include('components.breadcrumb')
        @include('components.menu')
        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">Hauler Admin</div>
                <div class="panel-body">
                    <a class="btn btn-primary" href="{{ route('pages.create_hauler') }}">Create</a>
                </div>

                <table class="table">
                    <tr>
                        <th>#</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Hauler</th>
                    </tr>
                
                @if(count($hauler_admins) > 0)
                    <?php $counter = 1; ?>
                    @foreach($hauler_admins as $hauler_admin)
                        <tr>
                            <td>{{$counter++}}</td>
                            <td>{{$hauler_admin->username}}</td>
                            <td>{{$hauler_admin->email}}</td>
                            <td>
                                @if($hauler_admin->hauler_id == 1)
                                    BCSB
                                @elseif($hauler_admin->hauler_id == 2)    
                                    STSB
                                @elseif($hauler_admin->hauler_id == 3)    
                                    ZHA
                                @endif
                            </td>
                        </tr>
                    @endforeach
                @else    
                    <tr><td colspan="4"><p align="center">No Record founds !!</p></td></tr>
                @endif
                </table>

            </div>
        </div>
    </div>
</div>
@endsection
