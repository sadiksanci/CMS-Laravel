
(function ($) {
    'use strict';
  
    var imJs = {
        m: function (e) {
            imJs.d();
            imJs.methods();
        },
        d: function (e) {
            this._window = $(window),
            this._document = $(document),
            this._body = $('body'),
            this._html = $('html')
        },
        methods: function (e) {
            imJs.swiperActivation();
            imJs.vedioActivation();
            imJs.counterUp();
            imJs.salActive();
            imJs.progressAvtivation();
            imJs.stickyHeader();
            imJs.backToTopInit();
            imJs.typeJS();
            imJs.searchOpton();
            imJs.menuActive();
            imJs.popupMobileMenu();
            imJs.preloader();
            imJs.smoothScroll();
            imJs.textActivation();
        },
        swiperActivation: function (){
          $(document).ready(function() {
            var swiper = new Swiper(".mySwiper", {
                loop: false,
                loopedSlides: 50,
                autoHeight: true,
                shortSwipes: false,
                longSwipes: false,
                effect: 'fade',
                speed:500,
                autoplay: {
                    delay: 4000,
                },                
              });
          });
          $(document).ready(function() {
            var swiper = new Swiper(".testimonial-1", {
              slidesPerView: 2.5,
              spaceBetween: 24,
              slidesPerGroup: 1,
              loop: true,
              loopFillGroupWithBlank: true,
              navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
              },
              autoplay: {
                delay: 3000,
              },
              breakpoints: {
                1500: {
                  slidesPerView: 2.5,
                },
                1300: {
                  slidesPerView: 4,
                },
                991: {
                  slidesPerView: 3,
                  
                },
                767: {
                  slidesPerView: 2,
                },
                575: {
                  slidesPerView: 2,
                },
                0: {
                  slidesPerView: 1,
                }
              },
            });
            $(document).ready(function() {
              var swiper = new Swiper(".mySwiperBanner-three", {
                  loop: false,
                  loopedSlides: 50,
                  autoHeight: true,
                  shortSwipes: false,
                  longSwipes: false,
                  effect: 'fade',
                  speed:500,
                  autoplay: {
                      delay: 4000,
                  },                
                });
            });
            var swiper = new Swiper(".brand-1", {
              slidesPerView: 2.5,
              spaceBetween: 100,
              slidesPerGroup: 1,
              loop: true,
              loopFillGroupWithBlank: true,
              navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
              },
              autoplay: {
                delay: 3000,
              },
              breakpoints: {
                1500: {
                  slidesPerView: 5,
                },
                1300: {
                  slidesPerView: 4,
                },
                991: {
                  slidesPerView: 3,
                  
                },
                767: {
                  slidesPerView: 2,
                },
                575: {
                  slidesPerView: 2,
                },
                0: {
                  slidesPerView: 1,
                }
              },
            });
            var swiper = new Swiper(".team-one-swiper", {
              slidesPerView: 2.5,
              spaceBetween: 40,
              slidesPerGroup: 1,
              loop: true,
              loopFillGroupWithBlank: true,
              navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
              },
              autoplay: {
                delay: 3000,
              },
              breakpoints: {
                1500: {
                  slidesPerView: 3,
                },
                1300: {
                  slidesPerView: 3,
                },
                991: {
                  slidesPerView: 3,
                  
                },
                767: {
                  slidesPerView: 2,
                },
                575: {
                  slidesPerView: 2,
                },
                0: {
                  slidesPerView: 1,
                }
              },
            });
            var swiper = new Swiper(".project-h2-slider", {
              slidesPerView: 2.5,
              spaceBetween: 24,
              slidesPerGroup: 1,
              loop: true,
              loopFillGroupWithBlank: true,
              centeredSlides: true,
              navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
              },
              pagination: {
                el: '.swiper-pagination',
                clickable: true,
                dynamicBullets: true
              },
              autoplay: {
                delay: 3000,
              },
              breakpoints: {
                1500: {
                  slidesPerView: 4.2,
                },
                1300: {
                  slidesPerView: 3,
                },
                991: {
                  slidesPerView: 3,
                  
                },
                767: {
                  slidesPerView: 2,
                },
                575: {
                  slidesPerView: 2,
                },
                0: {
                  slidesPerView: 1,
                }
              },
            });
            var swiper = new Swiper(".testimonials-h2", {
              slidesPerView: 2,
              spaceBetween: 24,
              slidesPerGroup: 1,
              loop: true,
              loopFillGroupWithBlank: true,
              // centeredSlides: true,
              // navigation: {
              //   nextEl: ".swiper-button-next",
              //   prevEl: ".swiper-button-prev",
              // },
              pagination: {
                el: '.swiper-pagination2',
                clickable: true,
                dynamicBullets: false
              },
              autoplay: {
                delay: 3000,
              },
              breakpoints: {
                1500: {
                  slidesPerView: 2,
                },
                1300: {
                  slidesPerView: 2,
                },
                991: {
                  slidesPerView: 2,
                  
                },
                767: {
                  slidesPerView: 1,
                },
                575: {
                  slidesPerView: 1,
                },
                0: {
                  slidesPerView: 1,
                }
              },
            });
          });
          $(document).ready(function() {
            var swiper = new Swiper(".mySwipers", {
                loop: true,
                loopedSlides: 50,
                autoHeight: true,
                shortSwipes: false,
                longSwipes: false,
                effect: 'fade',
                speed: 500,
                autoplay: {
                    delay: 1500,
                },
                pagination: {
                  el: ".swiper-pagination",
                  type: "fraction",
                },
                navigation: {
                  nextEl: ".swiper-button-next",
                  prevEl: ".swiper-button-prev",
                },
              });
          });
          $(document).ready(function() {
            var swiper = new Swiper(".mySwipertestimonial", {
              loop: true,
              loopedSlides: 50,
              autoHeight: true,
              shortSwipes: false,
              longSwipes: false,
              navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
              },
            });
          });
          
          $(document).ready(function() {
            var swiper = new Swiper(".mySwiperh2_Service", {
              slidesPerView: 3,
              spaceBetween: 30,
              slidesPerGroup: 1,
              loop: true,
              loopFillGroupWithBlank: true,
              pagination: {
                el: ".swiper-pagination",
                type: "fraction",
              },
              navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
              },
              breakpoints: {
                1500: {
                  slidesPerView: 3,
                },
                1300: {
                  slidesPerView: 3,
                },
                991: {
                  slidesPerView: 3,
                  
                },
                767: {
                  slidesPerView: 2,
                },
                575: {
                  slidesPerView: 2,
                },
                0: {
                  slidesPerView: 1,
                }
              },
            });
          });

          $(document).ready(function() {
            var swiper = new Swiper(".clients-review-7", {
              slidesPerView: 3,
              spaceBetween: 30,
              slidesPerGroup: 1,
              loop: true,
              loopFillGroupWithBlank: true,
              pagination: false,
              autoplayDisableOnInteraction:true,
              navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
              },
              autoplay: {
                delay: 3000,
              },
              breakpoints: {
                1500: {
                  slidesPerView: 3,
                },
                1300: {
                  slidesPerView: 3,
                },
                991: {
                  slidesPerView: 3,
                  
                },
                767: {
                  slidesPerView: 2,
                },
                575: {
                  slidesPerView: 2,
                },
                0: {
                  slidesPerView: 1,
                }
              },
            });
          });


          $(document).ready(function() {
            var swiper = new Swiper(".clients-review-testimonials-7", {
              slidesPerView: 3,
              spaceBetween: 30,
              slidesPerGroup: 1,
              loop: true,
              loopFillGroupWithBlank: true,
              pagination: false,
              autoplayDisableOnInteraction:true,
              navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
              },
              autoplay: {
                delay: 3000,
                disableOnInteraction: true
              },
              breakpoints: {
                1500: {
                  slidesPerView: 3,
                },
                1300: {
                  slidesPerView: 3,
                },
                991: {
                  slidesPerView: 3,
                  
                },
                767: {
                  slidesPerView: 1,
                },
                575: {
                  slidesPerView: 1,
                },
                0: {
                  slidesPerView: 1,
                }
              },
            });


          });


          $(document).ready(function() {
            var swiper = new Swiper(".mySwiperh2_Business_Cases", {
              slidesPerView: 4,
              spaceBetween: 30,
              slidesPerGroup: 2,
              loop: true,
              loopFillGroupWithBlank: true,
              pagination: {
                el: ".swiper-pagination",
                type: "fraction",
              },
              navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
              },
              autoplay: {
                delay: 3000,
              },
              breakpoints: {
                1500: {
                  slidesPerView: 4,
                },
                1300: {
                  slidesPerView: 4,
                },
                991: {
                  slidesPerView: 3,
                  
                },
                767: {
                  slidesPerView: 2,
                },
                575: {
                  slidesPerView: 2,
                },
                0: {
                  slidesPerView: 1,
                }
              },
            });
          });

          $(document).ready(function() {
            var swiper = new Swiper(".mySwiperh2_clients", {
              slidesPerView: 3,
              spaceBetween: 30,
              slidesPerGroup: 1,
              loop: true,
              loopFillGroupWithBlank: true,
              pagination: {
                el: ".swiper-pagination",
                type: "fraction",
              },
              navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
              },
              autoplay: {
                delay: 3000,
              },
              breakpoints: {
                1500: {
                  slidesPerView: 3,
                },
                1300: {
                  slidesPerView: 3,
                },
                1199: {
                  slidesPerView: 2,
                  
                },
                767: {
                  slidesPerView: 2,
                },
                575: {
                  slidesPerView: 1,
                },
                0: {
                  slidesPerView: 1,
                }
              },
            });
          });
          $(document).ready(function() {
            var swiper = new Swiper(".mySwiperh3_business-case", {
              slidesPerView: 3,
              spaceBetween: 30,
              slidesPerGroup: 1,
              loop: true,
              loopFillGroupWithBlank: true,
              pagination: {
                el: ".swiper-pagination",
                type: "fraction",
              },
              navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
              },
              autoplay: {
                delay: 3000,
              },
              breakpoints: {
                1500: {
                  slidesPerView: 3,
                },
                1300: {
                  slidesPerView: 3,
                },
                1199: {
                  slidesPerView: 2,
                  
                },
                767: {
                  slidesPerView: 2,
                },
                575: {
                  slidesPerView: 1,
                },
                0: {
                  slidesPerView: 1,
                }
              },
            });
          });
          $(document).ready(function() {
            var swiper = new Swiper(".mySwiperh1_team", {
              slidesPerView: 4,
              spaceBetween: 30,
              slidesPerGroup: 1,
              loop: true,
              loopFillGroupWithBlank: true,
              centeredSlides: false,
              pagination: {
                el: ".swiper-pagination",
                type: "fraction",
              },
              navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
              },
              autoplay: {
                delay: 3000,
              },              
              breakpoints: {
                1500: {
                  slidesPerView: 4,
                },
                1300: {
                  slidesPerView: 4,
                },
                991: {
                  slidesPerView: 3,
                  
                },
                767: {
                  slidesPerView: 3,
                },
                575: {
                  slidesPerView: 2,
                },
                0: {
                  slidesPerView: 1,
                }
              },
            });
          });
          $(document).ready(function() {
            var swiper = new Swiper(".mySwiperh3_team", {
              slidesPerView: 3,
              spaceBetween: 30,
              slidesPerGroup: 1,
              loop: true,
              loopFillGroupWithBlank: true,
              pagination: {
                el: ".swiper-pagination",
                type: "fraction",
              },
              navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
              },
              autoplay: {
                delay: 3000,
              },              
              breakpoints: {
                1500: {
                  slidesPerView: 3,
                },
                1399: {
                  slidesPerView: 3,
                },
                991: {
                  slidesPerView: 2,
                },
                767: {
                  slidesPerView: 2,
                },
                575: {
                  slidesPerView: 2,
                },
                0: {
                  slidesPerView: 1,
                }
              },
            });
          });
          $(document).ready(function() {
            var swiper = new Swiper(".mySwiperh1_blog", {
                 slidesPerView: 1,
                 spaceBetween: 30,
                 slidesPerView: 3,
                 speed: 1500,
                 loop: true,
                 loopFillGroupWithBlank: true,
                 centeredSlides: false,
                 breakpoints: {
                   1600: {
                     slidesPerView: 3,
                   },
                   1300: {
                     slidesPerView: 3,
                   },
                   1220: {
                     slidesPerView: 3,
                   },
                   1200: {
                     slidesPerView: 3,
                   },
                   900: {
                     slidesPerView: 2,
                   },
                   576: {
                     slidesPerView: 2,
                   },  
                   0: {
                     slidesPerView: 1,
                   },                

                 },
                 autoplay: {
                   delay: 2500,
                   disableOnInteraction: true
                 },
                 navigation: {
                   prevEl: ".swiper-button-prev",
                   nextEl: ".swiper-button-next",
                 },
                 pagination: {
                   el: ".swiper-pag",
                   clickable: true,
                 }
            });


          });
          $(document).ready(function() {
            var swiper = new Swiper(".mySwiperh2_blog", {
                 slidesPerView: 1,
                 spaceBetween: 30,
                 slidesPerView: 3,
                 speed: 1500,
                 loop: true,
                 loopFillGroupWithBlank: true,
                 centeredSlides: false,
                 breakpoints: {
                   1600: {
                     slidesPerView: 3,
                   },
                   1300: {
                     slidesPerView: 3,
                   },
                   1220: {
                     slidesPerView: 3,
                   },
                   1200: {
                     slidesPerView: 3,
                   },
                   768: {
                     slidesPerView: 2,
                   },
                   576: {
                     slidesPerView: 1,
                   },  
                   0: {
                     slidesPerView: 1,
                   },                

                 },
                 autoplay: {
                   delay: 2500,
                   disableOnInteraction: true
                 },
                 navigation: {
                   prevEl: ".swiper-button-prev",
                   nextEl: ".swiper-button-next",
                 },
                 pagination: {
                   el: ".swiper-pag",
                   clickable: true,
                 }
            });


          });
          $(document).ready(function() {
            var swiper = new Swiper(".mySwiperh2_banner", {
              slidesPerView: 1,
              spaceBetween: 30,
              slidesPerGroup: 1,
              loop: true,
              loopFillGroupWithBlank: true,
              effect: 'fade',
              pagination: {
                el: ".swiper-pagination",
                type: "fraction",
              },
              navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
              },
              autoplay: {
                delay: 4000,
              },
            });
          });
          $(document).ready(function() {
            var swiper = new Swiper(".mySwiperh3_banner", {
              slidesPerView: 1,
              spaceBetween: 0,
              slidesPerGroup: 1,
              loop: true,
              loopFillGroupWithBlank: true,              
              pagination: {
                el: ".swiper-pagination",
                type: "fraction",
              },
              navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
              },
              autoplay: {
                delay: 4000,
              },
            });
          });
        },

        
        vedioActivation: function (e) {
          $('#play-video, .play-video').on('click', function (e) {
              e.preventDefault();
              $('#video-overlay, .video-overlay').addClass('open');
              $("#video-overlay, .video-overlay").append('<iframe width="560" height="315" src="https://www.youtube.com/embed/6stlCkUDG_s" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>');
          });

          $('.video-overlay, .video-overlay-close').on('click', function (e) {
              e.preventDefault();
              close_video();
          });

          $(document).keyup(function (e) {
              if (e.keyCode === 27) {
                  close_video();
              }
          });

          function close_video() {
              $('.video-overlay.open').removeClass('open').find('iframe').remove();
          };
        },
        counterUp: function (e) {
            $('.counter').counterUp({
                delay: 10,
                time: 1000
              });
              $('.counter').addClass('animated fadeInDownBig');
              $('h3').addClass('animated fadeIn');
        },
        salActive: function () {
          sal({
              threshold: 0.1,
              once: true,
          });
        },
        progressAvtivation: function(){
          $(window).scroll(function () {
            if ($(this).scrollTop() > 250) {
              var bars = document.querySelectorAll('.meter > span');
              console.clear();
              setInterval(function(){
                bars.forEach(function(bar){
                  var getWidth = parseFloat(bar.dataset.progress);
                  for(var i = 0; i < getWidth; i++) {
                    bar.style.width = i + '%';
                  }
                });
              }, 100);
            }
          })
        },
        stickyHeader: function (e) {
          $(window).scroll(function () {
              if ($(this).scrollTop() > 150) {
                  $('.header--sticky').addClass('sticky')
              } else {
                  $('.header--sticky').removeClass('sticky')
              }
          })
        },
        backToTopInit: function () {
          $(document).ready(function(){
          "use strict";
      
          var progressPath = document.querySelector('.progress-wrap path');
          var pathLength = progressPath.getTotalLength();
          progressPath.style.transition = progressPath.style.WebkitTransition = 'none';
          progressPath.style.strokeDasharray = pathLength + ' ' + pathLength;
          progressPath.style.strokeDashoffset = pathLength;
          progressPath.getBoundingClientRect();
          progressPath.style.transition = progressPath.style.WebkitTransition = 'stroke-dashoffset 10ms linear';		
          var updateProgress = function () {
            var scroll = $(window).scrollTop();
            var height = $(document).height() - $(window).height();
            var progress = pathLength - (scroll * pathLength / height);
            progressPath.style.strokeDashoffset = progress;
          }
          updateProgress();
          $(window).scroll(updateProgress);	
          var offset = 50;
          var duration = 550;
          jQuery(window).on('scroll', function() {
            if (jQuery(this).scrollTop() > offset) {
              jQuery('.progress-wrap').addClass('active-progress');
            } else {
              jQuery('.progress-wrap').removeClass('active-progress');
            }
          });				
          jQuery('.progress-wrap').on('click', function(event) {
            event.preventDefault();
            jQuery('html, body').animate({scrollTop: 0}, duration);
            return false;
          })
          
          
        });
  
        },
        typeJS: function () {
          jQuery(document).ready(function($) {
            //set animation timing
            var animationDelay = 2500,
              //loading bar effect
              barAnimationDelay = 3800,
              barWaiting = barAnimationDelay - 3000, //3000 is the duration of the transition on the loading bar - set in the scss/css file
              //letters effect
              lettersDelay = 50,
              //type effect
              typeLettersDelay = 150,
              selectionDuration = 1500,
              typeAnimationDelay = selectionDuration + 800,
              //clip effect 
              revealDuration = 1000,
              revealAnimationDelay = 1500;
          
            initHeadline();
          
          
            function initHeadline() {
              //insert <i> element for each letter of a changing word
              singleLetters($('.cd-headline.letters').find('b'));
              //initialise headline animation
              animateHeadline($('.cd-headline'));
            }
          
            function singleLetters($words) {
              $words.each(function() {
                var word = $(this),
                  letters = word.text().split(''),
                  selected = word.hasClass('is-visible');
                for (i in letters) {
                  if (word.parents('.rotate-2').length > 0) letters[i] = '<em>' + letters[i] + '</em>';
                  letters[i] = (selected) ? '<i class="in">' + letters[i] + '</i>' : '<i>' + letters[i] + '</i>';
                }
                var newLetters = letters.join('');
                word.html(newLetters).css('opacity', 1);
              });
            }
          
            function animateHeadline($headlines) {
              var duration = animationDelay;
              $headlines.each(function() {
                var headline = $(this);
          
                if (headline.hasClass('loading-bar')) {
                  duration = barAnimationDelay;
                  setTimeout(function() {
                    headline.find('.cd-words-wrapper').addClass('is-loading')
                  }, barWaiting);
                } else if (headline.hasClass('clip')) {
                  var spanWrapper = headline.find('.cd-words-wrapper'),
                    newWidth = spanWrapper.width() + 10
                  spanWrapper.css('width', newWidth);
                } else if (!headline.hasClass('type')) {
                  //assign to .cd-words-wrapper the width of its longest word
                  var words = headline.find('.cd-words-wrapper b'),
                    width = 0;
                  words.each(function() {
                    var wordWidth = $(this).width();
                    if (wordWidth > width) width = wordWidth;
                  });
                  headline.find('.cd-words-wrapper').css('width', width);
                };
          
                //trigger animation
                setTimeout(function() {
                  hideWord(headline.find('.is-visible').eq(0))
                }, duration);
              });
            }
          
            function hideWord($word) {
              var nextWord = takeNext($word);
          
              if ($word.parents('.cd-headline').hasClass('type')) {
                var parentSpan = $word.parent('.cd-words-wrapper');
                parentSpan.addClass('selected').removeClass('waiting');
                setTimeout(function() {
                  parentSpan.removeClass('selected');
                  $word.removeClass('is-visible').addClass('is-hidden').children('i').removeClass('in').addClass('out');
                }, selectionDuration);
                setTimeout(function() {
                  showWord(nextWord, typeLettersDelay)
                }, typeAnimationDelay);
          
              } else if ($word.parents('.cd-headline').hasClass('letters')) {
                var bool = ($word.children('i').length >= nextWord.children('i').length) ? true : false;
                hideLetter($word.find('i').eq(0), $word, bool, lettersDelay);
                showLetter(nextWord.find('i').eq(0), nextWord, bool, lettersDelay);
          
              } else if ($word.parents('.cd-headline').hasClass('clip')) {
                $word.parents('.cd-words-wrapper').animate({
                  width: '2px'
                }, revealDuration, function() {
                  switchWord($word, nextWord);
                  showWord(nextWord);
                });
          
              } else if ($word.parents('.cd-headline').hasClass('loading-bar')) {
                $word.parents('.cd-words-wrapper').removeClass('is-loading');
                switchWord($word, nextWord);
                setTimeout(function() {
                  hideWord(nextWord)
                }, barAnimationDelay);
                setTimeout(function() {
                  $word.parents('.cd-words-wrapper').addClass('is-loading')
                }, barWaiting);
          
              } else {
                switchWord($word, nextWord);
                setTimeout(function() {
                  hideWord(nextWord)
                }, animationDelay);
              }
            }
          
            function showWord($word, $duration) {
              if ($word.parents('.cd-headline').hasClass('type')) {
                showLetter($word.find('i').eq(0), $word, false, $duration);
                $word.addClass('is-visible').removeClass('is-hidden');
          
              } else if ($word.parents('.cd-headline').hasClass('clip')) {
                $word.parents('.cd-words-wrapper').animate({
                  'width': $word.width() + 10
                }, revealDuration, function() {
                  setTimeout(function() {
                    hideWord($word)
                  }, revealAnimationDelay);
                });
              }
            }
          
            function hideLetter($letter, $word, $bool, $duration) {
              $letter.removeClass('in').addClass('out');
          
              if (!$letter.is(':last-child')) {
                setTimeout(function() {
                  hideLetter($letter.next(), $word, $bool, $duration);
                }, $duration);
              } else if ($bool) {
                setTimeout(function() {
                  hideWord(takeNext($word))
                }, animationDelay);
              }
          
              if ($letter.is(':last-child') && $('html').hasClass('no-csstransitions')) {
                var nextWord = takeNext($word);
                switchWord($word, nextWord);
              }
            }
          
            function showLetter($letter, $word, $bool, $duration) {
              $letter.addClass('in').removeClass('out');
          
              if (!$letter.is(':last-child')) {
                setTimeout(function() {
                  showLetter($letter.next(), $word, $bool, $duration);
                }, $duration);
              } else {
                if ($word.parents('.cd-headline').hasClass('type')) {
                  setTimeout(function() {
                    $word.parents('.cd-words-wrapper').addClass('waiting');
                  }, 200);
                }
                if (!$bool) {
                  setTimeout(function() {
                    hideWord($word)
                  }, animationDelay)
                }
              }
            }
          
            function takeNext($word) {
              return (!$word.is(':last-child')) ? $word.next() : $word.parent().children().eq(0);
            }
          
            function takePrev($word) {
              return (!$word.is(':first-child')) ? $word.prev() : $word.parent().children().last();
            }
          
            function switchWord($oldWord, $newWord) {
              $oldWord.removeClass('is-visible').addClass('is-hidden');
              $newWord.removeClass('is-hidden').addClass('is-visible');
            }
          });
        },
        searchOpton:function(){
          $(document).on('click', '#search', function () {
            $(".search-input-area").addClass("show");
            $("#anywhere-home").addClass("bgshow");
          });
          $(document).on('click', '#close', function () {
            $(".search-input-area").removeClass("show");
            $("#anywhere-home").removeClass("bgshow");
          });
          $(document).on('click', '#anywhere-home', function () {
            $(".search-input-area").removeClass("show");
            $("#anywhere-home").removeClass("bgshow");
          });
        },
        preloader:function(){
          window.addEventListener('load',function(){
            document.querySelector('body').classList.add("loaded")  
          });          
        },
        menuActive:function(){
          $(document).on('click', '#menu-btn', function () {
            $("#side-bar").addClass("show");
            $("#anywhere-home").addClass("bgshow");
          });
          $(document).on('click', '.close-icon-menu', function () {
            $("#side-bar").removeClass("show");
            $("#anywhere-home").removeClass("bgshow");
          });
          $(document).on('click', '#anywhere-home', function () {
            $("#side-bar").removeClass("show");
            $("#anywhere-home").removeClass("bgshow");
          });
          $(document).on('click', '.onepage .mainmenu li a', function () {
            $("#side-bar").removeClass("show");
            $("#anywhere-home").removeClass("bgshow");
          });
        },
        popupMobileMenu: function (e) {
          $('.hamberger-button').on('click', function (e) {
              $('.popup-mobile-menu').addClass('active');
          });

          $('.close-menu').on('click', function (e) {
              $('.popup-mobile-menu').removeClass('active');
              $('.popup-mobile-menu .mainmenu .has-droupdown > a, .popup-mobile-menu .mainmenu .with-megamenu > a').siblings('.submenu, .rts-megamenu').removeClass('active').slideUp('400');
              $('.popup-mobile-menu .mainmenu .has-droupdown > a, .popup-mobile-menu .mainmenu .with-megamenu > a').removeClass('open')
          });

          // nav menu
          $('.body-mobile .mainmenu .has-droupdown > a, .body-mobile .mainmenu .with-megamenu > a').on('click', function (e) {
              e.preventDefault();
              $(this).siblings('.submenu, .rts-megamenu').toggleClass('active');
              $(this).toggleClass('open')
          })
          // nav menu end

          $('.popup-mobile-menu').on('click', function (e) {
              e.target === this && $('.popup-mobile-menu').removeClass('active') && $('.popup-mobile-menu .mainmenu .has-droupdown > a, .popup-mobile-menu .mainmenu .with-megamenu > a').siblings('.submenu, .rts-megamenu').removeClass('active').slideUp('400') && $('.popup-mobile-menu .mainmenu .has-droupdown > a, .popup-mobile-menu .mainmenu .with-megamenu > a').removeClass('open');
          });

          $('.one-page-vavigation-popup .mainmenu li > a').on('click' , function (e) {
              e.preventDefault();
              $('.popup-mobile-menu').removeClass('active');
              $('.popup-mobile-menu .mainmenu li > a').siblings('.submenu').removeClass('active');
          })
        },
        
        // pne page scroll top
        smoothScroll: function (e) {
          $(document).on('click', '.onepage a[href^="#"]', function (event) {
            event.preventDefault();
        
            $('html, body').animate({
                scrollTop: $($.attr(this, 'href')).offset().top
            }, 2000);
          });
        },
        // pne page scroll top
        textActivation: function (e) {



          $(document).ready(function(){

          
            var changebox = $(".changebox");

            if(changebox.length){
                  var firstclone = changebox.children(":first").clone();
                  changebox.append(firstclone);
                  
                  var fsstr = changebox.parent().css("font-size");
                  fsstr = fsstr.slice(0,fsstr.indexOf(".title"));
                  var fs = parseInt(fsstr);
                  
                  changebox.css("height",changebox.parent().css("font-size") );
                  ChangeSize(0);
                  setInterval(Next,2000);
                  
                  function Next(){
                    if( typeof Next.i == 'undefined' ) {
                      Next.i = 0;
                    }
                    Next.i++;
                    if(Next.i == changebox.children("span").length){
                        Next.i = 1;
                        changebox.scrollTop(0);
                    }
                    changebox.animate({scrollTop: (fs*Next.i)+Next.i*5+3},500);
                    setTimeout(function(){
                        ChangeSize(Next.i);
                    },500);
                    
                  }
                  
                  function ChangeSize(i){
                  var word = changebox.children("span").eq(i);
                  var wordsize = word.css("width");
                  changebox.css("width",wordsize);
                }
            }
            
            
         });
         
        },
        // smooth scroll one page stop
    }
  
    imJs.m();
  })(jQuery, window)  