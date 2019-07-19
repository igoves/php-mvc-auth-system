var lang_text = {
    'en': {
        'messages_forename': 'Please enter your forename',
        'messages_surname': 'Please enter your surname',
        'messages_email': 'Please enter a valid email address',
        'messages_phone': 'Please enter your Phone',
        'messages_password_required': 'Please provide a password',
        'messages_password_minlength': 'Your password must be at least 6 characters long',
        'messages_password_repeat_required': 'Please provide a password',
        'messages_password_repeat_minlength': 'Your password must be at least 6 characters long',
        'messages_password_repeat_equalTo': 'Please enter the same password as above',
    },
    'ru': {
        'messages_forename': 'Введите имя',
        'messages_surname': 'Введите фамилию',
        'messages_email': 'Введите правильную Е-почту',
        'messages_phone': 'Введите ваш номер телефона',
        'messages_password_required': 'Введите пароль',
        'messages_password_minlength': 'Ваш пароль должен содержать как минимум 6 знаков',
        'messages_password_repeat_required': 'Введите пароль повторно',
        'messages_password_repeat_minlength': 'Ваш пароль должен содержать как минимум 6 знаков',
        'messages_password_repeat_equalTo': 'Пароли должны совпадать',
    },
};


var loading = {
    start: function () {
        NProgress.start();
    },
    stop: function () {
        init();
        NProgress.done();
    }
};


$(document).ready(function ($) {

    $(document).pjax('a:not([data-ajax="no"])', '#mc');
    $(document).on('pjax:start', function () {
        loading.start();
    });
    $(document).on('pjax:end', function () {
        loading.stop();
    });
    $(document).on('pjax:popstate', function () {
        loading.stop();
    });
    $(document).on('pjax:timeout', function (event) {
        event.preventDefault();
    });

    init();

});


var init = function () {

    $('.custom-file-input').on('change', function () {
        var fileName = $(this).val();
        $(this).next().addClass("selected").text(fileName);
        readURL(this);
    });

    $('.phone').mask('+38(000)000-00-00');

    $("#regForm").validate({
        rules: {
            forename: {
                required: true,
                minlength: 2
            },
            surname: {
                required: true,
                minlength: 2
            },
            email: {
                required: true,
                email: true
            },
            password: {
                required: true,
                minlength: 6
            },
            password_repeat: {
                required: true,
                minlength: 6,
                equalTo: "#password-input"
            },
        },
        messages: {
            forename: lang_text[lang].messages_forename,
            surname: lang_text[lang].messages_surname,
            email: lang_text[lang].messages_email,
            phone: lang_text[lang].messages_phone,
            password: {
                required: lang_text[lang].messages_password_required,
                minlength: lang_text[lang].messages_password_minlength,
            },
            password_repeat: {
                required: lang_text[lang].messages_password_repeat_required,
                minlength: lang_text[lang].messages_password_repeat_minlength,
                equalTo: lang_text[lang].messages_password_repeat_equalTo
            },
        },
        errorPlacement: function (error, element) {
            error.addClass("invalid-feedback");
            if (element.prop("type") === "checkbox") {
                error.insertAfter(element.next("label"));
            } else {
                error.insertAfter(element);
            }
        },
        highlight: function (element) {
            $(element).addClass("is-invalid").removeClass("is-valid");
        },
        unhighlight: function (element) {
            $(element).addClass("is-valid").removeClass("is-invalid");
        }
    });

    $("#loginForm").validate({
        rules: {
            email: {
                required: true,
                email: true
            },
            password: {
                required: true,
                minlength: 6
            },
        },
        messages: {
            email: lang_text[lang].messages_email,
            password: {
                required: lang_text[lang].messages_password_required,
                minlength: lang_text[lang].messages_password_minlength,
            },
        },
        errorPlacement: function (error, element) {
            error.addClass("invalid-feedback");
            if (element.prop("type") === "checkbox") {
                error.insertAfter(element.next("label"));
            } else {
                error.insertAfter(element);
            }
        },
        highlight: function (element) {
            $(element).addClass("is-invalid").removeClass("is-valid");
        },
        unhighlight: function (element) {
            $(element).addClass("is-valid").removeClass("is-invalid");
        }
    });


    init_menu();

};


var readURL = function (input) {

    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#preview').find('img').attr('src', e.target.result);
        };

        reader.readAsDataURL(input.files[0]);
    }

};


var init_menu = function () {

    var url;
    var url_path;
    $('#lang_menu a').attr('href', window.location.pathname);
    if (lang === 'ru') {
        url = $('#lang_menu a').first();
        url_path = $('#lang_menu a').first().attr('href');
        url_path = url_path.substr(3);
        if (url_path === '') {
            url_path = '/';
        }
    }
    if (lang === 'en') {
        url = $('#lang_menu a').eq(1);
        url_path = $('#lang_menu a').eq(1).attr('href');
        if (url_path === '/') {
            url_path = '/ru';
        } else {
            url_path = '/ru' + url_path;
        }
    }
    url.attr('href', url_path);
    $('#lang_menu a').each(function () {
        if (window.location.pathname === $(this).attr('href')) {
            $(this).addClass('active');
        }
    });
    $('#top_menu a').each(function () {
        if (window.location.pathname === $(this).attr('href')) {
            $(this).addClass('active');
        } else {
            $(this).removeClass('active');
        }
    });

};


