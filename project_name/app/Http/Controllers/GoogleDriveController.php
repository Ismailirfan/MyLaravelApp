<?php

// app/Http/Controllers/GoogleDriveController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GoogleDriveController extends Controller
{
    public function fetchFiles()
        {
                // List of file IDs from the public Google Drive folder
                        $fileIds = [
                                    'file1' => '1TDB-9qBRiM8-ds9qPNLMjqdC8HbUt2mw',
                                    'file2' => '1TDB-9qBRiM8-ds9qPNLMjqdC8HbUt2mw',
                                                            // Add more file IDs as needed
                                                                    ];

                                                                            $fileContents = [];

                                                                                    foreach ($fileIds as $fileName => $fileId) {
                                                                                                $fileUrl = "https://drive.google.com/uc?export=download&id=$fileId";
                                                                                                            $fileContents[$fileName] = file_get_contents($fileUrl);
                                                                                                                    }

                                                                                                                            return view('googleDriveFiles', compact('fileContents'));
                                                                                                                                }
                                                                                                                                }