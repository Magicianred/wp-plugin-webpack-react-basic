# wp-plugin-webpack-react-basic
A simple starter kit to develop wp plugin with webpack and react.  

This repository has the goal to make simple develop WP Plugin with React.  
You have to develop react in isolate way, then test it in WP running live version of React app and then build react and zip for create and distribute your plugin.  

WP Plugin can activate React in frontend by *shortcode* or insert in *the_content* of posts.  

Also the WP Plugin configuration active React to show data, for example you can import News throw wep api call by React.  

## How to use

1. ### Create a react app
    1. Go to *react* folder
    2. Edit file *index.js* for create frontend app (shortcode or post page)
    3. Edit file *admin.js* for create admin app
    4. use command *npm start* to develop react app outside WP
    5. use command *npm run build* to build react app to show outside WP
    6. use command *npm run startBuilded to exec builded react app outside WP (use *http-server* package)
    7. use command *npm run wpBuild* to build react app in WP folder

    [Read more about *webpack-boilerplate*](react/README.md)

2. ### Edit WP Plugin (local version)
    (after create react app)
    1. Go to *mgr_wppwr_plugin_local*
    2. edit constant $localServer with the url of react started version (for example: ```http://localhost:8080```)
    3. zip folder *mgr_wppwr_plugin_local* and import (and active) it in your Wordpress (or copy folder in *wp-content/plugin/* Wordpress folder)
    4. start react with *npm start* command
    5. edit file and see the result inside WP. You can see and correct the design before build the react app

3. ### Edit WP Plugin
    (after create react app)
    1. Go to *mgr_wppwr_plugin*
    2. edit plugin files
    3. zip folder *mgr_wppwr_plugin* and import (and active) it in your Wordpress (or copy folder in *wp-content/plugin/* Wordpress folder)

## References, Credits and Inspirations

- For webpack 5 configuration  
[taniarascia/webpack-boilerplate](https://github.com/taniarascia/webpack-boilerplate)


