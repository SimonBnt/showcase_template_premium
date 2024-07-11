<?php

require("assets/inc/form_process.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Showcase template</title>

    <!-- og/metadata -->

    <meta name="description" content="" />
    <meta name="author" content="Simon Bénet" />
    <meta name="google-site-verification" content="" />
    <meta property="og:title" content="" />
    <meta property="og:site_name" content="" />
    <meta property="og:url" content="https://www.simonbenet.com/" />
    <meta property="og:description" content="" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="" />

    <!-- Favicon -->

    <!-- google font -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Bodoni&family=Roboto+Flex&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <!-- style sheet -->
    
    <link rel="stylesheet" href="assets/css/styles.min.css">

    <!-- link Leaflet -->

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />

    <!-- scipt Leaflet -->

    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>

    <!-- script js -->

    <script src="assets/js/burgermenu.js" defer></script>
    <script src="assets/js/map.js" defer></script>
    <script src="assets/js/formValidation.js" defer></script>
    <script src="assets/js/projectSlider.js" defer></script>
    <script src="assets/js/includeSvg.js" defer></script>

    <!-- reCAPTCHA Script -->

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>
    
    <!-- // ---- HEADER ---- // -->

    <header>
        <div id="headerMainContentContainer">
            <div id="logoContainer">

                <!-- logo -->

                <img id="headerLogo" src="assets/img/logo.jpg" alt="Portrait/logo">
                <div id="brandName">brand name</div>
            </div>

            <!-- navbar -->

            <div id="navbar">
                <ul>
                    <li class="quickAccess">
                        <a href="#homeSection" title="Home section quick access"><p class="navbarTxt">home</p></a>
                    </li>
                    <li class="quickAccess">
                        <a href="#teamSection" title="Team section quick access"><p class="navbarTxt">team</p></a>
                    </li>
                    <li class="quickAccess">
                        <a href="#projectsSection" title="Projects section quick access"><p class="navbarTxt">our achievements</p></a>
                    </li>
                    <li class="quickAccess">
                        <a href="gallery.html" title="Gallery section quick access"><p class="navbarTxt">gallery</p></a>
                    </li>
                    <li class="quickAccess">
                        <a href="#contactSection" title="Contact section quick access"><p class="navbarTxt">contact</p></a>
                    </li>
                </ul>
            </div>

            <!-- burger menu container -->

            <div id="burgerMenuMainContainer">
                <div id="burgerMenuOpenerContainer" class="burgerMenuImgContainer">
                    <img src="https://www.svgrepo.com/show/506800/burger-menu.svg" alt="Burger menu icone">
                </div>
                <div id="burgerMenuCloserContainer" class="burgerMenuImgContainer">
                    <img src="https://cdn-icons-png.flaticon.com/128/6423/6423881.png" alt="Burger menu close icone">
                </div>
            </div>
        </div>

        <!-- burger menu -->

        <div id="burgerMenu">
            <ul>
                <li class="quickAccess">
                    <a href="#homeSection" title="Home section quick access">home</a>
                </li>
                <li class="quickAccess">
                    <a href="#teamsSection" title="Team section quick access">team</a>
                </li>
                <li class="quickAccess">
                    <a href="#projectsSection" title="Projects section quick access">our achievements</a>
                </li>
                <li class="quickAccess">
                    <a href="gallery.html" title="Projects section quick access">gallery</a>
                </li>
                <li class="quickAccess">
                    <a href="#contactSection" title="Contact section quick access">contact</a>
                </li>
            </ul>
        </div>
    </header>

    <!-- // ---- MAIN ---- // -->

    <main>

        <!-- Home Section -->
        
        <section id="homeSection">

            <!-- Headline -->

            <div id="homeMainContainer">
                <div id="headLineContainer">
                    <h1>title</h1>
                    <div id="subContainer">
                        <h2 class="sub">sub title</h2>
                        <h3 class="sub sub2">sub title</h3>
                        <h3 class="sub red sub3">sub title</h3>
                    </div>
                </div>

                <!-- Home cards -->

                <div id="homeCardContainer">
                    <div class="homeCard">
                        <img class="homeCardLogo" src="assets/img/homeCardIcon1.png" alt="home card icon" class="homeCardLogo">
                        <div class="homeCardTitle">title</div>
                        <div class="homeCardItem">Lorem, ipsum.</div>
                        <div class="homeCardItem">Lorem, ipsum.</div>
                        <div class="homeCardItem">Lorem, ipsum dolor.</div>
                        <div class="homeCardItem">Lorem, ipsum.</div>
                        <div class="homeCardItem">Lorem, ipsum dolor sit.</div>
                    </div>
                    <div class="homeCard">
                        <img class="homeCardLogo" src="assets/img/homeCardIcon2.png" alt="home card icon" class="homeCardLogo">
                        <div class="homeCardTitle">title</div>
                        <div class="homeCardItem">Lorem, ipsum.</div>
                        <div class="homeCardItem">Lorem, ipsum.</div>
                        <div class="homeCardItem">Lorem, ipsum dolor.</div>
                        <div class="homeCardItem">Lorem, ipsum.</div>
                        <div class="homeCardItem">Lorem, ipsum dolor sit.</div>
                    </div>
                    <div class="homeCard">
                        <img class="homeCardLogo" src="assets/img/homeCardIcon3.png" alt="home card icon" class="homeCardLogo">
                        <div class="homeCardTitle">title</div>
                        <div class="homeCardItem">Lorem, ipsum.</div>
                        <div class="homeCardItem">Lorem, ipsum.</div>
                        <div class="homeCardItem">Lorem, ipsum dolor.</div>
                        <div class="homeCardItem">Lorem, ipsum.</div>
                        <div class="homeCardItem">Lorem, ipsum dolor sit.</div>
                    </div>
                </div>
                <div id="homeSubContentContainer">
                    <div id="homeSubContent">and many more...</div>
                    <div id="homeCta" class="ctaContainers">
                        <a href="gallery.html" class="cta" title="voir plus dans la gallerie">see our achievements</a>
                    </div>
                </div>
                <div id="homeScrollAnimationContainer">
                    <img src="assets/img/svg/bottomArrow.svg" alt="bottom arrow">
                </div>
            </div>

            <!-- bottom divider svg -->

            <div class="bottomDividerContainer"></div>
        </section>
        
        <!-- trust Section -->
        
        <section id="trustSection">
            
            <!-- top divider svg -->

            <div class="topDividerContainer"></div>

            <div class="mainSectionContainer">
                <h2 id="trustSectionTitle" class="sectionTitle">they trust us</h2>
                <div id="carouselContainer">
                    <div id="carousel">
                        <img class="carouselImages" src="" alt="brand logo">
                        <img class="carouselImages" src="" alt="brand logo">
                        <img class="carouselImages" src="" alt="brand logo">
                        <img class="carouselImages" src="" alt="brand logo">
                        <img class="carouselImages" src="" alt="brand logo">
                        <img class="carouselImages" src="" alt="brand logo">
                        <img class="carouselImages" src="" alt="brand logo">
                        <img class="carouselImages" src="" alt="brand logo">
                        <img class="carouselImages" src="" alt="brand logo">
                        <img class="carouselImages" src="" alt="brand logo">

                        <!-- clone for carousel -->

                        <img class="carouselImages" src="" alt="brand logo">
                        <img class="carouselImages" src="" alt="brand logo">
                        <img class="carouselImages" src="" alt="brand logo">
                        <img class="carouselImages" src="" alt="brand logo">
                        <img class="carouselImages" src="" alt="brand logo">
                        <img class="carouselImages" src="" alt="brand logo">
                        <img class="carouselImages" src="" alt="brand logo">
                        <img class="carouselImages" src="" alt="brand logo">
                        <img class="carouselImages" src="" alt="brand logo">
                        <img class="carouselImages" src="" alt="brand logo">
                    </div>
                </div>
            </div>
            <div class="ctaContainers">
                <a href="#contactSection" class="cta" title="Click to access to contact section">contact us</a>
            </div>

            <!-- bottom divider svg -->

            <div class="bottomDividerContainer"></div>
        </section>

            <!-- top divider svg -->

            <div class="topDividerContainer"></div>

        <!-- team Section -->
        
        <section id="teamSection">
             
            <!-- top divider svg -->

            <div class="topDividerContainer"></div>

            <div class="mainSectionContainer">
                <h2 id="teamSectionTitle" class="sectionTitle">the team</h2>
                <div id="teamCardContainer">
                    <div class="teamCard">
                        <img src="assets/img/team/1.jpg" alt="team member portrait" class="teamImg">
                        <div class="teamName">name</div>
                        <div class="teamSub">role/job</div>
                        <div class="teamSub">expertise/qualification</div>
                    </div>
                    <div class="teamCard">
                        <img src="assets/img/team/2.jpg" alt="team member portrait" class="teamImg">
                        <div class="teamName">name</div>
                        <div class="teamSub">role/job</div>
                        <div class="teamSub">expertise/qualification</div>
                    </div>
                    <div class="teamCard">
                        <img src="assets/img/team/3.jpg" alt="team member portrait" class="teamImg">
                        <div class="teamName">name</div>
                        <div class="teamSub">role/job</div>
                        <div class="teamSub">expertise/qualification</div>
                    </div>
                </div>
            </div>

            <!-- bottom divider svg -->

            <div class="bottomDividerContainer"></div>
        </section>

        <!-- Projects Section -->

        <section id="projectsSection">
            
            <!-- top divider svg -->

            <div class="topDividerContainer"></div>

            <div class="mainSectionContainer">
                <h2 id="projectSectionTitle" class="sectionTitle">our achievements</h2>
                <div id="projectCardMainContainer">
                    <div class="projectCardContainer">
                        <div class="projectCard">
                            <div class="projectCardTitle">section title</div>
                            <div class="projectCardLeftNavigation projectCardNavigation">
                                <img src="assets/img/svg/leftArrow.svg" alt="slider left arrow navigation">
                            </div>
                            <div class="projectSlider">
                                <div class="projectSliderLightFilter"></div>
                                <img class="projectCardImg" src="assets/img/drawing/2.jpg" alt="project image 1">
                                <img class="projectCardImg" src="" alt="project image 2">
                                <img class="projectCardImg" src="" alt="project image 3">
                                <img class="projectCardImg" src="" alt="project image 4">
                                <div class="projectCardImgIndexIndicator"></div>
                                <a href="gallery.html#section1" class="projectCardCta" title>see more</a>
                            </div>
                            <div class="projectCardRightNavigation projectCardNavigation">
                                <img src="assets/img/svg/rightArrow.svg" alt="slider right arrow navigation">
                            </div>
                        </div>
                    </div>
    
                    <div class="projectCardContainer">
                        <div class="projectCard">
                            <div class="projectCardTitle">section title</div>
                            <div class="projectCardLeftNavigation projectCardNavigation">
                                <img src="assets/img/svg/leftArrow.svg" alt="slider left arrow navigation">
                            </div>
                            <div class="projectSlider">
                                <div class="projectSliderLightFilter"></div>
                                <img class="projectCardImg" src="assets/img/drawing/1.jpg" alt="project image 1">
                                <img class="projectCardImg" src="" alt="project image 2">
                                <img class="projectCardImg" src="" alt="project image 3">
                                <img class="projectCardImg" src="" alt="project image 4">
                                <div class="projectCardImgIndexIndicator"></div>
                                <a href="gallery.html#section1" class="projectCardCta" title="Cliquez pour voir dans la gallery">see more</a>
                            </div>
                            <div class="projectCardRightNavigation projectCardNavigation">
                                <img src="assets/img/svg/rightArrow.svg" alt="slider right arrow navigation">
                            </div>
                        </div>
                    </div>
    
                    <div class="projectCardContainer">
                        <div class="projectCard">
                            <div class="projectCardTitle">section title</div>
                            <div class="projectCardLeftNavigation projectCardNavigation">
                                <img src="assets/img/svg/leftArrow.svg" alt="slider left arrow navigation">
                            </div>
                            <div class="projectSlider">
                                <div class="projectSliderLightFilter"></div>
                                <img class="projectCardImg" src="assets/img/drawing/3.jpg" alt="project image 1">
                                <img class="projectCardImg" src="" alt="project image 2">
                                <img class="projectCardImg" src="" alt="project image 3">
                                <img class="projectCardImg" src="" alt="project image 4">
                                <div class="projectCardImgIndexIndicator"></div>
                                <a href="gallery.html#section1" class="projectCardCta" title="Cliquez pour voir dans la gallery">see more</a>
                            </div>
                            <div class="projectCardRightNavigation projectCardNavigation">
                                <img src="assets/img/svg/rightArrow.svg" alt="slider right arrow navigation">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ctaContainers">
                <a href="gallery.html" class="cta" rel="noreferrer" title="Cliquez pour acceder à la gallery">see more of our achievements</a>
            </div>

            <!-- bottom divider svg -->

            <div class="bottomDividerContainer"></div>
        </section>

        <!-- Contact Section -->

        <section id="contactSection">
            <div class="mainSectionContainer" id="contactMainContainer">
                <h2 id="contactSectionTitle" class="sectionTitle">contact us</h2>
                <p>For more information or if you need our expertise, please do not hesitate to contact us via the contact form below. We look forward to addressing your needs!</p>
            </div>

            <!-- Contact form -->

            <div class="formMainContainer" id="contactFormContainer">
                <div class="card">
                    <div class="cardLogoContainer">
                        <img src="https://cdn-icons-png.flaticon.com/128/1182/1182791.png" alt="brain svg" class="formLogo">
                    </div>
                    <div class="cardHeader">
                        <h3 class="formTitle">Contact us</h3>
                        <p class="formTxt">Please fill this form before submitting</p>
                    </div>
                    <form action="" method="POST" class="forms" id="contactForm">
                        <div class="formItem">
                            <label for="nameInput">Name</label>
                            <div class="inputContainers">
                                <span class="itemIcon material-symbols-outlined">person</span>
                                <input type="text" name="name" id="nameInput" aria-describedby="nameError nameValidation" class="formInput" placeholder="Enter your full name" onblur="validateName(this)" required>
                                <div class="nameValidation" aria-live="polite"></div>
                            </div>
                            <div class="nameError" aria-live="polite"></div>
                        </div>
                        <div class="formItem">
                            <label for="emailInput">Email</label>
                            <div class="inputContainers">
                                <span class="itemIcon material-symbols-outlined">mail</span>
                                <input type="email" name="email" id="emailInput" class="formInput" aria-describedby="emailError emailValidation" placeholder="Enter Email" onblur="validateEmail(this)" required>
                                <div class="emailValidation" aria-live="polite"></div>
                            </div>
                            <div class="emailError" aria-live="polite"></div>
                        </div>
                        <div class="formItem">
                            <label for="messageInput">Message</label>
                            <div class="inputContainers">
                                <span class="itemIcon material-symbols-outlined">comment</span>
                                <textarea name="message" id="messageInput" aria-describedby="messageError messageValidation" class="formInput messageInput" placeholder="Your message" onblur="validateMessage(this)" required></textarea>
                                <div class="messageValidation" aria-live="polite"></div>
                            </div>
                            <div class="messageError" aria-live="polite"></div>
                        </div>

                        <!-- reCAPTCHA -->

                        <div id="reCaptcha" class="g-recaptcha" data-sitekey="votre-site-key"></div>

                        <button class="formBtn" name="submit" type="submit" title="Send form data">Submit</button>
                        <div class="errorMessagesContainers">
                            <div id="contactErrorMessage"></div>
                        </div>
                        <div id="formSubmitValidationMessage">
                            <?php
                            if (!empty($validationMessage)) {
                                echo $validationMessage;
                            }
                            ?>
                        </div>
                        <div id="formSubmitErrorMessage">
                            <?php
                            if (!empty($errorMessage)) {
                                echo $errorMessage;
                            }
                            ?>
                        </div>

                        <!-- CSRF_TOKEN -->

                        <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">
                    </form>
                </div>
            </div>
        </section>

        <!-- Map -->

        <div class="mapContainer">
            <div id="map"></div>
        </div>
    </main>

    <!-- // ---- FOOTER ---- // -->
    
    <footer>
        <div id="footerMainContainer">
            <div id="footerBioContainer">
                <p id="footerName">brand name/your name</p>
                <p id="footerBio">Lorem ipsum dolor sit amet.</p>
                <div id="contactMail">contact@contact.com</div>
            </div>
            <div id="footerSocialContainer">
                <h2>social</h2>
                <ul>
                    <li>
                        <a href="#" target="_blank" title="Click to access my Linkedin profile" rel="noreferrer"><img src="https://cdn-icons-png.flaticon.com/128/3128/3128219.png" alt="Linkedin icon"></a>
                    </li>
                    <li>
                        <a href="#" target="_blank" title="Click to access my Facebook profile" rel="noreferrer"><img src="https://cdn-icons-png.flaticon.com/128/3128/3128208.png" alt="Facebook icon"></a>
                    </li>
                    <li>
                        <a href="#" target="_blank" title="Click to access my Instagram profile" rel="noreferrer"><img src="https://cdn-icons-png.flaticon.com/128/717/717392.png" alt="Instagram icon"></a>
                    </li>
                    <li>
                        <a href="#" target="_blank" title="Click to access my Twitter profile" rel="noreferrer"><img src="https://cdn-icons-png.flaticon.com/128/3128/3128212.png" alt="Twitter icon"></a>
                    </li>
                </ul>
            </div>
        </div>
        <div id="propertyContainer">
            <p>Made by <a href="https://www.simonbenet.com/enVersion.html" target="_blank" title="Direct link to Simon Bénet portfolio">Simon Bénet</a> in 2024</p>
        </div>
    </footer>
</body>
</html>