$(document).ready(function (){
    const password=$('#password');
    $('#eye').click(function (){
        if(password.prop('type')==='password'){
            $(this).addClass('fa-eye-slash');
            password.attr('type','text');
        }else{
            $(this).removeClass('fa-eye-slash');
            password.attr('type','password');
        }
    });
});
$(document).ready(function (){
    $('#updateProfile').click(function (event) {
        console.log('ssssss');
        let error_email = '';
        let error_password = '';
        let error_conf = '';
        let email_validation = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
        if ($.trim($('#email').val()).length === 0) {
            error_email = 'email is required';
            $('#error_email').text(error_email);
            $('#email').addClass('has-error');
        } else {
        if (!email_validation.test($('#email').val())) {
            error_email = 'invalid Email';
            $('#error_email').text(error_email);
            $('#email').addClass('has-error');
        } else{
            error_email = '';
            $('#error_email').text(error_email);
            $('#email').removeClass('has-error');
        }
        }
        if ($.trim($('#password').val()).length === 0) {
            error_password = 'password is required';
            $('#error_password').text(error_password);
            $('#password').addClass('has-error');
        } else
        {    if($.trim($('#password').val()).Length <4){
            error_password = 'minmum  4 characters needed';
            $('#error_password').text(error_password);
            $('#password').addClass('has-error');
        } else{
            error_password = '';
            $('#error_password').text(error_password);
            $('#password').removeClass('has-error');
        }
        }

        if ($.trim($('#passconf').val()).length === 0) {
            error_conf = 'confirm password is required';
            $('#error_conf ').text(error_conf );
            $('#passconf').addClass('has-error');
        } else {
            if ($('#password').val() != $('#passconf').val()) {
                error_conf = 'password do not match';
                $('#error_conf').text(error_conf );
                $('#passconf').addClass('has-error');
            } else {
                error_conf  = '';
                $('#error_conf').text(error_conf );
                $('#passconf').removeClass('has-error');
            }
        }


    });

});