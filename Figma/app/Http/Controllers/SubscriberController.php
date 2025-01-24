<?php

namespace App\Http\Controllers;

use App\Http\Requests\SubscriberRequest;
use App\Jobs\SubscribeJob;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class SubscriberController extends Controller
{
    //
    public function store(SubscriberRequest $request){
        try{
        SubscribeJob::dispatch($request->validate());
        return redirect()->back();
        }catch(\Exception $e){
            Log::info($e->getMessage());
        }
    }
}
