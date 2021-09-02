$(document).ready(function () {
    var current_fs, next_fs, previous_fs; //fieldsets
    var opacity;
    $(".previous").click(function () {
        current_fs = $(this).parent();
        previous_fs = $(this).parent().prev();

        //Remove class active
        $("#progressbar li")
            .eq($("fieldset").index(current_fs))
            .removeClass("active");

        //show the previous fieldset
        previous_fs.show();

        //hide the current fieldset with style
        current_fs.animate(
            { opacity: 0 },
            {
                step: function (now) {
                    // for making fielset appear animation
                    opacity = 1 - now;

                    current_fs.css({
                        display: "none",
                        position: "relative",
                    });
                    previous_fs.css({ opacity: opacity });
                },
                duration: 600,
            }
        );
    });
    $(".radio-group .radio").click(function () {
        $(this).parent().find(".radio").removeClass("selected");
        $(this).addClass("selected");
    });
    $(".submit").click(function () {
        return false;
    });
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
    $("#first_button").click(function() {
        var form = $("#regform");
        if (form.valid() === true ) {
            if($("#email").val() != $("#cemail").val()){
                $(".error-email").show();
            }else if ($("#password").val() != $("#c_password").val()) {
                $(".error-password").show();
            }else{
                $(".next").click(function () {
                    current_fs = $(this).parent();
                    next_fs = $(this).parent().next();
                    $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
                    next_fs.show();
                    current_fs.animate(
                        { opacity: 0 },
                        {
                            step: function (now) {
                                opacity = 1 - now;
                                current_fs.css({
                                    display: "none",
                                    position: "relative",
                                });
                                next_fs.css({ opacity: opacity });
                            },
                            duration: 600,
                        }
                    );
                });
            }
        }
    });
    $("#second_button").click(function () {
        var form = $("#regform");
        if (form.valid() === true) {
            // $(".next").click(function () {
            //     current_fs = $(this).parent();
            //     next_fs = $(this).parent().next();
            //     $("#progressbar li")
            //         .eq($("fieldset").index(next_fs))
            //         .addClass("active");
            //     next_fs.show();
            //     current_fs.animate(
            //         { opacity: 0 },
            //         {
            //             step: function (now) {
            //                 opacity = 1 - now;
            //                 current_fs.css({
            //                     display: "none",
            //                     position: "relative",
            //                 });
            //                 next_fs.css({ opacity: opacity });
            //             },
            //             duration: 600,
            //         }
            //     );
            // });
        }
    });

});
