@extends('layouts.app')

@section('content')
	
		<section class="section">
			<div class="create-form">
				<h3>New Colleague</h3>
				@if ($errors->any())
					<div class="alert alert-danger" role="alert">
						{{ $errors->first() }}
					</div>
				@endif
				@if (session('success'))
					<div class="alert alert-success" role="alert">
						{{session('success')}}
					</div>
				@endif
				@if (session('failure'))
					<div class="alert alert-danger" role="alert">
						{{session('failure')}}
					</div>
				@endif
				<form action="{{route('colleague.store')}}" method="POST">
					@csrf
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Colleague name" name="name" value="{{old('name') ? old('name') : ''}}">
					</div>
					<div class="form-group">
						<textarea name="body" id="" cols="20" rows="3" class="form-control" placeholder="About Colleague">{{old('body') ? old('body') : ''}}</textarea>
					</div>
					<hr>
					<div class="form-group">
						<div class="input-group mb-2">
					        <div class="input-group-prepend">
					          <div class="input-group-text">Friendship Rating</div>
					        </div>
					        <select name="rating" class="form-control" id="exampleFormControlSelect1">
						      <option value="1.0">1.0</option>
						      <option value="2.0">2.0</option>
						      <option value="3.0">3.0</option>
						      <option value="4.0">4.0</option>
						      <option value="5.0">5.0</option>
						    </select>
					    </div>
					</div>
					<button class="btn-primary btn float-right">Create</button>
					<div class="clearfix"></div>
				</form>
			</div>
		</section>

		<section class="section">
			<div class="data">
				<h5>Colleagues</h5>
				<ul>
					@forelse ($colleagues as $colleague)

					<li class="data-list">
						<div class="data-text">
							<h4 class="title">{{$colleague->name}}</h4>
							<p class="text-class">{{$colleague->body}}</p>
							<h6>{{$colleague->rating}}/5</h6>
						</div>
						<div class="actions">
							<div class="row">
								<div class="col text-center">
									<a href="{{route('colleague.edit', $colleague->id)}}" class="edit">Edit</a>
								</div>
								<div class="col text-center">
									<a href="#" class="delete" data-toggle="modal" data-target="#exampleModal{{$colleague->id}}">Delete</a>
								</div>
							</div>
						</div>
					</li>
					<!-- Modal -->
					<div class="modal fade" id="exampleModal{{$colleague->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Delete Colleague</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
							</div>
							<div class="modal-body">
							{{Str::limit($colleague->name, 20)}}
							</div>
							<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							<form action="{{route('colleague.destroy', $colleague->id)}}" method="POST">
								@csrf
								@method('DELETE')
								<button type="submit" class="btn btn-primary">Delete</button>
							</form>
							</div>
						</div>
						</div>
					</div>
					@empty

					<li class="no-data text-center">
						No colleague yet.
					</li>	

					@endforelse
				</ul>
			</div>
		</section>
		<section class="section">
			{{$colleagues->links()}}
		</section>
	
@endsection