'use strict'

let calc = document.querySelector('.ticket__calculator')
let countInput = document.querySelector('.ticket__calculator .count')
let count = parseInt(document.querySelector('.ticket__calculator .count').textContent)
let price = parseInt(document.querySelector('.ticket__calculator .price span').textContent)
let sumInput = document.querySelector('.ticket__calculator .sum span')

export default () => {
  if (calc !== null) {
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