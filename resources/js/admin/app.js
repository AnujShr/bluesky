window.moment = require('moment');
require('../bootstrap');


$(function () {
    require('../../gentellea/fastclick/lib/fastclick.js');
    require('../../gentellea/nprogress/nprogress.js');
    require('../../gentellea/bootstrap-daterangepicker/daterangepicker.js');
    require('select2');
    require('datatables.net-bs');
    require('summernote');
    require('codemirror/lib/codemirror.js');
    require('codemirror/mode/htmlembedded/htmlembedded.js');
    require('../admin/theme.js');
    require('../admin/main');
    require('../../js/admin/about.js');
    require('../../js/admin/articles.js');
    require('../../js/admin/category.js');
});
