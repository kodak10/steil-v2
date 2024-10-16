<?php

namespace App\Http\Controllers;

use App\Models\Engin;
use App\Models\Piece;
use App\Models\Marque;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;


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
        $marques = Marque::all();
        return view('garage', compact('marques'));
    }

    public function contact()
    {
        return view('contact');
    }

    public function send_mail(Request $request)
    {
        // Validez les données du formulaire ici

        $data = [
            'name' => $request->input('name'),
            'number' => $request->input('phone'),
            'email' => $request->input('email'),
            'subject' => $request->input('subject'),
            'message' => $request->input('message'),
        ];

        Mail::to('steilautomobile@gmail.com')->send(new ContactMail($data));

        // Redirigez l'utilisateur après l'envoi du message

        return redirect('/contact')->with('success', 'Votre message à été envoyé avec succès !');
    }

    public function search(Request $request)
    {
        $engins = Engin::get();
        $marques = Marque::all();
        //$pieces = Piece::paginate(9);
        $banner_engins = Engin::latest()->take(1)->get();
        $banner_pieces = Piece::latest()->take(2)->get();
        $top_pieces_buys = Piece::orderBy('created_at', 'asc')->take(2)->get();

        $query = DB::table('pieces');

        $category = $request->input('category');
        $keyword = $request->input('keyword');


        if (!empty($category)) {
            $query->where('categorie_pieces', $category);
        }

        if (!empty($keyword)) {
            $query->where('nom', 'like', '%' . $keyword . '%');
        }

        $pieces = $query->paginate(12);


        //$pieces = Piece::where('nom', 'like', '%' . $searchTerm . '%')->paginate(9);

        return view('shop', compact('engins', 'marques', 'pieces', 'banner_engins', 'banner_pieces', 'top_pieces_buys'));



    }
}
