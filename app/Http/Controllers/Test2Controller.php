<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Goutte\Client;
use Symfony\Component\DomCrawler\Crawler;

class Test2Controller extends Controller
{
    public function index()
    {
    	$client = new Client();

        $url = 'https://www.technopolis.bg/bg/Ofis-stolove/GAMING-KRESLO-HAVIT-NF-8561/p/521425';
        $crawler = $client->request('GET', $url);
        $price_bgn = $crawler->filterXPath('//div[@class=\'product-price\']//p[@class=\'price\']//span[@class=\'price-value\']')->first()->text();

           // $img = $crawler->filterXPath('//div[class=\'product-image\']//a[@id=\'galleryImagesLisnk\']//p//img[@class=\'image lazyloaded\']//img/@src')->first()->text();

         $img = $crawler->filterXPath('//img[@class=\'image lazyloaded\']/@src')->first()->text();
       
        dd($img);
        //dd($price_bgn);

        
    }
}
