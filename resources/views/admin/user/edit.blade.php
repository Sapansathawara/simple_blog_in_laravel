@extends('admin/layout.layout')
@section('page_title','Manage User')
@section('container')
<div class="">
   <div class="page-title">
      <div class="title_left">
         <h3>Manage User</h3>
      </div>
   </div>
   <div class="clearfix"></div>
   <div class="row">
      <div class="col-md-12 ">
         <div class="x_panel">
            <div class="x_content">
               <br />
               <form action="{{url('admin/user/update/'.$result['0']->id)}}" class="form-horizontal form-label-left" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="form-group row ">
                     <label class="control-label col-md-3 col-sm-3 ">Name</label>
                     <div class="col-md-9 col-sm-9 ">
                        <input type="text" class="form-control" placeholder="Name" value="{{$result['0']->name}}" name="name">
                        @error('name')
                        <span class="field_error">{{$message}}</span>
                        @enderror
                     </div>
                  </div>
                  <div class="form-group row ">
                     <label class="control-label col-md-3 col-sm-3 ">Username</label>
                     <div class="col-md-9 col-sm-9 ">
                        <input type="text" class="form-control" placeholder="Username" value="{{$result['0']->username}}" name="username">
                        @error('username')
                        <span class="field_error">{{$message}}</span>
                        @enderror
                     </div>
                  </div>
                  <div class="form-group row ">
                     <label class="control-label col-md-3 col-sm-3 ">Email</label>
                     <div class="col-md-9 col-sm-9 ">
                        <input type="email" class="form-control" placeholder="Email" value="{{$result['0']->email}}" name="email">
                        @error('email')
                        <span class="field_error">{{$message}}</span>
                        @enderror
                     </div>
                  </div>
                  <div class="form-group row ">
                     <label class="control-label col-md-3 col-sm-3 ">Password</label>
                     <div class="col-md-9 col-sm-9 ">
                        <input type="password" class="form-control" placeholder="Password" value="{{$result['0']->password}}" name="password">
                        @error('password')
                        <span class="field_error">{{$message}}</span>
                        @enderror
                     </div>
                  </div>
                  <div class="ln_solid"></div>
                  <div class="form-group">
                     <div class="col-md-9 col-sm-9  offset-md-3">
                        <button type="submit" class="btn btn-success">Submit</button>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection