var page = require('webpage').create();
page.viewportSize = {
    width: 1920,
    height: 1080
};
page.open('https://just-for-fun-myapps.ru/tech.pages.loc/web/', function() {

    setTimeout(function() {
        page.render('screen25.png');
        phantom.exit();
    }, 200);
});