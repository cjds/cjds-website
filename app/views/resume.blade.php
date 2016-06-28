@extends('layouts.master2')
@section('content')
<style>
	.resume{
		margin-top: 50px;
	}

	ul.resumelist{
		list-style: none;
	}

	ul.resumelist li{
		font-weight: 900;
		display: inline-block;
	}

	ul.resumeprojects li{
		font-weight: 300;
	}

	ul.resumeprojects li.resumeheading{
		font-weight: 900;
		font-size: 1.1em
	}

	.innerresumepara{
		margin-bottom: 0px
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
<h1 style="display:inline">Résumé</h1> <button class='right'><a href='https://www.dropbox.com/s/xorqqno7aq6i8lm/Resume.pdf?dl=1'>Download a PDF</a></button>
<hr />
</div>



<div class='row'>
<h3> Education </h3>
<ul class='resumelist'>
<li>
	<span class='resumeheadline'>Georgia Institute of Technology</span> 
	<span class='right hide-for-small-only' style='line-height:1.6'> 2014 - Dec 2016 (expected)</span>
	<p class='innerresumepara'><em>M.S. Computer Science</em></p>
	<p >
		<strong>Relevant Courses:</strong>Multi Robot Systems, Advanced Computer Vision, Computational  Creativity, Prototyping Interactive Systems, Human Computer Interaction, Computability and Algorithms.
	</p>
</li>
<li>
	<span class='resumeheadline'>University Of Mumbai</span>
	<span class='right hide-for-small-only' style='line-height:1.6'> 2010 - 2014</span>
	<p class='innerresumepara'><em>B.E., Computer Engineering</em></p>
	<p><b>Relevant Courses: </b> Robotics, Artificial Intelligence, Soft Computing, Computer Graphics, Computer Architecture, Advanced Database Management Systems, Data Warehouse and Mining, Discrete Structures and Graph Theory, Analysis of Algorithms and Design</p>
</li>
</ul>
<hr />

</div>



<div class='row'>
	<h3> Work Experience </h3>
	<ul class="resumelist">
		<li>
		<span class='resumeheadline'>Georgia Tech Robot Autonomy & Interactive Learning Lab</span>
		<span class='right hide-for-small-only'>Jan 2016 - Present</span>
		<p class='innerresumepara'><em>Researcher</em></p>
		<p>Working with Prof. Sonia Chernova on the Robot Web Tools and the Robot Management System. Created a hierarchical task network generator in ROS that allows robots to adjust their plans based on interactions with the user.</p>
		</li>
		<li>
		<span class='resumeheadline'>Georgia Tech Research Network Operations Center</span>
		<span class='right hide-for-small-only'>Jan 2015 - Present</span>
		<p class='innerresumepara'><em>Graduate Research Assistant</em></p>
		<p>Working with Dr. Russ Clark and Dr. Matt Sanders to create a platform that allows student developers to access secure Georgia Tech data. Revamped the architecture and created methods for secure OAuth access. </p>
		</li>
		<li>
		<span class='resumeheadline'>Siemens Corporate Research</span>
		<span class='right'>May 2015 - Dec 2015</span>
		<p class='innerresumepara'><em>Software Engineering Intern</em></p>
		<p>Prototyped an augmented reality telepresence system for engineers to inspect wind turbines and rotors. Implemented gesture based interaction with leap motion. Used SIFT features to annotate the system components.</p>
		</li>
		<li>
		<span class='resumeheadline'>Edutek Infosystems</span>
		<span class='right'>May 2013 - May 2014</span>
		<p class='innerresumepara'><em>Software Engineering Intern</em></p>
		<p>Created the backbone infrastructure for a Learning Management System and created a series of modules. The modules were a web portal in which teachers could administer tests and tabulate grades of the students.</p>
		</li>
	</ul>
	<hr />
</div>


<div class='row'>
	<h3> Skills </h3>
	<ul class="resumelist">
	<li>Competencies:</li>
	<p>Robotics, Artificial Intelligence, Augmented Reality, Computer Vision, Web Development, RESTful API Design</p>
	<li>Programming Languages: </li>
	<p>Java (Proficient), Javascript (Proficient), Python (Proficient), C++ (Working Knowledge), PHP (Working Knowledge), SQL (Proficient), NoSQL (Working Knowledge), HTML5 & CSS3 (Proficient)</p>
	<li>Technologies:</li>
	<p>ROS, Torch, Theano, NLTK, Android Development, Node.JS, Angular.JS, Web Sockets</p>

	</ul>
	<hr />
</div>


<div class='row'>
<h3> Projects </h3>
<ul class="resumelist resumeprojects">
	<li class='resumeheading'>Robotics:</li><p></p>
	<li>Crowdsourcing Learning from Demonstration (RAIL Lab Project)</li>
	<span class='right hide-for-small-only'>Apr 2016 - Present</span>
	<p>Advised by Dr. Sonia Chernova. Developed a series of interfaces that allow crowdsourced users to demonstrate simple tasks to a robotic arm. We then learn from these demonstrations to train the robot to complete the task with a lower failure rate.</p>
	<li>Genetic Algorithm Soccer Playing Agents (Multi Robot Systems Project)</li>
	<span class='right hide-for-small-only'>Jan 2015 - Apr 2015</span>
	<p>Simulated a group of multi agent robots that develop a strategy for playing soccer through  a genetic algorithm. </p>
	<li>Teaching Robots Cooperative Tasks (Robotics Project)</li><span class='right hide-for-small-only'>Jan 2014 - Jun 2014</span>
	<p>Advised by Prof. Anuradha Srinivasan. Implemented an algorithm for multi-robot symbol grounding during tasks. Used genetic algorithms to predict what symbols corresponded to which  actions based on the action that other robots were taking.</p>
	<li class='resumeheading'>Machine Learning:</li><p></p>
	<li>AR Mario (Project under Prof. Mark Riedl):</li><span class='right hide-for-small-only'>Sep 2015 - Present</span>
	<p>	Advised by Prof. Mark Riedl. Developing an MR game that uses AI and computer vision to procedurally generate the content. Created the AI for inferring scene locations from a point cloud generated by a Kinect 2.0 as well as for potential virtual game elements. </p>
	<li>Deep Visual Questions (Advanced Computer Vision Project):</li><span class='right hide-for-small-only'>Jan 2016 - Apr 2016</span>
	<p>	Developed an LSTM (long short term memory) network)that given an input of an image could generate a series of natural language Q&A pairs on the content of the image. This work was aimed at generating a group of candidate questions that when answered could improve high level image understanding capabilities. </p>
	<li>Learning Food Taste with Neural Nets (Human Computer Interaction Project):</li><span class='right hide-for-small-only'>Aug 2014 - Dec 2014</span>
	<p>	Created a food recommendation system that used neural networks to predict user food preferences based on the user’s previous reviews and perceptions of taste. Implemented the neural network and accompanying Android app. Winner of the Georgia Tech Innovation Contest.</p>
	<li>Poetry Generation with Genetic Algorithms(BE Thesis):</li><span class='right hide-for-small-only'>Aug 2013 - Aug 2014</span>
	<p>	UUsed a genetic algorithm to develop a series of semantic rules that automatically generated poetry from the JIGSAW and WordNet corpora. Implemented reinforcement learning using feedback received from the generated poems. </p>
	<li class='resumeheading'>Applications and Human Factors:</li><p></p>
	<li>Learning with Google Glass (Siemens Corporate Research Project):</li><span class='right hide-for-small-only'>Jul 2015 - Dec 2015</span>
	<p>	Advised by Prof. Augusto Esteves. Created a Google Glass application that enabled users to create technical video manuals. Content creators record the steps using head gestures and automatic captions which are played back to users. Conducted usability tests with 8 participants. </p>
	<li>Georgia Tech Course Registration Redesign (Advised by Dean David White):</li><span class='right hide-for-small-only'>Jan 2015 - May 2015</span>
	<p>	Helped redesign the architecture of Georgia Tech’s registration system and create a series of APIs that can be used by students. Worked with the Office of Technology to implement a pilot and test the system. Conducted user research to determine what system the students would like </p>
</ul>
<hr />
</div>





@stop