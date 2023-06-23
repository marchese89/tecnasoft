<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function elenco_servizi(Request $request){
        //prende come input l'id di un Point e restituisce
        //l'elenco di tutti i servizi offerti (in formtato json)
    }

    public function crea_service(Request $request){
        //prende in input l'id di un Point, una stringa per il nome,
        //un integer per il prezzo, un integer per il tipo
        //verifica che con lo stesso id Point non ci sia già un service
        //con stesso tipo e stesso nome e inserisce un nuovo elemento nella tabella
        //restituisce l'oggetto inserito (json)
    }

    public function modifica_prezzo(Request $request){
        //prende in input l'id del service e un integer (prezzo)
        //modifica la riga della tabella corrispondente con il nuovo prezzo
        //restituisce l'oggetto modificato (json)
    }
    public function modifica_costo(Request $request){
        //prende in input l'id del service e un integer (costo)
        //modifica la riga della tabella corrispondente con il nuovo prezzo
        //restituisce l'oggetto modificato (json)
    }

    public function modifica_acquistabita(Request $request){
        //prende in input l'id di un servizio e un booleano
        //modifica la riga corrispondente
        //restituisce l'oggetto modificato (json)
    }
}
