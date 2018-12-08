if (activeRoute === 'admin.category.edit' || activeRoute === 'admin.category.add' || activeRoute === 'admin.category.index') {
    $(function () {

            $('#title').keyup(function () {
                $('#slug').val('');
                let text = $(this).val();
                delay(function () {
                    console.log(text);
                    send_data(text);
                }, 1000);
            });
            let delay = (function () {
                let timer = 0;
                return function (callback, ms) {
                    clearTimeout(timer);
                    timer = setTimeout(callback, ms);
                };
            })();

            function send_data(text) {
                if (typeof id === 'undefined' || id === null) {
                    id = null;
                }
                if (id) {
                    data = {
                        text: text,
                        id: id,
                    };
                }
                else {
                    data = {
                        text: text
                    }
                }

                $.ajax({
                    url: '/admin/category/get-slug/',
                    type: 'get',
                    datatype: 'json',
                    data: data,
                    success: function (response) {
                        $('#slug').val(response);
                    }
                });
            }
        }
    );
}