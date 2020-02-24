const snapscontent= document.querySelectorAll('.snaps h1');
const contactcontent= document.querySelectorAll('.contact');
const images= document.querySelectorAll('.pic1 img');
const paracontent= document.querySelectorAll('.paras');
var cumulativeOffset = function(element) {
    var top = 0, left = 0;
    do {
        top += element.offsetTop ||0 ;
        left += element.offsetLeft||0;
        element = element.offsetParent;
    } while(element);

    return {
        top: top,
        left: left
    };
};

const showElements = (scrollTop, elements, animation) => {
  elements.forEach((element, i) => {
    const elemOffset = cumulativeOffset(element);
      if (scrollTop + window.innerHeight > elemOffset.top ) {
        element.classList.add(animation);
      }
  })
};
const revealImages=(scrollTop) =>{
  images.forEach(image =>{
    if(scrollTop +window.innerHeight >image.offsetTop+ image.offsetHeight ){
      image.classList.add('reveal');
    }
  });
}
revealImages(0);
showElements(0,snapscontent, 'animatesnaps');
showElements(0,contactcontent, 'animatecontact');
  showElements(0, paracontent, 'animate');
window.addEventListener('scroll', () =>{
  const scrollTop= window.scrollY;
  revealImages(scrollTop);
    showElements(scrollTop, paracontent, 'animate');
  showElements(scrollTop,snapscontent, 'animatesnaps');
  showElements(scrollTop,contactcontent, 'animatecontact');
})
