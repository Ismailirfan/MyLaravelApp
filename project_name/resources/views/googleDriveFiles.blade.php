<!-- resources/views/googleDriveFiles.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Google Drive Files</title>
    </head>
    <body>
        <h1>Files from Google Drive</h1>
            @foreach($fileContents as $fileName => $content)
                    <h2>{{ $fileName }}</h2>
                            <pre>{{ $content }}</pre>
                                @endforeach
                                </body>
                                </html>