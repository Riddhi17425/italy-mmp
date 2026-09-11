@include('layouts.frontheader')
<section class="contact-banner position-relative">
    <div class="container-fluid p-0">
        <img src="{{ asset('public/front/images/Chemical_banner.png') }}" alt="industria chimica" class="img-fluid product-page-header" />
        <div class="contact-head">
            <h1>Industria chimica</h1>
             <div class="set-content">
                    <p>Personalizza il tuo successo: ottieni risultati precisi con la filtrazione chimica su misura di <b>mmp</b>.</p>
                    </div>
                      <div class="theme-btn justify-content-start ">
                      <button type="button" class="btn-add" data-bs-toggle="modal" data-bs-toggle="modal"
                        data-bs-target="#inquiryModal" data-bs-whatever="@mdo"><span><i class="fa fa-angle-right"
                            aria-hidden="true"></i></span>
                        <p>Richiedi Ora</p>
                      </button>
                    </div>
        </div>
    </div>
</section>
<section class="navigating">
    <div class="container">
         <h2 class="coustom_industry">Promuovere l'efficienza attraverso la filtrazione avanzata</h2> 

        <div class="row">
            <div class="col-lg-4">
                <img class="img-fluid" src="{{ asset('public/front/images/MMp_chemical_img.png') }}" alt="industria chimica">
            </div>
            <div class="col-lg-8">
                <div class="nvgg_content">
                       <p class="navigation_pera">Nel complesso settore della produzione chimica, mantenere la qualità è fondamentale, e la filtrazione gioca un ruolo chiave nel garantire purezza e integrità. Scopri come le soluzioni di filtrazione <b>mmp</b> siano all’avanguardia, contribuendo a processi efficienti e sicuri.</p>
                    <h3 class="custom_pera">Sfide nell’industria chimica</h3>
                    <p class="navigation_pera"> I nostri prodotti di filtrazione ridefiniscono gli standard del settore, offrendo soluzioni innovative per ottimizzare i processi produttivi e garantire la conformità normativa nelle sfide della produzione chimica.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mmp_solutions">
    <div class="container">
        <!--content pading-->
        <!--end content pading-->
        <div class="row">
            <div class="col-lg-6">
                <a href="{{ url('dettaglio-prodotto/cartucce-pleat-pp')}}" target="_blank">
                  <h3 class="custom_pera title-link">Filtrazione di precisione con cartucce filtranti pieghettate in PP</h3>
                </a>
                <p class="navigation_pera">Progettate per applicazioni chimiche con un’eccezionale resistenza chimica, queste cartucce assicurano la rimozione delle impurità, proteggendo i processi e aumentando la durata delle apparecchiature.</p>

                <h3 class="custom_pera">Filtrazione chimica affidabile con sacche filtranti per liquidi</h3>
                <p class="navigation_pera">Un’elevata efficienza di rimozione delle particelle e una facile manutenzione caratterizzano queste sacche, garantendo precisione nella cattura delle impurità e prevenendo la contaminazione nei prodotti chimici.</p>
            </div>
            <div class="col-lg-6">
                <div class="mg_area">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <img class="img-fluid" src="{{ asset('public/front/images/Chemical-Industry.jpg') }}" alt="industria chimica">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="benefits_pharma">
            <h2 class="coustom_industry">Vantaggi principali</h2>
            <div class="row">
                <div class="col-lg-6">
                    <img class="img-fluid" src="{{ asset('public/front/images/chemical Industry2.png') }}" alt="industria chimica">
                </div>
                <div class="col-lg-6">
                    <div class="nvgg_content">
                        <ul class="point_benefit">
                            <li><i class="fa fa-light fa-angle-right angle-arrow"></i>Compatibilità chimica:progettate per lavorare con diverse sostanze, offrendo protezione contro potenziali danni.</li>
                            <li><i class="fa fa-light fa-angle-right angle-arrow"></i>Filtrazione ad alta efficienza: mantiene la qualità dei prodotti chimici catturando efficacemente le particelle.</li>
                            <li><i class="fa fa-light fa-angle-right angle-arrow"></i>Manutenzione economica: semplifica le operazioni di routine, contribuendo a un processo di filtrazione efficiente ed economico.</li>
                            <li><i class="fa fa-light fa-angle-right angle-arrow"></i>Soluzioni personalizzabili: opzioni versatili per rispondere alle specifiche esigenze dei processi chimici.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="pioneers_industry">
    <div class="container">
        <h3>Pionieri nel settore.</h3>
        <p>Entra in una nuova era della filtrazione, dove l'eccellenza incontra la semplicità.</p>
        <hr class="line">
        <h2>Pronto per l'aggiornamento? </h2>
        <p>Scegli l'eccellenza nella filtrazione quando la precisione è ciò che conta di più.</p>
        <a href="{{ route('contact') }}">Contattaci</a>
    </div>
</section>

<section class="iltration_pharma">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                 <h2 class="coustom_industry">Eleva la tua filtrazione chimica </h2>
                <p class="navigation_pera">Nel dinamico settore della produzione chimica, le soluzioni di filtrazione <b>mmp</b> ridefiniscono gli standard. Migliora i tuoi processi con le nostre cartucce filtranti pieghettate in PP e le sacche filtranti per liquidi, per un futuro più pulito ed efficiente. Contattaci oggi stesso per scoprire il potenziale trasformativo della filtrazione <b>mmp</b> nelle tue operazioni.</p>
                <div class="ym_add">
                    <div class="theme-btn justify-content-start">
                      <button href="#" type="button" class="btn-add" data-bs-toggle="modal" data-bs-toggle="modal"
                        data-bs-target="#exampleModal" data-bs-whatever="@mdo"><span><i class="fa fa-angle-right"
                            aria-hidden="true"></i></span>
                        <p>Get  a Quote</p>
                      </button>
                    </div>
                  </div>
            </div>
            <div class="col-lg-6">
                <img class="img-fluid pharm_mg" src="{{ asset('public/front/images/chemical-filtration.png') }}" alt="filtrazione chimica">
            </div>
        </div>
    </div>
</section>

<!-- our customer -->
<section class="customer">
  <div class="container">
  <h3 class="inner-head">Our Customers</h3>
     <div class="cust_slid">
        <div class="slid_mg">
          <img src="{{ asset('public/front/images/mg1.png') }}" alt="Reliance Industries Limited">
        </div>
        <div class="slid_mg">
          <img src="{{ asset('public/front/images/mg2.png') }}" alt="Otsuka Holdings">
        </div>
        <div class="slid_mg">
          <img src="{{ asset('public/front/images/mg3.png') }}" alt="Ramdev Chemical Industries">
        </div>
        <div class="slid_mg">
          <img src="{{ asset('public/front/images/mg4.png') }}" alt="Adani">
        </div>
        <div class="slid_mg">
          <img src="{{ asset('public/front/images/mg5.png') }}" alt="Indian Oil">
        </div>
        <div class="slid_mg">
          <img src="{{ asset('public/front/images/mg6.png') }}" alt="ONGC">
        </div>
        <div class="slid_mg">
          <img src="{{ asset('public/front/images/mg7.png') }}" alt="HP">
        </div>
        <div class="slid_mg">
          <img src="{{ asset('public/front/images/mg8.png') }}" alt="Murugappa Group">
        </div>
        <div class="slid_mg">
          <img src="{{ asset('public/front/images/mg9.png') }}" alt="RSWM Limited">
        </div>
        <div class="slid_mg">
          <img src="{{ asset('public/front/images/mg10.png') }}" alt="RSPL">
        </div>
        <div class="slid_mg">
          <img src="{{ asset('public/front/images/mg11.png') }}" alt="Allied Blenders & Distillers">
        </div>
        <div class="slid_mg">
          <img src="{{ asset('public/front/images/mg12.png') }}" alt="Bayer">
        </div>
        <div class="slid_mg">
          <img src="{{ asset('public/front/images/mg13.png') }}" alt="GFL - Gujarat Fluorochemicals Limited ">
        </div>
     </div>
  </div>
</section>
<!-- our customer -->

<div class="modal fade" id="inquiryModal" tabindex="-1" aria-labelledby="exampleModalLabel"
aria-hidden="true">

<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modulo di Richiesta</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Chiudi"></button>
        </div>
        <div class="modal-body">
            <form method="post" action="{{ route('productinquiry') }}" id="productinquiry">
                @csrf
                <div class="mb-3">
                    <div class="form-group">
                        <input type="text" placeholder="" name="name" id="name" />
                        <label for="name">Nome</label>
                        <span class="error-message"></span>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="form-group">
                        <input type="text" placeholder="" id="product_name" name="product_name" 
                               value="Industria Chimica" readonly />
                        <label for="floatingSelect">Nome Industria</label>
                        <span class="error-message"></span>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="form-group">
                        <input type="email" placeholder="" name="email" id="email" />
                        <label for="inputField">Email</label>
                        <span class="error-message" id="email-error"></span>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="form-group">
                        <input type="text" placeholder="" name="phone" id="phone" />
                        <label for="">Telefono</label>
                        <span class="error-message"></span>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="form-group">
                        <input type="text" placeholder="" name="city" id="city" />
                        <label for="">Città</label>
                        <span class="error-message"></span>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="form-group">
                        <textarea name="message" id="message" cols="" rows="" class="w-100" placeholder=""></textarea>
                        <label for="">Messaggio</label>
                        <span class="error-message"></span>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="form-group">
                        <div class="g-recaptcha" data-sitekey="6Lc2cg0sAAAAAKmVVEUvIDR61vxyYWi_BmanSqth" id="captcha_productinquiry"></div>
                        <span class="error-message" id="captcha-error"></span>
                    </div>
                </div>
            </form>
        </div>
        <div class="modal-footer d-flex justify-content-center theme-btn">
            <button type="button" id="productinquirysubmit" class="btn-add">
                <span><i class="fa fa-angle-right" aria-hidden="true"></i></span>
                <p>Invia Messaggio</p>
            </button>
        </div>
    </div>

</div>

</div>
@include('layouts.frontfooter')

<script>
    $('#productinquirysubmit').on('click', function(event) {
    let isValid = true;

    // Nome
    if ($('#name').val().trim() === '') {
        $('#name').siblings('.error-message').text('Questo campo è obbligatorio.');
        isValid = false;
    }

    // Email
    let email = $('#email').val().trim();
    let emailValidation = validateEmail(email);
    if (!emailValidation.valid) {
        $('#email-error').text(emailValidation.message);
        isValid = false;
    } else {
        $('#email-error').text('');
    }

    // Telefono
    if ($('#phone').val().trim().length < 10) {
        $('#phone').siblings('.error-message').text('Inserisci un numero di telefono valido.');
        isValid = false;
    }

    // Città
    if ($('#city').val().trim() === '') {
        $('#city').siblings('.error-message').text('Questo campo è obbligatorio.');
        isValid = false;
    }

    // Messaggio
    if ($('#message').val().trim() === '') {
        $('#message').siblings('.error-message').text('Questo campo è obbligatorio.');
        isValid = false;
    }

    // reCAPTCHA
    var recaptchaResponse = grecaptcha.getResponse();
    if (recaptchaResponse.length === 0) {
        $('#captcha-error').text('Si prega di verificare il CAPTCHA.');
        isValid = false;
    } else {
        $('#captcha-error').text('');
    }

    if (!isValid) {
        event.preventDefault();
    } else {
        $('#productinquiry').submit();
    }
});

// Pulizia messaggi di errore quando l’utente scrive
$('input, textarea').on('input', function() {
    $(this).siblings('.error-message').text('');
});

// Validazione email
function validateEmail(email) {
    var emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    var spamPatterns = [
        /^[a-zA-Z]{8,}[0-9]{6,}@/,
        /^[0-9]+@/,
        /(temp-mail|10minutemail|mailinator|guerrillamail|yopmail|throwawaymail|form-check.online|nuself.eu|seismologiomail.com|ru|mailport.lat)/i,
        /^(test|demo|example|noreply|fake|admin|info|random|dummy)/i,
        /^(.)(\1){5,}@/
    ];

    if (!emailPattern.test(email)) {
        return { valid: false, message: "Inserisci un indirizzo email valido." };
    }

    for (let pattern of spamPatterns) {
        if (pattern.test(email)) {
            return { valid: false, message: "Questa email non è consentita." };
        }
    }

    return { valid: true, message: "" };
}

</script>