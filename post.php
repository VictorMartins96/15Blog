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
    <main id="post-container">
        <div class="content-container">
            <h1 id="main-title"><?= $currentPost['title']?></h1>
            <p><?= $currentPost['description']?></p>
            <div class="img-container">
                <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img']?>" alt="<?= $currentPost['title']?>">
            </div>
            <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum doloribus cupiditate neque, harum numquam magni doloremque distinctio dolorem officia ipsum quasi, explicabo provident repudiandae soluta rem rerum iusto non labore!
            Natus quas rerum animi excepturi ducimus! Ipsum, earum quibusdam fugiat facilis, temporibus aspernatur dolore voluptatum sapiente commodi, unde nemo ab molestias perspiciatis mollitia cupiditate quia quisquam provident possimus! Debitis, sed.
            Error quidem optio cupiditate enim! Ab hic ad vel quis accusantium possimus nihil iste modi harum atque rem officiis accusamus quibusdam, voluptates distinctio cumque laborum asperiores facilis totam nemo assumenda.
            Labore, vitae perspiciatis praesentium explicabo officiis obcaecati eveniet aliquam repellendus quia ipsum odio similique, quos, soluta in voluptatem! Vero nisi odit tempora reiciendis iste ipsum beatae omnis in molestiae id!
            Quisquam nam tenetur ea ex odit aspernatur deleniti iure esse dolorem facere id accusamus nulla, totam magni atque officia nihil, ipsum reiciendis, iusto aut impedit dolorum enim? Amet, neque unde.
            Praesentium, dolorum excepturi. Inventore pariatur neque iusto corporis eum necessitatibus eaque iste hic facilis ratione temporibus, impedit repudiandae obcaecati fuga, alias beatae sequi placeat aperiam, modi ex laudantium! Facilis, hic.
            Fuga, odit cupiditate ut, fugit molestias aliquam expedita blanditiis perspiciatis minima repudiandae, sed architecto autem! Officiis excepturi, consectetur quae dolorum aut iusto! Quidem, eum iure! Unde fugit dignissimos mollitia soluta?
            Recusandae laudantium molestias odit nam autem, ducimus vitae quasi, debitis nulla eaque voluptas minus, voluptatum nemo deleniti! Fuga explicabo laborum, minus quidem nihil eligendi necessitatibus, expedita nulla in ratione vel?
            Consequatur nulla a culpa. Rem animi laboriosam porro consequuntur eos, odio nobis ratione praesentium alias nesciunt aperiam dolores minus perferendis nostrum architecto reprehenderit maxime! Vero cupiditate dicta sapiente perspiciatis eveniet.
            Natus quis numquam asperiores suscipit eveniet! Blanditiis placeat provident suscipit nam consequatur vero minus quasi necessitatibus, sequi excepturi totam assumenda reprehenderit optio impedit voluptatibus minima tempore quam hic laudantium nisi!</p>
        </div>
    <aside id="nav-container">
        <h3 id="tags-title">Tags</h3>
            <ul id="tag-list">
                <?php foreach($currentPost['tags'] as $tag): ?>
                    <li><a href="#"><?= $tag ?></a></li>
                <?php endforeach; ?>
            </ul>
        <h3 id="categories-title">Categorias</h3>
            <ul id="categories-list">
                <?php foreach($categories as $category): ?>
                    <li><a href="#"><?= $category ?></a></li>
                <?php endforeach; ?>
            </ul>
    </aside>
</main>

<?php
    include_once("templates/footer.php");
?>