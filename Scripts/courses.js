//This is a Script for Function Design only
let activeButtonId = null;

function showContent(contentId, buttonId) {
    // Hide all content elements
    var allContents = document.querySelectorAll('.content');
    allContents.forEach(function(content) {
        content.style.display = 'none';
    });

    // Show the selected content
    var selectedContent = document.getElementById(contentId);
    if (selectedContent) {
        selectedContent.style.display = 'inline';
    }

    if (buttonId) {
        // Remove 'active' class from the previously active button
        if (activeButtonId) {
            const prevActiveButton = document.getElementById(activeButtonId);
            prevActiveButton.classList.remove('active');
        }

        // Add the 'active' class to the clicked button
        const currentButton = document.getElementById(buttonId);
        currentButton.classList.add('active');

        // Update the active button ID
        activeButtonId = buttonId;
    }
}

//Mathematics
function mathematics() {
    window.location.href = '/IT-ELECT-FINALPROJ-main/Content/MATH/course1.php';
}

function q1() {
    window.location.href = '/IT-ELECT-FINALPROJ-main/Content/MATH/quiz1.php';
}

function quiz2() {
    window.location.href = '/IT-ELECT-FINALPROJ-main/Content/MATH/quiz2.php';
}

function quiz3() {
    window.location.href = '/IT-ELECT-FINALPROJ-main/Content/MATH/quiz3.php';
}

//English
function english() {
    window.location.href = '/IT-ELECT-FINALPROJ-main/Content/ENGLISH/english.php';
}

//Science
function science() {
    window.location.href = '/IT-ELECT-FINALPROJ-main/Content/SCIENCE/science.php';
}

