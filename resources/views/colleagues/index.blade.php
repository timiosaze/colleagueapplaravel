@extends('layouts.app')

@section('content')
	
		<section class="section">
			<div class="create-form">
				<h3>New Colleague</h3>
				<form action="">
					<div class="form-group">
						<input type="text" class="form-control" name="title" placeholder="Colleague name">
					</div>
					<div class="form-group">
						<textarea name="" id="" cols="20" rows="3" class="form-control" placeholder="About Colleague"></textarea>
					</div>
					<hr>
					<div class="form-group">
						<div class="input-group mb-2">
					        <div class="input-group-prepend">
					          <div class="input-group-text">Friendship Rating</div>
					        </div>
					        <select class="form-control" id="exampleFormControlSelect1">
						      <option>1.0</option>
						      <option>2.0</option>
						      <option>3.0</option>
						      <option>4.0</option>
						      <option>5.0</option>
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
									<a href="#" class="edit">Edit</a>
								</div>
								<div class="col text-center">
									<form action="">
										<a href="#" class="delete">Delete</a>
									</form>
								</div>
							</div>
						</div>
					</li>

					@empty

					<li class="no-data text-center">
						No colleague yet.
					</li>	

					@endforelse
				</ul>
			</div>
		</section>
		<section class="section">
			<div class="paginate">
				<a href="#" class="btn btn-outline-primary">Prev</a>
				<a href="#" class="btn btn-outline-primary">Next</a>
			</div>
		</section>
	
@endsection