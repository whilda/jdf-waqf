<?php

namespace App\Http\Controllers;
use App\Models\Campaign;
use Symfony\Component\BrowserKit\HttpBrowser;
use Symfony\Component\HttpClient\HttpClient;

class DashboardController extends Controller
{
    public function index()
    {
        $rate = DashboardController::get_jpy_to_idr();

        // Dashboard
        $query = Campaign::all();
        $donor = $query->sum('donor');
        $sum_rupiah = $query->sum('donation');
        $sum_yen = $sum_rupiah / $rate['rate'];

        $data['donation-date'] = $rate['date'];
        $data['donation-idr'] = 'Rp. ' . number_format($sum_rupiah, 0, ',', '.');
        $data['donation-jpy'] = '￥ ' . number_format($sum_yen, 2, ',', '.');
        $data['donation-rate'] = 'Rp. ' . number_format($rate['rate'], 2, ',', '.');
        $data['donor'] = number_format($donor, 0, ',', '.');

        // adaorangbaik.com
        $query = Campaign::where('platform', 'adaorangbaik.com');
        $donor = $query->sum('donor');
        $sum_rupiah = $query->sum('donation');
        $sum_yen = $sum_rupiah / $rate['rate'];

        $data['adaorangbaik-crawl-date'] = date('Y-m-d', strtotime($query->latest('updated_at')->first()['updated_at']));
        $data['adaorangbaik-donation-idr'] = 'Rp. ' . number_format($sum_rupiah, 0, ',', '.');
        $data['adaorangbaik-donation-jpy'] = '￥ ' . number_format($sum_yen, 2, ',', '.');
        $data['adaorangbaik-donor'] = number_format($donor, 0, ',', '.');

        // amalsholeh.com
        $query = Campaign::where('platform', 'amalsholeh.com');
        $donor = $query->sum('donor');
        $sum_rupiah = $query->sum('donation');
        $sum_yen = $sum_rupiah / $rate['rate'];

        $data['amalsholeh-crawl-date'] = date('Y-m-d', strtotime($query->latest('updated_at')->first()['updated_at']));
        $data['amalsholeh-donation-idr'] = 'Rp. ' . number_format($sum_rupiah, 0, ',', '.');
        $data['amalsholeh-donation-jpy'] = '￥ ' . number_format($sum_yen, 2, ',', '.');
        $data['amalsholeh-donor'] = number_format($donor, 0, ',', '.');

        return view('dashboard', compact('data'));
    }

    public function get_jpy_to_idr(){
        $browser = new HttpBrowser(HttpClient::create());
        $crawler = $browser->request('GET', 'https://wise.com/gb/currency-converter/jpy-to-idr-rate');

        $data['date'] = date('Y/m/d');
        $data['rate'] = 112;
        return $data;
    }

    public function sandbox()
    {
        return response()->json(DashboardController::get_jpy_to_idr());
    }
}
