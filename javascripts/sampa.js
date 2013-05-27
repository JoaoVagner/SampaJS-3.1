SampaJS = {}
SampaJS.app = {}
SampaJS.app.lang = 'pt-BR';

SampaJS.app.webfont = function() {
    WebFontConfig = {
        google: {families: ['Homenaje::latin', 'Open Sans:600,700,300']}
    };
    (function() {
        var wf = document.createElement('script');
        wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
                '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
        wf.type = 'text/javascript';
        wf.async = 'true';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(wf, s);
    })();
}();

SampaJS.app.palestrantes = function() {

    $.ajax({
        url: '../palestrantes/palestrantes.json',
        type: 'GET',
        dataType: 'json',
        contentType: "application/json; charset=utf-8",
        success: function(data) {
            if (data) {

                $container = $('#container_palestras');
                $.each(data.palestrantes, function(i, v) {
                    console.log(v.title);
                    $data = $('#item_list').clone();
                    $data.show();
                    $data.find('figure img').attr("src", v.photo);
                    $data.find('span[rel="title"]').text(v.author);
                    $data.find('span[rel="hour"]').text(v.start + " - " + v.end);
                    $data.find('h3[rel="subtitle"]').text(v.title);
                    $data.find('p[rel="description"]').text(v.description);

                    $container.append($data);
                });
            }
        },
        error: function(e) {
            console.log(e);
            alert('Erro ao resgatar os palestrantes');
        }
    });
}();

SampaJS.app.validation = function() {
    form = $('#contact');
    send = $('#send')

    //click button
    send.bind('click', function(e) {
        event.preventDefault();
        $('#contact').submit();
    });

    //submit form validation
    form.submit(function(event) {
        event.preventDefault();

        if (form.find('#name').val() == "") {
            $('.validation').html('Por favor, digite um </strong>Nome</strong> ou <strong>Apelido</strong> para que possamos te responder! :) ');
            return false;
        }
        if (form.find('#email').val() == "") {
            $('.validation').html('Por favor, digite um <strong>e-mail</strong> para que possamos te responder! :) ');
            return false;
        }
        if (form.find('#message').val() == "") {
            $('.validation').html('Escreva uma <strong>Mensagem</strong>, mesmo que for apenas para dar um oi! :) ');
            return false;
        }

        $.ajax({
            url: 'contact/send.php',
            type: 'post',
            dataType: 'json',
            data: form.serialize(),
            success: function(data) {
                $('.validation').html(data.success);
            },
            error: function(e) {
                console.log(e);
            }
        })

    })

}();