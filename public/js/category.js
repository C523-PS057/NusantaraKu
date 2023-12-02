import province from '../data/province.js';

const select = document.querySelector('#filter-provinsi');
const selectOptions = province.map((prov) => `<option value="${prov.name.toLowerCase()}">${prov.name}</option>`);

select.innerHTML += selectOptions.join('');
