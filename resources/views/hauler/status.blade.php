@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    @include('components.breadcrumb')
        <div class="col-md-12">
        
        @if(session('success'))
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            {{session('success')}}     
        </div>
        @endif

            <div class="panel panel-default">
                <div class="panel-heading">Status ({{ $terminal }})</div>
                <div class="panel-body">
                    
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#pending" data-toggle="tab" aria-expanded="true">Pending</a></li>
                        <li class=""><a href="#verify" data-toggle="tab" aria-expanded="false">Verify</a></li>
                        <li class=""><a href="#done" data-toggle="tab" aria-expanded="false">Done</a></li>
                        <li class=""><a href="#deny" data-toggle="tab" aria-expanded="false">Deny</a></li>
                    </ul>
                <br>
                <!-- start tab -->
                <div id="myTabContent" class="tab-content">

                    <div class="tab-pane fade active in" id="pending">
                        <div class="table-responsive">
                        <table class="table table-bordered table-condensed table-striped table-hover">
                            <tr class="info">
                                <th>#</th>
                                <th>Plate</th>
                                <th>Capacity</th>
                                <th>Hauler</th>
                                <th>Status</th>
                                <th>Time</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                                <th>Action</th>
                            </tr>
                                @if(count($status) > 0)
                                    <?php $counter = 1; ?>
                                    @foreach($status as $i)
                                        @if(($i->roadtanker->terminal == $terminal) && ($i->status == '0'))
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
                                                <td>{{ $i->updated_at->format('d M Y | h:i A') }}</td>
                                                <td><button type="button" class="btn btn-success btn-xs update" id="{{ $i->id }}">Update</button></td>
                                            </tr>
                                        @endif    
                                    @endforeach
                                @else    
                                    <tr><td colspan="5"><p align="center">No Record founds !!</p></td></tr>
                                @endif
                        </table>
                        </div>
                    </div>    
                    <div class="tab-pane fade" id="verify">
                    <div class="table-responsive">
                    <table class="table table-bordered table-condensed table-striped table-hover">
                            <tr class="warning">
                                <th>#</th>
                                <th>Plate</th>
                                <th>Capacity</th>
                                <th>Hauler</th>
                                <th>Status</th>
                                <th>Time</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                                <th>Action</th>
                            </tr>
                                @if(count($status) > 0)
                                    <?php $counter = 1; ?>
                                    @foreach($status as $i)
                                        @if(($i->roadtanker->terminal == $terminal) && ($i->status == '1'))
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
                                                <td>{{ $i->updated_at->format('d M Y | h:i A') }}</td>
                                                <td><button type="button" class="btn btn-success btn-xs try" id="{{ $i->id }}">More</button></td>
                                            </tr>
                                        @endif    
                                    @endforeach
                                @else    
                                    <tr><td colspan="5"><p align="center">No Record founds !!</p></td></tr>
                                @endif
                        </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="done">
                    <div class="table-responsive">
                    <table class="table table-bordered table-condensed table-striped table-hover">
                            <tr class="success">
                                <th>#</th>
                                <th>Plate</th>
                                <th>Capacity</th>
                                <th>Hauler</th>
                                <th>Status</th>
                                <th>Time</th>
                                <th>Created At</th>
                                <th>Action</th>
                            </tr>
                                @if(count($status) > 0)
                                    <?php $counter = 1; ?>
                                    @foreach($status as $i)
                                        @if(($i->roadtanker->terminal == $terminal) && ($i->status == '2'))
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
                                        @endif    
                                    @endforeach
                                @else    
                                    <tr><td colspan="5"><p align="center">No Record founds !!</p></td></tr>
                                @endif
                        </table>
                        </div>
                    </div>  
                    <div class="tab-pane fade" id="deny">
                    <div class="table-responsive">
                    <table class="table table-bordered table-condensed table-striped table-hover">
                            <tr class="danger">
                                <th>#</th>
                                <th>Plate</th>
                                <th>Capacity</th>
                                <th>Hauler</th>
                                <th>Status</th>
                                <th>Time</th>
                                <th>Created At</th>
                                <th>Action</th>
                            </tr>
                                @if(count($status) > 0)
                                    <?php $counter = 1; ?>
                                    @foreach($status as $i)
                                        @if(($i->roadtanker->terminal == $terminal) && ($i->status == '3'))
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
                                        @endif    
                                    @endforeach
                                @else    
                                    <tr><td colspan="5"><p align="center">No Record founds !!</p></td></tr>
                                @endif
                        </table>
                        </div>
                    </div>
                </div>
                <!-- end tab -->
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
                            <label class="col-md-2 control-label">Hauler Remarks</label>
                                <div class="col-md-10">
                                    <textarea class="form-control" rows="3" id="remarks_hauler" readonly></textarea>
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

<!-- update status -->
<div class="modal fade" data-keyboard="false" data-backdrop="static" id="modal-update" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h5 class="modal-title">Update Status</h5>
            </div>
            <form class="form-horizontal form-update" method="post">
            {{ csrf_field() }}
                <div class="modal-body">
                    <fieldset>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Hauler</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" placeholder="Hauler" id="hauler_u" readonly>
                                </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-2 control-label">Plate</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" placeholder="Plate" name="plate_u" id="plate_u" readonly>
                                </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-2 control-label">Capacity</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" placeholder="Capacity" id="capacity_u" readonly>
                                </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-2 control-label">Terminal</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" placeholder="Terminal" id="terminal_u" readonly>
                                </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-2 control-label">Status</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" placeholder="Status" id="status_u" readonly>
                                </div>
                        </div>

                        <div class="form-group {{ $errors->has('remarks_hauler') ? ' has-error' : '' }}">
                            <label class="col-md-2 control-label">Reason</label>
                                <div class="col-md-10">
                                    <textarea name="remarks_hauler" class="form-control" rows="3" required></textarea>
                                    @if ($errors->has('remarks_hauler'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('remarks_hauler') }}</strong>
                                    </span>
                                    @endif 
                                </div>
                        </div>
                    </fieldset>
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="id_u" id="id_u">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
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
            url: '{{ route('hauler_admin.status_details') }}',
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
                $('#remarks_hauler').val(data[0].remarks_hauler);
                
            }
        });
    });
    /* modal-update */
    $(document).on('click','.update', function(){
        var id = $(this).attr('id');
        
            $.ajax({
            type: "POST",
            url: '{{ route('hauler_admin.status_details') }}',
            data: {id:id},
            dataType:'json',
            success: function(data){
                
                console.log(data);
                //console.log(data[0].id);
                $('#modal-update').modal('show');
                $('#hauler_u').val(data[0].roadtanker.hauler.name);
                $('#plate_u').val(data[0].roadtanker.plate);
                $('#capacity_u').val(data[0].roadtanker.capacity);
                $('#terminal_u').val(data[0].roadtanker.terminal);
                $('#status_u').val(data[0].status);
                $('#id_u').val(data[0].id);
                
            }
        });
    });
    /* update */
    $(document).on('submit','.form-update', function(e){
        e.preventDefault();
        
            $.ajax({
            type: "POST",
            url: '{{ route('hauler_admin.status_update') }}',
            data: new FormData(this),
            contentType:false,  
            processData:false,
            success: function(data){
            
                console.log(data);
                $('#modal-update').modal('hide');
                window.location.reload();
    
            }
        });
    });
</script>
@endsection