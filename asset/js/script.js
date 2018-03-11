// Add Record
function addRecord() {
    // get values
    var first_name = $("#first_name").val();
    first_name = first_name.trim();
    var last_name = $("#last_name").val();
    last_name = last_name.trim();
    var email = $("#email").val();
    email = email.trim();

    if (first_name == "") {
        alert("First name field is required!");
    }
    else if (last_name == "") {
        alert("Last name field is required!");
    }
    else if (email == "") {
        alert("Email field is required!");
    }
    else {
        // Add record
        $.post("ajax/create.php", {
            first_name: first_name,
            last_name: last_name,
            email: email
        }, function (data, status) {
            // close the popup
            $("#add_new_record_modal").modal("hide");

            // read records again
            readRecords();

            // clear fields from the popup
            $("#first_name").val("");
            $("#last_name").val("");
            $("#email").val("");
        });
    }
}