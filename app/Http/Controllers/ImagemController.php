<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imagem;

class ImagemController extends Controller
{
    public function index(){
        return Imagem::orderBy('created_at','desc')->get();
    }
    
    public function store(Request $request){

        if($request->imagem != 'noimage.png'){
            \Log::info($request->all());
            $exploded = explode(',',$request->imagem); 
            $decoded = base64_decode($exploded[1]);
            
            if(str_contains($exploded[0], 'jpeg'))
                $extension = 'jpg';
            else 
                $extension = 'png';

            $fileName = str_random().'.'.$extension;

            $path = public_path('/imagem').'/'.$fileName;

            file_put_contents($path, $decoded);
        }else{
            $fileName = "noimage.png";
        }
        
        $imagem = Imagem::create($request->except('imagem') + [
            'imagem' => $fileName
        ]);

        return response()->json($imagem);
    }

    public function update(Request $request, $id){

        if($request->imagem != 'noimage.png'){
            $exploded = explode(',',$request->imagem); 
            $decoded = base64_decode($exploded[1]);
            
            if(str_contains($exploded[0], 'jpeg'))
                $extension = 'jpg';
            else 
                $extension = 'png';

            $fileName = str_random().'.'.$extension;

            $path = public_path('/imagem').'/'.$fileName;

            file_put_contents($path, $decoded);
        }else{
            $fileName = "noimage.png";
        } 
        
        $imagem = Imagem::find($id);
        $imagem->update($request->except('imagem') + ['imagem' => $fileName]);
        
        return response()->json($imagem);
    }

}
