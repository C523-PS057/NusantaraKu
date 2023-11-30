import province from '../data/province.js';

// Render Daftar Provinsi di Section Provinsi
document.addEventListener('DOMContentLoaded', () => {
    const provinceRow = document.querySelector('.province__row');

    const HTML = province.map((prov, index) => {
        return `
        <div class="col-6 col-sm-4 col-md-2">
            <div class="province__item">
                <img src="${prov.urlImg}" />
                <p>${prov.name}</p>
                <a href="/provinsi/${index + 1}" class="province__link"></a>
            </div>
        </div>`;
    });

    provinceRow.innerHTML = HTML.join('');
});
