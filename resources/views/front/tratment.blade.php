@include('layouts.frontheader')
<section class="contact-banner position-relative">
    <div class="container-fluid p-0">
        <img src="{{ asset('public/front/images/water-treatment-industry.png') }}" alt="Industria del trattamento delle acque" class="img-fluid product-page-header" />
        <div class="contact-head">
            <h1>Industria del trattamento delle acque</h1>
             <div class="set-content">
                    <p>Ottieni risultati di trattamento dell'acqua limpidi e affidabili con la soluzione di filtrazione <b>mmp</b>.</p>
                    </div>
                     <div class="theme-btn justify-content-start ">
                      <button type="button" class="btn-add" data-bs-toggle="modal" data-bs-toggle="modal"
                        data-bs-target="#inquiryModal" data-bs-whatever="@mdo"><span><i class="fa fa-angle-right"
                            aria-hidden="true"></i></span>
                        <p>Richiedi Ora</p>
                      </button>
                    </div>
          
                    <div class="modal fade" id="inquiryModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                       value="Industria del Trattamento dell'Acqua" readonly />
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

            
        </div>
    </div>
</section>
<section class="navigating">
    <div class="container">
         <h2 class="coustom_industry"><b>mmp</b> L'innovazione <b>mmp</b> Plasma Il Futuro Dell'acqua Pulita</h2>
        <div class="row">
            <div class="col-lg-4">
                 <img class="img-fluid" src="{{ asset('public/front/images/challenges-in-water-treatment.png') }}" alt="Sfide nel Trattamento dell’Acqua">
            </div>
            <div class="col-lg-8">
                <div class="nvgg_content">
                    <p class="navigation_pera">L’imperativo imprescindibile di mantenere la purezza dell’acqua per garantire sicurezza e conformità pone la filtrazione come elemento centrale nella rimozione delle impurità e nella salvaguardia dell’integrità dell’acqua. Le soluzioni innovative <b>mmp</b>rivoluzionano il trattamento delle acque migliorando l’efficienza e affrontando direttamente le sfide del settore.
                    </p>
                    <h3 class="custom_pera">Sfide nel trattamento delle acque</h3>
                    <p class="navigation_pera">Ostruzioni, contaminazione microbica e scarsa efficienza di filtrazione rappresentano rischi per la qualità dell’acqua. Se non controllate, queste problematiche possono avere conseguenze gravi. Le soluzioni di filtrazione <b> mmp </b> si affermano come uno scudo affidabile, riducendo i rischi nei processi di trattamento delle acque.</p>
                </div>
            </div>
          
        </div>
    </div>
</section>

<section class="mmp_solutions">
    <div class="container">
        <!--content panding-->
       <!--end content pading-->
        <div class="row">
            <div class="col-lg-6">
                <a href="{{ url('dettaglio-prodotto/cartucce-pleat-pp')}}" target="_blank">
                  <h3 class="custom_pera title-link">Cartuccia filtrante pieghettata in PP industriale  </h3>
                </a>
                <p class="navigation_pera">Filtrazione superiore per il trattamento di acque minerali, con struttura in polipropilene che garantisce la rimozione delle impurità.</p>

                <a href="{{ url('dettaglio-prodotto/cartucce-filtranti-soffiate-a-fusione')}}" target="_blank">
                    <h3 class="custom_pera title-link">Cartucce filtranti melt-blown</h3>
                </a>
                <p class="navigation_pera">Efficienza di filtrazione eccezionale con la serie Melt-blown, ideale per trattamenti dell’acqua ad alte prestazioni.</p>

                <a href="{{ url('dettaglio-prodotto/cartucce-filtranti-avvolte')}}" target="_blank">
                    <h3 class="custom_pera title-link">Cartucce filtranti Per Ferite</h3>
                </a>    
                <p class="navigation_pera">Trattamento dell’acqua affidabile con cartucce avvolte in PP, caratterizzate da un design a filo avvolto che assicura un’efficace rimozione delle particelle.</p>
                
                <a href="{{ url('dettaglio-prodotto/sacchetti-filtranti-pleat')}}" target="_blank">
                    <h3 class="custom_pera title-link">Sacche filtranti pieghettate per aria</h3>
                </a>
                <p class="navigation_pera">Eleva la filtrazione dell’aria negli impianti di trattamento delle acque, catturando efficacemente le particelle aerodisperse e prolungando la vita operativa delle apparecchiature.</p>
            </div>
            <div class="col-lg-6">
                <div class="mg_area">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <img class="img-fluid" src="{{ asset('public/front/images/Water_Industry.jpg') }}" alt="industria idrica">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="benefits_pharma">
            <h2 class="coustom_industry">Vantaggi della filtrazione <b>mmp</b></h2>
            <div class="row">
                <div class="col-lg-6">
                    <img class="img-fluid" src="{{ asset('public/front/images/water Industry 4.png') }}" alt="Filtrazione per Trattamento dell’Acqua">
                </div>
                <div class="col-lg-6">
                    <div class="nvgg_content">
                        <ul class="point_benefit">
                            <li><i class="fa fa-light fa-angle-right angle-arrow"></i>Rimozione eccezionale delle particelle: garantisce acqua sicura e di alta qualità.</li>
                            <li><i class="fa fa-light fa-angle-right angle-arrow"></i>Prestazioni durature: progettate per un’affidabilità costante nel tempo.</li>
                            <li><i class="fa fa-light fa-angle-right angle-arrow"></i>Soluzioni personalizzabili: adattate alle esigenze specifiche del trattamento delle acque.</li>
                            <li><i class="fa fa-light fa-angle-right angle-arrow"></i>Filtrazione dell’aria completa: protegge le apparecchiature e riduce i costi di manutenzione.</li>
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
        <h2>Pronto per l'aggiornamento?</h2>
        <p>Scegli l'eccellenza nella filtrazione quando la precisione è ciò che conta di più.</p>
        <a href="{{ route('contact') }}">Contattaci</a>
    </div>
</section>
<section class="iltration_pharma">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <!--<p class="get_quote">Get a Quote Today!</p>-->
                <h2 class="coustom_industry">Eleva la tua filtrazione per il trattamento delle acque</h2>
                <p class="navigation_pera">Nel settore del trattamento delle acque, le soluzioni di filtrazione <b>mmp</b> ridefiniscono gli standard. Dal trattamento delle acque minerali alla purificazione generale, i nostri filtri si distinguono per prestazioni e affidabilità. Contattaci oggi stesso per scoprire come la filtrazione <b>mmp</b>  può elevare i tuoi processi, garantendo una fornitura continua di acqua pulita e sicura. Scegli l’eccellenza con <b>mmp</b> – dove precisione ed efficienza si incontrano.</p>
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
                <img class="img-fluid pharm_mg" src="{{ asset('public/front/images/water-filtration-solutions.png') }}" alt="Soluzioni di Filtrazione dell’Acqua">
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
    
    // Pulizia dei messaggi di errore quando l’utente scrive
    $('input, textarea').on('input', function() {
        $(this).siblings('.error-message').text('');
    });
    
    // Funzione di validazione email
    function validateEmail(email) {
        var emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
        var spamPatterns = [
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