document.querySelector('.search-btn').addEventListener('click', function() {
    const searchTerm = document.querySelector('.search-bar').value;
    // You can implement search functionality here
    alert('Search for: ' + searchTerm);
});

document.querySelector('.logout-btn').addEventListener('click', function() {
    // Implement logout functionality here
    alert('Logging out...');
});
