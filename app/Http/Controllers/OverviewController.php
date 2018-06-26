<?php

namespace App\Http\Controllers;

use App\Classes\Conversions;
use App\Classes\DonationItems;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OverviewController extends Controller
{
    public function index()
    {
        $characterCount = auth()->user()->getCharacterCount();

        $inventoryCount = auth()->user()->getInventoryCount();

        $convertable = new Conversions(auth()->user()->getInventory(), app(DonationItems::class));

        return view('character.overview', compact(['inventoryCount', 'characterCount', 'convertable']));
    }
}
