@extends('layouts.master')
@section('content')
<div class='medium-6  medium-offset-3 large-4  large-offset-4 columns' style="margin-top:100px;">
	<div class='row '>
		<div class='myname columns large-12' id='myname'>Carl Saldanha</div>
	</div>
	<div class='row '>
		<div class='hrline columns large-12'><hr></div>
	</div>
	<div class='row '>
		<div class='columns large-12 lobster' id='designer'>Designer</div>
	</div>
	<div class='row '>
		<div class='columns small-2 lobster' style="color:#fff;padding:0" id='and'>&
		</div>
		<div class='columns small-10 kozuka' id='developer'>Developer</div>
	</div>
	<div class='row '>
		<div class='hrline columns large-12'><hr></div>
	</div>

	<div class='row'>
		<div class='columns small-12'>
			<h1 id='projects'>Projects</h1>
		</div>
	</div>
	
	<div class='row list'>
		<ul style="list-style:none;color:#fff;">
		
		<li><a href="projects.html#gradhat">Gradhat | Lead Developer</a></li>
		<li><a href="#">Song Of The Day | Design Project</a></li>
		<li><a href="#">10</a></li>
		<li><a href="{{URL::to('projects#gradhat');}}" style="font-size:1em;text-decoration:underline">
more</a></li>
		</ul>
	</div>
</div>
    <script src="{{URL::asset('js/vendor/jquery.js')}}"></script>
    <script src="{{URL::asset('js/foundation.min.js')}}"></script>
    <script src="{{URL::asset('js/jquery.fittext.js')}}"></script>
    
    <script>
      $(document).foundation();
      $("#designer").fitText(0.33);
      $("#and").fitText(0.075);
      $("#myname").fitText(0.6);
      $("#developer").fitText(0.45);
      $("#projects").fitText(0.35);
	  $("#developer").fitHeight($("#and"));
    </script>

    @stop