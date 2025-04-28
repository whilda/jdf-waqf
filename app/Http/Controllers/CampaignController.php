<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use Illuminate\Http\Request;

class CampaignController extends Controller
{
    // Define the index method
    public function adaorangbaik_index()
    {
        // Fetch all products from the database
        $Campaigns = Campaign::all();
        // Pass the products data to the view
        return view('adaorangbaik', compact('Campaigns'));
    }

    public function adaorangbaik_insert(Request $request)
    {
        $campaign = new Campaign();
        $campaign->platform = $request->input('platform');
        $campaign->title = $request->input('title');
        $campaign->url = $request->input('url');
        $campaign->donation = $request->input('donation');
        $campaign->donor = $request->input('donor');
        $campaign->due_date = $request->input('due_date');
        $campaign->status = $request->input('status');
        $campaign->save();

        return CampaignController::adaorangbaik_index();
    }
}
