@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @include('components.breadcrumb')
        <div class="col-md-12">

            <div class="panel panel-default">
                <div class="panel-heading">List of Status</div>
                <div class="panel-body">

                    <!-- <ul class="nav nav-tabs">
                        <li class="active"><a href="#home" data-toggle="tab" aria-expanded="true">Pending</a></li>
                        <li class=""><a href="#profile" data-toggle="tab" aria-expanded="false">Verify</a></li>
                        <li class=""><a href="#profile" data-toggle="tab" aria-expanded="false">Done</a></li>
                        <li class=""><a href="#profile" data-toggle="tab" aria-expanded="false">Deny</a></li>
                    </ul>

                    <div id="myTabContent" class="tab-content">
                        <div class="tab-pane fade active in" id="home">
                            <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>
                        </div>
                        <div class="tab-pane fade" id="profile">
                            <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit.</p>
                        </div>
                    </div> -->

                    <table class="table">
                    <tr>
                        <th>#</th>
                        <th>Plate</th>
                        <th>Capacity</th>
                        <th>Hauler</th>
                        <th>Status</th>
                        <th>Time</th>
                        <th>Created At</th>
                        <th>Action</th>
                    </tr>
                        @if(count($statuses) > 0)
                            <?php $counter = 1; ?>
                            @foreach($statuses as $i)
                                <tr>
                                    <td>{{$counter++}}</td>
                                    <td>{{$i->roadtanker->plate}}</td>
                                    <td>{{$i->roadtanker->capacity}}</td>
                                    <td>
                                        @if($i->roadtanker->hauler_id == 1)
                                            BCSB
                                        @elseif($i->roadtanker->hauler_id == 2)    
                                            STSB
                                        @elseif($i->roadtanker->hauler_id == 3)    
                                            ZHA
                                        @endif
                                    </td>
                                    <td>{{ $i->status }}</td>
                                    <td>{{ $i->time }}</td>
                                    <td>{{ $i->created_at->format('d M Y | h:i A') }}</td>
                                    <td><button type="button" class="btn btn-success btn-xs try" id="{{ $i->id }}">More</button></td>
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
</div>

<!-- show status -->
<div class="modal fade" data-keyboard="false" data-backdrop="static" id="myModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h5 class="modal-title">Status Details</h5>
            </div>
            <div class="modal-body">
            
                <form class="form-horizontal">
                    <fieldset>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Hauler</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" placeholder="Plate" id="hauler" readonly>
                                </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-2 control-label">Plate</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" placeholder="Plate" id="plate" readonly>
                                </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-2 control-label">Capacity</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" placeholder="Capacity" id="capacity" readonly>
                                </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-2 control-label">Terminal</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" placeholder="Terminal" id="terminal" readonly>
                                </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-2 control-label">Status</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" placeholder="Status" id="status" readonly>
                                </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-2 control-label">Textarea</label>
                                <div class="col-md-10">
                                    <textarea class="form-control" rows="3"></textarea>
                                    <span class="help-block">A longer block of help text that breaks onto a new line and may extend beyond one line.</span>
                                </div>
                        </div>
                    </fieldset>
                </form>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $(document).on('click','.try', function(){
        var id = $(this).attr('id');
        
            $.ajax({
            type: "POST",
            url: '{{ route('status_details') }}',
            data: {id:id},
            dataType:'json',
            success: function(data){
                
                console.log(data);
                //console.log(data[0].id);
                $('#myModal').modal('show');
                $('#hauler').val(data[0].roadtanker.hauler.name);
                $('#plate').val(data[0].roadtanker.plate);
                $('#capacity').val(data[0].roadtanker.capacity);
                $('#terminal').val(data[0].roadtanker.terminal);
                $('#status').val(data[0].status);
                
            }
        });
    });

    // $(document).ready(function(){
    //     $("#getRequest").click(function(){
    //         // $.get('getRequest', function(data){
    //         //     console.log(data);
    //         //     $('#myModal').modal('show');
    //         // });

    //         $.ajax({
    //             type: 'GET',
    //             url: 'getRequest',
    //             success: function(data){
    //                 console.log(data);
    //                 $('#myModal').modal('show');
    //             }
    //         });
    //     });
    // });
</script>
@endsection