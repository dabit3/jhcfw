window.onload = function () {

    var menu = $("#open-menu-button");

    var showMenu = $(".menu-show");

    var menuBg = $("div.menu-open");

    var ourClinicShow = $(".our-clinic-show");

    var clinicSubmenu = $(".our-clinic-submenu");

    // Main Menu Open & Close

    menu.click(function (e) {
        e.preventDefault();
        if (showMenu.is(":hidden")) {
            $(menuBg).css("background", "#890085");
            TweenMax.fromTo(showMenu, .25,
                {
                    marginTop: -320,
                    alpha: 0
                }, {
                    marginTop: 0,
                    alpha: 1,
                    ease: Ease.easeInOut,
                    display: "block"});
        } else {
            $(menuBg).css("background", "#51004B");
            TweenMax.fromTo(showMenu, .25,
                {
                    marginTop: 0,
                    alpha: 1
                }, {
                    marginTop: -390,
                    alpha: 0,
                    ease: Ease.easeInOut,
                    display: "none"});
        }
    })

    // Our Clinic Submenu Open & Close

    ourClinicShow.click(function () {
        if (clinicSubmenu.is(":hidden")) {
            var thisTween = function () {
                TweenMax.fromTo(clinicSubmenu, .25,
                    {
                        height: 0
                    }, {
                        height: 168,
                        ease: Ease.easeInOut,
                        display: "block"});
            };
            thisTween();

        } else {
            TweenMax.fromTo(clinicSubmenu, .25,
                {
                    height: 168
                }, {
                    height: 0,
                    ease: Ease.easeInOut,
                    display: "none"});
        }
    })

}



