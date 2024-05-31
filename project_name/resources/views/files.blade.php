<!DOCTYPE html>
<html>
<head>
    <title>HTML Files from Google Drive</title>
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
            width: 100%;
            height: auto;
            border: 1px solid #ccc;
            padding: 10px;
            white-space: pre-wrap; /* Preserve line breaks */
        }
    </style>
</head>
<body>
    <h1>HTML Files from Google Drive</h1>

    @foreach($fileContents as $fileName => $content)
        <div class="file-container">
            <div class="file-name">{{ htmlspecialchars($fileName, ENT_QUOTES, 'UTF-8') }}</div>
            <div class="file-content">{!! $content !!}</div>
        </div>
    @endforeach
</body>
</html>
