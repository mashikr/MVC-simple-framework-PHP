<?php

namespace App\Controllers;

use \Core\View;
use App\Models\Post;

class Posts extends \Core\Controller {
    public function indexAction() {
        // echo "hello from the index action in the Posts controller!";

        // echo '<p>Query string parameters:<pre>' . htmlspecialchars(print_r($_GET, true)) . '</pre></p>';
       // View::renderTemplate('Posts/index.html');
       
       $posts = Post::getAll();
       View::renderTemplate('Posts/index.html', [
           'posts' => $posts
       ]);
       
    }

    public function addNewAction() {
        echo "hello from the addNew action in the Posts controller!";
    }

    public function editAction() {
        echo "Hello from the edit action in the Posts controller";
        echo "<p>Route parameter: <pre>" . htmlspecialchars(print_r($this->route_params, true)) . "</pre></p>";
    }
}

?>