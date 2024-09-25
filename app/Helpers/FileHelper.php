<?php

use Illuminate\Support\Facades\Storage;

function getFileUrl($path, $fileName){
    if ( $fileName == '' || !Storage::disk('public')->exists("$path/$fileName")) return asset(fake()->imageUrl(640, 480));
    return asset("storage/$path/$fileName");
}