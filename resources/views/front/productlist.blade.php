@include('layouts.frontheader')
<!-- banner -->
<style>
    .set-content p{
        color: #fff;
        margin-bottom: 30px;
    }
    
</style>

<section class="contact-banner position-relative">
    <img src="{{ asset('public/Category_Mobile_Images/'.$category->mobile_cat_image) }}" alt="{{ $category->category_name}}" class="img-fluid mobile-img " />
  <div class="container-fluid p-0">
    <!--<img src="{{ asset('public/front/images/water-filter-bg.jpg') }}" alt="" class="img-fluid" />-->
        <img src="{{ asset('public/Category_Banner_Images/'.$category->banner_image) }}" alt="{{ $category->category_name}}" class="img-fluid product-page-header" />

    <div class="contact-head product-contact-head">
        <!--<h1 style="margin-bottom: 10px;">{{ $category->category_name == 'Air Filters' ? 'Air Filter Cartridges' : $category->category_name }}</h1>-->
        <h1 style="margin-bottom: 10px;">
            @if($category->category_name == 'Filtranti Aria')
                Cartucce filtranti aria
            @elseif($category->category_name == 'Filtro Acqua')
                Cartucce Filtro Acqua
            @else
                {{ $category->category_name }}
            @endif
        </h1>
        <div class="set-content">
            @if($category->category_name == 'Filtranti Aria')
                <P><strong>mmp</strong> produce cartucce filtranti aria, garantendo qualità dell’aria superiore, prestazioni elevate e massima affidabilità per i sistemi di filtrazione industriale.</P>
            @elseif($category->category_name == 'Filtro Acqua')
               <P><strong>mmp</strong> è un produttore e fornitore affidabile di cartucce filtro acqua per tutti i sistemi standard. Dai filtri melt blown ai filtri avvolti, offriamo soluzioni efficaci per rimuovere contaminanti e particelle dall’acqua.</P>
            @elseif($category->category_name == 'Filato Filtrante')
               <P>Filato filtrante ingegnerizzato per la produzione di cartucce filtranti a filo avvolto, disponibile in polipropilene, PP antimicrobico, PP zero-foaming e cotone candeggiato, per esigenze di filtrazione industriali e commerciali.</P>
            @endif
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
<!-- banner end -->
<div class="modal fade" id="inquiryModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modulo di Richiesta Prodotto</h5>
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
                                   value="{{ $category->category_name }}" readonly />
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
                            <label for="">Telefono</label>
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

<!-- filter-content -->
<section class="filter-content">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
            @if($category->category_name == 'Filtranti Aria')
            <h2 class="inner-head"> Produttore di cartucce per filtri dell'aria per collettori di polvere</h2>
                <P class="category-content m-add">Le cartucce filtranti aria e i sacchi filtranti per collettori di polvere di <b>mmp</b> sono la scelta più affidabile perché offrono caratteristiche come un’efficiente separazione delle polveri nei sistemi di controllo dell’inquinamento atmosferico. Sono progettati con materiali di alta qualità che si adattano a specifiche applicazioni, come temperatura, tipologia di polveri e umidità. I nostri elementi filtranti e le cartucce filtranti aria pieghettate garantiscono una protezione senza eguali grazie a rivestimenti avanzati e resistenza alle alte temperature. Produciamo un’ampia gamma di cartucce filtranti aria per sistemi di raccolta polveri e controllo dell’inquinamento atmosferico, con impianti produttivi all’avanguardia.Con oltre tre decenni di esperienza, <b>mmp</b>  è un produttore pionieristico in India ed è uno dei marchi leader nell’introduzione di cartucce filtranti aria e sacchi filtranti per la filtrazione dell’aria, ampiamente utilizzati nei filtri a cartuccia per la raccolta delle polveri. Attualmente serviamo clienti in tutto il mondo, inclusi USA, UK, UAE e Australia. <b>mmp</b> offre una gamma diversificata che comprende cartucce filtranti aria pieghettate, sacchi filtranti pieghettati, sacchi filtranti per collettori di polvere e gabbie per filtri a cartuccia, tutti progettati per soddisfare le diverse esigenze dei vostri sistemi di filtrazione dell’aria con la massima efficienza. Come produttore affidabile di cartucce filtranti aria, <b>mmp</b> garantisce qualità superiore e prestazioni eccellenti per apparecchiature di controllo dell’inquinamento atmosferico e depuratori d’aria industriali. </P>
            @elseif($category->category_name == 'Filtro Acqua')
                <!--<P class="category-content m-add">mmp delivers a range of expert-approved, industry-leading water filter cartridges, designed to enable you with superior water clarity, taste, and protection.</P>-->
                <h2 class="inner-head"> Produttore di Cartucce Filtro Acqua</h2>
           <p class="category-content m-add"><b>mmp</b> produce una gamma completa di cartucce filtro acqua per diversi sistemi di filtrazione. Offriamo un’ampia scelta di cartucce filtranti acqua che possono essere utilizzate sia in sistemi di filtrazione domestici che industriali per migliorare la qualità dell’acqua. Le nostre cartucce filtranti sono realizzate in polipropilene di alta qualità, garantendo resistenza e adattabilità in molteplici applicazioni.Inoltre, forniamo cartucce per filtri acqua personalizzate in base alle esigenze dei clienti per i mercati internazionali, inclusi USA, Regno Unito, Emirati Arabi Uniti, Australia e altri paesi.Nella sezione seguente presenteremo le nostre diverse soluzioni di filtrazione dell’acqua.</p>
            @elseif($category->category_name == 'Filato Filtrante')
                <!--<P class="category-content m-add">mmp delivers a range of expert-approved, industry-leading water filter cartridges, designed to enable you with superior water clarity, taste, and protection.</P>-->
                <h2 class="inner-head"> Produttore e Fornitore di Filato in Polipropilene</h2>
           <p class="category-content"><b>mmp</b> è un produttore specializzato di filato filtrante e fornitore di filato in PP. Produce filato di grado filtrante direttamente nel proprio stabilimento di Ahmedabad con la tecnologia di filatura DREF. Ogni variante della gamma <b>mmp</b> è realizzata internamente con materie prime 100% vergini e fornita a produttori di cartucce filtranti e acquirenti industriali in Italia e nel mondo. Sono disponibili sia specifiche standard sia configurazioni personalizzate.</p>
           <!--<div class="theme-btn justify-content-start m-add">-->
           <!--           <a href="https://mmpfilter.com/water-filtration-product-brochure.pdf" target="_blank" class="btn-add"><span><i class="fa-solid fa-arrow-down"></i></span>-->
           <!--             <p>Download Brochure</p>-->
           <!--           </a>-->
           
           
           
           <!--         </div>-->
           
            @endif
        </div>
    </div>
    <div class="row">
        @foreach($data['product'] as $product)
        <?php if($product->product_image){
            if( strpos($product->product_image, ',') !== false ){
                $image = explode(',',$product->product_image);
            }else{
                $image[0] = $product->product_image;
            }
        }?>
        <div class="col-md-4">
           <div>
                <a href="{{ route('productdetail', ['url' => $product->producturl]) }}">
                <img src="{{ asset('public/Product_Images/' .$image[0]) }}" alt="{{ $product->product_name }}" class="img-fluid">
                <h3>{{ $product->product_name }}</h3>
                </a>
                <p style="height:auto">{{ $product->product_shortdescription }}</p>
                   <div class="ym_add">
                    <div class="theme-btn justify-content-start">
                       <a href="{{ route('productdetail', ['url' => $product->producturl]) }}" class="nav-link btn-add"><span><i class="fa fa-angle-right" aria-hidden="true"></i></span><p>View More
                       </p></a>
                    </div>
                  </div>
            <!--<div class="theme-btn prd_btn">-->
            <!--  <a href="#" class="btn-add" target="_blank"><span><i class="fa fa-angle-right" aria-hidden="true"></i></span>-->
            <!--    <p>Read More</p>-->
            <!--  </a>-->
            <!--</div>-->
           </div>
        </div>
        @endforeach
    </div>
  </div>
</section>
<!-- filter-content end -->

@if($category->category_name == 'Filtro Acqua')
<section class="additional-content">
    <div class="container">
    <div class="row">
       
        <div class="col-xl-12">
            <div class="products-feature-tabs">
            <ul class="nav nav-tabs details-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true"><h3>Descrizione Prodotto</h3></button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false"><h3>Caratteristiche </h3></button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false"><h3>Applicazioni</h3></button>
                </li>
            </ul>
            <div class="tab-content details-tabs-content" id="myTabContent">
                <div class="tab-pane details-content-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                   <p>Le cartucce filtranti per acqua fornite da <b>mmp</b> sono efficaci nel rimuovere sporco e sedimenti e nel fornire acqua pulita e sicura. Queste cartucce filtranti per acqua vengono inserite nell’alloggiamento e intrappolano i contaminanti grazie alla loro ampia superficie. Sono anche facili da installare e sostituire e, se cambiate regolarmente, migliorano l’efficienza della macchina.</p>

<h5>Componenti principali delle cartucce filtranti:</h5>

<p>Il componente principale delle cartucce filtranti per acqua rimuove i contaminanti. Questo materiale filtrante è composto da polipropilene, poliestere e cotone.</p>

<p>Altri componenti sono i cappucci terminali (End Caps), che tengono in posizione il materiale filtrante e forniscono una tenuta tra la cartuccia e l’alloggiamento del filtro.</p>

<p>Il nucleo (Core) è un componente strutturale importante del filtro a cartuccia e svolge due funzioni: supporta il materiale filtrante e lo protegge dal rischio di schiacciamento o danneggiamento durante condizioni di alta pressione. I filtri rimangono robusti anche quando sono sottoposti a pressioni elevate.</p>

<p>Le guarnizioni/anelli di tenuta (Gaskets/O-rings) creano una barriera tra il filtro a cartuccia e l’alloggiamento che impedisce al fluido di bypassare il filtro. Questa barriera previene anche eventuali perdite e garantisce che tutto il fluido in ingresso venga indirizzato attraverso il materiale filtrante, affinché le cartucce filtranti funzionino alla massima efficienza.</p>

                </div>
                <div class="tab-pane details-content-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                     <p>Volete il meglio per le vostre esigenze di filtrazione dell’acqua! Ed è esattamente ciò che l’ampia selezione di cartucce filtranti per acqua di ricambio di alta qualità di mmp vi offrirà: il funzionamento continuo e senza problemi dei vostri sistemi. Ognuna delle nostre soluzioni è stata sviluppata specificamente per i nostri clienti negli USA, nel Regno Unito, negli Emirati Arabi Uniti e in Australia, nei settori Residenziale, Commerciale e Industriale. Con anni di esperienza come produttori e fornitori di cartucce filtranti per acqua in India, possiamo offrire numerose dimensioni, classificazioni in micron e materiali diversi per soddisfare le esigenze del vostro sistema. Le cartucce filtranti <b>mmp</b> garantiscono un’elevata efficienza di filtrazione rimuovendo sedimenti, sostanze chimiche e microrganismi dalla vostra fornitura d’acqua, rendendola pulita e sicura per voi.</p>

                        <p>Realizziamo le nostre cartucce filtranti industriali per acqua con materiali resistenti compatibili con una varietà di sostanze chimiche; pertanto, funzionano egualmente bene in tutti i tipi di applicazioni di filtrazione, industriali o domestiche. Questi filtri sono progettati specificamente per durare a lungo e rappresentano un metodo economico per fornire acqua pulita e affidabile ai vostri sistemi di filtrazione.</p>
                </div>
                <div class="tab-pane details-content-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                    <table>
                        <tr>
                            <th>Applicazioni</th>
                            <th>Descrizione</th>
                        </tr>
                        <tr>
                            <td>Acqua Potabile</td>
                            <td>Garantisce acqua sicura e pulita rimuovendo particelle dannose, batteri e sostanze chimiche, migliorando gusto e qualità.</td>
                        </tr>
                        <tr>
                            <td>Prodotti Lattiero-Caseari</td>
                            <td>Mantiene la purezza dell’acqua durante la lavorazione dei latticini, assicurando igiene e prevenendo la contaminazione dei prodotti.</td>
                        </tr>
                        <tr>
                            <td>Alimentare e Bevande</td>
                            <td>Fornisce acqua pulita e filtrata per la produzione alimentare e delle bevande, garantendo conformità agli standard di sicurezza e migliorando la qualità del prodotto.</td>
                        </tr>
                        <tr>
                            <td>Trattamento Acque Industriali</td>
                            <td>Rimuove sedimenti, sostanze chimiche e impurità dall’acqua utilizzata nei processi industriali, migliorando l’efficienza dei sistemi e prolungando la vita delle attrezzature.</td>
                        </tr>
                        <tr>
                            <td>Farmaceutico</td>
                            <td>Fornisce acqua ultrapura per garantire la conformità a rigorosi standard di qualità.</td>
                        </tr>
                        <tr>
                            <td>Chimico e Petrolchimico</td>
                            <td>Filtra acqua/liquidi utilizzati nei processi chimici, proteggendo le apparecchiature e garantendo una produzione sicura ed efficiente nelle industrie chimiche e petrolchimiche.</td>
                        </tr>

                    </table>
                </div>
            </div>
        </div>
        </div>
        <div class="col-xl-12">
            <div class="Product-detail-faq">
          <h4 class="inner-head"> Domande Frequenti sulle Cartucce Filtro Acqua </h4>
             <div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <p class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          A cosa serve il filato in polipropilene?
      </button>
    </p>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p><strong>Il filato in polipropilene (PP Yarn)</strong> è comunemente utilizzato nella produzione di materiali filtranti, in particolare nelle cartucce filtranti avvolte, grazie alla sua resistenza chimica, resistenza alla trazione ed economicità.</p>
      </div>
    </div>
  </div>

  <div class="accordion-item">
    <p class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Che cos’è il filato Zero Foaming?
      </button>
    </p>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p><strong>Il filato Zero Foaming PP</strong> è progettato appositamente per ridurre l’intrappolamento d’aria e la formazione di bolle nei filtri, rendendolo ideale per la filtrazione di liquidi ad alta chiarezza.</p>
      </div>
    </div>
  </div>

  <div class="accordion-item">
    <p class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
         <p>La filatura Dref è migliore per il filato di filtrazione?</p>
      </button>
    </p>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p>Sì. <strong>Il filato Dref Spinning</strong> garantisce bassa dispersione di fibre, elevato volume e densità uniforme, rendendolo superiore per la produzione di cartucce filtranti.</p>
      </div>
    </div>
  </div>

  <div class="accordion-item">
    <p class="accordion-header" id="headingFour">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
         <p>Fornite ordini in grandi quantità ai produttori?</p>
      </button>
    </p>
    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
      <div class="accordion-body">
          <p>Assolutamente sì. Come principale <strong>produttore e fornitore di filato PP</strong>, gestiamo ordini all’ingrosso a livello globale con fornitura costante e specifiche personalizzabili.</p>
      </div>
    </div>
  </div>

  <div class="accordion-item">
    <p class="accordion-header" id="headingFive">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
         <p>I vostri filati sono idonei all’uso alimentare?</p>
      </button>
    </p>
    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p>Sì. Offriamo <strong>filati in polipropilene alimentare e antimicrobici</strong>, adatti ad applicazioni sensibili come alimenti, bevande e prodotti farmaceutici.</p>
      </div>
    </div>
  </div>

  <div class="accordion-item">
    <p class="accordion-header" id="headingSix">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
         <p>Chi è il miglior produttore di filati in polipropilene?</p>
      </button>
    </p>
    <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p>Quando si sceglie un produttore di filati in polipropilene, è importante considerare esperienza comprovata, qualità costante e capacità di fornitura globale. mmp è un fornitore affidabile di filati PP per applicazioni di filtrazione e industriali in tutto il mondo.</p>
      </div>
    </div>
  </div>

  <div class="accordion-item">
    <p class="accordion-header" id="headingSeven">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
         <p>Quali tipi di filato in polipropilene sono disponibili?</p>
      </button>
    </p>
    <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p>Presso <strong>mmp</strong>, i filati in polipropilene sono disponibili in vari tipi, inclusi filati filtranti in polipropilene antimicrobico, filato di cotone sbiancato assorbente, filato Zero Foaming in PP e altri.</p>
      </div>
    </div>
  </div>

  <div class="accordion-item">
    <p class="accordion-header" id="headingEight">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
         <p>Come scegliere il giusto fornitore di filato in polipropilene?</p>
      </button>
    </p>
    <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p>Scegli un fornitore di filato in polipropilene (PPY) che offra supporto tecnico, opzioni di personalizzazione e certificazioni. Per qualità costante e consegna puntuale, contatta mmp oggi stesso.</p>
      </div>
    </div>
  </div>

  <div class="accordion-item">
    <p class="accordion-header" id="headingNine">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
         <p>mmp fornisce filati in polipropilene in tutto il mondo?</p>
      </button>
    </p>
    <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p>Sì, <strong>mmp</strong> fornisce filati in polipropilene di alta qualità in tutto il mondo, servendo industrie come filtrazione, geotessili e tessili. Come importante fornitore di filati per filtrazione, <strong>mmp</strong> garantisce prestazioni affidabili e consegna globale.</p>
      </div>
    </div>
  </div>

  <div class="accordion-item">
    <p class="accordion-header" id="headingTen">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
         <p>Esistono opzioni personalizzate di filato in polipropilene?</p>
      </button>
    </p>
    <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p>Sì, molti produttori e fornitori di filati in polipropilene offrono opzioni personalizzate. <strong>mmp</strong> fornisce personalizzazione in diametro, numero di filamenti e tipo di materiale per applicazioni specifiche, con consegna in tutto il mondo.</p>
      </div>
    </div>
  </div>

</div>

            </div>
        </div>
    </div>
    </div>
</section>
@endif
@if($category->category_name == 'Filtranti Aria')
<section class="additional-content">
    <div class="container">
    <div class="row">
       
        <div class="col-xl-12">
            <div class="products-feature-tabs">
            <ul class="nav nav-tabs details-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true"><h3>Descrizione Prodotto</h3></button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false"><h3>Caratteristiche</h3></button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false"><h3>Applicazioni</h3></button>
                </li>
            </ul>
            <div class="tab-content details-tabs-content" id="myTabContent">
                <div class="tab-pane details-content-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                   <p> Le cartucce filtranti aria, chiamate anche filtri per polveri o cartucce filtranti industriali, sono componenti cilindrici progettati per rimuovere polvere, sostanze chimiche, contaminanti e altre particelle indesiderate dall’aria. I filtri aria sono progettati per rispettare e superare le specifiche OEM, sia in fase di costruzione che di funzionamento. Sono robusti, affidabili e in grado di resistere anche agli ambienti più difficili. Abbiamo sviluppato cartucce filtranti aria in grado di catturare un’ampia gamma di contaminanti presenti nell’aria, dalle particelle di polvere microscopiche agli allergeni più potenti, garantendo con successo una migliore qualità dell’aria per abitazioni, ambienti commerciali e spazi industriali. Che tu abbia bisogno di cartucce filtranti aria antipolvere, cartucce filtranti aria pieghettate o soluzioni per sistemi di controllo dell’inquinamento atmosferico, disponiamo dei prodotti giusti per ogni tua esigenza. Se hai bisogno di assistenza o desideri ulteriori informazioni sui nostri elementi filtranti aria o prodotti di filtrazione aria, i nostri esperti sono sempre pronti ad aiutarti.</p>
                  
                </div>
                <div class="tab-pane details-content-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <p><strong>Filtrazione ad Alta Efficienza: </strong> Cattura polveri fini e contaminanti presenti nell’aria con una minima perdita di carico.</p>
                    <p><strong>Struttura Pieghettata: </strong> Massimizza la superficie per una raccolta superiore delle polveri.</p>
                    <p><strong>Costruzione Robusta:</strong> Progettata per una lunga durata e resistenza a condizioni estreme.</p>
                    <p><strong>Facile Installazione e Manutenzione: </strong> Compatibile con la maggior parte delle gabbie per filtri a maniche nei sistemi di raccolta polveri per sostituzioni rapide.</p>
                    <p><strong>Compatibilità Versatile: </strong>Adatta a diversi sistemi di controllo dell’inquinamento atmosferico e applicazioni di depuratori d’aria industriali.</p>
                </div>
                <div class="tab-pane details-content-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                 <p> Le nostre cartucce filtranti pieghettate e le sacche filtranti per depolveratori sono ampiamente utilizzate in settori come:</p>
                  <p> <strong>Cemento e Costruzioni: </strong> Cattura efficiente delle polveri negli impianti di cemento e nei cantieri edili. </p>
                  <p> <strong>Lavorazione dei Metalli e Saldatura: </strong> Garantisce aria pulita nei processi di fabbricazione metallica e saldatura.</p>
                    <p> <strong>Farmaceutico e Alimentare:</strong>Aiuta a mantenere standard igienici rimuovendo i contaminanti presenti nell’aria.</p>
                    <p> <strong>Centrali Elettriche e Settore Energetico: </strong>Protegge le attrezzature e migliora l’efficienza operativa.</p>
                    
                    <p> <strong>Automotive e Manifatturiero: </strong>Essenziale per ambienti di produzione puliti.</p>
                </div>
            </div>
        </div>
        </div>
        <div class="col-xl-12">
            <div class="Product-detail-faq">
          <h4 class="inner-head"> Domande frequenti sulle cartucce del filtro dell'aria </h4>
             <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                  <p class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                       Che cosa sono le cartucce per la filtrazione dell’aria?
                    </button>
                </p>
                  <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <p> Le cartucce per la filtrazione dell’aria sono filtri cilindrici che rimuovono contaminanti, polvere e altre particelle dall’aria. Sono conosciute anche come filtri a cartuccia per depolveratori o cartucce filtranti industriali.</p>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <p class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        In quali settori vengono utilizzate le cartucce e le sacche filtranti per l’aria?
                    </button>
                </p>
                  <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                     <p>Le cartucce e le sacche filtranti per l’aria sono utilizzate in numerosi settori, tra cui cemento, manifatturiero, alimentare, farmaceutico e produzione di energia, ecc.</p>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <p class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                       <p>Come scelgo la cartuccia filtrante per l’aria giusta?</p>
                    </button>
                </p>
                  <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <p>Per scegliere la cartuccia filtrante adatta, occorre considerare fattori come l’applicazione, le condizioni operative, il tipo di polvere, la temperatura e la compatibilità con il proprio sistema di filtrazione dell’aria.</p>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <p class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        <p>Quali materiali vengono utilizzati nelle cartucce filtranti per l’aria?</p>
                    </button>
                </p>
                  <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p><b>mmp</b> Filters utilizza materiali di alta qualità come poliestere spun-bonded, cellulosa, membrane nanofibra e nuclei in acciaio inox nelle sue cartucce filtranti per l’aria, garantendo durata, cattura efficiente delle polveri e prestazioni in diverse condizioni operative.</p>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <p class="accordion-header" id="headingFive">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                       <p> In che modo le cartucce e le sacche filtranti migliorano la qualità dell’aria?</p>
                    </button>
                </p>
                  <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <p> Le cartucce e le sacche filtranti migliorano la qualità dell’aria intrappolando fisicamente particelle sospese come polvere, polline, peli di animali e altri contaminanti durante il passaggio dell’aria.</p>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <p class="accordion-header" id="headingSix">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                      <p>Quanto durano le cartucce filtranti per l’aria?</p>
                    </button>
                </p>
                  <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <p> Normalmente la durata varia da 30 giorni a 6 mesi, ma molti fattori incidono sulla vita utile delle cartucce, come il tipo di filtro, la qualità e fattori ambientali come il livello di polveri.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>
    </div>
</section>
@endif

@if($category->category_name == 'Filato Filtrante')
<section class="additional-content">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="products-feature-tabs">
                    <ul class="nav nav-tabs details-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true"><h3>Descrizione Prodotto</h3></button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false"><h3>Caratteristiche</h3></button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false"><h3>Applicazioni</h3></button>
                        </li>
                    </ul>
                    <div class="tab-content details-tabs-content" id="myTabContent">
                        <div class="tab-pane details-content-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <p>La gamma di filati filtranti <b>mmp</b> è prodotta con la filatura DREF, un processo che garantisce l’uniformità delle fibre, il basso ritiro e il volume elevato richiesti dalla produzione di cartucce filtranti. A differenza dei filati a filatura ad anello, il filato DREF ha una struttura fibrosa più aperta e regolare, che si avvolge in modo uniforme sull’anima della cartuccia. Si ottengono così una densità degli strati prevedibile e prestazioni di filtrazione ripetibili nell’elemento filtrante finito.</p>
                            <p>La gamma comprende quattro tipi di filato, ciascuno sviluppato per una specifica esigenza di filtrazione. Il filato in polipropilene standard copre la maggior parte delle applicazioni industriali di filtrazione di acqua e prodotti chimici. Il filato in PP antimicrobico integra additivi approvati FDA a livello della fibra, per le applicazioni in cui è richiesto il controllo batterico all’interno del media filtrante. Il filato in PP Zero Foaming elimina l’aria intrappolata e la formazione di schiuma durante la lavorazione dei liquidi. Il filato in cotone candeggiato assorbente è impiegato nelle applicazioni alimentari e in quelle a fibra naturale, dove non sono previsti materiali sintetici.</p>
                            <p>Tutte le varianti sono prodotte senza leganti, adesivi o prodotti chimici di processo. Il filato finito è chimicamente inerte fin dalla produzione e non richiede alcun pretrattamento prima dell’uso nell’avvolgimento delle cartucce.</p>

                        </div>
                        <div class="tab-pane details-content-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <p><b>Tecnologia di filatura DREF: </b>ogni filato filtrante prodotto da <b>mmp</b> è filato con il processo DREF, che garantisce una distribuzione uniforme delle fibre, bassa lanugine e proprietà di resistenza a trazione costanti in ogni lotto di produzione.</p>
                            
                            <p><b>Materie prime 100% vergini:</b> nessun polipropilene riciclato né cariche. Il filato in polipropilene <b>mmp</b> è prodotto interamente con PP vergine, per garantire purezza chimica e prestazioni prevedibili nelle applicazioni di filtrazione più sensibili.</p>
                            
                            <p><b>Quattro varianti per esigenze diverse:</b> PP standard, PP antimicrobico, PP zero foaming e filato di cotone candeggiato per cartucce bobinate coprono l’intera gamma di esigenze di filtrazione industriali, alimentari, farmaceutiche e speciali, da un unico fornitore.</p>
                            
                            <p><b>Inerzia chimica:</b> il polipropilene resiste alla maggior parte di acidi, alcali e solventi industriali comuni. Il filato <b>mmp</b> mantiene le proprie proprietà strutturali e chimiche nelle condizioni operative tipiche delle cartucce a filo avvolto standard.</p>
                            
                            <p><b>Specifiche personalizzabili:</b> denier, torsione, titolo del filato e formato di confezionamento possono essere adattati alle specifiche esigenze di avvolgimento della cartuccia. <b>mmp</b> collabora direttamente con i produttori di cartucce per allineare le specifiche del filato ai loro parametri di produzione.</p>
                            
                            <p><b>Costanza da lotto a lotto:</b> nei rapporti con un fornitore di filato filtrante che sostengono una produzione continua, la costanza tra un ordine e l’altro conta quanto la qualità iniziale. Il processo DREF controllato e l’approvvigionamento di materie prime vergini di <b>mmp</b> garantiscono la stessa specifica del filato in ogni lotto.</p>
                        </div>
                        <div class="tab-pane details-content-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                            <p>Il filato filtrante <b>mmp</b> è utilizzato ovunque si producano o si impieghino cartucce a filo avvolto:</p>
                            <ul style="list-style: disc; padding-left:23px">
                                <li><b>Produzione di cartucce filtranti a filo avvolto:</b> l’applicazione principale. Il filato <b>mmp</b> è usato dai produttori di cartucce per avvolgere cartucce standard e speciali con gradi di filtrazione da 0,5 a 100 µm.</li>
                                <li><b>Trattamento delle acque:</b> le cartucce avvolte con filato <b>mmp</b> sono impiegate nella prefiltrazione a monte di membrane RO, sistemi UF e unità a scambio ionico negli impianti idrici municipali e industriali.</li>
                                <li><b>Produzione farmaceutica:</b> sistemi di acqua purificata, pretrattamento WFI (acqua per preparazioni iniettabili) e filtrazione di liquidi di processo con filato privo di additivi e completamente documentato.</li>
                                <li><b>Alimentare e bevande:</b> filtrazione di acqua per ingredienti e di liquidi di processo con varianti di filato in PP o cotone idonee al contatto alimentare, conformi ai requisiti di igiene e purezza.</li>
                                <li><b>Industria chimica:</b> filtrazione di fluidi di processo con filato in polipropilene resistente agli agenti chimici, in ambienti con acidi diluiti, alcali e solventi.</li>
                                <li><b>Petrolio e gas:</b> prefiltrazione di acqua di processo e di servizio negli impianti upstream e downstream.</li>
                                <li><b>Tessile e tintoria:</b> filtrazione dell’acqua di processo negli ambienti produttivi in cui la qualità dell’acqua incide direttamente su quella del prodotto.</li>
                                <li><b>Industria lattiero-casearia:</b> filtrazione di liquidi in ambienti produttivi igienici, con varianti di filato compatibili NSF.</li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            
            <h2 class="inner-head"> Perché Scegliere mmp Filtration per il Filato Filtrante in Italia?</h2>
           <p>I produttori italiani di cartucce filtranti e gli acquirenti industriali che lavorano con <b>mmp</b> si riforniscono direttamente dal produttore, senza passare da un distributore o da fornitori di filato in PP che non sono in grado di fornire documentazione di produzione. Ogni bobina di filato in PP che esce dallo stabilimento <b>mmp</b> è riconducibile al proprio lotto di produzione, con certificazioni dei materiali e dati di prova disponibili su richiesta.</p>
           <p>In quanto produttore di filato in polipropilene con capacità interna dedicata di filatura DREF, <b>mmp</b> controlla l’intero processo produttivo, dalla materia prima al filato finito. Ciò significa che le specifiche personalizzate sono realmente realizzabili, non semplicemente elencate come opzione e poi affidate a terzi. Le modifiche al denier, i livelli di additivo antimicrobico e la formulazione zero foaming sono tutti gestiti all’interno dei propri parametri produttivi.</p>
           <p class="mb-5"><b>mmp</b> fornisce filato filtrante in Italia, Stati Uniti, Regno Unito, Emirati Arabi Uniti, Australia e in altri mercati nel mondo. Gli ordini in grandi quantità sono evasi dalla capacità produttiva, con tempi di consegna confermati al momento dell’ordine. Sono disponibili campioni prima dell’impegno su grandi quantità.</p>
            <div class="col-xl-12">
                <div class="Product-detail-faq">
                    <h2 class="inner-head">Domande frequenti Filato Filtrante</h2>
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <p class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    AA cosa serve il filato filtrante?
                                </button>
                            </p>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Il filato filtrante è la materia prima utilizzata per produrre le cartucce a filo avvolto. Viene avvolto attorno a un’anima centrale secondo un disegno controllato, per creare una struttura di filtrazione in profondità che trattiene le particelle dei liquidi in un determinato intervallo di grado di filtrazione. È impiegato nel trattamento acque e nelle applicazioni di filtrazione farmaceutiche, alimentari, chimiche e industriali.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <p class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Il filato in PP può essere personalizzato in base alle esigenze di filtrazione?
                                </button>
                            </p>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p> Sì. <b>mmp</b> adatta denier, torsione, titolo e composizione delle fibre alle specifiche esigenze di avvolgimento della cartuccia. Sono disponibili anche livelli personalizzati di additivo antimicrobico, formulazioni zero foaming e formati di confezionamento. Invia le specifiche della tua cartuccia e il team <b>mmp</b> confermerà che cosa è realizzabile.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <p class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Il filato in polipropilene è sicuro per la filtrazione dell’acqua e per le applicazioni alimentari?
                                </button>
                            </p>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p> Sì. Il filato in polipropilene <b>mmp</b> è prodotto con PP 100% vergine, senza leganti, adesivi né prodotti chimici di processo. Per le applicazioni regolamentate sono disponibili varianti idonee al contatto alimentare e antimicrobiche. Per la filtrazione di acqua potabile e il contatto con alimenti sono disponibili opzioni di filato compatibili NSF.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <p class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Qual è il tempo di consegna tipico per un ordine di filato filtrante in grandi quantità?
                                </button>
                            </p>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p> Il tempo di consegna dipende dalla variante del filato e dal volume dell’ordine. Le configurazioni standard di filato PP sono in genere disponibili entro 2-4 settimane. Le specifiche personalizzate possono richiedere tempi di produzione aggiuntivi. Contatta <b>mmp</b> indicando i dettagli dell’ordine per ricevere un tempo di consegna confermato.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <p class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    Offrite campioni prima di un ordine in grandi quantità di filato PP o filato filtrante?
                                </button>
                            </p>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Sì. <b>mmp</b> fornisce campioni di filato filtrante per la valutazione prima dell’impegno su un ordine in grandi quantità. Questo permette ad acquirenti e produttori di cartucce di verificare le prestazioni del filato nel proprio processo di avvolgimento prima di effettuare un ordine di produzione.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endif
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
    let phone = $('#phone').val().trim();
    if (phone.length < 10) {
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
    let recaptchaResponse = grecaptcha.getResponse();
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

// Pulizia messaggi di errore
$('input, textarea').on('input', function() {
    $(this).siblings('.error-message').text('');
});

// Validazione email
function validateEmail(email) {
    const emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    const spamPatterns = [
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

// Controllo contenuti spam
function containsSpamContent(input) {
    let cleaned = input.trim().toLowerCase();
    if (/^[\s\*\#@!$%^&()_+\-=\[\]{};':"\\|,.<>\/?`~]+$/.test(cleaned)) return true;
    if (/([#@!$%^&*()_+={}\[\]|\\:;"'<>,.?/~`-])\1{1,}/.test(cleaned)) return true;
    if (/^(https?:\/\/|www\.|<a\s+href=)/i.test(cleaned) && cleaned.length < 40) return true;

    const spamPatterns = [/<a\s+href=/i, /snag\s+your\s+free/i, /hs=[a-z0-9]{20,}/i, /xxx/i, /^\*{3,}$/];
    return spamPatterns.some(pattern => pattern.test(cleaned));
}

</script>
