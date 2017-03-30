/*To show/hide iframes*/
function showFacebookiframe() {
    document.getElementById('dashboard_iframe').style.display = "none";
    document.getElementById('youtube_iframe').style.display = "none";
    document.getElementById('facebook_iframe').style.display = "block";
    console.log("Show FB");
}
function showDashboardiframe() {
    document.getElementById('dashboard_iframe').style.display = "block";
    document.getElementById('youtube_iframe').style.display = "none";
    document.getElementById('facebook_iframe').style.display = "none";
    console.log("Show DB");
}
function showYoutubeiframe() {
    document.getElementById('dashboard_iframe').style.display = "none";
    document.getElementById('youtube_iframe').style.display = "block";
    document.getElementById('facebook_iframe').style.display = "none";
    console.log("Show YT");
}

function htmlbodyHeightUpdate() {
    var height3 = $(window).height()
    var height1 = $('.nav').height() + 50
    height2 = $('.main').height()
    if (height2 > height3) {
        $('html').height(Math.max(height1, height3, height2) + 10);
        $('body').height(Math.max(height1, height3, height2) + 10);
    }
    else {
        $('html').height(Math.max(height1, height3, height2));
        $('body').height(Math.max(height1, height3, height2));
    }
}
$(document).ready(function () {
    htmlbodyHeightUpdate()
    $(window).resize(function () {
        htmlbodyHeightUpdate()
    });
    $(window).scroll(function () {
        height2 = $('.main').height()
        htmlbodyHeightUpdate()
    });
});