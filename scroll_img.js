const images= document.querySelectorAll('.image');
const namecontent= document.querySelectorAll('.name');
const logocontent= document.querySelectorAll('.founder-logos');
const callcontent= document.querySelectorAll('.call-logo');
const foundercontent= document.querySelectorAll('.founder h1');
const coordinatorcontent= document.querySelectorAll('.coordinator-18');
const corecontent= document.querySelectorAll('.core-team h1');
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
      if (scrollTop + window.innerHeight > elemOffset.top + element.offsetHeight) {
        element.classList.add(animation);
      }
  })
};
showElements(0,namecontent, 'animatename');
showElements(0,logocontent, 'animatelogo');
showElements(0,callcontent, 'animatecall');
showElements(0,foundercontent, 'animatefounder');
showElements(0,coordinatorcontent, 'animatecoordinator');
showElements(0,corecontent, 'animatecore');
const revealImages=(scrollTop) =>{
  images.forEach(image =>{
    if(scrollTop +window.innerHeight >image.offsetTop+ image.offsetHeight ){
      image.classList.add('reveal');
    }
  });
}
revealImages(0);
window.addEventListener('scroll', () =>{
  const scrollTop= window.scrollY;
  revealImages(scrollTop);
  showElements(scrollTop, namecontent, 'animatename');
  showElements(scrollTop, logocontent, 'animatelogo');
  showElements(scrollTop, callcontent, 'animatecall');
  showElements(scrollTop,foundercontent, 'animatefounder');
  showElements(scrollTop,coordinatorcontent, 'animatecoordinator');
  showElements(scrollTop,corecontent, 'animatecore');
})
