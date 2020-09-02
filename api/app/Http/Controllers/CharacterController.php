<?php

namespace App\Http\Controllers;

use App\Character;
use App\House;
use App\Patronus;
use App\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class CharacterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function characters(){
        return Character::with('comics')->get()->toJson();
    }


    public function character($id){
        return Character::where('id',$id)->with('comics.serie.story','comics.events')->get()->toJson();
    }

    public function comics($id){
        return Character::where('id',$id)->with('comics')->get()->toJson();
    }

    public function events($id){
        return DB::table('characters as ch')
            ->join('character_comic as cc', 'ch.id', '=', 'cc.character_id')
            ->join('comics as c', 'c.id', '=', 'cc.comic_id')
            ->join('comic_event as ce', 'c.id', '=', 'ce.comic_id')
            ->join('events as e', 'e.id', '=', 'ce.event_id')
            ->select('e.id as event_id', 'e.title as event_name', 'e.description as event_description')
            ->distinct('s.id as serie_id', 's.title as serie_name', 's.description as serie_description')
            ->where('ch.id',$id)
            ->get()->toJson();

    }

    public function series($id){
        return DB::table('characters as ch')
            ->join('character_comic as cc', 'ch.id', '=', 'cc.character_id')
            ->join('comics as c', 'c.id', '=', 'cc.comic_id')
            ->join('series as s', 's.id', '=', 'c.serie_id')
            ->select('s.id as serie_id', 's.title as serie_name', 's.description as serie_description')
            ->distinct('s.id as serie_id', 's.title as serie_name', 's.description as serie_description')
            ->where('ch.id',$id)
            ->get()->toJson();
    }

    public function stories($id){
        return DB::table('characters as ch')
            ->join('character_comic as cc', 'ch.id', '=', 'cc.character_id')
            ->join('comics as c', 'c.id', '=', 'cc.comic_id')
            ->join('series as s', 's.id', '=', 'c.serie_id')
            ->join('stories as st', 'st.id', '=', 's.story_id')
            ->select('st.id as story_id', 'st.title as story_name', 'st.description as story_description')
            ->distinct('st.id as story_id', 'st.title as story_name', 'st.description as story_description')
            ->where('ch.id',$id)
            ->get()->toJson();
    }
}
