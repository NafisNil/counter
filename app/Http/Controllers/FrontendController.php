<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Slider;
use App\Models\Location;
use App\Models\Event;
use App\Models\Privacy;
use App\Models\Term;
use App\Models\Refund;
class FrontendController extends Controller
{
    //
    public function index()
    {
        //
        $data['about'] = About::first();
        $data['slider_first'] = Slider::orderBy('id','desc')->first();
        $count = Slider::count();
        $skip = 1;
        $limit = $count - $skip; // the limit
        $data['location'] = Location::first();
        $data['slider'] = Slider::orderBy('id','desc')->skip($skip)->take($limit)->get();
       // 
        return view('frontend.index', $data);
       
    }

    public function event(){
        $data['location'] = Location::first();
        $data['event'] = Event::orderBy('id','desc')->get();
        return view('frontend.event', $data);
    }

    public function event_filter(Request $request){
        $id = $request->type;
        $data['location'] = Location::first();
        $data['event'] = Event::where('type',$id)->orderBy('id','desc')->get();
        return view('frontend.event', $data);
    }
    
    public function event_details($id){
        $data['location'] = Location::first();
        $data['event'] =  Event::where('id',$id)->first();
        return view('frontend.event_details', $data);
    }

    public function about(){
        $data['location'] = Location::first();
        $data['about'] =  About::orderBy('id','desc')->first();
        return view('frontend.about_us', $data);
    }

    public function privacy(){
        $data['location'] = Location::first();
        $data['privacy'] =  Privacy::orderBy('id','desc')->first();
        return view('frontend.privacy', $data);
    }

    public function terms(){
        $data['location'] = Location::first();
        $data['term'] =  Term::orderBy('id','desc')->first();
        return view('frontend.term', $data);
    }

    public function refund(){
        $data['location'] = Location::first();
        $data['refund'] =  Refund::orderBy('id','desc')->first();
        return view('frontend.refund', $data);
    }
}
