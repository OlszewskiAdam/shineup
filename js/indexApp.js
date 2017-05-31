//$(function(){

    let MobileMenu = {
        DOMElements: {
            body: $("body"),
            menuButton: $(".menu_button"),
            menuList: $(".menu_list"),
            mobileLogo: $(".mobile_logo"),
        },
        State: {
            menuActive: false,
        },
        setSizeMenu: () =>{
            let list = MobileMenu.DOMElements.menuList;
            let mobileLogo = MobileMenu.DOMElements.mobileLogo;
            let windowWidth = $(window).width();
            let windowHeight = $(window).height();
            if (windowWidth >= windowHeight) {
                list.addClass("mobile_menu_horizontal");
                mobileLogo.addClass("mobile_logo_horizontal");
                mobileLogo.removeClass("mobile_logo_vertical");
                list.removeClass("mobile_menu_vertical");
            }
            else{
                list.addClass("mobile_menu_vertical");
                mobileLogo.addClass("mobile_logo_vertical");
                mobileLogo.removeClass("mobile_logo_horizontal");
                list.removeClass("mobile_menu_horizontal");
            }
        },
        setButton: () =>{
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
        setResize: () =>{
            let windowWidth = $(window).width();
            let list = MobileMenu.DOMElements.menuList;
            let button = MobileMenu.DOMElements.menuButton;
            let body = MobileMenu.DOMElements.body;
            let mobileLogo = MobileMenu.DOMElements.mobileLogo;
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
                mobileLogo.removeClass("mobile_logo_vertical mobile_logo_horizontal");
            }
        },
    };

    let ServiceMenu = {
        DOMElements: {
            serviceList: 0,
            buttons: 0,
            serviceDescription: 0,
        },
        setElements: () =>{
            let checkServiceList = $(".service_list").length;
            if (checkServiceList > 0){
                let serviceList = $(".service_list");
                let buttons = serviceList.find("a");
                let serviceDescription = buttons.next();
                ServiceMenu.DOMElements.serviceDescription = serviceDescription;
                ServiceMenu.DOMElements.serviceList = serviceList;
                ServiceMenu.DOMElements.buttons = buttons;
                return true;
            }
            else{
                return false;
            }
        },
        setButtons: () =>{
            if(ServiceMenu.setElements()){
                let buttons = ServiceMenu.DOMElements.buttons;
                buttons.on('click', (event) => {
                    event.preventDefault();
                    let windowWidth = $(window).width();
                    if(windowWidth < 1200){
                        let eventTarget = $(event.target);
                        let eventParent = eventTarget.parent();
                        let checkParent = eventParent.hasClass("service_name");
                        if(checkParent){
                            let serviceList = eventTarget.next();
                            eventParent.toggleClass("active_service_name");
                            serviceList.toggleClass("service_description_active");
                            serviceList.toggle(300);
                        }
                        else{
                            let serviceList = eventParent.next();
                            eventParent.parent().toggleClass("active_service_name");
                            serviceList.toggleClass("service_description_active");
                            serviceList.toggle(300);
                        }
                    }
                })
            }
        },
        setResize: () =>{
            let windowWidth = $(window).width();
            if (ServiceMenu.setElements()){
                if(windowWidth > 1199){
                    ServiceMenu.DOMElements.serviceDescription.css("display", "block");
                }
                else{
                    let serviceDescription = ServiceMenu.DOMElements.serviceDescription;
                    serviceDescription.each(function(){
                        if($(this).hasClass("service_description_active")){
                            $(this).css("display", "block");
                        }
                        else{
                            $(this).css("display", "none");
                        }
                    })
                }
            }
        },
    };


    let CategoryMenu = {
        DOMElements:{
            categoryList: 0,
            buttons: 0,
        },
        State:{
            menuActive: false,
        },
        setElements: () => {
            let checkCategoryList = $(".category_list").length;
            if (checkCategoryList > 0){
                let categoryList = $(".category_list");
                let buttons = categoryList.find("li")
                CategoryMenu.DOMElements.categoryList = categoryList;
                CategoryMenu.DOMElements.buttons = buttons;
                return true;

            }
            else{
                return false;
            }
        },
        setButtons: () => {
            if(CategoryMenu.setElements()){
                let buttons = CategoryMenu.DOMElements.buttons;
                buttons.on('click', (event) => {
                    event.preventDefault();
                    let windowWidth = $(window).width();
                    if(windowWidth < 680){
                        let eventParent = $(event.target).parent();
                        if(eventParent.hasClass("category_active") || eventParent.parent().hasClass("category_active")){
                            if(!(CategoryMenu.State.menuActive)){
                                buttons.each(function(){
                                    if( !( $(this).hasClass("category") || $(this).hasClass("category_active") )){
                                        $(this).addClass("category_menu_active");
                                        $(this).slideDown(600);
                                    }
                                    else if(buttons.hasClass("category_active")){
                                        $(this).addClass("category_name_active");
                                    }
                                });
                                CategoryMenu.State.menuActive = true;
                            }
                            else if(CategoryMenu.State.menuActive){
                                buttons.each(function(){
                                    if( !( $(this).hasClass("category") || $(this).hasClass("category_active") )){
                                        $(this).removeClass("category_menu_active");
                                        $(this).slideUp(600);
                                    }
                                    else if(buttons.hasClass("category_active")){
                                        $(this).removeClass("category_name_active");
                                    }
                                });
                                CategoryMenu.State.menuActive = false;
                            }
                        }
                        else if(eventParent.hasClass("category_menu_active")){
                            let oldCategory = $(".category_active");
                            oldCategory.removeClass("category_active category_name_active").addClass("category_menu_active").css("display", "block");
                            eventParent.removeClass("category_menu_active").addClass("category_active category_name_active");
                        }
                    }
                    else{
                        let eventParent = $(event.target).parent();
                        if(!(eventParent.hasClass("category_active") || eventParent.parent().hasClass("category_active"))){
                            let oldCategory = $(".category_active");
                            if($(event.target).attr("href") == "#"){
                                eventParent.addClass("category_active");
                            }
                            else{
                                $(event.target).addClass("category_active");
                            }
                            oldCategory.removeClass("category_active");
                        }
                    }
                });
            }
        },
        setResize: () => {
            let windowWidth = $(window).width();
            let buttons = CategoryMenu.DOMElements.buttons;
            if(windowWidth > 679){
                buttons.each(function(){
                    if($(this).hasClass("category")){
                        $(this).css("display", "none");
                    }
                    else if($(this).hasClass("category_active")){
                        $(this).removeClass();
                        $(this).addClass("category_active");
                    }
                    else{
                        $(this).css("display", "block");
                    }
                });
            }
            else{
                buttons.each(function(){
                    if($(this).hasClass("category")){
                        $(this).css("display", "block");

                    }
                    else if($(this).hasClass("category_active")){
                        $(this).removeClass();
                        $(this).addClass("category_active");
                        if(CategoryMenu.State.menuActive == true){
                            $(this).addClass("category_name_active");
                        }
                    }
                    else{
                        if(CategoryMenu.State.menuActive == true){
                            $(this).addClass("category_menu_active");
                        }
                        else{
                            $(this).removeClass("category_menu_active");
                            $(this).css("display", "none");
                        }
                    }
                });
            }
        },
    };

    OpinionMenu = {
        DOMElements: {
            opinionContainer: 0,
            opinionBoxs: 0,
            activeBox: 0,
            opinionHeaders: 0,
            nav: 0,
            button: 0,
            list: 0,
            listButtons: 0,
        },
        setElements: () => {
            let opinionContainer = $(".opinion_container");
            if(opinionContainer.length > 0){
                let opinionBoxs = opinionContainer.find(".opinion_box");
                let activeBox = opinionContainer.find(".opinion_box_active");
                let opinionHeaders = opinionBoxs.find("h3");
                let nav = $(".reviews_nav");
                let button = nav.find(".reviews_button");
                let list = nav.find(".opinion_list");
                OpinionMenu.DOMElements.opinionContainer = opinionContainer;
                OpinionMenu.DOMElements.activeBox = activeBox;
                OpinionMenu.DOMElements.opinionBoxs = opinionBoxs;
                OpinionMenu.DOMElements.opinionHeaders = opinionHeaders;
                OpinionMenu.DOMElements.nav = nav;
                OpinionMenu.DOMElements.button = button;
                OpinionMenu.DOMElements.list = list;
                return true;
            }
            else{
                return false;
            }
        },
        setButtons: () => {
            if(OpinionMenu.setElements()){
                let opinionBoxs = OpinionMenu.DOMElements.opinionBoxs;
                let opinionHeaders = OpinionMenu.DOMElements.opinionHeaders;
                let list = OpinionMenu.DOMElements.list;
                let button = OpinionMenu.DOMElements.button;
                for (var i = 0; i < opinionBoxs.length; i++) {
                    let header = $(opinionHeaders[i]).text();
                    let newLi = $("<li>");
                    let nav = OpinionMenu.DOMElements.nav;
                    if($(opinionBoxs[i]).hasClass("opinion_box_active")){
                        newLi.addClass("opinion_active");
                    }
                    let newButton = $("<a href='#'>")
                    newButton.text(header);
                    newLi.append(newButton);
                    let box = $(opinionBoxs[i]);
                    newLi.on('click', (event) => {
                        event.preventDefault();
                        let activeBox = OpinionMenu.DOMElements.activeBox;
                        if(!(newLi.hasClass("opinion_active"))){
                            let opinionActive =$(".opinion_active");
                            opinionActive.removeClass("opinion_active");
                            newLi.addClass("opinion_active");
                            activeBox.animate({
                                opacity: 0,
                            }, 300, function(){
                                activeBox.removeClass("opinion_box_active");
                                box.css("opacity", 0);
                                box.addClass("opinion_box_active");
                                box.animate({
                                    opacity: 1,
                                }, 300);
                            });
                            OpinionMenu.DOMElements.activeBox = box;
                        }
                    })
                    list.append(newLi);
                }
                if (opinionBoxs.length > 4) {
                    let nav = OpinionMenu.DOMElements.nav;
                    let navMargin = parseInt(nav.css("margin-top"));
                    let li = $(".opinion_active");
                    let liHeight = parseInt(li.css("height"));
                    let liMargin = parseInt(li.css("margin-bottom"));
                    let newMargin = navMargin - ((liHeight + liMargin) * (opinionBoxs.length - 4));
                    if(newMargin < 0){
                        newMargin = 0;
                    }
                    nav.css("margin-top", newMargin);
                }
                button.on('click', (event) => {
                    event.preventDefault();
                    let list = $(".opinion_list");
                    let boxs = $(".opinion_box");
                    let buttons = list.find("li");
                    let opinionActive = $(".opinion_active");
                    let activeBox = $(".opinion_box_active");
                    let newLi = $(opinionActive.next());
                    let box = $(activeBox.next());
                    if (newLi.length > 0 && box.length > 0){
                        opinionActive.removeClass("opinion_active");
                        newLi.addClass("opinion_active");
                        activeBox.animate({
                            opacity: 0,
                        }, 300, function(){
                            activeBox.removeClass("opinion_box_active");
                            box.css("opacity", 0);
                            box.addClass("opinion_box_active");
                            box.animate({
                                opacity: 1,
                            }, 300);
                        });
                    }
                    else{
                        newLi = $(buttons[0]);
                        box = $(boxs[0]);
                        opinionActive.removeClass("opinion_active");
                        newLi.addClass("opinion_active");
                        activeBox.animate({
                            opacity: 0,
                        }, 300, function(){
                            activeBox.removeClass("opinion_box_active");
                            box.css("opacity", 0);
                            box.addClass("opinion_box_active");
                            box.animate({
                                opacity: 1,
                            }, 300);
                        });
                    }
                    OpinionMenu.DOMElements.activeBox = box;
                });
            }
        },
    };
    let Popup = {
        DOMElements:{
            buttons: $(".popup_button"),
            popupBox: $(".popup_box"),
            exitBut: $(".button_exit"),
            body: $("body"),
        },
        setButtons: () => {
            let buttons = Popup.DOMElements.buttons;
            let popup = Popup.DOMElements.popupBox;
            let exitBut = Popup.DOMElements.exitBut;
            let body = Popup.DOMElements.body;
            buttons.on('click', (event) => {
                event.preventDefault();
                let windowWidth = $(window).width();
                let windowHeight = $(window).height();
                if(windowWidth > windowHeight && windowWidth < 768){
                    popup.addClass("popup_box_horizontal");
                }
                popup.css("left", -(windowWidth * 10)).css("display", "block");
                //console.log(windowWidth * 2);
                popup.animate({
                    left: 0,
                }, 600, () =>{
                    if(windowWidth < 768){
                    //    body.addClass("stop_scroll");
                    }
                    else{
                    //    body.removeClass("stop_scroll");
                    }
                });
            });
            exitBut.on('click', (event) => {
                event.preventDefault();
                let windowWidth = $(window).width();
                let windowHeight = $(window).height();
                popup.animate({
                    left: -(windowWidth * 10),
                }, 1000, () =>{
                    popup.css("display", "none");
                    popup.removeClass("popup_box_horizontal");
                    //body.removeClass("stop_scroll");
                });
            })
        },
        setResize: () => {
            let windowWidth = $(window).width();
            let windowHeight = $(window).height();
            let popup = Popup.DOMElements.popupBox;
            if (windowWidth < 768){
                if(windowWidth > windowHeight){
                    popup.addClass("popup_box_horizontal");
                }
                else{
                    popup.removeClass("popup_box_horizontal");
                }
            }
            else{
                popup.removeClass("popup_box_horizontal");
            }
        },
    };

    let Gallery = {
        DOMElements: {
            body: $("body"),
            realizationContainer: 0,
            realizationPhoto: 0,
            realizationDescription: 0,
            realizationsBox: 0,
            header: 0,
            serviceList: 0,
            description: 0,
            activeBox: 0,
            loadButtonBox: 0,
            loadButton:0,
        },
        State: {
            sliderCounter: 0,
            fullscreen: false,
        },
        setElements: () =>{
            let realizationContainer = $(".realization_container");
            if(realizationContainer.length > 0){
                Gallery.DOMElements.realizationContainer = realizationContainer;
                let realizationPhoto = realizationContainer.find(".realization_photo");
                let realizationDescription = realizationContainer.find(".realization_description");
                let header = realizationDescription.find("h3");
                let serviceList = realizationDescription.find("ul");
                let description = realizationDescription.find("p");
                let realizationsBox = $(".realizations_box");
                let activeBox = $(".active_realization");
                let loadButtonBox = $(".button_box");
                let loadButton = loadButtonBox.find(".button_white");
                Gallery.DOMElements.realizationDescription = realizationDescription;
                Gallery.DOMElements.realizationPhoto = realizationPhoto;
                Gallery.DOMElements.header = header;
                Gallery.DOMElements.serviceList = serviceList;
                Gallery.DOMElements.description = description;
                Gallery.DOMElements.realizationsBox = realizationsBox;
                Gallery.DOMElements.activeBox = activeBox;
                Gallery.DOMElements.loadButtonBox = loadButtonBox;
                Gallery.DOMElements.loadButton = loadButton;
                return true;
            }
            else{
                return false;
            }
        },
        setActiveBox: (box) =>{
            let activeBox = Gallery.DOMElements.activeBox;
            activeBox.removeClass("active_realization");
            box.addClass("active_realization");
            Gallery.DOMElements.activeBox = box;

            let newPhoto = box.find(".realizations_photo").clone();
            let newHeader = box.find("h3").text();
            let newList = box.find("ul").clone();
            let newDescription = box.find("p").text();

            let realizationPhoto = Gallery.DOMElements.realizationPhoto;
            let realizationContainer = Gallery.DOMElements.realizationContainer;
            let realizationHeader = realizationContainer.find("h3");
            let realizationList = realizationContainer.find("ul");
            let realizationDescription = realizationContainer.find("p");

            //Guzik od slidera next
            let navButtonNext = $("<a href='#' class='slider_button_next'>");
            let newDivNext = $("<div>");
            let newButImgNext = $("<img src='images/blackArrow.png' alt='>'>")
            newDivNext.append(newButImgNext);
            navButtonNext.append(newDivNext);
            newPhoto.append(navButtonNext);

            //Guzik od slider prev
            let navButtonPrev = $("<a href='#' class='slider_button_prev'>");
            let newDivPrev = $("<div>");
            let newButImgPrev = $("<img src='images/blackArrow.png' alt='<'>")
            newDivPrev.append(newButImgPrev);
            navButtonPrev.append(newDivPrev);
            newPhoto.append(navButtonPrev);

            //Guzik od wyjscia z fullscreen

            let navButtonExit = $("<a href='#' class='slider_button_exit'>");
            let newButTextExit = "Zamknij";
            navButtonExit.text(newButTextExit);
            newPhoto.append(navButtonExit);

            realizationPhoto.remove();
            Gallery.DOMElements.realizationPhoto = newPhoto;

            newPhoto.removeClass("realizations_photo");
            newPhoto.addClass("realization_photo");

            realizationContainer.prepend(newPhoto);
            realizationHeader.text(newHeader);
            realizationList.remove();
            realizationHeader.after(newList);

            realizationDescription.text(newDescription);
        },
        setRealizationBox: () =>{
            if(Gallery.setElements()){
                let realizationsBox = Gallery.DOMElements.realizationsBox;
                realizationsBox.on('click', (event) => {
                    event.preventDefault();
                    let eventTarget = $(event.target);
                    let eventParent = eventTarget.parent();
                    let box;
                    if(eventTarget.hasClass("realizations_box")){
                        box = eventTarget;
                    }
                    else if($(eventTarget).attr("alt")){
                        box = eventTarget.parent().parent();
                    }
                    else if (eventParent.hasClass("realizations_box")){
                        box = eventParent;
                    }
                    Gallery.setActiveBox(box);
                    let realizationCategory = $(".realizations_category");
                    let offsetRealization = realizationCategory.offset()
                    let offsetTop = offsetRealization.top;
                    $("html, body").animate({
                        scrollTop: offsetTop,
                    }, 500)
                    Gallery.setGallerySlider();
                })

            }
        },
        setGallerySlider: () =>{
            if(Gallery.setElements()){
                Gallery.State.sliderCounter = 0;
                let sliderBox = Gallery.DOMElements.realizationPhoto;
                let slides = $(sliderBox).find(".gallery_photo");
                let navButtonNext = $(sliderBox).find(".slider_button_next");
                let navButtonPrev = $(sliderBox).find(".slider_button_prev");
                let navButtonExit = $(sliderBox).find(".slider_button_exit");
                navButtonNext.on('click', (event) => {
                    event.preventDefault();
                    event.stopPropagation();
                    index = Gallery.State.sliderCounter;
                    activeSlide = slides[index];
                    newIndex = index + 1;
                    Gallery.State.sliderCounter++;
                    if(newIndex >= slides.length){
                        newIndex = 0;
                        Gallery.State.sliderCounter = 0;
                    }
                    let nextSlide = slides[newIndex];
                    $(activeSlide).animate({
                        opacity: 0,
                    }, 500, function(){
                        $(this).removeClass("gallery_photo_main");
                    });
                    $(nextSlide).css("display", "block");
                    $(nextSlide).animate({
                        opacity: 1,
                    }, 500, function(){
                        $(this).addClass("gallery_photo_main");
                    })
                });
                navButtonPrev.on('click', (event) => {
                    event.preventDefault();
                    event.stopPropagation();
                    index = Gallery.State.sliderCounter;
                    activeSlide = slides[index];
                    newIndex = index - 1;
                    Gallery.State.sliderCounter--;
                    if(newIndex <= -1){
                        newIndex = slides.length -1;
                        Gallery.State.sliderCounter = slides.length -1;
                    }
                    let prevSlide = slides[newIndex];
                    $(activeSlide).animate({
                        opacity: 0,
                    }, 500, function(){
                        $(this).removeClass("gallery_photo_main");
                    });
                    $(prevSlide).css("display", "block");
                    $(prevSlide).animate({
                        opacity: 1,
                    }, 500, function(){
                        $(this).addClass("gallery_photo_main");
                    })
                });
                sliderBox.on('click', (event) => {
                    event.preventDefault();
                    event.stopPropagation();
                    sliderBox.addClass("realization_photo_fullscreen");
                    Gallery.State.fullscreen = true;
                });
                navButtonExit.on('click', (event) => {
                    event.preventDefault();
                    event.stopPropagation();
                    sliderBox.removeClass("realization_photo_fullscreen");
                    Gallery.State.fullscreen = false;
                });
            };
        },
        setLoadButton: () =>{
            if(Gallery.setElements()){
                let loadButton = Gallery.DOMElements.loadButton;
                loadButton.on('click', (event) => {
                    event.preventDefault();
                    let realizationsBox = Gallery.DOMElements.realizationsBox;
                    let unvisBoxs = [];
                    let windowWidth = $(window).width();
                    let loadCounter = 0;
                    realizationsBox.each(function(){
                        if($(this).css("display") == "none"){
                            unvisBoxs.push(this);
                        }
                    });
                    if(unvisBoxs.length > 0){
                        if(windowWidth < 900){
                            loadCounter = 1;
                        }
                        else if(windowWidth >= 900 && windowWidth < 1200){
                            loadCounter = 2;
                        }
                        else if(windowWidth >= 1200){
                            loadCounter = 3;
                        }
                        if(loadCounter > unvisBoxs.length){
                            loadCounter = unvisBoxs.length;
                        }
                        for (var i = 0; i < loadCounter; i++) {
                            let box = $(unvisBoxs[i]);
                            box.slideDown(600);
                        }
                        if(loadCounter == unvisBoxs.length){
                            loadButton.addClass("button_off");
                        }
                    }
                    else if(unvisBoxs.length == 0){
                        loadButton.addClass("button_off");
                    }
                })
            }
        },
    }
    MobileMenu.setButton();
    ServiceMenu.setButtons();
    CategoryMenu.setButtons();
    OpinionMenu.setButtons();
    Popup.setButtons();
    Gallery.setRealizationBox();
    Gallery.setActiveBox(Gallery.DOMElements.activeBox);
    Gallery.setGallerySlider();
    Gallery.setLoadButton();
    $(window).on('resize', (event) => {
        MobileMenu.setResize();
        ServiceMenu.setResize();
        CategoryMenu.setResize();
        Popup.setResize();
    })

//});
