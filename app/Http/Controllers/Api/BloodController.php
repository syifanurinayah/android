<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Blood;
use App\Http\Controllers\Controller;
use App\Transformers\BloodTransformer;
use Auth;

class BloodController extends Controller
{
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

        $post->name         = $request->get('name', $post->name);
        $post->category_id  = $request->get('category_id', $post->category_id);
        $post->alamat       = $request->get('alamat', $post->alamat);
        $post->longitude    = $request->get('longitude', $post->longitude);
        $post->latitude     = $request->get('latutude', $post->latitude);
        $post->keterarangan = $request->get('keterangan', $post->keterangan);
        $post->save();

        return fractal()
            ->item($post)
            ->transformWith(new BloodTransformer)
            ->toArray();
    }

    public function delete(Blood $blodd)
    {

        $this->authorize('delete', $post);

        $post->delete();

        return response()->json([
            'message' => "Post Deleteed",
        ]);
    }
}
