<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Favorite;

class FavoriteController extends Controller
{
/**
     * Display a listing of the resource.
     */
    public function index()
    {
        $favorites = Favorite::all();
        return response()->json($favorites);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Ambil data dari permintaan POST
        $data = $request->all();

        // Simpan data favorit ke database
        $favorite = Favorite::create([
            'name' => $data['name'],
            'price' => $data['price'],
        ]);

        // Kembalikan respons
        return response()->json($favorite);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $favorite = Favorite::find($id);
        if ($favorite) {
            $favorite->delete();
        }
        return response()->json(['message' => 'Deleted successfully']);
    }

    public function addFavorite(Request $request)
    {
        // Validasi data input
        $data = $request->validate([
            'name' => 'required',
            'price' => 'required',
        ]);

        // Simpan data favorit ke database
        $favorite = Favorite::create([
            'name' => $data['name'],
            'price' => $data['price'],
        ]);

        // Beri respons ke client
        return response()->json(['message' => 'Favorite added successfully', 'favorite' => $favorite], 200);
    }

    public function removeFavorite(Request $request)
    {
        // Hapus favorit dari database berdasarkan ID
        $favoriteId = $request->input('favorite_id');
        $favorite = Favorite::find($favoriteId);

        if ($favorite) {
            $favorite->delete();
            return response()->json(['message' => 'Favorite removed successfully'], 200);
        } else {
            return response()->json(['message' => 'Favorite not found'], 404);
        }
    }
}
