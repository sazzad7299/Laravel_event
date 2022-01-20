<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Str;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Event;

use File;

class EventController extends Controller
{
    public function allEvent()
    {
        $events =Event::all();
      
        return view('backend.event.index',compact('events'));
    }
    public function addeventForm()
    {
        $parent_categories = Category::where('parent_id',NULL)->orderBy('title','ASC')->get();
        $message = "No parent category";
        
        return view('backend.event.create',compact('parent_categories','message'));
    }
    public function storeEvent(Request $request)
    {
       
        $request->validate([
            'title'=>'required|unique:events,title',
            'image'=>'required',
            'start_date'=>'required|after_or_equal:today',
            'end_date'=>'required|after:start_date',


        ]);
       
        $event = new Event();
     
        if ($request->image) {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $name = time() . '-' . $event->id . '.' . $ext;
            $path = "images/event";
            $file->move($path, $name);
            
        }
         
         
        $event->title = $request->title;
        $event->detail = $request->detail;
        $event->venue = $request->venue;
        $event->end_date = $request->end_date;
        $event->start_date = $request->start_date;
        $event->seat = $request->seat;



        $event->image = $name;
        $event->status = $request->status;
        $event->category_id = $request->category_id;
        $event->save();
        return back()->with('success','Event added successfully');

    }
   
    public function eventEdit ($id)
    {
        $categories = Category::where('parent_id',NULL)->orderBy('title','ASC')->get();

        $event = Event::find($id);
       return view('backend.event.edit',compact('event','categories'));
    }
    public function eventUpdate(Request $request, $id)
    {
        $request->validate([
            'title'=>'required',

        ]);
       
        $event = Event::find($id);
        $event->title = $request->title;
        $event->detail = $request->detail;
        $event->venue = $request->venue;
        $event->end_date = $request->end_date;
        $event->start_date = $request->start_date;
        $event->seat = $request->seat;

        $event->status = $request->status;
        $event->category_id = $request->category_id;
        $event->save();
     
        if ($request->image) {
            if(File::exists('images/event/'.$event->image)){
                File::delete('images/event/'.$event->image);
            }

            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $name = time() . '-' . $event->id . '.' . $ext;
            $path = "images/event";
            $file->move($path, $name);
            $event->photo = $name;
            $event->image = $name;


            
        }        
     
       
        $event->save();
        return redirect()->route('allEvent')->with('success','Event update successfully');;
    }
    public function viewEvent($id=null)
    {
        $eventCount = Event::where(['id'=>$id, 'status'=>1])->count();
        if($eventCount==0){
            abort(404);
        }

        $eventDetails = Event::where(['id'=>$id])->count();
        $eventDetails=json_decode(json_encode($eventDetails));
        

        
        if($eventDetails==0){
            abort(404);
        }
        $eventDetails =  Event::where(['id'=>$id])->first();
        // echo "<pre>"; print_r($eventDetails);die;
        return view('singleevent')->with(compact('eventDetails'));
    }
    public function deleteEvent($id)
    {
        $event = Event::find($id)->delete();
        return back()->with('error','Event delete successfully');

    }

}
