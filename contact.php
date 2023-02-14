<?php include 'components/header.php'; ?>
<?php
$contacts = [
    [
      'header' => 'Headquaters',
      'address' => 'Address: 9863 - 9867 MILL ROAD, CAMBRIDGE, MG09 99HT.',
      'number' => 'Telephone: +1 800 603 6035',
      'email' => 'Email: mail@demolink.org'
    ],
    [
        'header' => 'Support Centre',
        'address' => 'Address: 9870 ST VINCENT PLACE, GLASGOW, DC 45 FR 45',
        'number' => 'Telephone: +1 800 603 6035',
        'email' => 'Email: mail@demolink.org'
      ]
  ];
?>

<section class="contact-section">
    <div class="contact-intro text-center">
        <h1>Contacts</h1>
    </div>

    <div class="row">
        <div class="col-md-6">
            <h1 class="mb-2">How To Find Us</h1>
            <?php foreach ($contacts as $contact) : ?>
            <div class="contact mb-4">
                <h5 class="mb-2 fw-bold"><?php echo $contact['header']; ?></h5>
                <h6 class="d-flex flex-column gap-1">
                    <span><?php echo $contact['address']; ?></span>
                    <span><?php echo $contact['number']; ?></span>
                    <span><?php echo $contact['email']; ?></span>
                </h6>
            </div>
            <?php endforeach; ?>
        </div>
        <div class="col-md-6">
            <h1>Get In Touch</h1>
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="mt-4 w-75">
      <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control <?php echo $nameErr? 'is-invalid' : null; ?>" id="name" name="name" placeholder="Enter your name">
        <div class="invalid-feedback">
          <?php echo $nameErr; ?>
        </div>
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control <?php echo $emailErr? 'is-invalid' : null; ?>" id="email" name="email" placeholder="Enter your email">
        <div class="invalid-feedback">
          <?php echo $emailErr; ?>
        </div>
      </div>
      <div class="mb-3">
        <label for="body" class="form-label">Feedback</label>
        <textarea class="form-control <?php echo $bodyErr? 'is-invalid' : null; ?>" id="body" name="body" placeholder="Enter your feedback"></textarea>
        <div class="invalid-feedback">
          <?php echo $bodyErr; ?>
        </div>
      </div>
      <div class="mb-3">
        <input type="submit" name="submit" value="Send" class="btn btn-dark w-100">
      </div>
    </form>
   
        </div>
    </div>
</section>


<?php include 'components/footer.php';?>