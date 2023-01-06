$(document).ready(function() {
    $("#submit").click(function() {
        let responseDiv = $("#validate");
        let value = $("#uname").val();
        let data = "name=" + value;
        if (value === "") {
            alert("Please input a name first");
        } else {
            $.ajax({
                url: "info.php",
                method: 'POST',
                data: data,
                error: err => {
                    responseDiv.css("color: #FF0000");
                    responseDiv.text("Error");
                },
                success: function(resp) {
                    if (resp["valid"] == true) {
                        responseDiv.text("Verified");
                    } else {
                        responseDiv.text("Error");
                    }
                }
            });
        }
    });
});