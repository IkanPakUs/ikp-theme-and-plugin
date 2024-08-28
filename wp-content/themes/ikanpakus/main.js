const initMenus = (menu_items) => {
    menu_items.forEach((item) => {
        const sub_menu = item.querySelector("ul");

        if (sub_menu != null) {
            item.addEventListener("mouseover", (e) => {
                sub_menu.classList.add("show");
            })

            item.addEventListener("mouseleave", () => {
                sub_menu.classList.remove("show")
            })

            sub_menu.addEventListener("mouseleave", () => {
                sub_menu.classList.remove("show")
            })
        }
    })
}

document.addEventListener("DOMContentLoaded", () => {
    const menu_items = document.querySelectorAll(".ikp-content__menu .menu-item")

    initMenus(menu_items)
})