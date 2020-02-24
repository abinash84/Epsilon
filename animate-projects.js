const paracontent= document.querySelectorAll('.paras');
const essencecontent= document.querySelectorAll('.essence');
const snapscontent= document.querySelectorAll('.snaps');
const images= document.querySelectorAll('.pic1 img');
const contactcontent= document.querySelectorAll('.contact');
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
showElements(0,paracontent, 'animateparas');
showElements(0,essencecontent, 'animateessence');
showElements(0,snapscontent, 'animatesnaps');
showElements(0,contactcontent, 'animatecontact');
window.addEventListener('scroll', () =>{
  const scrollTop= window.scrollY;
  revealImages(scrollTop);
  showElements(scrollTop, paracontent, 'animateparas');
  showElements(scrollTop, essencecontent, 'animateessence');
  showElements(scrollTop, snapscontent, 'animatesnaps');
  showElements(scrollTop, contactcontent, 'animatecontact');
})
