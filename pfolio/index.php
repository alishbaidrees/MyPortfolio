<!doctype html>
<html lang="en-US">
<head>


	<!-- Meta -->
	<meta charset="UTF-8">

	<!-- Title -->
	<title>Personal Portfolio</title>
<?php
include("links.php");
?>
</head>

<body class="home" style="background-color: #000000">

	

	<!-- Container -->
	<div class="container">
<?php
		include("header.php");
		include("config.php");

		function ms($message){
			echo "<script> alert($message)</script>";
			return $message;
		}
?>


		<!-- Wrapper -->
		<div class="wrapper">

			<div class="background-bg">
				<div class="background-filter gradient">
					<div class="background-img" style="background-image: url(pf.jpg);"></div>
				</div>
			</div>

			<!-- Section Started -->
			<div class="section started" id="section-started">
				<div class="centrize full-width">
					<div class="vertical-center">


						<!-- title -->
						<h1 class="h-title" style="background-color: black">
							Alishba <br> Idrees
						</h1>

						<!-- content started -->
						<div class="started-content">

							<!-- subtitle -->
							<div class="h-subtitles">
								<div class="h-subtitle typing-subtitle">
									<p>Designer</p>
									<p>Developer</p>
									<p>Programmer</p>
								</div>
								<span class="typed-subtitle"></span>
							</div>

							<!-- text -->
							<div class="h-text"> 
							 I am dedicated to creating dynamic and user-friendly web solutions. My commitment
							  to excellence and a solid foundation in science drive me to stay at the forefront
							   of technology.<br>
							 With a proactive approach to learning, I'm eager to take on challenges and contribute 
							 my expertise to impactful projects. I love to talk with you about our unique.
							</div>

							<!-- button -->
							<a href="#section-contacts" class="btn">
								<span class="animated-button"><span>Contact Me</span></span>
								<i class="icon fas fa-chevron-right"></i>
							</a>

							<!-- mosue button -->
							<a href="#" class="btn mouse-btn" style="display: none">
								<i class="icon fas fa-chevron-down"></i>
							</a>

						</div>

					</div>
				</div>
			</div>

			<!-- Section About -->
			<div class="section about" id="section-about">
				<div class="content">

					<!-- title -->
					<div class="titles">
						<div class="title">About Me</div>
						<div class="subtitle">My story</div>
					</div>

					<!-- text -->
					<div class="cols">
				
						<div class="col col-full">
							<div class="single-post-text">
							<p>
								<span style="font-size: 17px;">	Dive: Academics to Profession;</span>
									<br>
								Anticipating my inaugural job in software engineering, I'm armed with education, innovation, and 
								a readiness to contribute. Eager to apply my skills, learn, and bridge academia with real-world solutions,
								 I look forward to a dynamic career. Stay tuned for updates on my professional journey.		
													</p>
								
							</div>
						</div>
						<div class="col col-full">
							<div class="single-post-text">
							<p>
							<span style="font-size: 17px;">Future Plan:</span> <br>
								In the future, I'm committed to merging my passion for programming with my profession, embarking
								 on a lifelong journey of discovery and creativity. My aim is to transform my love for coding into a
								  career that fuels innovation and shapes the digital landscape			
												</p>
							</div>
						</div>
					</div>

					<!-- info list -->
					<div class="info-list">
						<ul>
							<li><strong>Age:</strong> <?php echo $age ?></li>
							<li><strong>Residence:</strong> Pakistan</li>
							<li><strong>Freelance: </strong> Available</li>
							<li><strong>Address:</strong> Karachi</li>
							<li><strong>Phone:</strong> +92 3131247565</li>
							<li><strong>E-mail:</strong> alishbaid456@gmail.com</li>
						</ul>
					</div>

					<div class="clear"></div>
				</div>
			</div>

			<!-- Section Service -->
			<div class="section service" id="section-services">
				<div class="content">

					<!-- title -->
					<div class="titles">
						<div class="title">Services</div>
						<div class="subtitle">What I Do</div>
					</div>

					<!-- services items -->
					<div class="service-items">

						<div class="service-col">
							<div class="service-item">
								<div class="icon"><i class="icon fa-solid fa-file-pen"></i></div>
								<div class="name">Graphics <br />Designing</div>
								<div class="single-post-text">
									<p>
									Unlock your brand's potential with my graphic design services, specializing in logo creation, poster design, and captivating ads using Canva's creative power.									</p>
								</div>
							</div>
						</div>

						<div class="service-col">
							<div class="service-item">
								<div class="icon"><i class="icon far fa-edit"></i></div>
								<div class="name">Web <br />Designing</div>
								<div class="single-post-text">
									<p>
									Transforming your ideas into stunning web designs with Figma, ensuring an engaging and user-friendly online presence.									</p>
								</div>
							</div>
						</div>

						<div class="service-col">
							<div class="service-item">
								<div class="icon"><i class="icon fab fa-chrome"></i></div>
								<div class="name">Web <br />Development</div>
								<div class="single-post-text">
									<p>
									I specialize in dynamic web development using PHP, MySQL, SQL, .NET, and harness the power of jQuery and AJAX to create responsive and interactive websites.									</p>
								</div>
							</div>
						</div>

						<div class="service-col">
							<div class="service-item">
								<div class="icon"><i class="icon fab fa-microsoft"></i></div>
								<div class="name">Office <br />Automation</div>
								<div class="single-post-text">
									<p>
									Offering professional services in office automation, specializing in maximizing efficiency and productivity through Microsoft Office solutions.									</p>
								</div>
							</div>
						</div>

						<div class="service-col">
							<div class="service-item">
								<div class="icon"><i class="icon fas fa-video"></i></div>
								<div class="name">Photo & Video <br />Editor</div>
								<div class="single-post-text">
									<p>
									I offer intermediate-level photo and video editing services, transforming your visuals into captivating and professional content.									</p>
								</div>
							</div>
						</div>


					</div>

					<div class="clear"></div>
				</div>
			</div>

		

			<!-- Section Resume -->
			<div class="section resume" id="section-experience">
				<div class="content">

					<!-- title -->
					<div class="titles">
						<div class="title">Experience</div>
						<div class="subtitle">Working with</div>
					</div>

					<!-- resume items -->
					<div class="content-carousel">
						<div class="owl-carousel" data-slidesview="2" data-slidesview_mobile="1">

						<div class="item">
								<div class="resume-item active">
									<div class="date">2022-23</div>
									<div class="name">Academic Achievements</div>
									<div class="single-post-text">
										<p>
										I earned the 'Project of the Month' certificate from Aptech, a testament to my commitment and skills
										 in software engineering. Additionally, securing the 2nd position in an eCommerce frontend website
										  competition showcases my prowess in creating user-friendly interfaces. These achievements inspire
										   me to strive for continued excellence in my field.	
																			</p>
									</div>
								</div>
							</div>

							<div class="item">
								<div class="resume-item active">
									<div class="date">Present</div>
									<div class="name">Self-Paced Working</div>
									<div class="single-post-text">
										<p>
										As a fresher, my portfolio showcases a blend of academic excellence and self-paced projects.
										 I bring a strong foundation in theory, complemented by real-world applications, demonstrating my
										  adaptability and commitment to growth in the tech field					
															</p>
									</div>
								</div>
							</div>

							<div class="item">
								<div class="resume-item active">
									<div class="date">2022</div>
									<div class="name">freelancing</div>
									<div class="single-post-text">
										<p>
										In 2022, I ventured into freelancing, gaining valuable real-world experience and
										 expanding my skill set while delivering successful projects for clients		
																			</p>
									</div>
								</div>
							</div>
						

		

						

						</div>

						<!-- navigation -->
						<div class="navs">
							<span class="prev fas fa-chevron-left"></span>
							<span class="next fas fa-chevron-right"></span>
						</div>

					</div>

				</div>
			</div>

			<!-- Section Resume -->
			<div class="section resume" id="section-education">
				<div class="content">

					<!-- title -->
					<div class="titles">
						<div class="title">Education</div>
						<div class="subtitle">Studied at</div>
					</div>

					<!-- resume items -->
					<div class="content-carousel">
						<div class="owl-carousel" data-slidesview="2" data-slidesview_mobile="1">

							<div class="item">
								<div class="resume-item active">
									<div class="date">2022-2025</div>
									<div class="name">Aptech Learning Center <br />NK</div>
									<div class="single-post-text">
										<p>I am currently enrolled in a three-year Advanced Software Engineering diploma program.
										During this exciting journey, I am constantly pushing the boundaries 
										of my knowledge and honing my skills in the ever-evolving world of software engineering.
										 I am passionate about learning new technologies and techniques that empower me to create innovative solutions. 
									</p>
									</div>
								</div>
							</div>

							<div class="item">
								<div class="resume-item">
									<div class="date">2022-2024</div>
									<div class="name">Girls Degree College <br />NN</div>
									<div class="single-post-text">
										<p>
											As a student,Every day, I am driven to acquire new skills, solve complex problems,
											 and innovate in the world of technology. This journey is not just an academic pursuit
											  for me; it's a passionate commitment to building a successful and fulfilling career.
										</p>
									</div>
								</div>
							</div>

							<div class="item">
								<div class="resume-item">
									<div class="date">2019-2021</div>
									<div class="name">ELite's Secondary School <br />Karachi</div>
									<div class="single-post-text">
										<p>
										I hold a Matriculation degree with a strong foundation in science. 
										This academic journey equipped me with a solid understanding of fundamental principles and a rigorous analytical mindset.
										</p>
									</div>
								</div>
							</div>

							
						</div>

						<!-- navigation -->
						<div class="navs">
							<span class="prev fas fa-chevron-left"></span>
							<span class="next fas fa-chevron-right"></span>
						</div>

					</div>

				</div>
			</div>

			<!-- Section Design Skills -->
			<div class="section skills" id="section-skills">
				<div class="content">

					<!-- title -->
					<div class="titles">
						<div class="title">Design Skills</div>
						<div class="subtitle">Creative ability</div>
					</div>

					<!-- skills items -->
					<div class="skills percent">
						<ul>
							<li>
								<div class="name">MS Office</div>
								
								<div class="progress">
									<div class="percentage" style="width: 90%;">
										<span class="percent">90%</span>
									</div>
								</div>
							</li>
							<li>
								<div class="name">Figma</div>
								
								<div class="progress">
									<div class="percentage" style="width: 80%;">
										<span class="percent">80%</span>
									</div>
								</div>
							</li>
							<li>
								<div class="name">Canva</div>
							
								<div class="progress">
									<div class="percentage" style="width: 95%;">
										<span class="percent">95%</span>
									</div>
								</div>
							</li>
							<li>
								<div class="name">Pic & Video Editing</div>
							
								<div class="progress">
									<div class="percentage" style="width: 65%;">
										<span class="percent">65%</span>
									</div>
								</div>
							</li>
						</ul>
					</div>

				</div>
			</div>

			<!-- Section Languages Skills -->
			<div class="section skills" id="section-skills-lang">
				<div class="content">

					<!-- title -->
					<div class="titles">
						<div class="title">Language Skills</div>
						<div class="subtitle">Reading and writing</div>
					</div>

					<!-- skills items -->
					<div class="skills percent">
						<ul>
							<li>
								<div class="name">English</div>
								<div class="single-post-text">
									<p>
									I possess a strong command of the English language, demonstrated through effective communication, articulate writing, 
									and a deep understanding of nuanced expressions.
									 My ability to convey ideas fluently and persuasively allows me to excel in both written and verbal communication.
									</p>
								</div>
								<div class="progress">
									<div class="percentage" style="width: 80%;">
										<span class="percent">80%</span>
									</div>
								</div>
						
							<li>
								<div class="name">Urdu</div>
								<div class="single-post-text">
									<p>
									میں انگلش زبان کی مضبوط ماہریت رکھتی ہوں، جس کو موثر تبادلے،
									 شائستہ تحریر، اور خوبصورت اظہار کی گہری سمجھ کا ثبوت دیتا ہے۔
									 میری معاونت سے مکمل اور اثربخش تبادلے کی صلاحیت، میرے لکھائی 
									اور زبانی رابطے دونوں میں کامیابی کے لئے میری مددگار ہوتی ہے۔



									</p>
								</div>
								<div class="progress">
									<div class="percentage" style="width: 90%;">
										<span class="percent">90%</span>
									</div>
								</div>
						</ul>
					</div>

				</div>

			</div>

			<!-- Section Coding Skills -->
			<div class="section skills" id="section-skills-code">
				<div class="content">

					<!-- title -->
					<div class="titles">
						<div class="title">Coding Skills</div>
						<div class="subtitle">Developing on</div>
					</div>

					<!-- skills items-->
					<div class="skills circles">
						<ul>
							<li>
								<div class="progress p95"> <!-- p90 = 90% circle fill color -->
									<div class="percentage"></div>
									<span>95%</span>
								</div>
								<div class="name">HTML, CSS</div>
								
							</li>
							<li>
								<div class="progress p90"> <!-- p75 = 75% circle fill color -->
									<div class="percentage"></div>
									<span>90%</span>
								</div>
								<div class="name">PHP, MYSQL</div>
								
							</li>
							<li>
								<div class="progress p85"> <!-- p85 = 85% circle fill color -->
									<div class="percentage"></div>
									<span>85%</span>
								</div>
								<div class="name">JavaScript</div>
								<div class="single-post-text">
								
								</div>
							</li>
							<li>
								<div class="progress p85"> <!-- p85 = 85% circle fill color -->
									<div class="percentage"></div>
									<span>85%</span>
								</div>
								<div class="name">Jquery, ajax</div>
								<div class="single-post-text">
								
								</div>
							</li>
							<li>
								<div class="progress p85 "> <!-- p85 = 85% circle fill color -->
									<div class="percentage"></div>
									<span>85%</span>
								</div>
								<div class="name">C#</div>
								<div class="single-post-text">
								
								</div>
							</li>
							<li>
								<div class="progress p75"> <!-- p80 = 80% circle fill color -->
									<div class="percentage"></div>
									<span>75%</span>
								</div>
								<div class="name">T-SQL</div>
							</li>
							<li>
								<div class="progress p75"> <!-- p80 = 80% circle fill color -->
									<div class="percentage"></div>
									<span>75%</span>
								</div>
								<div class="name">Azure-SQL</div>
							</li>
							<li>
								<div class="progress p70"> <!-- p95 = 95% circle fill color -->
									<div class="percentage"></div>
									<span>70%</span>
								</div>
								<div class="name">C, C++</div>
								
							</li>
							<li>
								<div class="progress p70"> <!-- p90 = 90% circle fill color -->
									<div class="percentage"></div>
									<span>70%</span>
								</div>
								<div class="name">Python</div>
								<div class="single-post-text">
									<p>
									
									</p>
								</div>
							</li>
						</ul>
					</div>

				</div>
			</div>
	<!-- Works -->
			<div class="section works" id="section-portfolio">
				<div class="content">

					<!-- title -->
					<div class="titles">
						<div class="title">Portfolio</div>
						<div class="subtitle">Latest works</div>
					</div>

					<!-- filter -->
					<div class="filter-menu ">
						<div class="filters">
							<div class="btn-group">
								<label data-text="All" class="glitch-effect">
									<input type="radio" name="fl_radio" value=".box-col" />All
								</label>
							</div>
							<div class="btn-group">
								<label data-text="Video">
									<input type="radio" name="fl_radio" value=".f-video" />Video
								</label>
							</div>
							<div class="btn-group">
								<label data-text="Music">
									<input type="radio" name="fl_radio" value=".f-music" />Music
								</label>
							</div>
							<div class="btn-group">
								<label data-text="Links">
									<input type="radio" name="fl_radio" value=".f-links" />Links
								</label>
							</div>
							<div class="btn-group">
								<label data-text="Image">
									<input type="radio" name="fl_radio" value=".f-image" />Image
								</label>
							</div>
							<div class="btn-group">
								<label data-text="Gallery">
									<input type="radio" name="fl_radio" value=".f-gallery" />Gallery
								</label>
							</div>
							<div class="btn-group">
								<label data-text="Content">
									<input type="radio" name="fl_radio" value=".f-content" />Content
								</label>
							</div>
						</div>
					</div>

					<!-- portfolio items -->
					<div class="box-items">

						<div class="box-col f-gallery">
							<div class="box-item">
								<div class="image">
									<a href="#gallery-1" class="has-popup-gallery">
										<img src="images/works/work1.jpg" alt="" />
										<span class="info">
											<span class="centrize full-width">
												<span class="vertical-center">
													<i class="icon fas fa-images"></i>
												</span>
											</span>
										</span>
									</a>
									<div id="gallery-1" class="mfp-hide">
										<a href="images/works/work1.jpg"></a>
										<a href="images/works/work2.jpg"></a>
										<a href="images/works/work3.jpg"></a>
										<a href="images/works/work4.jpg"></a>
									</div>
								</div>
								<div class="desc">
									<div class="category">Gallery</div>
									<a href="#gallery-1" class="name has-popup-gallery">Alabaster Complete Collection</a>
								</div>
							</div>
						</div>

						<div class="box-col f-video">
							<div class="box-item">
								<div class="image">
									<a href="https://youtu.be/S4L8T2kFFck" class="has-popup-video">
										<img src="images/works/work2.jpg" alt="" />
										<span class="info">
											<span class="centrize full-width">
												<span class="vertical-center">
													<i class="icon fas fa-video"></i>
												</span>
											</span>
										</span>
									</a>
								</div>
								<div class="desc">
									<div class="category">Video</div>
									<a href="https://youtu.be/S4L8T2kFFck" class="name has-popup-video">Book of John Paper</a>
								</div>
							</div>
						</div>

						<div class="box-col f-image">
							<div class="box-item">
								<div class="image">
									<a href="images/works/work7.jpg" class="has-popup-image">
										<img src="images/works/work7.jpg" alt="" />
										<span class="info">
											<span class="centrize full-width">
												<span class="vertical-center">
													<i class="icon fas fa-image"></i>
												</span>
											</span>
										</span>
									</a>
								</div>
								<div class="desc">
									<div class="category">Image</div>
									<a href="images/works/work7.jpg" class="name has-popup-image">White Rose Photo</a>
								</div>
							</div>
						</div>

						<div class="box-col f-image">
							<div class="box-item">
								<div class="image">
									<a href="images/works/work4.jpg" class="has-popup-image">
										<img src="images/works/work4.jpg" alt="" />
										<span class="info">
											<span class="centrize full-width">
												<span class="vertical-center">
													<i class="icon fas fa-image"></i>
												</span>
											</span>
										</span>
									</a>
								</div>
								<div class="desc">
									<div class="category">Image</div>
									<a href="images/works/work4.jpg" class="name has-popup-image">Honest Company</a>
								</div>
							</div>
						</div>

						<div class="box-col f-gallery">
							<div class="box-item">
								<div class="image">
									<a href="#gallery-2" class="has-popup-gallery">
										<img src="images/works/work5.jpg" alt="" />
										<span class="info">
											<span class="centrize full-width">
												<span class="vertical-center">
													<i class="icon fas fa-images"></i>
												</span>
											</span>
										</span>
									</a>
									<div id="gallery-2" class="mfp-hide">
										<a href="images/works/work5.jpg"></a>
										<a href="images/works/work2.jpg"></a>
										<a href="images/works/work3.jpg"></a>
										<a href="images/works/work4.jpg"></a>
									</div>
								</div>
								<div class="desc">
									<div class="category">Gallery</div>
									<a href="#gallery-2" class="name has-popup-gallery">Brown Short Dog</a>
								</div>
							</div>
						</div>

						<div class="box-col f-music">
							<div class="box-item">
								<div class="image">
									<a href="https://w.soundcloud.com/player/?visual=true&#038;url=http%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F221650664&#038;show_artwork=true" class="has-popup-music">
										<img src="images/works/work6.jpg" alt="" />
										<span class="info">
											<span class="centrize full-width">
												<span class="vertical-center">
													<i class="icon fas fa-music"></i>
												</span>
											</span>
										</span>
									</a>
								</div>
								<div class="desc">
									<div class="category">Music</div>
									<a href="https://w.soundcloud.com/player/?visual=true&#038;url=http%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F221650664&#038;show_artwork=true" class="name has-popup-music">Brown Concrete Building</a>
								</div>
							</div>
						</div>

						<div class="box-col f-links">
							<div class="box-item">
								<div class="image">
									<a href="https://beshley.com/" class="has-popup-link" target="_blank">
										<img src="images/works/work3.jpg" alt="" />
										<span class="info">
											<span class="centrize full-width">
												<span class="vertical-center">
													<i class="icon fas fa-link"></i>
												</span>
											</span>
										</span>
									</a>
								</div>
								<div class="desc">
									<div class="category">Links</div>
									<a href="https://beshley.com/" class="name has-popup-link">Black Car</a>
								</div>
							</div>
						</div>

						<div class="box-col f-content">
							<div class="box-item">
								<div class="image">
									<a href="#popup-1" class="has-popup-media">
										<img src="images/works/work8.jpg" alt="" />
										<span class="info">
											<span class="centrize full-width">
												<span class="vertical-center">
													<i class="icon fas fa-plus"></i>
												</span>
											</span>
										</span>
									</a>
								</div>
								<div class="desc">
									<div class="category">Content</div>
									<a href="#popup-1" class="name has-popup-media">Yellow and Blue Striped</a>
								</div>
								<div id="popup-1" class="popup-box mfp-fade mfp-hide">
									<div class="content">
										<div class="image">
											<img src="images/works/work8.jpg" alt="">
										</div>
										<div class="desc">
											<div class="category">Content</div>
											<h4>Yellow and Blue Striped</h4>
											<p>
												Consul latine iudicabit eu vel. Cu has animal eruditi voluptatibus. Eu volumus explicari sed. Mel mutat vituperata
												suscipiantur et, et fabellas explicari adipiscing quo, no mucius euismod vis. Cu vim quem quod cibo.
											</p>
											<a href="#" class="btn">
												<span class="animated-button"><span>View Project</span></span>
												<i class="icon fas fa-chevron-right"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>

					<div class="clear"></div>
				</div>
			</div>

			<!-- Section Contacts Info >-->
			<div class="section contacts" id="section-contacts">
				<div class="content">

					<!-- title -->
					<div class="titles">
						<div class="title">Contact</div>
						<div class="subtitle">Let's talk</div>
					</div>

					<!-- contact form -->
					<div class="contact-form " >
						<form method="post" id="ff" >
							<div class="group-val">
								<div class="label">Full name <strong>*</strong></div>
   								<input type="text" name="name" required placeholder="eg.: Olivia Hault" />
							</div>
							<div class="group-val">
								<div class="label">Email address <strong>*</strong></div>
								<input type="email" name="email" required placeholder="example@domain.com" />
							</div>
							<div class="group-val">
								<div class="label">Phone Number <strong>*</strong></div>
								<input type="number" name="number" placeholder="+92 312-3456789 (Optional)" />
							</div>
							<div class="group-val">
								<div class="label">Message <strong>*</strong></div>
								<textarea name="message" required placeholder="To Write"></textarea>
							</div>
							<div class="group-bts">
								<input type="submit" class="btn icon fas fa-chvvron-right" value="Send Message" name="btn" >
								
								
								</button>
							</div>
						</form>
						
					</div>

					<!-- contact info -->
					<div class="contact-info">
						<div class="name">Alishba Idrees</div>
						<div class="subname">Consultant & Mentor</div>
						<div class="info-list">
							<ul>
								<li><strong>Age:</strong> <?php echo $age ?></li>
								<li><strong>Residence:</strong> Pakistan</li>
								<li><strong>Freelance:</strong> Available</li>
								<li><strong>Address:</strong> Karachi</li>
								<li><strong>Phone:</strong> +92 3131247565</li>
								<li><strong>E-mail:</strong> alishbaid45@gmail.com</li>
							</ul>
						</div>
						Your Host
						<div class="author" >Alishba Idrees</div>
					</div>

					<div class="clear"></div>
				</div>
			</div>

		</div>

<?php	
include("footer.php");
?>
	</div>


</body>
<script type="text/javascript">
$(document).ready(function(){
    $('#ff').submit(function(e){
        e.preventDefault();
        var form = $(this); // Cache the form element

        $.ajax({
            url: 'process.php',
            data: form.serialize(),
            method: 'POST',
            success: function(resp){
                // Clear the form inputs after a successful submission
                form[0].reset();
                alert("Thanks!! Your Message is sent, You will get reply on email soon.");
            }
        });
    });
});

</script>

<?php
include("script.php");
function customErrorHandler($severity, $message, $file, $line) {
}
set_error_handler('customErrorHandler');

try {
    include("detection.php");
} catch (Exception $e) {
   
}
?>

<?php
$birthdate = "2005-01-29"; // Your birthdate
$currentYear = date("Y"); // Get the current year

// Convert the birthdate string to a DateTime object
$birthDateObj = new DateTime($birthdate);

// Calculate your age for each year from your birth year to the current year
    $year = $birthDateObj->format("Y"); $year <= $currentYear; $year;
    $age = $currentYear-$year ;

?>

</html>

