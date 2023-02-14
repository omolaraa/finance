<?php include 'components/header.php'; ?>

<?php
$team = [
    [
        'img-src' => "./assets/images/team-1.jpg",
        'name' => 'Simon Cowell',
        'title' => 'Executive Officer'
    ],
    [
        'img-src' => './assets/images/team-2.jpg',
        'name' => 'Simon Cowell',
        'title' => 'Executive Officer'
    ],
    [
        'img-src' => './assets/images/team-3.jpg',
        'name' => 'Simon Cowell',
        'title' => 'Executive Officer'
    ],
    [
        'img-src' => './assets/images/team-4.jpg',
        'name' => 'Simon Cowell',
        'title' => 'Executive Officer'
    ],
    [
        'img-src' => './assets/images/team-1.jpg',
        'name' => 'Simon Cowell',
        'title' => 'Executive Officer'
    ],
    [
        'img-src' => './assets/images/team-2.jpg',
        'name' => 'Simon Cowell',
        'title' => 'Executive Officer'
    ]
];
?>
 <section id="home" class="intro-section">
    <div class="container">
<div class="row d-flex align-items-center">
  <div class="col-lg-6 intros">
    <div class="intros-headings mb-4 d-grid gap-3">
      <h1>About Consulting Agency</h1>
      <h6>Lorem ipsum dolor sit amet consectetur adipisicing elit.
        Aspernatur facere neque facilis praesentium necessitatibus.</h6>
    </div>
    <?php include 'components/button.php'; ?>
  </div>
  <div class="col-lg-6 intros">
    <img src="./assets/images/Money motivation _Monochromatic2.png" alt="illustration" class="intros-image">
  </div>
</div>
</div>
</section>

<section class="section-strategy">
  <div class="container-fluid">
    <div class="row gap-5">
      <div class="col-lg-6 col-md-12 col-sm-12 strategy-description">
        <div class="heading mb-4">
          <h5 class="heading-top text-start fw-bold">Who We Are</h5>
          <h1 class="heading-bottom fw-bold">Amazing Consulting Providing Agency</h1>
        </div>

        <h3 class="text d-flex flex-column gap-1 ">
          <span class="text-bottom">Explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account osystem, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness dislikes</span>
        </h3>
        <?php include 'components/button.php'; ?>
      </div>
      <div class="col-lg-6 strategy-img">
      <img src="./assets/images/strategy2.png" alt="illustration" class="intros-image">
      </div>
    </div>
  </div>
</section>

<section class="team-section p-5">
    <div class="container-fuid pt-5">
        <div class="heading d-grid justify-content-center mb-5">
            <h5 class="heading-top text-center fw-bold">Our Team</h5>
            <h1 class="heading-buttom fw-bold">Tailored expertise for your success</h1>
        </div>

        <div class="row justify-content-center gap-2">

            <?php foreach ($team as $person) : ?>
                <div class="team col-lg-4 col-md-6 col-sm-12  d-grid gap-3">
                    <img src="<?php echo $person['img-src']; ?>" alt="Team picture">

                    <div class="team-intro d-flex align-items-center">

                        <h3 class="text d-flex flex-column w-100">
                            <span class="text-top"><?php echo $person['name']; ?></span>
                            <span class="text-bottom"><?php echo $person['title']; ?></span>
                        </h3>

                        <a href="#" class="social-link text-end">
                            <i class="fa-brands fa-linkedin-in social-icon"></i>
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>
    </div>
</section>

<?php include 'components/footer.php'; ?>