//$(function(){
    let MobileMenu = {
        DOMElements: {
            body: $("body"),
            menuButton: $(".menu_button"),
            menuList: $(".menu_list"),
            headerLogo: $(".header_logo"),
        },
        State: {
            menuActive: false,
        },
        setSizeMenu: function(){
            let list = MobileMenu.DOMElements.menuList;
            let windowWidth = $(window).width();
            let windowHeight = $(window).height();
            if (windowWidth >= windowHeight) {
                list.addClass("mobile_menu_horizontal");
                list.removeClass("mobile_menu_vertical");
            }
            else{
                list.addClass("mobile_menu_vertical");
                list.removeClass("mobile_menu_horizontal");
            }
        },
        setButton: function(){
            MobileMenu.DOMElements.menuButton.on('click', (event) => {
                event.preventDefault();
                let list = MobileMenu.DOMElements.menuList;
                let button = MobileMenu.DOMElements.menuButton;
                let body = MobileMenu.DOMElements.body;
                let menuActive = MobileMenu.State.menuActive;
                MobileMenu.setSizeMenu();
                body.toggleClass("stop_scroll");
                button.toggleClass("menu_active_button");
                if(menuActive == false){
                    MobileMenu.State.menuActive = true;
                }
                else{
                    MobileMenu.State.menuActive = false;
                }
                list.toggle(300);
            });
        },
        setResize: function(){
            $(window).on('resize', (event) => {
                let windowWidth = $(window).width();
                let list = MobileMenu.DOMElements.menuList;
                let button = MobileMenu.DOMElements.menuButton;
                let body = MobileMenu.DOMElements.body;
                if(windowWidth < 1024){
                    MobileMenu.setSizeMenu();
                    if(MobileMenu.State.menuActive == false){
                        list.css("display", "none");
                    }
                    else{
                        list.css("display", "block");
                    }
                }
                else{
                    let list = MobileMenu.DOMElements.menuList;
                    list.removeClass("mobile_menu_vertical", "mobile_menu_horizontal").css("display", "block");
                }
            })
        },
        test: function(){
            // console.log(MobileMenu.DOMElements.menuButton);
            // console.log(MobileMenu.DOMElements.menuList);
        },
    }
    MobileMenu.test();
    MobileMenu.setButton();
    MobileMenu.setResize();
//});
