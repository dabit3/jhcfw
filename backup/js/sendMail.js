$(document).ready(function() {

    $('#jhcfw-mobile-submit').click(function () {
        var name = $('#form-name').val();
        var email = $('#form-email').val();
        var message = $('#form-feedback-questions').val();
        var varData = 'name=' + name + '&email=' + email + '&message=' + message;

        if((name != "") && (email != "") && (message != "")) {
            $.ajax({
                type: "POST",
                url: "sendmail.php",
                data: varData,
                success: function() {
                    $("#form-container").hide();
                    $("#contact-form-sent").show();
                    ga('send', 'event', 'Submit', 'Contact Form', 'Contact Form Page Submission');
                }
            });
            return false;
        }
    });

});

