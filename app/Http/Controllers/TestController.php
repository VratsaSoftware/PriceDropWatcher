<?php

namespace App\Http\Controllers;

use App\Test;
use Illuminate\Http\Request;
use Goutte\Client;

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
        $url = 'https://www.technomarket.bg/telefoni/samsung-galaxy-s21-ultra-256gb-black-g998-ds-09185498';
        $crawler = $client->request('GET', $url);

        //dd($crawler);
        dd($crawler->filterXPath('//div  [@class=\'product-price-retail_promo\']/text()')->first()->text());
      
        $price = $crawler->filterXPath('//div [@class=\'product-price-retail_promo\']/text()')->first()->text();
        dd($price);
    }

    
}
