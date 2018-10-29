<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\carreras;
use App\maestros;
use App\especialidades;
use App\ciclos;
use App\titulos;


class curso extends Controller
{
    
    public function altamaestro()
    {
        $clavequesigue = maestros::orderBy('idm','desc')
        ->take(1)
        ->get();
        $idms = $clavequesigue[0]->idm+1;

        $carreras = carreras::where('activo','Si')
        ->orderBy('nombre','asc')
        ->get();
        //orm eloquent  estudair sus consultas
        //return $carreras;
        return view ('sistema.altamaestro')->with('carreras',$carreras)->with('idms',$idms);
        
    }
    public function guardamaestro(Request $request)
    {
        $nombre = $request->nombre;
        $edad = $request->edad;
        $correo = $request->correo;
        $idm = $request->idm;
        $cp = $request->cp;
        //no se recibe el archivo

        $this->validate($request,[
            'idm'=>'required|numeric',
            'nombre'=>'required|alpha',
            'edad'=>'required|integer|min:18|max:70',
            'correo'=>'required|email',
            //'cp'=>['regex:/^[0-9]{5}[-][0-9,a-z$/']
            'archivo' => 'image|mimes:jpg,jpeg,gif,png'
        ]);
//$file => c:/>users/misimagenes/carpt/descarga.png
        $file =$request->file('archivo');
        if($file!="")
        {
        //ldate => 20180928_063455_descarga.png
        $ldate = date('Ymd_His_');
        //$img = descarga.png
        $img = $file->getClientOriginalName();
        //img2 = 20180928_063455_descarga.png
        $img2 = $ldate.$img;

        \Storage::disk('local')->put($img2, \File::get($file));
        }
        else
        {
            $img2 = 'sinfoto.png';
        }
        //insert into maestros
        $maest = new maestros;
        $maest->archivo = $img2;
        $maest -> idm = $request ->idm;
        $maest -> nombre = $request ->nombre;
        $maest -> edad = $request ->edad;
        $maest -> correo = $request ->correo;
        $maest -> cp = $request ->cp;
        $maest -> idc = $request ->idc;
        $maest->save();
        $proceso = "ALTA DE MAESTRO";
        $mensaje = "Maestro guardado correctamente";
        return view ("sistema.mensaje")
        ->with('proceso',$proceso)
        ->with('mensaje',$mensaje);
        
        
    }
    public function reportemaestros()
    {
        $maestros = maestros::orderBy('nombre','asc')->get();
        return view('sistema.reporte')
        ->with('maestros', $maestros);
    }

    public function eliminam($idm)
    {
        maestros::find($idm)->delete();
        $proceso = "ELIMNAR MAESTROS";
        $mensaje = "El maestro a sido borrado correctamente";
        return view ('sistema.mensaje')
        ->with('proceso', $proceso)
        ->with('mensaje', $mensaje);
    }
    public function modificam($idm)
    {
    $maestro= maestros::where('idm','=',$idm)->get();
    $idc =$maestro[0]->idc;

    $carrera = carreras::where('idc','=',$idc)->get();

    $todasdemas = carreras::where('idc','!=',$idc)->get();

    return view ('sistema.modificamaestro')
    ->with('maestro', $maestro[0])
    ->with('idc',$idc)
    ->with('carrera',$carrera[0]->nombre)
    ->with('todasdemas', $todasdemas);

   }
   public function guardaedicionm(Request $request)
   {
       echo $request->nombre;
   }



   ////// //////////////
public function altaespecialidades()
{
    $clavequesigue = especialidades::orderBy('idespe','desc')
    ->take(1)
    ->get();
    $idespe = $clavequesigue[0]->idespe+1;

   // $carreras = carreras::where('activo','Si')
   // ->orderBy('nombre','asc')
    //->get();
    //orm eloquent  estudair sus consultas
    //return $carreras;
    return view ('sistema.altaespecialidades')->with('idespe',$idespe);
    
}
public function guardaespecialidad(Request $request)
{
    $nomespe = $request->nomespe;
    $idespe = $request->idespe;
    //no se recibe el archivo

    $this->validate($request,[
        'idespe'=>'required|numeric',
        'nomespe'=>'required|alpha',
        //'edad'=>'required|integer|min:18|max:70',
        //'correo'=>'required|email',
        //'cp'=>['regex:/^[0-9]{5}[-][0-9,a-z$/']
        //'archivo' => 'image|mimes:jpg,jpeg,gif,png'
        ]);
        $esp = new especialidades;
        $esp -> idespe = $request ->idespe;
        $esp -> nomespe = $request ->nomespe;

        $esp->save();
        $proceso = "ALTA ESPECIALIDAD";
        $mensaje = "Especialidad guardada correctamente";
        return view ("sistema.mensaje")
        ->with('proceso',$proceso)
        ->with('mensaje',$mensaje);

}



public function altaalumno()
    {
        $clavequesigue = alumnos::orderBy('idalumn','desc')
        ->take(1)
        ->get();
        $idalumn = $clavequesigue[0]->idalumn+1;

        $especialidades = especialidades::where('activo','Si')
        ->orderBy('nomespe','asc')
        ->get();
        //orm eloquent  estudair sus consultas
        //return $carreras;
        return view ('sistema.altaalumnos')->with('especialidades',$especialidades)->with('idalumn',$idalumn);
        
    }
    public function guardaalumno(Request $request)
    {
        $nombre = $request->nombre;
        $edad = $request->edad;
        $correo = $request->correo;
        $idm = $request->idm;
        $cp = $request->cp;
        $idalumn = $request->idalumn;
        $app = $request->app;
        $apm = $request->apm;
        $nomalumn = $request->nomalumn;
        $grupo = $request->grupo;
        $turno = $request->turno;
        $tel1 = $request->tel1;
        $tel2 = $request->tel2;
        $correo1 = $request->correo1;
        $correo2 = $request->correo2;
        $cp = $request->cp;
        $modalidad = $request->modalidad;
        
        //no se recibe el archivo

        $this->validate($request,[
            'idalumn'=>'required|numeric',
            'app'=>'required|alpha',
            'apm'=>'required|alpha',
            'nomalumn'=>'required|alpha',
            'grupo'=>'required|integer',
            'turno'=>'required|alpha',
            'tel1'=>'required|integer',
            'tel2'=>'required|integer',
            'correo1'=>'required|email',
            'correo2'=>'required|email',
            'cp'=>'required|integer',
            'modalidad'=>'required|alpha',
        
            //'cp'=>['regex:/^[0-9]{5}[-][0-9,a-z$/']
            'archivo' => 'image|mimes:jpg,jpeg,gif,png'
        ]);
//$file => c:/>users/misimagenes/carpt/descarga.png
        $file =$request->file('archivo');
        if($file!="")
        {
        //ldate => 20180928_063455_descarga.png
        $ldate = date('Ymd_His_');
        //$img = descarga.png
        $img = $file->getClientOriginalName();
        //img2 = 20180928_063455_descarga.png
        $img2 = $ldate.$img;

        \Storage::disk('local')->put($img2, \File::get($file));
        }
        else
        {
            $img2 = 'sinfoto.png';
        }
        //insert into maestros
        $maest = new alumnos;
        $maest->archivo = $img2;

        

        $maest -> nombre = $request->nombre;
        $maest -> edad = $request->edad;
        $maest -> correo = $request->correo;
        $maest -> idm = $request->idm;
        $maest -> cp = $request->cp;
        $maest -> idalumn = $request->idalumn;
        $maest -> app = $request->app;
        $maest -> apm = $request->apm;
        $maest -> nomalumn = $request->nomalumn;
        $maest -> grupo = $request->grupo;
        $maest -> turno = $request->turno;
        $maest -> tel1 = $request->tel1;
        $maest -> tel2 = $request->tel2;
        $maest -> correo1 = $request->correo1;
        $maest -> correo2 = $request->correo2;
        $maest -> cp = $request->cp;
        $maest -> modalidad = $request->modalidad;
        $maest -> idmun = $request ->idmun;
        $maest -> idespe = $request ->idespe;
        $maest -> idpractica = $request ->idpractica;
        $maest -> iddoc = $request ->iddoc;
        $maest -> idtitulo = $request ->idtitulo;
        

        $maest->save();
        $proceso = "ALTA DE MAESTRO";
        $mensaje = "Maestro guardado correctamente";
        return view ("sistema.mensaje")
        ->with('proceso',$proceso)
        ->with('mensaje',$mensaje);
        
        
    }


    //mis catalogos

    
    public function altaciclo()
    {
       
         $clavequesigue = ciclos::orderBy('idciclo','desc')
                              ->take(1)->get();
                              $idciclo=$clavequesigue[0]->idciclo+1;
    
                    
           return view ('sistema.formaltaciclo')
           ->with('idciclo',$idciclo);
   
    }
    public function guardaciclo(Request $request)
    {
        $idciclo= $request->idciclo;
        $fechainicio= $request->fechainicio;
        $fechafin= $request->fechafin;
        
        
        
        
        
        
   //en esta linea se manda a llamar al modelo maestros     
   $cic = new ciclos;
   $cic->idciclo = $request->idciclo;
   $cic->fechainicio = $request->fechainicio;
   $cic->fechafin = $request->fechafin;
   $cic->save();

   $resultado='Registro Guardado';
   return view ('sistema.mensaje')
    ->with('resultado',$resultado);
    }





  public function altamunicipio()
    {
       //maestros
         $clavequesigue = municipios::orderBy('idmun','desc')
                              ->take(1)->get();
                              $idmun=$clavequesigue[0]->idmun+1;
    
                    
           return view ('sistema.formaltamunicipio')
           ->with('idmun',$idmun);


           $estados = estados::orderBy('nomestado','asc')
                             ->get();
       //return $carreras;
       return view ('sistema.altamunicipio')
             ->with('estados',$estados)
             ->with('idmun',$idmun);
   
    }  

    public function altaciclo ()
    {
        $clavequesigue = ciclos::orderBy('idciclo', 'desc')
                        ->take(1)->get();
                        $idciclo=$clavequesigue[0]->idciclo+1;
            return view ('sistema.formaltaciclo')
            ->with ('idciclo', $idciclo);
            
    
    }

    public function guardaciclo(request $request)
    {
            $idciclo=$request->idciclo;
            $fechainicio=$request->fechainicio;
            $fechafin=$fechafin->fechafin;

                    this->validate($request,[
                        'fechainicio'=>'required',
                        'fechafin'=>'required',
                    ]);

                    //en esta linea se manda llamar el modelo ciclos
                    $cic = new ciclos;
                    $cic->idciclo = $request->idciclo;
                    $cic->fechainicio = $request->fechainicio;
                    $cic->fechafin = $request->fechafin;
                    $cic->save();

    }

    public function altatitulo()
    {
       
         $clavequesigue = titulos::orderBy('idtitulo','desc')
                              ->take(1)->get();
                              $idtitulo=$clavequesigue[0]->idtitulo+1;
    
       $todosciclos = ciclos::orderBy('fechafin','asc') 
                              ->get();
     
                    
           return view ('sistema.formaltatitulo')
           ->with('idtitulo',$idtitulo)
           ->with('todosciclos',$todosciclos);
   
    }





    public function guardatitulo(Request $request)
    {
        
        $folio= $request->folio;
        $idciclo= $request->idciclo;

        $this->validate($request,[
                
                'folio'=>['regex:/^[A-Z]{3}[0-9]{7}$/'],
                

               

     ]);     
        
        
   //en esta linea se manda a llamar al modelo titulos     
   $tit = new titulos;
   $tit->idtitulo = $request->idtitulo;
   $tit->folio= $request->folio;
   $tit->idciclo = $request->idciclo;
   $tit->save();

  
    }




}




