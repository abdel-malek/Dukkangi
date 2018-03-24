<?php

namespace App\Http\Services;

use App\Category;
use App\Subcategory;
use Session;
use Illuminate\Support\Facades\DB;
class ImageService {

    public static function saveImage($image)
    {
        $path = str_replace('/app/Http/Services', '/public/uploads', dirname(__FILE__));
        if (!empty($image) && $image->isValid()) {
            if ($image->isValid()) {
                $image->move($path, $image->getClientOriginalName());
                return '/uploads/' . $image->getClientOriginalName();
            }
        }
        return '';
    }
}
