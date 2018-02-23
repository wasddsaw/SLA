@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @include('components.breadcrumb')
        @include('components.menu')
        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">Status History</div>

                @for($l=0; $l <= $date_count; $l++)
                <ul class="list-group">
                    <li class="list-group-item">Updates on {{ Carbon\Carbon::today()->subDays($l)->toFormattedDateString() }}</li>
                </ul>

                <div class="panel-body">
                    <!-- start timeline -->
                    <div class="qa-message-list" id="wallmessages">

                        @if(count($sh))
                            @foreach($sh as $i)
                                @if(Carbon\Carbon::parse($i->updated_at)->toDateString() == Carbon\Carbon::today()->subDays($l)->toDateString())
                                    <div class="message-item" id="m16">
                                        <div class="message-inner">
                                            <div class="message-head clearfix">
                                                

                                                @if($i->status == '0')
                                                <div class="avatar pull-left"><img src="{{ asset('storage/avatar_info.png') }}" class="img-circle"></div>
                                                @elseif($i->status == '1')
                                                <div class="avatar pull-left"><img src="{{ asset('storage/avatar_warning.png') }}" class="img-circle"></div>                                                                
                                                @elseif($i->status == '2')
                                                <div class="avatar pull-left"><img src="{{ asset('storage/avatar_success.png') }}" class="img-circle"></div>
                                                @elseif($i->status == '3')
                                                <div class="avatar pull-left"><img src="{{ asset('storage/avatar_danger.png') }}" class="img-circle"></div>
                                                @elseif($i->status == '4')
                                                <div class="avatar pull-left"><img src="{{ asset('storage/avatar_default.png') }}" class="img-circle"></div>
                                                @endif
                                                
                                                    <div class="user-detail">
                                                        <h5 class="handle">{{ $i->plate }} - {{ $i->terminal }}</h5>
                                                        <div class="post-meta">
                                                            <div class="asker-meta">
                                                                <span class="qa-message-what"></span>
                                                                <span class="qa-message-when">
                                                                    <span class="qa-message-when-data">{{ Carbon\Carbon::parse($i->updated_at)->diffForHumans() }}</span>
                                                                </span>
                                                                <span class="qa-message-who">
                                                                    <span class="qa-message-who-pad">by </span>
                                                                    <span class="qa-message-who-data"><a href="#">{{ $i->name }}</a></span>
                                                                    @if($i->status == '0')
                                                                    <span class="label label-info">Pending</span>
                                                                    @elseif($i->status == '1')
                                                                    <span class="label label-warning">Verified</span>                                                                
                                                                    @elseif($i->status == '2')
                                                                    <span class="label label-success">Done</span>
                                                                    @elseif($i->status == '3')
                                                                    <span class="label label-danger">Deny</span>
                                                                    @elseif($i->status == '4')
                                                                    <span class="label label-default">Remove</span>
                                                                    @endif
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                            </div>
                                            <div class="qa-message-content">
                                                {{ Carbon\Carbon::parse($i->updated_at)->toDayDateTimeString() }}
                                            
                                            </div>
                                        </div>
                                    </div/>
                                @endif    
                            @endforeach
                        @endif
                    </div>
                     <!-- end timeline -->
                </div>      
                @endfor  

                    <!-- @if(count($sh))
                        @foreach($sh as $i)
                        <table class="table table-bordered table-condensed table-striped table-hover">
                            <tr>
                                <th colspan="5">{{ Carbon\Carbon::parse($i->updated_at)->diffForHumans() }}</th>
                            </tr>
                            <tr>
                                <td>{{ Carbon\Carbon::parse($i->updated_at)->toDayDateTimeString() }}</td>
                                <td>{{ $i->code }}</td>
                                <td>{{ $i->plate }}</td>
                                <td>{{ $i->terminal }}</td>
                                <td>{{ $i->status }}</td>
                            </tr>
                        </table>
                        @endforeach
                    @endif     -->

            </div>
        </div>
    </div>
</div>
@endsection