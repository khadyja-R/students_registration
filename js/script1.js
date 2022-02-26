$('#step2Btn').click(function() {
    console.log('ssssss');
    let error_first_name = '';
    let error_last_name = '';
    let error_email = '';
    let error_password = '';
    let error_confirm_password = '';
    let email_validation = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
    if ($.trim($('#first').val()).length === 0) {
        error_first_name = 'first name  is required';
        $('#error_first_name').text(error_first_name);
        $('#first').addClass('has-error');
    } else {
        error_first_name = '';
        $('#error_cne').text(error_first_name);
        $('#first').removeClass('has-error');
    }
    if ($.trim($('#last').val()).length === 0) {
        error_last_name = 'last name is required';
        $('#error_last_name').text(error_last_name);
        $('#last').addClass('has-error');
    } else {
        error_last_name = '';
        $('#error_last_name').text(error_last_name);
        $('#last').removeClass('has-error');
    }
    if ($.trim($('#email').val()).length === 0) {
        error_email = 'email is required';
        $('#error_email').text(error_email);
        $('#email').addClass('has-error');
    } else {
        if (!email_validation.test($('#email').val())) {
            error_email = 'invalid Email';
            $('#error_email').text(error_email);
            $('#email').addClass('has-error');
        }
        $.ajax({
            url: "check_data.php",
            type: "post",
            data: {
                'check_email': 1,
                'email': $('#email').val()
            },
            success: function (response) {
                console.log(response);
                let res = JSON.parse(response);
                if (res.status == 'error') {
                    error_email = res.message;
                    $('#error_email').text(error_cne);
                    $('#email').addClass('has-error');
                } else {
                    error_email = '';
                    $('#error_email').text(error_email);
                    $('#email').removeClass('has-error');
                }
            },
            error: function (jqXHR, textStatus, errorThrown) {
                console.log(textStatus, errorThrown);
            }
        });

    }
    if ($.trim($('#password').val()).length === 0) {
        error_password = 'password is required';
        $('#error_password').text(error_password);
        $('#password').addClass('has-error');
    } else {
        error_password = '';
        $('#error_password').text(error_password);
        $('#password').removeClass('has-error');
    }
    if ($.trim($('#passconf').val()).length === 0) {
        error_confirm_password = 'confirm password is required';
        $('#error_confirm_password').text(error_confirm_password);
        $('#passconf').addClass('has-error');
    } else {
        if ($('#password').val() != $('#passconf').val()) {
            error_confirm_password = 'password do not match';
            $('#error_confirm_password').text(error_confirm_password);
            $('#passconf').addClass('has-error');
        } else {
            error_confirm_password = '';
            $('#error_confirm_password').text(error_confirm_password);
            $('#passconf').removeClass('has-error');
        }
    }
    if (error_first_name != '' || error_last_name != '' || error_email != '' || error_password != '' || error_confirm_password != '') {
        swal({
            title: " oopss....you are messing some thing!",
            text: "",
            icon: "error",
        });
    } else {
        $('#instraction').hide();
        $('.step2').hide();
        $('.step3').show();
    }
});

$('#step3Btn').click(function() {
    console.log('ssss') ;
    let error_cin='';
    let error_gender='';
    let error_adress='';
    let error_phone='';
    let error_nationaity='';
    let phone_validation=/^\d{10}$/;
    if ($.trim($('#cin').val()).length === 0) {
        error_cin=' cin is required';
        $('#error_cin').text(error_cin);
        $('#cin').addClass('has-error');
    }else{
        error_cin='';
        $('#error_cin').text(error_cin);
        $('#cin').removeClass('has-error');
    }
    if ($.trim($('#adress').val()).length === 0){
        error_adress='adress is required';
        $('#error_adress').text(error_adress);
        $('#adress').addClass('has-error');
    }else{
        error_adress='';
        $('#error_adress').text(error_adress);
        $('#adress').removeClass('has-error');
    }
    if ($.trim($('#gender').val()).length === 0){
        error_gender='you must select gender';
        $('#error_gender').text(error_gender);
        $('#gender').addClass('has-error');
    }else{
        error_gender='';
        $('#error_gender').text(error_gender);
        $('#gender').removeClass('has-error');
    }
    if ($.trim($('#phone').val()).length === 0){
        error_phone='phone is required';
        $('#error_phone').text(error_phone);
        $('#phone').addClass('has-error');
    } else{
        if(!phone_validation.test($('#phone').val())){
            error_phone='invalid phone number' ;
            $('#error_phone').text(error_phone);
            $('#phone').addClass('has-error');
        }else{
            error_phone='';
            $('#error_phone').text(error_phone);
            $('#phone').removeClass('has-error');
        }
    }

    if ($.trim($('#natio').val()).length === 0){
        error_nationaity='nationality is required';
        $('#error_nationality').text(error_nationaity);
        $('#natio').addClass('has-error');
    }else{
        error_nationaity='';
        $('#error_nationaity').text(error_nationaity);
        $('#natio').removeClass('has-error');
    }
    if(error_cin!=''|| error_adress!=''||error_gender!='' || error_phone!=''|| error_nationaity!='') {
        swal({
            title: " oopss...you are messing some thing!",
            text: "",
            icon: "error",
        });
    }else{
        $('#instraction').hide();
        $('.step3').hide();
        $('.step4').show();
    }
});

$('#step4Btn').click(function() {
    console.log('sss');
    let error_shool_year = '';
    let error_bac_type = '';
    let error_sector = '';
    let error_bac_picture = '';
    if ($.trim($('#shoole').val()).length === 0) {
        error_shool_year = 'schoo year is required';
        $('#error_shool_year').text(error_shool_year);
        $('#shoole').addClass('has-error');
    } else {
        error_shool_year = '';
        $('#error_shool_year').text(error_shool_year);
        $('#error_shool_year').removeClass('has-error');
    }
    if ($.trim($('#bactype').val()).length === 0) {
        error_bac_type = 'you must select your bac type';
        $('#error_bac_type').text(error_bac_type);
        $('#bactype').addClass('has-error');
    } else {
        error_bac_type = '';
        $('#error_bac_type').text(error_bac_type);
    }
    if ($.trim($('#sector').val()).length === 0) {
        error_sector = 'you must select your sector';
        $('#error_sector').text(error_sector);
        $('#sector').addClass('has-error');
    } else {
        error_sector = '';
        $('#error_sector').text(error_sector);
        $('#sector').removeClass('has-error');
    }
    if ($.trim($('#bac_picture').val()).length === 0) {
        error_bac_picture = 'bac picture is required';
        $('#error_bac_picture').text(error_bac_picture);
        $('#bac_picture').addClass('has-error');
    } else {
        error_bac_picture = '';
        $('#error_bac_picture').text(error_bac_picture);
        $('#bac_picture').removeClass('has-error');
    }
    if (error_shool_year != '' || error_bac_type != '' || error_sector != '' || error_bac_picture != '') {

        swal({
            title: " oopss...you are messing some thing!",
            text: "",
            icon: "error",
        });
    } else {
        // $("#stdRegForm").submit();
        swal({
            title: "Are you sure?",
            text: "",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
            .then((willclick) => {
                if (willclick) {
                    swal(" your registration completed successefuly", {
                        icon: "success",
                    });
                } else {
                    swal("you need to register!");
                }
            });

    }
});
