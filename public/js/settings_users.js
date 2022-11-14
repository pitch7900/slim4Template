/**
 * Delete a user
 * @param {type} userid
 * @returns {undefined}
 */
var delete_user = function (userid) {
    $.delete(`/user/${userid}`, function () {
        $(`#user_${userid}`).remove();
    });
}


var change_user_darkmode = function (userid) {
    $.post(`/user/${userid}/darktheme`, function (jsondata) {
        console.log(jsondata);
        if (jsondata.darktheme) {
            $('body').attr('data-theme','dark');
        } else {
            $('body').attr('data-theme','light');
        }
    });
}

var CatalogUsers = function () {

    /**
     * Set uppercase to a firstname or lastname
     */
    var handler_ToUpperName = function () {
        $('body').on('change', '#firstname,#lastname', function (event) {
            console.log("Test");
            $(event.target).val($(event.target).val().substr(0, 1).toUpperCase() + $(event.target).val().substr(1));
        });
    }


    //also adds a text label based on styles
    var setStrengthBarStyles = function (strength) {
        var strengthValue = setStrengthBarValue(strength);
        bar = $('.password-strength__bar');
        bar.css('width', `${strengthValue}%`);

        bar.removeClass('bg-success', 'bg-info', 'bg-warning');

        switch (strengthValue) {
            case 25:
                bar.removeClass(function (index, className) {
                    return (className.match(/(^|\s)bg-\S+/g) || []).join(' ');
                });
                bar.html('Weak');
                break;

            case 50:
                bar.removeClass(function (index, className) {
                    return (className.match(/(^|\s)bg-\S+/g) || []).join(' ');
                });
                bar.addClass('bg-warning');
                bar.html('Moderate');
                break;

            case 75:
                bar.removeClass(function (index, className) {
                    return (className.match(/(^|\s)bg-\S+/g) || []).join(' ');
                });
                bar.addClass('bg-info');
                bar.html('Strong');
                break;

            case 100:
                bar.removeClass(function (index, className) {
                    return (className.match(/(^|\s)bg-\S+/g) || []).join(' ');
                });
                bar.addClass('bg-success');
                bar.html('Extra Strong');
                break;

            default:
                bar.removeClass(function (index, className) {
                    return (className.match(/(^|\s)bg-\S+/g) || []).join(' ');
                });
                bar.addClass('bg-danger');
                bar.html('');
                bar.css('width', '0%');
        }
    };

    var setStrengthBarValue = function (strength) {

        let strengthValue;
        bar = $('.password-strength__bar');

        switch (strength) {
            case 'weak':
                strengthValue = 25;
                bar.attr('aria-valuenow', strengthValue);
                break;

            case 'moderate':
                strengthValue = 50;
                bar.attr('aria-valuenow', strengthValue);
                break;

            case 'strong':
                strengthValue = 75;
                bar.attr('aria-valuenow', strengthValue);
                break;

            case 'extra':
                strengthValue = 100;
                bar.attr('aria-valuenow', strengthValue);
                break;

            default:
                strengthValue = 0;
                bar.attr('aria-valuenow', 0);
        }
        return strengthValue;
    }

    /**
     * Hide or display the password
     */
    var handler_PasswordVisibilityIcon = function () {
        $('body').on('click', '.password-strength__visibility-icon', function (event) {
            //Change the icon
            console.log("test");
            $(this).addClass('invisible');
            $(this).siblings('.password-strength__visibility-icon')
                .removeClass('invisible');
            //Get the current value
            var passwordvisibility = $(this).attr('data-visible');
            //display password if needed
            if (passwordvisibility === 'visible') {
                $(this).parents('.password-strength__input').find('input').attr('type', 'text');
            } else {
                $(this).parents('.password-strength__input').find('input').attr('type', 'password');
            }

        });
    };

    /**
     * Compare password with regex for strength
     * @param {*} passw 
     * @param {*} regexp 
     */
    var testPasswRegexp = function (passw, regexp) {
        return regexp.test(passw);
    };

    /**
     * Test current password strength
     * Return 'extra' / 'strong' / 'moderate' / 'weak' as status
     * @param {*} password 
     */
    var testPassw = function (password) {
        let strength = 'none';
        const moderate = /(?=.*[A-Z])(?=.*[a-z]).{5,}|(?=.*[\d])(?=.*[a-z]).{5,}|(?=.*[\d])(?=.*[A-Z])(?=.*[a-z]).{5,}/g;
        const strong = /(?=.*[A-Z])(?=.*[a-z])(?=.*[\d]).{7,}|(?=.*[\!@#$%^&*()\\[\]{}\-_+=~`|:;"'<>,./?])(?=.*[a-z])(?=.*[\d]).{7,}/g;
        const extraStrong = /(?=.*[A-Z])(?=.*[a-z])(?=.*[\d])(?=.*[\!@#$%^&*()\\[\]{}\-_+=~`|:;"'<>,./?]).{9,}/g;

        if (testPasswRegexp(password, extraStrong)) {
            strength = 'extra';
        } else if (testPasswRegexp(password, strong)) {
            strength = 'strong';
        } else if (testPasswRegexp(password, moderate)) {
            strength = 'moderate';
        } else if (password.length > 0) {
            strength = 'weak';
        }

        return strength;

    };

    /**
     * Check password and confirmation match 
     */
    var handler_CheckPassword = function () {
        $('[id^=confirm_password_],[id^=password_]').bind("keyup change", function (event) {
            var confirm_password = $(event.target).closest('form').find('[id^=confirm_password_]').val();
            var password = $(event.target).closest('form').find('[id^=password_]').val();
            var strength = testPassw(password);
            setStrengthBarStyles(strength);
            if (password !== confirm_password) {
                $(event.target).closest('form').find('[id^=password_]').removeClass('is-valid');
                $(event.target).closest('form').find('[id^=confirm_password_]').removeClass('is-valid');
                $(event.target).closest('form').find('[id^=password_]').addClass('is-invalid');
                $(event.target).closest('form').find('[id^=confirm_password_]').addClass('is-invalid');
                $(event.target).closest('form').find(':submit').attr("disabled", "disabled");
            } else {
                $(event.target).closest('form').find('[id^=password_]').removeClass('is-invalid');
                $(event.target).closest('form').find('[id^=confirm_password_]').removeClass('is-invalid');
                $(event.target).closest('form').find('[id^=password_]').addClass('is-valid');
                $(event.target).closest('form').find('[id^=confirm_password_]').addClass('is-valid');

                $(event.target).closest('form').find(':submit').removeAttr("disabled");
            }
        });
    }



    /**
     * Check if username is not already used by someone else
     */

    var handler_CheckUserName = function () {
        $('[id^=login_]').bind("keyup change",
            function (event) {
                $(event.target).val($(event.target).val().toLowerCase());
                var login = $(event.target).val();


                $.post('/user/checklogin.json', { login: login }, function (jsonexist) {

                    if (!jsonexist.exist) {
                        $(event.target).addClass("is-valid");
                        $(event.target).removeClass("is-invalid");
                        $(event.target).closest('form').find(':submit').removeAttr("disabled");
                    } else {
                        $(event.target).addClass("is-invalid");
                        $(event.target).removeClass("is-valid");
                        
                        $(event.target).closest('form').find(':submit').attr("disabled", "disabled");
                    }
                });
            }
        );
    }
    var hide_ShowPasswordIcons = function () {

    }


    return {
        init: function () {
            handler_ToUpperName();
            handler_CheckUserName();
            handler_CheckPassword();
            hide_ShowPasswordIcons();
            handler_PasswordVisibilityIcon();
        }
    };
}();



$(document).ready(function () {
    CatalogUsers.init();
});