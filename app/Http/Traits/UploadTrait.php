<?php

namespace App\Http\Traits;

use Illuminate\Support\Facades\Storage;

trait UploadTrait
{
    public function uploadFile($request, $image)
    {
        $directory = "public/".$image;
        $file = $request->file($image);
        $path = $file->store($directory);
        $url = Storage::url($path);

        return $url;
    }
}