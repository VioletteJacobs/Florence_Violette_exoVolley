require('./bootstrap');


TweenMax.from("#welcome_div", 3,{
    delay :2.5,
    opacity: 0,
    x:+250,
    ease:Expo.easeInOut,
})