<?php
    include_once("templates/header.php");

    if(isset($_GET['id'])) {
        
        $postId = $_GET['id'];  //id do post
        $currentPost;   // variavel do post atual

        foreach($posts as $post) {  // para cada posts 

            if($post['id'] == $postId) { // se o id do post for igual ao id do array de dados
                $currentPost = $post;  // ele se torna o post atual
            }
        }

    }

?>
    <h1><?= $currentPost['title'] ?></h1>
<?php
    include_once("templates/footer.php");
?>