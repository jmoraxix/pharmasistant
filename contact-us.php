<?php include'header.php';?>

    <section id="contact-info">
        <div class="center">                
            <h2>¿Quieres contactarnos?</h2>
            <p class="lead">Ubícanos aquí</p>
        </div>
        <div class="gmap-area">
            <div class="container">
                <div class="row">
                    <div class="col-sm-5 text-center">
                        <div class="gmap">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d125749.3970216196!2d-84.13451847095538!3d9.961501306066397!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x8fa0e4f4aa15b397%3A0xe3ea8570296fde98!2sunibe+universidad+costa+rica!3m2!1d9.9615086!2d-84.0644779!5e0!3m2!1ses-419!2s!4v1455048811478" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>                        </div>
                    </div>

                    <div class="col-sm-7 map-content">
                        <ul class="row">
                            <li class="col-sm-6">
                                <address>
                                    <h5>Unibe</h5>
                                    <p>Calle Florida, 11303<br>
                                    San José, Costa Rica</p>
                                    <p>Phone: +506 2297 2242</p>
                                </address>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>  <!--/gmap_area -->

    <section id="contact-page">
        <div class="container">
            <div class="center">        
                <h2>Deja tu mensaje</h2>
                <p class="lead">Envíanos tu correo y te contestaremos en cuanto podamos.</p>
            </div> 
            <div class="row contact-wrap"> 
                <div class="status alert alert-success" style="display: none"></div>
                <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="sendemail.php">
                    <div class="col-sm-5 col-sm-offset-1">
                        <div class="form-group">
                            <label>Nombre *</label>
                            <input type="text" name="name" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Correo eletrónico *</label>
                            <input type="email" name="email" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Teléfono</label>
                            <input type="number" class="form-control">
                        </div>                      
                    </div>
                    <div class="col-sm-5">
                        <div class="form-group">
                            <label>Asunto *</label>
                            <input type="text" name="subject" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Mensaje *</label>
                            <textarea name="message" id="message" required="required" class="form-control" rows="8"></textarea>
                        </div>                        
                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Enviar mensaje</button>
                        </div>
                    </div>
                </form> 
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#contact-page-->
    
<?php include'footer.php';?>