import { LocalStorage } from "../../utils/LocalStorage.js";
import { lang } from "../../constants/lang.js";
import { Events } from "../../utils/Event.js";
import { Language } from "../../utils/Language.js";

export class Page {
    page;
    #text = {
        title: document.querySelector("#title"),
        home: document.querySelector("#home-link"),
        authors: document.querySelector("#authors-link"),
        footerCopy: document.querySelector("#footer-copy"),
    };
    #menus = {
        dropDownMenu: document.querySelector("#dropDown"),
        dropDownTitle: document.querySelector("#dropdownMenuLink"),
        dropDownMenuItems: document.querySelectorAll(".dropdown-item"),
    };
    #inputs = {
        searchInput: document.querySelector("#search"),
    };
    #buttons = {};

    constructor(page, text, menus, inputs, buttons) {
        this.page = page;
        this.#text = { ...this.text, ...text };
        this.#menus = { ...this.menus, ...menus };
        this.#inputs = { ...this.inputs, ...inputs };
        this.#buttons = { ...this.buttons, ...buttons };
    }

    init() {}

    useLastLanguage(page) {
        const lasUsedLang = LocalStorage.get("lang");

        if (lasUsedLang) {
            Language.setLanguage(
                this,
                lang[lasUsedLang][page] ?? lang.pt[page],
                lasUsedLang
            );

            return;
        }

        // const browserLang = Language.getLanguage();

        // Language.setLanguage(
        //     this,
        //     lang[browserLang][page] ?? lang.pt[page],
        //     lasUsedLang
        // );

        LocalStorage.set("lang", "pt");
    }

    changeLanguage(page, callback) {
        Object.keys(lang).map((v) => {
            this.menus.dropDownMenu.innerHTML += `
            <a class="dropdown-item" href="#">${
                v[0].toUpperCase() + v.slice(1)
            }</a>`;
        });

        this.menus.dropDownMenuItems = [
            ...document.querySelectorAll(".dropdown-item"),
        ];

        for (const el of this.menus.dropDownMenuItems) {
            Events.setEvents("click", el, () => {
                Language.setLanguage(
                    this,
                    lang[el.innerHTML.toLowerCase()][page] ?? lang.pt[page],
                    el.innerHTML.toLowerCase()
                );

                callback?.();
            });
        }
    }

    get text() {
        return this.#text;
    }

    get inputs() {
        return this.#inputs;
    }

    get menus() {
        return this.#menus;
    }

    get buttons() {
        return this.#buttons;
    }
}
