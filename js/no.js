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
$(document).ready(function () {
    $('#step1Btn').click(function () {
        let error_cne = '';
        let error_bac_year = '';
        let error_birthday = '';

        if ($.trim($('#bac_year').val()).length === 0) {
            error_bac_year = 'The year bac year is required';
            $('#error_bac_year').text(error_bac_year);
            $('#bac_year').addClass('has-error');
        } else {
            error_bac_year = '';
            $('#error_bac_year').text(error_bac_year);
            $('#bac_year').removeClass('has-error');
        }
        if ($.trim($('#birthday').val()).length === 0) {

            error_birthday = 'birthday is required';
            $('#error_birthday').text(error_birthday);
            $('#birthday').addClass('has-error');
        } else {

            error_birthday = '';
            $('#error_birthday').text(error_birthday);
            $('#birthday').removeClass('has-error');
        }
        if ($.trim($('#cne').val()).length === 0) {
            error_cne = 'cne is required';
            $('#error_cne').text(error_cne);
            $('#cne').addClass('has-error');
        } else {
            $.ajax({
                url: "check_data.php",
                type: "post",
                data: {
                    'check_cne': 1,
                    'cne': $('#cne').val()
                },
                success: function (response) {
                    console.log(response);
                    let res = JSON.parse(response);
                    if (res.status == 'error') {
                        error_cne = res.message;
                        $('#error_cne').text(error_cne);
                        $('#cne').addClass('has-error');
                    } else {
                        console.log('no error in cne');
                        error_cne = '';
                        $('#error_cne').text(error_cne);
                        $('#cne').removeClass('has-error');
                    }
                    if (error_cne != '' || error_bac_year != '' || error_birthday != '') {
                        swal({
                            title: "  oopss...you are messing some thing!",
                            text: "",
                            icon: "error",
                        });

                    } else {
                        // console.log(error_cne, error_bac_year, error_birthday);
                        // console.log(error_cne);
                        // swal({
                        //     title: "your data has been saved",
                        //     text: "",
                        //     icon: "success",
                        // });
                        $('#instraction').hide();
                        $('.step1').hide();
                        $('.step2').show();
                    }

                },
                error: function (jqXHR, textStatus, errorThrown) {
                    console.log(textStatus, errorThrown);
                }
            });
        }
    });
    $('#step2Btn').click(function () {
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
            $('#error_first_name').text(error_first_name);
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
        if ($.trim($('#email').val()).length === 0) {
            error_email = 'email is required';
            $('#error_email').text(error_email);
            $('#email').addClass('has-error');
        } else {
            if (!email_validation.test($('#email').val())) {
                error_email = 'invalid Email';
                $('#error_email').text(error_email);
                $('#email').addClass('has-error');
            } else {
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
                            $('#error_email').text(error_email);
                            $('#email').addClass('has-error');
                        } else {
                            error_email = '';
                            $('#error_email').text(error_email);
                            $('#email').removeClass('has-error');
                        }
                        if (error_first_name != '' || error_last_name != '' || error_email != '' || error_password != '' || error_confirm_password != '') {
                            swal({
                                title: " oopss....you are messing some thing!",
                                text: "",
                                icon: "error",
                            });
                        } else {
                            // swal({
                            //     title: "your data has been saved",
                            //     text: "",
                            //     icon: "success",
                            // });
                            $('#instraction').hide();
                            $('.step2').hide();
                            $('.step3').show();
                        }
                    },
                    error: function (jqXHR, textStatus, errorThrown) {
                        console.log(textStatus, errorThrown);
                    }
                });

            }
        }
    });
    $('#step3Btn').click(function () {
        console.log('ssss');
        let error_cin = '';
        let error_gender = '';
        let error_adress = '';
        let error_province='';
        let error_phone = '';
        let error_situation='';
        let error_nationaity = '';
        let error_disabled='';
        let phone_validation = /^\d{10}$/;
        if ($.trim($('#cin').val()).length === 0) {
            error_cin = ' cin is required';
            $('#error_cin').text(error_cin);
            $('#cin').addClass('has-error');
        } else {
            $.ajax({
                url: "check_data.php",
                type: "post",
                data: {
                    'check_cin': 1,
                    'cin': $('#cin').val()
                },
                success: function (response) {
                    console.log(response);
                    let res = JSON.parse(response);
                    if (res.status == 'error') {
                        error_cin = res.message;
                        $('#error_cin').text(error_cin);
                        $('#cin').addClass('has-error');
                    } else {
                        error_cin = '';
                        $('#error_cin').text(error_cin);
                        $('#cin').removeClass('has-error');
                    }
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    console.log(textStatus, errorThrown);
                }
            });
        }
        if ($.trim($('#adress').val()).length === 0) {
            error_adress = 'adress is required';
            $('#error_adress').text(error_adress);
            $('#adress').addClass('has-error');
        } else {
            error_adress = '';
            $('#error_adress').text(error_adress);
            $('#adress').removeClass('has-error');
        }
        if ($.trim($('#province').val()).length === 0) {
            error_province = 'province is required';
            $('#error_province').text(error_province);
            $('#province').addClass('has-error');
        } else {
            error_province= '';
            $('#error_province').text(error_province);
            $('#province').removeClass('has-error');
        }
        if ($.trim($('#gender').val()).length === 0) {
            error_gender = 'you must select gender';
            $('#error_gender').text(error_gender);
            $('#gender').addClass('has-error');
        } else {
            error_gender = '';
            $('#error_gender').text(error_gender);
            $('#gender').removeClass('has-error');
        }
        if ($.trim($('#situation').val()).length === 0) {
            error_situation = 'this feild  is required';
            $('#error_situation').text(error_situation);
            $('#situation').addClass('has-error');
        } else {
            error_situation='';
            $('#error_situation').text( error_situation);
            $('#situation').removeClass('has-error');
        }
        if ($.trim($('#natio').val()).length === 0) {
            error_nationaity = 'nationality is required';
            $('#error_nationality').text(error_nationaity);
            $('#natio').addClass('has-error');
        } else {
            error_nationaity = '';
            $('#error_nationaity').text(error_nationaity);
            $('#natio').removeClass('has-error');
        }
        if($.trim($('#disabled').val()).length ===0){
            error_disabled='you must select';
            $('#error_disabled').text(error_disabled);
            $('#disabled').addClass('has-error');

        }else{
            error_disabled='';
            $('#error_disabled').text(error_disabled);
            $('#disabled').removeClass('has-error');
        }
        if ($.trim($('#phone').val()).length === 0) {
            error_phone = 'phone is required';
            $('#error_phone').text(error_phone);
            $('#phone').addClass('has-error');
        } else {
            if (!phone_validation.test($('#phone').val())) {
                error_phone = 'invalid numbre';
                $('#error_phone').text(error_phone);
                $('#phone').addClass('has-error');
            } else {
                $.ajax({
                    url: "check_data.php",
                    type: "post",
                    data: {
                        'check_phone': 1,
                        'phone': $('#phone').val()
                    },
                    success: function (response) {
                        console.log(response);
                        let res = JSON.parse(response);
                        if (res.status == 'error') {
                            error_phone = res.message;
                            $('#error_phone').text(error_phone);
                            $('#phone').addClass('has-error');
                        } else {
                            error_phone = '';
                            $('#error_phone').text(error_phone);
                            $('#phone').removeClass('has-error');
                        }
                        if (error_cin != '' || error_adress!= '' || error_gender != ''|| error_situation!=''|| error_nationaity != '' || error_phone != '') {
                            swal({
                                title: " oopss....you are messing some thing!",
                                text: "",
                                icon: "error",
                            });
                        } else {
                            // swal({
                            //     title: "your data has been saved ",
                            //     text: "",
                            //     icon: "success",
                            // });
                            $('#instraction').hide();
                            $('.step3').hide();
                            $('.step4').show();
                        }
                    },
                    error: function (jqXHR, textStatus, errorThrown) {
                        console.log(textStatus, errorThrown);
                    }
                });

            }
        }
    });
    $('#step4Btn').click(function (){
        let error_school_year='';
        let error_sector='';
        let error_bac_type='';
        let error_recto='';
        let error_verso='';
        let error_personal_picture='';
        let error_note='';
        if ($.trim($('#shoole').val()).length === 0) {
            error_school_year = 'school year is required';
            $('#error_school_year').text(error_school_year);
            $('#shoole').addClass('has-error');
        } else {
            error_school_year = '';
            $('#error_school_year').text(error_school_year);
            $('#shoole').removeClass('has-error');
        }
        if ($.trim($('#bactype').val()).length === 0) {
            error_bac_type = 'you must select your bac type';
            $('#error_bac_type').text(error_bac_type);
            $('#bactype').addClass('has-error');
        } else {
            error_bac_type = '';
            $('#error_bac_type').text(error_bac_type);
            $('#bactype').removeClass('has-error');

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
        if ($.trim($('#recto').val()).length === 0) {
            error_recto = 'this file is required';
            $('#error_recto').text(error_recto);
            $('#recto').addClass('has-error');
        }
        else {
            console.log('no error in bac_picture');
            error_recto = '';
            $('#error_recto').text(error_recto);
            $('#recto').removeClass('has-error');
        }
        if ($.trim($('#verso').val()).length === 0) {
            error_verso = 'this file is required';
            $('#error_verso').text(error_verso);
            $('#verso').addClass('has-error');
        }
        else {
            console.log('no error in bac_picture');
            error_verso= '';
            $('#error_verso').text(error_verso);
            $('#verso').removeClass('has-error');
        }
        if ($.trim($('#picture').val()).length === 0) {
            error_personal_picture = 'this file is required';
            $('#error_personal_picture').text(error_personal_picture);
            $('#picture').addClass('has-error');
        }
        else {
            error_personal_picture = '';
            $('#error_personal_picture').text(error_personal_picture);
            $('#picture').removeClass('has-error');
        }
        if ($.trim($('#note').val()).length === 0) {
            error_note= 'bac note is required';
            $('#error_note').text(error_note);
            $('#note').addClass('has-error');
        }
        else {
            error_note = '';
            $('#error_note').text(error_note);
            $('#note').removeClass('has-error');
        }
        if (error_school_year != '' || error_bac_type != '' || error_sector != '' || error_recto != ''|| error_verso !=''|| error_personal_picture != '' || error_note!='') {
            swal({
                title: " oopss...you are messing some thing!",
                text: "",
                icon: "error",
            });
        } else{
            swal({
                title: "Are you sure?",
                text: "",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
                .then((willclick) => {
                    if (willclick) {
                        var myform = document.getElementById("stdRegForm");
                        var fd = new FormData(myform );
                        $.ajax({
                            url: "next.php",
                            data: fd,
                            cache: false,
                            processData: false,
                            contentType: false,
                            type: 'POST',
                            success: function (res) {
                                console.log(res);
                                swal({
                                    title: "your registration completed succssefuly ",
                                    text: "",
                                    icon: "success",
                                });
                                setTimeout(function(){
                                    window.location.href = 'print.php';
                                }, 5000);
                            }
                        });
                    } else {
                        swal("oppss...!");
                    }
                });
        }

    });
    $("#picture").change(function () {
        var fileExtension = ['png', 'JPG', 'JPEG'];
        let error_personal_picture = '';
        if ($.inArray($(this).val().split('.').pop().toLowerCase(), fileExtension) == -1) {
            error_personal_picture = 'only png , jpg,jpeg files are allowed';
            $('#error_personal_picture').text(error_personal_picture);
            $('#picture').addClass('has-error');
        }
        if (this.files[0].size > 500000) {
            error_personal_picture = 'Picture should be smallar than 5MB';
            $('#error_personal_picture').text(error_personal_picture);
            $('#picture').addClass('has-error');

        }
    });
// $("#bac_picture").change(function () {
//     var fileExtensionn = ['png', 'JPG', 'JPEG'];
//     let error_bac_picture = '';
//     if ($.inArray($(this).val().split('.').pop().toLowerCase(), fileExtensionn) == -1) {
//         error_bac_picture = 'only png , jpg,jpeg files are allowed';
//         $('#error_bac_picture').text(error_bac_picture);
//         $('#bac_picture').addClass('has-error');
//     }
//     if (this.files[0].size > 500000) {
//         error_bac_picture = 'this file should be smallar than 5MB';
//         $('#error_bac_picture').text(error_bac_picture);
//         $('#bac_picture').addClass('has-error');
//     }
// });
});
$(document).ready(function (){
    $("#show").click(function(){
        $("#disabled").show();
    });
});
$(document).ready(function (){
    $("#hide").click(function(){
        $("#disabled").hide();
    });
});
