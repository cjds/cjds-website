@extends('layouts.master2')
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


	.resume{
		font-family: 'Open Sans';
		margin-top: 50px;
	}

	ul.resumelist{
		list-style: none;
	}

	ul.resumelist li{
		font-weight: 900;
		display: inline-block;
	}
	p{
		margin-bottom:13px; 
	}

	.tag{
		font-size: 0.8em;
		border: 2px solid black;
		padding: 1rem;
		padding-top: 0.2rem;
		padding-bottom: 0.2rem;
	}
</style>
<div class='small-12 medium-4  medium-offset-4 large-6 large-offset-3 box columns resume'>

<div class='row'>
<h1 style="display:inline">Résumé</h1> <button class='right'><a href='https://www.dropbox.com/s/yek9orag9vcb9f1/Resume.pdf?dl=0'>Download a PDF</a></button>
<hr />
</div>



<div class='row'>
<h3> Education </h3>
<ul>
<p style="display:inline-block">Masters, Computer Science, Georgia Tech. (GPA: 3.7)</p><span class='right hide-for-small-only' style='line-height:1.6'>May 2015 - Dec 2015</span>
<p style="display:inline-block">Bachelor, Computer Science, University Of Mumbai (GPA 3.8)</p><span class='right hide-for-small-only' style='line-height:1.6'>May 2015 - Dec 2015</span>

</ul>
<hr />

</div>

<div class='row'>
<h3> Competencies </h3>
<div class='small-6 columns'>
	<ul>

		<li>Java, C++</li>
		<li>PHP, Python</li>
		<li>HTML5 & CSS3</li>
		<li>Android, Windows Phone</li>
	</ul>
</div>
<div class='small-6 columns'>
	<ul>
	
		<li>User Centered Designer</li>
		<li>Artificial Intelligence Researcher</li>
		<li>Ability to lead</li>
		<li>Entrepreuner</li>
	</ul>
</div>
<hr />

</div>

<div class='row'>
<h3> Work Experience </h3>
<ul class="resumelist">
<li>UX prototyper, Siemens Corporate Research</li><span class='right hide-for-small-only'>May 2015 - Dec 2015</span>
<p>Secret Stuff. All good, I promise</p>
<li>Graduate Research Assistant at Georgia Tech </li><span class='right hide-for-small-only'>Jan 2015 - Apr 2015</span>
<p>Working with Georgia Tech Office of Information Technology to improve the registration system for students. Performed user experience and user testing while designing and developing a new interface.</p>
<li>Software Developer at Edutek Infosystems</li><span class='right'>Mar 2013- Aug 2014</span>
<p>Created applications for colleges. Created a series of modules for grading students and test taking. Worked to improve the software engine. Lead the 4 programming teams. Currently running in 12 institutions in India </p>

</ul>
<hr />

</div>


<div class='row'>
<h3> Projects </h3>
<ul class="resumelist">
	<li>Genetic Algorithm Soccer</li><span class='right hide-for-small-only'>Jan 2015 - Apr 2015</span>
	<p>Agents that learn how to play soccer by themselves. This uses genetic algorithms train the agents to brat their opponents</p>
	<li>Rosie</li><span class='right hide-for-small-only'>Jan 2015 - Present</span>
	<p>A cooking machine that lets you use make food via an app. The machine allows you to automate the parts of cooking that you do not need to be there for.</p>
	<li>Gradhat</li><span class='right hide-for-small-only'>Aug 2014 - May 2014</span>
	<p>Created a web application that helps stu¬dents learning collaboratively and allows teachers to share their notes and information. Lead the team that created the website and designed the database and software. </p>
	<li>Kung Pao Curry:</li><span class='right hide-for-small-only'>May 2014 - Dec 2014</span>
	<p>An Android app that uses Artificial Intelligence to pick which dishes you would like in a restaurant before you go there. It is personalized to your tastes.
Won the Convergence Innovation Competition At Georgia Tech</p>

</ul>
<hr />
</div>


<div class='row'>
<h3> Research </h3>

<ul class="resumelist">
<li>Learning a Language for Co-Operative Tasks</li>
<p>Paper presented at the International Conference on Emerging Trends in Computer Science and Engineering, 2013. Created a system by which robots could create their own language and describe tasks. Co-lead of the research team an designed the algorithm. 

<!--<span class='tag'>Java</span>-->
</p>

<li>Computational Creativity - Digital Poems : </li>
<p>Allows computers to describe a given topic through poetry. The aim was to make a computer produce creative poetry that is relevant to the topic. Lead research team and designed the algorithm [Java]</p>

</div>
<hr />
<div class='row'>
<h3> Hackathons </h3>
<ul class="resumelist">
<li>Harman Kardon, Games for the Hearing Impaired</li><span class='right hide-for-small-only'>2015</span>
<p>Using the Harman Kardon Sound API, we created a game like Asteroids fir the blind with a 5.1 speaker system</p>
<li>AT&T, Smartzone</li><span class='right hide-for-small-only'>2014</span>
<p>Smartzone is an app that gathers data using the AT&T Digita Life API for insurance providers. It was designed so that insurance providers could use 
data from the home to suggest better premiums</p>
<li>VJTI, 10</li><span class='right hide-for-small-only'>2011</span>
<p>10 is an app on android built by me. It's a simple minimalistic game that tests players reflexes.</p>
</ul>
<hr />
</div>


@stop