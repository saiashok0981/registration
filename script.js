$(document).ready(function() {
    $("#registrationForm").on("submit", function(event) {
        event.preventDefault(); // Prevent default form submission

        $.ajax({
            url: "process.php",
            method: "POST",
            data: $(this).serialize(),
            success: function(response) {
                $("#response").html(response);
            },
            error: function() {
                $("#response").html("<span style='color: red;'>Something went wrong!</span>");
            }
        });
    });
});
