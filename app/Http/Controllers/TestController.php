<?php

namespace App\Http\Controllers;

use App\Test;
use Illuminate\Http\Request;
use Goutte\Client;
use Symfony\Component\DomCrawler\Crawler;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $client = new Client();

        $url = 'https://www.emag.bg/prahosmukachka-stick-2-v-1-philips-powerpro-duo-18-v-0-6-l-tehnologija-powercyclone-siva-fc6168-01/pd/DWJPLBBBM/?ref=prod_CMP-26852_4145_44681';

        // $url = 'https://www.technomarket.bg/telefoni/samsung-galaxy-s21-ultra-256gb-black-g998-ds-09185498';
        // $url = 'https://www.technopolis.bg/bg/Televizori/Televizor-SONY-KD-75XH8096-4K-Ultra-HD-LED/p/13756';

        $crawler = $client->request('GET', $url);
        $price = $crawler->filterXPath('//div[@class=\'product-highlight product-page-pricing\']//p[@class=\'product-new-price\']/text()')->first()->text();

        //dd($crawler);
        //dd($crawler->filterXPath('//div  [@class=\'product-price-retail_promo\']/text()')->first()->text());
        $crawler->filterXPath('//div[@class=\'product-price\']//p[@class=\'price\']//span[@class\'price-value\']/text()')->first()->text();
        dd($price);
      
        // $price = $crawler->filterXPath('//div [@class=\'product-price-retail_promo\']/text()')->first()->text();
        //dd($price);


    //     $html = <<<'HTML'
    //         <!DOCTYPE html>
    //         <html>
    //             <body>
    //                 <p class="message">Hello World!</p>
    //                 <p>Hello Crawler!</p>
    //             </body>
    //         </html>
    //     HTML;

    //     $crawler = new Crawler($html);

    //     foreach ($crawler as $domElement) {
    //         var_dump($domElement->nodeName);
    //     }
    //     dd($crawler->filter('body > p')->first()->text());
    }

    
}
