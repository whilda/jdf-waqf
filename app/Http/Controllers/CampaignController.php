<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\JsonResponse;
use Symfony\Component\BrowserKit\HttpBrowser;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\DomCrawler\Crawler;

class CampaignController extends Controller
{
    // adaorangbaik web scrapping
    public function adaorangbaik_index()
    {
        // Fetch all products from the database
        $Campaigns = Campaign::where('platform', 'adaorangbaik.com')->get();
        // Pass the products data to the view
        return view('adaorangbaik', compact('Campaigns'));
    }

    public function adaorangbaik_insert(Request $request)
    {
        $campaign = new Campaign();
        $campaign->platform = 'adaorangbaik.com';
        $campaign->title = 'T.B.D';
        $campaign->url = $request->input('url');
        $campaign->donation = 0;
        $campaign->donor = 0;
        $campaign->status = 'T.B.D';
        $campaign->save();

        return CampaignController::adaorangbaik_index();
    }

    public function adaorangbaik_crawl()
    {
        set_time_limit(300);
        $campaigns = Campaign::where('platform', 'adaorangbaik.com')->get();
        foreach ($campaigns as $campaign) {
            $scrap = CampaignController::adaorangbaik_crawl_detail($campaign->url);
            $model = Campaign::where('url', $campaign->url)->first();
            $model['title'] = $scrap['title'];
            $model['donation'] = $scrap['donation'];
            $model['donor'] = $scrap['donor'];
            $model['status'] = $scrap['status'];
            $model->update();
        }
        $ret['status'] = 'done';
        return response()->json($ret);
    }

    public function adaorangbaik_crawl_detail($url){
        $browser = new HttpBrowser(HttpClient::create());

        $crawler = $browser->request('GET', $url);

        $campaign['url'] = $url;
        $campaign['title'] = $crawler->filter('.title')->text();
        $campaign['donation'] = preg_replace('/\D/', '', $crawler->filter('.d_total')->text());
        $campaign['donor'] = preg_replace('/\D/', '', $crawler->filter('.d_target_graph')->text());

        // Decode Due Date
        $decoded = json_decode('"' . $crawler->filter('.d_date')->text() . '"');
        $cleaned = str_replace("\u{00A0}", ' ', $decoded);
        if ($cleaned == "sudah berakhir") {
            $campaign['status'] = 'Close';
        } else {
            $campaign['status'] = 'Ongoing';
        }

        return $campaign;
    }

    // amalsholeh api request
    public function amalsholeh_index()
    {
        // Fetch all products from the database
        $Campaigns = Campaign::where('platform', 'amalsholeh.com')->get();
        // Pass the products data to the view
        return view('amalsholeh', compact('Campaigns'));
    }

    public function amalsholeh_insert(Request $request)
    {
        $campaign = new Campaign();
        $campaign->platform = 'amalsholeh.com';
        $campaign->title = 'T.B.D';
        $campaign->url = $request->input('url');
        $campaign->donation = 0;
        $campaign->donor = 0;
        $campaign->status = 'T.B.D';
        $campaign->save();

        return CampaignController::amalsholeh_index();
    }

    public function amalsholeh_crawl()
    {
        set_time_limit(300);
        $campaigns = Campaign::where('platform', 'amalsholeh.com')->get();
        foreach ($campaigns as $campaign) {
            $scrap = CampaignController::amalsholeh_crawl_detail($campaign->url);
            $model = Campaign::where('url', $campaign->url)->first();
            $model['title'] = $scrap['title'];
            $model['donation'] = $scrap['donation'];
            $model['donor'] = $scrap['donor'];
            $model['status'] = $scrap['status'];
            $model->update();
        }
        $ret['status'] = 'done';
        return response()->json($ret);
    }

    public function amalsholeh_crawl_detail($url){
        $response = Http::get($url);
        $campaign['url'] = $url;

        if ($response->successful()) {
            $api = $response->json();

            $campaign['title'] = $api['name'] ?? 'Name not found';
            $campaign['donation'] = $api['collect_amount'] ?? 0;
            $campaign['donor'] = 0;

            $status = $api['target_type'] ?? 'Not Found';
            if ($status == "unlimited") {
                $campaign['status'] = 'Ongoing';
            } else {
                $campaign['status'] = 'Close';
            }
        } else {
        }
        return $campaign;
    }

    // baznasjabar web scrapping
    public function baznasjabar_index()
    {
        // Fetch all products from the database
        $Campaigns = Campaign::where('platform', 'baznasjabar.org')->get();
        // Pass the products data to the view
        return view('baznasjabar', compact('Campaigns'));
    }

    public function baznasjabar_insert(Request $request)
    {
        $campaign = new Campaign();
        $campaign->platform = 'baznasjabar.org';
        $campaign->title = 'T.B.D';
        $campaign->url = $request->input('url');
        $campaign->donation = 0;
        $campaign->donor = 0;
        $campaign->status = 'T.B.D';
        $campaign->save();

        return CampaignController::baznasjabar_index();
    }

    public function baznasjabar_crawl()
    {
        set_time_limit(300);
        $campaigns = Campaign::where('platform', 'baznasjabar.org')->get();
        foreach ($campaigns as $campaign) {
            $scrap = CampaignController::baznasjabar_crawl_detail($campaign->url);
            $model = Campaign::where('url', $campaign->url)->first();
            $model['title'] = $scrap['title'];
            $model['donation'] = $scrap['donation'];
            $model['donor'] = $scrap['donor'];
            $model['status'] = $scrap['status'];
            $model->update();
        }
        $ret['status'] = 'done';
        return response()->json($ret);
    }

    public function baznasjabar_crawl_detail($url){
        $browser = new HttpBrowser(HttpClient::create());

        $crawler = $browser->request('GET', $url);

        $campaign['url'] = $url;
        $campaign['title'] = $crawler->filter('.container h2')->first()->text();
        $campaign['donation'] = preg_replace('/\D/', '',  $crawler->filter('#sidebar-campaign h3')->first()->text());
        $campaign['donor'] = 0;

        // Decode Due Date
        $string = json_decode('"' . $crawler->filter('#sidebar-campaign .d-flex.justify-content-between span')->last()->text() . '"');
        if ($string == "sudah berakhir") {
            $campaign['status'] = 'Close';
        } else {
            $campaign['status'] = 'Ongoing';
        }

        return $campaign;
    }
}
