<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class calculer extends Controller
{
  

    public function etudiant(){
        $data=[]; 
        $data['nom']='vftgbh'; 
        $data['prenom']='zahra'; 
        $data['poste']='bbbbbb'; 
        $data['module']=['html,css,boootdtrap']; 
        return view('affichage', $data);
        
    }
   
}
class calculer extends Controller
{
  

    public function etudiant(){
        $data=[]; 
        $data['nom']='vftgbh'; 
        $data['prenom']='zahra'; 
        $data['poste']='bbbbbb'; 
        $data['module']=['html,css,boootdtrap']; 
        return view('affichage', $data);
        
    }
   
}

