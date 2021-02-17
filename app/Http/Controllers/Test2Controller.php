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

        $url = ['https://www.technopolis.bg/bg/Ofis-stolove/GAMING-KRESLO-HAVIT-NF-8561/p/521425','https://www.technopolis.bg/bg/Ofis-stolove/GAMING-KRESLO-CANYON-Fobos-CND-SGCH3/p/527445','https://www.technopolis.bg/bg/Peralni-s%C3%A0s-Sushilni/Peralnya-s%C3%A0s-Sushilnya-CANDY-CSOW-4855-TWE-1-S/p/688928','https://www.technopolis.bg/bg/Aksesoari/-CALGON-500g/p/838800','https://www.technopolis.bg/bg/Laptopi/Laptop-LENOVO-IdeaPad-5-IdeaPad-5-15ITL05-82FG0097BM/p/518333'];
        // $crawler = $client->request('GET', $url);
        // $price_bgn = $crawler->filterXPath('//div[@class=\'product-price\']//p[@class=\'price\']//span[@class=\'price-value\']')->first()->text();

           // $img = $crawler->filterXPath('//div[class=\'product-image\']//a[@id=\'galleryImagesLisnk\']//p//img[@class=\'image lazyloaded\']//img/@src')->first()->text();

         //$img = $crawler->filterXPath('//img[@class=\'image lazyloaded\']/@src')->first()->text();
       
        //dd($img);
        //dd($price_bgn);
        for ($i=0; $i < 2000; $i++) { 
             for ($j=0; $j < 5; $j++) { 
                $crawler = $client->request('GET', $url[$j]);
                $price_bgn[] = $crawler->filterXPath('//div[@class=\'product-price\']//p[@class=\'price\']//span[@class=\'price-value\']')->first()->text();
             }
        }

        dd($price_bgn);

        
    }
}
