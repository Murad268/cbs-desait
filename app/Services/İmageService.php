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

    public function updateImage($request, $path, $check, $hasElement) {
        $randomName = Str::random(10);
        $imagePath =  $path;

        if ($request->hasFile($check)) {
            if (file_exists($imagePath .  $hasElement)) {
                unlink($imagePath .  $hasElement);
            }
            $img = $request->$check;
            $extension = $img->getClientOriginalExtension();
            $lastName = $randomName . "." . $extension;
            $lasPath = $imagePath . $randomName . "." . $extension;
            Image::make($img)->save($lasPath);
        } else {
            $lastName =   $hasElement;
        }
  
        return $lastName;
    }


    public function deleteImage($path, $element) {
        if (file_exists($path .  $element)) {
            unlink($path .  $element);
        }
    }
}
