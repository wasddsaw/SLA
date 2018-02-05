@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    @include('components.breadcrumb')
    @include('components.menu')
       <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">Terminal</div>
                <div class="panel-body">
                   
                    terminal

                </div>
                    <table class="table">
                        <tr>
                            <th>#</th>
                            <th>Plate</th>
                            <th>Capacity</th>
                            <th>Terminal</th>
                        </tr>
                    
                        @if(count($roadtanker) > 0)
                            <?php $counter = 1; ?>
                            @foreach($roadtanker as $i)
                                <tr>
                                    <td>{{$counter++}}</td>
                                    <td>{{$i->plate}}</td>
                                    <td>{{$i->capacity}}</td>
                                    <td>{{$i->terminal}}</td>
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