<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require('inc/links.php') ?>
    <title>Contact</title>
</head>
<body class="bg-light">

<?php require('inc/header.php'); ?>

<div class="my-5 px-4">
  <h2 class="fw-bold h-font text-center">Contact Us</h2>
  <div class="h-line bg-dark"></div>
  <p class="text-center mt-3"></p>
</div>
<div class="container">
  <div class="row">
    <div class="col-lg-6 col-md-6 mb-5 px-4">
      <div class="bg-white rounded shadow p-4">
      <iframe class="w-100 rounded" height="320" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d10015.252974107449!2d88.42205636871897!3d22.5804127587261!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1742534756481!5m2!1sen!2sin"  style="border:0;" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
       <h5 class="mt-3">Address</h5>
       <a href="https://maps.app.goo.gl/H9ez1w3S6T4dU7tc9" target="_blank" class="d-inline-bock text-decoration-none text-dark mb-2">
       <i class="bi bi-geo-alt"></i>
        Sector v, West Bengal, India
       </a>
       <h5 class="mt-3">Call Us</h5>
        <a href="tel: +9154539589342" class="d-inline-block mb-2 text-decoration-none text-dark"><i class="bi bi-telephone"></i> +91 54539589342</a>
        <h5 class="mt-3">Email</h5>
        <a href="mailto: rohanghosh906@gmail.com" class="d-inline-block mb-2 text-decoration-none text-dark">
          <i class="bi bi-envelope"></i>
          rohanghosh906@gmail.com
        </a>
        <h5 class="mt-3">Follow Us</h5>
        <a href="#" class="d-inline-block text-dark fs-5 me-2">
          <i class="bi bi-twitter"></i>
        </a>
        <a href="#" class="d-inline-block text-dark fs-5 me-2">
          <i class="bi bi-facebook"></i>
        </a>
        <a href="#" class="d-inline-block text-dark fs-5 me-2">
          <i class="bi bi-instagram"></i> 
        </a><br>
      </div>
    </div>
    <div class="col-lg-6 col-md-6 px-4">
      <div class="bg-white rounded shadow p-4">
        <form action="POST" id="contact">
          <h5>Send a message</h5>
          <div class="mt-3">
           <label class="form-label" style="font-weight: 500;">Name</label>
           <input type="text" class="form-control shadow-none" id="name">
          </div>
          <div class="mt-3">
           <label class="form-label" style="font-weight: 500;">Email</label>
           <input type="email" class="form-control shadow-none" id="email">
          </div>
          <div class="mt-3">
           <label class="form-label" style="font-weight: 500;">Subject</label>
           <input type="text" class="form-control shadow-none" id="subject">
          </div>
          <div class="mt-3">
           <label class="form-label" style="font-weight: 500;">Message</label>
           <textarea class="form-control shadow-none" rows="7" id="msm"></textarea>
          </div>
          <button type="submit" class="btn custom-bg mt-3 shadow-none" id="contactBtn">Submit</button>
        </form>
      </div>
    </div>
    </div>
  </div>
</div>


<?php require('inc/footer.php'); ?>

</body>
</html>