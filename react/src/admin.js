import React from 'react'
import ReactDOM from 'react-dom'
import './styles/index.scss'

const title = 'React with Webpack and Babel for WP Admin'

const rootElement = document.getElementById('mgr-wppwr-plugin-admin')

if (rootElement) {
  ReactDOM.render(<div>{title}</div>, rootElement)
}
