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