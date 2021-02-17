<?php

namespace App\Http\Controllers;

use App\Test;
use Illuminate\Http\Request;
use Goutte\Client;
use Symfony\Component\DomCrawler\Crawler;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.s
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $client = new Client();

        $url = ['https://www.emag.bg/prahosmukachka-stick-2-v-1-philips-powerpro-duo-18-v-0-6-l-tehnologija-powercyclone-siva-fc6168-01/pd/DWJPLBBBM/?ref=prod_CMP-26852_4145_44681','https://www.emag.bg/peralnja-indesit-7-kg-1200-ob-min-klas-a-mytime-fast-cycles-bjal-mtwe71252wee/pd/DZFHH3MBM/?ref=hp_prod-widget_flash_deals_1_3&provider=site','https://www.emag.bg/poluavtomatichna-peralnja-heinner-6-5-kg-4-6-kg-bjala-sinja-hswm-ad65bl/pd/D01F5JBBM/?ref=other_customers_viewed_go_2_5&provider=rec&recid=rec_52_2adfe70868396b580687dae09d43adc41af548e6b22b31aa5f6ef79978678f1c_1613052996&scenario_ID=52','https://www.emag.bg/peralnja-mini-lamarque-lwm-25140-73505/pd/DRB0J3BBM/?ref=graph_profiled_similar_1_5&provider=rec&recid=rec_49_f55594f91a1667e3f34caf8e4bf99dea00fed6345bd8648e55dd8b71e3507f05_1613053019&scenario_ID=49','https://www.emag.bg/bezzhichna-mishka-gaming-logitech-g604-lightspeed-hero-16k-dpi-cherna-910-005649/pd/DJ83D8BBM/?ref=others_also_viewed_1_5&provider=rec&recid=rec_43_8112a5fbe83f454e62eb96a39e5227bee9247b63d81793a54cb31bb626525f13_1613068891&scenario_ID=43',];
       
        //dd($url);
        //$crawler = $client->request('GET', $url);
        for ($i=0; $i < 2; $i++) { 
             for ($j=0; $j < 5; $j++) { 
                $crawler = $client->request('GET', $url[$j]);
                $price_bgn[] = $crawler->filterXPath('//p[@class=\'product-new-price\']/text()')->first()->text();
             }
        }

        dd($price_bgn);

    }

    
}
