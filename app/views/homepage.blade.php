@extends('layouts.master2')
@section('content')

<style type="text/css">
	.homelink img{
		width:auto;
		height: 35px;
	}
</style>
<div class='medium-6  medium-offset-3 large-6  large-offset-3 box columns' style="margin-top:50px;" ng-controller="mainController">
	<div class='row '>
		<div class='myname columns large-12' id='myname'>About Me</div>
		<hr />
	</div>
	<div class='row'>
		<p class="para">
		Hi, I'm pursuing a MS in Computer Science degree
		 at Georgia Institute of Technology specializing in Robotics and Perception.
		</p>	
		<p class="para">
		I'm interested in:
		</p>
		<ul class="para">
		<li>Social and Web Robotics, and Robot Collaboration</li>
		<li>Artificial Intelligence, and Machine Learning</li>
		<li>Augmented and Mixed Reality</li>
		</ul>		

	</div>
	<div class='row'>
	<div class="columns small-12 medium-12 small-centered">
		<a class="homelink" href='mailto:csaldanha3@gatech.edu'> <img src='{{URL::asset('email-icon.png')}}'   /> </a>
		<a class="homelink" href='mailto:csaldanha3@gatech.edu'><img src='{{URL::asset('GitHub-Mark-64px.png')}}'  /></a>
		<a class="homelink" href='mailto:csaldanha3@gatech.edu'> <img src='{{URL::asset('so icon.png')}}'  /> </a>
	</div>
	
	</div>

</div>

    @stop