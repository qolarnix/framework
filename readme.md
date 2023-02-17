### Overview

This is a small WIP boilerplate/framework for building websites with PHP and modern frontend tooling. 

It uses native PHP templating, extremely similar to WordPress `get_template_part` without the hooks. Routing is handled in a single file `routes.php`.

The module bundler is Rollup. Rollup handles everything including Tailwind, AlpineJS & Live reload on PHP templates.

You can include any PHP library or microframework that you want to replace the standalone router and handle database connections etc.

There is currently no build step other than Rollups default for JS. In the future I will update this repo with different build options including one for static sites.