function showSection(section) {
    const sections = ['user', 'library', 'settings'];
    sections.forEach(sec => {
        document.getElementById(sec).style.display = sec === section ? 'block' : 'none';
    });
}

function logout() {
    alert('Logging out...');
    // Add your logout functionality here
}
