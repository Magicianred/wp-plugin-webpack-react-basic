import React from 'react'
import ReactDOM from 'react-dom'
import './styles/index.scss'

const title = 'React with Webpack and Babel for WP Frontend'

const rootElements = document.getElementsByClassName('mgr-wppwr-plugin')

if (rootElements) {
  // eslint-disable-next-line no-plusplus
  for (let i = 0; i < rootElements.length; i++) {
    ReactDOM.render(<div>{title}</div>, rootElements[i])
  }
}
