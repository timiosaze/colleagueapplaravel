@extends('layouts.app')

@section('content')
	
		<section class="section">
			<div class="create-form">
				<h3>Edit Colleague</h3>
				@if ($errors->any())
					<div class="alert alert-danger">
						{{ $errors->first() }}
					</div>
				@endif
				<form action="{{ route('colleague.update', $colleague->id )}}" method="POST">
					@csrf
					@method('PUT')
					<div class="form-group">
						<input type="text" class="form-control" name="name" placeholder="Colleague name" value="{{$colleague->name}}">
					</div>
					<div class="form-group">
						<textarea name="body" id="" cols="20" rows="3" class="form-control" placeholder="About Colleague">{{$colleague->body}}</textarea>
					</div>
					<hr>
					<div class="form-group">
						<div class="input-group mb-2">
					        <div class="input-group-prepend">
					          <div class="input-group-text">Friendship Rating</div>
					        </div>
					        <select class="form-control" id="exampleFormControlSelect1" name="rating">
						      <option value="1.0" @if (old('rating', $colleague->rating) === "1.0") selected @endif>1.0</option>
						      <option value="2.0" @if (old('rating', $colleague->rating) === "2.0") selected @endif>2.0</option>
						      <option value="3.0" @if (old('rating', $colleague->rating) === "3.0") selected @endif>3.0</option>
						      <option value="4.0" @if (old('rating', $colleague->rating) === "4.0") selected @endif>4.0</option>
						      <option value="5.0" @if (old('rating', $colleague->rating) === "5.0") selected @endif>5.0</option>
						    </select>
					    </div>
					</div>
					<button class="btn-primary btn float-right">Update</button>
					<div class="clearfix"></div>
				</form>
			</div>
		</section>

		
@endsection