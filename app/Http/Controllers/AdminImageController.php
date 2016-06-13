<?php

namespace App\Http\Controllers;

use App\Artigo;
use App\Image;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;


class AdminImageController extends Controller
{
    private $artigo;
    private $image;

    public function __construct(Artigo $artigo, Image $image)
    {
        $this->artigo = $artigo;
        $this->image = $image;
    }

    public function index($id)
    {
        $artigo = $this->artigo->find($id);

        return view('admin.images.index', compact('artigo'));
    }

    public function createImage($id)
    {
        $artigo = $this->artigo->find($id);

        return view('admin.images.create', compact('artigo'));
    }

    public function storeImage(Request $request, $id, Image $image)
    {
        $file = $request->file('image');

        $extension = $file->getClientOriginalExtension();

        $image = $image::create(['artigo_id'=> $id, 'extension' => $extension ]);

        Storage::disk('public_local')->put($image->id.'.'.$extension, File::get($file));

        return redirect()->route('images.index',['id' => $id]);

    }

    public function destroyImage(Image $image, $id)
    {
        $image = $image->find($id);

        if(file_exists(public_path('uploads/'.$image->id.'.'.$image->id)))
        {
            Storage::disk('public_local')->delete($image->id.'.'.$image->extension);

        }

        $product = $image;
        $image->delete();

        return redirect()->route('images.index', ['id' => $image->artigo_id]);

    }
}
