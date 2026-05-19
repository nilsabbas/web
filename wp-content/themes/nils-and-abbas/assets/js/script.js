// Search box show
var searchlogo = document.querySelectorAll(".na-header__search-logo");
var searchbox = document.querySelectorAll(".na-header__search-box");
var headerlogo = document.querySelector(".navbar-brand");
const searchclick = () => {
  searchlogo.forEach((item, index) => {
    item.addEventListener("click", (e) => {
      e.preventDefault();
      searchbox[index].classList.toggle("show");
      headerlogo.classList.toggle("na-logo-hide");
    });
  });
};

searchclick();

// header sticky
$(window).scroll(function () {
  if ($(this).scrollTop() > 20) {
    $(".na-header").addClass("na-header--sticky");
  } else {
    $(".na-header").removeClass("na-header--sticky");
  }
  var alterClass = function () {
    var ww = document.body.clientWidth;
    if (ww < 1199) {
      $(".na-header").removeClass("na-header--sticky");
    }
  };
});
// sticky header on pagescrolling
window.addEventListener("load", () => {
  function navscroll() {
    if ($(this).scrollTop() > 20) {
      $(".na-header").addClass("na-header--sticky");
    } else {
      $(".na-header").removeClass("na-header--sticky");
    }
  }
  navscroll();
});
// hamburg menu bg
var hamburglogo = document.querySelector(".navbar-toggler");
var menubg = document.querySelector(".na-header");

if (hamburglogo) {
  hamburglogo.addEventListener("click", () => {
    menubg.classList.toggle("header-bg");
    // console.log("sdfdfhgfhdg");
  });
}


// prevent closing of datepicker (filter) on click inside
const datepicker = document.querySelectorAll(".dropdown-menu");

datepicker?.forEach((datepicker) => {
  datepicker.addEventListener("click", (e) => {
    if (datepicker.classList.contains("show")) {
      e.target.tagName !== "BUTTON" && e.stopPropagation();
    }
  });
})

function removeshow() {
  menu_item.forEach((e) => {
    e.classList.remove('show');
  })
}

const menu_item = document.querySelectorAll('.na-navmain');

if (window.innerWidth < 600) {
  menu_item.forEach((e) => {
    e.addEventListener('click', (item) => {
      item.preventDefault();
      console.log(e);
      if (!e.classList.contains('show')) {
        removeshow();
        e.classList.add('show');
      } else {
        e.classList.remove('show');
      }
    })
  })
}



// onload accordion collapse
const accordionButton = document.querySelectorAll(
  ".na-footer_acrdn .accordion-button"
);
const accordionCnt = document.querySelectorAll(
  ".na-footer_acrdn .accordion-collapse"
);
window.addEventListener("load", () => {
  if (window.innerWidth < 767) {
    accordionButton.forEach((e) => {
      e.classList.add("collapsed");
    });
    accordionCnt.forEach((e) => {
      e.classList.remove("show");
    });
  } else {
    accordionButton.forEach((e) => {
      e.classList.remove("collapsed");
    });
    accordionCnt.forEach((e) => {
      e.classList.add("show");
    });
  }
});


// Articles & Blog Posts
$(".na-Ablogs-slide").slick({
  dots: false,
  infinite: false,
  // speed: 500,
  slidesToShow: 3,
  slidesToScroll: 1,
  prevArrow: null,
  nextArrow: null,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
});

// Home banner
$(".na-banner__outer").slick({
  dots: true,
  infinite: true,
  autoplay: true,
  speed: 800,
  slidesToShow: 1,
  slidesToScroll: 1,
  prevArrow: null,
  nextArrow: null,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
});

// CLIENT
$(".na-client").slick({
  dots: false,
  centerMode: true,
  infinite: true,
  autoplay: true,
  autoplaySpeed: 2000,
  slidesToShow: 5,
  slidesToScroll: 1,
  prevArrow: null,
  nextArrow: null,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 1,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
});


// OUR PRODUCTS
$(".na-OurProduct__slick").slick({
  dots: true,
  infinite: false,
  // speed: 500,
  slidesToShow: 2,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
});


if (document.body.classList.contains("single-products")) {
  const Movers = document.querySelectorAll(".na-proslide__img");
  const Buttons = document.querySelectorAll(".na-proslide__list-items");

  let currentMoverIndex = 0;

  // Function to update the visible mover and button
  const updateVisibleMover = (index) => {
    // Remove 'show' class from all movers and buttons
    Movers.forEach((mover) => {
      mover.classList.remove("show");
    });
    Buttons.forEach((btn) => {
      btn.classList.remove("show");
    });

    // Add 'show' class to the current mover and button
    Movers[index].classList.add("show");
    Buttons[index].classList.add("show");
  };

  // Initialize the first mover and button as visible
  updateVisibleMover(currentMoverIndex);

  function arrowLeft() {
    currentMoverIndex = (currentMoverIndex - 1 + Movers.length) % Movers.length;
    updateVisibleMover(currentMoverIndex);
  }

  function arrowRight() {
    currentMoverIndex = (currentMoverIndex + 1) % Movers.length;
    updateVisibleMover(currentMoverIndex);
  }

  // Loop through each button and add an event listener
  Buttons.forEach((button, index) => {
    button.addEventListener("click", () => {
      currentMoverIndex = index;
      updateVisibleMover(currentMoverIndex);
    });
  });

  // Product table
  const ShowTable = document.querySelector(".na-producttable");
  const CTA = document.querySelector(".na-pdtbrochure__readmore");

  if (ShowTable && CTA) {
    CTA.addEventListener("click", () => {
      // console.log(ShowTable);
      ShowTable.classList.toggle("show");
    });
  }
}





// Geta Quote- get page URL ----
document.addEventListener('DOMContentLoaded', function() {
  var urlField = document.querySelector('input[id="wpforms-3001-field_4"]'); // Replace "page_url" with the name attribute of your hidden field
  if (urlField) {
      urlField.value = window.location.href;
  }
});

// Geta Quote- get page URL ----