
<!-- PHP INCLUDES -->

<?php
    session_start();
    include "connect.php";
    include "Includes/templates/header.php";
    include "Includes/templates/navbar.php";

?>

    <!-- HOME SECTION -->
    
    <section class="home-section d-none d-md-block" id="home-section">
	    <div class="home-section-content">
		    <div id="home-section-carousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#home-section-carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#home-section-carousel" data-slide-to="1"></li>
                    <li data-target="#home-section-carousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <!-- FIRST SLIDE -->
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="Design/images/barbershop_image_1.jpg" alt="First slide">
                        <div class="carousel-caption d-md-block">
                            <h3>Prava frizura za pravu priliku.</h3>
                            <p>
                                 Naš frizerski salon je teritorija stvorena isključivo za muškarce koji cene 
                                <br>
                                 vrhunski kvalitet, vreme i besprekoran izgled.
                            </p>
                        </div>
                    </div>
                    <!-- SECOND SLIDE -->
                    <div class="carousel-item">
                        <img class="d-block w-100" src="Design/images/barbershop_image_2.jpg" alt="Second slide">
                        <div class="carousel-caption d-md-block">
                            <h3>Stil koji traje, frizura koja se pamti.</h3>
                            <p>
                                Naš frizerski salon je teritorija stvorena isključivo za muškarce koji cene 
                                <br>
                                vrhunski kvalitet, vreme i besprekoran izgled.
                            </p>
                        </div>
                    </div>
                    <!-- THIRD SLIDE -->
                    <div class="carousel-item">
                        <img class="d-block w-100" src="Design/images/barbershop_image_3.jpg" alt="Third slide">
                        <div class="carousel-caption d-md-block">
                            <h3>Jer vaša kosa zaslužuje najbolje!</h3>
                            <p>
                                 Naš frizerski salon je teritorija stvorena isključivo za muškarce koji cene 
                                <br>
                                 vrhunski kvalitet, vreme i besprekoran izgled.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- PREVIOUS & NEXT -->
                <a class="carousel-control-prev" href="#home-section-carousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#home-section-carousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
		</div>
	</section>

    <!-- ABOUT SECTION -->

    <section id="about" class="about_section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="about_content" style="text-align: center;">
                        <h3>Predstavljamo</h3>
                        <h2> Barber Shop <br>Igor 96</h2>
                        <img src="Design/images/about-logo.png" alt="logo">
                        <p style="color: #777">
                             Barbershop Igor 96 je mala zanatska radnja gde se na jednom mestu susreću old school i moderan barbering.Fokus je na Fade kao i ostalim modernim frizurama.Uvek možete očekivati profesionalnu uslugu kao i ljubaznost domaćina.
                        </p>
                        <a href="#" class="default_btn" style="opacity: 1;">Više o Salonu</a>
                    </div>
                </div>
                <div class="col-md-6  d-none d-md-block">
                    <div class="about_img" style = "overflow:hidden">
                        <img class="about_img_1" src="Design/images/slika1.png" alt="about-1">
                        <img class="about_img_2" src="Design/images/slika2.png" alt="about-2">
                        <img class="about_img_3" src="Design/images/slika3.png" alt="about-3">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SERVICES SECTION -->

    <section class="services_section" id="services">
        <div class="container">
            <div class="section_heading">
                <h3>Frizerski Salon</h3>
                <h2>Naše usluge</h2>
                <div class="heading-line"></div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 padd_col_res">
                    <div class="service_box">
                        <i class="bs bs-scissors-1"></i>
                        <h3>Stilovi</h3>
                        <p>Obično, Dečije šišanje, pranje kose,<br> Fade frizure, brade</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 padd_col_res">
                    <div class="service_box">
                        <i class="bs bs-razor-2"></i>
                        <h3>Uredjivanje brade</h3>
                        <p>Uređivanje brade, skidanje brade + skidanje kose</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 padd_col_res" >
                    <div class="service_box">
                        <i class="bs bs-brush"></i>
                        <h3>Skidanje na nulu</h3>
                        <p>Skidanje brade na nulu, skidanje kose na nulu</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 padd_col_res">
                    <div class="service_box">
                        <i class="bs bs-hairbrush-1"></i>
                        <h3>Premium usluge</h3>
                        <p>Premium Fade, Brzi Fade <br>+ Uredjivanje brade</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- BOOKING SECTION -->

<section class="book_section" id="booking">
    <div class="book_bg"></div>
    <div class="map_pattern"></div>
    <div class="container">
    <?php session_start(); ?>
<div class="row">
    <div class="col-md-6 offset-md-6">
        <div class="book_content">
            <h2 style="color: white;">Naša Lokacija</h2>
            <p style="color: #999;">
                Barber je osoba čija je profesija uglavnom šišanje, sređivanje i brijanje muškaraca i dečaka.
            </p>
        </div>

        <!-- Google Maps Embed Code -->
        <div class="map-container" style="position: relative; overflow: hidden; padding-top: 56.25%;">
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d504.07498278895446!2d20.974565742494764!3d44.74354524985286!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47508dce7c5b1bb5%3A0xff176075d943f8b7!2sBarbershop%20Igor%2096!5e1!3m2!1ssr!2srs!4v1730831737906!5m2!1ssr!2srs" 
                width="100%" 
                height="450" 
                style="border:0; position: absolute; top: 0; left: 0; width: 100%; height: 100%;" 
                allowfullscreen="" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade"
            ></iframe>
        </div>
        
        <p style="color: #999; margin-top: 10px;">
            Naš salon se nalazi na navedenoj lokaciji. Radujemo se vašoj poseti!
        </p>
    </div>
</div>


    </div>
</section>


    <!-- GALLERY SECTION -->

    <section class="gallery-section" id="gallery">
        <div class="section_heading">
            <h3>Frizerski Salon</h3>
            <h2>Galerija</h2>
            <div class="heading-line"></div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 gallery-column">
                    <div style="height: 230px">
                        <div class="gallery-img" style="background-image: url('Design/images/covek1.jpg');">    </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 gallery-column">
                    <div style="height: 230px">
                        <div class="gallery-img" style="background-image: url('Design/images/covek2.jpg');"></div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 gallery-column">
                    <div style="height: 230px">
                        <div class="gallery-img" style="background-image: url('Design/images/covek3.jpg');"></div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 gallery-column">
                    <div style="height: 230px">
                        <div class="gallery-img" style="background-image: url('Design/images/covek4.jpg');"></div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 gallery-column">
                    <div style="height: 230px">
                        <div class="gallery-img" style="background-image: url('Design/images/covek5.jpg');"></div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 gallery-column">
                    <div style="height: 230px">
                        <div class="gallery-img" style="background-image: url('Design/images/covek6.png');"></div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 gallery-column">
                    <div style="height: 230px">
                        <div class="gallery-img" style="background-image: url('Design/images/covek7.png');"></div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 gallery-column">
                    <div style="height: 230px">
                        <div class="gallery-img" style="background-image: url('Design/images/covek8.png');"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- TEAM SECTION -->

    <section id="team" class="team_section">
        <div class="container">
            <div class="section_heading ">
                <h3>Frizerski Salon</h3>
                <h2>Frizeri</h2>
                <div class="heading-line"></div>
            </div>
            <ul class="team_members row"> 
                <li class="col-lg-3 col-md-6 padd_col_res">
                    <div class="team_member">
                        <img src="Design/images/team-1.jpg" alt="Team Member">
                    </div>
                </li>
            </ul>
        </div>
    </section>

    <!-- REVIEWS SECTION -->

    <section id="reviews" class="testimonial_section">
        <div class="container">
            <div id="reviews-carousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#reviews-carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#reviews-carousel" data-slide-to="1"></li>
                    <li data-target="#reviews-carousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <!-- REVIEW 1 -->
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="Design/images/barbershop_image_1.jpg" alt="First slide" style="visibility: hidden;">
                        <div class="carousel-caption d-md-block">
                            <h3>Prava frizura za pravi utisak.</h3>
                            <p>
                                 Naš frizerski salon je teritorija stvorena isključivo za muškarce koji cene 
                                <br>
                                 vrhunski kvalitet, vreme i besprekoran izgled.
                            </p>
                        </div>
                    </div>
                    <!-- REVIEW 2 -->
                    <div class="carousel-item">
                        <img class="d-block w-100" src="Design/images/barbershop_image_1.jpg" alt="First slide"  style="visibility: hidden;">
                        <div class="carousel-caption d-md-block">
                            <h3>Lepota počinje u frizerskoj stolici.</h3>
                            <p>
                                 Naš frizerski salon je teritorija stvorena isključivo za muškarce koji cene 
                                <br>
                                 vrhunski kvalitet, vreme i besprekoran izgled.
                            </p>
                        </div>
                    </div>
                    <!-- REVIEW 3 -->
                    <div class="carousel-item">
                        <img class="d-block w-100" src="Design/images/barbershop_image_1.jpg" alt="First slide"  style="visibility: hidden;">
                        <div class="carousel-caption d-md-block">
                            <h3>Više od frizure – stvaramo vaš izgled!</h3>
                            <p>
                                 Naš frizerski salon je teritorija stvorena isključivo za muškarce koji cene 
                                <br>
                                 vrhunski kvalitet, vreme i besprekoran izgled.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- PREVIOUS & NEXT -->
                <a class="carousel-control-prev" href="#reviews-carousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Nazad</span>
                </a>
                <a class="carousel-control-next" href="#reviews-carousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Dalje</span>
                </a>
            </div>
        </div>
    </section>

    <!-- PRICING SECTION  -->

    <section class="pricing_section" id="pricing">

        <!-- START GET CATEGORIES  PRICES FROM DATABASE -->

            <?php

                $stmt = $con->prepare("Select * from service_categories");
                $stmt->execute();
                $categories = $stmt->fetchAll();

            ?>

        <!-- END -->

        <div class="container">
            <div class="section_heading">
                <h2>Cene usluga</h2>
                <div class="heading-line"></div>
            </div>
            <div class="row">
                <?php

                    foreach($categories as $category)
                    {
                        $stmt = $con->prepare("Select * from services where category_id = ?");
                        $stmt->execute(array($category['category_id']));
                        $totalServices =  $stmt->rowCount();
                        $services = $stmt->fetchAll();

                        if($totalServices > 0)
                        {
                        ?>

                            <div class="col-lg-4 col-md-6 sm-padding">
                                <div class="price_wrap">
                                    <h3><?php echo $category['category_name'] ?></h3>
                                    <ul class="price_list">
                                        <?php

                                            foreach($services as $service)
                                            {
                                                ?>

                                                    <li>
                                                        <h4><?php echo $service['service_name'] ?></h4>
                                                        <p><?php echo $service['service_description'] ?></p>
                                                        <span class="price">RSD<?php echo $service['service_price'] ?></span>
                                                    </li>

                                                <?php
                                            }

                                        ?>
                                        
                                    </ul>
                                </div>
                            </div>

                        <?php
                        }
                    }

                ?>
                
            </div>
        </div>
    </section>

    <!-- CONTACT SECTION -->

    <section class="contact-section" id="contact-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 sm-padding">
                    <div class="contact-info">
                        <h2>
                            Ostani u kontaktu
                            <br>Pošalji poruku!
                        </h2>
                        <p>
                        Frizer je osoba čija je profesija uglavnom šišanje, uređivanje i brijanje kose muškaraca i dečaka. Mesto gde berber radi naziva se "berbernica" ili "berbernica" (barbershop). Berbernice su takođe mesta za socijalnu interakciju i javne razgovore. U nekim slučajevima, berbernice su i javni forumi.
                        </p>
                        <h3>
                            Vatrogasna 1,
                            <br>
                            Kovin 26220
                        </h3>
                        <h4>
                            <span style = "font-weight: bold">Email:</span> 
                            barbershopigor96@gmail.com
                            <br> 
                            <span style = "font-weight: bold">Phone:</span> 
                            +381 61 6785831
                            <br> 
                            <span style = "font-weight: bold">Fax:</span> 
                            +381 13 745744
                        </h4>
                    </div>
                </div>
                <div class="col-lg-6 sm-padding">
                    <div class="contact-form">
                        <div id="contact_ajax_form" class="contactForm">
                            <div class="form-group colum-row row">
                                <div class="col-sm-6">
                                    <input type="text" id="contact_name" name="name" class="form-control" placeholder="Ime">
                                </div>
                                <div class="col-sm-6">
                                    <input type="email" id="contact_email" name="email" class="form-control" placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <input type="text" id="contact_subject" name="subject" class="form-control" placeholder="Naslov">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <textarea id="contact_message" name="message" cols="30" rows="5" class="form-control message" placeholder="Poruka"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <button id="contact_send" class="default_btn">Pošalji poruku</button>
                                </div>
                            </div>
                            <img src="Design/images/ajax_loader_gif.gif" id = "contact_ajax_loader" style="display: none">
                            <div id="contact_status_message"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- WIDGET SECTION / FOOTER -->

    <section class="widget_section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="footer_widget">
                        <img src="Design/images/igor_logo4.png" alt="Brand">
                        <p>
                           Naš frizerski salon je teritorija stvorena isključivo za muškarce koji cene
                           vrhunski kvalitet, vreme i besprekoran izgled
                        </p>
                        <ul class="widget_social">
                        <li>
                        <a href="https://www.instagram.com/barbershop_igor96/" data-toggle="tooltip" title="Instagram" target="_blank">
                         <i class="fab fa-instagram fa-2x"></i>
                       </a>
                       </li>

                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                     <div class="footer_widget">
                        <h3>Adresa</h3>
                        <br>
                        <p>
                            Vatrogasna 1, Kovin 26220
                        </p>
                        <p>
                            barbershopigor96@gmail.com
                        </p>
                        <p>
                            +381 61 6785831  
                        </p>
                        <p>
                            +381 13 745744
                        </p>
                     </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer_widget">
                        <h3>
                            Radno vreme
                        </h3>
                        <ul class="opening_time">
                            <li>Ponedeljak 9:00 - 15:00 </li>
                            <li>Utorak     9:00 - 15:00 </li>
                            <li>Sreda    /</li>
                            <li>Cetvrtak   9:00 - 15:00 </li>
                            <li>Petak      9:00 - 19:00 </li>
                            <li>Subota     9:00 - 19:00 </li>
                            <li>Nedelja  /</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer_widget">
                        <h3>Prijavite se za novosti</h3>
                        <div class="subscribe_form">
                            <form action="#" class="subscribe_form" novalidate="true">
                                <input type="email" name="EMAIL" id="subs-email" class="form_input" placeholder="Email Adresa">
                                <button type="submit" class="submit">PRIJAVI SE</button>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER  -->

    <?php include "Includes/templates/footer.php"; ?>