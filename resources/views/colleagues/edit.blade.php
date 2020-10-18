@extends('layouts.app')

@section('content')
	
		<section class="section">
			<div class="create-form">
				<h3>Edit Colleague</h3>
				<form action="">
					<div class="form-group">
						<input type="text" class="form-control" name="title" placeholder="Colleague name" value="Awonusi Olajide">
					</div>
					<div class="form-group">
						<textarea name="" id="" cols="20" rows="3" class="form-control" placeholder="About Colleague">Very funny and still be best padi</textarea>
					</div>
					<hr>
					<div class="form-group">
						<div class="input-group mb-2">
					        <div class="input-group-prepend">
					          <div class="input-group-text">Friendship Rating</div>
					        </div>
					        <select class="form-control" id="exampleFormControlSelect1">
						      <option>1.0</option>
						      <option selected>2.0</option>
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

		
@endsection