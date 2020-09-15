function jrt(){
    var date = new Date();
    var h = date.getHours(); 
    var m = date.getMinutes(); 
    var s = date.getSeconds(); 
    
    h = (h < 10) ? "0" + h : h;
    m = (m < 10) ? "0" + m : m;
    s = (s < 10) ? "0" + s : s;
    
    var time = h + ":" + m + ":" + s;
    document.getElementById("jamdigital").innerText = time;
    document.getElementById("jamdigital").textContent = time;
    
    setTimeout(jrt, 1000);
    
}
 
jrt();

var modal = document.getElementById("modalhello");
var button = document.getElementById("klikmodal");
var close = document.getElementsByClassName("close")[0];

button.onclick = function(){
    modal.style.display = "block";
}
close.onclick = function(){
    modal.style.display = "none";
    
}

window.onclick = function(event){
    if (event.target == modal) {
        modal.style.display = "none";
    }
}




