<!DOCTYPE html>
<html lang="en">

<head>
<?php include '../config/database.php'; ?>  

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../assets/css/style.css">
  <link rel="stylesheet" href="../assets/css/fontawesome.css">
  <link rel="stylesheet" href="blog.css">
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
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="services.php">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Blog/blog.php">Blog</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact</a>
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

<section class="bg-dark text-light p-5 text-center">
    <div class="container">
       <h1 class="my-5">Blog</h1>
    </div>
</section>
<section class="p-5">
 <div class="container">
    <div class="row g-3 align-items-center">
    <?php if(empty($posts)): ?>
      <p class="my-4">No posts available</p>
    <?php endif; ?>
    <?php foreach ($posts as $post) : ?>
        <div class="col-md">
            <div class="card">
            <img src="<?php echo $post['articleImg'] ?>" alt="blog" class="card-img img-fluid  mb-3">
                <div class="card-body">
                     <div class="d-flex justify-content-between">
                        <p><?php echo $post['articleDate'] ?></p>
                        <p>Comments(0)</p>
                     </div>
                    <h4 class="card-title mb-3"><?php echo $post['articleTitle'] ?></h4>
                    <p class="card-text"><?php echo $post['articleDescription'] ?></p>
                   <a href="article.php" class="btn btn-outline-dark btn-lg">Read More</a>
                </div>
            </div>
        </div>
        <?php endforeach ?>
    </div>
 </div>
</section>

<?php include '../components/footer.php';?>