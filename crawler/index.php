<?php
/**
 * Created by PhpStorm.
 * User: bbbbbbbk
 * Date: 2018-10-12
 * Time: 16:55
 */
require_once __DIR__ . '/vendor/autoload.php';

use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;

run();
function run()
{
    $url = "http://www.cnblogs.com/jackiebao/";
    $headers = [
        'user-agent' => 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36',
    ];
    $client = new Client([
        'timeout' => 20,
        'headers' => $headers
    ]);

    $response = $client->request('GET', $url)->getBody()->getContents();

    $data = [];
    $crawler = new Crawler();
    $crawler->addHtmlContent($response);

    try{
        $crawler->filterXPath('//div[contains(@class, "forFlow")]/div[contains(@class, "day")]')->each(function(Crawler $node, $i) use (&$data){
            $item = [
                'date' => $node->filterXPath('//div[contains(@class, "dayTitle")]/a')->text(),
                'title' => $node->filterXPath('//div[contains(@class, "postTitle")]/a')->text(),
                'abstract' => $node->filterXPath('//div[contains(@class, "postCon")]/div')->text(),
            ];
            $data[] = $item;
        });
    }catch (\Exception $e){

    }
    print_r($data);
}

