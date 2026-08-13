

document.addEventListener('DOMContentLoaded', () => {
    
    const menuButtons = document.querySelectorAll('.menu-button, .menu-btn');
    menuButtons.forEach(btn => btn.addEventListener('click', toggleMenu));

  
    document.querySelectorAll('.logout').forEach(el => {
        el.addEventListener('click', (e) => {
            e.preventDefault();
            logoutConfirm();
        });
    });

    
    const signupForm = document.getElementById('signupForm');
    if (signupForm) signupForm.addEventListener('submit', validateSignup);


    const loginForm = document.getElementById('loginForm');
    if (loginForm) loginForm.addEventListener('submit', validateLogin);
});

function togglePassword(){
    const password = document.getElementById('password');
    if (!password) return;
    password.type = password.type === 'password' ? 'text' : 'password';
}

function toggleMenu(){
    document.body.classList.toggle('sidebar-collapsed');
}

function logoutConfirm(){
    if (confirm('Are you sure you want to logout?')){
        // redirect to server-side logout handler
        window.location.href = 'logout.php';
    }
}

function validateEmail(email){
    return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
}

function validateSignup(event){
    const form = event.target;
    const username = form.querySelector('input[name="username"]').value.trim();
    const phone = form.querySelector('input[name="phone"]').value.trim();
    const email = form.querySelector('input[name="email"]').value.trim();
    const password = form.querySelector('input[name="password"]').value;

    if (username.length < 3) { alert('Username must be at least 3 characters.'); event.preventDefault(); return false; }
    if (!/^\d{10,}$/.test(phone)) { alert('Enter a valid phone number (at least 10 digits).'); event.preventDefault(); return false; }
    if (!validateEmail(email)) { alert('Enter a valid email address.'); event.preventDefault(); return false; }
    if (password.length < 6) { alert('Password must be at least 6 characters.'); event.preventDefault(); return false; }

    return true;
}

function validateLogin(event){
    const form = event.target;
    const email = form.querySelector('input[name="email"]').value.trim();
    const password = form.querySelector('input[name="password"]').value;

    if (!validateEmail(email)) { alert('Enter a valid email address.'); event.preventDefault(); return false; }
    if (password.length === 0) { alert('Enter your password.'); event.preventDefault(); return false; }

    return true;
}
window.togglePassword = togglePassword;
function togglePassword(){

let password=document.getElementById("password");

if(password.type==="password"){

password.type="text";

}

else{

password.type="password";

}

}
