
<?php require_once "header.php";?>
<link href="CSS/contact.css" rel="stylesheet">
<!--? Hero Area Start-->
<div class="slider-area ">
    <div class="single-slider slider-banner d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="hero-cap text-center">
                        <h2>Contáctanos</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--? Hero Area End-->
<section class="contact-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="contact-title">Hablemos</h2>
            </div>
            <div class="col-lg-8">
                <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder="Ingresa el mensaje"></textarea>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input class="form-control valid" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Ingresa tu nombre">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="Email">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'" placeholder="Ingrese el asunto">
                            </div>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <button type="submit" class="button button-contactForm boxed-btn">Enviar</button>
                    </div>
                </form>
            </div>
            <div class="col-lg-3 offset-lg-1">
                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="fas fa-home"></i></span>
                    <div class="media-body">
                        <h3>Arequipa, Perú.</h3>
                        <p>Tacna y Arica 160</p>
                    </div>
                </div>
                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="fas fa-mobile-alt"></i></span>
                    <div class="media-body">
                        <h3>+51 992 502 574</h3>
                        <p>Lun a Vie  de 9am a 6pm</p>
                    </div>
                </div>
                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="far fa-paper-plane"></i></span>
                    <div class="media-body">
                        <h3>consultas@pearl.com</h3>
                        <p>Envíanos tu consulta!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php require_once "footer.php";?>