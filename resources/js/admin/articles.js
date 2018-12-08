if (activeRoute === 'admin.articles.create' || activeRoute === 'admin.articles.edit')
    $(function () {
        $('#category').select2();

        function init_daterangepicker_single_call() {

            if (typeof ($.fn.daterangepicker) === 'undefined') {
                return;
            }
            if (typeof (published) === 'undefined') {
                published = moment.now;
            }
            $('#single_cal1').daterangepicker({
                locale: {
                    firstDay: 1,
                },
                startDate: published,
                singleDatePicker: true,
                singleClasses: "picker_1"
            }, function (start, end, label) {
                console.log(start.toISOString(), end.toISOString(), label);
            });
            $('#single_cal2').daterangepicker({
                singleDatePicker: true,
                singleClasses: "picker_2"
            }, function (start, end, label) {
                console.log(start.toISOString(), end.toISOString(), label);
            });
            $('#single_cal3').daterangepicker({
                singleDatePicker: true,
                singleClasses: "picker_3"
            }, function (start, end, label) {
                console.log(start.toISOString(), end.toISOString(), label);
            });
            $('#single_cal4').daterangepicker({
                singleDatePicker: true,
                singleClasses: "picker_4"
            }, function (start, end, label) {
                console.log(start.toISOString(), end.toISOString(), label);
            });

        }

        init_daterangepicker_single_call();
    });