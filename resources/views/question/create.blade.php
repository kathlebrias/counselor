@extends('master')


@section('content')

<br>
<H1>Create Question</H1>
{!!Form::open(['action'=>'QuestionController@store','method'=> 'POST'])!!}

  	<div class="form-group">
		{{Form::label('category_type','Category Type')}}
		<br>
		{{Form::select('category_type',[1 => 'Psychological Exam',2 => 'Kind of Learners',3 => 'Personality Exam',4 => 'Stress Exam'],['class'=> 'form-control'])}}
	</div>

  	<div class="form-group">
		{{Form::label('question_type','Question Type')}}
		<br>
		{{Form::select('question_type',[ 1 => 'Agree-Slightly Agree-Slighly Disagree-Disagree', 2 => 'Yes-Maybe-No', 3 => 'Always-Sometimes-Rarely-Never'],['class'=> 'form-control'])}}
	</div>

  	<div class="form-group">
		{{Form::label('counselor_name','Counselor')}}
		<br>
		{{Form::select('counselor_name',[ 1 => 'Arches, Kyle Christian M.', 2 => 'Bacol, Cyrene Ernest', 3 => 'Lebrias,Katherine Mitz C.'],['class'=> 'form-control'])}}
	</div>


  	<div class="form-group">
		{{Form::label('question','Question')}}
		{{Form::text('question','',['class'=> 'form-control', 'placeholder'=> "Enter question"])}}
	</div>
  	
  	

	{{Form::submit('Submit',['class'=>'btn btn-primary'])}}


{!! Form::close() !!}



@endsection
