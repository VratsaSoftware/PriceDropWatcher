<?php
namespace App\Lib;


use Goutte\Client as GoutteClient;
use Symfony\Component\BrowserKit\HttpBrowser;

class Scraper
{
    protected $client;

    public $results = [];

    public $savedItems = 0;

    public $status = 1;

    public function __construct(GoutteClient $client)
    {
        $this->client = $client;
    }


}
