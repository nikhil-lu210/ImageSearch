<?php

namespace App\Http\Controllers\Frontend\Pias\ImageSearch;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Frontend\Pias\ImageSearch\PiasImageSearch;

class ImageSearchController extends Controller
{
    private $imageSearch;

    public function __construct(){
        $this->imageSearch = New PiasImageSearch();
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $results = $this->imageSearch->orderBy('id', 'desc')->get();

        return view('frontend.pias.index')->withResults($results);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('frontend.pias.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $image = new PiasImageSearch();

        if($request->hasFile('avatar')){
            $image_data=file_get_contents($request->avatar);

            $encoded_image=base64_encode($image_data);

            $image->avatar = $encoded_image;
        }

        $image->name = $request->name;
        $image->nid = $request->nid;
        $image->phone = $request->phone;

        // dd($image);
        $image->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $results = $this->imageSearch->orderBy('id', 'desc')->get();

        return view('frontend.pias.show')->withResults($results);
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
    }


    // Image Search
    public function imageSearch(Request $request){
        $image_data=file_get_contents($request->image);
        $encoded_image=base64_encode($image_data);

        $results = $this->imageSearch->where('avatar', 'like', '%'.$encoded_image.'%')->orderBy('id','desc')->get();

        return view('frontend.pias.show')->withResults($results);
    }


    // basic Search
    public function basicSearch(Request $request){

        $results = $this->imageSearch->where('name', 'like', '%'.$request->basic.'%')
                            ->orWhere('nid', 'like', '%'.$request->basic.'%')
                            ->orWhere('phone', 'like', '%'.$request->basic.'%')
                            ->orderBy('id', 'desc')
                            ->get();
        return view('frontend.pias.show')->withResults($results);
    }
}
