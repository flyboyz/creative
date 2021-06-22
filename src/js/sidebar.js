'use strict'

const body = document.querySelector('body')
const sidebarButton = $('#sidebarButton')

export default () => {
  if (sidebarButton !== null) {
    $(sidebarButton).fancybox({
      src: '#sidebar',
      touch: false,
      baseClass: 'fancybox-sidebar',
      smallBtn: false,
      toolbar: false,
    })
  }
}