
// NAV-LINK

document.addEventListener("DOMContentLoaded", function () {
    const links = document.querySelectorAll(".nav-link");
    const currentUrl = window.location.href;

    links.forEach(function (link) {
        if (currentUrl.includes(link.href)) {
            link.style.backgroundColor = "#08ac04";
            link.style.borderRadius = "25px";
            link.style.width = "90%";
            link.style.fontWeight = "bold";
            link.querySelector(".sb-nav-link-icon").style.setProperty("color", "white", "important");
            link.style.setProperty("color", "white", "important");         
        }
    });
});
