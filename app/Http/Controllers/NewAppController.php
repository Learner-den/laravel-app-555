<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Scope;
use Illuminate\Support\Facades\Auth;
use App\Models\App;
use Illuminate\Support\Str;
use App\Traits\Responses;
use App\Http\Resources\NewAppResource;


class NewAppController extends Controller
{
    use Responses;


    public function createAppForm(Request $request)
    {
        $scopes = Scope::get();
        return view('newapps.create-app-form', ['scopes' => $scopes]);
    }

    //Store in database
    public function createApp(Request $request)
    {

        $appData['user_id'] = Auth::user()->id;
        $appData["name"] = $request->name;
        $appData['client_id'] = Str::random(40);
        $appData['client_secret'] = Str::random(40);
        $appData["redirect_uri"] = $request->redirect_uri;
        $appData["scopes"] = json_encode($request->scopes);

        $data = App::create($appData);
        //use the following response in case of api
        // return $this->success($data, 'App created successfully', 200);

        return back()->with('success', 'Thank you for registering your app with us');

    }

    //Getting App against a user
    public function getApp()
    {
        $app = App::whereUserId(Auth::user()->id)->first();
        if ($app == null) {
            return $this->error(null, 'App Doesnot Exists!', 404);
        }

        $data = new NewAppResource($app);

        // return $this->success(['App' => $data], 'App fetched successfully', 200);

        return view('newapps.app', ['app' => $app]);
    }

}