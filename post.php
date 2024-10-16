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
            <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Non fugiat architecto quibusdam nesciunt repudiandae nobis ut? Amet, est doloremque. Blanditiis reprehenderit deserunt beatae dignissimos officia unde exercitationem suscipit ipsum nihil.
            Ad rerum dolorem in ducimus, quasi voluptate corporis vero assumenda quia laboriosam modi incidunt repudiandae inventore eligendi natus ut ex distinctio, voluptas rem odit possimus officiis necessitatibus? Reprehenderit, itaque sequi?
            Illum ducimus tenetur omnis, laboriosam ab dolore eos asperiores exercitationem nulla fugit esse, nihil deleniti veritatis dicta sit ratione rerum accusamus quam reprehenderit suscipit nisi in iste tempore. Suscipit, ab!
            Sed dolorum tempore quidem laboriosam officiis possimus veniam culpa sit nemo doloribus impedit, ex velit quae ullam nobis optio aliquam ipsam quia dicta! Ipsa officiis reiciendis quas placeat qui doloribus!
            Tenetur ipsam ab iure. Sapiente aspernatur omnis nam autem mollitia at? Impedit illum necessitatibus pariatur harum natus, cum praesentium quasi nulla laboriosam saepe reprehenderit optio perferendis a molestiae ratione quos?
            Cumque aliquid commodi fuga, autem vitae iste! Sed laboriosam eos repellendus nobis provident iure expedita vero aperiam obcaecati, doloremque odio repellat sapiente placeat quia officiis asperiores aspernatur eveniet minus delectus.
            Velit impedit perferendis, in et dolorem quod expedita dolores a quam dolore molestiae veritatis ducimus blanditiis doloremque autem, exercitationem delectus quibusdam cupiditate, reiciendis architecto earum. Natus aliquam illum facere adipisci!
            Ut et nesciunt iusto quaerat in reprehenderit, iure id velit illum nostrum quasi, at voluptates vero enim tenetur! Corrupti, ipsa error nostrum commodi itaque suscipit nulla! Quisquam assumenda iure officia.
            Unde aperiam quis doloremque necessitatibus ratione eveniet architecto aut accusantium perferendis exercitationem voluptatem id possimus corrupti alias est eum, voluptatibus iusto incidunt vel qui dolore provident, delectus nobis optio. Eligendi.
            Fugiat ratione magnam ullam voluptatem ad doloremque vero aperiam, fugit deleniti odio laudantium porro praesentium eveniet adipisci quae earum quibusdam perferendis exercitationem quia. Voluptate in corrupti expedita architecto saepe sequi.</p>
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