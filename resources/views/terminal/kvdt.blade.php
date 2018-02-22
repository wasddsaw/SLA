@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @include('components.breadcrumb')
        @include('components.menu')
        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">KVDT Terminal</div>

                <div class="panel-body">
                    @if(count($kvdt) > 0)
                        @foreach($kvdt as $j)
                            <?php $terminal = $j->terminal ?>
                        @endforeach
                        <a class="btn btn-primary" href="{{ route('pages.create_status', $terminal) }}">Create Status</a>
                        <a class="btn btn-warning" href="{{ route('pages.show_status', $terminal) }}">Show Status</a>
                    @endif
                </div>

                <table class="table">
                    <tr>
                        <th>#</th>
                        <th>Plate</th>
                        <th>Capacity</th>
                        <th>Terminal</th>
                        <th>Hauler</th>
                    </tr>
                
                @if(count($kvdt) > 0)
                    <?php $counter = 1; ?>
                    @foreach($kvdt as $i)
                        <tr>
                            <td>{{$counter++}}</td>
                            <td>{{$i->plate}}</td>
                            <td>{{$i->capacity}}</td>
                            <td>{{$i->terminal}}</td>
                            <td>
                                @if($i->hauler_id == 1)
                                    BCSB
                                @elseif($i->hauler_id == 2)    
                                    STSB
                                @elseif($i->hauler_id == 3)    
                                    ZHA
                                @endif
                            </td>
                        </tr>
                    @endforeach
                @else    
                    <tr><td colspan="5"><p align="center">No Record founds !!</p></td></tr>
                @endif
                </table>


            </div>
        </div>
    </div>
</div>
@endsection
