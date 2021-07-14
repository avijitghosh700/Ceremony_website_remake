$(function () {
  let body = $("body");
  let header = $(".header");
  let headerRow = header.find(".header__row");
  let searchBarOpener = headerRow.find('[class*="--button"]');
  let searchBar = headerRow.find('[class*="__searchBar"]');
  let closeBtn = searchBar.find(".close");
  let mobileNavBtn = header.find(".header__trigger");
  let mobileNav = header.find('[class*="__mobileNav"]');
  let mobileNavItem = mobileNav.find('[class*="--item"]');
  let mobileForm = mobileNav.find('[class*="__mobileForm"]');
  let hero = body.find(".hero");
  let serve = body.find(".serve");
  let coffee = body.find(".coffee");
  let locationHero = body.find(".location-hero");
  let learnHero = body.find(".learn-banner");
  let tech = body.find(".tech");
  let support = body.find(".support");
  let heroSlideCont = hero.find(".hero__slideCont");
  let heroSlideImg = heroSlideCont.find(".hero__slide");
  let heroSlideContent = heroSlideCont.find(".hero__slideContent");
  let arrivals = body.find(".arrivals");
  let serveContent = serve.find('[class*="__content"]');
  let coffeeContent = coffee.find('[class*="__content"]');
  let techContent = tech.find('[class*="__content"]');
  let supportContent = support.find('[class*="__content"]');
  let locVideo = locationHero.find(".location-hero__video");
  let learnBannerImg = learnHero.find(".learn-banner__img");

  searchBarOpener.on("click", (e) => {
    searchBar.addClass("open");
    body.niceScroll().remove();
    body.attr("style", "overflow: hidden !important");

    closeBtn.on('click', () => {
      searchBar.removeClass("open");
      body.niceScroll({ scrollspeed: 160 });
    });

    e.preventDefault();
  });

  // Mobile Nav Opener
  mobileNavBtn.on("click", function () {
    let classCheckBtn = $(this).hasClass("triggered");
    let classCheckNav = mobileNav.hasClass("navOpen");

    if (!classCheckNav && !classCheckBtn) {
      $(this).addClass("triggered");
      mobileNav.addClass("navOpen");

      mobileNavItem.each(function (i) {
        setTimeout(function () {
          mobileNavItem.eq(i).addClass("item-reset");
        }, i * 500);
      });

      setTimeout(function () {
        mobileForm.addClass("item-reset");
      }, 250);
    } else {
      $(this).removeClass("triggered");
      mobileNav.removeClass("navOpen");

      mobileNavItem.each(function (i) {
        setTimeout(function () {
          mobileNavItem.eq(i).removeClass("item-reset");
        }, i * 200);
      });

      setTimeout(function () {
        mobileForm.removeClass("item-reset");
      }, 250);
    }
  });

  // Viewport Checking
  $.fn.checkViewport = function() {
    if ($(this).length) {
      let sectionTop = $(this).offset().top;
      let sectionBottom = sectionTop + $(this).outerHeight();
      let viewportTop = $(window).scrollTop();
      let viewportBottom = viewportTop + $(window).height();
  
      // 200px from the top and bottom of the section that's in the viewport
      return sectionBottom - 200 > viewportTop && sectionTop + 200 < viewportBottom;
    }
  };

  function scrollParallax(wScroll, winWidth, mediaSm) {
    heroSlideImg.css({
      top: `${wScroll / 6}px`,
    });

    locVideo.css({
      "margin-top": `${wScroll / 6}px`,
    });

    learnBannerImg.css({
      top: `${wScroll / 6}px`,
    });

    if (winWidth > mediaSm) {
      heroSlideContent.css({
        transform: `translate(-20%, -${80 + wScroll / 20}%)`,
      });
    } else {
      heroSlideContent.css({
        transform: `translate(-50%, -${60 + wScroll / 20}%)`,
      });
    }
  }

  function scrollReveal(wScroll) {
    if (arrivals.checkViewport()) {
      arrivals.css({
        transform: `translateY(-${wScroll / 16}px)`,
      });
    }

    if (serve.checkViewport()) {
      let classCheck = serveContent.hasClass("contentShown");

      if (!classCheck) serveContent.addClass("contentShown");
    } else serveContent.removeClass("contentShown");

    if (coffee.checkViewport()) {
      let classCheck = coffeeContent.hasClass("contentShown");

      if (!classCheck) coffeeContent.addClass("contentShown");
    } else coffeeContent.removeClass("contentShown");

    if (tech.checkViewport()) {
      let classCheck = techContent.hasClass("contentShown");

      if (!classCheck) techContent.addClass("contentShown");
    } else techContent.removeClass("contentShown");

    if (support.checkViewport()) {
      let classCheck = supportContent.hasClass("contentShown");

      if (!classCheck) supportContent.addClass("contentShown");
    } else supportContent.removeClass("contentShown");
  }

  $(window).on('scroll', function () {
    let wScroll = $(this).scrollTop();
    const winWidth = $(this).width();
    // const mediaMd = 768;
    const mediaSm = 480;

    scrollParallax(wScroll, winWidth, mediaSm);
    scrollReveal(wScroll);
  });

  // Carousel
  $(".hero__carousel").slick({
    dots: true,
    autoplay: true,
    arrows: false,
    fade: true,
    // pauseOnHover: false,
    infinite: true,
    speed: 1000,
    slidesToShow: 1,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
    ],
  });

  heroSlideContent.first().addClass("slideContentShown");

  $(".hero__carousel").on("afterChange", (event, slick, currentSlide) => {
    const classCheck = heroSlideContent.eq(currentSlide).hasClass("slideContentShown");

    if (!classCheck) {
      heroSlideContent.eq(currentSlide).addClass("slideContentShown");
      heroSlideContent.eq(currentSlide - 1).removeClass("slideContentShown");
    }
  });

  $(".arrivals__carousel").slick({
    arrows: false,
    infinite: false,
    speed: 300,
    slidesToShow: 3,
    slidesToScroll: 3,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 500,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
    ],
  });

  body.niceScroll({
    scrollspeed: 160,
  });
});

// Form Validation
let formProduct = document.querySelector(".product__form");
let allTextInput = document.querySelectorAll('input[class*="product__customerDetail"]');
let username = document.querySelector('[name="username"]');
let userphone = document.querySelector('[name="userphone"]');
let userlocality = document.querySelector('[name="userlocality"]');
let userpo = document.querySelector('[name="userpo"]');
let userps = document.querySelector('[name="userps"]');
let userdist = document.querySelector('[name="userdist"]');
let userstate = document.querySelector('[name="userstate"]');
let userpin = document.querySelector('[name="userpin"]');

// Regular Expression
const regExpNormal = new RegExp(/^[a-zA-Z]+/, 'g');
const regExpSpclChar = new RegExp(/[~`!@#$%^&()_={}[\]:;.<>+\/?-]+/, 'g');
const regExpAlpha = new RegExp(/^([a-zA-Z]+)(\s)([a-zA-Z]+)$/, 'g');
const regExpPhn = new RegExp(/^([0-9]{8,10})+$/, 'g');
const regExpZip = new RegExp(/^([0-9]{6})+$/, 'g');

function regExpValidate(elem, regExp, regExpSpcl) {
  const value = elem.value;
  if (value) {
    if (!value.match(regExp) || value.match(regExpSpcl)) {
      elem.style.border = `1px solid #f00`;
      return false;
    }
  } else {
    elem.style.border = `1px solid #f00`;
    return false;
  }

  elem.style.border = `1px solid #000`;
  return true;
}

// For general string validation
function validationString(elem) {
  return regExpValidate(elem, regExpNormal, regExpSpclChar);
}

// For username
function validationAlpha(elem) {
  return regExpValidate(elem, regExpAlpha, regExpSpclChar);
}

// For userphone
function validationPhn(elem) {
  return regExpValidate(elem, regExpPhn, regExpSpclChar);
}

// For userpin
function validationPin(elem) {
  return regExpValidate(elem, regExpZip, regExpSpclChar);
}

for (let i = 0; i < allTextInput.length; i++) {
  allTextInput[i].addEventListener("input", function() {
    switch(allTextInput[i].getAttribute('name')) {
      case 'username':
        validationAlpha(allTextInput[i]);
        break;
      case 'userphone':
        validationPhn(allTextInput[i]);
        break;
      case 'userlocality':
        validationString(allTextInput[i]);
        break;
      case 'userpo':
        validationString(allTextInput[i]);
        break;
      case 'userps':
        validationString(allTextInput[i]);
        break;
      case 'userdist':
        validationString(allTextInput[i]);
        break;
      case 'userstate':
        validationString(allTextInput[i]);
        break;
      case 'userpin':
        validationPin(allTextInput[i]);
        break;
    }
  });
}

formProduct.addEventListener("submit", function(e) {
  if (
    !validationAlpha(username) ||
    !validationPhn(userphone) ||
    !validationPin(userpin) ||
    !validationString(userlocality) ||
    !validationString(userpo) ||
    !validationString(userps) ||
    !validationString(userdist) ||
    !validationString(userstate)
  ) {
    console.log(e);
    e.preventDefault();
    alert("Please fill out the form correctly");
  } else {
    return true;
  }
});
