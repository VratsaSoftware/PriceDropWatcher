<?php

use Illuminate\Support\Facades\Route;
use Goutte\Client;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products/{id}/price', function () {
    $client = new Client();
    $crawler = $client->request('GET', 'https://www.emag.bg/prahosmukachka-stick-2-v-1-philips-powerpro-duo-18-v-0-6-l-tehnologija-powercyclone-siva-fc6168-01/pd/DWJPLBBBM/?ref=prod_CMP-26852_4145_44681');
    $crawler->filter('.page-title')->each(function ($node) {

        dump($node->text());

    });
   // $crawler->filterXPath('//div[@class=\'product-highlight product-page-pricing\']//p[@class=\'product-new-price\']/text()')->each(function ($node) {

        //dump($node->text());

    //});
    echo "title:{$crawler->filter('.page-title')->first()->text()}";

    $price_bgn = $crawler->filterXPath('//div[@class=\'product-highlight product-page-pricing\']//p[@class=\'product-new-price\']/text()')->first()->text();

    $price_stotinki = $crawler->filterXPath('//div[@class=\'product-highlight product-page-pricing\']//p[@class=\'product-new-price\']/sup/text()')->first()->text();
    //dd($price_stotinki);
    $price = (float)$price_bgn . '.' .$price_stotinki;
    echo "<p>price:{$price}</p>";
    dd($price);

});
