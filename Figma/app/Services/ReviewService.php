<?php
namespace App\Services;

use App\Models\Review;
use App\Models\Subscriber;

class ReviewService{
    public function findByid($id){
        return Review::findOrfail($id);
    }
    public function index(){
        return Review::all();
    }
    public function store($data){
        $review = new Review();
        $review->name = $data['name'];
        $review->points = $data['points'];
        $review->description = $data['description'];
        $review->save();
    }
    public function update($data, $id){
        $review = $this->findById($id);
        $review->name = $data['name'];
        $review->points = $data['points'];
        $review->description = $data['description'];
        $review->save();
    }
    public function delete($id){
        $review = $this->findById($id);
        $review->delete();
    }
}