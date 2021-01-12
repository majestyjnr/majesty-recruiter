$j(function () {
    $j('#username').focus();

    $j('#usernameAvailable, #usernameNotAvailable').click(function () { $j('#username').focus(); });
    $j('#username').on('keyup blur', checkUser);

    /* password strength feedback */
    $j('#password').on('keyup blur', function () {
        var ps = passwordStrength($j('#password').val(), $j('#username').val());

        if (ps == 'strong') {
            $j('#password').parents('.form-group').removeClass('has-error has-warning').addClass('has-success');
            $j('#password').attr('title', '<?php echo html_attr($Translation['Password strength: strong']); ?>');
        } else if (ps == 'good') {
            $j('#password').parents('.form-group').removeClass('has-success has-error').addClass('has-warning');
            $j('#password').attr('title', '<?php echo html_attr($Translation['Password strength: good']); ?>');
        } else {
            $j('#password').parents('.form-group').removeClass('has-success has-warning').addClass('has-error');
            $j('#password').attr('title', '<?php echo html_attr($Translation['Password strength: weak']); ?>');
        }
    });

    /* inline feedback of confirm password */
    $j('#confirmPassword').on('keyup blur', function () {
        if ($j('#confirmPassword').val() != $j('#password').val() || !$j('#confirmPassword').val().length) {
            $j('#confirmPassword').parents('.form-group').removeClass('has-success').addClass('has-error');
        } else {
            $j('#confirmPassword').parents('.form-group').removeClass('has-error').addClass('has-success');
        }
    });

    /* inline feedback of email */
    $j('#email').on('change', function () {
        if (validateEmail($j('#email').val())) {
            $j('#email').parents('.form-group').removeClass('has-error').addClass('has-success');
        } else {
            $j('#email').parents('.form-group').removeClass('has-success').addClass('has-error');
        }
    });

    /* validate form before submitting */
    $j('#submit').click(function (e) { if (!jsValidateSignup()) e.preventDefault(); })
});

var uaro; // user availability request object
function checkUser() {
    // abort previous request, if any
    if (uaro != undefined) uaro.abort();

    reset_username_status();

    uaro = $j.ajax({
        url: 'checkMemberID.php',
        type: 'GET',
        data: { 'memberID': $j('#username').val() },
        success: function (resp) {
            var ua = resp;
            if (ua.match(/\<!-- AVAILABLE --\>/)) {
                reset_username_status('success');
            } else {
                reset_username_status('error');
            }
        }
    });
}

function reset_username_status(status) {
    $j('#usernameNotAvailable, #usernameAvailable')
        .addClass('hidden')
        .parents('.form-group')
        .removeClass('has-error has-success');

    if (status == undefined) return;
    if (status == 'success') {
        $j('#usernameAvailable')
            .removeClass('hidden')
            .parents('.form-group')
            .addClass('has-success');
    }
    if (status == 'error') {
        $j('#usernameNotAvailable')
            .removeClass('hidden')
            .parents('.form-group')
            .addClass('has-error');
    }
}


if (!validateEmail(email)) {
    modal_window({ message: '<div class="alert alert-danger"><?php echo html_attr($Translation['email invalid']); ?></div>', title: "<?php echo html_attr($Translation['error:']); ?>", close: function () { $j('#email').focus(); } });
    return false;
}

/* validate data before submitting */
function jsValidateSignup() {
    var p1 = $j('#password').val();
    var p2 = $j('#confirmPassword').val();
    var email = $j('#email').val();

    /* user exists? */
    if (!$j('#username').parents('.form-group').hasClass('has-success')) {
        modal_window({ message: '<div class="alert alert-danger"><?php echo html_attr($Translation['username invalid']); ?></div>', title: "<?php echo html_attr($Translation['error:']); ?>", close: function () { $j('#username').focus(); } });
        return false;
    }

    /* passwords not matching? */
    if (p1 != p2) {
        modal_window({ message: '<div class="alert alert-danger"><?php echo html_attr($Translation['password no match']); ?></div>', title: "<?php echo html_attr($Translation['error:']); ?>", close: function () { $j('#confirmPassword').focus(); } });
        return false;
    }


}
return true;
}
