<html>
<head>
  <title>Portfolio WEBER Antoine</title>
  <link rel="stylesheet" type="text/css" href="main.css" media="screen" />
</head>
<body>

<div class="container-fluid fill light-white-font">

  <div id="home" class="container-fluid fill dark-gray-background">
    <h1 class="center text-center">
      <p>Hi, my name is <strong class="middle-blue-font">Rodrigo Medeiros</strong></p>
      <p>and I'm <span class="element"></span></p>
      <p>living in <strong class="middle-blue-font">Brazil</strong>.</p>
    </h1>
  </div>
</div>

<div id="projects" class="container-fluid light-white-font">
  <h2 class="text-uppercase dark-gray-font">Projects</h2>
  <div class="container dark-gray-font">

    <?php
    $variable = [];
    foreach ($variable as $key => $value) {
    ?>

    <div class="row">

      <?php
      $variable = [];
      foreach ($variable as $key => $value) {
      ?>

        <div class="col-md-4">
          <div class="panel panel-default fixed-width center-block">
            <div class="panel-body">
              <a href="https://www.npmjs.com/package/delatinise-cli" target="delatinise-cli">
                <img class="img-responsive center-block" src="https://s3-sa-east-1.amazonaws.com/portfolio-stuff/images/npm-logo-300x300.png" />
              </a>
            </div>
            <div class="panel-footer">
              <h3>delatinise-cli</h3>
              <p>A CLI tool to remove accents from text files.</p>
            </div>
          </div>
        </div>

      <?php
      }
      ?>


    </div>

    <?php
    }
    ?>
    <div class="row">

      <div class="col-md-4">
        <div class="panel panel-default fixed-width center-block">
          <div class="panel-body">
            <a href="https://www.npmjs.com/package/delatinise-cli" target="delatinise-cli">
              <img class="img-responsive center-block" src="https://s3-sa-east-1.amazonaws.com/portfolio-stuff/images/npm-logo-300x300.png" />
            </a>
          </div>
          <div class="panel-footer">
            <h3>delatinise-cli</h3>
            <p>A CLI tool to remove accents from text files.</p>
          </div>
        </div>
      </div>


    </div>

  </div>


</div>

<div id="about" class="container-fluid">
  <h2 class="text-uppercase dark-gray-font">About me</h2>
  <div class="container">
    <div class="row">
      <div class="col-md-5 col-md-offset-1 col-sm-12">
        <p class="dark-gray-font text-justify">
          I'm a happy family guy, bacon addicted, who loves science and technology in general. Mostly, I try to learn everything I can. In my opinion, getting your hands dirty is the best way to learn a new skill.
        </p>
        <p class="dark-gray-font text-justify">
          Most of my coding experience were built upon the Java/Oracle DB stack, but I have played in the past with some other things like Smalltalk, C, Delphi, Matlab. A couple years ago I started to play with Node.js to take the rust off my Javascript skills, and I'm still loving it.
        </p>
      </div>
      <div class="col-md-5 col-sm-12">
        <p class="dark-gray-font text-justify">
          I'm open minded to new technologies, but fullstack web development and distributed systems are the two things that have grabbed my attention recently.            </p>
        <p class="dark-gray-font text-justify">
          I'm a hard worker, committed and self learner. Definitely, I'm not a <strong><a href="http://www.marcensign.com/stop-calling-yourself-a-guru-jedi-rock-star-and-ninja-unless-you-are-a-guru-jedi-rock-star-or-ninja/" target="_blank">guru jedi rockstar ninja</a></strong>, but I always get my stuff done.
        </p>
      </div>
    </div>
  </div>


  <div id="projectFacts" class="sectionClass">
    <div class="fullWidth eight columns">
        <div class="projectFactsWrap ">
            <div class="item wow fadeInUpBig animated animated" data-number="12" style="visibility: visible;">
                <i class="fa fa-briefcase"></i>
                <p id="number1" class="number">12</p>
                <span></span>
                <p>Projects done</p>
            </div>
            <div class="item wow fadeInUpBig animated animated" data-number="55" style="visibility: visible;">
                <i class="fa fa-smile-o"></i>
                <p id="number2" class="number">55</p>
                <span></span>
                <p>Happy clients</p>
            </div>
            <div class="item wow fadeInUpBig animated animated" data-number="359" style="visibility: visible;">
                <i class="fa fa-coffee"></i>
                <p id="number3" class="number">359</p>
                <span></span>
                <p>Cups of coffee</p>
            </div>
            <div class="item wow fadeInUpBig animated animated" data-number="246" style="visibility: visible;">
                <i class="fa fa-camera"></i>
                <p id="number4" class="number">246</p>
                <span></span>
                <p>Photos taken</p>
            </div>
        </div>
    </div>
</div>

<!--TIMELINE-->
<div class="container">
    <h1 class="project-name">RESPONSIVE TIMELINE</h1>
		<div id="timeline">
			<div class="timeline-item">
				<div class="timeline-icon">
					<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="21px" height="20px" viewBox="0 0 21 20" enable-background="new 0 0 21 20" xml:space="preserve">
<path fill="#FFFFFF" d="M19.998,6.766l-5.759-0.544c-0.362-0.032-0.676-0.264-0.822-0.61l-2.064-4.999
	c-0.329-0.825-1.5-0.825-1.83,0L7.476,5.611c-0.132,0.346-0.462,0.578-0.824,0.61L0.894,6.766C0.035,6.848-0.312,7.921,0.333,8.499
	l4.338,3.811c0.279,0.246,0.395,0.609,0.314,0.975l-1.304,5.345c-0.199,0.842,0.708,1.534,1.468,1.089l4.801-2.822
	c0.313-0.181,0.695-0.181,1.006,0l4.803,2.822c0.759,0.445,1.666-0.23,1.468-1.089l-1.288-5.345
	c-0.081-0.365,0.035-0.729,0.313-0.975l4.34-3.811C21.219,7.921,20.855,6.848,19.998,6.766z"/>
</svg>

				</div>
				<div class="timeline-content">
					<h2>LOREM IPSUM DOLOR</h2>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit.
						Atque, facilis quo maiores magnam modi ab libero praesentium blanditiis.
					</p>
					<a href="#" class="btn">button</a>
				</div>
			</div>

			<div class="timeline-item">
				<div class="timeline-icon">
					<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="21px" height="20px" viewBox="0 0 21 20" enable-background="new 0 0 21 20" xml:space="preserve">
<g>
	<path fill="#FFFFFF" d="M17.92,3.065l-1.669-2.302c-0.336-0.464-0.87-0.75-1.479-0.755C14.732,0.008,7.653,0,7.653,0v5.6
		c0,0.096-0.047,0.185-0.127,0.237c-0.081,0.052-0.181,0.06-0.268,0.02l-1.413-0.64C5.773,5.183,5.69,5.183,5.617,5.215l-1.489,0.65
		c-0.087,0.038-0.19,0.029-0.271-0.023c-0.079-0.052-0.13-0.141-0.13-0.235V0H2.191C1.655,0,1.233,0.434,1.233,0.97
		c0,0,0.025,15.952,0.031,15.993c0.084,0.509,0.379,0.962,0.811,1.242l2.334,1.528C4.671,19.905,4.974,20,5.286,20h10.307
		c1.452,0,2.634-1.189,2.634-2.64V4.007C18.227,3.666,18.12,3.339,17.92,3.065z M16.42,17.36c0,0.464-0.361,0.833-0.827,0.833H5.341
		l-1.675-1.089h10.341c0.537,0,0.953-0.44,0.953-0.979V2.039l1.459,2.027V17.36L16.42,17.36z"/>
</g>
</svg>

				</div>
				<div class="timeline-content right">
					<h2>LOREM IPSUM DOLOR</h2>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, facilis quo. Maiores magnam modi ab libero praesentium blanditiis consequatur aspernatur accusantium maxime molestiae sunt ipsa.
					</p>
					<a href="#" class="btn">button</a>
				</div>
			</div>

			<div class="timeline-item">
				<div class="timeline-icon">
<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="21px" height="20px" viewBox="0 0 21 20" enable-background="new 0 0 21 20" xml:space="preserve">
<path fill="#FFFFFF" d="M19.998,6.766l-5.759-0.544c-0.362-0.032-0.676-0.264-0.822-0.61l-2.064-4.999
	c-0.329-0.825-1.5-0.825-1.83,0L7.476,5.611c-0.132,0.346-0.462,0.578-0.824,0.61L0.894,6.766C0.035,6.848-0.312,7.921,0.333,8.499
	l4.338,3.811c0.279,0.246,0.395,0.609,0.314,0.975l-1.304,5.345c-0.199,0.842,0.708,1.534,1.468,1.089l4.801-2.822
	c0.313-0.181,0.695-0.181,1.006,0l4.803,2.822c0.759,0.445,1.666-0.23,1.468-1.089l-1.288-5.345
	c-0.081-0.365,0.035-0.729,0.313-0.975l4.34-3.811C21.219,7.921,20.855,6.848,19.998,6.766z"/>
</svg>

				</div>
				<div class="timeline-content">
					<h2>LOREM IPSUM DOLOR</h2>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, facilis quo. Maiores magnam modi ab libero praesentium blanditiis consequatur aspernatur accusantium maxime molestiae sunt ipsa.
					</p>
					<a href="#" class="btn">button</a>
				</div>
			</div>
		</div>
	</div>
<!--TIMELINE-->




</div>

<div id="contact" class="footer">
  <div class="container">
    <div class="row">
      <button type="button" name="email-btn" class="btn btn-default middle-blue-background center-block email">
        <a href="mailto:rodrigo.mangue@gmail.com" class="text-center text-uppercase"><i class="fa fa-envelope"></i> Email me</a>
      </button>
      <br />
      <p class="text-center light-white-font">
        <a class="middle-blue-font" href="https://www.twitter.com/somerodrigo" title="I'm still getting the hang of it" target="twitter"><strong><i class="fa fa-twitter"></i></strong></a>
        &nbsp;&nbsp;&bull;&nbsp;&nbsp;
        <a class="middle-blue-font" href="https://br.linkedin.com/in/somerodrigo" title="My previous experiences" target="linkedin"><strong><i class="fa fa-linkedin"></i></strong></a>
        &nbsp;&nbsp;&bull;&nbsp;&nbsp;
        <a class="middle-blue-font" href="https://github.com/rodrigo-medeiros" title="My code: see for yourself" target="github"><strong><i class="fa fa-github"></i></strong></a>
        &nbsp;&nbsp;&bull;&nbsp;&nbsp;
        <a class="middle-blue-font" href="http://stackoverflow.com/users/2241993/rodrigo-medeiros" title="Me trying to help" target="so"><strong><i class="fa fa-stack-overflow"></i></strong></a>
        &nbsp;&nbsp;&bull;&nbsp;&nbsp;
        <a class="middle-blue-font" href="https://codepen.io/rodrigo-medeiros/" title="My pens" target="codepen"><strong><i class="fa fa-codepen"></i></strong></a>
      </p>
    </div>
  </div>

</div>
</body>
<footer>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script type="text/javascript" src="main.js"></script>
</footer>
</html>
