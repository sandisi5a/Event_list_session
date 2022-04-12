<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class EventController extends Controller
{
        public function index()
        {
            $event = \App\event::all();
            return view('event.index', ['event' => $event]);
        }
        public function create(Request $request)
        {
            $event = \App\Event::create($request->all());
            if($request->hasFile('gambars')){
                $request->file('gambars')->move('images/',$request->file('gambars')->getClientOriginalName());
                $event->gambars = $request->file('gambars')->getClientOriginalName();
                $event->save();
            
                 }
             return redirect('/event')->with('sukses','Sukses di simpan');
        }
        public function delete($id)
        {
            DB::table('event')->where('id', $id)->delete();
            return redirect('/event ')->with('delete','Sukses di Delete');
        } 
        public function edit($id)
        {
            $event = \App\event::find($id);
            return view('event/Edit', ['event'=>$event]);
        }
        public function update(Request $request,$id )
        {
            $event = \App\event::find($id);
            $event ->update($request->all());
            if($request->hasFile('gambars')){
                $request->file('gambars')->move('images/',$request->file('gambars')->getClientOriginalName());
                $event->gambars = $request->file('gambars')->getClientOriginalName();
                $event->save();
            
                 }
            return redirect('/event')->with('update','Data berhasil diupdate');
        }
    }       

