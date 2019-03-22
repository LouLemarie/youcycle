var line1 = $('#env-line-1');
var line2 = $('#env-line-2');
var line3 = $('#env-line-3');
var mailIcon = $('#mail-icon');
var envLid = $('#env-lid');
var envPaper = $('#env-paper');



var tl = new TimelineLite({
    paused:true,
});

TweenLite.defaultEase = Back.easeOut;

tl
    .to(envLid, 0.3, {
            scaleY:-1,
            y: 1.5,
        }
    )
    .fromTo(envPaper, 0.4, {
        transformOrigin: "50% 100%",
        scaleY:0,
    },{
        scaleY: 1,
    }, "=-0.25")
    .staggerFromTo([line1, line2, line3], 0.3, {
        transformOrigin: "50% 50%",
        scaleX: 0
    },{
        scaleX: 1,
    },	-0.09)



$(mailIcon).click(function(){

    if ( $(this).hasClass('toggled') ) {
        tl.reverse();
    }

    else {
        tl.play();
    }

    $(this).toggleClass('toggled');

});