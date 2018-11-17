if (activeRoute === 'admin.category.edit' || activeRoute === 'admin.category.add' || activeRoute === 'admin.category.index') {
    $(function () {
        $('.delete-category').on('click', function (e) {
            return confirm('Are you sure?');
        });

        $('#title').keyup(function (e) {
            e.preventDefault();
            let text = $(this).val();
            your_func(text);
        });

        function your_func(text) {
            $.ajax({
                url: '/admin/category/get-slug/',
                type: 'get',
                datatype: 'json',
                data: {text: text},
                success: function (response) {
                    $('#slug').val(response);
                }
            });
        }
    });
}