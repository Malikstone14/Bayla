var checkbox = document.querySelector("input[name=photo]");
var editphoto = document.getElementById('editphoto');


checkbox.addEventListener('change', function() {
    console.log('cc');
        if (this.checked){
        editphoto.style.display = "block";
        }else{
        editphoto.style.display = "none";
        }
     })


window.addEventListener('load', function () {
    if (this.screen.width < 500) {
        if (this.window.location.search != "?media=mobile")
            this.window.location.search = "?media=mobile";

        console.log("coucou1");
    }
    else {
        if (this.window.location.search == "?media=mobile")
            this.window.location.search = "";
    }
})