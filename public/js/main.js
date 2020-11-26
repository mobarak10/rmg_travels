$(document).ready(function(){
    //  Stop the default interaction
    $('.mobile-search-bar .dropdown-menu').click(function(e) {
        e.stopPropagation();
    });

    // Sidebar collapsing
    $(".sidebar-toggler").click(function(){
        $(".sidebar").toggleClass("sidebar-collapse");
        $(".sidebar .collapse-body").toggleClass("shadow-sm");
        $(".topbar").toggleClass("topbar-collapse");
        $(".topbar .topbar-menu").toggleClass("calc-expand");
        $(".main-wrapper .content-wrapper").toggleClass("calc-expand");
    })

    // Check the window size if it will be smaller than 992 then add the class "sidebar collapse"
    let winWidth = $(window).width();
    if(winWidth < 992){
        $(".sidebar").addClass("sidebar-collapse");
        $(".sidebar .collapse-body").addClass("shadow-sm");
        $(".topbar").addClass("topbar-collapse");
        $(".topbar .topbar-menu").addClass("calc-expand");
        $(".main-wrapper .content-wrapper").addClass("calc-expand");
    }else{
        $(".sidebar").removeClass("sidebar-collapse");
        $(".sidebar .collapse-body").removeClass("shadow-sm");
        $(".topbar").removeClass("topbar-collapse");
        $(".topbar .topbar-menu").removeClass("calc-expand");
        $(".main-wrapper .content-wrapper").removeClass("calc-expand");
    }

    // Change the style as active when click in nav-item
    var sidebar_nav_items = $(".sidebar .nav-item");
    Array.from(sidebar_nav_items).forEach(function(nav_item){
        nav_item.addEventListener("click",function(){
            nav_item.classList.toggle('active')
            Array.from(sidebar_nav_items).forEach(function(item){
                if(item != nav_item){
                    item.classList.remove('active')
                }
            })
        })
    })
})

// Check the window size in resize if it will be smaller than 992 then add the class "sidebar collapse"
$(window).resize(function(e){
    let winWidth = $(window).width();
    if(winWidth < 992){
        $(".sidebar").addClass("sidebar-collapse"); 
        $(".sidebar .collapse-body").addClass("shadow-sm");
        $(".topbar").addClass("topbar-collapse");
        $(".topbar .topbar-menu").addClass("calc-expand");
        $(".main-wrapper .content-wrapper").addClass("calc-expand");
    }else{
        $(".sidebar").removeClass("sidebar-collapse");
        $(".sidebar .collapse-body").removeClass("shadow-sm");
        $(".topbar").removeClass("topbar-collapse");
        $(".topbar .topbar-menu").removeClass("calc-expand");
        $(".main-wrapper .content-wrapper").removeClass("calc-expand");
    }
})

// Nav item active class and collapse body show class remove
$(window).click(function(e){
    if($(".sidebar")[0].classList.contains('sidebar-collapse')){
        var sidebar_nav_items = $(".sidebar .nav-item");
        Array.from(sidebar_nav_items).forEach(function(nav_item){
            if(e.target.closest(".nav-item") != nav_item){
                $(".sidebar .nav-item .collapse-body").removeClass("show")
                $(nav_item).removeClass("active")
            }
        })
    }
})


