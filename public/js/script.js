function validateForm(event) {
    let userRole = document.getElementById('user').value;
    let username = document.getElementById('username').value;
    let password = document.getElementById('password').value;
    let errorMessage = '';

    if (userRole.trim() === '') {
        errorMessage = 'User role is required.';
    } else if (username.trim() === '') {
        errorMessage = 'Username is required.';
    } else if (password.trim() === '') {
        errorMessage = 'Password is required.';
    }

    if (errorMessage) {
        event.preventDefault();
        document.querySelector('.error-message').innerText = errorMessage;
    }
}
