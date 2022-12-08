document.getElementById("btn").onclick = function(){
    var randomnumber = Math.random();
    randomnumber =randomnumber * 6;
    randomnumber = Math.floor(randomnumber);
    if(document.getElementById("guess").value == randomnumber){
        alert("congratulations");

    }else{
        alert("nope the ans is :" + randomnumber);
    }
}