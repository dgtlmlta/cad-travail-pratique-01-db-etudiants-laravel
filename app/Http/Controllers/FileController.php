<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FileController extends Controller
{
    public function __construct() {
        // Permettre de filtrer automatiquement les requêtes à l'aide d'FilePolicy
        $this->authorizeResource(File::class, 'file');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view("files.index", [
            "pageTitle" => __("files/index.pageTitle")
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("files.create", [
            "pageTitle" => __("files/create.pageTitle")
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validation = $request->validate([
            "title" => [
                "required"
            ],
            "file" => [
                "required",
                "mimes:pdf,doc,zip"
            ],
        ]);

        // Récupérer le chemin du fichier téléversé
        $fileUrl = $request->file("file")->store("etudiants-uploads");

        $file = new File();

        $file->title       = $request->title;
        $file->url         = $fileUrl;
        $file->etudiant_id = Auth::user()->id;

        if (!$file->save()) {
            return redirect("/");
        };

        return redirect("/files/{$file->id}");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\File  $file
     * @return \Illuminate\Http\Response
     */
    public function show(File $file)
    {
        //
        return view("files.show", [
            "file" => $file,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\File  $file
     * @return \Illuminate\Http\Response
     */
    public function edit(File $file)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\File  $file
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, File $file)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\File  $file
     * @return \Illuminate\Http\Response
     */
    public function destroy(File $file)
    {
        //
    }
}
