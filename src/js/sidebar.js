'use strict'

import { Fancybox } from '@fancyapps/ui'

export default () => {
  let sidebar
  let sidebarBtn = document.getElementById('sidebarButton')

  sidebarBtn.addEventListener('click', () => {
    if (!sidebarBtn.classList.contains('opened')) {
      sidebar = new Fancybox([{
        src: document.getElementById('sidebar'),
        type: 'inline',
        closeButton: false,
        animated: false,
      }])

      sidebarBtn.classList.add('opened')
      sidebar.showLoading()
    } else {
      sidebar.close()
      sidebarBtn.classList.remove('opened')
    }
  })
}