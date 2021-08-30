<?php

namespace App\Http\Controllers;

use App\Lib\Scraper;
use App\Product;
use App\Website;
use Goutte\Client;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'link' => 'required|url',
        ]);

        $link = $request->link;
        $domain = $this->getDomain($link);

        $website = Website::where('domain', '=', $domain)->first();

        if ($website === null) {
            return redirect()->back()->with('error','This website is missing in database ');
        }else{
            $website_id=$website->id;

            $product = Product::create(['website_id' => $website_id, 'link' => $link]);
            $user = Auth::user();
            $product->users()->attach($user);
            return redirect()->route('dashboard')
                ->with('success','Product created successfully.');
        }


    }

    /**
     * Display the specified resource.
     *
     * @param Product $product
     * @return Response
     */
    public function show(Request $request,Product $product)
    {
        $get_data = $this->scrape($request)->content();

        $data = json_decode($get_data, true);
        //dd($data);
        return view('products.single_product', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Product $product
     * @return Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Product $product
     * @return Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Product $product
     * @return Response
     */
    public function destroy(Product $product)
    {
        //
    }
    public function getDomain($link)
    {
        return parse_url($link, PHP_URL_HOST);
    }
    public function scrape(Request $request)
    {

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


        } catch (ErrorException $e) {
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
