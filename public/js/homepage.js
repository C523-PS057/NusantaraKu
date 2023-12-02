import province from '../data/province.js'
import testimonial from '../data/testimonial.js'

// Render Daftar Provinsi di Section Provinsi
document.addEventListener('DOMContentLoaded', () => {
  const provinceRow = document.querySelector('.province__row')

  const HTML = province.map((prov, index) => {
    return `
        <div class="col-6 col-sm-4 col-md-2">
            <div class="province__item">
                <img src="${prov.urlImg}" />
                <p>${prov.name}</p>
                <a href="/provinsi/${index + 1}" class="province__link"></a>
            </div>
        </div>`
  })

  provinceRow.innerHTML = HTML.join('')
})

// Toggle class active di Section Testimonial
const testimonialItems = document.querySelectorAll('.testimonial__item')

testimonialItems.forEach((item) => {
  item.addEventListener('click', function () {
    testimonialItems.forEach((otherItem) => {
      if (otherItem !== item) {
        otherItem.classList.remove('active')
      }
    })

    setTestimonial(this.dataset.index)
    this.classList.add('active')
  })
})

const setTestimonial = (index) => {
  document.querySelector('.testimonial__name').textContent = testimonial[index].name
  document.querySelector('.testimonial__job').textContent = testimonial[index].job
  document.querySelector('.testimonial__text').textContent = testimonial[index].review
  testimonialItems[index].classList.add('active')
}

setTestimonial(0)
