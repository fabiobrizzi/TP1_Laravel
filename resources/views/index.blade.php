@extends('layouts.app')

<!--Script Css et JS pour la page Index -->
@extends('layouts.scriptIndex')




	
<div class="container-xl">
	
	<div class="table-responsive">
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2>Manage <b>Student</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="create" class="btn btn-success" ><i class="material-icons">&#xE147;</i> <span>Add New Student</span></a>
					</div>
				</div>
			</div>
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						
						<th>Nom</th>
						<th>Adresse</th>
						<th>Phone</th>
						<th>Email</th>
						<th>Date Of Birth</th>
						
					</tr>
				</thead>
				@foreach($students as $student)
				
				<tbody>
					<tr>
					
						<td><a href="{{$student->id}}">{{ ucfirst($student->nom) }}</a></td>
						<td><P>{{ ucfirst($student->adresse) }}</P>
						<td><P>{{ ucfirst($student->phone) }}</P>
						<td><P>{{ ucfirst($student->email) }}</P>
						<td><P>{{ ucfirst($student->date_of_birth)}}</P>
						
					</tr>
					
				</tbody>
				@endforeach
			</table>
		</div>
	</div>        
</div>



	





