jQuery(function($) {

    var loading ='<p style="text-align: center; margin-top: 2em;"><img src="/assets/img/loading.gif" alt="loading" /> <br /> Please wait. Processing...</p>';

    function getLoading() {
        return loading;
    }

    $(document).on('click', 'a[data-async]', function(event) {
        event.preventDefault();
        var $link = $(this);
        var target = $link.attr('data-target');
        $(target).html(getLoading());
        $(target).load($link.attr('href'));
    });

    var doneUploading = function(e, data) {
        if (typeof data === 'object') {
            if(data.result.success == true) {
                $(document).trigger(data.result.broadcast, { data: data.result });
            } else {
                errorUploading(e, data);
            }
        }
    },
    errorUploading = function(e, data) {
        if(data.hasOwnProperty('result') && data.result.hasOwnProperty('errors')) {
            $('#dialog').find('.errors').html('<div class="alert alert-warning">' + data.result.errors + '</div>');
        } else {
            $('#dialog').find('.errors').html('<div class="alert alert-warning">Error uploading. Try again or contact us for help at choice@choicebusinesssolutions.net</div>');
        }
    },
    progressAll = function (e, data) {
        var progress = parseInt(data.loaded / data.total * 100, 10);
        $('#progress .progress-bar').css(
            'width',
            progress + '%'
        );
    };

    $(document).on('loaded.bs.modal', function (e) {

        setupHTML5Editor();

        $('.file-upload').fileupload({
            acceptFileTypes: /(\.|\/)(pdf|doc|docx|xlsx|txt)$/i,
            url: $('#uploadurl').val(),
            dataType: 'json',
            done: doneUploading,
            error: errorUploading,
            progressall: progressAll
        }).bind('fileuploadstart', function (e) {
            $('#dialog').find('.errors').text('');
        });
    });

    function setupHTML5Editor() {
        $('.editable').wysihtml5({
                "font-styles": false,   //Font styling, e.g. h1, h2, etc. Default true
                emphasis : true,        //Italics, bold, etc. Default true
                lists: true,            //(Un)ordered lists, e.g. Bullets, Numbers. Default true
                html: false,            //Button which allows you to edit the generated HTML. Default false
                link: false,            //Button to insert a link. Default true
                image: false,           //Button to insert an image. Default true,
                color: false,           //Button to change color of font
                parserRules: wysihtml5ParserRules

                });
    }

    function setupDeleteHandlers() {

        $('.confirm-delete').unbind();

        $('.confirm-delete').bind('click', function() {
            $.ajax({
                'url': $(this).data('delete-url'),
                'type': 'json',
                'method' : 'GET'
            }).done(
                function(data) {
                    if(typeof data === 'object') {
                    $(document).trigger(
                        data.broadcast, { data: data });
                        setupDeleteHandlers();
                    }
            });
            return false;
        });

        $(".confirm-delete").popConfirm({
            'title': "Confirm delete",
            'content': "Are you sure you want to delete this?",
            'placement': "right"
        });

    }

    setupDeleteHandlers();
    setupHTML5Editor();

    $(document).on('submit', 'form[data-async]', function (event) {
        event.preventDefault();

        var $form = $(this);

        var target = $form.attr('data-target');

        returned = false;

        var subOpts = {
            url: $form.attr('action') + '?_=' + new Date().getTime(),
            type: $form.attr('method') || 'POST',
            cache: false,
            dataTye: 'xml',
            target: null,
            success: function (responseXml) {
                returned = true;
                if (typeof responseXml === 'object') {
                    $(document).trigger(responseXml.broadcast, {data: responseXml});
                    setupDeleteHandlers();
                } else {
                    if (target == '#dialog') {
                        $(target).find('.modal-content').html(responseXml);
                    }
                    $(target).html(responseXml);
                }
            },
            error: function () {
                $(target).find('.modal-content').html('<p class="error">An error has occured. Try again or contact your administrator.</p>');
            },
            beforeSubmit: function () {
                window.setTimeout(function () {
                    if (returned == false) {
                        if (target == '#dialog') {
                            $(target).find('.modal-content').html(getLoading());
                        } else {
                            $(target).html(getLoading());
                        }
                    }
                }, 200);
            }
        };

        $form.ajaxSubmit(subOpts);

    });
});
