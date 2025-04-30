<?php

namespace App\Http\Controllers;
use App\Models\Campaign;

class DashboardController extends Controller
{
    public function index()
    {
        $rate = 117.49;
        $date = '2025/04/30';

        // Dashboard
        $query = Campaign::all();
        $donor = $query->sum('donor');
        $sum_rupiah = $query->sum('donation');
        $sum_yen = $sum_rupiah / $rate;

        $data['donation-date'] = $date;
        $data['donation-idr'] = 'Rp. ' . number_format($sum_rupiah, 0, ',', '.');
        $data['donation-jpy'] = '￥ ' . number_format($sum_yen, 2, ',', '.');
        $data['donation-rate'] = 'Rp. ' . number_format($rate, 2, ',', '.');
        $data['donor'] = number_format($donor, 0, ',', '.');

        // adaorangbaik.com
        $query = Campaign::where('platform', 'adaorangbaik.com');
        $donor = $query->sum('donor');
        $sum_rupiah = $query->sum('donation');
        $sum_yen = $sum_rupiah / $rate;

        $data['adaorangbaik-donation-idr'] = 'Rp. ' . number_format($sum_rupiah, 0, ',', '.');
        $data['adaorangbaik-donation-jpy'] = '￥ ' . number_format($sum_yen, 2, ',', '.');
        $data['adaorangbaik-donor'] = number_format($donor, 0, ',', '.');

        // amalsholeh.com
        $query = Campaign::where('platform', 'amalsholeh.com');
        $donor = $query->sum('donor');
        $sum_rupiah = $query->sum('donation');
        $sum_yen = $sum_rupiah / $rate;

        $data['amalsholeh-donation-idr'] = 'Rp. ' . number_format($sum_rupiah, 0, ',', '.');
        $data['amalsholeh-donation-jpy'] = '￥ ' . number_format($sum_yen, 2, ',', '.');
        $data['amalsholeh-donor'] = number_format($donor, 0, ',', '.');

        return view('dashboard', compact('data'));
    }
}
