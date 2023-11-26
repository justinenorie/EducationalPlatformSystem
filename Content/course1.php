<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course 1</title>
    <link rel="stylesheet" href="/IT-ELECT-FINALPROJ-main/Content/course1.css">
</head>
<body>
    <div class="course-container">
    <h1 class="title-course">COURSE 1</h1>
        
        <div class="topics">
            <div class="topic" onclick="showContent('content1')">Topic 1</div>
            <div class="topic" onclick="showContent('content2')">Topic 2</div>
            <div class="topic" onclick="showContent('content3')">Topic 3</div>
        </div>

        <div class="content" id="content1">
            <h2>Content for Topic 1</h2>
            <p>This is the content related to Topic 1.</p>
        </div>
        <div class="content" id="content2">
            <h2>Content for Topic 2</h2>
            <p>This is the content related to Topic 2.</p>
        </div>
        <div class="content" id="content3">
            <h2>Content for Topic 3</h2>
            <p>This is the content related to Topic 3.</p>
        </div>
        
    </div>

    <div class="content">
        
        <p></p>
    </div>
<script src="course1.js"></script>
</body>
</html>