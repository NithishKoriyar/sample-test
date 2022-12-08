// $("#circle1").click(function(){
//     $("#circle1").css("display", "none");
//     $("#circle2").css("display", "block");
//     $("#circle3").css("display", "block");
//     $("#circle4").css("display", "block");
//     $("#circle5").css("display", "block");

// });

// $("#circle2").click(function(){
//     $("#circle1").css("display", "block");
//     $("#circle2").css("display", "none");
//     $("#circle3").css("display", "block");
//     $("#circle4").css("display", "block");
//     $("#circle5").css("display", "block");

// });
 
// $("#circle3").click(function(){
//     $("#circle1").css("display", "block");
//     $("#circle2").css("display", "block");
//     $("#circle3").css("display", "none");
//     $("#circle4").css("display", "block");
//     $("#circle5").css("display", "block");

// });
 
// $("#circle4").click(function(){
//     $("#circle1").css("display", "block");
//     $("#circle2").css("display", "block");
//     $("#circle3").css("display", "block");
//     $("#circle4").css("display", "none");
//     $("#circle5").css("display", "block");

// });
 
// $("#circle5").click(function(){
//     $("#circle1").css("display", "block");
//     $("#circle2").css("display", "block");
//     $("#circle3").css("display", "block");
//     $("#circle4").css("display", "block");
//     $("#circle5").css("display", "none");

// });

// $("#circle1").click(function(){
//     $("#circle1").css("display", "none");
//     $("#circle2").css("display", "block");
//     $("#circle3").css("display", "block");
//     $("#circle4").css("display", "block");
//     $("#circle5").css("display", "block");

// });

// $("#circle2").click(function(){
//     $("#circle1").css("display", "block");
//     $("#circle2").css("display", "none");
//     $("#circle3").css("display", "block");
//     $("#circle4").css("display", "block");
//     $("#circle5").css("display", "block");

// });
 
$(".circle").click(function () {
    for(let i=1; i<=5; i++){
        if($(this).attr('id') == 'circle' + i )
            $(this).hide();
        else $('#circle' + i).show();
    }
});


