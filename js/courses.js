//This is a Script for Function Design only
let activeButtonId = null;

function showContent(contentId, buttonId) {
    var allContents = document.querySelectorAll('.content');
    allContents.forEach(function(content) {
        content.style.display = 'none';
        content.classList.remove('active');
    });

    var selectedContent = document.getElementById(contentId);
    if (selectedContent) {
        setTimeout(function() {
            selectedContent.style.display = 'block';
            selectedContent.classList.add('active');
        }, 200);
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

// Show the first topic by default
document.addEventListener("DOMContentLoaded", function() {
    showContent('content1', 'button1');
});

//LINKING PAGES TOGETHER
//Mathematics
function mathematics() {
    window.location.href = '/IT-ELECT-FINALPROJ-main/Content/math.php';
}

//English
function english() {
    window.location.href = '/IT-ELECT-FINALPROJ-main/Content/english.php';
}

//Science
function science() {
    window.location.href = '/IT-ELECT-FINALPROJ-main/Content/science.php';
}

//DELAY IN COURSE PANEL
document.addEventListener("DOMContentLoaded", function() {
    var delayInMilliseconds = 1000;
    function redirect_to_mainpage() {
    window.location.href = "/IT-ELECT-FINALPROJ-main/User-interface/Login_form/index.php";
    }
    function redirect_aboutus() {
    window.location.href = "/IT-ELECT-FINALPROJ-main/User-interface/Login_form/index.php #aboutus";
    }

    document.getElementById("home").addEventListener("click", function(event) {
    event.preventDefault();
    setTimeout(redirect_to_mainpage, delayInMilliseconds);
    });

    document.getElementById("aboutus").addEventListener("click", function(event) {
    event.preventDefault();
    setTimeout(redirect_aboutus, delayInMilliseconds);
    });
});

