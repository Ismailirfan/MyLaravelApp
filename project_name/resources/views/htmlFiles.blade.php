<!-- resources/views/htmlFiles.blade.php -->

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
    <h1 style="display:none">HTML Files from Google Drive</h1>
    @foreach($fileUrls as $fileName => $url)
        <div class="file-container">
            <div class="file-name">{{ $fileName }}</div>
            <iframe src="{{ $url }}" class="file-iframe"></iframe>
        </div>
    @endforeach

    <!-- Target element to inject iframe content -->
    <div id="iframeContent"></div>

    <script>
        // Function to fetch iframe content and inject it into a specific element
        function fetchIframeContent() {
            var iframe = document.querySelector('.file-iframe');
            var iframeDocument = iframe.contentDocument || iframe.contentWindow.document;
            var iframeContent = iframeDocument.documentElement.innerHTML;

            // Inject the iframe content into the target element
            var targetElement = document.getElementById('iframeContent');
            targetElement.html = iframeContent;
        }

        // Call the fetchIframeContent function when the page loads
        window.onload = fetchIframeContent;
    </script>
</body>
</html>
