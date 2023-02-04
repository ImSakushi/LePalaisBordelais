const cards = document.querySelectorAll('.card.border-0');
const searchBtn = document.querySelector('.btn-search');
const searchBar = document.querySelector('.search-bar');
const ampouleBtn = document.querySelector('.dark-mode-container');
const footer = document.querySelector('footer');
const ampouleImg = document.querySelector('#ampoule');

cards[0].addEventListener('click', function(e) {
  window.open('https://www.youtube.com/', '_blank');
});

cards[1].addEventListener('click', function(e) {
  window.open('https://www.google.com/', '_blank');
});


searchBtn.addEventListener('click', function() {
  searchBar.classList.toggle('active');
  ampouleBtn.classList.toggle('active');
});


ampouleBtn.addEventListener('click', function() {
  if (ampouleImg.getAttribute("src") == "../../source/images/ampoule-off.svg") {
    ampouleImg.setAttribute("src", "../../source/images/ampoule-on.svg");
  } else {
    ampouleImg.setAttribute("src", "../../source/images/ampoule-off.svg");
  }
  document.body.classList.toggle('dark-mode');
  footer.classList.toggle('dark-mode');

});
