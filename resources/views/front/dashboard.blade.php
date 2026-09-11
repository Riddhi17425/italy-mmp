@include('layouts.frontheader')

<!-- banner -->
<section class="banner">
  <div class="container-fulid">
    <div class="banner-slider">
         <div class="position-relative overflow-hidden">
             <video width="100%" loop autoplay muted playsinline class="d-none d-md-block heroVideo">
                <source src="{{ asset('public/front/images/logo_animations_1.mp4') }}" type="video/mp4">
             </video>
             <video width="100%" loop autoplay muted playsinline class="d-block d-md-none heroVideo">
                <source src="{{ asset('public/front/images/logo_animations_M.mp4') }}" type="video/mp4">
             </video>
          </div>
        <div class="position-relative">
             <img
          src="{{ asset('public/front/images/Dref_Polypropylene_Yarns_m.jpg') }}"
          class="img-fluid banner-mobile-img"
          alt="banner-bg-img"
        />
        <img
          src="{{ asset('public/front/images/Dref_Polypropylene_Yarns.jpg') }}"
          class="banner-bg-img img-fluid"
          alt="banner-bg-img"
        />
        <div class="position-absolute banner-content">
          <div class="row align-items-center">
            <div class="col-md-9 offset-md-1">
              <div>
                <h1 class="banner-head text-start">Filo di PP</h1>
                <p class="text-start">
                  <b>Filato vergine al </b><b>100% </b>di qualità <b>premium </b> per <br/> <b>cartucce filtranti—</b> resistente, durevole ed efficiente contro gli agenti chimici.
                </p>

                <div class="d-flex">
                  <a
                    href="{{ url('dettaglio-prodotto/filati-polipropilene') }}"
                    class="pro-btn"
                    target="_blank"
                    >Visualizza prodotto</a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


      <div class="position-relative">
            <img
          src="{{ asset('public/front/images/Water_Filters_m.jpg') }}"
          class="img-fluid banner-mobile-img"
          alt="banner-bg-img"
        />
        <img
          src="{{ asset('public/front/images/Water Filter Cartridges (1).jpg') }}"
          class="banner-bg-img img-fluid"
          alt="banner-bg-img"
        />
        <div class="position-absolute banner-content">
          <div class="row align-items-center">
            <div class="col-md-9  offset-md-1">
              <div>
                <h2 class="banner-head text-start">Filtri per Liquidi / Filtri acqua </h2>
                <p class="text-start">Filtrazione avanzata <b>dei liquidi</b> per <b>applicazioni <br/> industriali, commerciali,</b> e <b> domestiche.</b> applications.

                </p>
                <div class="d-flex">
                  <a
                    href="{{ url('prodotto/cartucce-filtranti-acqua') }}"
                    class="pro-btn"
                    target="_blank"
                    >Visualizza prodotto</a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

     
      <div class="position-relative">
            <img
          src="{{ asset('public/front/images/air-filters_m.jpg') }}"
          class="img-fluid banner-mobile-img"
          alt="banner-bg-img"
        />
        <img
          src="{{ asset('public/front/images/air-filters.jpg') }}"
          class="banner-bg-img"
          alt="banner-bg-img"
        />
        <div class="position-absolute banner-content">
          <div class="row align-items-center">
            <div class="col-md-9  offset-md-1">
              <div>
                <h2 class="banner-head text-start">Filtri aria</h2>
                <p class="text-start"> Sistema di filtri <b>ad alte prestazioni</b> per <b>la sicurezza industriale</b> <b> e un’atmosfera pulita.</b> 
              
                </p>
                <div class="d-flex">
                  <a
                    href="{{ url('prodotto/cartucce-filtranti-aria') }}"
                    class="pro-btn"
                    target="_blank"
                    >Visualizza prodotto</a
                  >
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>
      <div class="position-relative">
            <img
          src="{{ asset('public/front/images/Wound_Filter_Machine_m.jpg') }}"
          class="img-fluid banner-mobile-img"
          alt="banner-bg-img"
        />
        <img
          src="{{ asset('public/front/images/Wound_Filter_Machine.jpg') }}"
          class="banner-bg-img"
          alt="banner-bg-img"
        />
        <div class="position-absolute banner-content">
          <div class="row align-items-center">
            <div class="col-md-9  offset-md-1">
              <div>
                <h2 class="banner-head text-start">Macchina per <br/> filtri avvolti</h2>
                <p class="text-start">Semplifica la produzione con <b>Avvolgimento <br/> Personalizzato, Facile Utilizzo </b> ed <b>Elevata Efficienza di Filtrazione.</b> </p>
                <div class="d-flex">
                  <a
                    href="{{ url('macchina-cartucce-filtranti-avvolte') }}"
                    class="pro-btn"
                    target="_blank"
                    >Visualizza prodotto</a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- banner end -->

<!-- expertise -->
<section class="expertise py-5">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h3 class="title-bold">Soluzioni di Filtrazione di Qualità </h3>
        <h2>
         Oltre 2 decenni di esperienza nella filtrazione industriale 
        </h2>
      </div>
    </div>
    <div class="row align-items-center">
      <div class="col-md-2">
        <div
          class="d-flex flex-column justify-content-center align-items-center"
        >
          <div
            class="expertise-icon d-flex flex-column justify-content-center align-items-center img-fluid"
          >
            <div class="img-border">
              <img
                src="{{ asset('public/front/images/filtra-icon-1.svg') }}"
                alt="Produttore leader"/>
            </div>
            <div class="lead-text">
               <p>Produttore leader</p>
            </div>
          </div>
          <div
            class="expertise-icon d-flex flex-column justify-content-center align-items-center img-fluid"
          >
            <div class="img-border">
              <img
                src="{{ asset('public/front/images/filtra-icon-2.svg') }}"
                alt="Soluzioni Per La Filtrazione Di Aria e Acqua"
              />
            </div>
            <div class="air-text">
              <p>Soluzioni Per La Filtrazione Di Aria e Acqua</p>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-5">
       

        <div class="video-inner position-relative">
          <img
            src="{{ asset('public/front/images/quality-filtration-solutions.jpg') }}"
            alt="Quality Filtration Solutions"
            class="img-fluid w-100"
          />

          <div class="wrapper">
            <div class="video-main">
              <div class="promo-video">
                <div class="waves-block">
                  <div class="waves wave-1"></div>
                  <div class="waves wave-2"></div>
                  <div class="waves wave-3"></div>
                </div>
              </div>

              <a
                data-fancybox="video-gallery"
                href="{{ asset('public/front/images/MMP-Video-0607.mp4') }}"
                class="video"
                id="openModal"
                ><i class="fa fa-play"></i
              ></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-5">
        <div class="d-flex flex-column align-items-start mt-3">
          <img
            src="{{ asset('public/front/images/filtra-icon-3.svg') }}"
            alt="Filtrazione Aria e Acqua"
            class="mb-3"
          />
          <b class="mb-3"
            >Produciamo un’ampia gamma di prodotti di filtrazione per aria e acqua, progettati con precisione e in grado di garantire prestazioni eccezionali anche in ambienti difficili. </b>
          <p class="mb-3">
            <strong>mmp</strong> Filtration aveva già intuito il futuro della filtrazione di aria e acqua nel 1994, durante le prime fasi dello sviluppo industriale. Riconoscendo allora il potenziale di crescita, abbiamo iniziato l’attività nel commercio di apparecchiature per la filtrazione di acqua e aria attraverso l’importazione. 
          </p>
          <p class="mb-3">
          Nel 2003 è stata fondata <strong>mmp</strong> Filtration Pvt. Ltd. per rispondere alle crescenti esigenze del mercato, con maggiore efficienza e riduzione dei costi. Oggi <b>mmp</b> Filtration si colloca tra i principali produttori in India, specializzati in soluzioni avanzate per la filtrazione di aria e acqua. Il nostro impegno verso i clienti è chiaro: collaborando con <strong>mmp</strong>  potete aspettarvi qualità, competenza e un elevato livello di soddisfazione. 
          </p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- expertise end-->


<section class="trust">
    <div class="container-fluid p-0">
      <div class="row w-100">
        <div class="col-md-12">
          <h3 class="inner-head">Cartucce filtranti: prodotti di cui ti puoi fidare</h3>
        </div>
      </div>
      <div class="trust-slider-for">
        <div class="px-2 prod-mg">
            <a href="{{ url('prodotti-dettaglio/filati-polipropilene') }}">
                <img src="{{ asset('public/producttrust/Dref-Spinning.jpg') }}" alt="Filato DREF – Filato industriale in polipropilene" class="img-fluid"/>
            </a>
        </div>
        <div class="px-2 prod-mg">
        <a href="{{ url('dettaglio-prodotto/anima-per-cartucce-filtranti') }}">
          <img src="{{ asset('public/producttrust/cartridge.jpg') }}" alt="Nucleo per cartuccia filtrante acqua" class="img-fluid"/>
        </a>
        </div>
        <div class="px-2 prod-mg">
            <a href="{{ url('prodotti-dettaglio/cartucce-filtranti-soffiate-oceanic') }}">
          <img src="{{ asset('public/producttrust/ocanic.jpg') }}" alt="Cartucce filtranti melt-blown Oceanic" class="img-fluid" /></a>
        </div>
        <div class="px-2 prod-mg">
            <a href="{{ url('prodotti-dettaglio/cartucce-filtranti-soffiate-a-fusione') }}">
          <img src="{{ asset('public/producttrust/lagoon.jpg') }}" alt="Cartucce filtranti melt-blown Lagoon" class="img-fluid" />
          </a>
        </div>
        <div class="px-2 prod-mg">
            <a href="{{ url('dettaglio-prodotto/wound-filter-cartridges') }}">
          <img src="{{ asset('public/producttrust/hydro-wound.jpg') }}" alt="Cartucce filtranti avvolte Hydro Wound" class="img-fluid" /></a>
        </div>
        <div class="px-2 prod-mg">
            <a href="{{ url('prodotti-dettaglio/macchina-per-cartucce-filtranti-avvolte') }}">
          <img src="{{ asset('public/producttrust/wound-filter-machine.jpg') }}" alt="Macchina per la produzione di cartucce filtranti avvolte" class="img-fluid" /></a>
        </div>
        <div class="px-2 prod-mg">
            <a href="{{ url('prodotti-dettaglio/cartucce-pleat-pp') }}">
          <img src="{{ asset('public/producttrust/pyoorite.jpg') }}" alt="Cartucce filtranti pieghettate in PP – Pyoorite" class="img-fluid" /></a>
        </div>
        <div class="px-2 prod-mg">
            <a href="{{ url('prodotti-dettaglio/sacchetti-filtranti-pleat') }}">
          <img src="{{ asset('public/producttrust/Pleatex-Pleated-Filter-Bags.jpg') }}" alt="Pleatex – Maniche filtranti pieghettate" class="img-fluid" /></a>
        </div>
        <div class="px-2 prod-mg">
            <a href="{{ url('dettaglio-prodotto/conventional-filter-bags') }}">
          <img src="{{ asset('public/producttrust/MTex-Conventional-Filter-Bags.jpg') }}" alt="MTex – Maniche filtranti convenzionali" class="img-fluid" /></a>
        </div>
        <div class="px-2 prod-mg">
            <a href="{{ url('dettaglio-prodotto/pleatex-pleated-cartridges') }}">
          <img src="{{ asset('public/producttrust/Pleatex-Pleated-Cartridges.jpg') }}" alt="Pleatex – Cartucce pieghettate" class="img-fluid"/>
          </a>
        </div>
        <div class="px-2 prod-mg">
        <a href="{{ url('dettaglio-prodotto/pleatex-pleated-cartridges') }}">
          <img src="{{ asset('public/producttrust/Cages-Dust-Collector-Filter-Bags.jpg') }}" alt="Gabbie per maniche filtranti depolveratori" class="img-fluid" /></a>
        </div>
      </div>
      <div class="trust-slider-nav">
    <div>
        <div class="img-content">
        <a href="{{ url('dettaglio-prodotto/filati-polipropilene') }}">
        <b>Filato DREF</b></a>
        <p>Filato industriale</p>
        </div>
    </div>
    <div>
        <div class="img-content">
        <a href="{{ url('dettaglio-prodotto/anima-per-cartucce-filtranti') }}">
        <b>Nucleo per cartuccia filtrante acqua</b></a>
        <p>Filtri Acqua</p>
        </div>
    </div>
    <div>
        <div class="img-content">
        <a href="{{ url('dettaglio-prodotto/cartucce-filtranti-soffiate-oceanic') }}">
        <b>Cartucce filtranti melt-blown Oceanic</b></a>
        <p>Filtri Acqua</p>
        </div>
    </div>
    <div>
        <div class="img-content">
        <a href="{{ url('dettaglio-prodotto/cartucce-filtranti-soffiate-a-fusione') }}">
        <b>Cartucce filtranti melt-blown</b></a>
        <p>Filtri Acqua</p>
        </div>
    </div>
    <div>
        <div class="img-content">
        <a href="{{ url('dettaglio-prodotto/wound-filter-cartridges') }}">
        <b>Cartucce filtranti avvolte</b></a>
        <p>Filtri Acqua</p>
        </div>
    </div>
        <div>
        <div class="img-content">
        <a href="{{ url('dettaglio-prodotto/macchina-per-cartucce-filtranti-avvolte') }}">
        <b>Wound Filter Production Machine</b></a>
        <p>Filtri Acqua</p>
        </div>
    </div>
    <div>
        <div class="img-content">
        <a href="{{ url('dettaglio-prodotto/cartucce-pleat-pp') }}">
        <b>Cartucce filtranti pieghettate in PP</b></a>
        <p>Filtri Acqua</p>
        </div>
    </div>
    <div>
        <div class="img-content">
        <a href="{{ url('dettaglio-prodotto/sacchetti-filtranti-pleat') }}">
        <b>Maniche filtranti pieghettate</b></a>
        <p>Filtri Aria</p>
        </div>
    </div>
    <div>
        <div class="img-content">
        <a href="{{ url('dettaglio-prodotto/sacco-filtro-raccogli-polvere') }}">
        <b>MTex – Maniche filtranti convenzionali</b></a>
        <p>Filtri Aria</p>
        </div>
    </div>
    <div>
        <div class="img-content">
        <a href="{{ url('dettaglio-prodotto/cartucce-pleat') }}">  
        <b>Pleatex – Cartucce pieghettate</b></a>
        <p>Filtri Aria</p>
        </div>
    </div>
    <div>
        <div class="img-content">
        <a href="{{ url('dettaglio-prodotto/gabbie-filtranti-raccogli-polvere') }}">  
        <b>Gabbie per maniche filtranti depolveratori</b></a>
        <p>Filtri Aria</p>
        </div>
    </div>

</div>
    </div>
</section>

<!-- trust end -->

<!-- our-brands -->
<section class="our-brands">
  <div class="container">
    <div class="brand-head">
      <div class="row">
        <div class="col-md-12">
          <h3 class="inner-head">I Nostri Marchi Brevettati</h3>
        </div>
      </div>
    </div>
    <div class="brand-slider">
      @foreach($data['ourbrands'] as $brands)
      <div class="px-2 box-height">
        <img
          src="{{ asset('public/OurBrands/'.$brands->logo) }}"
          alt="{{ $brands->name }}"
          class="img-fluid"
        />
      </div>
      @endforeach
    </div>
  </div>
</section>
<!-- our-brands end -->

<!-- event -->
<section class="event">
  <div class="container pad-type w-100">
    <div class="brand-head">
      <div class="row w-100">
        <div class="col-md-12">
          <h4 class="inner-head">Ultimi Eventi</h4>
        </div>
      </div>
    </div>

    @foreach ($data['event'] as $key => $v)
    <div class="row w-100">
      @if ($key % 2 == 0)
      <div class="col-md-6 pad-right">
        <div class="event-box">
          <div>
            <h4>{{ $v->name }}</h4>
            <ul class="d-flex flex-column p-0">
              <li class="pb-3">
                <img
                  src="{{ asset('public/front/images/map-icon.png') }}"
                  alt="{{ $v->name }} location"
                />
                <p>{{ $v->place }}</p>
              </li>
              <li class="py-3">
                <img src="{{ asset('public/front/images/date.png') }}" alt="{{ $v->name }} date" />
                <p class="bdr-add">{{ $v->date }}</p>
              </li>
              <li class="pt-3">
                <img src="{{ asset('public/front/images/home.png') }}" alt="{{ $v->name }} stall number" />
                <p>{{ $v->stall_no }}</p>
              </li>
            </ul>
          </div>
          <div>
            <a href="{{ route('event')}}" target="_blank">
              <!--<i class="fa fa-chevron-right" aria-hidden="true"></i>-->
            </a>
          </div>
        </div>
      </div>

      <div class="col-md-6 d-flex align-items-end pad-right pad-left">
        <div class="d-flex justify-content-start">
          <?php
          if ($v->image) { 
            $images = explode(',', $v->image); 
            $max = 2; 
            foreach ($images as $k => $image) { 
              if ($k >= $max) { 
                break; 
              } 
              echo '
              <div>
                <img
                  src="' . asset('public/event/' . $image) . '"
                  alt="' . $v->alt . '"
                  class="img-fluid event-img-home"
                />
              </div>
              '; 
            } 
          } 
          ?>
        </div>
      </div>
    </div>
    @else
    <div class="col-md-6 pad-right">
      <div class="d-flex justify-content-end">
        <?php
        if ($v->image) { 
          $images = explode(',', $v->image); 
          $max = 2; 
          foreach ($images as $k => $image) { 
            if ($k >= $max) { 
              break; 
            } 
            echo '
            <div>
              <img
                src="' . asset('public/event/' . $image) . '"
                alt="' . $v->alt . '"
                class="img-fluid event-img-home"
              />
            </div>
            '; 
          } 
        } 
        ?>
      </div>
    </div>
    <div class="col-md-6 pad-left pad-right">
      <div class="event-box">
        <div>
          <h4>{{ $v->name }}</h4>
          <ul class="d-flex flex-column p-0">
            <li class="pb-3">
              <img
                src="{{ asset('public/front/images/map-icon.png') }}"
                alt="{{ $v->name }} location"
              />
              <p>{{ $v->place }}</p>
            </li>
            <li class="py-3">
              <img src="{{ asset('public/front/images/date.png') }}" alt="{{ $v->name }} date" />
              <p class="bdr-add">{{ $v->date }}</p>
            </li>
            <li class="pt-3">
              <img src="{{ asset('public/front/images/home.png') }}" alt="{{ $v->name }} stall number" />
              <p>{{ $v->stall_no }}</p>
            </li>
          </ul>
        </div>
        <div>
          <a href="{{ route('event')}}" target="_blank">
            <!--<i class="fa fa-chevron-right" aria-hidden="true"></i>-->
          </a>
        </div>
      </div>
    </div>
  </div>
  @endif 
  @endforeach

  <div class="d-flex justify-content-center mt-4">
    <div class="theme-btn justify-content-start">
      <a href="{{ route('event') }}" class="nav-link btn-add" target="_blank"
        ><span><i class="fa fa-angle-right" aria-hidden="true"></i></span>
        <p>Vedi Tutti</p></a
      >
    </div>
  </div>
</section>
<!-- event end -->



<!-- our customer -->
<section class="customer mt-5 pb-0">
  <div class="container">
  <h4 class="inner-head">Produttore leader</h4>
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

<!-- Videos -->
<section class="our-brands">
    <div class="container">
        <div class="brand-head">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="inner-head">Video</h3>
                </div>
            </div>
        </div>

        <div class="video-slider">

            @if(!empty($data['youtubeAvailable']) && $data['youtubeAvailable'] && count($data['video']))

                @foreach($data['video'] as $video)
                    <div class="mx-3">
                        <iframe width="300" height="200"
                            src="{{ $video['embedUrl'] }}"
                            title="{{ $video['title'] }}"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen>
                        </iframe>
                        <p>{{ $video['title'] }}</p>
                    </div>
                @endforeach

            @else

                <div class="mx-3">
                    <iframe width="300" height="200"
                        src="https://www.youtube.com/embed/F5WNyOo5jo4"
                        frameborder="0" allowfullscreen>
                    </iframe>
                    <p>Company Overview</p>
                </div>

                <div class="mx-3">
                    <iframe width="300" height="200"
                        src="https://www.youtube.com/embed/wwysmMvlEb8"
                        frameborder="0" allowfullscreen>
                    </iframe>
                    <p>Manufacturing Process</p>
                </div>

            @endif

        </div>
    </div>
</section>
<!-- Videos -->

@include('layouts.frontfooter')
