<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GoogleDriveController extends Controller
{
    public function fetchHtmlFiles()
    {
        // List of file IDs from the public Google Drive folder
        $fileIds = [
            'file1.html' => 'YOUR_FILE_ID_1',
            'file2.html' => '1Veo_VccvMbMxNJQ8d-5ete2dYzZugK1P',
            // Add more file IDs as needed
        ];

        $fileUrls = [];

        foreach ($fileIds as $fileName => $fileId) {
            // URL format for embedding Google Drive files in an iframe
            $fileUrls[$fileName] = "https://drive.google.com/file/d/$fileId/preview";
        }

        // Convert the array to JSON
        $jsonFileUrls = json_encode($fileUrls);

        return view('htmlFiles', compact('jsonFileUrls'));
    }
}

?>
