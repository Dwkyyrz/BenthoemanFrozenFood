const navbarscroll = document.querySelector('.navbar');
// const menuscroll = document.querySelector('.list-menu');

window.addEventListener('scroll',() => {
  if (window.scrollY > 50) {
    navbarscroll.classList.add("nav-scrolled");
    // menuscroll.classList.add("list-scrolled");
  } else if (window.scrollY <= 50) {
    navbarscroll.classList.remove("nav-scrolled");
    // menuscroll.classList.remove("list-scrolled");
  }
})