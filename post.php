<?php
    include_once("templates/header.php");

    if(isset($_GET['id'])) {
        $postId = $_GET['id'];
        $currentPost;

        foreach($posts as $post) {
            if($post['id'] == $postId) {
                $currentPost = $post;
            }
        }
    }
?>

    <main id="post-container">
        <div class="content-container">
            <h1 class="main-title"><?= $currentPost['title'] ?></h1>
            <p class="post-description"><?= $currentPost['description'] ?></p>
            <div class="img-container">
                <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
            </div>
            <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate sapiente facilis perspiciatis autem amet tempora nesciunt repellendus ut libero excepturi qui, architecto tenetur voluptate error. Similique explicabo quas deserunt officiis.
            Enim consectetur, placeat nobis, incidunt rerum in ab provident expedita quam nostrum voluptate, explicabo quae? Quibusdam eum ab itaque accusamus minima sequi culpa, placeat aspernatur expedita autem consectetur quo eaque?
            Velit corrupti harum possimus eum nam excepturi nihil modi mollitia similique ipsam ea corporis, aspernatur reprehenderit qui eius ipsa est quisquam natus vero. Praesentium ad, expedita quis magni in molestias.
            Corrupti accusamus veritatis fuga placeat fugiat ex neque veniam minus odit? Optio nostrum, libero laborum quis voluptate repudiandae modi magnam nulla, odio sapiente consectetur soluta animi. Autem consectetur sit error.
            Quaerat neque pariatur minima aliquid unde cupiditate vitae excepturi, cumque, sapiente, beatae provident nulla saepe hic omnis qui nobis. Suscipit quia quis sunt iste voluptates sequi quisquam incidunt error omnis.</p>
            <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate sapiente facilis perspiciatis autem amet tempora nesciunt repellendus ut libero excepturi qui, architecto tenetur voluptate error. Similique explicabo quas deserunt officiis.
            Enim consectetur, placeat nobis, incidunt rerum in ab provident expedita quam nostrum voluptate, explicabo quae? Quibusdam eum ab itaque accusamus minima sequi culpa, placeat aspernatur expedita autem consectetur quo eaque?
            Velit corrupti harum possimus eum nam excepturi nihil modi mollitia similique ipsam ea corporis, aspernatur reprehenderit qui eius ipsa est quisquam natus vero. Praesentium ad, expedita quis magni in molestias.
            Corrupti accusamus veritatis fuga placeat fugiat ex neque veniam minus odit? Optio nostrum, libero laborum quis voluptate repudiandae modi magnam nulla, odio sapiente consectetur soluta animi. Autem consectetur sit error.
            Quaerat neque pariatur minima aliquid unde cupiditate vitae excepturi, cumque, sapiente, beatae provident nulla saepe hic omnis qui nobis. Suscipit quia quis sunt iste voluptates sequi quisquam incidunt error omnis.</p>
        </div>

        <aside id="nac-container">
            <h3 id="tags-title">Tags</h3>
            <ul id="tag-list">
                <?php foreach($currentPost['tags'] as $tag): ?>
                    <li><a href="#"><?= $tag ?></a></li>
                <?php endforeach; ?>
            </ul>

            <h3 id="categories-title">Categorias</h3>
            <ul id="categories-list">
                <?php foreach($categories as $category): ?>
                    <li><a href=""><?= $category ?></a></li>
                <?php endforeach; ?>
            </ul>
        </aside>
    </main>  

<?php
    include_once("templates/footer.php");
?> 