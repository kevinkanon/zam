/*
 * Custom code goes here.
 * A template should always ship with an empty custom.js
 */
jQuery(document).ready(function($){
    /* 
    ## ########################################################## ##
    ## @function who resize automaticaly background video         ##
    ##                      on homepage in fullscreen             ##
    ## ########################################################## ##
    */
    function maximizeHomepageVideo(){
        var videoContainer = $('.v-header');
        var body_width = $(window).width(); 
        var body_height = $(window).height(); 
        videoContainer.width(body_width).height(body_height); 
    }

    /* 
    ## ########################################################## ##
    ## @function who resize automaticaly background img           ##
    ##  in fullscreen on /zamounda/history page                   ##
    ## ########################################################## ##
    */
    function maximizeBgImgOnZamoundaHistoryPage(){
        var imgContainer= $('body#zamounda section#wrapper');
        var body_width = $(window).width(); 
        var body_height = $(window).height(); 
        imgContainer.width(body_width).height(body_height); 
    }

    // first load on the homepage && zamounda/history page
    maximizeHomepageVideo();
    maximizeBgImgOnZamoundaHistoryPage();
    // when someone resize the browser
    $(window).resize(function(){ 
        maximizeHomepageVideo(); 
        maximizeBgImgOnZamoundaHistoryPage();
    });
    

    /* 
    ## ########################################################## ##
    ## @menu &  On scroll page                                    ##
    ## When user scroll up to down change the aspect of the menu  ##
    ## only on all page different from homepage                   ##
    ## ########################################################## ##
    */
    $(window).scroll(function(){
        var scroll = $(window).scrollTop();
        var htmlObj = $('#header');
        var offset = 50;
        var myClass = 'scrolling';
        var isMobile = ($('#_mobile_logo').children().length > 0) ? true : false;

        if (scroll >= offset) { htmlObj.addClass(myClass);  } 
        else { htmlObj.removeClass(myClass); }
    });

    /* 
    ## ########################################################## ##
    ## @video homepage play &  pause                              ##
    ## Pause and play the video, and change the button text       ##
    ## video replace original slider module on mobile devices     ##
    ## ########################################################## ##
    */
    (function(){
        var video = $('#myVideo');
        var videoElement = video[0];
        var btn = $('#myBtn');

        function myFunction() {
            if (videoElement.paused) { 
                btn.html('Pause'); 
                videoElement.play(); 
            } else { 
                btn.html('Play'); videoElement.pause(); 
            }
        }

        $(btn).on('click', myFunction);
    }) ();

    /* 
    ## ########################################################## ##
    ## @side navbar on mobile only                                ##
    ## override native event toggleclass on for show              ##
    ## Close & open side navbar on click right to left on mobile  ##
    ## ########################################################## ##
    */
    (function() {
        var menuIcon = $('#mymenu-icon');
        var closeBtn = $('#mobile_top_menu_wrapper .closebtn');
        var menuContent = $('#mobile_top_menu_wrapper');

        /* Open the sidenav */
        function openNav() { $(menuContent).css({'width' : '100%', 'display' : 'block'}); }
        /* Close/hide the sidenav */
        function closeNav() { $(menuContent).css({'width' : '100%', 'display' : 'none'})}

        $(menuIcon).on('click', openNav);
        $(closeBtn).on('click', closeNav);
    })(); 

    /* 
    ## ########################################################## ##
    ## @side navbar                                               ##
    ## override event toggleclass on for show                     ##
    ## Close & open side navbar on click                          ##
    ## ########################################################## ##
    */
    /*$(window).on('load', function(){
        var myPopIn = $('#myPopIn');
        var closepopIn = $('#myPopIn .closePopIn');
        var popInContent = $('#myPopIn .popIn-content');
        var isHome = ($('body#index').length > 0) ? true : false;

        isHome = false;
        $('body').prepend(myPopIn);

        // localStorage to see the pop up one time only if he user load for the first time
        //myPopIn.delay(300).fadeIn(800);
        var userInfo = localStorage.getItem('homePopIn');
        closepopIn.on('click', function(){ myPopIn.delay(100).fadeOut(800); }); 
        if (!userInfo && !isHome) { myPopIn.delay(300).fadeIn(800); localStorage.setItem('homePopIn',true); } 
    });*/
 
 
    /* 
    ## ########################################################## ##
    ## @AOS jquery plugin                                         ##
    ##                                                            ##
    ## Animate On Scroll Library on section Membre on homepage    ##
    ## ########################################################## ##
    */    
    AOS.init();

    /* 
    ## ########################################################## ##
    ## @typer jquery plugin                                       ##
    ##                                                            ##
    ## Dynamic text with typing Effect on Zamounda history page   ##
    ## ########################################################## ##
    */    
    (function(){
        var zamPage = $('body#zamounda');

        if (zamPage.length > 0 ) { 
            $("#textTyping").typer({
                strings: [
                "Pas sapeur mais",
                "Dandy ou Classic Men",
                "Zamounda c'est:",
                "La modernité Occidentale qui rencontre la modernité Africaine",
                "L'élégance accessible à tous"
                ],
                typeSpeed: 200,
                backspaceSpeed: 30,
                backspaceDelay: 1800,
                repeatDelay: 1000,
                repeat: true,
                autoStart: true,
                startDelay: 100,
                useCursor: true
            });
        }

    }) ();

    /* 
    ## ########################################################## ##
    ## @typer jquery plugin                                       ##
    ##                                                            ##
    ## Dynamic text with typing Effect on Home page               ##
    ## ########################################################## ##
    */    
   (function(){
        var homePage = $('body#index');
    
        if (homePage.length > 0) { 
            $(".animatedVideoText").typer({
                strings: [
                "Welcome",
                "Bienvenue",
                "Dans notre univers",
                "In our univers"
                ],
                typeSpeed: 200,
                backspaceSpeed: 30,
                backspaceDelay: 1800,
                repeatDelay: 1000,
                repeat: true,
                autoStart: true,
                startDelay: 100,
                useCursor: true
            });
        }

    }) ();

    /* 
    ## ########################################################## ##
    ## scroll down button to specific section                     ##
    ##                                                            ##
    ## on homepage body#index                                     ##
    ## ########################################################## ##
    */
    (function() {
        var homePage = $('body#index');
        
         if (homePage.length > 0) {
             $('body#index .scroll-down').click (function() {
                $('html, body').animate({scrollTop: $('body#index #content').offset().top }, 'slow');
              return false;
            });
         }
    }) ();
    
    /* 
    ## ########################################################## ##
    ## scroll down button to specific section                     ##
    ##                                                            ##
    ##  on zamounda history page body#zamounda                    ##
    ## ########################################################## ##
    */
    (function() {
        var zamoundaPage = $('body#zamounda');
        
         if (zamoundaPage.length > 0) {
             $('body#zamounda .scroll-down').click (function() {
                $('html, body').animate({scrollTop: $('body#zamounda .description').offset().top }, 'slow');
              return false;
            });
         }
    }) ();
    
    
    
    
    
    
    
    

    
      

   

    
    
    



  
});

