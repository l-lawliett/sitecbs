$(document).ready(function(){
    $("#show").click(function(){
        $("#hide").show();
    });
  
});

function myMember() {
    document.getElementById("firstname").placeholder = "Company Name";

    document.getElementById("lastname").placeholder = "Username";
}

function myCompany() {
    document.getElementById("firstname").placeholder = "First Name";

    document.getElementById("lastname").placeholder = "Last Name";
}