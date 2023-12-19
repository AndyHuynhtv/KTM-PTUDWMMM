window.addEventListener("scroll", function () {
    const img = document.querySelector(".img-intro img");
    const offset = window.scrollY;
    img.style.transform = `translateY(${offset}px)`;
});

document.addEventListener("DOMContentLoaded", function () {
    const content1 = document.querySelector(".navbar-wine-content-1");
    const hoverContent1 = document.querySelector(".navbar-hover-c1");
    const hoverContent2 = document.querySelector(".navbar-hover-c2");

    hoverContent1.style.display = "none";
    hoverContent2.style.display = "none";

    content1.addEventListener("mouseenter", function (event) {
        event.stopPropagation();
        hoverContent1.style.display = "flex";
        hoverContent2.style.display = "none";

        document.addEventListener("click", function closeHover(event) {
            if (
                !hoverContent1.contains(event.target) &&
                !content1.contains(event.target)
            ) {
                hoverContent1.style.display = "none";
                hoverContent2.style.display = "none";
                document.removeEventListener("click", closeHover);
            }
        });
    });
});

document.addEventListener("DOMContentLoaded", function () {
    const content1 = document.querySelector(".navbar-wine-content-2");
    const hoverContent1 = document.querySelector(".navbar-hover-c1");
    const hoverContent2 = document.querySelector(".navbar-hover-c2");

    hoverContent1.style.display = "none";
    hoverContent2.style.display = "none";

    content1.addEventListener("mouseenter", function (event) {
        event.stopPropagation();
        hoverContent2.style.display = "flex";
        hoverContent1.style.display = "none";

        document.addEventListener("click", function closeHover(event) {
            if (
                !hoverContent1.contains(event.target) &&
                !content1.contains(event.target)
            ) {
                hoverContent1.style.display = "none";
                hoverContent2.style.display = "none";
                document.removeEventListener("click", closeHover);
            }
        });
    });
});

document.addEventListener("DOMContentLoaded", function () {
    const group1 = document.getElementById("group-1");
    const group2 = document.getElementById("group-2");
    const switchButton = document.querySelector(".btn-group-1");
    switchButton.addEventListener("click", function (event) {
        event.preventDefault();
        group1.style.display = "block";
        group2.style.display = "none";
    });
});

document.addEventListener("DOMContentLoaded", function () {
    const group1 = document.getElementById("group-1");
    const group2 = document.getElementById("group-2");
    const switchButton = document.querySelector(".btn-group-2");
    switchButton.addEventListener("click", function (event) {
        event.preventDefault();
        group1.style.display = "none";
        group2.style.display = "block";
    });
});
