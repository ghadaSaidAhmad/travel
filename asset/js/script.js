
/******************************* get form data ******************************************/
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
/*******************************end  get form data **************************************/

/*******************************check email ********************************************/

    $(document).on('input','#email',function(){
       
    var url = "app/checkEmail.php"; // the script where you handle the form input.
    var email=$(this).val();
    $.ajax({
           type: "POST",
           url: url,
           data: {email:email}, // serializes the form's elements.
           success: function(data)
           {
              alertify.success("successfully registertion ");
           }
         });
         

    });



/*******************************check email ********************************************/

/*******************************end  get form data **************************************/

/******************************* form proccess ******************************************/


//validation
function validation()
{
  
    var name=$('#name').val().trim();
    var phone=$('#phone').val().trim();
    var email=$('#email').val().trim();
    var traveler_type=$('#traveler_type_id').val();
    var traveler_way=$('#traveler_way_id').val();
    var country_number=$('#country_number').val();
    var age_group=$('#age_group_id').val();

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

    if(traveler_type==0)
    {
      
      validation +="please select  What Type Of Traveler? </br>";
      flag=true;

    }
    if(traveler_way==0)
    {
      
      validation +="please select HOW often Do You Travel?</br>";
      flag=true;

    }

  if(age_group==0)
    {
      
      validation +="please select What Age Group Do You Fall Under?</br>";
      flag=true;

    }

      if(country_number==0)
    {
      
      validation +="please select How meny Countries have you visited?</br>";
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
/*******************************end form proccess ******************************************/

