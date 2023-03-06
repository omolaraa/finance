<?php include 'components/header.php'; ?>

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
    <div class="row g-3">
    <?php if(empty($posts)): ?>
      <p class="my-4">No posts available</p>
    <?php endif; ?>
    <?php foreach ($posts as $post) : ?>
        <div class="col-md">
            <div class="card">
            <img src="<?php echo $post['articleImg'] ?>" alt="blog" class="card-img-top img-fluid  mb-3">
                <div class="card-body">
                     <div class="d-flex justify-content-between">
                        <p><?php echo $post['articleDate'] ?></p>
                        <p>Comments(0)</p>
                     </div>
                    <h3 class="card-title mb-3"><?php echo $post['articleTitle'] ?></h3>
                    <p class="card-text"><?php echo $post['articleDescription'] ?></p>
                   <a href="#" class="btn btn-outline-dark btn-lg">Read More</a>
                </div>
            </div>
        </div>
        <?php endforeach ?>
    </div>
 </div>
</section>

<?php include 'components/footer.php';?>