<?php
include "_includes/navbar.html";
?>
        <div class="th-container-mobile">
            <img src="../assets/img/thc/ar1.jpg" alt="...">
            <img src="../assets/img/thc/ar2.jpg" alt="...">
            <img src="../assets/img/thc/ar3.jpg" alt="...">
        </div>
        <div class="th-container-project">
            <div id="carouselExampleIndicators" class="carousel slide w-50">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="../assets/img/thc/ar1.jpg" class="d-block" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="../assets/img/thc/ar2.jpg" class="d-block" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="../assets/img/thc/ar3.jpg" class="d-block" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <section class="module">
            <div class="container">
                <div class="row multi-columns-row">
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <div class="alt-features-item">
                            <div class="alt-features-icon">
                                <span class="icon-tools-2"></span>
                            </div>
                            <h3 class="alt-features-title font-alt">Development</h3>A wonderful serenity has taken possession of my entire soul like these sweet mornings.
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <div class="alt-features-item">
                            <div class="alt-features-icon"><span class="icon-tools"></span></div>
                            <h3 class="alt-features-title font-alt">Design</h3>A wonderful serenity has taken possession of my entire soul like these sweet mornings.
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <div class="alt-features-item">
                            <div class="alt-features-icon"><span class="icon-camera"></span></div>
                            <h3 class="alt-features-title font-alt">Photography</h3>A wonderful serenity has taken possession of my entire soul like these sweet mornings.
                        </div>
                    </div>
                </div>
                <hr class="divider-w mt-60 mb-60">
                <div class="row multi-columns-row">
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <div class="work-details">
                            <h5 class="work-details-title font-alt">Project Details</h5>
                            <p></p>
                            <ul>
                                <li><strong>Client: </strong><span class="font-serif"><a href="#" target="_blank">SomeCompany</a></span>
                                </li>
                                <li><strong>Date: </strong><span class="font-serif"><a href="#" target="_blank">23 November, 2015</a></span>
                                </li>
                                <li><strong>Online: </strong><span class="font-serif"><a href="#" target="_blank">www.example.com</a></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <p>En cours de rédaction</p>
                        <!-- <p>Their separate existence is a myth. For science, music, sport, etc, Europe uses the same vocabulary.</p>-->
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <div class="alt-features-icon"><span class="icon-pencil"></span></div>
                    </div>
                </div>
            </div>
        </section>
        <hr class="divider-w">
        <section class="module1">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3">
                        <h2 class="module-title font-alt">Related Projects</h2>
                    </div>
                </div>
                <ul class="works-grid works-grid-gut works-grid-3 works-hover-w" id="related-projects-grid">
                    <li class="work-item illustration webdesign">
                        <a href="kalae.html">
                            <div class="work-image">
                                <img src="assets/img/thc/kal2.jpg" alt="Portfolio Item"/>
                            </div>
                            <div class="work-caption font-alt">
                                <h3 class="work-title">Kalae</h3>
                                <div class="work-descr">Identité graphique</div>
                            </div>
                        </a>
                    </li>
                    <li class="work-item marketing webdesign">
                        <a href="bb-snack.html">
                            <div class="work-image"><img src="assets/img/thc/bb1.jpg" alt="Portfolio Item"/></div>
                            <div class="work-caption font-alt">
                                <h3 class="work-title">BB Snack</h3>
                                <div class="work-descr">Identité graphique</div>
                            </div></a></li>
                    <li class="work-item illustration webdesign">
                        <a href="barber.html">
                            <div class="work-image">
                                <img src="assets/img/thc/th-proj11.jpg" alt="Portfolio Item"/>
                            </div>
                            <div class="work-caption font-alt">
                                <h3 class="work-title">Chez Jean Math</h3>
                                <div class="work-descr">Identité graphique</div>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </section>
<?php
include "_includes/footer.html";
?>