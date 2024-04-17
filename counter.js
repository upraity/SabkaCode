document.addEventListener('DOMContentLoaded', function () {
    // Check if the page count exists in local storage
    let pageCount = localStorage.getItem('pageCount');

    // If not, initialize it to 0
    if (pageCount === null) {
        pageCount = 0;
    }

    // Display the initial page count
    document.getElementById('pageCount').textContent = pageCount;

    // Increment the page count each time the page is loaded
    pageCount++;
    
    // Update the displayed count
    document.getElementById('pageCount').textContent = pageCount;

    // Save the updated count to local storage
    localStorage.setItem('pageCount', pageCount.toString());
});
