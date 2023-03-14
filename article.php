<?php include 'components/header.php'; ?>

    <?php

    $sql = 'SELECT * FROM posts';
    $result = mysqli_query($conn_2, $sql);
    $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);

    ?>
    <?php if (empty($posts)) : ?>
        <p class="my-4">No posts available</p>
    <?php endif; ?>

    <section class="bg-dark text-light p-5 text-center">
        <div class="container">
            <h1 class="my-5">Blog Details</h1>
        </div>
    </section>
    <section class="article p-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4">

                    <div class="card border-0 mb-3 p-3 ps-4">
                        <h2 class="mb-5">Popular Feeds</h2>
                        <div class="side-bar row g-0">
                            <?php foreach ($posts as $post) : ?>
                                <div class="col-md-3">
                                    <img src="<?php echo $post['articleImg'] ?>" class="side-bar-img img-fluid" alt="...">
                                </div>
                                <div class="col-md-9">
                                    <div class="card-body">
                                        <h5 class="card-title">A Better Alternative To Spread Sheets.</h5>
                                        <p class="card-text"><?php echo $post['articleDate'] ?></p>
                                    </div>
                                </div>
                            <?php endforeach ?>
                            <?php foreach ($posts as $post) : ?>
                                <div class="col-md-3">
                                    <img src="<?php echo $post['articleImg'] ?>" class="side-bar-img img-fluid" alt="...">
                                </div>
                                <div class="col-md-9">
                                    <div class="card-body">
                                        <h5 class="card-title">A Better Alternative To Spread Sheets.</h5>
                                        <p class="card-text"><?php echo $post['articleDate'] ?></p>
                                    </div>
                                </div>
                            <?php endforeach ?>
                        </div>
                    </div>
                   
                </div>
                <div class="col-md-8">
                        <div class="bg-light text-dark">

                            <div class="card border-0">
                                <img src="assets/images/team-1-copy.jpg" alt="blog" class="card-img rounded-0 img-fluid mb-3">
                                <div class="card-body p-4 pb-5 ">
                                    <div class="d-flex justify-content-start">
                                        <p><?php echo $posts[0]['articleDate'] ?></p>
                                        <p class="mx-5">Comments(0)</p>
                                    </div>
                                    <h3 class="card-title mb-3"><?php echo $posts[0]['articleTitle'] ?></h3>
                                    <p class="card-text"><?php echo $posts[0]['article'] ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
    </section>
    <?php include 'components/footer.php';?>