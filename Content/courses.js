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
        if (activeButtonId) {
            const prevActiveButton = document.getElementById(activeButtonId);
            prevActiveButton.classList.remove('active');
        }
        const currentButton = document.getElementById(buttonId);
        currentButton.classList.add('active');
        activeButtonId = buttonId;
    }
}

//Mathematics
function mathematics() {
    window.location.href = '/IT-ELECT-FINALPROJ-main/Content/MATH/course1.php';
}

//English
function english() {
    window.location.href = '/IT-ELECT-FINALPROJ-main/Content/ENGLISH/english.php';
}

//Science
function science() {
    window.location.href = '/IT-ELECT-FINALPROJ-main/Content/SCIENCE/science.php';
}

document.addEventListener("DOMContentLoaded", function() {
    var delayInMilliseconds = 1000;
    function redirect_to_Courses() {
      window.location.href = "/IT-ELECT-FINALPROJ-main/Content/courses-panel.php";
    }
    function redirect_Courses_banner() {
      window.location.href = "/IT-ELECT-FINALPROJ-main/Content/courses-panel.php";
    }

    document.getElementById("join-class").addEventListener("click", function(event) {
      event.preventDefault();
      setTimeout(redirect_to_Courses, delayInMilliseconds);
    });

    document.getElementById("courses").addEventListener("click", function(event) {
      event.preventDefault();
      setTimeout(redirect_Courses_banner, delayInMilliseconds);
    });
  });