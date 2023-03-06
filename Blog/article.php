<!DOCTYPE html>
<html lang="en">

<head>
    <?php include '../config/database.php'; ?>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/fontawesome.css">
    <link rel="stylesheet" href="article.css">
    <title>Document</title>
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark menu px-5 py-4">
        <div class="container-fluid menu-container">
            <a class="navbar-brand d-flex align-items-center" href="#">
                <i class="fa-brands fa-drupal logo"></i>
                <h3 class="h3-color">Finance <br> Consultants</h1>
            </a>
            <button class="navbar-toggler btn" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon btn-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav p-2 px-5 d-flex gap-3">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../services.php">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="blog.php">Blog</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="../contact.php">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

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
                                <img src="../assets/images/team-1-copy.jpg" alt="blog" class="card-img rounded-0 img-fluid mb-3">
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
</body>

</html>