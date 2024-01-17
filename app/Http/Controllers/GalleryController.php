<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class GalleryController extends Controller
{
    public function images()
    {
        try {
            $response = Http::get('https://picsum.photos/v2/list');
            if ($response->successful()) {
                $data = $response->json();
                $imageData = [];
                foreach ($data as $image) {
                    $imageData[] = [
                        'url' => $image['download_url'],
                        'author' => $image['author']
                    ];
                }
                return response()->json(['images' => $imageData]);
            } else {
                $statusCode = $response->status();
                return response()->json(['error' => "Error en la solicitud: $statusCode"], $statusCode);
            }
        } catch (\Exception $exception) {
            return response()->json(['error' => $exception->getMessage()], 500);
        }
    }

    public function informacion($id)
    {
        try {
            $response = Http::get('https://picsum.photos/v2/list');
            if ($response->successful()) {
                $data = $response->json();
                foreach ($data as $image) {
                    if ($image['author'] === $id) {
                        $imageData = [
                            'url' => $image['download_url'],
                            'author' => $image['author']
                        ];
                        return view('informacion', ['images' => $imageData]);
                    }
                }
                return response()->json(['error' => 'Imagen no encontrada'], 404);
            } else {
                $statusCode = $response->status();
                return response()->json(['error' => "Error en la solicitud: $statusCode"], $statusCode);
            }
        } catch (\Exception $exception) {
            return response()->json(['error' => $exception->getMessage()], 500);
        }
    }

    public function collage($nombre)
{
    try {
        $response = Http::get('https://picsum.photos/v2/list');
        if ($response->successful()) {
            $data = $response->json();
            $imageData = [];

            foreach ($data as $image) {
                if ($image['author'] === $nombre) {
                    $imageData[] = [
                        'url' => $image['download_url'],
                        'author' => $image['author']
                    ];
                }
            }

            if (!empty($imageData)) {
                return response()->json(['images' => $imageData]);
            } else {
                return response()->json(['error' => 'No se encontraron imágenes para el autor dado'], 404);
            }
        } else {
            $statusCode = $response->status();
            return response()->json(['error' => "Error en la solicitud: $statusCode"], $statusCode);
        }
    } catch (\Exception $exception) {
        return response()->json(['error' => $exception->getMessage()], 500);
    }
}

}
