$(document).ready(function() {   
    // $(".signup-form").validate({
    // errorPlacement: function(error, element) {
    //     error.appendTo( element.parent("td").next("td") );
    //     },
    //     debug:true
    // })   
    // Tooltips Initialization
    $('.auth-form').validate({
        errorPlacement: function(error,element) {
            return true;
          },
        rules:{
            login:{
              required: true,
              minlength: 4,
              maxlength: 56,
            },
            pass:{
              required: true,
              minlength: 4,
              maxlength: 32,
            },
            
         },
         messages:{
           login:{
             required: "Это поле обязательно для заполнения",
                 minlength: "Логин должен быть минимум 4 символов",
                 maxlength: "Максимальное число символов - 16",
         },
             pass:{
                 required: "Это поле обязательно для заполнения",
                 minlength: "Пароль должен быть минимум 4 символов",
                 maxlength: "Пароль должен быть не более 36 символов",
             },
             message:{
                 maxlength: "Сообщение должно быть не более 255 символов",
         },
         }
    });
    $(".signup-form").validate({
        errorPlacement: function(error,element) {
            return true;
          },
        
        rules:{
            login:{
                // required: true,
                minlength: 4,
                maxlength: 56,
                },
            pass:{
                // required: true,
                minlength: 6,
                maxlength: 32,
                },
            pass2:{
                // required: true,
                minlength: 6,
                maxlength: 32,
                },
            email:{
                // required: true,
                email: true,
                minlength: 6,
                maxlength: 32,
           },
        },
        // messages:{
        //     login:{
        //         minlength: "Логин должен быть минимум 4 символов",
        //         maxlength: "Максимальное число символов - 16",
        //     },
        //     pass:{
        //         minlength: "Пароль должен быть минимум 4 символов",
        //         maxlength: "Пароль должен быть не более 36 символов",
        //     },
        //     pass2:{
        //         minlength: "Пароль должен быть минимум 4 символов",
        //         maxlength: "Пароль должен быть не более 36 символов",
        //     },
        //     email:{
        //         minlength: ">Почта должна быть минимум 6 символов",
        //         email: "Неправильный формат (ex: Hello@gmail.com)",
        //         maxlength: ">Почта должна быть не более 36 символов",
        //     },
        // }
     });
    $(".main-form").validate({
            rules:{
               name:{
                 required: true,
                 minlength: 4,
                 maxlength: 56,
               },
               email:{
                 required: true,
                 email: true,
                 minlength: 6,
                 maxlength: 32,
               },
            },
            messages:{
              name:{
                required: "Это поле обязательно для заполнения",
                    minlength: "Логин должен быть минимум 4 символа",
                    maxlength: "Максимальное число символов - 16",
            },
                email:{
                    required: "Это поле обязательно для заполнения",
                    minlength: "Почта должна быть минимум 6 символов",
                    email: "Неправильный формат (ex: Hello@gmail.com)",
                    maxlength: "Почта должна быть не более 36 символов",
                },
                message:{
                    maxlength: "Сообщение должно быть не более 255 символов",
            },
            }
         });
         $(".contact-form").validate({
            rules:{
               name:{
                 required: true,
                 minlength: 4,
                 maxlength: 56,
               },
               email:{
                 required: true,
                 email: true,
                 maxlength: 32,
               },
               message: {
                minlength: 32,
                maxlength: 255,
               }
            },
            messages:{
              name:{
                required: "Это поле обязательно для заполнения",
                    minlength: "Логин должен быть минимум 4 символа",
                    maxlength: "Максимальное число символов - 16",
            },
                email:{
                    required: "Это поле обязательно для заполнения",
                    minlength: "Почта должна быть минимум 6 символов",
                    email: "Неправильный формат (ex: Hello@gmail.com)",
                    maxlength: "Почта должна быть не более 36 символов",
                },
                message:{
                    required: "Это поле обязательно для заполнения",
                    minlength: "Сообщение должно быть минимум 6 символов",
                    maxlength: "Сообщение должно быть не более 255 символов",
            },
            }
         });
    animation_start();
    $('.menu-mobile-btn').click(function() {
        $('.menu-mobile').slideToggle(300);
    }); 
    $('.owl-carousel').owlCarousel({
        center: true,
        items:1,
        loop:true,
        margin:10,
        responsive:{
            600:{
                items:1
            }
        },
        pullDrag: true,
        smartSpeed: 800
    });

    $(window).scroll(function() {

        var top = $('.about-block')[0].getBoundingClientRect().top;
        var coord = window.innerHeight - top;
        if(coord > 0 && coord < 900) {
            $(".nav-link .about-link").addClass('active');
        } else {
            $(".nav-link .about-link").removeClass('active');
        }
        if(coord > 200) {
            animation();
            $('.intro-image').addClass('left-anim');
        }
    });
    $(window).scroll(function() {
        var top = $('.price')[0].getBoundingClientRect().top;
        var coord = window.innerHeight - top;
        if(coord > 460 && coord < 1100) {
            $(".nav-link .price-link").addClass('active');
        } else {
            $(".nav-link .price-link").removeClass('active');
        }
        if(coord > 350) {
            $('.price-block').addClass('trips-one');
        }
    });
    $(window).scroll(function() {
        var top = $('.price')[0].getBoundingClientRect().top;
        var coord = window.innerHeight - top;

        if(coord > 200) {
            $('.bs-1').addClass('left-anim');
        }
    });
    
    $(window).scroll(function() {
        var top = $('.about-block-desc')[0].getBoundingClientRect().top;
        var coord = window.innerHeight - top;
        if(coord > 200 && coord) {
            $('.intro-image').addClass('left-anim');
        }
    });
    $(window).scroll(function() {
        var top = $('.trips')[0].getBoundingClientRect().top;
        var coord = window.innerHeight - top;
        if(coord > 400) {
            $('.trips-area').addClass('right-anim');
            $('.feature-img').addClass('left-anim');
            $('.feature-img').addClass('left-anim');

        }
    });
    $(window).scroll(function() {
        var top = $('.trips')[0].getBoundingClientRect().top;
        var coord = window.innerHeight - top;

        if(coord > 400 && coord < 1500) {
            $(".nav-link .trips-link").addClass('active');
        } else {
            $(".nav-link .trips-link").removeClass('active');
        }
        if(coord > 100) {
            $('.trips-text').addClass('bottom-anim');
        }
    });
    $(window).scroll(function() {
        var top = $('.about-block-2')[0].getBoundingClientRect().top;
        var coord = window.innerHeight - top;
        
        if(coord > 0) {
            $('.about-block-text').addClass('left-anim');
            $('.feature-img-2').addClass('right-anim');
        }
    });
    $(window).scroll(function() {
        var top = $('.contact-first')[0].getBoundingClientRect().top;
        var coord = window.innerHeight - top;

        if(coord > 300 && coord < 900) {
            $(".nav-link .contact-navlink").addClass('active');
        } else {
            $(".nav-link .contact-navlink").removeClass('active');
        }
        if(coord > 200) {
            $('.contact-text-h2').addClass('top-anim');
            $('.contact-text-p').addClass('left-anim');
            $('.contact-text-btn').addClass('right-anim');   
        }
    });
    $(window).scroll(function() {
        var top = $('.clients')[0].getBoundingClientRect().top;
        var coord = window.innerHeight - top;
        if(coord > 200) {
            $('.bs-2').addClass('bottom-anim');
            $('.clients-block-logo').addClass('right-anim');
        }
    });
    $(window).scroll(function() {
        var top = $('.reviews')[0].getBoundingClientRect().top;
        var coord = window.innerHeight - top;

        if(coord > 450 && coord < 950) {
            $(".nav-link .reviews-link").addClass('active');
        } else {
            $(".nav-link .reviews-link").removeClass('active');
        }
        if(coord > 100) {
            $('.bs-3').addClass('top-anim');

        }
        if(coord > 200) {
            $('.reviews-area').addClass('left-anim');
        }
    });
    $(window).scroll(function() {
        var top = $('.contact-second')[0].getBoundingClientRect().top;
        var coord = window.innerHeight - top;
        if(coord > 490 && coord < 1000) {
            $(".nav-link .contact-navlink-2").addClass('active');
        } else {
            $(".nav-link .contact-navlink-2").removeClass('active');
        }
        if(coord > 100) {
            $('.contact-text-h6').addClass('left-anim');
            $('.contact-form-name').addClass('top-anim'); 
        }
        if(coord > 200) {
            $('.contact-form-email').addClass('right-anim'); 
        }
        if(coord > 300) {
            $('.fa-contact-block').addClass('bottom-anim');
            $('.contact-form-message').addClass('bottom-anim'); 
        }
        if(coord > 400) {
            $('.contact-form-button').addClass('right-anim');
            $('.contact-form-rules').addClass('bottom-anim'); 
        }
    });
    $(window).scroll(function() {
        var top = $('.socials')[0].getBoundingClientRect().top;
        var coord = window.innerHeight - top;
        if(coord > 0) {
            $('.social-circle').addClass('bottom-anim');
        }
    });
    
    $('.trips-link').click(function() {
        var faq_coord = $('.trips').offset().top;
        $('.menu-mobile').slideUp(300);
        $('html, body').animate({scrollTop: faq_coord}, 1000);
    });
    $('.about-link').click(function() {
        var faq_coord = $('.about-block').offset().top;
        $('.menu-mobile').slideUp(300);
        $('html, body').animate({scrollTop: faq_coord}, 1000);
    });
    $('.contact-navlink').click(function() {
        var faq_coord = $('.contact-first').offset().top;
        $('.menu-mobile').slideUp(300);
        $('html, body').animate({scrollTop: faq_coord}, 1000);
    });
    $('.price-link').click(function() {
        var faq_coord = $('.price').offset().top;
        $('.menu-mobile').slideUp(300);
        $('html, body').animate({scrollTop: faq_coord}, 1000);
    });
    $('.reviews-link').click(function() {
        var faq_coord = $('.reviews').offset().top;
        $('.menu-mobile').slideUp(300);
        $('html, body').animate({scrollTop: faq_coord}, 1000);
    });
    $('.contact-navlink-2').click(function() {
        var faq_coord = $('.contact-second').offset().top;
        $('.menu-mobile').slideUp(300);
        $('html, body').animate({scrollTop: faq_coord}, 1000);
    });

    $('.fa-arrow-up').click(function() {
        var faq_coord = $('.main').offset().top;
        $('.menu-mobile').slideUp(300);
        $('html, body').animate({scrollTop: faq_coord}, 1000);
    });
    $(window).scroll(function() {
        var top = $('#main')[0].getBoundingClientRect().top;
        var coord = window.innerHeight - top;
        console.log(coord);
        if(coord > 1200) {
            $('.fa-arrow-up').fadeIn(300);
        } else if (coord < 1200) {
            $('.fa-arrow-up').fadeOut(300);

        }

    });



    // $(window).scroll(function() {
    //     var sticky= $("header");
    //     var header = $("header").offset().top;
    //     console.log(header);
    //     var scroll = $(window).scrollTop();
    //     if (scroll >= 780) {
    //         sticky.addClass('fixed');
    //     } else {
    //         sticky.removeClass('fixed')
    //     }
    // });

    // $(window).scroll(function() {
    //     var top = $('.main')[0].getBoundingClientRect().top;
        
    //     // var main = $("main").scrollTop();
    //     // console.log(main);
    //     var coord = window.innerHeight + top;
    //     console.log(coord);
    //     if(coord > 0) {
    //         $('header').addClass('fixed');
    //     } else {
    //         $('header').removeClass('fixed');

    //     }
    // });
    $("header").sticky({topSpacing:0});



    $('.auth-link').click(function() {
        $('.auth').fadeIn(1);
    });
    $('.auth-block-area-close').click(function() {
        $('.auth').fadeOut(1);
        $('.signup').fadeOut(1);
    });
    $('.signup-block-area-close').click(function() {
        $('.signup').fadeOut(1);
        $('.auth').fadeOut(1);

    });
    // signup-block-area-close
    $('.signup-btn').click(function() {
        $('.signup').fadeIn(1);
        $('.auth').fadeOut(1);

    });
    $('.auth-back').click(function() {
        $('.signup').fadeOut(1);
        $('.auth').fadeIn(1);
    });

    // РЕГИСТРАЦИЯ


    $('.signup-form').submit(function() {
        var user_login = $('#signup-login').val();
        var user_pass = $('#signup-pass').val();
        var user_pass2 = $('#signup-pass2').val();
        var user_email = $('#signup-email').val();

        var data = {
            login: user_login,
            pass: user_pass,
            pass2: user_pass2,
            email: user_email
        }
        data = JSON.stringify(data);
        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'signup.php', true);
        // xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        xhr.setRequestHeader('Content-type', 'application/json');
        xhr.send(data);
        
        xhr.onreadystatechange = function() {
            if (xhr.readyState != 4) {
                return;
            }

            var response = JSON.parse(xhr.responseText);
            console.log(xhr.responseText);

            if (xhr.status == 200) {
                if (response['login', 'pass', 'pass2', 'email']) {
                    $('.signup').fadeOut(1);
                    $('.auth').fadeIn(1);
                    $('.auth').overhang({
                        custom: true,
                        textColor: "#fff",
                        primary: "rgb(77, 154, 255)",
                        accent: "#fff",
                        message: "Пользователь " + response['login'] + ' успешно зарегистрирован'
                      });
                } else {
                    $('.signup').overhang({
                        custom: true,
                        textColor: "#fff",
                        primary: "rgb(225, 72, 72)",
                        accent: "#fff",
                        message: response
                    });
                }
                
                // $('.signup-block-area').append('<h4 class="sign-text tac pb">Пользователь ' + response.login + ' успешно зарегистрирован!</h4>');
            }    
        }
        return false;
    });

   
    // АВТОРИЗАЦИЯ
    $('.auth-form').submit(function() {
        var user_login = $('#auth-login').val();
        var user_pass = $('#auth-pass').val();

        var data = {
            login: user_login,
            pass: user_pass
        }
        data = JSON.stringify(data);
        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'auth.php', true);
        // xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        xhr.setRequestHeader('Content-type', 'application/json');
        xhr.send(data);
        // console.log(user_pass);
        xhr.onreadystatechange = function() {
            if (xhr.readyState != 4) {
                return;
            }

            var response = JSON.parse(xhr.responseText);
            console.log(xhr.responseText);

            if (xhr.status == 200) {
                if (response == ['login']) {
                    $('.auth').overhang({
                        custom: true,
                        textColor: "#fff",
                        primary: "rgb(89, 194, 84)",
                        accent: "#fff",
                        message: 'Вы успешно авторизовались'
                    }); 
                } else {
                    $('.auth').overhang({
                        custom: true,
                        textColor: "#fff",
                        primary: "rgb(225, 72, 72)",
                        accent: "#fff",
                        message: response
                    });   
                }
                              
            }    
        
        }
        return false;
    });
});


function animation() {
    $('.top').animate({
        top: 0,
        opacity: 1
    }, 1000);
    $('.left').animate({
        left: 0,
        opacity: 1
    }, 1000);
    $('.right').animate({
        right: 0,
        opacity: 1
    }, 1000);
    $('.bottom').animate({
        bottom: 0,
        opacity: 1
    }, 500);
};
function animation_start() {
    $('.top1').addClass('top-anim');
    $('.left1').addClass('left-anim');
    $('.right1').addClass('right-anim');
    $('.bottom1').addClass('bottom-anim');
};