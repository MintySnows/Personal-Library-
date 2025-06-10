document.getElementById('profileForm').addEventListener('submit', function(event) {
    event.preventDefault();
    alert('Profile saved!');
});

document.getElementById('cancelBtn').addEventListener('click', function() {
    document.getElementById('userTag').value = '';
    document.getElementById('userName').value = '';
    document.getElementById('email').value = '';
});
