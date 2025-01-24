<?php
namespace App\Services;

use App\Models\Subscriber;

class SubscriberService{
    public function store($data){
        $subscriber = new Subscriber();
        $subscriber->email = $data['email'];
        $subscriber->save();
    }
}