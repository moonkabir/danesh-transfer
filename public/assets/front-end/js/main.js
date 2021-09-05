$(document).ready(function () {
    $(function () {
        $(".aus_driver_lic,.passport").hide();
        $("#id_type").change(function () {
            if ($("#id_type").val() == "aus_driver_lic") {
                $(".aus_driver_lic").show();
                $(".passport").hide();
            } else if ($("#id_type").val() == "passport") {
                $(".passport").show();
                $(".aus_driver_lic").hide();
            } else {
                $(".aus_driver_lic,.passport").hide();
            }
        });
    });
    // validate signup form on keyup and submit
    $("#regform_two").validate({
        rules: {
            sender_id: {
                required: true
            },
            fname: {
                required: true,
                minlength: 3,
            },
            lname: {
                required: true,
                minlength: 3,
            },
            phno: {
                required: true,
                digits: true,
            },
            phno_2: {
                digits: true,
            },
            address: {
                required: true,
            },
        },
        messages: {
            sender_id: {
                required: "Sender ID is required",
            },
            fname: {
                required: "Please enter a First Name",
                minlength:"Your First Name must consist of at least 3 characters",
            },
            lname: {
                required: "Please enter a Last Name",
                minlength:"Your Last Name must consist of at least 3 characters",
            },
            phno: {
                required: "Please enter Phone Number",
                digits: "Please enter only digits.",
            },
            phno_2: {
                digits: "Please enter only digits.",
            },
            address: {
                digits: "Please enter your address.",
            },
        },
    });
    // $("#user_submit_three").validate({
    //     rules: {
    //         bdate: {
    //             required: true,
    //             minAge: 13,
    //         },
    //     },
    //     messages: {
    //         bdate: {
    //             required: "Please enter you date of birth.",
    //             minAge: "You must be at least 13 years old!",
    //         },
    //     },
    // });
    $("#user_submit_four").click(function () {});
    // $(".datepicker").datepicker({
    //     startDate: "+3d",
    // });
});
