<?php 
// app/Http/Controllers/FileController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
    public function listFiles()
        {
                // List of file IDs from the public Google Drive folder
                        $fileIds = [
                                    'file1' => '126tUoG0Vt5cDSgwZY7J34xkVX73afstV',
                                         //       'file2' => 'YOUR_FILE_ID_2',
                                                     // Add more file IDs as needed
                                                             ];

                                                                     $files = [];

                                                                             foreach ($fileIds as $fileName => $fileId) {
                                                                                         $fileUrl = "https://drive.google.com/uc?export=download&id={$fileId}";
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
