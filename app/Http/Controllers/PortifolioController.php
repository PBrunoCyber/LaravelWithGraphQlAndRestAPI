<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Portifolio;

class PortifolioController extends Controller
{
    public function index(){
        return Portifolio::orderBy('created_at','desc')->get();
    }
    
    public function store(Request $request){
        if($request->imagens != 'vazio.png'){
            \Log::info($request->all());
            $exploded = explode(',',$request->imagens); 
            $decoded = base64_decode($exploded[1]);
            
            if(str_contains($exploded[0], 'jpeg'))
                $extension = 'jpg';
            else 
                $extension = 'png';

            $fileName = str_random().'.'.$extension;

            $path = public_path('/portifolio').'/'.$fileName;

            file_put_contents($path, $decoded);
        }else{
            $fileName = "vazio.jpg";
        }
        
        $imagem = Portifolio::create($request->except('imagens') + [
            'imagens' => $fileName
        ]);

        return response()->json($imagem);
    }

    public function update(Request $request, $id){
        if($request->imagens != 'vazio.png'){
            $exploded = explode(',',$request->imagens); 
            $decoded = base64_decode($exploded[1]);
            
            if(str_contains($exploded[0], 'jpeg'))
                $extension = 'jpg';
            else 
                $extension = 'png';

            $fileName = str_random().'.'.$extension;

            $path = public_path('/portifolio').'/'.$fileName;

            file_put_contents($path, $decoded);
        }else{
            $fileName = "vazio.jpg";
        } 
        
        $imagem = Portifolio::find($id);
        $imagem->update($request->except('imagens') + ['imagens' => $fileName]);
        
        return response()->json($imagem);
    }

}
