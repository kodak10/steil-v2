<?php

namespace App\Http\Controllers;

use App\Models\Engin;
use App\Models\Piece;
use App\Models\Marque;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WebsiteController extends Controller
{
    public function index()
    {
        $pieces_recentes = Piece::inRandomOrder()->take(8)->get();
        //$engins = Engin::get();
        $bus = Engin::get();
        $marques = Marque::all();

        $images_engins = DB::table('images')
            ->join('engins', 'engins.id', '=', 'images.engin_id')
            ->select('images.*')
            ->get();

        return view('index', compact('marques', 'pieces_recentes', 'images_engins'));
    }

    public function about()
    {
        return view('about');
    }

    public function pieces($type = null)
    {
        $engins = Engin::get();
        $marques = Marque::all();
        //$pieces = Piece::paginate(9);
        $banner_engins = Engin::latest()->take(1)->get();
        $banner_pieces = Piece::latest()->take(2)->get();
        $pieces = Piece::orderBy('created_at', 'asc')->paginate(12);
        

        // $query = Piece::inRandomOrder()->query();

        // // Appliquer des conditions basées sur le type sélectionné
        // if ($type) {
        //     $query->where('categorie_pieces', $type);
        // }

        // $pieces = $query->paginate(9);


        return view('shop', compact('engins', 'marques', 'banner_engins', 'banner_pieces', 'pieces', ));
    }

    public function garage()
    {
        return view('garage');
    }

    public function contact()
    {
        return view('contact');
    }
}
