@php
$role=Auth::user()->role;
@endphp
@extends('layouts.app')

@section('content')

<section class="col-md-10 col-sm-10 col-xs-12 py-4" style=" margin: inherit; background-color: white;">
    @auth
    @if($role=='admin')
    <div class="row" >
      <div class="col">
        <h2 class="d-flex" style="float: left;">User List</h2>
        <div class="input-group md-form form-sm form-1 pl-0" style="float: right;width: 230px;">
          <div class="input-group-prepend" style="">
            <span class="input-group-text lighten-3" id="basic-text1" style="background-color: #8296ab;"><i class="fas fa-search text-white"
                aria-hidden="true"></i></span>
          </div>
          <input type='text' id='name' placeholder='Search'style="padding-left: 10px;">
        </div>
      </div>      
    </div>
    @endif
    @endauth
    <div class="row justify-content-center" style="height: inherit;">
        
        @auth
        @if(session()->has('success'))
            <div class="col alert alert-warning alert-dismissible fade show" role="alert">
              <strong>{{session()->get('success')}}</strong> 
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
        @endif
        @if($role=='admin')
        {{--============ User's Table  ============--}}
        <div class="table-responsive">
            <table class="table table-striped table-sm">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Age</th>
                      <th>E-Mail</th>
                      <th>Phone</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($usersInfo as $info)
                    <tr>
                      <td>{{$info->name}}</td>
                      <td>{{round($info->age)}}</td>
                      <td>{{$info->email}}</td>
                      <td>{{$info->phone}}</td>                                  
                    </tr>
                    @endforeach
                    <tr class='notfound'>
                        <td colspan='4'>No record found</td>
                    </tr>                   
                  </tbody>
            </table>
        </div>
        
        
        @elseif($role=='user')
        <div class="card" style="    border: none;margin-top: 60px;margin-right: 74px;width: 613px;margin-left: 35px;">
            {{--============ User's Details  ============--}}
            <table class="table table-borderless">
                    <tbody >
                      @foreach($userDetails as $user)  
                      <tr>
                        <td>First Name</td>
                        <td>:</td>
                        <td>{{$user->first_name}}</td>
                      </tr>
                      <tr>
                        <td>Last Name</td>
                        <td>:</td>
                        <td>{{$user->last_name}}</td>
                      </tr>
                      <tr>
                        <td>Address</td>
                        <td>:</td>
                        <td>{{$user->address}}</td>
                      </tr>
                   
                      <tr>
                        <td>Phone</td>
                        <td>:</td>
                        <td>{{$user->phone}}</td>
                      </tr>
                        <tr>
                        <td>Email</td>
                        <td>:</td>
                        <td>{{$user->email}}</td>
                      </tr>
                      <tr>
                        <td>Birth Day</td>
                        <td>:</td>
                        <td>{{$user->birth}}</td>
                      </tr>
                      @endforeach
                    </tbody>
              </table>          
        </div>       
        @endif
        @endauth

    </div>
</section>
@endsection
