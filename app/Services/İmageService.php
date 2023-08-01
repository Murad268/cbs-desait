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

    public function updateImage($request, $path, $check, $element, $hasElement) {

        $randomName = Str::random(10);
        $imagePath =  $path;
        if ($request->hasFile($check)) {
            if (file_exists($imagePath .  $element)) {
                unlink($imagePath .  $element);
            }
            $img = $element;

            $extension = $img->getClientOriginalExtension();

            $lastName = $randomName . "." . $extension;
            $lasPath = $imagePath . $randomName . "." . $extension;
            Image::make($img)->save($lasPath);
        } else {
            $lastName =   $hasElement;
        }

        return $lastName;
    }
}
