// var name ="WELCOME"
// alert(name);

document.getElementById("textChanger").onclick = function(){
    var textEnterd ="";
    textEnterd = document.getElementById("textInput").value;
    document.getElementById("text").innerHTML = textEnterd;
    
}