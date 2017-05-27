@extends('layouts.app')

@section('content')
  <div class="navbar-default sidebar" role="navigation">
      <div class="sidebar-nav navbar-collapse">
          <ul class="nav" id="side-menu">
              <li class="sidebar-search">
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                    <button class="btn btn-default" type="button">
                        <i class="fa fa-search"></i>
                    </button>
                </span>
                </div>
                <!-- /input-group -->
            </li>
          </ul>
        </div>
  <div>
    
  </div>
  <div class="container">
      <div class="row">
          <div class="col-md-8 col-md-offset-2">
              <div class="panel panel-default">
                  <div class="panel-heading">Dashboard</div>
                  <div class="alert-info">
                      {{-- {{if($alert) $alert}} --}}
                       <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($users as $key => $user)
                            <tr>
                              <td>{{$user->id}}</td>
                              <td>{{$user->name}}</td>
                              <td>{{$user->email}}</td>
                            </tr>
                          @endforeach

                        </tbody>
                      </table>
                    </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
@endsection
