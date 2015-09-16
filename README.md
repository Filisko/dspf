# Damn Simple PHP Framework
Damn Simple PHP Framework is a small and simple PHP framework that will help you to develop your web applications easily.

Damn Simple PHP Framework uses the lightest PHP database framework to accelerate development called [Medoo](http://medoo.in/).

## Installation
* Download and extract the repository in your webserver
* Go to **application/config/Config.php** and configure it
* Now you're ready to go!

## How to create a simple page
### Controller
To create a controller, you must go to **application/controllers** folder and create a php file with your controller's name.
```php
<?php
// page.php
class Page extends Controller {

    public function index() {
        // The 'Menu' helper comes from application/helpers/menu.php. Remember that if you want to include that page in the navigation menu, you must go and add the page to application/helpers/menu.php
        $menu = $this->helper('Menu');
        // If you didn't add the page to the menu, then you should delete the next line, or leave it if you need it, but you mustn't use this method with a value that doesn't exist or it will return an error
        $menu->selected('page');
        
        // Make sure that you have your header in application/view/templates/header.php
        $header = $this->view('templates/header');
        // In your header.php file you must have a 'title' variable declared, and with the next line you will set a value to it
        $header->set('title', 'Page');
        // The same here, but in this case, we are setting the returned value from the 'Menu' helper which is an array
        $header->set('menu', $menu->getMenu());
        // We call the render method to render the view
        $header->render();
        
        // We have to make sure that we have our file in application/views/page/index.php
        $template = $this->view('page/index');
        $template->render();

        // We have to make sure that we have our footer.php file in application/views/template/footer.php
        $footer = $this->view('templates/footer');
        $footer->render();
    }

}

```
