function showContent(contentId) {
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
}
