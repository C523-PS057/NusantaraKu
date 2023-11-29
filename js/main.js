// Render Daftar Provinsi di Navbar
import provinceArray from '../data/provinsi.js';
document.addEventListener('DOMContentLoaded', () => {
    const dropdownV2List2 = document.querySelector('.dropdown-v2__list2');

    const HTML = provinceArray.map((province, index) => {
        return `
        <li class='dropdown-v2__item2'>
            <a href=/provinsi/${index + 1}>${province}</a>
        </li>`;
    });

    console.log(dropdownV2List2);

    dropdownV2List2.innerHTML = HTML.join('');
});

// Change Navbar Background Color on scroll
window.onscroll = function () {
    scrolledNavbar();
};

function scrolledNavbar() {
    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
        document.querySelector('.navbar').classList.add('scrolled');
    } else {
        document.querySelector('.navbar').classList.remove('scrolled');
    }
}

// Dropdown Toggle
const dropdownButtons = document.querySelectorAll('.dropdown-v2__button');

dropdownButtons.forEach((btn) => {
    btn.addEventListener('click', function () {
        dropdownButtons.forEach((otherBtn) => {
            if (otherBtn !== btn) {
                const otherDropdownContent = otherBtn.querySelector('.dropdown-v2');
                otherDropdownContent.classList.remove('active');
                otherBtn.querySelector('i').style.transform = 'rotateX(0deg)';
            }
        });

        const dropdownContent = this.querySelector('.dropdown-v2');
        dropdownContent.classList.toggle('active');

        dropdownContent.classList.contains('active') ? (this.querySelector('i').style.transform = 'rotateX(180deg)') : (this.querySelector('i').style.transform = 'rotateX(0deg)');
    });
});
