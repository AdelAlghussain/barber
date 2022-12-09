<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use App\Http\Requests\StoreOfferRequest;
use App\Http\Requests\UpdateOfferRequest;
use App\Http\Resources\offerResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File; 
use Illuminate\Support\Facades\Storage;

class OfferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $offers = Offer::get();
        return view('dashboard.offer.offers')->with('offers', $offers);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function offers()
    {
        $offers = Offer::get();
        return OfferResource::collection($offers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add(StoreOfferRequest $request)
    {

        $path = $this->AddImage('offers', $request->image);

        Offer::create([
            'title' => $request->title,
            'price' => $request->price,
            'description' => $request->description,
            'offer_photo_path' => $path

        ]);
        return redirect('/offers');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.offer.addoffer');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Offer  $Offer
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Offer = Offer::findOrFail($id);
        return view('dashboard.offer.editoffer', ['offer' => $Offer]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Offer  $Offer
     * @return \Illuminate\Http\Response
     */
    public function update(Offer $offer, StoreOfferRequest $request)
    {

        $this->DeleteImage($offer->offer_photo_path);
        $path = $this->AddImage('offers', $request->image);


        $offer->update([
            'title' => $request->title,
            'price' => $request->price,
            'description' => $request->description,
            'offer_photo_path' => $path

        ]);
        return redirect('/offers');
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Offer  $Offer
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Offer =  Offer::find($id);
        $this->DeleteImage($Offer->offer_photo_path);
        $Offer->delete();
        
        return redirect('/offers');
    }

    public function AddImage($folder, $file)
    {
        $folder = 'storage/' . $folder;
        $filename  = time() . str_replace(' ', '', $file->getClientOriginalName());
        $path = $file->move($folder,  $filename);
        // $url = asset($path);
        return $path;
    }

    public function DeleteImage($file)
    {
        File::delete($file);
    }
}
