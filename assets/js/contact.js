document.addEventListener("DOMContentLoaded", function () {

    const section = document.querySelector("#contact-section");

    if(window.location.hash === "#contact-section"){
        section.scrollIntoView({
            behavior: "smooth"
        });
    }

});