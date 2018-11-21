$(function () {
    $('#datatable-responsives').DataTable();
    $SIDEBAR_MENU = $('#sidebar-menu');
    let $CURRENT_URL;
    if (!$SIDEBAR_MENU.find('.current-page').length) {
        $CURRENT_URL = window.location.href;
        let PARENT_URL = $CURRENT_URL.split('/');
        PARENT_URL.pop();
        PARENT_URL = PARENT_URL.join('/');
        $SIDEBAR_MENU.find('a[href="' + PARENT_URL + '"]').parent('li').addClass('current-page')
        $SIDEBAR_MENU.find('a').filter(function () {
            return this.href === PARENT_URL;
        }).parent('li').addClass('current-page').parents('ul').slideDown().parent().addClass('active');
    }
    //Summernote JS using smiley
    $.ajax({
        url: 'https://api.github.com/emojis',
        async: false
    }).then(function (data) {
        window.emojis = Object.keys(data);
        window.emojiUrls = data;
    });

    $('.summernote').summernote({
        minHeight: 150,
        codemirror: { // codemirror options
            theme: 'monokai'
        },
        hint: {
            match: /:([\-+\w]+)$/,
            search: function (keyword, callback) {
                callback($.grep(emojis, function (item) {
                    return item.indexOf(keyword) === 0;
                }));
            },
            template: function (item) {
                var content = emojiUrls[item];
                return '<img src="' + content + '" width="20" /> :' + item + ':';
            },
            content: function (item) {
                var url = emojiUrls[item];
                if (url) {
                    return $('<img />').attr('src', url).css('width', 20)[0];
                }
                return '';
            }
        },
        toolbar: [
            // [groupName, [list of button]]
            ['style', ['bold', 'italic', 'underline', 'clear']],
            ['font', ['strikethrough', 'superscript', 'subscript']],
            ['fontsize', ['fontsize']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['height', ['height']]
        ]
    });
    $('.text').val = '';
    $(document).on('change', '.btn-file :file', function () {
        var input = $(this),
            label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
        input.trigger('fileselect', [label]);
    });

    $('.btn-file :file').on('fileselect', function (event, label) {

        var input = $(this).parents('.input-group').find(':text'),
            log = label;

        if (input.length) {
            input.val(log);
        } else {
            if (log) alert(log);
        }
        $('.polaroid').show();
        $('.img-preview').addClass('polaroid');
        $('.text-container').html('<p>Preview</p>')

    });

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#img-upload').attr('src', e.target.result);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#imgInp").change(function () {
        readURL(this);
    });

});