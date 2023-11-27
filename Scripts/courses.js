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

    // Your existing logic to show content goes here

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
