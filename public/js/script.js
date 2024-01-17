function toggleNavbarEffect() {
    const navbar = document.getElementById("navbar");
    if (window.scrollY > 0) {
      navbar.classList.add("scrolled");
    } else {
      navbar.classList.remove("scrolled");
    }
  }

  function toggleCart() {
    // Your cart toggle function
  }

  window.addEventListener("scroll", toggleNavbarEffect);

// Get the button
let mybutton = document.querySelector('.btn-arrow-atas');

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}

function toggleLike() {
  var likeButton = document.querySelector('.like');

  // Toggle class 'clicked'
  likeButton.classList.toggle('clicked');
}