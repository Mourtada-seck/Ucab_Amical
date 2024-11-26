<style>
.contact .info-item {
    background-color: var(--surface-color);
    padding: 20px 0 30px 0;
    box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
}

.contact .info-item i {
    font-size: 20px;
    color: var(--accent-color);
    width: 56px;
    height: 56px;
    font-size: 24px;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 4px;
    transition: all 0.3s ease-in-out;
    border-radius: 50%;
    border: 2px dotted color-mix(in srgb, var(--accent-color), transparent 40%);
}

.contact .info-item h3 {
    font-size: 20px;
    font-size: 18px;
    font-weight: 700;
    margin: 10px 0;
}

.contact .info-item p {
    padding: 0;
    margin-bottom: 0;
    font-size: 14px;
}

.contact .php-email-form2 {
    background-color: var(--surface-color);
    height: 100%;
    padding: 30px;
    box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
}

@media (max-width: 575px) {
    .contact .php-email-form2 {
        padding: 20px;
    }
}

.contact .php-email-form2 input[type=text],
.contact .php-email-form2 input[type=email],
.contact .php-email-form2 textarea {
    font-size: 14px;
    padding: 10px 15px;
    box-shadow: none;
    border-radius: 0;
    color: var(--default-color);
    background-color: var(--surface-color);
    border-color: color-mix(in srgb, var(--default-color), transparent 80%);
}

.contact .php-email-form2 input[type=text]:focus,
.contact .php-email-form2 input[type=email]:focus,
.contact .php-email-form2 textarea:focus {
    border-color: var(--accent-color);
}

.contact .php-email-form2 input[type=text]::placeholder,
.contact .php-email-form2 input[type=email]::placeholder,
.contact .php-email-form2 textarea::placeholder {
    color: color-mix(in srgb, var(--default-color), transparent 70%);
}

.contact .php-email-form2 button[type=submit] {
    color: var(--contrast-color);
    background: var(--accent-color);
    border: 0;
    padding: 10px 30px;
    transition: 0.4s;
    border-radius: 50px;
}

.contact .php-email-form2 button[type=submit]:hover {
    background: color-mix(in srgb, var(--accent-color), transparent 20%);
}
</style>

<!-- Contact Section -->
<section id="Contact" class="contact section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

            <div class="col-lg-6">
                <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up"
                    data-aos-delay="200">
                    <i class="bi bi-geo-alt"></i>
                    <h3>Address</h3>
                    <p>Fass Mbao/ en fase lg bao</p>
                </div>
            </div><!-- End Info Item -->

            <div class="col-lg-3 col-md-6">
                <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up"
                    data-aos-delay="300">
                    <i class="bi bi-telephone"></i>
                    <h3>Contactez nous</h3>
                    <p> 777204076 / 778709215</p>
                </div>
            </div><!-- End Info Item -->

            <div class="col-lg-3 col-md-6">
                <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up"
                    data-aos-delay="400">
                    <i class="bi bi-envelope"></i>
                    <h3>Adresse emaile</h3>
                    <p>Amicaleucabdakar@gmail.com</p>
                </div>
            </div><!-- End Info Item -->

        </div>

        <div class="row gy-4 mt-1">
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3858.364918339749!2d-17.348487725763555!3d14.748459273441298!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xec10b86f5c56815%3A0x5e366c0abe2e6be2!2s(UCAB)%20Universit%C3%A9%20Cheikh%20Ahmadou%20Bamba!5e0!3m2!1sfr!2ssn!4v1730601255987!5m2!1sfr!2ssn"
                    width="600" height="380" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div><!-- End Google Maps -->

            <div class="col-lg-6">
                <form action="contactController" class="php-email-form2" method="post">
                    <div class="row gy-4">
                        <!-- Nom -->
                        <div class="col-md-6">
                            <input required type="text" name="nom" id="nom" class="form-control"
                                placeholder="Votre nom">
                        </div>
                        <!-- Email -->
                        <div class="col-md-6">
                            <input required type="email" name="emeil" id="emeil" class="form-control"
                                placeholder="Votre email">
                        </div>
                        <!-- Decription -->
                        <div class="col-md-12 mt-3">
                            <input required type="text" name="objet" id="objet" class="form-control"
                                placeholder="Objet"></input>
                        </div>
                        <!-- messsage -->
                        <div class="col-md-12 mt-3">
                            <textarea required name="message" id="message" rows="6" class="form-control placeholder="
                                Votre message""></textarea>
                        </div>
                        <!-- Botton d'envoie -->
                        <div class="col-md-12 text-center">
                            <button type="submit" name="frmAddContact" class="  fw-bold btn btn-success">Envoyé
                                message</button>
                        </div>
                    </div>

                </form>
            </div><!-- End Contact Form -->
        </div>

    </div>

</section><!-- /Contact Section -->