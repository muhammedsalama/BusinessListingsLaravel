<?php

namespace App\Http\Controllers;

use App\Listing;
use Illuminate\Http\Request;

class ListingsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth',['except'=> ['index','show']]); //(so important)
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('createListing');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request,[
           'name'=>'required',
            'email'=> 'required|email'
        ]);

        $listing = new Listing();
        $listing->name = $request->name;
        $listing->email = $request->email;
        $listing->website = $request->website;
        $listing->address = $request->address;
        $listing->phone = $request->phone;
        $listing->bio = $request->bio;
        $listing->user_id = auth()->user()->id;

        $listing->save();

        return redirect('dashboard')->with('success','Listing Added ');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $listing = Listing::find($id);
        return view('edit',compact('listing'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate($request,[
            'name'=>'required',
            'email'=> 'required|email'
        ]);

        $listing = Listing::findOrFail($id);
        $listing->name = $request->name;
        $listing->email = $request->email;
        $listing->website = $request->website;
        $listing->address = $request->address;
        $listing->phone = $request->phone;
        $listing->bio = $request->bio;

        $listing->save();

        return redirect('dashboard')->with('success','Listing Updated ');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $listing = Listing::findOrFail($id);
        $listing->delete();
        return redirect('dashboard')->with('success','Listing Deleted');
    }

    public function createListing($user_id,$name,$address,$website,$email,$phone,$bio){
        $listing = new Listing();
        $listing->create(['user_id'=>$user_id,'name'=>$name,'address'=>$address,'website'=>$website,'email'=>$email,'phone'=>$phone,'bio'=>$bio]);
        return 'Done!';
    }

}
