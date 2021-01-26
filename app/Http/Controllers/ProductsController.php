<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Goutte\Client;
class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        $client = new Client();
        $crawler = $client->request('GET', 'https://www.emag.bg/prahosmukachka-stick-2-v-1-philips-powerpro-duo-18-v-0-6-l-tehnologija-powercyclone-siva-fc6168-01/pd/DWJPLBBBM/?ref=prod_CMP-26852_4145_44681');
        // $crawler->filter('.page-title')->each(function ($node) {
        // dump($node->text());
        //});
        // $crawler->filterXPath('//div[@class=\'product-highlight product-page-pricing\']//p[@class=\'product-new-price\']/text()')->each(function ($node) {

        //dump($node->text());

        //});
        $title = $crawler->filter('.page-title')->first()->text();

        $price_bgn = $crawler->filterXPath('//div[@class=\'product-highlight product-page-pricing\']//p[@class=\'product-new-price\']/text()')->first()->text();
        $price_stotinki = $crawler->filterXPath('//div[@class=\'product-highlight product-page-pricing\']//p[@class=\'product-new-price\']/sup/text()')->first()->text();
        //dd($price_stotinki);
        $price = (float)$price_bgn . '.' . $price_stotinki;

        //dd($price);
        $img = $crawler->filterXPath('//a[@class=\'thumbnail product-gallery-image gtm_rp125918\']//img/@src'
        )->first()->text();
        return view('products.single_product', compact('title', 'price', 'img'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
