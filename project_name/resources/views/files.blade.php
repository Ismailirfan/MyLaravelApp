<!-- resources/views/files.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Google Drive Files</title>
        <style>
                body {
                            font-family: Arial, sans-serif;
                                    }
                                            .file-container {
                                                        margin-bottom: 20px;
                                                                }
                                                                        .file-name {
                                                                                    font-weight: bold;
                                                                                                font-size: 1.2em;
                                                                                                        }
                                                                                                                .file-content {
                                                                                                                            white-space: pre-wrap; /* To preserve formatting */
                                                                                                                                        background-color: #f9f9f9;
                                                                                                                                                    border: 1px solid #ddd;
                                                                                                                                                                padding: 10px;
                                                                                                                                                                        }
                                                                                                                                                                            </style>
                                                                                                                                                                            </head>
                                                                                                                                                                            <body>
                                                                                                                                                                                <h1>Files from Google Drive</h1>
                                                                                                                                                                                    <div>
                                                                                                                                                                                            @foreach($files as $file)
                                                                                                                                                                                                        <div class="file-container">
                                                                                                                                                                                                                        <div class="file-name">{{ $file['name'] }}</div>
                                                                                                                                                                                                                                        <div class="file-content">{{ $file['content'] }}</div>
                                                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                                                            @endforeach
                                                                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                                                                </body>
                                                                                                                                                                                                                                                                </html>
                                                                                                                                                                                                                                                                
