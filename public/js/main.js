import province from '../data/province.js';

// Render Daftar Provinsi di Navbar
document.addEventListener('DOMContentLoaded', () => {
    const dropdownV2List2 = document.querySelector('.dropdown-v2__list2');

    const HTML = province.map((prov, index) => {
        return `
        <li class='dropdown-v2__item2'>
            <a href=/provinsi/${index + 1}>${prov.name}</a>
        </li>`;
    });

    dropdownV2List2.innerHTML = HTML.join('');
});

// Navbar Dropdown Toggle
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
