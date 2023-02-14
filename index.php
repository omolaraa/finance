<?php include 'components/header.php'; ?>
<?php

$services = [
  [
    'icon' => 'fa-brands fa-slack',
    'heading-top' => 'Creating digital advantage',
    'heading-bottom' => 'Creating meaningful and transformative steps toward success'
  ],
  [
    'icon' => 'fa-brands fa-slack',
    'heading-top' => 'Creating digital advantage',
    'heading-bottom' => 'Creating meaningful and transformative steps toward'
  ]
];

 $strategies= [
  [
    'title' => 'Strategy Buildup',
    'description' => 'Quis autem vel eum iure reprehenderit qui eluptate velit esse quam nihil molestiae consequatur'
],
[
  'title' => 'Business Monitoring',
  'description' => 'Quis autem vel eum iure reprehenderit qui eluptate velit esse quam nihil molestiae consequatur'
]
];
?>
   
   <section id="home" class="intro-section">
    <div class="container">
<div class="row d-flex align-items-center">
  <div class="col-lg-6 intros">
    <div class="intros-headings mb-4 d-grid gap-3">
      <h1>Professional Business Consulting Agency</h1>
      <h6>Lorem ipsum dolor sit amet consectetur adipisicing elit.
        Aspernatur facere neque facilis praesentium necessitatibus.</h6>
    </div>
    <?php include 'components/button.php'; ?>
  </div>
  <div class="col-lg-6 intros">
    <img src="./assets/images/Motivation_Monochromatic.png" alt="illustration" class="intros-image">
  </div>
</div>
</div>
</section>

<section class="services  p-5">
  <div class="container-fuid pt-5">
    <div class="heading d-grid justify-content-center mb-5">
      <h5 class="heading-top text-center fw-bold">Our Expertise</h5>
      <h1 class="heading-buttom fw-bold">Tailored expertise for your success</h1>
    </div>
    <div class="row justify-content-center gap-4">

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

<div class="section-strategy">
  <div class="container-fluid">
    <div class="row gap-5">
      <div class="col-lg-6 col-md-12 col-sm-12 strategy-description">
        <div class="heading mb-4">
          <h5 class="heading-top text-start fw-bold">Our Expertise</h5>
          <h1 class="heading-bottom fw-bold">Tailored expertise for your success</h1>
        </div>

        <?php foreach ($strategies as $strategy) : ?>
        <h3 class="text d-flex flex-column gap-1 ">
          <span class="text-top"><?php echo $strategy['title']; ?></span>
          <span class="text-bottom"><?php echo $strategy['description']; ?></span>
        </h3>
        <?php endforeach; ?>
        <?php include 'components/button.php'; ?>
      </div>
      <div class="col-lg-6 strategy-img">
      <img src="./assets/images/strategy2.png" alt="illustration" class="intros-image">
      </div>
    </div>
  </div>
</div>


<?php include 'components/footer.php'; ?>