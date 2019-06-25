<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    public function getFirstName($name){
        $name = trim($name);
        preg_match('/[^\s]*/', $name, $matches);
        return ucwords(strtolower($matches[0]));
    }
    
    public function addImageStorage(Request $request, $slugImage = null, $post = null, $comment = null){
        if(!is_null($slugImage)){
            return $this->addImageSlugPostStorage($request);
        }else if(!is_null($post)){
            return $this->addImagePostStorage($request);
        }else if(!is_null($comment)){
            return $this->addImageCommentStorage($request);
        }
    }
    
    private function addImageSlugPostStorage(Request $request){
        $path_slug = $request['image_slug'];
        $basename = pathinfo($path_slug, PATHINFO_BASENAME);
        if(file_exists(public_path('/images-users/'.Auth::user()->id."/$basename"))){
            $path_slug = substr($path_slug, strrpos($path_slug, '/') - 14);  //Pega somente images-users/id_user/image
            $type = pathinfo($path_slug, PATHINFO_EXTENSION);
            $data_slug = file_get_contents($path_slug);
            $base64 = base64_encode($data_slug);
            $data_slug = base64_decode($base64);
            $image_name= time().'.'."$type";
            $path_slug = public_path().'/images/images-posts/'.$image_name;
            file_put_contents($path_slug, $data_slug);
            $request['image_slug'] = '/images/images-posts/'.$image_name;
            return $request['image_slug'];
        }else if(file_exists(public_path('/images/images-posts'."/$basename"))){
            $path_slug = substr($path_slug, strrpos($path_slug, '/') - 20);  //Pega somente images-users/id_user/image
            return $request['image_slug'] = $path_slug;
        }
        
        
    }
    
    private function addImagePostStorage(Request $request){
        $detail=$request['body'];
        $dom = new \domdocument();
        $dom->loadHtml($detail, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        $images = $dom->getelementsbytagname('img');
        
        foreach($images as $k => $img){
            $path = $img->getattribute('src');
            $basename = pathinfo($path, PATHINFO_BASENAME);
            if(file_exists(public_path('/images-users/'.Auth::user()->id."/$basename"))){
                $path = substr($path, strrpos($path, '/') - 14);  //Pega somente images-users/id_user/image
                $type = pathinfo($path, PATHINFO_EXTENSION);
                $data = file_get_contents($path);
                $base64 = base64_encode($data);
                $data = base64_decode($base64);
                $image_name= time().$k.'.'."$type";
                $path = public_path().'/images/images-posts/'.$image_name;
                file_put_contents($path, $data);
                $img->removeattribute('src');
                $img->setattribute('src', '/images/images-posts/'.$image_name);
            }
        }
        $detail = $dom->savehtml();
        
        return $detail;
    }
    
    private function addImageCommentStorage(Request $request){
        $detail=$request['body'];
        $dom = new \domdocument();
        $dom->loadHtml($detail, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        $images = $dom->getelementsbytagname('img');
        
        foreach($images as $k => $img){
            $path = $img->getattribute('src');
            list($baseType, $image) = explode(';', $path);
            list(, $image) = explode(',', $image);

            $type = substr($baseType, strrpos($baseType, '/') + 1);
            $data = base64_decode($image);
            $image_name= time().$k.'.'."$type";
            $path = public_path().'/images/images-comments/'.$image_name;
            //dd($data);
            file_put_contents($path, $data);
            
            $img->removeattribute('src');
            $img->setattribute('src', '/images/images-comments/'.$image_name);
            
        }
        $detail = $dom->savehtml();
        
        return $detail;
    }
}
