<?php
/*
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
*/

// app/Http/Controllers/FileController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
    public function listFiles()
        {
                // List of file IDs from the public Google Drive folder
                        $fileIds = [
                          //  'file1' => 'YOUR_FILE_ID_1',
                            'file2' => '126tUoG0Vt5cDSgwZY7J34xkVX73afstV',
                                                            // Add more file IDs as needed
                                                                    ];

                                                                            $files = [];

                                                                                    foreach ($fileIds as $fileName => $fileId) {
                                                                                                $fileUrl = "https://drive.google.com/uc?export=download&id=$fileId";
                                                                                                            $fileContents = file_get_contents($fileUrl);
                                                                                                                        $files[] = [
                                                                                                                                        'name' => $fileName,
                                                                                                                                                        'content' => $fileContents,
                                                                                                                                                                    ];
                                                                                                                                                                            }

                                                                                                                                                                                    return view('files', compact('files'));
                                                                                                                                                                                        }
                                                                                                                                                                                        }


?>
  