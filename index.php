<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="assets/css/styles.css">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">


        <!-- =====BOX ICONS===== -->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

        <title>photography website</title>
    </head>
    <body>
        <!--===== HEADER =====-->
        <header class="l-header">
            <nav class="nav bd-grid">
                <div>
                    <a href="#" class="nav__logo">Gomolon</a>
                </div>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item"><a href="#home" class="nav__link active-link">Home</a></li>
                        <li class="nav__item"><a href="#about" class="nav__link">About</a></li>
                        <li class="nav__item"><a href="#skills" class="nav__link">Blog</a></li>
                        <li class="nav__item"><a href="#work" class="nav__link">Gallery</a></li>
                        <li class="nav__item"><a href="#contact" class="nav__link">Contact</a></li>
                    </ul>
                </div>

                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-menu'></i>
                </div>
            </nav>
        </header>

        <main class="l-main">
            <!--===== HOME =====-->
            <section class="home bd-grid" id="home">
                <div class="home__data">
                    <h1 class="home__title">Hi,<br>Welcome <span class="home__title-color">to my</span><br> photography</h1>

                    <a href="#" class="button">Contact</a>
                </div>

                <div class="home__social">
                    <a href="" class="home__social-icon"><i class='bx bxl-linkedin'></i></a>
                    <a href="" class="home__social-icon"><i class='bx bxl-behance' ></i></a>
                    <a href="" class="home__social-icon"><i class='bx bxl-github' ></i></a>
                </div>

                <div class="home__img">
                    <svg class="home__blob" viewBox="0 0 479 467" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g mask="url(#mask0)">
                            <path d="M9.19024 145.964C34.0253 76.5814 114.865 54.7299 184.111 29.4823C245.804 6.98884 311.86 -14.9503 370.735 14.143C431.207 44.026 467.948 107.508 477.191 174.311C485.897 237.229 454.931 294.377 416.506 344.954C373.74 401.245 326.068 462.801 255.442 466.189C179.416 469.835 111.552 422.137 65.1576 361.805C17.4835 299.81 -17.1617 219.583 9.19024 145.964Z"/>
                            <image class="home__blob-img" x="50" y="60" href="assets/img/profilee.jpg"/>
                        </g>
                    </svg>
                </div>
            </section>

            <!--===== ABOUT =====-->
            <section class="about section " id="about">
                <h2 class="section-title">About</h2>

                <div class="about__container bd-grid">
                    <div class="about__img">
                        <img src="assets/img/profilee.jpg" alt="">
                    </div>
                    
                    <div>
                        <h2 class="about__subtitle">I'am Wilkens</h2>
                        <p class="about__text">Hi, I'm Wilskens Gomolon. I'm a student studying Information Systems
                             and I also love photography.I enjoy taking photos that tell stories, whether it's
                              people, nature, or everyday life. Being an IS student helps me use technology in
                               creative ways, like editing photos, sharing them online, or building digital projects.</p>           
                    </div>                                   
                </div>
            </section>

            <!--===== SKILLS =====-->
<section class="skills section" id="skills">
    <h2 class="section-title">Blog</h2>

    <div class="skills__container bd-grid">          
        <div>
            <h2 class="skills__subtitle">Professional Skills</h2>
            <p class="skills__text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                Velit optio id vero amet, alias architecto consectetur error eum eaque sit.</p>
        </div>
        
        <div>              
            <img src="assets/img/blog.jpg" alt="" class="skills__img">
        </div>
    </div>
</section>
            <!--===== WORK =====-->
            <section class="work section" id="work">
                <h2 class="section-title">Gallery</h2>

                <div class="work__container bd-grid">
                    <a href="" class="work__img">
                        <img src="assets/img/nature.jpg" alt="">
                    </a>
                    <a href="" class="work__img">
                        <img src="assets/img/sun set.jpg" alt="">
                    </a>
                    <a href="" class="work__img">
                        <img src="assets/img/building.jpg" alt="">
                    </a>
                </div>
            </section>

            <!--===== CONTACT =====-->
           <!-- Contact Section (already customized with icons) -->
<section class="contact section" id="contact">
    <h2 class="section-title">Contact</h2>

    <div class="contact__container bd-grid contact__icons">
        <a href="https://www.facebook.com/wilkens.gomolon.7" target="_blank" class="contact__icon-link">
            <i class="fab fa-facebook-f"></i> Facebook - wilkens Omandom Gomolon
        </a>
        <a href="cbarcelonia15@gmail.com" class="contact__icon-link">
            <i class="fas fa-envelope"></i> Gmail - wilkensgomolon@gmail.com
        </a>
        <a href="tel:+1234567890" class="contact__icon-link">
            <i class="fas fa-phone"></i> 09065239765 
        </a>
    </div>
</section>

<!-- Footer Section -->

        </main>

        <!--===== FOOTER =====-->
   <footer class="footer">
  <p class="footer__copy">&#169; Gomolon. All rights reserved</p>
</footer>
        <!--===== SCROLLs://unpkg.com/sc REVEAL =====-->
        <script src="httprollreveal"></script>

        <!--===== MAIN JS =====-->
        <script src="assets/js/main.js"></script>
    </body>
</html>
