@extends('layouts.master')
@section('content')

<style type="text/css">
	.imagesotd{
		vertical-align:middle;margin-top:34px;border-right: 2px solid #222
	}

</style>
<div class='small-12 medium-6  medium-offset-3 large-6  large-offset-3 columns' style="margin-top:100px;text-align:center">
<div class='row' style="margin-bottom:20px;" >
<a href='{{URL::asset('Resume.docx')}}' style="text-decoration:underline;">Download My Resume</a>
</div>

	<div class='row' id='sotd'>
		<div class='small-12 medium-6 columns imagesotd' style="">
			<img src='{{URL::asset('sotd.jpg')}}'  />
		</div>
		<div class='small-12 medium-6 columns'>
			<h1 class='name'> Song Of The Day </h1>
			<div class='para'>
			<p>SOTD is a design project. I took the lyrics of one song each week and make it a series of pictures. Its an experiment both in designing and responsive web design.</p>
			<p><b>Role:</b> Designer</p>
			<span style='text-decoration:underline'><a href='{{URL::to('/sotd')}}'>Project Website</a></span>
			</div>
		</div>
	</div>
	<hr>

	<div class='row' id='gradhat'>
		<div class='small-12 medium-6 columns imagesotd'>
			<img src='{{URL::asset('gradhat.jpg')}}'  />
		</div>
		<div class='small-12 medium-6 columns'>
			<h1 class='name'>Gradhat </h1>
			<div class='para'>
			<p>Gradhat is a website which lets students in Mumbai University ask and answer questions. It also allows teachers teaching the same syllabus to collabarate and create notes for students</p>
			<p><b>Role:</b>Lead Programmer and Partner</p>
			<span style='text-decoration:underline'><a href='http://grad-hat.com'>Website</a></span>|
			<span style='text-decoration:underline'><a href='https://github.com/cjds/grad-hat'>Code on Github</a></span>
			</div>
		</div>
	</div>
	<hr>



	<div class='row '  id='ten'>
	<div class='small-12 medium-6 columns imagesotd'>
		<img src='{{URL::asset('ten.jpg')}}'  />
	</div>
	<div class='small-12 medium-6 columns'>
		<h1 class='name'> Ten </h1>
		<div class='para'>
			<p>10 is an app on android built by me. It's a simple minimalistic game that tests players reflexes.</p>
			<p><b>Role:</b> Programmer and Designer</p>
			<span style='text-decoration:underline'><a href='https://play.google.com/store/apps/details?id=com.cjds.dactyl&hl=en'>Android</a></span>
			| <span style='text-decoration:underline'><a href='#'>Code on Github</a></span>
		</div>
	</div>
	</div>
	<hr>



	<div class='row' id='beatsmixer'>
		<div class='small-12 medium-6 columns imagesotd'>
			<img src='{{URL::asset('beat mixer.jpg')}}'  />
		</div>
		<div class='small-12 medium-6 columns'>
			<h1 class='name'>Beats Mixer</h1>
			<div class='para'>
			<p>Beats Mixer is a Windows Phone app that allows you to mix several beats and create new music.</p>
			<p><b>Role:</b> Programmer and Designer</p>
			<span style='text-decoration:underline'><a href='http://www.windowsphone.com/en-in/store/app/beats-mixer/ac277ed6-70aa-4b14-a2ae-afa9b6ba0ee9'>Windows Phone Marketplace</a></span>
			</div>
		</div>
	</div>
	<hr>
	
	<div class='row'>
		<div class='small-12 medium-6 columns imagesotd'>
			<img src='{{URL::asset('projex.jpg')}}'  />
		</div>
		<div class='small-12 medium-6 columns'>
			<h1 class='name'>Projex</h1>
			<div class='para'>
			<p>Projex is a services company from Mumbai that does work with students. My work for them includes logo and branding</p>
			<p><b>Role:</b> Lead Designer</p>
			</div>
		</div>
	</div>
<hr>
	<div class='row'>
		<div class='small-12 medium-6 columns imagesotd' >
			<img src='{{URL::asset('iimun.jpg')}}' />
		</div>
	<div class='small-12 medium-6 columns'>
			<h1 class='name'>IIMUN</h1>
			<div class='para'>
			<p>IIMUN is Asia's largest Model United Nations. My work includes designing posters and billboards.</p>
			<p><b>Role:</b> Part Of Graphic Design Team</p>
			<span style='text-decoration:underline'><a href='http://www.iimun.in/'>Their Website</a></span>
			</div>

	</div>
	</div>
	
	</div>
</div>

@stop