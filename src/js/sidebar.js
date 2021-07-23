'use strict'

const sidebarClass = 'show-sidebar'

export default () => {
  let body = document.querySelector('body')
  let sidebarBtn = document.getElementById('sidebarButton')

  sidebarBtn.addEventListener('click', () => {
    if (!body.classList.contains(sidebarClass)) {
      body.classList.add(sidebarClass)
    } else {
      body.classList.remove(sidebarClass)
    }
  })
}