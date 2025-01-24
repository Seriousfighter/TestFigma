<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReviewRequest;
use App\Services\ReviewService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ReviewController extends Controller
{
    protected $reviewService;
    public function __construct(ReviewService $reviewService){
        $this->reviewService = $reviewService;
    }
    public function index(){
        try{
            }
        catch(\Exception $e){
            Log::info($e->getMessage());
        }
    }
    public function create(){}
    public function store(ReviewRequest $request){}
    public function show($id){}
    public function edit($id){}
    public function update(ReviewRequest $request, $id){}
}
