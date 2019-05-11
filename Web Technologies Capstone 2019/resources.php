<!--Code reuse in progress: career pathways here-->
<?php include('library/head_section.inc');?>
<?php include('library/nav_section.inc');?>
<body>
	<div class="container" id="main">
	<div class="page-text">
	<h1>Resources</h1>
	<p>Here is a list of resources to aid you in your journey of exploring the local IT field. Split into three categories, career development, community, and educational, there's something here for everyone.</p>
	</div>
	
	<!-- tab links -->
	<ul class="nav nav-tabs" id="resources-tabs">
	  <li class="nav-item">
		<button class="nav-link tablinks" onclick="openCategory(event, 'careerDevelopment')">Career Development</button>
	  </li>
	  <li class="nav-item">
		<button class="nav-link tablinks" onclick="openCategory(event, 'community')">Community</button>
	  </li>
	  <li class="nav-item">
		<button class="nav-link tablinks" onclick="openCategory(event, 'educational')">Educational</button>
	  </li>
	</ul>
	
	
	<!-- tab content -->
	<!-- content for career dev -->
	<div id="careerDevelopment" class="tabcontent">
		<div class="card-columns">
		  <div class="card text-white bg-secondary mb-3">
			<img src="images/career_development.jpg" class="card-img-top" alt="Businesswoman, standing near a building and looking at a notepad">
			<div class="card-body">
			  <h5 class="card-title">Career Development</h5>
			  <p class="card-text">These links provide resources that are intended to help you explore career paths and find a good fit for you.</p>
			</div>
		  </div>
		  <div class="card">
			<div class="card-body">
			  <h5 class="card-title">Kirkwood Career Coach</h5>
			  <p class="card-text">Includes a career assessment personality test, career browsing, and Kirkwood Community College program browsing.</p>
			  <a href="https://kirkwood.emsicareercoach.com/" class="btn btn-primary mt-auto">Visit website</a>
			</div>
		  </div>
		  <div class="card">
			<div class="card-body">
			  <h5 class="card-title">Future Ready Iowa</h5>
			  <p class="card-text">Includes job information, resources for those looking to build professional skills, and resources for employers.</p>
			  <a href="https://www.futurereadyiowa.gov/" class="btn btn-primary mt-auto">Visit website</a>
			</div>
		  </div>
		  <div class="card">
			<div class="card-body">
			  <h5 class="card-title">Kirkwood Career Services</h5>
			  <p class="card-text">Includes job-seeking skills resources, resources for those looking to build professional skills, and resources for employers.</p>
			  <a href="http://www.kirkwood.edu/careerservices" class="btn btn-primary mt-auto">Visit website</a>
			</div>
		  </div>
		</div>
	</div>
	<!-- content for community -->
	<div id="community" class="tabcontent">
	<div class="card-columns">
		  <div class="card text-white bg-secondary mb-3">
			<img src="images/community.jpg" class="card-img-top" alt="A group of people, gathered around a table and having a discussion">
			<div class="card-body">
			  <h5 class="card-title">Community</h5>
			  <p class="card-text">These are links to websites that represent local organizations that are a part of our Iowa community.</p>
			</div>
		  </div>
		  <div class="card">
			<div class="card-body">
			  <h5 class="card-title">Cedar Rapids Metro Economic Alliance</h5>
			  <p class="card-text">An organization featuring 1,200 member businesses in the Cedar Rapids area. Includes upcoming event information.</p>
			  <a href="https://www.cedarrapids.org/" class="btn btn-primary mt-auto">Visit website</a>
			</div>
		  </div>
		  <div class="card">
			<div class="card-body">
			  <h5 class="card-title">Iowa City Area Development</h5>
			  <p class="card-text">An organization serving the workforce and economic development of interstate commerce companies in Eastern Iowa. Includes upcoming event information.</p>
			  <a href="http://www.iowacityareadevelopment.com/" class="btn btn-primary mt-auto">Visit website</a>
			</div>
		  </div>
		  <div class="card">
			<div class="card-body">
			  <h5 class="card-title">Iowa Workforce Development</h5>
			  <p class="card-text">Offers resources and services for both individuals and businesses involved in the local workforce.</p>
			  <a href="https://www.iowaworkforcedevelopment.gov/" class="btn btn-primary mt-auto">Visit website</a>
			</div>
		  </div>
		  		  <div class="card">
			<div class="card-body">
			  <h5 class="card-title">Iowa's Creative Corridor</h5>
			  <p class="card-text">A seven-county alliance that strives for economic progress, workforce development, and growing creative ideas.</p>
			  <a href="http://iowascreativecorridor.com/home/" class="btn btn-primary mt-auto">Visit website</a>
			</div>
		  </div>
		  <div class="card">
			<div class="card-body">
			  <h5 class="card-title">Technology Association of Iowa</h5>
			  <p class="card-text">A statewide organization for Iowa's technology community. Includes news and events.</p>
			  <a href="https://www.technologyiowa.org/" class="btn btn-primary mt-auto">Visit website</a>
			</div>
		  </div>
		</div>
	</div>
	<!-- content for educational -->
	<div id="educational" class="tabcontent">
	<div class="card-columns">
		  <div class="card text-white bg-secondary mb-3">
			<img src="images/education.jpg" class="card-img-top" alt="An open book">
			<div class="card-body">
			  <h5 class="card-title">Educational</h5>
			  <p class="card-text">These links provide resources that are intended to help you explore career paths and find a good fit for you.</p>
			</div>
		  </div>
		  <div class="card">
			<div class="card-body">
			  <h5 class="card-title">Code.org (Hour of Code)</h5>
			  <p class="card-text">A free online resource for learning to code, aimed primarily at young students.</p>
			  <a href="https://code.org/" class="btn btn-primary mt-auto">Visit website</a>
			</div>
		  </div>
		  <div class="card">
			<div class="card-body">
			  <h5 class="card-title">CoderDojo</h5>
			  <p class="card-text">A free online resource for local programming clubs for young people. Includes volunteer opportunities and resources to start your own club.</p>
			  <a href="https://coderdojo.com/" class="btn btn-primary mt-auto">Visit website</a>
			</div>
		  </div>
		  <div class="card">
			<div class="card-body">
			  <h5 class="card-title">DeltaV Code School</h5>
			  <p class="card-text">A code school in the NewBo area in Cedar Rapids, offering a number of classes, with the goal of training Iowans to fill tech jobs in our area.</p>
			  <a href="https://www.deltavcodeschool.com/" class="btn btn-primary mt-auto">Visit website</a>
			</div>
		  </div>
		  		  <div class="card">
			<div class="card-body">
			  <h5 class="card-title">NewBoCo K-12 Education</h5>
			  <p class="card-text">A number of different groups for students K-12 that meet up in Cedar Rapids, giving children learning opportunities related to coding.</p>
			  <a href="https://newbo.co/newboco-k-12-education/" class="btn btn-primary mt-auto">Visit website</a>
			</div>
		  </div>
		  <div class="card">
			<div class="card-body">
			  <h5 class="card-title">Iowa Tech Chicks</h5>
			  <p class="card-text">A local organization for women and girls with an interest in technology. Includes an email newsletter signup.</p>
			  <a href="http://www.iowatechchicks.com/" class="btn btn-primary mt-auto">Visit website</a>
			</div>
		  </div>
		  		  <div class="card">
			<div class="card-body">
			  <h5 class="card-title">Kirkwood Interactive Camps for Kids</h5>
			  <p class="card-text">A summer camp through Kirkwood Community College for kids ages 8-15 that provides fun and engaging learning experiences.</p>
			  <a href="http://www.kirkwood.edu/kick" class="btn btn-primary mt-auto">Visit website</a>
			</div>
		  </div>
		  <div class="card">
			<div class="card-body">
			  <h5 class="card-title">NewBoCo</h5>
			  <p class="card-text">A nonprofit organization based in Cedar Rapids that aims to help our community adapt to the technilogical advances in our economy through education.</p>
			  <a href="https://newbo.co/" class="btn btn-primary mt-auto">Visit website</a>
			</div>
		  </div>
		  		  <div class="card">
			<div class="card-body">
			  <h5 class="card-title">University of Iowa Computer Science</h5>
			  <p class="card-text">The Department of Computer Science at University of Iowa. Includes news and upcoming events.</p>
			  <a href="https://cs.uiowa.edu/" class="btn btn-primary mt-auto">Visit website</a>
			</div>
		  </div>
		</div>
	</div>
	</div>	


<?php include('library/footer_section_two.inc');?>
