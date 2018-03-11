// Add Record

function addRecord() {
    // get values
    var first_name = $("#name").val();
    first_name = first_name.trim();

    var email = $("#email").val();
    email = email.trim();

    if (first_name == "") {
        alert(" name field is required!");
    }

    else if (email == "") {
        alert("Email field is required!");
    }
    else {
        // Add record
        $.post("app/create.php", {
            first_name: first_name,
            email: email
        }, function (data, status) {
            // close the popup
           alert("xxxxxxxxxxxxxxxxxxxxxx")

            // clear fields from the popup
            $("#first_name").val("");
            $("#last_name").val("");
            $("#email").val("");
        });
    }
}