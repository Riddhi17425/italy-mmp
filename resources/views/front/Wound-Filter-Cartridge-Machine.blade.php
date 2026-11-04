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
    <img src="{{ asset('public/front/images/Wound_Filter_Cartridge_Machine.jpg
        ') }}" alt="Wound Filter Banner"
        class="img-fluid mobile-img" />
    <div class="container-fluid p-0">
        <img src="{{ asset('public/front/images/wound_filter_production_machine.jpg') }}" alt="Wound Filter Banner"
            class="img-fluid product-page-header" />
        <div class="contact-head product-contact-head">
            <h1>Macchina per la Produzione di Filtri Bobinati</h1>
            <div class="row">
                <div class="col-md-9">
                    <div class="set-content">
                        <p>Soluzioni di precisione, supportate da software, per la produzione di cartucce filtranti bobinate in modo costante e ad alta velocità, dai sistemi elettromeccanici a due mandrini fino alla Smartwind 360, completamente automatica e a tre mandrini. </p>
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
<section class="filter-inner pb-3">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="m-add">
                    <h2 class="inner-head">Produttore di Macchine Bobinatrici per Cartucce Filtranti a Filo a 3 Mandrini</h2>
                    <p>
                        <b>mmp</b> è un produttore di macchine per la produzione di cartucce filtranti bobinate, con oltre 30 anni di esperienza nella progettazione e nella costruzione interna. Entrambe le generazioni di macchine sono costruite interamente nello stabilimento <b>mmp</b> di Ahmedabad e fornite a produttori di cartucce filtranti e industrie manifatturiere in Italia, Stati Uniti, Regno Unito, Emirati Arabi Uniti, Australia, Russia e Canada. <b>mmp</b> gestisce direttamente assistenza all’installazione, formazione degli operatori e fornitura di ricambi, senza una rete di assistenza di terzi. 
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
            <h2 class="text-center inner-head mb-3">Macchina per la Produzione di Cartucce Filtranti Bobinate</h2>
            <p>La bobinatrice per cartucce filtranti di <b>mmp</b>, supportata da software, è un sistema di avvolgimento a controllo elettronico che sostituisce il controllo meccanico del disegno di avvolgimento tramite ingranaggi con la tecnologia a servomotore ed encoder. I disegni di avvolgimento e la precisione sono gestiti tramite impostazioni software, eliminando la necessità di cambiare ingranaggi al variare delle specifiche del filtro.</p>
            <p>La macchina funziona con alimentazione monofase in corrente alternata e supporta anime in polipropilene, melt blown, acciaio inox e acciaio stagnato, con diametro del tubo di avvolgimento di 28 mm. Un sensore di arresto automatico si attiva al raggiungimento del diametro esterno desiderato, garantendo che ogni cartuccia prodotta rispetti le specifiche dimensionali senza interventi manuali.</p>
            
            <p>Progettata per una produzione costante con tempi di fermo minimi, questa macchina per cartucce a filo in PP è adatta a realtà produttive di piccola e media scala che cercano un avvolgimento affidabile e controllato via software, senza la complessità e il costo di una piattaforma completamente automatica.</p>
            <div class="col-md-5 mb-4">
                <div class="product-detail">
                    <div><img src="{{ asset('public/front/images/WoundFilter_Product.jpg') }}" alt="Macchina Per Cartucce Filtranti Avvolte"
                            class="img-fluid"></div>
                </div>
            </div>
            
            <div class="col-md-7 machine-table">
    <h3 class="text-start inner-head mb-4">SPECIFICHE TECNICHE</h3>
    <table class="table table-bordered table-striped">
        <tbody>
            <tr>
                <th scope="row">Nome della macchina</th>
                <th  scope="row">Macchina elettronica per filtri a filo avvolto, supportata da software</td>
            </tr>
            <tr>
                <td>Azionamento e motore</th>
                <td>Inverter (variatore di frequenza CA) e motore + servomotore / servoazionamento</td>
            </tr>
            <tr>
                <td>Alimentazione</th>
                <td>CA 220 V / 50 Hz, monofase</td>
            </tr>
            <tr>
                <td>Materiale dell’anima di avvolgimento</th>
                <td>Polipropilene, melt blown, acciaio inox, acciaio stagnato</td>
            </tr>
            <tr>
                <td>Diametro del tubo di avvolgimento</th>
                <td>28 mm</td>
            </tr>
            <tr>
                <td>Lunghezze di avvolgimento disponibili</th>
                <td>250/254 mm, 500/508 mm, 750/762 mm, 1000/1016 mm</td>
            </tr>
            <tr>
                <td>Sensore di arresto automatico</th>
                <td>Si attiva al diametro esterno desiderato della cartuccia</td>
            </tr>
            <tr>
                <td>Diametro esterno di avvolgimento</th>
                <td>Fino a 200 mm</td>
            </tr>
            <tr>
                <td>Disegno e precisione di avvolgimento</th>
                <td>Controllati via software, senza ingranaggi</td>
            </tr>
            <tr>
                <td>Manutenzione</th>
                <td>Design a bassa manutenzione</td>
            </tr>
        </tbody>
    </table>
</div>
        </div>
        <div class="row m-add">
            <div class="col-lg-12 mb-4">
                <!-- <h2 class="text-start inner-head mb-3">Wound Filter Production Machine</h2> -->
                <h2 class="text-start inner-head mb-3">Bobinatrice SMARTWIND 360°</h2>
                <p>La Smartwind 360 è la macchina più avanzata di <b>mmp:</b> una bobinatrice a 3 mandrini per cartucce filtranti a filo, progettata per la produzione ad alto volume e di alta precisione. Lavora con tre mandrini contemporaneamente, e ogni mandrino produce una cartuccia da 20 pollici per ciclo. Si ottengono quindi tre cartucce finite per ogni ciclo di produzione, con lo stesso ingombro a terra di una macchina a un solo mandrino: la scelta giusta per i produttori che vogliono aumentare la produzione senza aumentare lo spazio occupato.</p>

                <p>Ciò che distingue la Smartwind 360 dai sistemi di avvolgimento tradizionali è la capacità di avvolgimento multistrato a 360 gradi. Il filo viene alimentato simultaneamente da tutte le direzioni, creando in ogni cartuccia una vera struttura multistrato a gradiente. Ne derivano un migliore legame tra gli strati, prestazioni di filtrazione più uniformi lungo tutta la cartuccia e una maggiore resistenza meccanica del filtro finito: caratteristiche che incidono direttamente sulle prestazioni di filtrazione per l’utilizzatore finale.</p>
                
                <h3>Principali Caratteristiche della Smartwind 360</h3>
                <p><b>Produzione a 3 mandrini:</b> tre cartucce da 20 pollici prodotte contemporaneamente per ogni ciclo, con elevata produttività e precisione costante, dimensionale e di filtrazione, su ogni unità.</p>
                <p><b>Gamma di filtrazione da 1 a 100 micron:</b> l’intera gamma da 1 a 100 µm si ottiene tramite i parametri di avvolgimento controllati da software, senza alcuna regolazione meccanica tra un lotto e l’altro.</p>
                <p><b>Lunghezze delle cartucce da 10" a 40":</b> lunghezze standard ed estese sono gestite nella stessa piattaforma, coprendo la maggior parte delle specifiche degli alloggiamenti filtranti commerciali e industriali.</p>
                
                <p><b>Compatibile con filo in PP e in cotone:</b> funziona con filo di polipropilene e filo di cotone, i due materiali più diffusi per le cartucce bobinate nelle applicazioni industriali e alimentari.</p>
                <p><b>Produzione completamente automatica:</b> la Smartwind 360 richiede un intervento minimo dell’operatore, dall’alimentazione del filo al completamento della cartuccia, con risparmio energetico e poca manutenzione; il costo operativo per cartuccia resta così molto basso.</p>
                <p><b>Disegni di avvolgimento personalizzati:</b> gli operatori possono programmare direttamente dall’interfaccia della macchina i propri disegni di avvolgimento, le strutture a strati e i gradi di filtrazione, offrendo ai produttori di filtri una reale capacità di differenziare il prodotto.</p>
            </div>
            
        </div>


        <div class="row m-add">

            <h2 class="text-center inner-head mb-3 mt-3">Perché Scegliere mmp Filtration per le Macchine per la Produzione di Cartucce Bobinate in Italia?</h2>
            <p>I produttori di cartucce filtranti e gli investitori italiani che valutano un impianto per la produzione di cartucce bobinate hanno bisogno di un fornitore che conosca sia le macchine sia il settore della filtrazione a cui sono destinate. <b>mmp</b> progetta e costruisce internamente entrambe le generazioni di macchine; le scelte progettuali alla base della Smartwind 360 derivano direttamente da decenni di esperienza nella produzione di cartucce bobinate e nella loro fornitura a livello mondiale.</p>
            
            <p><b>Versioni a due e a tre mandrini:</b> la versione a due mandrini della Smartwind 360 è indicata per chi sta passando a una produzione automatizzata. La configurazione a 3 mandrini è adatta ai produttori già affermati che puntano alla massima produzione per turno.</p>
            <p><b>Prodotta in India, fornita in Italia:</b> ogni macchina fornita da <b>mmp</b> è progettata e costruita ad Ahmedabad. Gli acquirenti italiani ricevono le stesse specifiche e la stessa assistenza post-vendita dei clienti di Stati Uniti, Regno Unito ed Emirati Arabi Uniti, con documentazione di esportazione e spedizione gestite direttamente da <b>mmp</b>.</p>
            <p><b>Ricambi e assistenza tecnica:</b> i ricambi per entrambe le generazioni di macchine sono a magazzino e forniti direttamente da <b>mmp</b>. L’assistenza tecnica è offerta direttamente dal team di produzione, senza passare da una catena di distribuzione.</p>
            <p><b>Dal livello base alla piena automazione:</b> che si tratti di avviare per la prima volta la produzione di cartucce bobinate o di potenziare una linea esistente, <b>mmp</b> ha una configurazione di macchina adatta all’attuale esigenza produttiva e in grado di crescere con la tua attività.</p>

        </div>
</section>


<section class="Product-detail-faq">
    <div class="container">
        <h2 class="inner-head">FAQ: Macchine per la Produzione di Cartucce Filtranti Bobinate</h2>

        <div class="accordion accordion-flush" id="accordionFlushExample">

            <div class="accordion-item">
                <h3 class="accordion-header" id="flush-heading1">
                    <button class="accordion-button" type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#flush-collapse1"
                        aria-expanded="true"
                        aria-controls="flush-collapse1">
                        Quali materiali (filo/roving) può lavorare questa macchina: PP, cotone, fibra di vetro, nylon?
                    </button>
                </h3>
                <div id="flush-collapse1" class="accordion-collapse collapse show"
                    aria-labelledby="flush-heading1"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                         Entrambi i modelli <b>mmp</b> supportano di serie filo di polipropilene e di cotone. La compatibilità con fibra di vetro e nylon dipende dall’applicazione: contatta <b>mmp</b> per una conferma prima di definire la specifica.

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
                       Qual è la velocità di avvolgimento di una macchina per cartucce bobinate completamente automatica?
                    </button>
                </h3>
                <div id="flush-collapse2" class="accordion-collapse collapse"
                    aria-labelledby="flush-heading2"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                         La velocità di avvolgimento della Smartwind 360 è regolabile via software. La velocità esatta dipende dalla lunghezza della cartuccia, dal tipo di filo e dal grado di filtrazione. Contatta <b>mmp</b> con le tue specifiche per avere dati confermati.

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
                        Quante cartucce filtranti può produrre all’ora?

                    </button>
                </h3>
                <div id="flush-collapse3" class="accordion-collapse collapse"
                    aria-labelledby="flush-heading3"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                         La configurazione a 3 mandrini della Smartwind 360 produce tre cartucce da 20 pollici per ciclo. La produzione oraria varia in base alla lunghezza della cartuccia e ai parametri di avvolgimento. <b>mmp</b> può fornire stime in base alle tue esigenze specifiche.
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
                        Quali lunghezze di cartuccia può produrre la macchina?

                    </button>
                </h3>
                <div id="flush-collapse4" class="accordion-collapse collapse"
                    aria-labelledby="flush-heading4"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                          La macchina elettromeccanica gestisce lunghezze da 250 mm a 1016 mm. La Smartwind 360 supporta lunghezze da 10" a 40" in un’unica piattaforma, senza riconfigurazione.

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
                        Quale gamma di filtrazione può ottenere una macchina per cartucce bobinate (da 1 a 100 micron)?

                    </button>
                </h3>
                <div id="flush-collapse5" class="accordion-collapse collapse"
                    aria-labelledby="flush-heading5"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        Entrambe le macchine raggiungono da 1 a 100 µm. Sulla Smartwind 360 i valori in micron si impostano via software, senza regolazioni meccaniche tra una produzione e l’altra.

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
                        Quale alimentazione elettrica richiede la macchina?


                    </button>
                </h3>
                <div id="flush-collapse6" class="accordion-collapse collapse"
                    aria-labelledby="flush-heading6"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                         Entrambe le macchine funzionano con alimentazione monofase CA 220 V / 50 Hz, uno standard negli stabilimenti industriali europei e italiani.

                    </div>
                </div>
            </div>
            
            <div class="accordion-item">
                <h3 class="accordion-header" id="flush-heading7">
                    <button class="accordion-button collapsed" type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#flush-collapse7"
                        aria-expanded="false"
                        aria-controls="flush-collapse7">
                      Macchina manuale o completamente automatica: quale scegliere?



                    </button>
                </h3>
                <div id="flush-collapse7" class="accordion-collapse collapse"
                    aria-labelledby="flush-heading7"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                         La macchina elettromeccanica è adatta a produzioni di volume moderato che richiedono un avvolgimento affidabile e a bassa manutenzione. La Smartwind 360 è indicata per la produzione ad alto volume, dove la priorità sono la massima produttività e l’avvolgimento multistrato programmabile.


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

