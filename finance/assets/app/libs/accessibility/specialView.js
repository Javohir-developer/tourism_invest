var curUrl = window.location.href;
var arCurUrl = curUrl.split('/');
var noImageTitle = 'Rasmsiz';
var setImageTitle = 'Rasmli';
switch (arCurUrl[3]){
    case 'cyrl':
        noImageTitle = '�������';
        setImageTitle = '������';
        break;
    case 'ru':
        noImageTitle = '��� ��������';
        setImageTitle = '� ���������';
        break;
    case 'en':
        noImageTitle = 'Without a picture';
        setImageTitle = 'With a picture';
        break;
}

var min = 10,
    max = 25;

function makeNormal() {
    jQuery('html, body').removeClass('blackAndWhite blackAndWhiteInvert');
    jQuery.removeCookie('specialView', {path: '/'});
}

function makeBlackAndWhite() {
    makeNormal();
    jQuery('html').addClass('blackAndWhite');
    jQuery.cookie("specialView", 'blackAndWhite', {path: '/'});
}

function makeBlackAndWhiteDark() {
    makeNormal();
    jQuery('html').addClass('blackAndWhiteInvert');
    jQuery.cookie("specialView", 'blackAndWhiteInvert', {path: '/'});
}

//makeBlackAndWhite();
function makeSetImage() {
    jQuery('html').removeClass( "noImage" );
    //jQuery('.spcImage').removeClass( "spcSetImage" );
    jQuery('.spcNoImage').removeClass( "spcSetImage" );
    jQuery('.spcNoImage').attr('data-original-title', setImageTitle);
    jQuery.removeCookie('specialViewImage', {path: '/'});
}

function makeNoImage() {
    jQuery('html').stop().addClass( "noImage" );
    jQuery('.spcNoImage').addClass( "spcSetImage" );
    jQuery('.spcNoImage').attr('data-original-title', noImageTitle);
    jQuery.cookie("specialViewImage", 'noImage', {path: '/'});
}

function offImages(){
    if (jQuery.cookie("specialViewImage") == 'noImage'){
        makeSetImage();
    } else {
        makeNoImage();
    }
}

function setFontSize(size) {
    console.log(size);
    if (size < min) {
        size = min;
    }
    if (size > max) {
        size = max;
    }
    jQuery('body, a, li, div:not(.item), p, h1, h2, h3, h4, h5, h6, table, span, ul').css({'font-size': parseInt(size) + 2+ 'px'});
    jQuery('body, a, li, div, p, h1, h2, h3, h4, h5, h6, table, span, ul').css({'font-size': parseInt(size) +-1 + 'px'});
    jQuery('.blog-post post-format-standard').css({'height': parseInt(size) +-1 + 'px'});
//    $('.main-news h1').css({'font-size': parseInt(size) + 4 + 'px'});
//    $('.link_list a, .expmenu li a, .main-news p a').css({'font-size': parseInt(size) - 2 + 'px'});
//    $('.smallText, .caption, .minif').css({'font-size': parseInt(size) - 4 + 'px'});

//    $('.fontChangeable, .panel-classic .panel-heading, .menu li a, .breadcrumbs li, .classicGridViewListtext, .selectArea, .selectArea li a, .list .listItem').css({'font-size': size + 'px'});

    if (size > max - 7) {
        jQuery('.news-container .main-news').hide();
        jQuery('.news-container .listData').removeClass('col-md-6').addClass('col-md-12');
    } else {
        jQuery('.news-container .main-news').show();
        jQuery('.news-container .listData').removeClass('col-md-12').addClass('col-md-6');
    }
}

function saveFontSize(size) {
    jQuery.cookie("fontSize", size, {path: '/'});
}
function changeSliderText(sliderId, value) {
//    alert(value);
    
    var position = Math.round(Math.abs((value - min) * (100 / (max - min))));
    position -= 50;
    jQuery('#' + sliderId).prev('.sliderText').children('.range').text(position);
}

function setNarrator() {
    jQuery('head').append(jQuery('<script type="text/javascript"><\/script>').attr('src', siteBaseUrl+'/js/narrator.js?lang='+siteLanguage));
    narrator.init();
    jQuery.cookie("narrator", 'on', {path: '/'});
    if (typeof(jQuery.cookie("speechVolume")) == 'undefined') {
        jQuery("#speechVolume").slider('value', 100);
        jQuery('#speechOptions .sliderText .range').text(100);
    } else {
        var speechVolume = jQuery.cookie("speechVolume")
        jQuery("#speechVolume").slider('value', speechVolume);
        jQuery('#speechOptions .sliderText .range').text(speechVolume);
    }
}

function unsetNarrator() {
    jQuery.cookie("narrator", null, { path: '/' });
    jQuery('#speech').remove();
    removeJsCssFile('narrator.js', 'js');
}

function saveSpeechVolume(val) {
    if (val > 100 || val < 25) {
        val = 100;
    }
    narrator.setVolume(val);
    jQuery.cookie("speechVolume", val, {path: '/'});
}

jQuery(document).ready(function () {
    var appearance = jQuery.cookie("specialView");
    switch (appearance) {
        case 'blackAndWhite':
            makeBlackAndWhite();
            break;
        case 'blackAndWhiteInvert':
            makeBlackAndWhiteDark();
            break;
    }
    var noimage = jQuery.cookie("specialViewImage");
    switch (noimage) {
        case 'noImage':
            makeNoImage();
            break;
        case 'setImage':
            makeSetImage();
            break;
    }

    jQuery('.no-propagation').click(function (e) {
        e.stopPropagation();
    });

    jQuery('.appearance .spcNormal').click(function () {
        makeNormal();
    });
    jQuery('.appearance .spcWhiteAndBlack').click(function () {
        makeBlackAndWhite();

    });
    jQuery('.appearance .spcDark').click(function () {
        makeBlackAndWhiteDark();
    });

    jQuery('.appearance .spcNoImage').click(function () {
        offImages();
    });


    jQuery('#speechSwitcher').change(function () {
        if (this.checked) {
            jQuery('#speechOptions').slideDown(100);
            setNarrator();
            narrator.speak(jQuery(this).attr('title'));
            jQuery(".speech").stop().animate({opacity:1}, "fast").addClass('speechHover');
        } else {
            jQuery('#speechOptions').slideUp(100);
            unsetNarrator();
            jQuery(".speech").stop().removeClass('speechHover');
        }
    });

    jQuery('#fontSizer').slider({
        min: min,
        max: max,
//        range: "min",
        value:   14,
        slide: function (event, ui) {
            setFontSize(ui.value);
            changeSliderText('fontSizer', ui.value);
        },
        change: function (event, ui) {
            saveFontSize(ui.value);
        }
    });

//    jQuery('#speechVolume').slider({
//        min: 25,
//        max: 100,
//        range: "min",
//        slide: function (event, ui) {
//            $('#speechVolume').prev('.sliderText').children('.range').text(ui.value);
//        },
//        change: function (event, ui) {
//            saveSpeechVolume(ui.value);
//        }
//    });

//    var fontSize = jQuery.cookie("fontSize");
//    if (typeof(fontSize) != 'undefined') {
//        jQuery("#fontSizer").slider('value', fontSize);
//        setFontSize(fontSize);
//        changeSliderText('fontSizer', fontSize);
//    }

//    Mousetrap.bind(['shift+return'], function() {
//        $('#speechSwitcher').prop('checked', !$('#speechSwitcher').prop('checked'));
//        $('#speechSwitcher').trigger('change');
//        return false;
//    });

    if (jQuery.cookie("narrator") == 'on' && typeof(jQuery.cookie("narrator")) != 'undefined'){
        jQuery('#speechSwitcher').prop('checked', true);
        jQuery('#speechSwitcher').trigger('change');
        var speechVolume = jQuery.cookie("speechVolume");
        if (typeof(speechVolume) != 'undefined') {
            jQuery("#speechVolume").slider('value', speechVolume);
            jQuery('#speechOptions .sliderText .range').text(speechVolume);
        }
        if (typeof(speechNotification) != 'undefined'){
            narrator.speak(speechNotification);
        }

        Mousetrap.bind(['ctrl+shift'], function() {
            narrator.stop();
            jQuery('#speechArea').removeClass('narratorBox');
            return false;
        });

        Mousetrap.bind(['ctrl+alt'], function() {
            if (typeof(jQuery('#speechArea')) != 'undefined'){
                jQuery('#speechArea').addClass('narratorBox');
                jQuery('#speechArea').append('<div class="loading"></div>');
                narrator.speak(jQuery('#speechArea').text());
            }
            return false;
        });

    }
    $('header .header_top .bcontainer .forum_accessibility .accessibility').click(function () {
       $('.specialViewArea').toggleClass('open');
    });
    $('.spcNormal').click(function () {
        $('html').attr('class', '');
        $('body, a, li, p, h1, h2, h3, h4, h5, h6, table, span, ul').attr('style', '');
        $('.sliderText .range').text(0);
        $("#fontSizer").slider('value',14);
        $.cookie('fontSize', false, {path: '/'});
    });

    if($.cookie("fontSize") != false){
        setFontSize($.cookie("fontSize"));
    }
});
