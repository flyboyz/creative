'use strict'

let calc = document.querySelector('.ticket__calculator')

export default () => {
  if (calc !== null) {
    let count = parseInt(document.querySelector('.ticket__calculator .count').textContent)

    const countInput = document.querySelector('.ticket__calculator .count')
    const sumInput = document.querySelector('.ticket__calculator .sum span')
    const price = parseInt(document.querySelector('.ticket__calculator .price span').textContent)

    calc.querySelectorAll('.minus, .plus').forEach((item) => {
      item.addEventListener('click', (e) => {
        if (e.currentTarget.classList.contains('minus')) {
          if (count > 1) {
            countInput.innerHTML = --count
          }
        } else {
          if (count < 99) {
            countInput.innerHTML = ++count
          }
        }

        sumInput.innerHTML = count * price
      })
    })
  }
}