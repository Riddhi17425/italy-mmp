@include('layouts.frontheader')
<!-- banner -->
<style>
    .set-content p {
        color: #fff;
        margin-bottom: 30px;
    }
</style>
<!-- banner -->
<section class="contact-banner position-relative">
    <img src="{{ asset('public/front/images/wound_filter_production_machine_banner.webp
        ') }}" alt="Wound Filter Banner"
        class="img-fluid mobile-img" />
    <div class="container-fluid p-0">
        <img src="{{ asset('public/front/images/wound_filter_production_machine_banner.webp') }}" alt="Wound Filter Banner"
            class="img-fluid product-page-header" />
        <div class="contact-head product-contact-head">
            <h1>Macchine per Cartucce Filtranti Bobinate</h1>
            <div class="row">
                <div class="col-md-9">
                    <div class="set-content">
                        <p>Soluzioni di bobinatura di alta precisione per produrre cartucce filtranti bobinate costanti e di alta qualità, dai compatti sistemi elettromeccanici alle piattaforme multistrato completamente automatiche.</p>
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
        </div>
    </div>
</section>
<!-- banner end -->

<!-- filter-inner -->
<section class="filter-inner pb-3 mb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="m-add">
                    <h2 class="inner-head">Produttore e Fornitore di Bobinatrici Automatiche</h2>
                    <p>
                        <b>mmp</b> progetta e produce sistemi di bobinatura automatica interamente in India, fornendo acquirenti e produttori di cartucce filtranti in Italia e nel mondo. In qualità di produttore diretto di bobinatrici automatiche, ogni macchina è costruita internamente nello stabilimento <b>mmp</b> di Ahmedabad, dai componenti meccanici alle piattaforme a controllo software. Nessuna esternalizzazione, nessun assemblaggio affidato a terzi. <b>mmp</b> è anche fornitore di bobinatrici e offre, per ogni modello, supporto all’installazione, formazione degli operatori e fornitura di ricambi.
                    </p>
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
                                                <input type="text" placeholder="" required name="name" id="name"
                                                    oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '').replace(/\s+/g, ' ').trimStart();" />
                                                <label for="name">Nome</label>
                                                <span class="error-message"></span>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <div class="form-group">
                                                <input type="text" placeholder="" id="product_name" required name="product_name"
                                                    value="Macchina per Cartucce Filtro Avvolto" readonly />
                                                <label for="floatingSelect">Nome Prodotto</label>
                                                <span class="error-message"></span>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <div class="form-group">
                                                <input type="email" placeholder="" name="email" required id="email" />
                                                <label for="inputField">Email</label>
                                                <span class="error-message" id="email-error"></span>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <div class="form-group">
                                                <input type="text" placeholder="" name="phone" required id="phone"
                                                    oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 15);" />
                                                <label for="">Numero di Contatto</label>
                                                <span class="error-message"></span>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <div class="form-group">
                                                <input type="text" placeholder="" name="city" required id="city"
                                                    oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '').replace(/\s+/g, ' ').trimStart();" />
                                                <label for="">Città</label>
                                                <span class="error-message"></span>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <div class="form-group">
                                                <textarea name="message" id="message" required cols="" rows="" class="w-100" placeholder=""></textarea>
                                                <label for="">Messaggio</label>
                                                <span class="error-message"></span>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <div class="form-group">
                                                <div class="g-recaptcha" data-sitekey="6Lc2cg0sAAAAAKmVVEUvIDR61vxyYWi_BmanSqth"
                                                    id="captcha_productinquiry"></div>
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
        </div>
        <div class="row m-add">
            <h2 class="text-center inner-head mb-3">1ª Generazione: Bobinatrice</h2>
            <p>La bobinatrice di prima generazione di <b>mmp</b> è un sistema elettromeccanico progettato per produrre in modo affidabile e costante cartucce filtranti a filo avvolto. Funziona con alimentazione monofase in corrente alternata e con due mandrini, producendo due cartucce contemporaneamente: è quindi ideale per produzioni di piccola e media scala.</p>
            
            <p><b>Produzione a doppio mandrino:</b> entrambi i mandrini avvolgono nella stessa direzione e possono realizzare cartucce della stessa lunghezza o di due lunghezze diverse nello stesso ciclo, con una produzione sensibilmente più alta senza aumentare la complessità.</p>
            <p><b>Controllo variabile della velocità:</b> un inverter (variatore di frequenza CA) con motore offre all’operatore un ampio controllo sulla velocità di avvolgimento, regolabile in base al tipo di filo, al grado di filtrazione e alle dimensioni della cartuccia.</p>
            <p><b>Sensore di arresto automatico:</b> la macchina si ferma automaticamente quando la cartuccia raggiunge il diametro esterno desiderato, eliminando il controllo manuale e garantendo uniformità dimensionale su ogni cartuccia prodotta.</p>
            <p><b>Design a bassa manutenzione:</b> il disegno e la precisione dell’avvolgimento sono affidati a ingranaggi di sincronizzazione. La semplicità meccanica del sistema di prima generazione significa meno componenti da sottoporre a manutenzione e una maggiore durata operativa.</p>
            <p><b>Compatibilità con diverse anime:</b> supporta anime in polipropilene, acciaio inox e acciaio stagnato, coprendo l’intera gamma di esigenze produttive per le applicazioni industriali standard.</p>
           
            <div class="col-md-5 mb-4">
                <div class="product-detail">
                    <div><img src="{{ asset('public/front/images/Electromechanical-Winding-Machines.webp') }}" alt="Macchina Per Cartucce Filtranti Avvolte"
                            class="img-fluid"></div>
                </div>
            </div>
           
            <div class="col-md-7 machine-table">
    <h3 class="text-start inner-head mb-4">Specifiche Tecniche</h3>
    <table class="table table-bordered table-striped">
        <tbody>
            <tr>
                <th scope="row">Voce</th>
                <th  scope="row">Specifica</td>
            </tr>
            <tr>
                <td>Nome della macchinae</th>
                <td>Macchina per filtri a filo avvolto</td>
            </tr>
            <tr>
                <td>Azionamento e motore</th>
                <td>Inverter (variatore di frequenza CA) e motore</td>
            </tr>
            <tr>
                <td>Alimentazione</th>
                <td>220 V / 50 Hz, monofase</td>
            </tr>
            <tr>
                <td>Materiale dell’anima di avvolgimento</th>
                <td>Polipropilene, acciaio inox o acciaio stagnato</td>
            </tr>
            <tr>
                <td>Diametro del tubo di avvolgimento</th>
                <td>28 mm</td>
            </tr>
            <tr>
                <td>Lunghezze di avvolgimento disponibili</th>
                <td>222, 235, 250, 254, 500, 508, 750, 762, 1000, 1016, 1270, 1778 mm</td>
            </tr>
            <tr>
                <td>Sensore di arresto automatico</th>
                <td>Si attiva al diametro desiderato della cartuccia</td>
            </tr>
            <tr>
                <td>Diametro esterno di avvolgimento (OD)</th>
                <td>Da 45 mm a 200 mm</td>
            </tr>
            <tr>
                <td>Disegno e precisione di avvolgimento</th>
                <td>Ottenuti tramite ingranaggi di sincronizzazione</td>
            </tr>
            <tr>
                <td>Manutenzione</th>
                <td>Progettata per una manutenzione minima</td>
            </tr>
        </tbody>
    </table>
</div>
        </div>
        <div class="row m-add">
            <div class="col-lg-12 mb-3">
                <h2 class="text-center inner-head mb-3">3ª Generazione: Smartwind 360, Bobinatrice Multistrato Completamente Automatica</h2>
                <p>La Smartwind 360, bobinatrice multistrato completamente automatica, è la piattaforma produttiva più avanzata di <b>mmp</b>. A differenza dei sistemi di avvolgimento tradizionali, che operano su un unico piano, la Smartwind 360 alimenta il filo simultaneamente a 360 gradi, creando più strati in ogni cartuccia con una copertura circonferenziale completa.</p>

                <p>Il risultato è una struttura filtrante più compatta e uniforme, con una migliore adesione tra gli strati, prestazioni di filtrazione più costanti e una maggiore integrità meccanica rispetto alle cartucce bobinate standard.</p>
                
                <h3>Principali Caratteristiche</h3>
                <p><b>Avvolgimento multistrato a 360 gradi:</b> il filo viene avvolto simultaneamente da più angolazioni, garantendo una copertura circonferenziale completa e una densità degli strati ottimizzata in tutto il corpo della cartuccia.</p>
                <p><b>Impostazione dei micron via software:</b> il grado di filtrazione viene impostato e mantenuto in digitale. La ripetibilità delle prestazioni tra un lotto e l’altro elimina le regolazioni manuali richieste dalle generazioni precedenti di macchine.</p>
                <p><b>Disegno a rombo programmabile:</b> le direzioni di avvolgimento assiale e circonferenziale sono definite con precisione via software, producendo una geometria a rombo costante che determina le caratteristiche di filtrazione della cartuccia.</p>
                
                <p><b>Configurazioni a 2 e a 3 mandrini:</b> la Smartwind 360 è offerta nelle versioni a 2 e a 3 mandrini. Il modello a 3 mandrini offre una produzione maggiore per ciclo ed è quindi adatto agli impianti di produzione di filtri a più alto volume.</p>
                <p><b>Prestazioni strutturali migliorate:</b> l’avvolgimento multistrato conferisce maggiore resistenza meccanica alla cartuccia finita, e la migliore adesione tra gli strati riduce la migrazione del media, prolungando la vita utile rispetto alle cartucce equivalenti a strato singolo.</p>
            </div>
            
        </div>


        <div class="row m-add">

            <h2 class="text-center inner-head mb-3 ">Macchine per la Produzione di Cartucce Filtranti in Italia</h2>
            <p><b>mmp</b> fornisce le proprie bobinatrici per cartucce a filo avvolto a produttori di cartucce filtranti e acquirenti industriali in tutta Italia. Sia il sistema elettromeccanico di prima generazione sia la bobinatrice automatica Smartwind 360 sono disponibili per il mercato italiano, con supporto completo all’installazione, formazione degli operatori e assistenza tecnica continuativa inclusi.</p>
            
            <p>Gli acquirenti e i produttori italiani che si affidano a <b>mmp</b> ricevono macchine costruite con le stesse specifiche di quelle fornite ai clienti di Stati Uniti, Regno Unito, Emirati Arabi Uniti, Russia, Canada e Australia. Documentazione di esportazione, pratiche di conformità e fornitura di ricambi sono gestite direttamente da <b>mmp</b>.</p>
            <p>Per i produttori italiani di filtri che desiderano internalizzare la produzione di cartucce bobinate o aggiornare le attrezzature di bobinatura esistenti, la gamma di macchine <b>mmp</b> copre ogni scala produttiva, dai sistemi base a doppio mandrino alle piattaforme multimandrino completamente automatiche.</p>

        </div>
        
        <h2 class="text-center inner-head mb-3 mt-3">Perché Scegliere mmp Filtration per le Macchine per Cartucce Bobinate in Italia?</h2>
        <p><b>Tre generazioni di tecnologia di bobinatura:</b> dal 1994 mmp ha sviluppato la propria tecnologia di bobinatura in tre distinte generazioni di macchine. Ogni generazione ha colmato i limiti prestazionali di quella precedente, dando vita a una gamma che riflette una reale esperienza produttiva, non solo teoria ingegneristica.</p>
        <p><b>Make in India, collaudata a livello globale:</b> ogni bobinatrice automatica fornita da mmp è progettata e costruita in India. Le stesse macchine sono operative in stabilimenti di produzione di filtri in diversi Paesi: un’esperienza che gli acquirenti italiani possono verificare.</p>
        <p><b>Copertura completa della gamma produttiva:</b> con lunghezze delle cartucce da 5" a 70" e gradi di filtrazione da 0,5 a 100 µm, le macchine mmp coprono l’intera gamma delle specifiche standard delle cartucce bobinate, senza bisogno di attrezzature separate per le diverse dimensioni.</p>
        <p><b>Assistenza diretta dal produttore:</b> ricambi, supporto all’installazione e assistenza tecnica arrivano direttamente da mmp, non da un distributore o da un agente terzo. Questo riduce i tempi di risposta e mantiene le macchine operative con fermi minimi.</p>
        <p><b>Personalizzazione disponibile:</b> configurazioni della macchina, numero di mandrini, compatibilità con le anime e parametri software possono essere adattati alle specifiche esigenze produttive. Contatta mmp per discutere le tue specifiche di produzione.</p>
</section>


<section class="Product-detail-faq">
    <div class="container">
        <h2 class="inner-head">FAQ: Bobinatrice Automatica</h2>

        <div class="accordion accordion-flush" id="accordionFlushExample">

            <div class="accordion-item">
                <h3 class="accordion-header" id="flush-heading1">
                    <button class="accordion-button" type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#flush-collapse1"
                        aria-expanded="true"
                        aria-controls="flush-collapse1">
                        Come funziona una bobinatrice automatica?
                    </button>
                </h3>
                <div id="flush-collapse1" class="accordion-collapse collapse show"
                    aria-labelledby="flush-heading1"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                          Una bobinatrice automatica deposita il filo su un mandrino o un’anima in rotazione, secondo un disegno preciso e uniforme a diamante o a rombo. Sensori automatici e software controllano la velocità di avvolgimento, il grado di compattazione degli strati e il diametro esterno della cartuccia. Al raggiungimento del diametro desiderato la macchina si ferma e la cartuccia viene espulsa.

                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h3 class="accordion-header" id="flush-heading2">
                    <button class="accordion-button collapsed" type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#flush-collapse2"
                        aria-expanded="false"
                        aria-controls="flush-collapse2">
                       Quali settori utilizzano le bobinatrici automatiche per filtri?
                    </button>
                </h3>
                <div id="flush-collapse2" class="accordion-collapse collapse"
                    aria-labelledby="flush-heading2"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                         Si affidano ai sistemi di bobinatura i produttori di cartucce filtranti per trattamento acque, farmaceutico, alimentare e bevande, industria chimica, tessile, petrolio e gas e lattiero-caseario. Se il tuo settore richiede la produzione in serie di cartucce bobinate, le bobinatrici automatiche sono più efficaci della produzione manuale.

                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h3 class="accordion-header" id="flush-heading3">
                    <button class="accordion-button collapsed" type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#flush-collapse3"
                        aria-expanded="false"
                        aria-controls="flush-collapse3">
                       Quali sono i vantaggi di una bobinatrice automatica rispetto alla bobinatura manuale?

                    </button>
                </h3>
                <div id="flush-collapse3" class="accordion-collapse collapse"
                    aria-labelledby="flush-heading3"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                          Le macchine automatiche garantiscono gradi di filtrazione costanti, densità uniforme degli strati e dimensioni ripetibili su ogni cartuccia prodotta. La bobinatura manuale introduce una variabilità legata all’operatore che incide sulle prestazioni di filtrazione e sull’affidabilità del prodotto. I sistemi automatici offrono inoltre una produzione per turno molto più alta e un costo unitario inferiore.
                    </div>
                </div>
            </div>
            
             <div class="accordion-item">
                <h3 class="accordion-header" id="flush-heading4">
                    <button class="accordion-button collapsed" type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#flush-collapse4"
                        aria-expanded="false"
                        aria-controls="flush-collapse4">
                       Quanto costa una bobinatrice automatica?

                    </button>
                </h3>
                <div id="flush-collapse4" class="accordion-collapse collapse"
                    aria-labelledby="flush-heading4"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                          Il prezzo dipende dalla configurazione, dal numero di mandrini e dal livello di automazione. La macchina elettromeccanica di prima generazione e la Smartwind 360 si collocano a fasce di prezzo diverse, in linea con le rispettive capacità. Contatta direttamente mmp indicando le tue esigenze produttive per ricevere un’offerta commerciale definitiva.

                    </div>
                </div>
            </div>
            
             <div class="accordion-item">
                <h3 class="accordion-header" id="flush-heading5">
                    <button class="accordion-button collapsed" type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#flush-collapse5"
                        aria-expanded="false"
                        aria-controls="flush-collapse5">
                        Le bobinatrici automatiche possono essere personalizzate?

                    </button>
                </h3>
                <div id="flush-collapse5" class="accordion-collapse collapse"
                    aria-labelledby="flush-heading5"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                         Sì. <b>mmp</b> realizza anime di avvolgimento di dimensioni personalizzate, configurazioni dei mandrini, impostazioni dei parametri software e intervalli di lunghezza di produzione su misura. Gli acquirenti con specifiche di cartuccia o esigenze di alloggiamento particolari possono discutere le opzioni di personalizzazione direttamente con il team produttivo di <b>mmp</b>.

                    </div>
                </div>
            </div>
            
             <div class="accordion-item">
                <h3 class="accordion-header" id="flush-heading6">
                    <button class="accordion-button collapsed" type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#flush-collapse6"
                        aria-expanded="false"
                        aria-controls="flush-collapse6">
                        Qual è la differenza tra una bobinatrice a 2 mandrini e una a 3 mandrini?
                    </button>
                </h3>
                <div id="flush-collapse6" class="accordion-collapse collapse"
                    aria-labelledby="flush-heading6"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                          Una macchina a 2 mandrini produce due cartucce per ciclo di produzione. Una macchina a 3 mandrini ne produce tre per ciclo, aumentando la produzione per ciclo del 50% con lo stesso operatore e lo stesso ingombro a terra. La Smartwind 360 a 3 mandrini è indicata per ambienti di produzione ad alto volume, dove la velocità produttiva è un requisito operativo chiave.

                    </div>
                </div>
            </div>
            
            

        </div>
    </div>
</section>
@include('layouts.frontfooter')
<script>
$('#productinquirysubmit').on('click', function(event) {
    let isValid = true;

    // Nome
    let name = $('#name').val().trim();
    if (name === '' || containsSpamContent(name)) {
        $('#name').siblings('.error-message').text('Inserisci un nome valido.');
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

    // Messaggio
    let message = $('#message').val().trim();
    if (message === '' || containsSpamContent(message)) {
        $('#message').siblings('.error-message').text('Inserisci un messaggio valido.');
        isValid = false;
    }

    // Città
    let city = $('#city').val().trim();
    if (city === '' || containsSpamContent(city)) {
        $('#city').siblings('.error-message').text('Inserisci una città valida.');
        isValid = false;
    }

    // reCAPTCHA
    var recaptchaResponse = grecaptcha.getResponse();
    if (recaptchaResponse.length === 0) {
        $('#captcha-error').text('Per favore verifica il CAPTCHA.');
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

// Pulisce messaggi di errore quando si digita
$('input, textarea').on('input', function() {
    $(this).siblings('.error-message').text('');
});

// Validazione Email
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

// Controllo contenuto spam
function containsSpamContent(input) {
    let cleaned = input.trim().toLowerCase();

    if (/^[\s\*\#@!$%^&()_+\-=\[\]{};':"\\|,.<>\/?`~]+$/.test(cleaned)) return true;
    if (/([#@!$%^&*()_+={}\[\]|\\:;"'<>,.?/~`-])\1{1,}/.test(cleaned)) return true;
    if (/^(https?:\/\/|www\.|<a\s+href=)/i.test(cleaned) && cleaned.length < 40) return true;

    const spamPatterns = [
        /<a\s+href=/i,
        /snag\s+your\s+free/i,
        /hs=[a-z0-9]{20,}/i,
        /xxx/i,
        /^\*{3,}$/ 
    ];

    return spamPatterns.some(pattern => pattern.test(cleaned));
}
</script>

