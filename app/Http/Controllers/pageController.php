<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\baseController;

class pageController extends baseController{

public function __construct(){
 $featureRooms = [
  [
    "roomName"=>"Deluxe Rooms",
    "roomRoute"=>"deluxe"
  ],

  

 ];
View::share("featureRooms",$featureRooms);  

}

    // homepage one
    public function index(){

return $this->view("index");
    }

    // homepage two
    public function indexTwo()
    {
        return $this->view('index-2');
    }

    // Homepage Three
    public function indexThree()
    {
        return $this->view('index-3');
    }

    // Homepage Four
    public function indexFour()
    {
        return $this->view('index-4');
    }

    // Homepage Five
    public function indexFive()
    {
        return $this->view('index-5');
    }

    // Homepage Six
    public function indexSix()
    {
        return $this->view('index-6');
    }

    // Homepage Seven
    public function indexSeven()
    {
        return $this->view('index-7');
    }

    // Homepage Eight
    public function indexDark()
    {
        return $this->view('index-dark');
    }

    // Homepage Nine
    public function indexVideo()
    {
        return $this->view('index-video');
    }

    // room one page
    public function roomOne(){
        return $this->view('room-one');
    }

    // room two page
    public function roomTwo()
    {
        return $this->view('room-two');
    }

    // room three page
    public function roomThree()
    {
        return $this->view('room-three');
    }

    // room four page
    public function roomFour()
    {
        return $this->view('room-four');
    }

    // Room Detail page
    public function roomDetailSOne()
    {
        return $this->view('room-details-1');
    }

    // Room Detail page
    public function roomDetailSTwo()
    {
        return $this->view('room-details-2');
    }

    // About
    public function about()
    {
        return $this->view('about');
    }

    // Restaurant
    public function resturant()
    {
        return $this->view('resturant');
    }

    // Gallery
    public function gallery()
    {
        return $this->view('gallery');
    }

    // Service
    public function service()
    {
        return $this->view('service');
    }

    // Event
    public function event()
    {
        return $this->view('event');
    }

    // Contact
    public function activities()
    {
        return $this->view('activities');
    }

    // blog page
    public function blog()
    {
        return $this->view('blog');
    }

    // blog details page
    public function blogDetails()
    {
        return $this->view('blog-details');
    }

    // Contact
    public function contact()
    {
        return $this->view('contact');
    }
}
