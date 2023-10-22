<?php
include ('_includes/navbar.html');
?>

<!---WELCOME----->
<section class="home-section home-full-height bg-dark bg-gradient" id="home" data-background="assets/img/thc/th-vinyle.jpeg">
    <div class="th-container-title">
        <div class="th-title">
            <div class="font-alt mb-30 th-title-size-1">Welcome to</div>
            <div class="font-alt mb-40 th-title-size-2">TH Creation</div>
        </div>
    </div>
</section>
<!---END OF WELCOME----->

<!--SERVICES-->
<div class="main">
    <section class="module" id="services">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                    <h2 class="module-title font-alt">Mes Services</h2>
                    <div class="module-subtitle font-serif">Designer / Graphiste basé sur Royan j'offre un service créatif pluridisciplinaire en Charente Maritime et Nouvelle Aquitaine.<br>Disponible et réactif, j'apporte des réponses adaptées à vos problématiques visuelles que ce soit pour la création graphique de l’identité de votre entreprise ou encore de la décoration pour votre intérieur.</div>
                </div>
            </div>
            <div class="row multi-columns-row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="features-item">
                        <div class="features-icon"><span class="icon-strategy"></span></div>
                        <h3 class="features-title font-alt">Stratégie identitaire</h3>
                        <p>Développement de l'identité visuelle pour une marque ou une entreprise</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="features-item">
                        <div class="features-icon"><span class="icon-video"></span></div>
                        <h3 class="features-title font-alt">Création d’outils de communication</h3>
                        <p>Conception d'éléments pour promouvoir et communiquer efficacement</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="features-item">
                        <div class="features-icon"><span class="icon-tools"></span></div>
                        <h3 class="features-title font-alt">Logo Type</h3>
                        <p>Création d'un logo distinctif et représentatif de la marque</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="features-item">
                        <div class="features-icon"><span class="icon-target"></span></div>
                        <h3 class="features-title font-alt">Flyer</h3>
                        <p>Conception de supports de communication imprimés pour promouvoir un événement ou un produit</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="features-item">
                        <div class="features-icon"><span class="icon-lightbulb"></span></div>
                        <h3 class="features-title font-alt">Design d'Intérieur</h3>
                        <p>Conception d'espaces intérieurs harmonieux et fonctionnels, alliant esthétique et praticité</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="features-item">
                        <div class="features-icon"><span class="icon-pencil"></span></div>
                        <h3 class="features-title font-alt">Illustration</h3>
                        <p>Création d'images et de dessins pour enrichir le contenu visuel.</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="features-item">
                        <div class="features-icon"><span class="icon-camera"></span></div>
                        <h3 class="features-title font-alt">Signalétique</h3>
                        <p>Design d'éléments de signalisation pour guider et informer les visiteurs.</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="features-item">
                        <div class="features-icon"><span class="icon-lifesaver"></span></div>
                        <h3 class="features-title font-alt">Maquettisme</h3>
                        <p>Création de maquettes pour visualiser des projets avant leur réalisation finale</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--END OF SERVICES-->

    <!----projects title  ---->
    <section class="module bg-dark-60 pt-0 pb-0 parallax-bg testimonial" data-background="assets/img/thc/th-pen.jpg">
        <div class="testimonials-slider pt-140 pb-140">
            <ul class="slides">
                <li>
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-8 col-sm-offset-2">
                                <blockquote class="testimonial-text font-alt" style="font-size: xxx-large">Mes Projets</blockquote>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <!----END OF projects title  ---->

    <!-----START PROJECTS----->
    <section class="module" id="works">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <ul class="filter font-alt" id="filters">
                        <li><a class="current wow fadeInUp" href="#" data-filter="*">All</a></li>
                        <li><a class="wow fadeInUp" href="#" data-filter=".illustration" data-wow-delay="0.2s">Illustration</a></li>
                        <li><a class="wow fadeInUp" href="#" data-filter=".logo" data-wow-delay="0.6s">Logo</a></li>
                        <li><a class="wow fadeInUp" href="#" data-filter=".packaging" data-wow-delay="0.4s">Packaging</a></li>
                        <li><a class="wow fadeInUp" href="#" data-filter=".flyer" data-wow-delay="0.6s">Flyer</a></li>
                        <li><a class="wow fadeInUp" href="#" data-filter=".idGraphique" data-wow-delay="0.6s">Identité graphique</a></li>
                    </ul>
                </div>
            </div>
            <ul class="works-grid works-grid-masonry works-grid-3 works-hover-d" id="works-grid">
                <li class="work-item illustration">
                    <a href="gorilla.php" target="_blank" title="allez à la page du projet Gorilla">
                        <div class="work-image">
                            <img src="assets/img/thc/th-proj6.jpg" alt="Réalisation graphique 'Gorille'"/>
                        </div>
                        <div class="work-caption font-alt">
                            <h3 class="work-title">Gorilla</h3>
                            <div class="work-descr">Illustration</div>
                        </div>
                    </a>
                </li>
                <li class="work-item idGraphique">
                    <a href="aromes.php" target="_blank" title="allez à la page du projet Arômes">
                        <div class="work-image">
                            <img src="assets/img/thc/ar1.jpg" alt="Réalisation graphique Arômes"/>
                        </div>
                        <div class="work-caption font-alt">
                            <h3 class="work-title">Arômes</h3>
                            <div class="work-descr">Identité Graphique</div>
                        </div>
                    </a>
                </li>
                <li class="work-item packaging">
                    <a href="wave.php" target="_blank" title="allez à la page du projet Wave">
                        <div class="work-image">
                            <img src="assets/img/thc/wave1.jpg" alt="Réalisation graphique Wave"/>
                        </div>
                        <div class="work-caption font-alt">
                            <h3 class="work-title">Wave</h3>
                            <div class="work-descr">Packaging</div>
                        </div>
                    </a>
                </li>
                <li class="work-item logo">
                    <a href="logo-tdf.php" target="_blank" title="allez à la page du projet logo Tour de France">
                        <div class="work-image">
                            <img src="assets/img/thc/tr-fr3.jpg" alt="Réalisation graphique Logo Tour de France"/>
                        </div>
                        <div class="work-caption font-alt">
                            <h3 class="work-title">Tour de France</h3>
                            <div class="work-descr">Logo</div>
                        </div>
                    </a>
                </li>
                <li class="work-item packaging">
                    <a href="hcm-oyster.php" target="_blank" title="allez à la page du projet HCM">
                        <div class="work-image">
                            <img src="assets/img/thc/hcm-pack2.jpg" alt="Réalisation graphique HCM"/>
                        </div>
                        <div class="work-caption font-alt">
                            <h3 class="work-title">HCM</h3>
                            <div class="work-descr">Packaging</div>
                        </div>
                    </a>
                </li>
                <li class="work-item illustration">
                    <a href="palm.php" target="_blank" title="allez à la page du projet Palmyre">
                        <div class="work-image">
                            <img src="assets/img/thc/palm1.jpg" alt="Réalisation graphique Palmyre"/>
                        </div>
                        <div class="work-caption font-alt">
                            <h3 class="work-title">Palmyre</h3>
                            <div class="work-descr">Illustration</div>
                        </div>
                    </a>
                </li>
                <li class="work-item packaging">
                    <a href="isles-de-re.php" target="_blank" title="allez à la page du projet Isles-de-ré">
                        <div class="work-image">
                            <img src="assets/img/thc/th-proj5.jpg" alt="Réalisation graphique Cognac Isles-de-ré"/>
                        </div>
                        <div class="work-caption font-alt">
                            <h3 class="work-title">Cognac Isle de Ré</h3>
                            <div class="work-descr">Packaging</div>
                        </div>
                    </a>
                </li>
                <li class="work-item idGraphique">
                    <a href="kalae.php" target="_blank" title="allez à la page du projet Kalae">
                        <div class="work-image">
                            <img src="assets/img/thc/th-proj8.jpg" alt="Réalisation graphique Kalae"/>
                        </div>
                        <div class="work-caption font-alt">
                            <h3 class="work-title">KALAË</h3>
                            <div class="work-descr">Identité graphique</div>
                        </div>
                    </a>
                </li>
                <li class="work-item logo">
                    <a href="oeuvres-arbres.php" target="_blank" title="allez à la page du projet Oeuvres d'Arbres">
                        <div class="work-image">
                            <img src="assets/img/thc/th-proj2.jpeg" alt="Réalisation graphique Oeuvres d'arbres"/>
                        </div>
                        <div class="work-caption font-alt">
                            <h3 class="work-title">Oeuvre d'arbres</h3>
                            <div class="work-descr">Logo</div>
                        </div>
                    </a>
                </li>
                <li class="work-item packaging">
                    <a href="gardrat.php" target="_blank" title="allez à la page du projet Gardrat">
                        <div class="work-image">
                            <img src="assets/img/thc/th-proj7.jpg" alt="Réalisation graphique Domaine Gardrat"/>
                        </div>
                        <div class="work-caption font-alt">
                            <h3 class="work-title">Domaine Gardrat</h3>
                            <div class="work-descr">Packaging</div>
                        </div>
                    </a>
                </li>
                <li class="work-item idGraphique">
                    <a href="barber.php" target="_blank" title="allez à la page du projet Chez Jean Math">
                        <div class="work-image">
                            <img src="assets/img/thc/th-proj11.jpg" alt="Réalisation graphique Chez Jean Math"/>
                        </div>
                        <div class="work-caption font-alt">
                            <h3 class="work-title">Chez Jean Math</h3>
                            <div class="work-descr">Identité graphique</div>
                        </div>
                    </a>
                </li>
                <li class="work-item flyer">
                    <a href="hcm-bag.php" target="_blank" title="allez à la page du projet sac HCM">
                        <div class="work-image">
                            <img src="assets/img/thc/hcm2.jpg" alt="Réalisation graphique sac HCM"/>
                        </div>
                        <div class="work-caption font-alt">
                            <h3 class="work-title">HCM</h3>
                            <div class="work-descr">Flyer</div>
                        </div>
                    </a>
                </li>
                <li class="work-item packaging">
                    <a href="ocotopus-stout.php" target="_blank" title="allez à la page du projet Octopus Stout">
                        <div class="work-image">
                            <img src="assets/img/thc/th-proj10.jpg" alt="Réalisation graphique Octopous Stout"/>
                        </div>
                        <div class="work-caption font-alt">
                            <h3 class="work-title">Octopus Stout</h3>
                            <div class="work-descr">Packaging</div>
                        </div>
                    </a>
                </li>
                <li class="work-item idGraphique">
                    <a href="bb-snack.php" target="_blank" title="allez à la page du projet BB Snack">
                        <div class="work-image">
                            <img src="assets/img/thc/bb1.jpg" alt="Réalisation graphique BB Snack"/>
                        </div>
                        <div class="work-caption font-alt">
                            <h3 class="work-title">BB Snack</h3>
                            <div class="work-descr">Identité graphique</div>
                        </div>
                    </a>
                </li>
                <li class="work-item logo">
                    <a href="nordik.php" target="_blank" title="allez à la page du projet Nordik">
                        <div class="work-image">
                            <img src="assets/img/thc/nord1.jpg" alt="Réalisation graphique Nordik"/>
                        </div>
                        <div class="work-caption font-alt">
                            <h3 class="work-title">Nordik</h3>
                            <div class="work-descr">Logo</div>
                        </div>
                    </a>
                </li>
                <li class="work-item flyer">
                    <a href="hcm-sign.php" target="_blank" title="allez à la page du projet HCM">
                        <div class="work-image">
                            <img src="assets/img/thc/hcm-sign.jpg" alt="Réalisation graphique HCM"/>
                        </div>
                        <div class="work-caption font-alt">
                            <h3 class="work-title">HCM</h3>
                            <div class="work-descr">Flyer</div>
                        </div>
                    </a>
                </li>
                <li class="work-item illustration">
                    <a href="butterfly.php" target="_blank" title="allez à la page du projet HCM">
                        <div class="work-image">
                            <img src="assets/img/thc/but-fly.jpg" alt="Réalisation graphique HCM"/>
                        </div>
                        <div class="work-caption font-alt">
                            <h3 class="work-title">HCM</h3>
                            <div class="work-descr">Flyer</div>
                        </div>
                    </a>
                </li>
                <li class="work-item logo">
                    <a href="injenius.php" target="_blank" title="allez à la page du projet Injenius">
                        <div class="work-image">
                            <img src="assets/img/thc/injenius1.jpg" alt="Réalisation graphique Injenius"/>
                        </div>
                        <div class="work-caption font-alt">
                            <h3 class="work-title">Injenius</h3>
                            <div class="work-descr">Logo</div>
                        </div>
                    </a>
                </li>
                <li class="work-item idGraphique">
                    <a href="etunia.php" target="_blank" title="allez à la page du projet Etunia">
                        <div class="work-image">
                            <img src="assets/img/thc/jard1.jpg" alt="Réalisation graphique Jardins d'Étunia"/>
                        </div>
                        <div class="work-caption font-alt">
                            <h3 class="work-title">Jardins d'Étunia</h3>
                            <div class="work-descr">Identité Graphique</div>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </section>
    <!--  END OF PROJECTS  -->

    <!--  SCOREBOARD  -->
    <section class="module bg-dark-60" data-background="assets/img/thc/th-shop.jpeg" id="th-scoreboard">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                    <h2 class="module-title font-alt">Scoreboard</h2>
                    <div class="module-subtitle font-serif"></div>
                </div>
            </div>
            <div class="row multi-columns-row">
                <div class="col-sm-6 col-md-3 col-lg-3">
                    <div class="count-item mb-sm-40">
                        <div class="count-icon"><span class="icon-pencil"></span></div>
                        <h3 class="count-to font-alt" data-countto="3426543"></h3>
                        <h5 class="count-title font-serif">Points</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3">
                    <div class="count-item mb-sm-40">
                        <div class="count-icon"><span class="icon-camera"></span></div>
                        <h3 class="count-to font-alt" data-countto="2784"></h3>
                        <h5 class="count-title font-serif">Photos</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3">
                    <div class="count-item mb-sm-40">
                        <div class="count-icon"><span class="icon-happy"></span></div>
                        <h3 class="count-to font-alt" data-countto="138"></h3>
                        <h5 class="count-title font-serif">Clients heureux</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3">
                    <div class="count-item mb-sm-40">
                        <div class="count-icon"><span class="icon-map-pin"></span></div>
                        <h3 class="count-to font-alt" data-countto="32"></h3>
                        <h5 class="count-title font-serif">Villes</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  END OF SCOREBOARD  -->

    <!--START CONTACT-->
    <h2 class="module-title font-alt" style="margin-top: 10%; margin-bottom: -5%">Me Contacter</h2>
    <section class="module" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h4 class="font-alt">Me Contacter</h4><br/>
                    <form id="contactForm" role="form" method="post" action="php/contact.php">
                        <div class="form-group">
                            <label class="sr-only" for="name">Name</label>
                            <input class="form-control" type="text" id="name" name="name" placeholder="Your Name*" required="required" data-validation-required-message="Please enter your name."/>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="email">Email</label>
                            <input class="form-control" type="email" id="email" name="email" placeholder="Your Email*" required="required" data-validation-required-message="Please enter your email address."/>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" rows="7" id="message" name="message" placeholder="Your Message*" required="required" data-validation-required-message="Please enter your message."></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="text-center">
                            <button class="btn btn-block btn-round btn-d" id="cfsubmit" type="submit">Submit</button>
                        </div>
                    </form>
                    <div class="ajax-response font-alt" id="contactFormResponse"></div>
                </div>
                <div class="col-sm-6">
                    <h4 class="font-alt">Email</h4><br/>
                    <p>thcreation@gmail.com</p>
                    <hr/>
                    <h4 class="font-alt">Téléphone</h4><br/>
                    <ul class="list-unstyled">
                        <li>06 - 06 - 06 - 06 - 06</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--END OF CONTACT-->

<?php
include ('_includes/footer.html');
?>
