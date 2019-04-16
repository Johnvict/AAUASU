<?php

namespace App\Http\Controllers;

use App\Material;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class documentController extends Controller
{
    public function getMaterials(){
        return view('materials.material');
    }

    public function sendMaterial(Request $request){

        if($request->hasFile('material')) {
            $extension = $request->material->getClientOriginalextension();
            $size = $request->material->getClientSize();
            $fileName = time() . $request->material->getClientOriginalName();

            //$url = Storage::url('materials/'.$fileName);

            if ($extension == "jpg") {
                $type = "Image";
                $icon = "/storage/icons/jpg.jpg";
            } elseif ($extension == "png") {
                $type = "Image";
                $icon = "/storage/icons/png.jpg";
            }
            elseif($extension == "gif") {
                $type = "Gif Animation Image";
                $icon = "/storage/icons/gif.gif";
            }
            elseif($extension == "docx") {
                $type = "Word Document";
                $icon = "/storage/icons/docx.jpg";
            }
            elseif($extension == "doc") {
                $type = "Word Document";
                $icon = "/storage/icons/docx.jpg";
            }
            elseif($extension == "zip") {
                $type = "Compressed Zipped File";
                $icon = "/storage/icons/zip.jpg";
            }
            elseif($extension == "csv") {
                $type = "Excel Sheet File";
                $icon = "/storage/icons/xlsx.jpg";
            }
            elseif($extension == "xlsx") {
                $type = "Excel Sheet File";
                $icon = "/storage/icons/xlsx.jpg";
            }
            elseif($extension == "ppt" || $extension == "pptx") {
                $type = "Powerpoint Presentation File";
                $icon = "/storage/icons/ppt.jpg";
            }
            elseif($extension == "pdf") {
                $type = "PDF File";
                $icon = "/storage/icons/pdf.jpg";
            }
            elseif($extension == "txt") {
                $type = "Ordinary Text File";
                $icon = "/storage/icons/txt.jpg";
            }
            else{
                return redirect()->route('materials')->with('error', "Sorry! this file format is not allowed");
            }

            //SAVE FILE IN SERVER STORAGE
            $request->material->storeAs('public/materials',$fileName);

            $upload = new Material();
            $upload->user_id = Auth::user()->id;
            $upload->title = $request->input('title');
            $upload->name = $fileName;
            $upload->type = $type;
            $upload->icon = $icon;
            $upload->size = $size;
            $upload->approval = "0";
            //SAVE FILE DATA IN DATABASE
            $upload->save();


            //return "<img src='".$url."'/>";
            return redirect()->route('materials')
                ->with('success', "Material uploaded Succesfully, kindly wait for admin approval ");
        }
        return redirect()->route('materials')
            ->with('error', "You have not picked any file or File size exceeds maximum allowed");

    }

    public function downloadMaterial()
    {
        //$downloads=DB
    }

}

