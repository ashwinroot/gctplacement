@extends('layouts.app')

@section('content')
  <h1> Your Profile </h1>
  <form role="form" method="post" action='update/{{$user->id}}'>
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="form-group row">
      <label for="example-text-input" class="col-md-2">Name</label>
        <div class="col-md-8">
          <input class="form-control" type="text" value="{{$user->name}}" name="name">
        </div>
    </div>
    <div class="form-group row">
      <label for="example-text-input" class="col-md-2">Course</label>
        <div class="col-md-8">
          <input class="form-control" type="text" value="{{$user->course}}" name="course"> {{-- have to change into select--}}
        </div>
    </div>
    <div class="form-group row">
      <label for="example-text-input" class="col-md-2">Department</label>
        <div class="col-md-8">
          <input class="form-control" type="text" value="{{$user->dept}}" name="dept"> {{-- have to change into select--}}
        </div>
    </div>
    <div class="form-group row">
      <label for="example-text-input" class="col-md-2">Permanent Address</label>
        <div class="col-md-8">
          <textarea class="form-control" type="text" value="{{$user->permadd}}" name="permadd">{{$user->permadd}} </textarea>
        </div>
    </div>
    <div class="form-group row">
      <label for="example-text-input" class="col-md-2">Temporary Address</label>
        <div class="col-md-8">
          <textarea class="form-control" type="text" value="{{$user->tempadd}}" name="tempadd"> {{$user->tempadd}}</textarea>
        </div>
    </div>
    <div class="form-group row">
      <label for="example-text-input" class="col-md-2">10th passed year</label>
        <div class="col-sm-2">
          <input class="form-control" type="text" value="{{$user->tenpassyear}}" name="10thpass">
        </div>
    </div>
    <div class="form-group row">
      <label for="example-text-input" class="col-md-2">10th pass percentage</label>
        <div class="col-sm-2">
          <input class="form-control" type="text" value="{{$user->tenpercentage}}" name="10percentage">
        </div>
    </div>
    <div class="form-group row">
      <label for="example-text-input" class="col-md-2">12th passed year</label>
        <div class="col-sm-2">
          <input class="form-control" type="text" value="{{$user->twelvepassyear}}" name="12thpass">
        </div>
    </div>
    <div class="form-group row">
      <label for="example-text-input" class="col-md-2">12th pass percentage</label>
        <div class="col-sm-2">
          <input class="form-control" type="text" value="{{$user->twelvepercentage}}" name="12percentage">
        </div>
    </div>
    <div class="form-group row">
      <label for="example-text-input" class="col-md-2">CGPA</label>
        <div class="col-sm-2">
          <input class="form-control" type="text" value="{{$user->cgpa}}" name="cgpa">
          (round off to one decimal)
        </div>
    </div>
    <div class="form-group row">
      <label for="example-text-input" class="col-md-2">Current Arrear</label>
        <div class="col-sm-2">
          <label class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" {{$user->currarrear==1?"checked":" "}} name="currarrear">
            <span class="custom-control-indicator"></span>
          </label>
        </div>
      <label for="example-text-input" class="col-md-2">History of Arrear</label>
        <div class="col-sm-2">
          <label class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" {{$user->histarrear==1?"checked":" "}} name="histarrear">
            <span class="custom-control-indicator"></span>
          </label>
        </div>
      <label for="example-text-input" class="col-md-2">All Cleared</label>
        <div class="col-sm-2">
          <label class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" {{$user->allclear==1?"checked":" "}} name="allclear">
            <span class="custom-control-indicator"></span>
          </label>
        </div>
    </div>
    <div class="form-group row">
      <div class="col-lg-offset-4">
        <button type="submit" class="btn btn-primary">Update</button>
      </div>
    <div class="form-group row">


    </div>

    </div>
  </form>

@endsection
