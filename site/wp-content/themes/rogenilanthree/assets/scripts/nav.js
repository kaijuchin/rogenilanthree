// JavaScript to toggle mobile navbar
document.getElementById('navbar-toggle').addEventListener('click', function () {
    let navbarLinks = document.getElementById('navbar-links');
    if (navbarLinks.classList.contains('hidden')) {
        navbarLinks.classList.remove('hidden');
        navbarLinks.classList.add('flex');
        navbarLinks.classList.add('flex-col');
    } else {
        navbarLinks.classList.add('hidden');
        navbarLinks.classList.remove('flex', 'flex-col');
    }
})

document.getElementById('m-windows-toggle').addEventListener('click', function () {
    let dropdown = document.getElementById('m-windows-dropdown');
    if (dropdown.classList.contains('hidden')) {
        dropdown.classList.remove('hidden');
    } else {
        dropdown.classList.add('hidden');
    }
})

document.getElementById('m-about-toggle').addEventListener('click', function () {
    let dropdown = document.getElementById('m-about-dropdown');
    if (dropdown.classList.contains('hidden')) {
        dropdown.classList.remove('hidden');
    } else {
        dropdown.classList.add('hidden');
    }
})

// Reset navbar when resizing screen.
window.addEventListener('resize', () => {
    console.log('Screen width changed:', window.innerWidth);
    // 在这里添加你的代码
    if (window.innerWidth > 768) {
        let navbarLinks = document.getElementById('navbar-links');
        navbarLinks.classList.add('hidden');
        navbarLinks.classList.remove('flex', 'flex-col');
        let dropdownElements = document.querySelectorAll('.dropdown');
        dropdownElements.forEach(element => {
            element.classList.add('absolute', 'bg-grey', 'left-3/4', 'opacity-0', 'group-hover:opacity-100', 'bg-neutral-100', 'shadow-lg', 'rounded',
                'z-10', '-translate-x-1/2', '-translate-y-2', 'group-hover:translate-y-3', 'transition-all', 'duration-500', 'ease-in-out');
        });
    } else {
        let dropdownElements = document.querySelectorAll('.dropdown');
        dropdownElements.forEach(element => {
            element.classList.remove('absolute', 'bg-grey', 'left-3/4', 'opacity-0', 'group-hover:opacity-100', 'bg-neutral-100', 'shadow-lg', 'rounded',
                'z-10', '-translate-x-1/2', '-translate-y-2', 'group-hover:translate-y-3', 'transition-all', 'duration-500', 'ease-in-out');
        });
    }
});