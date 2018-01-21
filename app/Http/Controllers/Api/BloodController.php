<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Blood;
use App\Http\Controllers\Controller;
use App\Transformers\BloodTransformer;
use Auth;

class BloodController extends Controller{
    public function add(Request $request, Blood $blood)
    {
    	$this->validate($request, [
    		'name'	       => 'required',
            'category_id'  => 'required',
            'alamat'       => 'required',
            'no_tlp'       => 'required',
            'keterangan'   => 'required'
    	]);

    	$blodd = $blood->create([
            'name'          => $request->name,
            'category_id'   => $request->category_id,
            'alamat'        => $request->alamat,
            'no_tlp'        => $request->no_tlp,
            'longitude'     => $request->longitude,
            'latitude'      => $request->latitude,
            'keterangan'    => $request->keterangan,
    	]);

    	$response = fractal()
    		->item($blood)
    		->transformWith(new BloodTransformer)
    		->toArray();

    		return response()->json($response, 201);
    }

    public function update(Request $request, Blood $blood)
    {
        $this->authorize('update', $blood);

        $blood->name         = $request->get('name', $blood->name);
        $blood->category_id  = $request->get('category_id', $blood->category_id);
        $blood->alamat       = $request->get('alamat', $blood->alamat);
        $blood->longitude    = $request->get('longitude', $blood->longitude);
        $blood->latitude     = $request->get('latutude', $blood->latitude);
        $blood->keterarangan = $request->get('keterangan', $blood->keterangan);
        $blood->save();

        return fractal()
            ->item($blood)
            ->transformWith(new BloodTransformer)
            ->toArray();
    }

    public function delete(Blood $blood)
    {

        $this->authorize('delete', $blood);

        $blood->delete();

        return response()->json([
            'message' => "Post Deleteed",
        ]);
    }
}
