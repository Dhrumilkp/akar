$(document).ready(function(){
    $('#login-form').validate(
        {
            errorClass: "is-invalid",
            validClass: "is-valid",
            errorElement: "em"
        }
    );
});