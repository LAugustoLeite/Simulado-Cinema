var btn = document.getElementById('action-btn');
var container = document.querySelector('container');

btn.addEventListener("click", function(){

    var container = document.getElementById("container");

    if(container.style.display ==="none"){
        container.style.display = "inline-block";
    } else{
        container.style.display = "none";
    }

});