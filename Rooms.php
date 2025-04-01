<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require('inc/links.php') ?>
    <title>Rooms</title>
</head>
<body class="bg-light">

<?php require('inc/header.php'); ?>

<div class="my-5 px-4">
  <h2 class="fw-bold h-font text-center">Rooms</h2>
  <div class="h-line bg-dark"></div>
</div>

<div class="container">
  <div class="row">
    <div class="col-lg-3 col-md-12 mb-lg-0 mb-4 px-lg-0">
     <nav class="navbar navbar-expand-lg navbar-light bg-white rounded shadow d-none">
      <div class="container-fluid flex-lg-column align-items-stretch ">
        <h4 class="mt-2">FILTER</h4>
        <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#filterDropdown" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse flex-column align-items-stretch mt-2" id="filterDropdown">
          <div class="border bg-light p-3 rounded mb-3">
            <h5 class="mb-3 mt-3" style="font-size: 18px;">CHECK AVAILABILITY</h5>
            <label class="form-label">Check-in</label>
            <input type="date" class="form-control shadow-none mb-3">
            <label class="form-label">Check-out</label>
            <input type="date" class="form-control shadow-none">
          </div>
          <div class="border bg-light p-3 rounded mb-3">
            <h5 class="mb-3" style="font-size: 18px;">FACILITIES</h5>
            <div class="mb-2">
            <input type="checkbox" id="f1" class="form-check-input shadow-none me-1">
            <label class="form-check-label" for="f1">Facilities one</label>
            </div>
            <div class="mb-2">
            <input type="checkbox" id="f2" class="form-check-input shadow-none me-1">
            <label class="form-check-label" for="f2">Facilities two</label>
            </div>
            <div class="mb-2">
            <input type="checkbox" id="f3" class="form-check-input shadow-none me-1">
            <label class="form-check-label" for="f3">Facilities three</label>
            </div>
          </div>
          <div class="border bg-light p-3 rounded mb-3">
            <h5 class="mb-3" style="font-size: 18px;">GUESTS</h5>
            <div class="d-flex">
            <div class="me-3">
            <label class="form-label">Adults</label>
            <input type="number" class="form-control shadow-none">
            </div>
            <div>
            <label class="form-label">Children</label>
            <input type="number" class="form-control shadow-none">
            </div>
            </div>
          </div>
        </div>
      </div> 
     </nav>
    </div>
    
    <div class="col-lg-9 col-md-12 px-4">
    <div class="card mb-4 border-0 shadow">
      <div class="row g-0 p-3 align-items-center">
        <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
          <img src="images/rooms/super delux.jpeg" class="img-fluid rounded">
        </div>
        <div class="col-md-5 px-lg-3 px-md-3 px-0">
          <h5 class="mb-1">Delux Room </h5>
          <div class="features mb-3">
             <h6 class="mb-1">Features</h6>
              <span class="badge rounded-pill text-bg-light text-wrap">1 Rooms</span>
              <span class="badge rounded-pill text-bg-light text-wrap">1 Bathrooms</span>
              <span class="badge rounded-pill text-bg-light text-wrap">1 Balcony</span>
          </div>
          <div class="facilities mb-3">
            <h6 class="mb-1">Facilities</h6>
            <span class="badge rounded-pill text-bg-light text-wrap">Wifi</span>
            <span class="badge rounded-pill text-bg-light text-wrap">Television</span>
            <span class="badge rounded-pill text-bg-light text-wrap">AC</span>
          </div>
          <div class="guests">
             <h6 class="mb-1">Guests</h6>
             <span class="badge rounded-pill text-bg-light text-wrap">2 Adults</span>
             <span class="badge rounded-pill text-bg-light text-wrap">1 Children</span>
          </div>
        </div>
        <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
         <h6 class="mb-3">₹1800 Per Night</h6>
         <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2 book-now-btn" data-amount="1800" data-bs-toggle="modal" data-bs-target="#paymentModal">Book Now</a>
         <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More Details</a>
        </div>
      </div>
    </div>
    <div class="card mb-4 border-0 shadow">
      <div class="row g-0 p-3 align-items-center">
        <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
          <img src="images/rooms/delux.jpg" class="img-fluid rounded">
        </div>
        <div class="col-md-5 px-lg-3 px-md-3 px-0">
          <h5 class="mb-1">Super Delux Room </h5>
          <div class="features mb-3">
             <h6 class="mb-1">Features</h6>
              <span class="badge rounded-pill text-bg-light text-wrap">1 Rooms</span>
              <span class="badge rounded-pill text-bg-light text-wrap">1 Bathrooms</span>
              <span class="badge rounded-pill text-bg-light text-wrap">1 Balcony</span>
              <span class="badge rounded-pill text-bg-light text-wrap">2 Sofa</span>
          </div>
          <div class="facilities mb-3">
            <h6 class="mb-1">Facilities</h6>
            <span class="badge rounded-pill text-bg-light text-wrap">Wifi</span>
            <span class="badge rounded-pill text-bg-light text-wrap">Television</span>
            <span class="badge rounded-pill text-bg-light text-wrap">AC</span>
            <span class="badge rounded-pill text-bg-light text-wrap">Heater</span>
          </div>
          <div class="guests">
             <h6 class="mb-1">Guests</h6>
             <span class="badge rounded-pill text-bg-light text-wrap">2 Adults</span>
             <span class="badge rounded-pill text-bg-light text-wrap">2 Children</span>
          </div>
        </div>
        <div class="col-md-2 mt-lg-0 mt-md-0 mt-4  text-center">
         <h6 class="mb-3">₹2500 Per Night</h6>
         <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2 book-now-btn" data-amount="2500" data-bs-toggle="modal" data-bs-target="#paymentModal">Book Now</a>
         <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More Details</a>
        </div>
      </div>
    </div>
    <div class="card mb-4 border-0 shadow">
      <div class="row g-0 p-3 align-items-center">
        <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
          <img src="images/rooms/luxury.jpg" class="img-fluid rounded">
        </div>
        <div class="col-md-5 px-lg-3 px-md-3 px-0">
          <h5 class="mb-1">Luxury Room </h5>
          <div class="features mb-3">
             <h6 class="mb-1">Features</h6>
              <span class="badge rounded-pill text-bg-light text-wrap">1 Rooms</span>
              <span class="badge rounded-pill text-bg-light text-wrap">1 Bathrooms</span>
              <span class="badge rounded-pill text-bg-light text-wrap">2 Balcony</span>
              <span class="badge rounded-pill text-bg-light text-wrap">2 Sofa</span>
          </div>
          <div class="facilities mb-3">
            <h6 class="mb-1">Facilities</h6>
            <span class="badge rounded-pill text-bg-light text-wrap">Wifi</span>
            <span class="badge rounded-pill text-bg-light text-wrap">Television</span>
            <span class="badge rounded-pill text-bg-light text-wrap">AC</span>
            <span class="badge rounded-pill text-bg-light text-wrap">Heater</span>
          </div>
          <div class="guests">
             <h6 class="mb-1">Guests</h6>
             <span class="badge rounded-pill text-bg-light text-wrap">2 Adults</span>
             <span class="badge rounded-pill text-bg-light text-wrap">1 Children</span>
          </div>
        </div>
        <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
         <h6 class="mb-3">₹3500 Per Night</h6>
         <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2 book-now-btn" data-amount="3500" data-bs-toggle="modal" data-bs-target="#paymentModal">Book Now</a>
         <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More Details</a>
        </div>
      </div>
    </div>
    </div>
  </div>
</div>








<!-- Payment Modal -->
<div class="modal fade" id="paymentModal" tabindex="-1" aria-labelledby="paymentModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="paymentModalLabel">Payment Gateway</h5>
        <button type="button" class="btn-close shadow-none" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <form id="paymentForm">
          <div class="mb-3">
            <label class="form-label">Select Payment Method</label>
            <div>
              <input type="radio" name="payment_method" value="credit_card" id="credit_card" checked> Credit Card
              <input type="radio" name="payment_method" value="debit_card" id="debit_card" class="ms-3"> Debit Card
              <input type="radio" name="payment_method" value="upi" id="upi" class="ms-3"> UPI
            </div>
          </div>
          <!-- Card Details -->
          <div id="cardDetails">
            <div class="mb-3">
              <label class="form-label">Card Number</label>
              <input type="text" class="form-control" id="cardNumber" placeholder="1234 5678 9012 3456">
            </div>
            <div class="mb-3">
              <label class="form-label">Expiry Date</label>
              <input type="text" class="form-control" id="expiryDate" placeholder="MM/YY">
            </div>
            <div class="mb-3">
              <label class="form-label">CVV</label>
              <input type="text" class="form-control" id="cvv" placeholder="123">
            </div>
          </div>

          <!-- UPI Details -->
          <div id="upiDetails" class="d-none">
            <div class="mb-3">
              <label class="form-label">UPI ID</label>
              <input type="text" class="form-control" id="upiId" placeholder="example@upi">
            </div>
          </div>

          <input type="hidden" id="bookingAmount" value="">

          <button type="submit" class="btn btn-dark w-100">Pay Now</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Processing Modal -->
<div class="modal fade" id="processingModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content text-center p-3">
      <div class="spinner-border text-primary" role="status"></div>
      <p class="mt-2">Processing Payment...</p>
    </div>
  </div>
</div>

<!-- Success Modal -->
<div class="modal fade" id="successModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Payment Successful</h5>
        <button type="button" class="btn-close shadow-none" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <p>Your payment was successful! Booking confirmed.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-bs-dismiss="modal">OK</button>
      </div>
    </div>
  </div>
</div>
<?php require('inc/footer.php'); ?>

</body>
</html>