import { Page } from "./page.js";

class CreatePost extends Page {
    constructor(page, { text, menus, inputs, buttons }) {
        super(page, text, menus, inputs, buttons);
    }

    async init() {
        this.useLastLanguage(this.page)
        this.changeLanguage(this.page)

    }
}

const createPostAttributes = {
    text: {
        header: document.querySelector("#create-post-header"),
        image: document.querySelector('label[for="image"]'),
        title: document.querySelector('label[for="title"]'),
        content: document.querySelector('label[for="content"]'),
        createPostButton: document.querySelector("#create-post-button")
    },
};

const createPost = new CreatePost("create",createPostAttributes);

createPost.init();
