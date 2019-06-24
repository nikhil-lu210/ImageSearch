<?php

namespace App\Http\Controllers\Frontend\Nikhil\ImageSearch;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Frontend\Nikhil\ImageSearch\NikhilImageSearch;

class ImageSearchController extends Controller
{

    private $imageSearch;

    public function __construct(){
        $this->imageSearch = New NikhilImageSearch();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images = $this->imageSearch->all();
        $datas = array();
        foreach($images as $key =>$image){
            $datas[$key] = base64_decode($image->avatar);
        }

        return view('frontend.nikhil.index')->withImages($images)->withDatas($datas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('frontend.nikhil.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $image = new NikhilImageSearch();

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
        return redirect()->route('nikhil.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $nikhils = $this->imageSearch->orderBy('id', 'desc')->get();

        return view('frontend.nikhil.show')->withNikhils($nikhils);
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
        $image_data=file_get_contents($request->imageSearch);
        $encoded_image=base64_encode($image_data);

        $nikhils = $this->imageSearch->where('avatar', 'like', '%'.$encoded_image.'%')->orderBy('id','desc')->get();

        return view('frontend.nikhil.show')->withNikhils($nikhils);
    }


    // Name Search
    public function nameSearch(Request $request){

        $nikhils = $this->imageSearch->where('name', 'like', '%'.$request->name.'%')
                            // ->orWhere('nid', 'like', '%'.$request->search.'%')
                            // ->orWhere('phone', 'like', '%'.$request->search.'%')
                            ->orderBy('id', 'desc')
                            ->get();
        return view('frontend.nikhil.show')->withNikhils($nikhils);
    }

    // nid Search
    public function nidSearch(Request $request){

        $nikhils = $this->imageSearch->where('nid', 'like', '%'.$request->nid.'%')
                            ->orderBy('id', 'desc')
                            ->get();
        return view('frontend.nikhil.show')->withNikhils($nikhils);
    }

    // phone Search
    public function phoneSearch(Request $request){

        $nikhils = $this->imageSearch->where('phone', 'like', '%'.$request->phone.'%')
                            ->orderBy('id', 'desc')
                            ->get();
        return view('frontend.nikhil.show')->withNikhils($nikhils);
    }
}
