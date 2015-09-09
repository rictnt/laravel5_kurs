<?php

namespace App\Http\Controllers\Scraper;

use Illuminate\Http\Request;

use Goutte\Client;
use Symfony\Component\DomCrawler\Crawler;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ScraperController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {

        $client = new Client();

        $client->setClient(new \GuzzleHttp\Client([
                \GuzzleHttp\RequestOptions::VERIFY => base_path().'/resources/cacert.pem',
        ]));

        $crawler = $client->request('GET', 'http://www.google.pl/search?q=nepras.pl');

        $linki = $crawler->filter('div.kv cite')->each(function (Crawler $node) {
                return $node->text();
        });

        return response()->json($linki);
           // return $searchImg;
           // 
           // 
           // 
           // 
           // 
           // 
//                    $idcaptcha = $request->input('idcaptcha');
//        $codecaptcha = $request->input('codecaptcha');
//        
//        $client = new Client();
//        $crawler;
//        
//        $client->setClient(new \GuzzleHttp\Client([
//                \GuzzleHttp\RequestOptions::VERIFY => base_path().'/resources/cacert.pem',
//        ]));
////        $client->setHeader('User-Agent', "Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2403.130 Safari/537.36");
////        $client->setHeader('Host', "www.google.pl:443");
////        $client->setHeader('Accept', "text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8");
////        $client->setHeader('Accept-Language', "pl-PL,pl;q=0.8,en-US;q=0.6,en;q=0.4");
////        $client->setHeader('Accept-Encoding', "gzip, deflate, sdch");
////        $client->setHeader('Accept-Charset', "ISO-8859-1,utf-8;q=0.7,*;q=0.7");
//        $client->setHeader('Cookie', "CONSENT=YES+PL.pl+20150628-20-0; PREF=ID=1111111111111111:FF=0:LD=pl:TM=1432644702:LM=1437734772:V=1:S=RRpfqt2e_sxty4VY; OGPC=4061130-21:5061590-5:5061586-2:5061614-5:; GOOGLE_ABUSE_EXEMPTION=ID=627efac7f77e19da:TM=1439361413:C=c:IP=83.1.94.2-:S=APGng0tqPDgYuPgrDIvBAFw9FrxFpNr8GQ; NID=70=kcr5NSQqSueSiU4uDU7FcZk8cspS0WJNpkyGu6SacSsMvdKChiRkCWczVziWld9A7Hz0L6qqmn1qQj1rvFwux48LOrIdu7k_wCAkzOmdnRtspMAkSFCwIkWZVHJzB48P");
////        $client->setHeader('X-Client-Dat', "CJe2yQEIpLbJAQiptskBCMS2yQEI8YjKAQj9lcoB");
//        
//
//        
//        
//        if (!$idcaptcha || !$codecaptcha)
//        {
//            //for ($i=0 ; $i < 100 ; $i++)
//            //{
//                //echo 't';
//                 $crawler = $client->request('GET', 'https://www.google.pl/search?q=sagrol');
//                 //$request->getHeaderLine('Cookie');
//                 var_dump($client->getCookieJar());
//                 //var_dump($client);
//                    
//            //}
//           
//            
//        } else 
//        {
//            echo $idcaptcha;
//            echo $codecaptcha;
//            $requestSearch = 'https%3A%2F%2Fwww.google.pl%2Fsearch%3Fq%3Dsagrol.pl';
//            $urlGoogleCaptcha = 'https://www.google.pl/sorry/CaptchaRedirect?continue=' . 
//                    $requestSearch . '&id=' .
//                    $idcaptcha . '&captcha=' . 
//                    $codecaptcha . '&submit=Prze%C5%9Blij';
//            $crawler = $client->request('GET', $urlGoogleCaptcha . ' HTTP/1.1');
//            echo '<br>' . $urlGoogleCaptcha;
//            echo '<br>' . $crawler->html();
//        }
//        
//
//        $linki = $crawler->filter('div.kv cite')->each(function (Crawler $node) {
//                return $node->text();
//        });
//        
//        if (!$linki)
//        {
//            $imgHtml = array();
//            $inputId = array();
//            
//            $searchImg = $crawler->filter('body > div')->first()->html();
/*/*
//            preg_match('/<img.*?>/', $searchImg, $imgHtml);
//            preg_match('/<input type="hidden" name="id" .*?>/', $searchImg, $inputId);
//            preg_match('/\d+/', $inputId[0], $inputId);
//            
//            $imgHtml = str_replace("<img src=\"/","<img src=\"https://www.google.pl/",$imgHtml);
//         
//            return $imgHtml[0] . '
//                <form method="POST" action="/scraper">
//                    ' . csrf_field() . '
//                    Id Captcha
//                    <input type="text" name="idcaptcha" value="' . $inputId[0] . '">
//                    Kod obrazka
//                    <input type="text" name="codecaptcha" value="">
//                    <button type="submit">Dalej</button>
//                </form>
//            ';
//        }
//        var_dump($linki);
//      //return response()->json($linki);
        }
        
        return response()->json($linki); */ 
    }
    
    public function indexPost()
    {

            $requestSearch = 'https%3A%2F%2Fwww.google.pl%2Fsearch%3Fq%3Dnepras.pl';
            $idCaptcha = '15356788665411863446';
            $codeCaptcha = 'tioni';
            $urlGoogleCaptcha = 'https://www.google.pl/sorry/CaptchaRedirect?continue=' . 
                    $requestSearch . '&id=' .
                    $idCaptcha . '&captcha=' . 
                    $codeCaptcha . '&submit=Prze%C5%9Blij';
            
            Return 'post';
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
