<?php

namespace App\Http\Controllers;

use App\Lib\Scraper;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\BrowserKit\Client;
use Symfony\Component\BrowserKit\HttpBrowser;

class UsersController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $products = Product::join('product_user','product_user.product_id','=','products.id')
            ->where('user_id', '=', $user->id)
            ->get();
        $count_links = $products->count();

        return view('users.index',
            [
                'products' => $products,
                'count_links' => $count_links
            ]);
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
    public function changePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'password' => 'required|string|min:6|confirmed',
        ]);

        $user = Auth::user();

        if (!Hash::check($request->current_password, $user->password)) {
            return back()->with('error', 'Current password does not match!');
        }

        $user->password = Hash::make($request->password);
        $user->save();

        return back()->with('success', 'Password successfully changed!');
    }
    public function scrape(Request $request){
        if (!$request->link_id)
            return;


        $link = Product::find($request->link_id);

        try {


            $details = array();
            $client = new Client();

            $url = $link->link;
            $crawler = $client->request('GET', $url);
            $category = $crawler->filterXPath('//ol[@class=\'breadcrumb\']//li//a')->last()->text();
            //dd($category);
            $title = $crawler->filter('.page-title')->first()->text();
            $price_bgn = $crawler->filterXPath('//div[@class=\'product-highlight product-page-pricing\']//p[@class=\'product-new-price\']/text()')->first()->text();
            $price_stotinki = $crawler->filterXPath('//div[@class=\'product-highlight product-page-pricing\']//p[@class=\'product-new-price\']/sup/text()')->first()->text();
            //dd($price_stotinki);
            $price = (float)$price_bgn . '.' . $price_stotinki;

            //dd($price);
            $img = $crawler->filterXPath('//a[@class=\'thumbnail product-gallery-image gtm_rp125918\']//img/@src'
            )->first()->text();

            array_push($details, $title, $img, $price);
            $result = $this->return_result($details);
            return response($result, 200);
        } catch (\ErrorException $e) {
            $res = $client->getResponse();
            dd($res->getStatusCode());
            if ($res->getStatusCode() !== 200) {
                dd($res->getStatusCode());
                return $res->getStatusCode();
            }
        }
    }

    private function return_result($details)
    {
        $output = [];
        $output['title'] = $details[0];
        $output['img'] = $details[1];
        $output['price'] = $details[2];
        //dd($output);
        return $output;
    }

}
