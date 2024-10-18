function toggleNavMenu() {
    const navMenu = document.getElementById("navMenu");
    if (navMenu.classList.contains("translate-x-[100%]")) {
        navMenu.classList.remove("translate-x-[100%]");
        navMenu.classList.add("translate-x-0");
    } else {
        navMenu.classList.remove("translate-x-0");
        navMenu.classList.add("translate-x-[100%]");
    }
}
