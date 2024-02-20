
/* maybe later 

var menu = document.querySelector(".navbar");
var menuPosition = menu.offsetTop;

window.onscroll = function() {
    if (window.pageYOffset > menuPosition) {
      menu.classList.add("visible");
    } else {
      menu.classList.remove("visible");
    }
  };

*/

/*
const columns = document.getElementsByClassName('column');
const columnarray = Array.from(columns);
columnarray.forEach(col => {
  col.addEventListener('click', () =>{
    const paragraphs = col.querySelectorAll('p');
    paragraphs.forEach(paragraph => {
      paragraph.classList.add('visible')
    })
    col.style.width = 'calc(100vw/2)'
  })
});