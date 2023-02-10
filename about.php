<?php include 'components/header.php'; ?>

<?php
$team = [
    [
        'img-src' => "./assets/images/Money motivation _Monochromatic.png",
        'name' => 'Simon Cowell',
        'title' => 'Executive Officer'
    ],
    [
        'img-src' => './assets/images/Money motivation _Monochromatic.png',
        'name' => 'Simon Cowell',
        'title' => 'Executive Officer'
    ],
    [
        'img-src' => './assets/images/Money motivation _Monochromatic.png',
        'name' => 'Simon Cowell',
        'title' => 'Executive Officer'
    ],
    [
        'img-src' => './assets/images/Money motivation _Monochromatic.png',
        'name' => 'Simon Cowell',
        'title' => 'Executive Officer'
    ],
    [
        'img-src' => './assets/images/Money motivation _Monochromatic.png',
        'name' => 'Simon Cowell',
        'title' => 'Executive Officer'
    ],
    [
        'img-src' => './assets/images/Money motivation _Monochromatic.png',
        'name' => 'Simon Cowell',
        'title' => 'Executive Officer'
    ]
];
?>

<div class="row d-flex align-items-center">
    <div class="col-lg-4 intros">
        <div class="intros-headings mb-4 d-grid gap-3">
            <h1>About Our Consulting Agency</h1>
            <h6>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Aspernatur facere neque facilis praesentium necessitatibus.</h6>
        </div>
        <button class="rounded btn btn-primary btn-md" type="button">Learn more
            <span class="ms-1">
                <i class="fa-solid fa-arrow-right"></i>
            </span>
        </button>
    </div>
    <div class="col-lg-4 intros">
        <img src="./assets/images/Money motivation _Monochromatic.png" alt="illustration" class="intros-image">
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