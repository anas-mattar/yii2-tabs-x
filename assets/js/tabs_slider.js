/**
 * Created by Anas Mattar on 17/10/2017.
 */

var index=0;
var positionLeft=0;
$('.left').click(function(){
    if(index != 0) {
        index--;
        positionLeft = parseFloat(positionLeft) + parseFloat(stopPosition);
        $("ul.nav-tabs").animate({left: positionLeft});
    }
});
$('.right').click(function(){
    if(counterSlider>=index) {
        positionLeft = parseFloat(positionLeft) - parseFloat(stopPosition);
        $("ul.nav-tabs").animate({left: positionLeft});
        index++;
    }

});
function initSLider() {
    positionLeft = 0;
    index = 0;
    $("ul.nav-tabs").animate({left: positionLeft});
}