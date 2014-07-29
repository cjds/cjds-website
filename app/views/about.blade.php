@extends('layouts.master')
@section('content')
<style>
	.para strong{
		color: #b22;
		text-align: justify;
	}

	.para{
		margin-top: 30px;
		margin-bottom: 0px;
		line-height: 1.6em;
	}
</style>
<div class='row'>
<div class='small-12 medium-4  medium-offset-4 large-4  large-offset-4 columns para'>
<h1> About Me </h1>
</div>
</div>
<div class='row'>
<div class='small-12 medium-4  medium-offset-4 large-4  large-offset-4 columns para'>
Hi, my name is <strong>C</strong>arl <strong>J</strong>ohn <strong>D</strong>aniel <strong>S</strong>aldanha. I'm a designer and developer from Mumbai, India.
</div>
</div>

<div class='row'>
<div class='small-12 medium-4  medium-offset-4 large-4  large-offset-4 columns para '>
I'm interested in artificial intelligence programming, responsive web design and typography.
</div>
</div>

<div class='row'>
<div class='small-12 medium-4  medium-offset-4 large-4  large-offset-4 columns para '>
If you wish to contact me you can contact me at <a href='mailto:cjds@live.com'>cjds AT live.com</a>.
</div>
</div>

<div class='row'>
<div class='small-12 medium-4  medium-offset-4 large-4  large-offset-4 columns para '>
You can check out my <a href='{{URL::to('projects')}}'>projects</a>, download my <a href='{{URL::asset('Resume.docx')}}' >resume</a> or visit my <a href='http://cjds.github.io/'>blog</a>.
</div>
</div>




@stop