@extends('layouts')
@section('content')
<div class="col-12 col-lg-6 grid-margin">
	<div class="card">
		<div class="card-body">
			<h2 class="card-title">Basic form elements</h2>

			<p class="alert-success"><?php 
			$success=Session::get('success');
			if($success)
			{
				echo $success;
				Session::put('success',null);
			}
			?>  
		</p>

		<form class="forms-sample" method="post" action="{!! route('admin.updatestudent',$student->student_id ) !!}" enctype="multipart/form-data">
			{{ csrf_field() }}
			<div class="form-group">
				<label for="exampleInputEmail1">Student Name</label>
				<input type="text" class="form-control p-input" name="student_name" aria-describedby="emailHelp" placeholder="{{$student->student_name}}" >
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Student Roll</label>
				<input type="text" class="form-control p-input" name="student_roll" placeholder="{{$student->student_roll}}">
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Student Father's Name</label>
				<input type="text" class="form-control p-input" name="student_fathername" placeholder="{{$student->student_fathername}}">
			</div>

			<div class="form-group">
				<label for="exampleInputPassword1">Student Mother's Name</label>
				<input type="text" class="form-control p-input" name="student_mothername" placeholder="{{$student->student_mothername}}">
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Student Email</label>
				<input type="email" class="form-control p-input" name="student_email" placeholder="{{$student->student_email}}">
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Student Phone</label>
				<input type="test" class="form-control p-input" name="student_phone" placeholder="{{$student->student_phone}}">
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Student Address</label>
				<input type="test" class="form-control p-input" name="student_address" placeholder="{{$student->student_address}}">
			</div> 
			<div class="form-group">
				<label for="exampleInputPassword1">Student Password</label>
				<input type="password" class="form-control p-input" name="student_password" placeholder="{{$student->student_password}}">
			</div>
			<!-- <div class="form-group">
				<label>Edit Photo</label>
				<div class="row">
					<div class="col-12">
						<label for="exampleInputFile2" class="btn btn-outline-primary btn-sm"><i class="mdi mdi-upload btn-label btn-label-left"></i>Image</label>
						<input type="file" class="form-control-file" name="student_image" id="exampleInputFile2" aria-describedby="fileHelp">
						<small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
					</div>
				</div>
			</div> -->
		
			<div class="form-group">
				<label for="exampleInputPassword1">Student Department</label>
				<select class="form-control p-input" name="student_department">
					<option value="1">CSE</option>
					<option value="2">EEE</option>
					<option value="3">ECE</option>
					<option value="4">BBA</option>
					<option value="5">MBA</option>
				</select>
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Student Admission Year</label>
				<input type="date" class="form-control p-input" name="student_admissionyear" placeholder="{{$student->student_admissionyear}}">
			</div>
			<button type="submit" class="btn btn-success btn-block">Update</button>
		</form>
	</div>
</div>
</div>
@endsection