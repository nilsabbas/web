$('#owl-carousel').owlCarousel({
    loop: true,
    margin: 30,
    dots: false,
    autoplay: true,
    autoplayTimeout: 10000, // Initial autoplay duration of 10 seconds
    nav: true,
    items: 2,
    responsive: {
        0: { items: 1 },
        768: { items: 2 },
        1000: { items: 2 }
    }
}).on('click', '.owl-nav button', function() {
    var owl = $('#owl-carousel').data('owl.carousel');
    owl.settings.autoplayTimeout = 10000; // Reset autoplay duration to 10 seconds
    owl.trigger('stop.owl.autoplay');
    owl.trigger('play.owl.autoplay', [10000]);
});

//Contact page toggle button-sh** 
document.addEventListener('DOMContentLoaded', function () {
const buttons = {
  btn1: 'section1',
  btn2: 'section2',
  btn3: 'section3',
  btn4: 'section4'
};

Object.keys(buttons).forEach(btnId => {
  const btn = document.getElementById(btnId);
  if (btn) {
    btn.addEventListener('click', () => {
      // Hide all content sections
      document.querySelectorAll('.custom-toggle-section').forEach(sec => {
        sec.style.display = 'none';
      });

      // Remove active class from all buttons
      Object.keys(buttons).forEach(id => {
        const otherBtn = document.getElementById(id);
        if (otherBtn) {
          otherBtn.classList.remove('button-active');
        }
      });

      // Show the selected section
      const section = document.getElementById(buttons[btnId]);
      if (section) {
        section.style.display = 'block';
      }

      // Add active class to clicked button
      btn.classList.add('button-active');
    });
  }
});

// Set initial active button (btn1)
document.getElementById('btn1')?.classList.add('button-active');
});