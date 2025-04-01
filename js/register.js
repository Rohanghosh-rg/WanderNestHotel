$(document).ready(function(){
    $("#register").submit(function(e){
        e.preventDefault();

        let name = $("#rname").val().trim();
        let email = $("#remail").val().trim();
        let pass = $("#rpass").val().trim();
        let registerBtn = $("#rsubmit");

        console.log("Captured Data Before Sending: ", { name, email, pass }); // Debugging Line

        if (name === "" || email === "" || pass === "") {
            alert("All fields are required!");
            return;
        }

        registerBtn.prop("disabled", true).text("Registering...");

        $.ajax({
            url: "admin/register.php",
            type: "POST",
            data: { name: name, email: email, pass: pass },
            dataType: "json",
            success: function(response) {
                console.log("Server Response: ", response); // Debugging Line

                if (response.status === "success") {
                    alert(response.message);
                    location.reload();
                } else {
                    alert(response.message);
                }
                registerBtn.prop("disabled", false).text("Register");
            },
            error: function(xhr, status, error) {
                console.log("AJAX Error: ", error); // Debugging Line
                alert("Something went wrong.");
                registerBtn.prop("disabled", false).text("Register");
            }
        });
    });
});
