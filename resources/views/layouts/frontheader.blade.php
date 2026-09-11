<!DOCTYPE html>
<html>

<head>
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-WKX92X28');
    </script>
    <!-- End Google Tag Manager -->


    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-3K36E63DFT"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-3K36E63DFT');
    </script>


    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link href="{{ asset('public/front/images/favicon.png') }}" rel="icon">
    <title>{!! $title !!}</title>

    <link rel="alternate" hreflang="it-IT" href="{{ url()->current() }}" />

    @if (request()->is('/'))
        <link rel="alternate" hreflang="en" href="https://mmpfilter.com/" />
        <link rel="alternate" hreflang="x-default" href="https://mmpfilter.com/" />
    @elseif(request()->routeIs('about'))
        <link rel="alternate" hreflang="en" href="https://mmpfilter.com/about" />
        <link rel="alternate" hreflang="x-default" href="https://mmpfilter.com/about" />
    @elseif(request()->routeIs('certifications'))
        <link rel="alternate" hreflang="en" href="https://mmpfilter.com/certifications" />
        <link rel="alternate" hreflang="x-default" href="https://mmpfilter.com/certifications" />
    @elseif(request()->routeIs('partnership'))
        <link rel="alternate" hreflang="en" href="https://mmpfilter.com/partnership-opportunities" />
        <link rel="alternate" hreflang="x-default" href="https://mmpfilter.com/partnership-opportunities" />
    @elseif(request()->routeIs('contact'))
        <link rel="alternate" hreflang="en" href="https://mmpfilter.com/contact" />
        <link rel="alternate" hreflang="x-default" href="https://mmpfilter.com/contact" />
    @elseif(request()->routeIs('machinery'))
        <link rel="alternate" hreflang="en" href="https://mmpfilter.com/water-and-air-filtration-products" />
        <link rel="alternate" hreflang="x-default" href="https://mmpfilter.com/water-and-air-filtration-products" />
    @elseif(request()->routeIs('event'))
        <link rel="alternate" hreflang="en" href="https://mmpfilter.com/events" />
        <link rel="alternate" hreflang="x-default" href="https://mmpfilter.com/events" />
    @elseif(request()->routeIs('casestudy'))
        <link rel="alternate" hreflang="en" href="https://mmpfilter.com/case-studies" />
        <link rel="alternate" hreflang="x-default" href="https://mmpfilter.com/case-studies" />
        {{-- Row 11 --}}
    @elseif(request()->is('prodotto/cartucce-filtranti-acqua'))
        <link rel="alternate" hreflang="en" href="https://mmpfilter.com/product/water-filter-cartridges" />
        <link rel="alternate" hreflang="x-default" href="https://mmpfilter.com/product/water-filter-cartridges" />

        {{-- Row 12 --}}
    @elseif(request()->is('prodotto/cartucce-filtranti-aria'))
        <link rel="alternate" hreflang="en" href="https://mmpfilter.com/product/air-filter-cartridges" />
        <link rel="alternate" hreflang="x-default" href="https://mmpfilter.com/product/air-filter-cartridges" />

        {{-- Row 13 --}}
    @elseif(request()->is('prodotto/filati-filtranti'))
        <link rel="alternate" hreflang="en" href="https://mmpfilter.com/product/filtration-yarns" />
        <link rel="alternate" hreflang="x-default" href="https://mmpfilter.com/product/filtration-yarns" />

        {{-- Row 14 --}}
    @elseif(request()->routeIs('woundfiltercartridgemachine'))
        <link rel="alternate" hreflang="en" href="https://mmpfilter.com/wound-filter-cartridge-machine" />
        <link rel="alternate" hreflang="x-default" href="https://mmpfilter.com/wound-filter-cartridge-machine" />

        {{-- Row 15 --}}
    @elseif(request()->is('dettaglio-prodotto/cartucce-filtranti-soffiate-a-fusione'))
        <link rel="alternate" hreflang="en" href="https://mmpfilter.com/product-detail/melt-blown-filter-cartridges" />
        <link rel="alternate" hreflang="x-default"
            href="https://mmpfilter.com/product-detail/melt-blown-filter-cartridges" />

        {{-- Row 16 --}}
    @elseif(request()->is('dettaglio-prodotto/cartucce-filtranti-avvolte'))
        <link rel="alternate" hreflang="en" href="https://mmpfilter.com/product-detail/wound-filter-cartridges" />
        <link rel="alternate" hreflang="x-default"
            href="https://mmpfilter.com/product-detail/wound-filter-cartridges" />

        {{-- Row 17 --}}
    @elseif(request()->is('dettaglio-prodotto/cartucce-filtranti-soffiate-lagoon'))
        <link rel="alternate" hreflang="en"
            href="https://mmpfilter.com/product-detail/lagoon-melt-blown-filter-cartridges" />
        <link rel="alternate" hreflang="x-default"
            href="https://mmpfilter.com/product-detail/lagoon-melt-blown-filter-cartridges" />

        {{-- Row 18 --}}
    @elseif(request()->is('dettaglio-prodotto/cartucce-filtranti-soffiate-oceanic'))
        <link rel="alternate" hreflang="en"
            href="https://mmpfilter.com/product-detail/oceanic-melt-blown-filter-cartridges" />
        <link rel="alternate" hreflang="x-default"
            href="https://mmpfilter.com/product-detail/oceanic-melt-blown-filter-cartridges" />

        {{-- Row 19 --}}
    @elseif(request()->is('dettaglio-prodotto/anima-per-cartucce-filtranti'))
        <link rel="alternate" hreflang="en" href="https://mmpfilter.com/product-detail/core-for-filter-cartridge" />
        <link rel="alternate" hreflang="x-default"
            href="https://mmpfilter.com/product-detail/core-for-filter-cartridge" />

        {{-- Row 20 --}}
    @elseif(request()->is('dettaglio-prodotto/macchina-per-cartucce-filtranti-avvolte'))
        <link rel="alternate" hreflang="en" href="https://mmpfilter.com/product-detail/wound-filter-machine" />
        <link rel="alternate" hreflang="x-default"
            href="https://mmpfilter.com/product-detail/wound-filter-machine" />

        {{-- Row 21 --}}
    @elseif(request()->is('dettaglio-prodotto/cartucce-pleat-pp'))
        <link rel="alternate" hreflang="en"
            href="https://mmpfilter.com/product-detail/pp-pleated-filter-cartridges" />
        <link rel="alternate" hreflang="x-default"
            href="https://mmpfilter.com/product-detail/pp-pleated-filter-cartridges" />

        {{-- Row 22 --}}
    @elseif(request()->is('dettaglio-prodotto/filtri-pp-spun'))
        <link rel="alternate" hreflang="en" href="https://mmpfilter.com/product-detail/pp-spun-filters" />
        <link rel="alternate" hreflang="x-default" href="https://mmpfilter.com/product-detail/pp-spun-filters" />

        {{-- Row 23 --}}
    @elseif(request()->is('dettaglio-prodotto/cartucce-filtranti-legante-resina'))
        <link rel="alternate" hreflang="en"
            href="https://mmpfilter.com/product-detail/resin-bonded-filter-cartridges" />
        <link rel="alternate" hreflang="x-default"
            href="https://mmpfilter.com/product-detail/resin-bonded-filter-cartridges" />

        {{-- Row 24 --}}
    @elseif(request()->is('dettaglio-prodotto/cartucce-filtranti-legante-resina-con-scanalature'))
        <link rel="alternate" hreflang="en"
            href="https://mmpfilter.com/product-detail/grooved-resin-bonded-filter-cartridges" />
        <link rel="alternate" hreflang="x-default"
            href="https://mmpfilter.com/product-detail/grooved-resin-bonded-filter-cartridges" />

        {{-- Row 25 --}}
    @elseif(request()->is('dettaglio-prodotto/filtro-sedimenti'))
        <link rel="alternate" hreflang="en" href="https://mmpfilter.com/product-detail/sediment-filter" />
        <link rel="alternate" hreflang="x-default" href="https://mmpfilter.com/product-detail/sediment-filter" />

        {{-- Row 26 --}}
    @elseif(request()->is('dettaglio-prodotto/cartuccia-filtrante-antimicrobica-per-ferite'))
        <link rel="alternate" hreflang="en"
            href="https://mmpfilter.com/product-detail/anti-microbial-wound-filter-cartridges" />
        <link rel="alternate" hreflang="x-default"
            href="https://mmpfilter.com/product-detail/anti-microbial-wound-filter-cartridges" />

        {{-- Row 27 --}}
    @elseif(request()->is('dettaglio-prodotto/cartucce-filtranti-avvolte-antimicrobiche'))
        <link rel="alternate" hreflang="en" href="https://mmpfilter.com/product-detail/high-flow-pleated-filter" />
        <link rel="alternate" hreflang="x-default"
            href="https://mmpfilter.com/product-detail/high-flow-pleated-filter" />

        {{-- Row 28 --}}
    @elseif(request()->is('dettaglio-prodotto/alloggiamento-monoblocco-pph'))
        <link rel="alternate" hreflang="en"
            href="https://mmpfilter.com/product-detail/pph-one-piece-filter-housing" />
        <link rel="alternate" hreflang="x-default"
            href="https://mmpfilter.com/product-detail/pph-one-piece-filter-housing" />

        {{-- Row 29 --}}
    @elseif(request()->is('dettaglio-prodotto/sacchetti-filtranti-pleat'))
        <link rel="alternate" hreflang="en" href="https://mmpfilter.com/product-detail/pleated-filter-bags" />
        <link rel="alternate" hreflang="x-default" href="https://mmpfilter.com/product-detail/pleated-filter-bags" />

        {{-- Row 30 --}}
    @elseif(request()->is('dettaglio-prodotto/cartucce-pleat'))
        <link rel="alternate" hreflang="en" href="https://mmpfilter.com/product-detail/pleated-cartridges" />
        <link rel="alternate" hreflang="x-default" href="https://mmpfilter.com/product-detail/pleated-cartridges" />
     {{-- Row 31 --}}
@elseif(request()->is('dettaglio-prodotto/sacco-filtro-raccogli-polvere'))
    <link rel="alternate" hreflang="en" href="https://mmpfilter.com/product-detail/dust-collector-filter-bag" />
    <link rel="alternate" hreflang="x-default" href="https://mmpfilter.com/product-detail/dust-collector-filter-bag" />

{{-- Row 32 --}}
@elseif(request()->is('dettaglio-prodotto/gabbie-filtranti-raccogli-polvere'))
    <link rel="alternate" hreflang="en" href="https://mmpfilter.com/product-detail/dust-collector-filter-cages" />
    <link rel="alternate" hreflang="x-default" href="https://mmpfilter.com/product-detail/dust-collector-filter-cages" />

{{-- Row 33 --}}
@elseif(request()->is('dettaglio-prodotto/sacchetti-filtranti'))
    <link rel="alternate" hreflang="en" href="https://mmpfilter.com/product-detail/filter-bags" />
    <link rel="alternate" hreflang="x-default" href="https://mmpfilter.com/product-detail/filter-bags" />

{{-- Row 34 --}}
@elseif(request()->is('dettaglio-prodotto/filati-polipropilene'))
    <link rel="alternate" hreflang="en" href="https://mmpfilter.com/product-detail/polypropylene-yarns" />
    <link rel="alternate" hreflang="x-default" href="https://mmpfilter.com/product-detail/polypropylene-yarns" />

{{-- Row 35 --}}
@elseif(request()->is('dettaglio-prodotto/filato-filtrante-polipropilene-antimicrobico'))
    <link rel="alternate" hreflang="en" href="https://mmpfilter.com/product-detail/anti-microbial-polypropylene-filtration-yarn" />
    <link rel="alternate" hreflang="x-default" href="https://mmpfilter.com/product-detail/anti-microbial-polypropylene-filtration-yarn" />

{{-- Row 36 --}}
@elseif(request()->is('dettaglio-prodotto/filato-cotone-sbiancato-assorbente'))
    <link rel="alternate" hreflang="en" href="https://mmpfilter.com/product-detail/absorbent-bleached-cotton-yarn" />
    <link rel="alternate" hreflang="x-default" href="https://mmpfilter.com/product-detail/absorbent-bleached-cotton-yarn" />

{{-- Row 37 --}}
@elseif(request()->is('dettaglio-prodotto/filato-polipropilene-zero-schiuma'))
    <link rel="alternate" hreflang="en" href="https://mmpfilter.com/product-detail/zero-foaming-polypropylene-yarn" />
    <link rel="alternate" hreflang="x-default" href="https://mmpfilter.com/product-detail/zero-foaming-polypropylene-yarn" />

{{-- Row 38 --}}
@elseif(request()->routeIs('pharmaindustry'))
    <link rel="alternate" hreflang="en" href="https://mmpfilter.com/pharma-industry" />
    <link rel="alternate" hreflang="x-default" href="https://mmpfilter.com/pharma-industry" />

{{-- Row 39 --}}
@elseif(request()->routeIs('chemicalindustry'))
    <link rel="alternate" hreflang="en" href="https://mmpfilter.com/chemical-industry" />
    <link rel="alternate" hreflang="x-default" href="https://mmpfilter.com/chemical-industry" />

{{-- Row 40 --}}
@elseif(request()->routeIs('Watertreatment'))
    <link rel="alternate" hreflang="en" href="https://mmpfilter.com/water-treatment-industry" />
    <link rel="alternate" hreflang="x-default" href="https://mmpfilter.com/water-treatment-industry" />

{{-- Row 41 --}}
@elseif(request()->routeIs('foodbeverage'))
    <link rel="alternate" hreflang="en" href="https://mmpfilter.com/food-and-beverage-industry" />
    <link rel="alternate" hreflang="x-default" href="https://mmpfilter.com/food-and-beverage-industry" />

{{-- Row 42 --}}
@elseif(request()->routeIs('textiletndustry'))
    <link rel="alternate" hreflang="en" href="https://mmpfilter.com/textile-industry" />
    <link rel="alternate" hreflang="x-default" href="https://mmpfilter.com/textile-industry" />

{{-- Row 43 --}}
@elseif(request()->routeIs('dairyindustry'))
    <link rel="alternate" hreflang="en" href="https://mmpfilter.com/dairy-industry" />
    <link rel="alternate" hreflang="x-default" href="https://mmpfilter.com/dairy-industry" />

{{-- Row 44 --}}
@elseif(request()->routeIs('oilindustry'))
    <link rel="alternate" hreflang="en" href="https://mmpfilter.com/oil-and-gas-industry" />
    <link rel="alternate" hreflang="x-default" href="https://mmpfilter.com/oil-and-gas-industry" />

{{-- Row 45 --}}
@elseif(request()->routeIs('cementindustry'))
    <link rel="alternate" hreflang="en" href="https://mmpfilter.com/cement-industry" />
    <link rel="alternate" hreflang="x-default" href="https://mmpfilter.com/cement-industry" />

{{-- Row 46 --}}
@elseif(request()->routeIs('powerindustry'))
    <link rel="alternate" hreflang="en" href="https://mmpfilter.com/power-plant-industry" />
    <link rel="alternate" hreflang="x-default" href="https://mmpfilter.com/power-plant-industry" />

  
 @endif


    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <meta name="description" content="{!! $description !!}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        crossorigin="anonymous" />

    <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('public/front/css/slick.css') }}?v={{ time() }}" />
    <link rel="stylesheet" href="{{ asset('public/front/css/slick-theme.css') }}?v={{ time() }}" />
    <link rel="stylesheet" href="{{ asset('public/front/css/fancybox.min.css') }}?v={{ time() }}" />
    <link rel="stylesheet" href="{{ asset('public/front/css/mmp.style.css') }}?v={{ time() }}" />
    <link rel="stylesheet" href="{{ asset('public/front/css/mmp.responsive.css') }}?v={{ time() }}" />

    <!--og tags start-->
    <meta property="og:title" content="{!! $title !!}">
    <meta property="og:description" content="{!! $description !!}">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:type" content="website">
    @if (!empty($og_image))
        <meta property="og:image" content="{{ asset('public/blog_og_image/' . $blogdetail->og_image) }}" />
    @elseif(!empty($data['products']->mobile_image))
        <meta property="og:image"
            content="{{ asset('public/Product_Mobile_Images/' . $data['products']->mobile_image) }}" />
    @else
        <meta property="og:image"
            content="{{ isset($ogimage) ? $ogimage : asset('public/front/images/air-filters.png') }}" />
    @endif
    <!--og tags ends-->
    <link rel="canonical" href="{{ url()->current() }}">

    <script type="application/ld+json">
        {         
          "@context": "https://schema.org/",         
          "@type": "Organization",         
          "@id": "#Organization",         
          "url": "https://italy.mmpfilter.com/",         
          "legalName": "mmp Filter",         
          "name": "mmp Filter.",         
          "description": "Dal 1994, mmp Filtration offre soluzioni avanzate per filtri a cartuccia, filtri aria e acqua — tecnologia, qualità e fiducia a livello globale.",         
          "image": "https://italy.mmpfilter.com/public/front/images/logo.png",         
          "logo": "https://italy.mmpfilter.com/public/front/images/logo.png",         
          "telephone": "+39 3286959896",         
          "email": "m.radice@mffiltri.com",         
          "address": {             
            "@type": "PostalAddress",             
            "streetAddress": "Via Rossini 28",             
            "addressLocality": "Cologno Monzese",             
            "addressRegion": "Milan",             
            "addressCountry": "Italy",             
            "postalCode": "20093"        
          },         
          "sameAs": [             
            "https://www.facebook.com/mmpfiltration",          
            "https://www.instagram.com/mmpfiltration/",             
            "https://www.linkedin.com/company/mmpfiltration/",             
            "https://www.youtube.com/@mmpfiltrationpvt.ltd.9372/featured"      
          ] 
      } 
    </script>


</head>

<body>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WKX92X28" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    @php
        $categories = DB::table('categories')
            ->leftJoin('product', function ($join) {
                $join->on('categories.id', '=', 'product.category_id')->where('product.is_delete', '=', '0');
            })
            ->where('categories.is_delete', '0')
            ->select(
                'categories.id as category_id',
                'categories.category_name',
                'categories.category_url',
                'product.id as product_id',
                'product.product_name',
                'product.producturl',
            )
            ->get()
            ->groupBy('category_id');
    @endphp

    <header id="header-top">
        <nav class="navbar navbar-expand-lg bg-white">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ url('/') }}"><img
                        src="{{ asset('public/front/images/logo.png') }}" alt="mmp-filter" /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                    aria-controls="navbarText" aria-expanded="false" aria-label="Apri navigazione">
                    <span><i class="fa fa-bars" aria-hidden="true"></i></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-center">
                        <li class="nav-item menu-item">
                            <a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}"
                                href="{{ route('about') }}">Chi Siamo</a>
                        </li>
                        <li class="nav-item menu-item {{ Request::is('product*') ? 'active' : '' }}">
                            <div class="dropdown">
                                <button class="dropdown-toggle" type="button" id="dropdownMenuButton2"
                                    data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                                    Prodotti
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                    @foreach ($categories as $category_id => $categoryGroup)
                                        @php
                                            $category = $categoryGroup->first();
                                            $catName = $category->category_name;
                                            $catUrl = url('prodotto/' . $category->category_url);
                                        @endphp
                                        <li class="sub-dropdown-parent parent_dropdown">
                                            <div class="d-inline-flex align-items-center">
                                                <a class="dropdown-item"
                                                    href="{{ $catUrl }}">{{ $catName }}</a>
                                            </div>
                                            @if ($categoryGroup->whereNotNull('product_id')->isNotEmpty())
                                                <ul class="sub-dropdown-menu child_dropdown">
                                                    @foreach ($categoryGroup as $product)
                                                        @if ($product->product_id)
                                                            <li>
                                                                <a class="dropdown-item"
                                                                    href="{{ route('productdetail', ['url' => $product->producturl]) }}">
                                                                    {{ $product->product_name }}
                                                                </a>
                                                            </li>
                                                        @endif
                                                    @endforeach
                                                </ul>
                                            @endif
                                        </li>
                                    @endforeach
                                    <li><a class="dropdown-item"
                                            href="{{ route('woundfiltercartridgemachine') }}">Macchina per Cartucce
                                            Filtranti per ferite</a></li>
                                </ul>
                            </div>
                        </li>

                        <li class="nav-item menu-item {{ Request::is('*industry*') ? 'active' : '' }}">
                            <div class="dropdown">
                                <button class="dropdown-toggle" type="button" id="dropdownMenuButton2"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Settori che Serviamo
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                    <li><a class="dropdown-item" href="{{ route('pharmaindustry') }}">Industria
                                            Farmaceutica</a></li>
                                    <li><a class="dropdown-item" href="{{ route('chemicalindustry') }}">Industria
                                            chimica</a></li>
                                    <li><a class="dropdown-item" href="{{ route('Watertreatment') }}">Industria del
                                            trattamento delle acque</a></li>
                                    <li><a class="dropdown-item" href="{{ route('foodbeverage') }}">Industria
                                            alimentare e delle bevande</a></li>
                                    <li><a class="dropdown-item" href="{{ route('textiletndustry') }}">Industria
                                            Tessile</a></li>
                                    <li><a class="dropdown-item" href="{{ route('dairyindustry') }}">Industria
                                            Lattiero-Casearia</a></li>
                                    <li><a class="dropdown-item" href="{{ route('oilindustry') }}">Industria Del
                                            Petrolio e Del Gas</a></li>
                                    <li><a class="dropdown-item" href="{{ route('cementindustry') }}">Industria Del
                                            Cemento</a></li>
                                    <li><a class="dropdown-item" href="{{ route('powerindustry') }}">Industria Delle
                                            Centrali Elettriche</a></li>
                                </ul>
                            </div>
                        </li>
                        <li
                            class="nav-item menu-item {{ request()->routeIs('machinery', 'event', 'casestudy') || Request::is('blogs') ? 'active' : '' }}">
                            <div class="dropdown">
                                <button class="dropdown-toggle" type="button" id="dropdownMenuButton2"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Risorse
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                    <li><a class="dropdown-item {{ request()->routeIs('machinery') ? 'active' : '' }}"
                                            href="{{ route('machinery') }}"> Video </a></li>
                                    <li><a class="dropdown-item {{ Request::is('blogs') ? 'active' : '' }}" href="{{ url('blogs') }}">Blog</a></li>
                                    <li><a class="dropdown-item {{ request()->routeIs('event') ? 'active' : '' }}"
                                            href="{{ route('event') }}">Eventi</a></li>
                                    <li><a class="dropdown-item {{ request()->routeIs('casestudy') ? 'active' : '' }}"
                                            href="{{ route('casestudy') }}">Studio di Caso</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item menu-item">
                            <a class="nav-link {{ request()->routeIs('partnership') ? 'active' : '' }}"
                                href="{{ route('partnership') }}">Opportunità di Partnership</a>
                        </li>
                        <li class="nav-item menu-item">
                            <a class="nav-link {{ request()->routeIs('certifications') ? 'active' : '' }}"
                                href="{{ route('certifications') }}">Certificazioni</a>
                        </li>
                        <li class="nav-item menu-item">
                            <a class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}"
                                href="{{ route('contact') }}">Contattaci</a>
                        </li>
                        <!--<li class="nav-item menu-item">-->
                        <!--  <div class="theme-btn justify-content-start ">-->
                        <!--        <a class="website_area" href="https://mmpyarn.com/" target="_blank">Vai al Sito Filati</a>-->
                        <!--  </div>-->
                        <!--</li>-->
                    </ul>
                </div>
            </div>
        </nav>
    </header>
