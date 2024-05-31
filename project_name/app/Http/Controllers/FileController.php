<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class FileController extends Controller
{
    public function showFiles()
    {
        $fileUrls = [
            'file1.html' => 'https://drive.google.com/uc?export=view&id=FILE_ID_1',
            'file2.html' => 'https://drive.google.com/uc?export=view&id=FILE_ID_2'
        ];

        $fileContents = [];

        foreach ($fileUrls as $fileName => $url) {
            $response = Http::get($url);
            $fileContents[$fileName] = $response->body();
        }

        return view('files', compact('fileContents'));
    }
}
?>
