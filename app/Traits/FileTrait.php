<?php

namespace App\Traits;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

trait FileTrait
{
    public function fileStore($file, $path, $subFileName = 'file'){
        $subFileName = Str::slug($subFileName, '_');
        $fileNewName = uniqid(time() . '_' . $subFileName . '_') . '.' . $file->getClientOriginalExtension();
        $file->storeAs($path, $fileNewName, 'public');
        return $fileNewName;
    }

    public function fileUpdate($file, $path, $oldImageName, $subFileName = 'file'){
        $this->fileDelete($path, $oldImageName);
        return $this->fileStore($file, $path, $subFileName);
    }

    public function fileDelete($path, $fileName){
        if (Storage::disk('public')->exists("$path/$fileName")) Storage::disk('public')->delete("$path/$fileName");
    }

}
