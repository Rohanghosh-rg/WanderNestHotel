$(document).ready(function(){
    // Show or hide payment details based on selected method
    $("input[name='payment_method']").change(function() {
        let method = $(this).val();
        if (method === "upi") {
            $("#upiDetails").removeClass("d-none");
            $("#cardDetails").addClass("d-none");
        } else {
            $("#cardDetails").removeClass("d-none");
            $("#upiDetails").addClass("d-none");
        }
    });

    // Set amount when "Book Now" is clicked
    $(".book-now-btn").click(function(){
        let amount = $(this).data("amount");
        $("#bookingAmount").val(amount);
    });

    $("#paymentForm").submit(function(e){
        e.preventDefault();

        let name = "John Doe"; // Fake user
        let email = "john@example.com";
        let amount = $("#bookingAmount").val();
        let paymentMethod = $("input[name='payment_method']:checked").val();
        let cardNumber = $("#cardNumber").val();
        let expiryDate = $("#expiryDate").val();
        let cvv = $("#cvv").val();
        let upiId = $("#upiId").val();

        if (paymentMethod === "upi" && upiId === "") {
            alert("Please enter a UPI ID.");
            return;
        } 
        if ((paymentMethod === "credit_card" || paymentMethod === "debit_card") && (cardNumber === "" || expiryDate === "" || cvv === "")) {
            alert("Please fill all card details!");
            return;
        }

        let paymentId = "FAKE" + Math.floor(Math.random() * 1000000); 

        // Show processing modal
        $("#paymentModal").modal("hide");
        $("#processingModal").modal("show");

        setTimeout(function() {
            $.ajax({
                url: "admin/booking.php",
                type: "POST",
                data: {
                    name: name,
                    email: email,
                    amount: amount,
                    payment_method: paymentMethod,
                    card_number: cardNumber,
                    expiry_date: expiryDate,
                    cvv: cvv,
                    upi_id: upiId,
                    payment_id: paymentId
                },
                success: function(response) {
                    $("#processingModal").modal("hide");
                    $("#successModal").modal("show");
                }
            });
        }, 5000);
    });
});