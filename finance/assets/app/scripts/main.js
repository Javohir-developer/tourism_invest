$(document).ready(function () {
    $("header .top .left .choose_lang .current_lang").click(function () {
        $(this).parent().toggleClass("lang_width")
    }), $("header .bottom .search_button").on("click", function () {
        $(".header_search_block").toggleClass("show_search"), $(".search_overlay").addClass("block"), setTimeout(function () {
            $("header .wrapper_header_search_block .header_search_block form .input_block input").focus()
        }, 100)
    }), $(".search_overlay").on("click", function () {
        $(".header_search_block").removeClass("show_search"), $(".search_overlay").removeClass("block")
    }), $(".index_top_slider").owlCarousel({
        loop: !0,
        margin: 0,
        nav: !1,
        dots: !1,
        responsive: {0: {items: 1}, 600: {items: 1}, 1e3: {items: 1}}
    }),
        $(".index_useful_links_block").owlCarousel({
            loop: !0,
            margin: 0,
            nav: 1,
            dots: !1,
            responsive: {0: {items: 1}, 600: {items: 2}, 1e3: {items: 4}}
        }),$(".single_bottom_slider").owlCarousel({
        loop: !0,
        margin: 15,
        nav: !1,
        dots: !1,
        responsive: {0: {items: 1}, 600: {items: 2}, 1e3: {items: 3}}
    }), $(document).ready(function () {
        $("ul.tabs li").click(function () {
            var e = $(this).attr("data-tab");
            $("ul.tabs li").removeClass("current"), $(".tab-content").removeClass("current"), $(this).addClass("current"), $("#" + e).addClass("current")
        })
    }), $(".tab").tooltipster({
        maxWidth: 200,
        theme: ["tooltipster-noir", "tooltipster-noir-customized"],
        distance: 20
    }), $(" header .top .bcontainer .center .acces").click(function () {
        $(".dropdown-menu_").toggleClass("block")
    }), $(document).ready(function () {
        $("ul.tabs li").click(function () {
            var e = $(this).attr("data-tab");
            $("ul.tabs li").removeClass("current"), $(".tab-content").removeClass("current"), $(this).addClass("current"), $("#" + e).addClass("current")
        })
    }), $(".video-gallery").lightGallery({share: !1}), $(".aniimated-thumbnials").lightGallery({
        share: !1,
        selector: "a"
    }), $("header .bottom .menu_bar").on("click", function () {
        $("header .bottom ul").toggleClass("flex")
    }), $(document).on("click", function (e) {
        var t = $(".acces");
        t === e.target || t.has(e.target).length || t.find(".dropdown-menu_").removeClass("block")
    })
});