@extends('layouts.master2')
@section('content')
<div class='medium-6  medium-offset-3 large-6  large-offset-3 box columns' style="margin-top:50px;" ng-controller="mainController">
	<div class='row '>
		<div class='myname columns large-12' id='myname'>About Me</div>
		<hr />
	</div>
	<div class='row'>
		<p class="para">
		Hi, my name is Carl Saldanha. I'm a designer and developer
		doing my Masters at Georgia Tech.
		</p>	
		<p class="para">
		I'm interested in 
		</p>
		<ul class="para">
		<li>Multi Robot Systems and Robot Collaboration</li>
		<li>Artificial Intelligence and Intelligent Design</li>
		<li>Augmented Reality interfaces and interaction</li>
		among other stuff
		</ul>		

	</div>
	<div class='row'>
	<div class="columns small-6 medium-4 small-centered">
		<button class="centered even-3"><a href='mailto:csaldanha3@gatech.edu'> Contact me </a></button>
	</div>
	
	</div>

</div>

    @stop