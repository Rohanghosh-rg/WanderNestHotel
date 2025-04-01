$(document).ready(function(){
    $("#login").submit(function(e){
        e.preventDefault();

        let email = $("#email").val();
        let pass = $("#pass").val();
        let loginBtn = $("#loginBtn");

        if(email == "" || pass == ""){
            alert("All fields are required!");
            return;
        }

        loginBtn.prop("disabled", true).text("Logging in...");

        $.ajax({
            url: "admin/login.php",
            type: "POST",
            data: { email: email, pass: pass },
            dataType: "json",
            success: function(response){
                if(response.status == "success"){
                    $("#loginmodel").modal('hide');
                    $(".auth-buttons").html(`
                        <div class="dropdown">
                            <button class="btn btn-dark dropdown-toggle shadow-none" type="button" id="userDropdown" data-bs-toggle="dropdown">
                                <i class="bi bi-person-circle"></i> ${response.username}
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                            </ul>
                        </div>
                    `);
                } else {
                    alert(response.message);
                }
                loginBtn.prop("disabled", false).text("LOGIN");
            },
            error: function(){
                alert("Something went wrong.");
                loginBtn.prop("disabled", false).text("LOGIN");
            }
        });
    });
});
