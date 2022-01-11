<template>
  <div class="align-center pt-3">
           <img src="/image/neutral.png" id="indicator" class="img-size">
  </div>
</template>

<script>
export default{

mounted(){
var movement = [
    '/image/neutral.png',
    '/image/up-arrow.png',
    '/image/down-arrow.png',
    '/image/left-arrow.png',
    '/image/right-arrow.png'
];

document.addEventListener('touchmove', handleTouchMove, false);
document.addEventListener('touchstart', handleTouchStart, false);        


var xDown = null;                                                        
var yDown = null;

function getTouches(evt) {
  return evt.touches || evt.originalEvent.touches; 
}                                                     
                                                                         
function handleTouchStart(evt) {
    const firstTouch = getTouches(evt)[0];                                      
    xDown = firstTouch.clientX;                                      
    yDown = firstTouch.clientY;                                      
};                                                
                                                                         
function handleTouchMove(evt) {
    if ( ! xDown || ! yDown ) {
        return;
    }

    var xUp = evt.touches[0].clientX;                                    
    var yUp = evt.touches[0].clientY;

    var xDiff = xDown - xUp;
    var yDiff = yDown - yUp;
                                                                         
    if ( Math.abs( xDiff ) > Math.abs( yDiff ) ) {
        if ( xDiff > 0 ) {
            /* right swipe */ 
            document.getElementById("indicator").src = movement[3];
        } else {
            /* left swipe */
            document.getElementById("indicator").src = movement[4];
        }                       
    } else {
        if ( yDiff > 0 ) {
            /* down swipe */
            document.getElementById("indicator").src = movement[1];
          
        } else { 
            /* up swipe */
            document.getElementById("indicator").src = movement[2];

        }                                                                 
    }
    /* clear values */
    xDown = null;
    yDown = null;                                             
};
    }
}
</script>
