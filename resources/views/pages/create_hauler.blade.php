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
                <div class="panel-heading">Create hauler</div>
                <div class="panel-body">

                    <form class="form-horizontal" method="POST" action="{{ route('hauler_admin.store') }}">
                      {{ csrf_field() }}
                        <fieldset>
                            <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                                <label class="col-lg-2 control-label">Username</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" id="username" name="username" placeholder="Enter Username">
                                    @if ($errors->has('username'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                     @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label class="col-lg-2 control-label">Email</label>
                                <div class="col-lg-10">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email">
                                    @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group {{ $errors->has('hauler_id') ? ' has-error' : '' }}">
                                <label class="col-lg-2 control-label">Assign Hauler</label>
                                <div class="col-lg-10">
                                    <select class="form-control" id="hauler_id" name="hauler_id">
                                    <option disabled selected value>Choose Hauler</option>
                                    <option value="1">Bagan Cipta (BCSB)</option>
                                    <option value="2">Shaziman (STSB)</option>
                                    <option value="3">ZHA</option>
                                    </select>
                                    @if ($errors->has('hauler_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('hauler_id') }}</strong>
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
