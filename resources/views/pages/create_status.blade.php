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
                <div class="panel-heading">Create Status</div>
                <div class="panel-body">

                    <form class="form-horizontal" method="POST" action="{{ route('status.store') }}">
                      {{ csrf_field() }}
                        <fieldset>
                            <div class="form-group {{ $errors->has('roadtanker_id') ? ' has-error' : '' }}">
                                <label class="col-lg-2 control-label">Choose Roadtanker</label>
                                <div class="col-lg-10">
                                    <select class="form-control" id="roadtanker_id" name="roadtanker_id">
                                        <option disabled selected value>Choose Roadtanker</option>
                                    @if(count($roadtankers) > 0)
                                        @foreach($roadtankers as $i)
                                        <option value="{{ $i->id }}">{{ $i->plate }}</option>
                                        @endforeach
                                    @endif
                                    </select>
                                    @if ($errors->has('roadtanker_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('roadtanker_id') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group {{ $errors->has('time') ? ' has-error' : '' }}">
                                <label class="col-lg-2 control-label">Choose Time</label>
                                <div class="col-lg-10">
                                    <select class="form-control" id="time" name="time">
                                    <option disabled selected value>Choose Time</option>
                                    <option value="7.00 AM">7.00 AM</option>
                                    <option value="7.30 AM">7.30 AM</option>
                                    <option value="8.00 AM">8.00 AM</option>
                                    <option value="8.30 AM">8.30 AM</option>
                                    <option value="3.00 PM">3.00 PM</option>
                                    <option value="3.30 PM">3.30 PM</option>
                                    <option value="4.00 PM">4.00 PM</option>
                                    </select>
                                    @if ($errors->has('time'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('time') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-10 col-lg-offset-2">
                                    <button type="reset" class="btn btn-default">Cancel</button>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </fieldset>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
