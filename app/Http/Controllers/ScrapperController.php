<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Goutte\Client;
use Spatie\Crawler\Crawler;
use Spatie\Browsershot\Browsershot;
use Symfony\Component\HttpClient\HttpClient;

class ScrapperController extends Controller
{
    
   private $jobRole= [];
   private $companyInfo =[];
   
   public function crawled(){
        $err = 1;
        $url = 'https://in.indeed.com/jobs?q=Computer&vjk=315fd84083db6dee';
        $client = new Client(HttpClient::create(['timeout' => 93]));
        $crawler = $client->request('GET', $url);
        
        $crawler->filter('h2 > a')->each(function ($item) {
            array_push($this->jobRole , $item->text());
        });

        $client = new Client();
        $crawler = $client->request('GET', $url);
        $crawler->filter('.companyInfo')->each(function ($item) {
            array_push($this->companyInfo , $item->text());
        });

         $jobRole = $this->jobRole;
         $companyInfo = $this->companyInfo;
        //    print_r($jobRole);
        //    print_r($companyInfo);

           if ( count($jobRole) == count($companyInfo)){
              $combine = array_combine($jobRole,$companyInfo); 
              return view('latestnews',compact('combine')); 
           }
           else{
                return view('latestnews',compact('err'));
           }
          //$combine = array_combine($jobRole,$companyInfo);
         
        
        
    }
}