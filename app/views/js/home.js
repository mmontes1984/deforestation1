import { lang } from "../../constants/lang.js";
import { Page } from "./page.js";
import { Events } from "../../utils/Event.js";
import { Language } from "../../utils/Language.js";
import { LocalStorage } from "../../utils/LocalStorage.js";

class Home extends Page {
    constructor(page, { text, menus, inputs, buttons }) {
        super(page, text, menus, inputs, buttons);
    }

    scrollToPosts() {
        const postContainer = document.querySelector("#posts-container");

        postContainer.scrollIntoView({
            behavior: "smooth",
        });
    }
    changePostsButtonText() {
        const posts = [...document.querySelectorAll(".post-button")] ?? [];

        const curr = LocalStorage.get("lang") ?? Language.getLanguage();

        posts.forEach((e) => {
            e.innerHTML = lang[curr].home.text.postCard;
        });
    }

    async init() {
        this.changePostsButtonText();
        this.useLastLanguage(this.page);
        this.changeLanguage(this.page, this.changePostsButtonText);

        const heroButton = document.querySelector("#hero-button");

        Events.setEvents("click", heroButton, this.scrollToPosts);
    }
}

const homeAttributes = {
    text: {
        lastPosts: document.querySelector("#last-posts"),
        writePost: document.querySelector("#write-post-anchor"),
        authors: document.querySelector("#authors-link"),
        heroHeader: document.querySelector("#hero-text > h1"),
        heroText: document.querySelector("#hero-text > p "),
        heroButtonText: document.querySelector("#hero-button"),
    },
};

const home = new Home("home", homeAttributes);

home.init();
