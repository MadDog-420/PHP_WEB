<!DOCTYPE html>
<link rel="stylesheet" href="CSS/shop.css">
<!-- Hero Area Start-->
<div class="slider-area ">
    <div class="single-slider slider-banner d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="hero-cap text-center">
                        <h2>Tienda</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Hero Area End-->
<!-- Latest Products Start -->
<section class="popular-items shop-gallery">
    <div class="container">
        <div class="row product-btn justify-content-between mb-40">
            <div class="properties__button">
                <!--Nav Button  -->
                <nav>                                                      
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Últimos productos</a>
                        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Todo</a>
                        <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Ofertas</a>
                    </div>
                </nav>
                <!--End Nav Button  -->
            </div>
            <!-- Grid and List view -->
            <div class="grid-list-view">
            </div>
            <!-- Select items -->
            <div class="select-this">
                <form action="#">
                    <div class="select-itms">
                        <select name="select" id="select1">
                            <option value="">A - Z</option>
                            <option value="">Z - A</option>
                            <option value="">0$ - 10 000$</option>
                            <option value="">10 000$ - 0$</option>
                        </select>
                    </div>
                </form>
            </div>
        </div>
        <!-- Nav Card -->
        <div class="tab-content" id="nav-tabContent">
            <!-- card one -->
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                <div class="row">
                    <?php
                        for($i=0;$i<=4;$i++){
                    ?>
                            <div class='col-xl-4 col-lg-4 col-md-6 col-sm-6'>
                                <div class='single-popular-items mb-50 text-center'>
                                    <div class='popular-img'>
                                        <img src='IMG/laptop-hp-15-dy1004la-156-i5-10ma-8gb-256ssd-16gb-optane-D_NQ_NP_890723-MPE40415313278_012020-F.jpg' alt=''>
                                        <div class='img-cap'>
                                            <span>Añadir al carrito</span>
                                        </div>
                                        <div class='favorit-items'>
                                            <span class='flaticon-heart'></span>
                                        </div>
                                    </div>
                                    <div class='popular-caption'>
                                        <h3><a href='product_details.html'>Thermo Ball Etip Gloves</a></h3>
                                        <span>$ 45,743</span>
                                    </div>
                                </div>
                            </div>
                    <?php
                        }
                    ?>
                </div>
            </div>
            <!-- Card two -->
            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                <div class="row">
                    <?php
                        for($i=0;$i<=9;$i++){
                            echo "<div class='col-xl-4 col-lg-4 col-md-6 col-sm-6'>
                                <div class='single-popular-items mb-50 text-center'>
                                    <div class='popular-img'>
                                        <img src='IMG/laptop-hp-15-dy1004la-156-i5-10ma-8gb-256ssd-16gb-optane-D_NQ_NP_890723-MPE40415313278_012020-F.jpg' alt=''>
                                        <div class='img-cap'>
                                            <span>Añadir al carrito</span>
                                        </div>
                                        <div class='favorit-items'>
                                            <span class='flaticon-heart'></span>
                                        </div>
                                    </div>
                                    <div class='popular-caption'>
                                        <h3><a href='product_details.html'>Thermo Ball Etip Gloves</a></h3>
                                        <span>$ 45,743</span>
                                    </div>
                                </div>
                            </div>";
                        }
                    ?>       
                </div>
            </div>
            <!-- Card three -->
            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                <div class="row">
                    <?php
                        for($i=0;$i<=3;$i++){
                            echo "<div class='col-xl-4 col-lg-4 col-md-6 col-sm-6'>
                                <div class='single-popular-items mb-50 text-center'>
                                    <div class='popular-img'>
                                        <img src='IMG/laptop-hp-15-dy1004la-156-i5-10ma-8gb-256ssd-16gb-optane-D_NQ_NP_890723-MPE40415313278_012020-F.jpg' alt=''>
                                        <div class='img-cap'>
                                            <span>Añadir al carrito</span>
                                        </div>
                                        <div class='favorit-items'>
                                            <span class='flaticon-heart'></span>
                                        </div>
                                    </div>
                                    <div class='popular-caption'>
                                        <h3><a href='product_details.html'>Thermo Ball Etip Gloves</a></h3>
                                        <span>$ 45,743</span>
                                    </div>
                                </div>
                            </div>";
                        }
                    ?>       
                </div>
            </div>
        </div>
        <!-- End Nav Card -->
    </div>           
</section>
<!-- Latest Products End -->