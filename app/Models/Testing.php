<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model 
{ 
protected $table = 'Etdiant';
public function cours(){
return $this
->belognsToMany(Cours::class,etudiant-cours,id-etd,id-cours);

}}


class Cours extends Model 
{ 
protected $table = 'Cours';
public function Etudiant(){
return $this
->belognsToMany(Etudiant::class,etudiant-cours,id-cours,id-etd);

}}

class Notation extends Model 
{ 
use HasFactory;
protected $primaryKey = 'id-note';
public function Etudiant(){

return $this->belongsTo(Etudiant::class);


$Etudiant =Etudiant::find(1);
$note = $Etudiant->Notation;



$note=Notation::find(1);
$Etudiant= $note->Etudiant;

}}