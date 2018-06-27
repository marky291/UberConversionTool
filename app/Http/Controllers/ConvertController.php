<?php

namespace App\Http\Controllers;

use App\Classes\Conversions;
use App\Classes\DonationItems;
use App\Interfaces\ItemInterface;
use App\Jobs\ProcessItemConversion;
use App\LoginBG;
use App\UberBalance;
use App\UberTransactions;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ConvertController extends Controller
{
    public function __construct()
    {
        $this->middleware(['check.player.level', 'check.player.state']);
    }

    /**
     * Convet all items belonging to an account.
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function checkout(Request $request)
    {

        $data = $request->validate([
            'username' => 'required|min:3|max:255',
            'password' => 'required|min:3|max:255',
            'checked' => 'requured|'
        ]);

        $data['password'] = XileroPasswordGenerator($data['username'], $data['password']);

        $receiver = LoginBG::where(['userid' => $data['username'], 'user_pass' => $data['password']])->first();

        if (!$receiver) {
            return redirect()->route('overview')->withErrors(['username' => "Account information incorrect or does not exist for username {$data['username']}"]);
        }

        // generate the conversion tool.
        $conversion = new Conversions(auth()->user()->getInventory(), app(DonationItems::class));

        /**
         * We only want to add points for those that actually get deleted.
         */
        foreach ($conversion->items as $item) {
            ProcessItemConversion::dispatch(auth()->user(), $receiver, $item);
        }

        // return back with confirmation message
        return redirect()->route('overview')->with(['confirmation' => "A Request has been made to process your items!"]);
    }
}
