document.getElementById("checkMagicWord").onclick = function(){
    var magicworldEnterd = document.getElementById("magicWorld").value;
    var magicword= "Nithish";
    if(magicworldEnterd == magicword){
        alert("congratulations")
    }
    else{
        alert("nope try again")
    }
}
