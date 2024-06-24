import { Events } from "../../utils/Event.js";
import { LocalStorage } from "../../utils/LocalStorage.js";
import { Page } from "./page.js";
import { Language } from "../../utils/Language.js";
import { lang } from "../../constants/lang.js";

class Post extends Page {
    constructor(page, { text, menus, inputs, buttons }) {
        super(page, text, menus, inputs, buttons);
    }

    closeAuthModal() {
        const modalContainer = document.querySelector("#auth-modal-container")

        modalContainer.classList.toggle("show")
    }

    init() {
        this.useLastLanguage(this.page)
        this.changeLanguage(this.page)

        const submitButton = document.querySelector("#submitComment");
        const closeAuthModal = document.querySelector("#close-auth-modal")


        Events.setEvents("click", closeAuthModal, this.closeAuthModal);
        Events.setEvents("click", submitButton, this.writeComment);

     
    }

    writeComment() {
        const token = LocalStorage.get("auth");

        if (!token) {
            const modalContainer = document.querySelector("#auth-modal-container")

            modalContainer.classList.toggle("show")
        }
    }
}

const postAttributes = {
    text: {
        commentSection: document.querySelector(".card-body > h5"),
        commentHeader: document.querySelector("#commentForm > h5"),
        comentNameField: document.querySelector('label[for="commentName"]'),
        comentCommentField: document.querySelector('label[for="commentText"]'),
    },
    buttons: {
        comment: document.querySelector("#submitComment"),
    },
};

const post = new Post("post", postAttributes);

post.init();
