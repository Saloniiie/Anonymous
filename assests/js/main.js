let navvv = document.getElementById("navbar");

window.onscroll = () => {
    if (window.pageYOffset > 200) {

        navvv.style.background = "#000000";
        navvv.style.boxShadow = "0px 4px 8px rgba(0,0,0,.5)";
    }
    else {
        navvv.style.background = "transparent";
        navvv.style.boxShadow = "none";
    }
}