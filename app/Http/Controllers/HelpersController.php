<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HelpersController extends Controller
{
    public function dropzone(Request $request){
        $path = $request->header('img-path');
        $fileName = time() . '.' . $request->file->getClientOriginalExtension();

        $original_name = $request->file->getClientOriginalName();

        $path = Storage::disk('local')->put('public/'. $path, $request->file);
        $uploaded = [];
        $upload = ['original_name'=>$original_name, 'saved_name' => $path];
        array_push($uploaded, $upload);
        $request->session()->put('saved_files', $uploaded);
        return response()->json(['file' => $path]);

    }

    public function removeDropzone(Request $request){
        $file_name = $request->data['upload']['filename'];
        $saved_files = $request->session()->get('saved_files');
        foreach($saved_files as $key=>$file){
            if($file_name == $file['original_name']){
                Storage::disk('local')->delete($file['saved_name']);
                unset($saved_files[$key]);
                $request->session()->forget('saved_files');
                $request->session()->put('saved_files', $saved_files);

            }
        }
        return response()->json(['msg'=>'imaged removed', 'status'=>200]);
    }
}
