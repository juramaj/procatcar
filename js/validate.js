$(document).ready(function() {
    $('#login').blur(function() {
        if($(this).val().length > 2) {$('#valid_login').text('')} 
        else {
            $('#valid_login').text('Логин должен быть более 2 символов!');
        }
    });
});

$(document).ready(function() {
    $('#email').blur(function() {
        if($(this).val() != '') {
            var pattern = /^([a-z0-9_\.-])+@[a-z0-9-]+\.([a-z]{2,4}\.)?[a-z]{2,4}$/i;
            if(pattern.test($(this).val())){$('#valid_email').text('');}
            else {
                $('#valid_email').text('Не верный формат E-mail!');
            }
        } else {
        $('#valid_email').text('Поле E-mail не должно быть пустым!');
        }
    });
});

$(document).ready(function() {
    $('#password').blur(function() {
        if($(this).val().length > 5) {$('#valid_password').text('');}
        else {
	        $('#valid_password').text('Пароль должен быть более 5 символов!');
        }
    });
});