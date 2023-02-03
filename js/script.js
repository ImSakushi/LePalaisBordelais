const cards = document.querySelectorAll('.card.border-0');

cards[0].addEventListener('click', function(e) {
  e.preventDefault();
  window.open('https://www.youtube.com/', '_blank');
});

cards[1].addEventListener('click', function(e) {
  e.preventDefault();
  window.open('https://www.google.com/', '_blank');
});

const searchBtn = document.querySelector('.btn-search');
const searchBar = document.querySelector('.search-bar');
const ampouleBtn = document.querySelector('.dark-mode-container');
const footer = document.querySelector('footer');
const ampouleImg = document.querySelector('#ampoule');

searchBtn.addEventListener('click', function() {
  searchBar.classList.toggle('active');
  ampouleBtn.classList.toggle('active');
});


ampouleBtn.addEventListener('click', function() {
  document.body.classList.toggle('dark-mode');
  footer.classList.toggle('dark-mode');
  
  if (ampouleImg.getAttribute("src") === "/images/ampoule-off.svg") {
    ampouleImg.setAttribute("src", "/images/ampoule-on.svg");
  } else {
    ampouleImg.setAttribute("src", "/images/ampoule-off.svg");
  }
});
