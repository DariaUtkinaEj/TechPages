var page = require('webpage').create();
page.viewportSize = {
    width: 1920,
    height: 1080
};
page.open('http://tech.loc/', function() {

    setTimeout(function() {
        page.render('screen2.png');
        phantom.exit();
    }, 200);
});