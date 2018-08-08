<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    //permet au modèle de ne pas se planter lors d'un create par exemple et de prendre que les données qui l'interesse
    //Etudiant::create($request->all
    //où on lui envoie toutes les données du request genre le token qui ne fait pas  partie du model

    protected  $garded = array();

    //pour spécifier les champs qui seront mappés dans la base de donnée
    protected $fillable = [
        'nom', 'prenom'
    ];

    //indique la table mappée par la table Etudiant n'a pas de champs created_at et update_at
    public  $timestamps = false;
}
