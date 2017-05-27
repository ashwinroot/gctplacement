@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                  @if ($message)
                    <div class="alert alert-success alert-dismissable">
                      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                      <strong>Success!</strong> {{$message}}
                    </div>
                  @endif


                    @if (Auth::user()->isPR())
                      <div class="alert alert-info alert-dismissable">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Success!</strong> You have logged in as a PR of <strong>{{Auth::user()->dept}}</strong>.
                      </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
