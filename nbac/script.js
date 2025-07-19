const container = document.getElementById('container');
const registerBtn = document.getElementById('register');
const loginBtn = document.getElementById('login');

registerBtn.addEventListener('click', () => {
    container.classList.add("active");
});

loginBtn.addEventListener('click', () => {
    container.classList.remove("active");
});

function SignIn() {
    const email = document.getElementById('email').value;
    const password = document.getElementById('pw').value;
    
    if (!email || !password) {
        Swal.fire({
            title: "Error!",
            text: "Please fill in all fields.",
            icon: "error"
        });
        return;
    }
    
    const formData = new FormData();
    formData.append('email', email);
    formData.append('password', password);
    
    fetch('login.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            Swal.fire({
                title: "Login Successful!",
                text: "Welcome to NBAC.",
                icon: "success"
            }).then(() => {
                window.location.href = 'index.php';
            });
        } else {
            Swal.fire({
                title: "Login Failed!",
                text: data.message,
                icon: "error"
            });
        }
    })
    .catch(error => {
        console.error('Error:', error);
        Swal.fire({
            title: "Error!",
            text: "An unexpected error occurred. Please try again.",
            icon: "error"
        });
    });
}

function Signup() {
    const name = document.querySelector('.sign-up input[type="text"]').value;
    const email = document.querySelector('.sign-up input[type="email"]').value;
    const password = document.querySelector('.sign-up input[type="password"]').value;
    
    if (!name || !email || !password) {
        Swal.fire({
            title: "Error!",
            text: "Please fill in all fields.",
            icon: "error"
        });
        return;
    }
    
    if (password.length < 8) {
        Swal.fire({
            title: "Error!",
            text: "Password must be at least 8 characters long.",
            icon: "error"
        });
        return;
    }
    
    const formData = new FormData();
    formData.append('name', name);
    formData.append('email', email);
    formData.append('password', password);
    
    fetch('register.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            Swal.fire({
                title: "Registration Successful!",
                text: data.message,
                icon: "success"
            }).then(() => {
                container.classList.remove("active");
                
                document.querySelector('.sign-up form').reset();
            });
        } else {
            Swal.fire({
                title: "Registration Failed!",
                text: data.message,
                icon: "error"
            });
        }
    })
    .catch(error => {
        console.error('Error:', error);
        Swal.fire({
            title: "Error!",
            text: "An unexpected error occurred. Please try again.",
            icon: "error"
        });
    });
}

document.addEventListener('DOMContentLoaded', function() {
    const forms = document.querySelectorAll('form');
    forms.forEach(form => {
        form.addEventListener('submit', function(e) {
            e.preventDefault();
        });
    });
});