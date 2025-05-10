var GUI = (function () {
  var menu = function () {
    var menuCategoryFixed = document.querySelector(".menu-category-fixed")
    if (menuCategoryFixed)
    {
      document.querySelector(".toggle-menu-category-fixed").addEventListener("click", function () {
        menuCategoryFixed.classList.toggle("active")
        document.body.classList.toggle("no-scroll")
      })
      var menuItems = menuCategoryFixed.querySelectorAll(
        ".menu-container ul li"
      );
      menuItems.forEach(function (menuItem) {
        var submenu = menuItem.querySelector("ul");
        if (submenu)
        {
          var span = document.createElement("span");
          span.className = "toggle-show-menu-item";
          span.innerHTML = '<i class="fa-solid fa-angle-down"></i>';
          span.addEventListener("click", function () {
            slideToggle(submenu, 400)
            span.classList.toggle("active");
          });
          menuItem.appendChild(span);
        }
      });
    }
  }

  var fixedHeader = function () {

  }

  var runWowJS = function () {
    if (document.querySelector(".wow"))
    {
      new WOW().init({
        mobile: true
      })
    }
  }

  return {
    _: function () {
      menu()
      fixedHeader()
      runWowJS()
    },
  }
})()

var SLIDER = (function () {
  var sliderBannerHome = function () { }

  var sliderListCatNews = function () {
    var allSlideCatNews = document.querySelectorAll(".swiper-list-cat-news")
    if (allSlideCatNews.length > 0)
    {
      allSlideCatNews.forEach(function (element) {
        new Swiper(element.querySelector(".swiper"), {
          slidesPerView: 'auto',
          spaceBetween: 20,
          navigation: {
            nextEl: element.querySelector(".btn-next-cat-news"),
            prevEl: element.querySelector(".btn-prev-cat-news"),
          },
        })
      })
    }
  }

  return {
    _: function () {
      sliderBannerHome()
      sliderListCatNews()
    },
  }
})()

document.addEventListener("DOMContentLoaded", function () {
  setTimeout(function () {
    GUI._()
    SLIDER._()
  }, 100)
})

function slideToggle(element, duration = 300) {
  if (window.getComputedStyle(element).display === 'none')
  {
    return slideDown(element, duration);
  } else
  {
    return slideUp(element, duration);
  }
}

function slideUp(element, duration) {
  return new Promise(function (resolve) {
    element.style.height = element.offsetHeight + 'px';
    element.style.transitionProperty = 'height, margin, padding';
    element.style.transitionDuration = duration + 'ms';
    element.offsetHeight;
    element.style.overflow = 'hidden';
    element.style.height = 0;
    element.style.paddingTop = 0;
    element.style.paddingBottom = 0;
    element.style.marginTop = 0;
    element.style.marginBottom = 0;
    window.setTimeout(function () {
      element.style.display = 'none';
      element.style.removeProperty('height');
      element.style.removeProperty('padding-top');
      element.style.removeProperty('padding-bottom');
      element.style.removeProperty('margin-top');
      element.style.removeProperty('margin-bottom');
      element.style.removeProperty('overflow');
      element.style.removeProperty('transition-duration');
      element.style.removeProperty('transition-property');
      resolve(false);
    }, duration);
  });
}

function slideDown(element, duration) {
  return new Promise(function (resolve) {
    element.style.removeProperty('display');
    let display = window.getComputedStyle(element).display;
    if (display === 'none') display = 'block';
    element.style.display = display;
    let height = element.offsetHeight;
    element.style.overflow = 'hidden';
    element.style.height = 0;
    element.style.paddingTop = 0;
    element.style.paddingBottom = 0;
    element.style.marginTop = 0;
    element.style.marginBottom = 0;
    element.offsetHeight;
    element.style.transitionProperty = 'height, margin, padding';
    element.style.transitionDuration = duration + 'ms';
    element.style.height = height + 'px';
    element.style.removeProperty('padding-top');
    element.style.removeProperty('padding-bottom');
    element.style.removeProperty('margin-top');
    element.style.removeProperty('margin-bottom');
    window.setTimeout(function () {
      element.style.removeProperty('height');
      element.style.removeProperty('overflow');
      element.style.removeProperty('transition-duration');
      element.style.removeProperty('transition-property');
      resolve(true);
    }, duration);
  });
}