document.getElementById('search-button').addEventListener('click', function() {
    const searchTerm = document.querySelector('.search-bar input').value;
    alert('Search for: ' + searchTerm);
});

document.getElementById('logout').addEventListener('click', function(e) {
    e.preventDefault();
    alert('Logging out...');
    // Implement logout functionality here
});
