/* src/assets/js/main.js
   Angular-safe version of static main.js
   All DOM/plugin init happens inside initSitePlugins(context)
   Call window.initSitePlugins(document) after Angular view init
*/

// ---------- helpers ----------
function qsa(root, selector) {
  try { return (root || document).querySelectorAll(selector) || []; } catch (e) { return []; }
}
function qs(root, selector) {
  try { return (root || document).querySelector(selector); } catch (e) { return null; }
}

function initSlick($el, options) {
  if (!window.jQuery || !$el || !$el.length) return;
  $el.not('.slick-initialized').slick(options);
}

// ---------- main initializer ----------
function initSitePlugins(context = document) {
  try {

    /* ================= Highlight animation ================= */
    qsa(context, ".highlight").forEach(el => {
      setTimeout(() => el.classList.add("show"), 600);
    });

    if (!window.jQuery) return;
    const $ = window.jQuery;

    /* ================= Header scroll ================= */
    if ($('.header').length) {
      $(window)
        .off('scroll.headerSlim')
        .on('scroll.headerSlim', function () {
          $(window).scrollTop() >= 10
            ? $('.header').addClass('slim-header')
            : $('.header').removeClass('slim-header');
        });

      $(window)
        .off('scroll.headerWt')
        .on('scroll.headerWt', function () {
          const scroll = $(window).scrollTop() || 0;
          scroll >= 50
            ? $('.header').addClass('header-wt')
            : $('.header').removeClass('header-wt');
        });
    }

    /* ================= Mobile menu ================= */
    if ($('.main-nav').length && !$('.main-nav .top-nav-clone').length) {
      $('.top-nav-clone').clone().appendTo('.main-nav').addClass('desk-hide');
    }

    $('.main-nav ul li:has(ul), .extra-link ul li:has(ul)')
      .addClass('submenu')
      .children('i').remove();

    $('.main-nav ul li:has(ul), .extra-link ul li:has(ul)')
      .append('<i></i>');

    $('.main-nav ul')
      .off('click.submenu')
      .on('click.submenu', 'i', function () {
        $(this).parent('li').toggleClass('open').children('ul').slideToggle();
      });

    $('.mob-btn').off('click.mob').on('click.mob', () => $('html').toggleClass('show-menu'));
    $('.overlay').off('click.overlay').on('click.overlay', () => $('html').removeClass('show-menu'));

    /* ================= Back to top ================= */
    $(window).off('scroll.back').on('scroll.back', function () {
      $(window).scrollTop() > 150
        ? $('#back-to-top').addClass('visible')
        : $('#back-to-top').removeClass('visible');

      ($(window).scrollTop() + $(window).height() > $(document).height() - 1000)
        ? $('.back-btn').addClass('back-open')
        : $('.back-btn').removeClass('back-open');
    });

    $('#back-to-top').off('click.back').on('click.back', function () {
      $('html,body').animate({ scrollTop: 0 }, 100);
      return false;
    });

    /* ================= Slick sliders ================= */
    initSlick($('.banner-slider'), {
      dots: true, infinite: true, speed: 1100, fade: true,
      autoplay: true, autoplaySpeed: 2000,
      arrows: true, cssEase: 'ease-in-out',
      prevArrow: $('.prev'), nextArrow: $('.next'),
      pauseOnHover: false, pauseOnFocus: false
    });

    initSlick($('.solution-slider'), {
      slidesToShow: 1, centerPadding: '20%',
      autoplay: true, centerMode: true, variableWidth: true,
      dots: true, arrows: false, infinite: true
    });

    initSlick($('.clint-slider'), {
      slidesToShow: 4.2, slidesToScroll: 4,
      infinite: false, dots: true, arrows: false,
      autoplay: true,
      responsive: [
        { breakpoint: 1200, settings: { slidesToShow: 3, slidesToScroll: 3 } },
        { breakpoint: 900, settings: { slidesToShow: 2, slidesToScroll: 2 } },
        { breakpoint: 480, settings: { slidesToShow: 1, slidesToScroll: 1 } }
      ]
    });

    /* ================= Marquee ================= */
    if ($.fn.marquee && $('.marquee').length) {
      $('.marquee').marquee({
        duration: 10000,
        gap: 0,
        delayBeforeStart: 0,
        direction: 'right',
        startVisible: true,
        duplicated: true,
        pauseOnHover: true
      });
    }

    /* ================= Counter ================= */
    if ($.fn.countUp && $('.counter').length) {
      $('.counter').countUp({ delay: 10, time: 1500 });
    }

    /* ================= Deck hover (latest script) ================= */
    qsa(context, '.deck').forEach(deck => {
      if (deck.dataset.init === '1') return;
      deck.dataset.init = '1';

      const panels = Array.from(deck.querySelectorAll('.panel'));
      if (!panels.length) return;

      const setActive = idx => {
        panels.forEach((p, i) => {
          p.classList.remove('left', 'right', 'active');
          if (i < idx) p.classList.add('left');
          if (i > idx) p.classList.add('right');
        });
        panels[idx].classList.add('active');
      };

      setActive(0);

      panels.forEach((p, i) => p.addEventListener('mouseenter', () => setActive(i)));
      deck.addEventListener('mouseleave', () => setActive(0));
    });

    /* ================= Sticky tabs smooth scroll ================= */
    $('#menu-center a[href^="#"]', context)
      .off('click.sticky')
      .on('click.sticky', function (e) {
        e.preventDefault();
        const target = $(this.getAttribute('href'));
        if (!target.length) return;

        const stickyH = $('#stickyNav').outerHeight() || 0;
        $('#menu-center a').removeClass('active');
        $(this).addClass('active');

        $('html,body').animate(
          { scrollTop: target.offset().top - stickyH - 10 },
          500
        );
      });

    /* ================= Scroll spy ================= */
    const onScroll = () => {
      const scrollPos = $(document).scrollTop();
      const stickyH = $('#stickyNav').outerHeight() || 0;

      $('#menu-center a').each(function () {
        const ref = $($(this).attr('href'));
        if (!ref.length) return;

        const top = ref.offset().top - stickyH - 20;
        const bottom = top + ref.outerHeight();

        if (scrollPos >= top && scrollPos < bottom) {
          $('#menu-center a').removeClass('active');
          $(this).addClass('active');
        }
      });
    };

    $(document).off('scroll.spy').on('scroll.spy', onScroll);

    /* ================= Sticky header hide/show ================= */
    const header = document.getElementById("headerNav");
    const stickyNav = document.getElementById("stickyNav");
    let lastScrollY = window.scrollY;

    if (header && stickyNav) {
      window.addEventListener("scroll", () => {
        const scrollUp = window.scrollY < lastScrollY;
        if (stickyNav.getBoundingClientRect().top <= 130) {
          stickyNav.classList.add("sticky-fixed");
          scrollUp ? header.classList.remove("hide-header") : header.classList.add("hide-header");
        } else {
          stickyNav.classList.remove("sticky-fixed");
          header.classList.remove("hide-header");
        }
        lastScrollY = window.scrollY;
      });
    }

  } catch (e) {
    console.warn('initSitePlugins error', e);
  }
}

// expose globally
window.initSitePlugins = initSitePlugins;

/* IMPORTANT:
   Call window.initSitePlugins(document)
   after Angular component view init
*/
