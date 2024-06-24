const defaults = {
    text: {
        title: "Deforestation",
        home: "Home",
        authors: "Authors",
        footerCopy: "&copy; 2024 Deforestation, all rights reserved.",
    },
    menus: {
        dropDownTitle: "Language",
    },
    inputs: {
        searchInput: "Search",
    },
    buttons: {}
};
export const en = {
    home: {
        text: {
            ...defaults.text,
            heroHeader: "Welcome to our blog, here you can read and write posts abou deforestation",
            heroText: "Explore our articles",
            heroButtonText: "See more",
            lastPosts: "Last Posts", 
            writePost: "write post",
            postCard: "Read more"
        },
        menus: {
            ...defaults.menus,
        },
        inputs: {
            ...defaults.inputs,
        },
    },
    post: {
        text: {
            ...defaults.text,
            commentSection: "Comments",
            commentHeader: "Add a comment",
            comentNameField: "Name",
            comentCommentField: "Comment",
        },
        menus: {
            ...defaults.menus,
        },
        inputs: {
            ...defaults.inputs,
        },
        buttons: {
            comment: "Send Comment",
        },
    },
    create: {
        text: {
            ...defaults.text,
            header: "Create Post",
            image: "Image",
            title: "Title",
            content: "Content",
            createPostButton: "Create"
        },
        menus: {
            ...defaults.menus,
        },
        inputs: {
            ...defaults.inputs,
        },
        buttons: {
            ...defaults.buttons,
        },
    },
    authors: {
        text: {
            ...defaults.text,
            footerCopy: undefined,
            authorsHeader: "About the autors",
        },
        menus: {
            ...defaults.menus,
        },
        inputs: {
            ...defaults.inputs,
        },
        buttons: {
            ...defaults.buttons,
        },
    }
};
