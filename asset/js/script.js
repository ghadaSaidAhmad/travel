

// get Countries
function getCountries() {
    $.get("app/getCountries.php", {}, function (data, status) {
        $("#counteries").html(data);
    });
}

// get Traveler Type
function getTravelerType() {
    $.get("app/getTravelerType.php", {}, function (data, status) {
        $("#traveler-types").html(data);
    });
}

// get Travel Way
function getTravelWay() {
    $.get("app/getTravelWay.php", {}, function (data, status) {
        $("#travel-way").html(data);
    });
}
// get age group
function getAgeGroup() {
    $.get("app/getAgeGroup.php", {}, function (data, status) {
        $("#age-group").html(data);
    });
}


getCountries();
getTravelerType();
getTravelWay();
getAgeGroup();



//validation
function validation()
{
  
    var name=$('#name').val().trim();
    var phone=$('#phone').val().trim();
    var email=$('#email').val().trim();
    var validation="";
    var flag=false;
    if(name=='')
    {
      validation +="please Enter Your Name</br>";
      flag=true;

    }
    if(phone=='')
    {

      validation +="please Enter Your phone</br>";
      flag=true;

    }
    if(email=='')
    {
      
      validation +="please Enter Your Email</br>";
      flag=true;

    }
    if(flag)
    {
      alertify.error(validation);
      return false;
    }
 return true;
    
}

//  join
function join() {

 if(validation())
 {
    var url = "app/create.php"; // the script where you handle the form input.
    $.ajax({
           type: "POST",
           url: url,
           data: $("#registerForm").serialize(), // serializes the form's elements.
           success: function(data)
           {
              alertify.success("successfully registertion ");
           }
         });
 }

}

