<!-- resources/views/htmlFiles.blade.php -->
<!--
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
        .file-iframe {
            width: 100%;
            height: 500px;
            border: none;
        }
        #iframeContent {
            margin-top: 20px;
            border: 1px solid #ccc;
            padding: 10px;
        }
    </style>
</head>
<body>
    <h1>HTML Files from Google Drive</h1>
    @foreach($fileUrls as $fileName => $url)
        <div class="file-container">
            <div class="file-name">{{ $fileName }}</div>
            <iframe src="{{ $url }}" class="file-iframe" onload="extractIframeContent(this)"></iframe>
        </div>
    @endforeach
    -->
    <!-- Target element to display extracted iframe content -->
  <!--  <div id="extractedContent"></div>

    <script>
        // Function to extract iframe content and display it
        function extractIframeContent(iframe) {
            // var iframeDocument = iframe.contentDocument || iframe.contentWindow.document;
            var iframeHtml = iframeDocument.documentElement.innerHTML;

            // Display the extracted iframe content in the target element
            var extractedContent = document.getElementById('extractedContent');
            extractedContent.innerHTML += '<div class="extracted-file">' + iframeHtml + '</div>';
        }
    </script>
</body>
</html>
    -->
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
        .file-iframe {
            width: 100%;
            height: 500px;
            border: none;
        }
        #iframeContent {
            margin-top: 20px;
            border: 1px solid #ccc;
            padding: 10px;
        }
    </style>
</head>
<body>
    <h1>HTML Files from Google Drive</h1>
    @foreach($fileUrls as $fileName => $url)
        <div class="file-container">
            <div class="file-name">{{ $fileName }}</div>
            <iframe src="{{ $url }}" class="file-iframe" onload="extractIframeContent(this)"></iframe>
        </div>
    @endforeach

    <!-- Target element to display extracted iframe content -->
    <div id="extractedContent"></div>

    <script>
        // Function to escape HTML characters
        function escapeHtml(unsafe) {
            return unsafe
                .replace(/&/g, "&amp;")
                .replace(/</g, "&lt;")
                .replace(/>/g, "&gt;")
                .replace(/"/g, "&quot;")
                .replace(/'/g, "&#039;");
        }

        // Function to extract iframe content and display it
        function extractIframeContent(iframe) {
            var iframeDocument = iframe.contentDocument || iframe.contentWindow.document;
            var iframeHtml = iframeDocument.documentElement.innerHTML;
            var escapedHtml = escapeHtml(iframeHtml);

            // Display the escaped iframe content in the target element
            var extractedContent = document.getElementById('extractedContent');
            extractedContent.innerHTML += '<div class="extracted-file">' + escapedHtml + '</div>';
        }
    </script>
</body>
</html>

