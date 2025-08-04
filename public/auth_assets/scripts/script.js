// Fungsi switch tab
function switchTab(tabName) {
    document.querySelectorAll('.form').forEach(form => {
        form.classList.remove('active');
    });

    document.querySelectorAll('.tab').forEach(tab => {
        tab.classList.remove('active');
    });

    document.getElementById(tabName + '-form').classList.add('active');
    event.currentTarget.classList.add('active');
}

// Membuat floating particles
function createParticles() {
    const particlesContainer = document.getElementById('particles');
    const particleCount = window.innerWidth < 768 ? 20 : 50;

    for (let i = 0; i < particleCount; i++) {
        const particle = document.createElement('div');
        particle.classList.add('particle');

        // Random size between 5px and 15px
        const size = Math.random() * 10 + 5;
        particle.style.width = `${size}px`;
        particle.style.height = `${size}px`;

        // Random position
        particle.style.left = `${Math.random() * 100}vw`;
        particle.style.top = `${Math.random() * 100}vh`;

        // Random animation duration (10s to 30s) and delay
        const duration = Math.random() * 20 + 10;
        particle.style.animationDuration = `${duration}s`;
        particle.style.animationDelay = `${Math.random() * 5}s`;

        // Random opacity
        particle.style.opacity = Math.random() * 0.5 + 0.1;

        particlesContainer.appendChild(particle);
    }
}

// Jalankan saat halaman dimuat
window.addEventListener('load', createParticles);


function togglePassword() {
    const password = document.getElementById('login-password');
    const eyeIcon = document.getElementById('eye-icon');
    
    if (password.type === 'password') {
        password.type = 'text';
        eyeIcon.classList.remove('fa-eye');
        eyeIcon.classList.add('fa-eye-slash');
    } else {
        password.type = 'password';
        eyeIcon.classList.remove('fa-eye-slash');
        eyeIcon.classList.add('fa-eye');
    }
}