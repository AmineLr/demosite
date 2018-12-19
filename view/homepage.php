<?php include('_topPage.php');?>

    <!-- Section 1 -->
    <section id="home_section">

        <div id="slideshow" class="slider" role=banner>

            <!-- Slideshow elements-->
            <div id="slide1">
                <div id="slide2">

                    <!-- Arrows -->
                    <a class="next next1" href="#slide2"><span class="chevron_right fa fa-chevron-right fa-2x" aria-hidden="true"></span></a>
                    <a class="next next2" href="#slide1"><span class="chevron_right fa fa-chevron-right fa-2x" aria-hidden="true"></span></a>

                    <a class="prev prev1" href="#slide2"><span class="chevron_left fa fa-chevron-left fa-2x" aria-hidden="true"></span></a>
                    <a class="prev prev2" href="#slide1"><span class="chevron_left fa fa-chevron-left fa-2x" aria-hidden="true"></span></a>

                    <!-- Pics -->
                    <figure id="slider_content">
                        <img id="girl" src="assets/images/slider/bg1.jpg" alt="image de fille">
                        <img id="boy" src="assets/images/slider/bg2.jpg" alt="image de garçon">
                        <div id="blue_bar"></div>
                        <div id="transparent_bar"></div>
                    </figure>

                    <!-- Semi circles -->
                    <div id="right_semi_circle">
                        <span class="fa fa-circle fa-4x" aria-hidden="true"></span>
                    </div>
                    <div id="left_semi_circle">
                        <span class="fa fa-circle fa-4x" aria-hidden="true"></span>
                    </div>

                    <!-- Banner text -->
                    <div id="banner_text">
                        <h1 id="banner_text1"> <span id="banner_span">WEBAGENCY</span> : L'AGENCE DE TOUS <br /> VOS PROJETS ! <br /></h1>
                        <p id="banner_text2"> Vous avez un projet web ? La WebAgency vous aide à le réaliser ! </p>
                        <p id="blue_button"><a href="#services_section">Plus d'infos</a></p>
                    </div>

                </div>
            </div>
        </div>
        <div id="services_anchor"></div>
    </section>

    <!-- Section 2 -->
    <section id="services_section">

        <!-- Section's header -->
        <header id="nos_services">

            <h2><?php echo titleService;?></h2>

            <div id="services_line"></div>

            <div class="header_blue_circle">
                <span class="fa fa-circle blue_circle" aria-hidden="true"></span>
            </div>

            <div class="header_white_circle">
                <span class="fa fa-circle" aria-hidden="true"></span>
            </div>

            <div>
                <p>Notre équipe d'experts du web propose un large choix de services : conception de sites web, aide au référencement, formation aux CMS</p>
            </div>

        </header>

        <div id="presentation">

            <!-- Left Side : Mac pic & pics column -->
            <div id="mac_pic">
                <img src="assets/images/main-feature.png" alt="image d'ordinateur" />
            </div>


            <div id="services_right_bloc">

                <div class="services_container">

                    <div class="icon_container">

                        <div class="services_main_icon">
                            <span class="icon fa fa-line-chart fa-2x" aria-hidden="true" ></span>
                        </div>

                        <div class="services_icon_1">
                            <span class="fa fa-circle blue_circle services_icons_blue_circle" aria-hidden="true"></span>
                        </div>

                        <div class="services_icon_2">
                            <span class="fa fa-circle services_icons_white_circle" aria-hidden="true"></span>
                        </div>

                    </div>

                    <div class="services_text">
                        <h2>UX Design</h2>
                        <p>Nos prestations prennent en compte le design utilisateur pour offrir à chaque visiteur une expérience de navigation optimale et sans contrainte</p>
                    </div>

                </div>

                <div class="services_container">

                    <div class="icon_container">

                        <div class="services_main_icon">
                            <span class="icon fa fa-cubes fa-2x" aria-hidden="true"></span>
                        </div>

                        <div class="services_icon_1">
                            <span class="fa fa-circle blue_circle services_icons_blue_circle" aria-hidden="true"></span>
                        </div>

                        <div class="services_icon_2">
                            <span class="fa fa-circle services_icons_white_circle" aria-hidden="true"></span>
                        </div>

                    </div>

                    <div class="services_text">
                        <h2>UI Design</h2>
                        <p>Nos designers créeront pour vous des produits esthétiques et possédant un fort potentiel commercial grâce aux designs graphiques soignés, modernes et épurés</p>
                    </div>

                </div>

                <div class="services_container">

                    <div class="icon_container">

                        <div class="services_main_icon">
                            <span class="icon fa fa-pie-chart fa-2x" aria-hidden="true"></span>
                        </div>

                        <div class="services_icon_1">
                            <span class="fa fa-circle blue_circle services_icons_blue_circle" aria-hidden="true"></span>
                        </div>

                        <div class="services_icon_2">
                            <span class="fa fa-circle services_icons_white_circle" aria-hidden="true"></span>
                        </div>
                    </div>

                    <div class="services_text">
                        <h2>SEO</h2>
                        <p>Pour être les meilleurs soyez les premiers lors des requêtes des clients sur les moteurs de recherches. Nous vous permettront de vous hisser et de rester au top</p>
                    </div>

                </div>

            </div>
        </div>

        <div id="projects_anchor"></div>
    </section>

    <!-- Section 3 -->
    <section id="projects_section">

        <!-- Section's header -->
        <div>
            <h1 id="projects_header_h1">NOS PROJETS</h2>

                <div>
                    <div class="projects_grey_line"></div>

                    <div class="header_blue_circle">
                        <span class="fa fa-circle blue_circle" aria-hidden="true"></span>
                    </div>

                    <div class="header_white_circle">
                        <span class="fa fa-circle" aria-hidden="true"></span>
                    </div>
                </div>

                <div>
                    <p id="projects_header_p">Voici quelques travaux réalisés par notre agence web. N'hésitez pas à vous en inspirer et à nous contacter. Nous vous permettre d'atteindre vos objectifs professionnels</p>
                </div>
        </div>

        <!-- Nav -->
        <nav id="projects_header_nav_bloc">

            <ul id="projects_nav">
                <li id="first_radius" class="projects_li">
                    <a href="#all_works" id="first_radius">All Works
                        <span class="triangle fa fa-sort-desc fa-2x" aria-hidden="true"></span>
                    </a>
                </li>

                <li class="projects_li">
                    <a href="#creative">Creative
                        <span class="triangle fa fa-sort-desc fa-2x" aria-hidden="true"></span>
                    </a>
                </li>

                <li class="projects_li">
                    <a href="#corporate">Corporate
                        <span class="triangle fa fa-sort-desc fa-2x" aria-hidden="true"></span>
                    </a>
                </li>

                <li class="projects_li">
                    <a href="#portfolio" id="last_radius">Portfolio
                        <span class="triangle fa fa-sort-desc fa-2x" aria-hidden="true"></span>
                    </a>
                </li>
            </ul>

        </nav>

        <!-- Main piece of the section : pics of projects with hover effects -->
        <div id="projects_pics">

            <a id="creative"></a><a id="corporate"></a><a id="portfolio"></a><a id="all_works"></a>


            <figure class="all corporate pic_container">
                <img class="pic" src="assets/images/portfolio/01.jpg" alt="image de lunette">
                <figcaption class="hidden_text">
                    <div class="eye">
                        <div class="layer_1">
                            <span class="fa fa-circle white_circle fa-3x" aria-hidden="true"></span>
                        </div>
                        <div class="layer_2">
                            <span class="fa fa-circle blue_circle_eye fa-2x" aria-hidden="true"></span>
                        </div>
                        <div class="layer_3">
                            <span class="fa fa-eye" aria-hidden="true"></span>
                        </div>
                    </div>
                    <h2>Google Glass</h2>
                    <p>Lunettes de réalité augmentée</p>
                </figcaption>
            </figure>
            <figure class="all creative pic_container">
                <img class="pic" src="assets/images/portfolio/02.jpg" alt="image de lapin rose">
                <figcaption class="hidden_text">
                    <div class="eye">
                        <div class="layer_1">
                            <span class="fa fa-circle white_circle fa-3x" aria-hidden="true"></span>
                        </div>
                        <div class="layer_2">
                            <span class="fa fa-circle blue_circle_eye fa-2x" aria-hidden="true"></span>
                        </div>
                        <div class="layer_3">
                            <span class="fa fa-eye" aria-hidden="true"></span>
                        </div>
                    </div>
                    <h2>Lapin Nabaztag</h2>
                    <p>Mammifère communiquant</p>
                </figcaption>
            </figure>
            <figure class="all creative pic_container">
                <img class="pic" src="assets/images/portfolio/03.jpg" alt="image d'écriture">
                <figcaption class="hidden_text">
                    <div class="eye">
                        <div class="layer_1">
                            <span class="fa fa-circle white_circle fa-3x" aria-hidden="true"></span>
                        </div>
                        <div class="layer_2">
                            <span class="fa fa-circle blue_circle_eye fa-2x" aria-hidden="true"></span>
                        </div>
                        <div class="layer_3">
                            <span class="fa fa-eye" aria-hidden="true"></span>
                        </div>
                    </div>
                    <h2>Stylish Fonts</h2>
                    <p>Site de typo haut de gamme</p>
                </figcaption>
            </figure>
            <figure class="all portfolio pic_container">
                <img class="pic" src="assets/images/portfolio/04.jpg" alt="image de bloc notes">
                <figcaption class="hidden_text">
                    <div class="eye">
                        <div class="layer_1">
                            <span class="fa fa-circle white_circle fa-3x" aria-hidden="true"></span>
                        </div>
                        <div class="layer_2">
                            <span class="fa fa-circle blue_circle_eye fa-2x" aria-hidden="true"></span>
                        </div>
                        <div class="layer_3">
                            <span class="fa fa-eye" aria-hidden="true"></span>
                        </div>
                    </div>
                    <h2>Robert Write</h2>
                    <p>Blog pour écrivain</p>
                </figcaption>
            </figure>
            <figure class="all corporate pic_container">
                <img class="pic" src="assets/images/portfolio/05.jpg" alt="image de sac">
                <figcaption class="hidden_text">
                    <div class="eye">
                        <div class="layer_1">
                            <span class="fa fa-circle white_circle fa-3x" aria-hidden="true"></span>
                        </div>
                        <div class="layer_2">
                            <span class="fa fa-circle blue_circle_eye fa-2x" aria-hidden="true"></span>
                        </div>
                        <div class="layer_3">
                            <span class="fa fa-eye" aria-hidden="true"></span>
                        </div>
                    </div>
                    <h2>Magasin Easy Cash</h2>
                    <p>Design des sacs clients</p>
                </figcaption>
            </figure>
            <figure class="all corporate pic_container">
                <img class="pic" src="assets/images/portfolio/06.jpg" alt="image de ville">
                <figcaption class="hidden_text">
                    <div class="eye">
                        <div class="layer_1">
                            <span class="fa fa-circle white_circle fa-3x" aria-hidden="true"></span>
                        </div>
                        <div class="layer_2">
                            <span class="fa fa-circle blue_circle_eye fa-2x" aria-hidden="true"></span>
                        </div>
                        <div class="layer_3">
                            <span class="fa fa-eye" aria-hidden="true"></span>
                        </div>
                    </div>
                    <h2>Shanghai</h2>
                    <p>Site web d'une ville connectée</p>
                </figcaption>
            </figure>
            <figure class="all portfolio pic_container">
                <img class="pic" src="assets/images/portfolio/07.jpg" alt="image d'arc">
                <figcaption class="hidden_text">
                    <div class="eye">
                        <div class="layer_1">
                            <span class="fa fa-circle white_circle fa-3x" aria-hidden="true"></span>
                        </div>
                        <div class="layer_2">
                            <span class="fa fa-circle blue_circle_eye fa-2x" aria-hidden="true"></span>
                        </div>
                        <div class="layer_3">
                            <span class="fa fa-eye" aria-hidden="true"></span>
                        </div>
                    </div>
                    <h2>Touche au but</h2>
                    <p>Site e-commerce de flèches</p>
                </figcaption>
            </figure>
            <figure class="all portfolio pic_container">
                <img class="pic" src="assets/images/portfolio/08.jpg" alt="image de theme">
                <figcaption class="hidden_text">
                    <div class="eye">
                        <div class="layer_1">
                            <span class="fa fa-circle white_circle fa-3x" aria-hidden="true"></span>
                        </div>
                        <div class="layer_2">
                            <span class="fa fa-circle blue_circle_eye fa-2x" aria-hidden="true"></span>
                        </div>
                        <div class="layer_3">
                            <span class="fa fa-eye" aria-hidden="true"></span>
                        </div>
                    </div>
                    <h2>Société SandMan</h2>
                    <p>Mock-Up de la marque</p>
                </figcaption>
            </figure>
            <figure class="all creative pic_container">
                <img class="pic" src="assets/images/portfolio/full.jpg" alt="image de burger">
                <figcaption class="hidden_text">
                    <div class="eye">
                        <div class="layer_1">
                            <span class="fa fa-circle white_circle fa-3x" aria-hidden="true"></span>
                        </div>
                        <div class="layer_2">
                            <span class="fa fa-circle blue_circle_eye fa-2x" aria-hidden="true"></span>
                        </div>
                        <div class="layer_3">
                            <span class="fa fa-eye" aria-hidden="true"></span>
                        </div>
                    </div>
                    <h2>Mac Picsou</h2>
                    <p>Design des sandwichs</p>
                </figcaption>
            </figure>
        </div>
        <div id="contact_anchor"></div>
    </section>

<?php include('_bottomPage.php');?>

