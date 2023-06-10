<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Carrusel;
use App\Models\Categoria;
use App\Models\Producto;
use App\Models\Post;
use App\Models\Empresa;

class FrontController extends Controller
{
    public function index(){
        $carrusel = Carrusel::orderBy('orden','asc')->get();
        $producto = Producto::orderBy('visitas','desc')->take(3)->get();
        $posts = Post::orderBy('created_at','desc')->take(2)->get();
        $empresa = Empresa::find(1);
        return view('welcome',compact('carrusel','producto','posts','empresa'));
    }

    public function empresa(){
        $carrusel = Carrusel::orderBy('orden','asc')->get();
        $empresa = Empresa::find(1);
        return view('front.empresa',compact('empresa','carrusel'));
    }

    public function artesanias(){
        $categorias = Categoria::all();
        return view('front.categorias',compact('categorias'));
    }

    public function categoria($categoria){
        $categoria = Categoria::whereSlug($categoria)->first();
        return view('front.categoria',compact('categoria'));
    }
    public function producto($categoria,$producto){
        $producto = Producto::whereSlug($producto)->first();
        return view('front.producto',compact('producto'));
    }

    public function blog(){
        $carrusel = Carrusel::orderBy('orden','asc')->get();
        $posts = Post::all();
        return view('front.posts',compact('posts','carrusel'));
    }

    public function post($post){
        $carrusel = Carrusel::orderBy('orden','asc')->get();
        $post = Post::whereSlug($post)->first();
        $post->increment('visitas');
        return view('front.post',compact('post','carrusel'));
    }

    public function contacto(){
        $carrusel = Carrusel::orderBy('orden','asc')->get();
        return view('front.contacto',compact('carrusel'));
    }

    public function contactoenvio(Request $r){
     if(!empty($r)){
         $nombre    = $_POST['nombre'];
         $email     = $_POST['email'];
         $mensaje   = $_POST['mensaje'];
         if(mail($email,"ASUNTO CONTACTO ",$mensaje)){
            $resultado = "Gracias!!!. se envió tu mensaje";
         }else{
            $resultado = "No se pudo enviar tu mensaje";
         }
        return redirect()->back()->with('success',$resultado);
     }else{
         return redirect()->back()->with('success',"NO SE PUDO ENVIA EL MENSAJE");
     }
    }

}
