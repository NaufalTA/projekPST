    const themeToggleBtn = document.getElementById('themeToggle');
    const themeIcon = document.getElementById('themeIcon');

    // Cek preferensi tema di localStorage
    const savedTheme = localStorage.getItem('theme') || 'light';
    document.documentElement.setAttribute('data-bs-theme', savedTheme);
    themeIcon.className = savedTheme === 'dark' ? 'bx bx-sun' : 'bx bx-moon';

    // Fungsi untuk toggle antara dark mode dan light mode
    themeToggleBtn.addEventListener('click', function () {
        const currentTheme = document.documentElement.getAttribute('data-bs-theme');

        if (currentTheme === 'dark') {
            document.documentElement.setAttribute('data-bs-theme', 'light');
            localStorage.setItem('theme', 'light'); // Simpan di localStorage
            themeIcon.className = 'bx bx-moon'; // Ubah ikon menjadi moon
        } else {
            document.documentElement.setAttribute('data-bs-theme', 'dark');
            localStorage.setItem('theme', 'dark'); // Simpan di localStorage
            themeIcon.className = 'bx bx-sun'; // Ubah ikon menjadi sun
        }
    });
