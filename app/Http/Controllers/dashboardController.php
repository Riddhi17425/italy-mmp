<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Faq;
use App\Models\Product;
use App\Models\ProductTrust;
use App\Models\OurBrands;
use App\Models\Event;
use App\Models\Contact;
use App\Models\HeaderInquiry;
use App\Models\WhatsappInquiry;
use App\Models\Video;
use App\Models\CaseStudy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use DB;
use Illuminate\Support\Facades\Mail;
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
use App\Models\Career;

class dashboardController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function login(){
         return view('auth.login');
     }
     public function admin(){
         return view('admin.admin');
     }
    public function index()
    {
        $title = "mmp: Produttore di filato in PP e cartucce filtranti.";
        $description = "mmp, fondata nel 1994, è un rinomato produttore, fornitore ed esportatore di filato in PP, cartucce filtranti, sacche filtranti e filtri a filato PP in India.";
        $ogimage = asset('public/front/images/water-filter-cartridges.png');
    
        $data['producttrust'] = ProductTrust::where('is_delete','0')->get();
        $data['ourbrands'] = OurBrands::where('is_delete','0')->get();
        $data['event'] = Event::where('is_delete','0')->latest()->take(2)->get();
        $data['blog'] = DB::table('blog')
            ->where('is_delete', '0')
            ->where('status', 'Active')
            ->select('id', 'title', 'image','banner_image', 'short_description', 'publish_date', 'url','alt','alt_banner')
            ->orderBy('id', 'desc')
            ->take(3)
            ->get();
    

        $channelId = "UCZWezCSt2lwGIYdii8JS-rA";
        $feedUrl   = "https://www.youtube.com/feeds/videos.xml?channel_id={$channelId}";
    
        $videoList = [];
        $youtubeAvailable = false;
    
        $context = stream_context_create([
            'http' => [
                'timeout' => 5,
                'ignore_errors' => true
            ]
        ]);
    
        $feedContent = @file_get_contents($feedUrl, false, $context);
    
        if ($feedContent !== false) {
            libxml_use_internal_errors(true);
            $xml = simplexml_load_string($feedContent);
    
            if ($xml && isset($xml->entry)) {
                foreach ($xml->entry as $entry) {
                    $videoId = str_replace("yt:video:", "", (string) $entry->id);
    
                    $videoList[] = [
                        'title'     => (string) $entry->title,
                        'videoId'   => $videoId,
                        'published' => (string) $entry->published,
                        'embedUrl'  => "https://www.youtube.com/embed/{$videoId}",
                    ];
                }
    
                if (!empty($videoList)) {
                    $youtubeAvailable = true;
                }
            }
        }
    
        $data['video'] = collect($videoList)->sortByDesc('published');
        $data['youtubeAvailable'] = $youtubeAvailable;
    
        return view('front.dashboard', compact('data', 'title', 'description', 'ogimage'));
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
        //
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
 
    public function about(){
        $title = "mmp Filtration – Innovazione & Filtrazione Sostenibile";
        $description = "Dal 1994, mmp Filtration produce soluzioni sostenibili per l'acqua e l'aria certificate NSF, con installazioni in tutto il mondo e prodotti personalizzati.";
        $ogimage = asset('public/front/images/about-content.png');
        $data['ourbrands'] = OurBrands::where('is_delete','0')->get();
        return view('front.about',compact('data','title', 'description', 'ogimage'));
    } 
    // public function machinery()
    // {
       
    
    //     $title = "Prodotti per la filtrazione dell'acqua e dell'aria";
    //     $description = "MMP offre un'ampia gamma di prodotti per la filtrazione dell'acqua e dell'aria, progettati per soddisfare diverse esigenze di filtrazione. Scopri le nostre soluzioni e guarda i nostri video qui.";
    
    //     return view('front.Machinery-we-manufacture', compact('title', 'description'));
    // }
    public function machinery()
    {
        $channelId = "UCZWezCSt2lwGIYdii8JS-rA";
        $feedUrl   = "https://www.youtube.com/feeds/videos.xml?channel_id={$channelId}";
    
        $videos = [];
        $youtubeAvailable = false;
    
        // ---- SAFE HTTP FETCH ----
        $context = stream_context_create([
            'http' => [
                'timeout' => 5,
                'ignore_errors' => true
            ]
        ]);
    
        $feedContent = @file_get_contents($feedUrl, false, $context);
    
        if ($feedContent !== false) {
    
            libxml_use_internal_errors(true);
            $xml = simplexml_load_string($feedContent);
    
            if ($xml && isset($xml->entry)) {
                foreach ($xml->entry as $entry) {
                    $videoId = str_replace("yt:video:", "", (string) $entry->id);
    
                    $videos[] = [
                        'title'     => (string) $entry->title,
                        'videoId'   => $videoId,
                        'published' => (string) $entry->published,
                    ];
                }
    
                if (!empty($videos)) {
                    $youtubeAvailable = true;
                }
            }
        }
    
        $title = "Prodotti per la filtrazione dell'acqua e dell'aria";
        $description = "MMP offre un'ampia gamma di prodotti per la filtrazione dell'acqua e dell'aria, progettati per soddisfare diverse esigenze di filtrazione. Scopri le nostre soluzioni e guarda i nostri video qui.";
    
    
        return view(
            'front.Machinery-we-manufacture',
            compact('videos', 'youtubeAvailable', 'title', 'description')
        );
    }


    public function pph(){
        $title = "PPH One Piece Filter Housing: mmp Filter";
        $description = "Shop PPH One Piece Filter Housing from MMP Filter – a durable, high-performance industrial filtration solution made from premium polypropylene (PPH).";
        $ogimage = asset('public/front/images/PPH_One_Piece_Filter_Housing.png');
        return view('front.pph',compact('title', 'description', 'ogimage'));
    } 
    public function zerofoaming(){
        $title = "Zero Foaming Yarn | mmp filtration ";
        $description = "Leading PP Yarns Manufacturer mmp offers Zero Foaming Yarn for unmatched durability & performance. Choose our yarn solutions for industrial & commercial needs.";
        return view('front.zerofoaming',compact('title', 'description'));
    } 
     public function cartridges_in_usa(){
        $title = "Buy Water Filter Cartridges Online in USA | MMP®";
        $description = "Enjoy clean water with MMP®. From drinking water filters to industrial cartridges, MMP® delivers high-performance, reliable filtration solutions across USA.";
        $ogimage = asset('public/front/images/usa-images/melt-blown-filter-cartridges.jpg');
        return view('front.filter-cartridges-in-usa ',compact('title', 'description', 'ogimage'));
    } 
    public function certifications(){
        $title = "Le nostre certificazioni: mmp Filtration";
        $description = "mmp offre CARTUCCE MELT BLOWN certificate NSF – OCEANIC® e LAGOON® – conformi agli standard NSF/ANSI/CAN-61 e 372 per sistemi di acqua potabile sicuri.";
        $data['certificates'] = DB::table('certificate')->where('is_delete','0')->orderBy('id', 'desc')->get();
        //dd($data['certificates']);
        return view('front.certifications',compact('data','title', 'description'));
    } 

       public function blog(){
        $title="Latest Blog on Water & Air Filter Cartridges";
        $description="Read our latest blog to discover everything you need to know about water and air filter cartridges, their types, uses, and benefits for various applications."; 
        $blog = DB::table('blog')->where('is_delete', '0')->where('status', 'Active')->select('id', 'title', 'image','banner_image', 'short_description', 'publish_date', 'url','alt')->orderBy('id', 'desc')->get();
        $ogimage = asset('public/front/images/Blog.jpg');
        //dd($blog);
        return view('front.blog', compact('blog', 'title', 'description', 'ogimage'));
    }

    public function blogdetail($url){
        $data = DB::table('blog')
        ->leftjoin('faq', 'faq.blog_id', '=', 'blog.id')
        ->where('blog.url', $url)
        ->get();
       
        $blogdetail = $data[0];
        //dd($blogdetail);
        $title = $blogdetail->meta_title;
        $description = $blogdetail->meta_description;
        $og_image = $blogdetail->og_image;
        return view('front.blog-detail',compact('blogdetail', 'title', 'description','og_image')); 
    } 
    public function contact(){
        $title = "Contattaci per qualsiasi tipo di esigenza di filtrazione";
        $description = "Hai domande su cartucce o contenitori filtranti? MMP Filtration è qui per aiutarti con supporto e soluzioni specialistiche. Contattaci oggi stesso!";
        $productname = Product::where('is_delete', '0')->get();
        //dd($productname);
        return view('front.contact',compact('productname','title', 'description'));
    } 
     public function pp_yarn_in_usa(){
        $title = "Polypropylene Yarn | PP Yarn in USA";
        $description = "We offer a wide range of PP yarns in the USA for industries like water treatment, air filtration, pharmaceuticals, and chemical processing.";
        $ogimage = asset('public/front/images/usa-images/Core-Spun-Yarn.png');
        return view('front.pp-filtration-yarn-in-usa',compact('title', 'description', 'ogimage'));
    }
    public function melt_cartridges_in_usa(){
        $title = "Melt Blown Filter Cartridges | PP Spun Cartridge Filter";
        $description = "Looking for quality melt-blown filter cartridges? MMP Filter is your reliable supplier of high-demonstrated melt-blown filter cartridges";
        $ogimage = asset('public/front/images/melt-blown-filter-cartridges_1.jpg');
        return view('front.melt-blown-filter-cartridges-in-usa',compact('title', 'description', 'ogimage'));
    } 
     public function wound_cartridges_in_usa(){
        $title = "Wound Filter Cartridges | String-Wound Filter Cartridges";
        $description = "MMP wound filter cartridges deliver reliable filtration for water, food, chemical, and petroleum industries to meet strict American standards.";
         $ogimage = asset('public/front/images/usa-images/wound-filter-cartridges.jpg');
        return view('front.wound-filter-cartridges-in-usa',compact('title', 'description', 'ogimage'));
    } 
    public function wound_cartridges_machine_in_usa(){
        $title = "Wound Filter Cartridges Machine in USA";
        $description = "mmp’s advanced wound filter-making machine produces filters in various sizes and materials, offering customizable solutions tailored for USA businesses.";
        $ogimage = asset('public/front/images/usa-images/WoundFilter_product.jpg');
        return view('front.wound-filter-cartridges-machine-in-usa',compact('title', 'description', 'ogimage'));
    }
   
    public function mrb(){
        $title = "";
        $description = "";
        return view('front.mrb',compact('title', 'description'));
    } 
    public function mab(){
        $title = "";
        $description = "";
        return view('front.mab',compact('title', 'description'));
    }
    public function career(){
        $title = "";
        $description = "";
        $productname = Product::where('is_delete', '0')->get();
        return view('front.career',compact('productname','title', 'description'));
    }
    public function partnership(){
        $title = "Opportunità di partnership: mmp Filtration";
        $description = "Con oltre 30 anni di esperienza, MMP è leader nel settore della filtrazione in India, offrendo materie prime per cartucce filtranti avvolte, apprezzate per qualità e innovazione.";
        $productname = Product::get();
        //dd($productname);
        return view('front.partnership',compact('productname','title', 'description'));
    } 

    public function contactstore(Request $request) {
    $rules = [
        'name' => 'required',
        'email' => 'required|email',
        'product_type' => 'required',
        'phone' => 'required',
        'message' => 'required',
    ];

    $messages = [
        'name.required' => 'Please enter a Name.',
        'email.required' => 'Please enter Email.',
        'email.email' => 'The email must be a valid email address.',
        'product_type.required' => 'Please enter Product Type.',
        'phone.required' => 'Please enter Phone No..',
        'message.required' => 'Please enter Message.',
    ];

    $validator = Validator::make($request->all(), $rules, $messages);
    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }

    $timestamp = Carbon::now()->format('Y-m-d H:i:s');

    Contact::create([
        'name' => $request->name,
        'email' => $request->email,
        'product_type' => $request->product_type,
        'phone' => $request->phone,
        'company_name' => $request->company_name,
        'city' => $request->city,
        'message' => $request->message,
        'created_at' => $timestamp,
    ]);

    $sheetsData = [
        'from_type' => "Contact inquiry",
        'name' => $request->name,
        'email' => $request->email,
        'product' => $request->product_type,
        'phone' => $request->phone,
        'company_name' => $request->company_name,
        'city' => $request->city,
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



    public function event(){
        $title="MMP Filtration | Eventi e Fiere";
        $description="Scopri gli ultimi eventi, fiere e vetrine di settore di mmp Filtration. Rimani aggiornato su innovazioni, partnership e partecipazioni globali."; 
        $event = Event::where('is_delete','0')->orderBy('id', 'DESC')->get();
        return view('front.event',compact('event', 'title', 'description'));
    } 
    public function thankyou(){
        $title = "";
        $description = "";
        return view('front.thank-you',compact('title', 'description'));
    } 
    

    public function headerinquiry(Request $request)
    {
        // Simple honeypot to prevent spam bots
        if ($request->filled('website_url')) {
            return redirect()->back()->withErrors(['spam' => 'Spam detected'])->withInput();
        }
    
        $rules = [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'product_type' => 'required|string|max:255',
            'phone' => 'required|string|min:10|max:15',
            'company_name' => 'nullable|string|max:255',
            'message' => 'nullable|string|max:1000',
        ];
    
        $messages = [
            'name.required' => 'Per favore inserisci il Nome.',
            'name.string' => 'Il nome deve essere un testo valido.',
            'email.required' => 'Per favore inserisci l\'Email.',
            'email.email' => 'L\'email deve essere un indirizzo valido.',
            'product_type.required' => 'Per favore seleziona il Tipo di Prodotto.',
            'phone.required' => 'Per favore inserisci il Numero di Telefono.',
            'phone.string' => 'Il numero di telefono deve essere valido.',
        ];

    
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
    
        $timestamp = Carbon::now()->format('Y-m-d H:i:s');
    
        HeaderInquiry::create([
            'name' => $request->name,
            'email' => $request->email,
            'product_type' => $request->product_type,
            'phone' => $request->phone,
            'company_name' => $request->company_name,
            'message' => $request->message,
            'created_at' => $timestamp,
        ]);
    
        $sheetsData = [
            'from_type' => 'home inquiry',
            'name' => $request->name,
            'email' => $request->email,
            'product' => $request->product_type,
            'phone' => $request->phone,
            'company_name' => $request->company_name,
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

    public function whatsaapinquiry(Request $request)
    {
        WhatsappInquiry::create([
            'message' => $request->message,
            'number' =>  $request->number,
        ]);
    
        $timestamp = Carbon::now()->format('Y-m-d H:i:s');
    
        $sheetsData = [
            'from_type' => 'whatsapp inquiry',
            'message' => $request->message,
            'contact' => $request->number,
            'formattedDate' => $timestamp,
        ];
    
        // Send to Google Sheets
        try {
            Http::withHeaders(['Content-Type' => 'application/json'])
                ->post('https://script.google.com/macros/s/AKfycbxDicdm1Gw3w6-SrEhclAXbJ18Kfmhg3jUhKXCJg2NviqikZJiP8-T61sSXMLnXfBBs/exec', $sheetsData);
        } catch (\Exception $e) {
            \Log::error('Google Sheets Exception (WhatsApp Inquiry):', [
                'message' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
                'data_sent' => $sheetsData
            ]);
        }
    
        $number = '919830030614'; // Or use $request->number if needed
        $message = 'Inquiry from the website.';
        $whatsappUrl = "https://api.whatsapp.com/send/?phone={$number}&text=" . urlencode($message) . "&type=phone_number&app_absent=0";
    
        return redirect()->away($whatsappUrl);
        
    
    }

    public function landingpage(){
        return view('front.landing-page');
    }
    
    public function landingStore(Request $request){
         $rules = [
        'fname' => 'required',
        'email' => 'required',
        'product_type' => 'required',
        'contact_number' => 'required',
    ];

    $messages = [
        'fname.required' => 'The name field is required.',
        'email.required' => 'The email field is required.',
        'email.email' => 'The email field must be a valid email address.',
        'contact_number.required' => 'The phone field is required.',
        'product_type.required' => 'The Product Type field is required.',
    ];

    $validator = Validator::make($request->all(), $rules, $messages);

    if ($validator->fails()) {
        return redirect()->back()
            ->withErrors($validator)
            ->withInput();
    }
     $info = [
        'fname' => $request->fname,
        'email' => $request->email,
        'contact_number' => $request->contact_number,
        'product_type' => $request->product_type,
        'message' => $request->message,
    ];
     
        DB::table('inquiries')->insert($info);
        
        $client = new Client();
        $response = $client->post('https://sheetdb.io/api/v1/r4cbm3fs0b05j', [
            'json' => [$info]
        ]);
        $responseData = json_decode($response->getBody(), true);
    
        if ($responseData['created'] == 1) {
            return redirect()->route('thank-you')->with('success', 'Your inquiry was sent successfully.');
        } else {
            return redirect()->back()->with('error', 'Failed to submit your message. Please try again later.');
        }
    }
    
    public function careerstore(Request $request)
    {
        $rules = [
            'name' => 'required',
            'email' => 'required|email',
            'product_type' => 'required',
            'phone' => 'required|min:11',
            'message' => 'required',
            'filename' => 'required|file|mimes:pdf,doc,docx|max:25600', // 25MB
            'g-recaptcha-response' => 'required|captcha',
        ];
    
        $messages = [
            'name.required' => 'Please enter a Name.',
            'email.required' => 'Please enter Email.',
            'email.email' => 'The email must be a valid email address.',
            'product_type.required' => 'Please enter Product Type.',
            'phone.required' => 'Please enter Phone No..',
            'phone.min' => 'Phone number must be at least 10 digits.',
            'message.required' => 'Please enter Message.',
            'filename.required' => 'Please upload your resume.',
            'filename.mimes' => 'Only PDF, DOC, and DOCX files are allowed.',
            'filename.max' => 'File must be less than 25MB.',
            'g-recaptcha-response.required' => 'Please complete the CAPTCHA.',
            'g-recaptcha-response.captcha' => 'CAPTCHA validation failed.',
        ];
    
        $validator = Validator::make($request->all(), $rules, $messages);
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
    
        $filename = null;
        if ($request->hasFile('filename')) {
            $file = $request->file('filename');
            $filename = time() . '_' . preg_replace('/\s+/', '_', $file->getClientOriginalName());
            $file->move(public_path('uploads/cv'), $filename);
        }
    
        $career = Career::create([
            'name' => $request->name,
            'email' => $request->email,
            'product_type' => $request->product_type,
            'phone' => $request->phone,
            'message' => $request->message,
            'filename' => $filename,
        ]);
    
        // Google Sheets API
        $sheetsData = [
            'from_type' => "Career inquiry",
            'name' => $request->name,
            'email' => $request->email,
            'product' => $request->product_type,
            'phone' => $request->phone,
            'message' => $request->message,
            'formattedDate' => now()->format('Y-m-d H:i:s'),
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
    
    public function testmail()
    {
        try {
            Mail::raw('This is a test mail from MMP Filter.', function ($message) {
                $message->to('webdeveloper3.intelliworkz@gmail.com')
                        ->subject('Test Mail');
            });
    
            return 'Mail sent successfully!';
        } catch (\Exception $e) {
            \Log::error('Mail sending failed: ' . $e->getMessage());
            return 'Mail sending failed: ' . $e->getMessage();
        }
    }

    public function casestudy(){
        // return 111;
        $title="Casi di studio | Esplora le nostre storie di successo";
        $description="Scopri i nostri casi di studio che illustrano le soluzioni di filtrazione e l'esperienza impeccabile dei nostri clienti nei sistemi di filtrazione dell'acqua e dell'aria."; 
        $casestudy = DB::table('casestudy')->where('is_delete', '0')->select('id', 'title', 'image','banner_image', 'short_description', 'long_description', 'url','alt')->orderBy('id', 'desc')->get();
        
        return view('front.casestudy', compact('casestudy', 'title', 'description'));
    }

    public function casestudydetail($url)
    {
        $casestudydetail = CaseStudy::where('is_delete', '0')->where('url', $url)->first();
    
        if (!$casestudydetail) {
            abort(404);
        }
    
        $title = $casestudydetail->meta_title ?? '';
        $description = $casestudydetail->meta_description ?? '';
    
        return view('front.casestudy-detail', compact('casestudydetail', 'title', 'description'));
    }

}
