var page = require('webpage').create();
page.viewportSize = {
    width: 1920,
    height: 1080
};
page.open('http://tech.loc/site/index?page=2&per-page=3', function() {

    setTimeout(function() {
        page.render('screen22.png');
        phantom.exit();
    }, 200);
});