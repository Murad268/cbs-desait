<?php

namespace App\Services;
use Exception;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;
class İmageService
{
    public function downloadImage($request, $path)
    {

        $img = $request;
        $extension = $img->getClientOriginalExtension();
        $randomName = Str::random(10);
        $imagePath = $path;
        $lastName = $randomName . "." . $extension;
        $lasPath = $imagePath . $randomName . "." . $extension;
    
        Image::make($img)->save($lasPath);
        return $lastName;
    }


}
