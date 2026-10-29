const video = document.getElementById("bgVideo");
const muteBtn = document.getElementById("muteBtn");
const icon = muteBtn.querySelector("i");
const text = muteBtn.querySelector("h4");

/* initial state (video starts muted) */
video.muted = true;
icon.classList.remove("fa-volume-xmark");
icon.classList.add("fa-volume-high");
text.innerText = "Unmute";

muteBtn.addEventListener("click", () => {
    if (video.muted) {
        video.muted = false;
        icon.classList.remove("fa-volume-high");
        icon.classList.add("fa-volume-xmark");
        text.innerText = "Mute";
    } else {
        video.muted = true;
        icon.classList.remove("fa-volume-xmark");
        icon.classList.add("fa-volume-high");
        text.innerText = "Unmute";
    }
});
