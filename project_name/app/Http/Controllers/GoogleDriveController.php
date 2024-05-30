<?php

// app/Http/Controllers/GoogleDriveController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GoogleDriveController extends Controller
{
    public function fetchHtmlFiles()
    {
        // List of file IDs from the public Google Drive folder
        $fileIds = [
            // 'file1' => 'YOUR_FILE_ID_1',
            'file2' => '1KYgA62IRfeFElUtdT8JP6u8bMjF-5dZV',
            // Add more file IDs as needed
        ];

        $fileUrls = [];

        foreach ($fileIds as $fileName => $fileId) {
            // URL format for embedding Google Drive files in an iframe
            $fileUrls[$fileName] = 
            "https://drive.google.com/file/d/$fileId/preview";
            // "https://drive.google.com/file/d/$fileId/view?usp=drive_link";
        }

        return view('htmlFiles', compact('fileUrls'));
    }
}

?>