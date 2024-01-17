@extends('admin/layout.layout')

@section('page_title','Post Listing')

@section('container')

<div class="">
	  <div class="page-title">
		 <div class="title_left">
			<h4>Post</h4>
			<h2><a href="{{url('/admin/post/add')}}">Add Post</a></h2>
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
									<th width='50%'>Title</th>
									<th width='15%'>Image</th>
									<th width='10%'>Date</th>
									<th width='23%'>Action</th>
								 </tr>
							  </thead>
							  <tbody>
									@foreach ($result as $list)
									<tr>
										<td>{{$list->id}}</td>
										<td>{{$list->title}}</td>
										<td><a href="{{ asset('storage/post/'.$list->image) }}" target="_blank"><img src="{{ asset('storage/post/'.$list->image) }}" width="100px"></a></td>
										<td>{{$list->post_date}}</td>
										<td>
											@if($list->status==1)
												<a href="{{url('admin/post/status/0')}}/{{$list->id}}"><button type="button" class="btn btn-primary">Active</button></a>
											@elseif($list->status==0)
												<a href="{{url('admin/post/status/1')}}/{{$list->id}}"><button type="button" class="btn btn-warning">Deactive</button></a>
											@endif
											<a href="{{url('/admin/post/edit/'.$list->id)}}" class="btn btn-info color_white">Edit</a>
											<a href="{{url('/admin/post/delete/'.$list->id)}}" class="btn btn-danger color_white">Delete</a>
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