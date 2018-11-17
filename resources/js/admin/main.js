$(function () {
    $SIDEBAR_MENU = $('#sidebar-menu');
    let $CURRENT_URL;
    if (!$SIDEBAR_MENU.find('.current-page').length) {
        $CURRENT_URL = window.location.href;
        let PARENT_URL = $CURRENT_URL.split('/');
        PARENT_URL.pop();
        PARENT_URL = PARENT_URL.join('/');
        console.log(PARENT_URL);
        console.log($SIDEBAR_MENU.find('a[href="' + PARENT_URL + '"]').parent('li').addClass('current-page'));
        $SIDEBAR_MENU.find('a[href="' + PARENT_URL + '"]').parent('li').addClass('current-page')
        $SIDEBAR_MENU.find('a').filter(function () {
            return this.href === PARENT_URL;
        }).parent('li').addClass('current-page').parents('ul').parent().addClass('active');
    }
});