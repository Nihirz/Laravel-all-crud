<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Index;

class IndexController extends Controller
{
    public function view()
    {
        $index = Index::get();
        return view('welcome',compact('index'));
    }
    public function store(Request $request)
    {
        $index = new Index();
        $index->name=$request->input('name');
        $index->email=$request->input('email');
        $index->password=$request->input('password');
        $index->gender=$request->input('gender');
            // foreach($request->hobby as $key => $hobby){
            //     $index = [
            //         'hobby'=>$request->checkbox[$key]
            //     ];        
            // };
        $arrayTostring =  implode(",", $request->input('hobby'));
        $index['hobby'] = $arrayTostring;
        $index->city=$request->input('city');
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $imageName = time().'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('/uploads'), $imageName);
            $index->image = $imageName;
        }
        else
        {
            return $request;
            $index->image = '';
        }
        $index->save();
        $request->session()->flash('message','Data Uploded Successfully.');
        return redirect()->back()->with('success', 'Product Inserted Successfully!');
    }
    public function edit(Request $request,$id)
    {
        $index =Index::where('id',$id)->first();
        
        // dd($index);
        return view('EditIndex',compact('index'));
    }
    public function update(Request $request)
    {
         // dd($request);
        $index =Index::find($request->id);

        $index->name=$request->input('name');
        $index->email=$request->input('email');
        $index->password=$request->input('password');
        $index->gender=$request->input('gender');
        // dd($index);
        $arrayTostring =  implode(",", $request->input('hobby'));
        $index['hobby'] = $arrayTostring;
        dd($arrayTostring);
        $index->city=$request->input('city');
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $imageName = time().'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('/uploads'), $imageName);
            $index->image = $imageName;
        }
        else
        {
            $id = $request->id;
            $update = [  
            'name'=>$request->name,
            'email'=>$request->email,
           
     ];
     $file   = $request->file("image");
        if ($request->hasfile("image")) {
        $file->move("/upload", $file->getClientOriginalName());
        $update['image'] = $file->getClientOriginalName();
        }
        Index::where('id', $id)->update($update);
        return redirect()->route('index')->with('success', 'edit product Updated Successfully!');

            return $request;
            $index->image = '';
        }
        $index->save();
        return redirect()->route('index')->with('success', 'edit product Updated Successfully!');
    }
    public function delete(Request $request,$id)
    {
        Index::where('id',$id)->delete();
        return redirect()->route('index')->with('warning','Team Deleted successfully!');
    }
}
