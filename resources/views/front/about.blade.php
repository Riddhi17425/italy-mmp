@include('layouts.frontheader')

    <!-- about-banner -->
    <section class="inner-banner-about">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div>
                        <h1>Chi Siamo</h1>
                    </div>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Chi Siamo</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- about-banner end -->

    <!-- banner-bottom -->
    <section class="green-world">
        <div class="container">
            <div class="row align-items-center"> 
                <div class="col-lg-7">
                    <div class="sub-head-about d-flex">
                        <img src="{{ asset('public/front/images/about-water-icon.png') }}" alt="icona acqua" class="water-icon img-fluid">
                        <h3 class="custom_pera">Filtrazione per <br/> un futuro sostenibile </h3>
                    </div>
                    <div class="pb-4">
                         <img src="{{ asset('public/front/images/about-left-img.png') }}" alt="Immagine sinistra Chi Siamo" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-5">
                    <p><strong>MMP è</strong> guidata dallo scopo di migliorare la qualità della vita attraverso l’innovazione di tecnologie sostenibili di pulizia e filtrazione per aria e acqua. Le nostre attività produttive sono distribuite in tutta l’India, con stabilimenti a Kolkata, Mumbai, Chennai e Ahmedabad.</p>
                    <p>Nel nostro impianto di Kolkata abbiamo sviluppato una competenza specifica nella produzione di filtri a cartuccia in polipropilene avvolto (String Wound Filters), filtri Melt Blown e sacchi filtranti per polveri industriali destinati alla filtrazione dell’aria. A Mumbai realizziamo un’ampia gamma di prodotti per la filtrazione dell’aria. Ahmedabad è il nostro hub produttivo per i filtri a cartuccia in polipropilene avvolto, i filtri Melt Blown in polipropilene e il filato DREF a frizione (DREF Friction Spun Yarn). </p>
                    <p>La nostra azienda ha il primato di essere stata la prima in India a realizzare la produzione di cartucce filtranti Melt Blown. Inoltre, siamo orgogliosi di aver ottenuto la certificazione NSF per i nostri filtri Melt Blown, una garanzia di affidabilità e qualità riconosciuta anche in India e a livello internazionale. </p>
                </div>
            </div>
           
        </div>
         <div class="blue-bg-wrap">
                <p class="blue-pera">La nostra competenza si estende dalla progettazione all’ingegneria e alla produzione di soluzioni di filtrazione conformi agli standard globali. Grazie a una rete di distribuzione ben strutturata, abbiamo il vantaggio di fornire i nostri prodotti in qualsiasi parte dell’India. Inoltre, disponiamo di uffici commerciali a Kolkata, Mumbai, Chennai e Ahmedabad per offrire un supporto completo ai nostri clienti. </p>
            </div>
    </section>
    <!-- banner-bottom-end -->

    <!-- location -->
    <section class="location">
        <img src="{{ asset('public/front/images/about_map.jpg') }}" alt="Mappa Chi Siamo" class="img-fluid">
    </section>
    <!-- location end -->

     <!-- our-brands -->
     <section class="our-brands">
        <div class="container">
          <div class="brand-head">
            <div class="row">
              <div class="col-md-12">
                <h3 class="inner-head">I nostri marchi brevettati </h3>
              </div>
            </div>
          </div>
          <div class="brand-slider">
          @foreach($data['ourbrands'] as $brands)
          <div class="px-2 box-height">
            <img src="{{ asset('public/OurBrands/'.$brands->logo) }}" alt="{{$brands->name}}" class="img-fluid" />
          </div>
          @endforeach
          </div>
        </div>
      </section>
      <!-- our-brands end -->

      @include('layouts.frontfooter')
