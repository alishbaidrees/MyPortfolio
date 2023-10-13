<?php
include("config.php");
$sql = "select cv from alishba where id = 3";
$result = $conn->query($sql);
if($result -> num_rows > 0){
    while($row = $result -> fetch_assoc()){
        $location = $row['cv'];
    }
}

?>




<!-- Preloader -->
<div class="preloader">
		<div class="box-1">
			<div class="centrize full-width">
				<div class="vertical-center">
					<div class="spinner">
						<div class="lines"></div>
					</div>
				</div>
			</div>
		</div>
		<div class="box-2"></div>
	</div>




<!-- Header -->
<header class="header">

<!-- logo -->
<div class="logo">
    <a href="#">
        <img class="logo-img" src="images/z.png" alt="" />
        <span class="logo-lnk">It's <br />Alishba</span>
    </a>
</div>

<!-- menu button -->
<a href="#" class="menu-btn"><span></span></a>

<!-- download cv button -->
<a href="<?php echo $location ?>" class="btn download-cv-btn" download="Alishba's-Resume">
    <span class="animated-button"><span>Download CV</span></span>
    <i class="icon fas fa-download"></i>
</a>

<!-- header sidebar -->
<div class="header-sidebar">

    <!-- top menu -->
    <div class="top-menu">
        <div class="top-menu-nav">
            <div class="menu-topmenu-container">
                <ul class="menu">
                    <li class="menu-item current-menu-item ">
                        <a href="#section-started">
                            <span class="animated-button"><span>Home</span></span>
                        </a>
            
                    </li>
                    <li class="menu-item">
                        <a href="#section-about">
                            <span class="animated-button"><span>About</span></span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="#section-experience">
                            <span class="animated-button"><span>Resume</span></span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="#section-portfolio">
                            <span class="animated-button"><span>Portfolio</span></span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="#section-contacts">
                            <span class="animated-button"><span>Contact</span></span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

</div>

</header>