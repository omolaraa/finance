<?php include 'components/header.php'; ?>
<?php

$sql = 'SELECT * FROM services'; 
$result = mysqli_query($conn_1, $sql);
$services = mysqli_fetch_all($result, MYSQLI_ASSOC);


?>
 <section id="home" class="intro-section">
    <div class="container">
<div class="row d-flex align-items-center">
  <div class="col-lg-6 col-md-12 intros">
    <div class="intros-headings mb-4 d-grid gap-3">
      <h1>Professional Business Consulting Agency</h1>
      <h6>Lorem ipsum dolor sit amet consectetur adipisicing elit.
        Aspernatur facere neque facilis praesentium necessitatibus.</h6>
    </div>
    <?php include 'components/button.php'; ?>
  </div>
  <div class="col-lg-6 col-md-12 intros">
    <img src="./assets/images/Motivation_Monochromatic.png" alt="illustration" class="intros-image">
  </div>
</div>
</div>
</section>

<section class="services p-5">
  <div class="container-fuid pt-5">
    <div class="heading d-grid justify-content-center mb-5">
      <h5 class="heading-top text-center fw-bold">Our Expertise</h5>
      <h1 class="heading-buttom fw-bold">Tailored expertise for your success</h1>
    </div>
    <div class="row justify-content-center gap-4">

    <?php if(empty($services)): ?>
      <p class="col-md-12 mt-3">There is no feedback</p>
    <?php endif; ?>

      <?php foreach ($services as $service) : ?>
        <div class="col-md-3 service d-grid gap-5">
          <div class="service--icon text-center">
            <i class="<?php echo $service['icon']; ?>"></i>
          </div>
          <div class="text">
            <h3 class="text-top"><?php echo $service['heading-top']; ?></h3>
            <h6 class="text-buttom"><?php echo $service['heading-bottom']; ?></h6>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="clients">
        <ul class="client-list d-flex justify-content-evenly">
            <li class="client"><i class="fa-sharp fa-solid fa-blog"></i></li>
            <li class="client"><i class="fa-brands fa-wordpress"></i></li>
            <li class="client"><i class="fa-brands fa-joomla"></i></li>
            <li class="client"><i class="fa-brands fa-google"></i></li>
            <li class="client"><i class="fa-brands fa-digg"></i></li>
        </ul>
      </section>

<?php include 'components/footer.php'; ?>