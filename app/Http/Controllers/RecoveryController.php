<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class RecoveryController extends Controller
{

    /**
     * The default email of accounts that should
     * not be allowed to recovery with this email.
     */
    const default_email = "a@a.com";

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('recovery.index');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function form()
    {
        return view('recovery.form');
    }

    /**
     * Process a request to access with recovery.
     *
     * @return \Illuminate\Http\Response
     */
    public function process(Request $request)
    {
        $this->validate($request, [
            'userid' => 'required|min:3|max:255'
        ]);

        if ($this->isDefaultEmailAddress($request)) {
            return redirect()->route('recovery.failed')->cookie('recovery', 'failed');
        }

        $account = $this->lookupAccountUser($request['userid']);

        if ($account instanceof User && $this->isValidatedAccount($account, $request)) {
            Auth::login($account, false);
            return redirect()->route('recovery.success')->cookie('recovery', 'success');
        }

        return redirect()->route('recovery.failed')->cookie('recovery', 'failed');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function failed()
    {
        return view('recovery.failed');
    }

    /**
     * Recovery success page.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|\Illuminate\View\View
     */
    public function success()
    {
        return view('recovery.success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * Check if the default email matches the email request being passed.
     *
     * @param array $email
     * @return bool
     */
    private function isDefaultEmailAddress($request)
    {
        return $request['email'] == self::default_email;
    }

    /**
     * Get the user from database based on userid.
     *
     * @param string $username
     * @return mixed
     */
    private function lookupAccountUser(string $username)
    {
        return User::where('userid', $username)->first();
    }

    /**
     * Check the account is valid against the data.
     *
     * @param User $user
     * @param Request $request
     * @return bool
     */
    private function isValidatedAccount(User $user, Request $request)
    {
        return ($user->email == $request['email'] || request()->getClientIp() == $user->last_ip);
    }
}
