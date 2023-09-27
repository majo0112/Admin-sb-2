// NAV-LINK

document.addEventListener("DOMContentLoaded", function () {
    const links = document.querySelectorAll(".nav-link");
    const currentUrl = window.location.href;

    links.forEach(function (link) {
        if (currentUrl.includes(link.href)) {
            link.style.backgroundColor = "#6610f2";
            link.style.borderRadius = "25px";
            link.style.width = "70%";
            link.style.fontWeight = "bold";
            link.querySelector(".sb-nav-link-icon").style.setProperty("color", "white", "important");
            link.style.setProperty("color", "white", "important");         
        }
    });
});


document.addEventListener("DOMContentLoaded", function () {
    const preloader = document.querySelector('.preloader');

    
    preloader.style.position = 'fixed';
    preloader.style.top = '0';
    preloader.style.left = '0';
    preloader.style.width = '100%';
    preloader.style.height = '100%';
    preloader.style.display = 'flex';
    preloader.style.flexDirection = 'column';
    preloader.style.alignItems = 'center';
    preloader.style.justifyContent = 'center';
    preloader.style.backgroundColor = '#ffffff';
    preloader.style.zIndex = '9999';


    setTimeout(function () {
        preloader.style.display = 'none';
    }, 990); 
});
