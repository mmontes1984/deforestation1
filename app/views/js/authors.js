import { Page } from "./page.js";

class Authors extends Page {
    constructor(page, { text, menus, inputs, buttons }) {
        super(page, text, menus, inputs, buttons);
    }


    init() {
        this.useLastLanguage(this.page)
        this.changeLanguage(this.page)

    }
}
const authorsAttributes = {
    text: {
        authorsHeader: document.querySelector("#authors-header"),
    },
}

const authors = new Authors("authors", authorsAttributes)

authors.init()