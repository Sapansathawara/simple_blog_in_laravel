@extends('admin/layout.layout')

@section('page_title','User Listing')

@section('container')

<div class="">
	  <div class="page-title">
		 <div class="title_left">
			<h4>User</h4>
			<h2><a href="{{url('/admin/user/add')}}">Add User</a></h2>
		 </div>
	  </div>
	  <div class="clearfix"></div>
	  <div class="row">
		<div class="col-md-12 flash_msg">{{session('msg')}}</div>
		 <div class="col-md-12 col-sm-12 ">
			<div class="x_panel">
			   <div class="x_content">
				  <div class="row">
					 <div class="col-sm-12">
						<div class="card-box table-responsive">
						   <table id="datatable" class="table table-striped table-bordered" style="width:100%">
							  <thead>
								 <tr>
									<th width='2%'>ID</th>
									<th width='25%'>Name</th>
									<th width='25%'>Username</th>
									<th width='10%'>Created Date</th>
									<th width='30%'>Action</th>
								 </tr>
							  </thead>
							  <tbody>
									@foreach ($result as $list)
									<tr>
										<td>{{$list->id}}</td>
										<td>{{$list->name}}</td>
										<td>{{$list->username}}</td>
										<td>{{$list->created_at}}</td>
										<td>
											@if($list->status==1)
												<a href="{{url('admin/user/status/0')}}/{{$list->id}}"><button type="button" class="btn btn-primary">Active</button></a>
											@elseif($list->status==0)
												<a href="{{url('admin/user/status/1')}}/{{$list->id}}"><button type="button" class="btn btn-warning">Deactive</button></a>
											@endif
											<a href="{{url('/admin/user/edit/'.$list->id)}}" class="btn btn-info color_white">Edit</a>
											<a href="{{url('/admin/user/delete/'.$list->id)}}" class="btn btn-danger color_white">Delete</a>
										</td>
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
	  </div>
   </div>
@endsection