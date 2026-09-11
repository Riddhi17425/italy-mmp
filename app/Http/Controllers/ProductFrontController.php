<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductInquiry;
use DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Google\Service\Sheets;
use Illuminate\Support\Facades\Log;
use Google_Client;
use Google_Service_Sheets;
use Google_Service_Sheets_ValueRange;
use Maatwebsite\Excel\Facades\Excel;
use GuzzleHttp\Client;
use SheetDB\SheetDB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Carbon;

class ProductFrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($url)
    {
    
        $category = Category::where('category_url', $url)->first();
        $title=$category->meta_title;
        $ogimage = !empty($category->mobile_cat_image) 
        ? asset('public/Category_Mobile_Images/' . $category->mobile_cat_image) 
        : '';
        $description=$category->meta_description; 
        //dd($category);
        if ($category->category_url == 'polypropylene-yarns') {
            $ogimage = asset('public/front/images/Polypropylene_Yarns_(PP%20Yarns).png');
            return view('front.product', ['category' => $category , 'title' => $title , 'description' => $description, 'ogimage'=> $ogimage]);
        }
        if ($category->category_url == 'high-flow-pleated-filter') {
             $ogimage = asset('public/front/images/Highflow_Pleated_Filter_Cartridge-mobile.png');
            return view('front.highflow-pleated-filter', ['category' => $category , 'title' => $title , 'description' => $description, 'ogimage'=> $ogimage]);
        }

        $data['product'] = Product::where('category_id', $category->id)->get();
        //dd($data['product']);
        return view('front.productlist', compact('data', 'category','title','description', 'ogimage'));
    }
    
    public function productdetail($url)
    {
        
        if ($url === 'cages-dust-collector-filter-bags') {
            return redirect('https://mmpfilter.com/product-detail/dust-collector-filter-cages', 301);
        }
        
        $data['product_name'] = Product::where('is_delete', '0')->get();
        $data['products'] = Product::where('producturl', $url)->where('is_delete', '0')->first();
    
        if (!$data['products']) {
            abort(404, 'Product not found');
        }
        $cat = Category::find($data['products']->category_id);
    
        if (!$cat) {
            abort(404, 'Category not found');
        }
    
        $title = $data['products']->meta_title;
        $description = $data['products']->meta_description;
        $ogimage = $data['products']-> mobile_image;
        return view('front.product-detail', compact('data', 'cat', 'title', 'description', 'ogimage'));
    }
    


    public function productinquiry(Request $request) {
        $timestamp = Carbon::now()->format('Y-m-d H:i:s');
    
        $info = [
            'name' => $request->name,
            'email' => $request->email,
            'product_name' => $request->product_name,
            'phone' => $request->phone,
            'city' => $request->city,
            'message' => $request->message,
            'created_at' => $timestamp,
        ];
    
        ProductInquiry::create($info);
    
        $sheetsData = [
            'from_type' => "Richiesta Prodotto",
            'name' => $request->name,
            'email' => $request->email,
            'product' => $request->product_name,
            'phone' => $request->phone,
            'city' => $request->city,
            'company_name' => '',
            'message' => $request->message,
            'formattedDate' => $timestamp,
        ];
    
        try {
            Http::withHeaders(['Content-Type' => 'application/json'])
                ->post('https://script.google.com/macros/s/AKfycbysAi0lckpyb-f2YN-_588aubJV09zC2gJEdUFc3w4HgNzzAtI3tFrxnS4LtAEtuVg-nw/exec', $sheetsData);
        } catch (\Exception $e) {
            \Log::error('Google Sheets Exception:', [
                'message' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
                'data_sent' => $sheetsData
            ]);
        }
    
    return redirect()->route('thank-you');
        
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    
        $data = Product::where('id',$id)->first();
        //$images = [];
        // dd($data['cert']->certificate_logo);
        return view('front.productfront',compact('data')); 

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    
    public function pharmaindustry(){
        $title = "Soluzioni di filtrazione per l’industria farmaceutica" ;
        $description = "mmp fornisce soluzioni di filtrazione avanzate per l’industria farmaceutica, eliminando impurità e microrganismi con filtri a membrana, a profondità e sterili per garantire la sicurezza del prodotto." ;
        $ogimage = asset('public/front/images/filter-cartridges-in-Pharma.jpg');
      return view('front.pharma-Industry',compact('title', 'description', 'ogimage'));
    }
   
    public function chemicalindustry(){
        $title = "Industria chimica: soluzioni di filtrazione per le industrie" ;
        $description = "mmp offre soluzioni di filtrazione chimica per rimuovere impurità da liquidi o gas, utilizzando filtri che separano i solidi o neutralizzano le sostanze chimiche. Contattaci." ;
         $ogimage = asset('public/front/images/MMp_chemical_img.png');
        return view('front.chemical-Industry',compact('title', 'description', 'ogimage'));
    }
    
    public function Watertreatment(){
        $title = "Industria del trattamento delle acque e delle acque reflue" ;
        $description = "I sistemi di trattamento dell’acqua di mmp offrono soluzioni avanzate per rimuovere batteri, metalli e contaminanti, garantendo acqua pulita e sicura per abitazioni e industrie." ;
         $ogimage = asset('public/front/images/challenges-in-water-treatment.png');
        return view('front.tratment',compact('title', 'description', 'ogimage'));
    }
    
    public function foodbeverage(){
        $title = "Soluzioni di filtrazione per alimenti e bevande | mmp Filter" ;
        $description = "La filtrazione mmp è ampiamente utilizzata nell’industria alimentare e delle bevande per rimuovere contaminanti da materie prime, prodotti finiti e imballaggi, garantendo sicurezza e qualità." ;
        $ogimage = asset('public/front/images/food-filtration-solutions.png');
        return view('front.foodbeverage',compact('title', 'description', 'ogimage'));
    }
    
    public function textiletndustry(){
        $title = "Soluzioni di filtrazione per l’industria tessile" ;
        $description = "La filtrazione mmp nei tessuti separa i solidi da liquidi o gas, garantendo purezza, aumentando l’efficienza e riducendo l’inquinamento in tutte le fasi di produzione." ;
        $ogimage = asset('public/front/images/texttile-1.png');
        return view('front.Textile-Industry',compact('title', 'description', 'ogimage'));
    }
    
    public function dairyindustry(){
        $title = "Industria lattiero-casearia: soluzioni di filtrazione per il settore lattiero-caseario" ;
        $description = "Da oltre 3 decenni, mmp è specializzata in soluzioni a membrana per l’industria lattiero-casearia, offrendo qualità, efficienza e innovazione." ;
        $ogimage = asset('public/front/images/filtration-for-the-modern-dairy-industry.png');
        return view('front.Dairy-Industry',compact('title', 'description', 'ogimage'));
    }
    

    
    public function oilindustry(){
        $title = "Soluzioni di filtrazione e separazione per petrolio e gas" ;
        $description = "mmp fornisce soluzioni di filtrazione specifiche per l’industria del petrolio e del gas, garantendo qualità del prodotto, protezione delle apparecchiature e conformità normativa." ;
         $ogimage = asset('public/front/images/oil-and-gas-industry-filtration.png');
        return view('front.oilindustry',compact('title', 'description', 'ogimage'));
    }
    
    public function cementindustry(){
        $title = "Soluzioni di filtrazione per l’industria del cemento" ;
        $description = "I sistemi mmp per l’industria del cemento catturano le particelle dalle emissioni gassose utilizzando sacchi filtranti pieghettati e cartucce, riducendo polvere ed emissioni." ;
        $ogimage = asset('public/front/images/cement-applications.png');
        return view('front.Cement-Industry',compact('title', 'description', 'ogimage'));
    }
    public function powerindustry(){
        $title = "Soluzioni di filtrazione per centrali elettriche: mmp Filter" ;
        $description = "mmp offre soluzioni di filtrazione complete per la produzione di energia, garantendo un trattamento efficiente dell’acqua e la massima chiarezza nei processi industriali critici." ;
        $ogimage = asset('public/front/images/filtration-solutions-for-power-plant.png');
        return view('front.powerplant',compact('title', 'description', 'ogimage'));
    }
     public function woundfiltercartridgemachine(){
        $title = "Macchina per cartucce filtranti avvolte | mmp Filter" ;
        $description = "La macchina per cartucce filtranti avvolte di mmp garantisce precisione, efficienza e durata, offrendo soluzioni di filtrazione di alta qualità per tutti i settori. Contattaci." ;
        $ogimage = asset('public/front/images/Wound_Filter_Cartridge_Machine-1.png');
        return view('front.Wound-Filter-Cartridge-Machine',compact('title', 'description', 'ogimage'));
    }
}
