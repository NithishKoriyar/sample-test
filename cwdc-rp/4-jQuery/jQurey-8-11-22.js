$("#btn1").click(function(){
    // setTimeout(function(){
    //     $("#circle1").css("display","none");
    // },1000);
    // setTimeout(function(){
    //     $("#circle2").css("display","none");
    // },1500);
    // setTimeout(function(){
    //     $("#circle3").css("display","none");
    // },2000);
    // setTimeout(function(){
    //     $("#circle4").css("display","none");
    // },2500);
    // setTimeout(function(){
    //     $("#circle5").css("display","none");
    // },3000);
   
    


    for (let i = 0; i <= 5; i++) {
        setTimeout(function () {
            $("#circle" + i).css("display", "none");

        }, 1000 * i);

    }  
   });

   
   $("#btn2").click(function(){
      for(let i=0;i<=5;i++){
        setTimeout(function(){
            $("#circle"+i).css("display","block");
            
        },100*i);
        
    }
});

