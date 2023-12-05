// Dropdown User Toggle
const dropdownButtons = document.querySelectorAll('.dropdown-user__button');
dropdownButtons.forEach((btn) => {
    btn.addEventListener('click', function () {
        dropdownButtons.forEach((otherBtn) => {
            if (otherBtn !== btn) {
                const otherDropdownContent = otherBtn.querySelector('.dropdown-user');
                otherDropdownContent.classList.remove('active');
                otherBtn.querySelector('i').style.transform = 'rotateX(0deg)';
            }
        });

        const dropdownContent = this.querySelector('.dropdown-user');
        dropdownContent.classList.toggle('active');

        dropdownContent.classList.contains('active') ? (this.querySelector('i').style.transform = 'rotateX(180deg)') : (this.querySelector('i').style.transform = 'rotateX(0deg)');
    });
});
