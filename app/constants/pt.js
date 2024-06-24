const defaults = {
    text: {
        title: "Deforestation",
        home: "Home",
        authors: "Autores",
        footerCopy: "&copy; 2024 Deforestation. Todos os direitos reservados.",       
    },
    menus: {
        dropDownTitle: "Linguagem",
    },
    inputs: {
        searchInput: "Buscar",
    },
    buttons: {}
}

export const pt = {
    home: {
        text: {
            ...defaults.text,
            heroHeader: "Bem-vindo ao nosso blog, aqui você pode ler e escrever posts sobre desmatamento",
            heroText: "Explore nossos artigos",
            heroButtonText: "Ver mais",
            lastPosts: "Últimas Postagens", 
            writePost: "Escrever post",
            postCard: "Ler mais"
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
            commentSection: "Comentários",
            commentHeader: "Adicionar comentário",
            comentNameField: "Nome",
            comentCommentField: "Comentário",
        },
        menus: {
            ...defaults.menus,
        },
        inputs: {
            ...defaults.inputs,
        },
        buttons: {
            comment: "Enviar Comentário",
        },
    },
    create: {
        text: {
            ...defaults.text,
            footerCopy: undefined,
            header: "Criar Post",
            image: "Imagem",
            title: "Titulo",
            content: "Conteúdo",
            createPostButton: "Criar"
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
            authorsHeader: "Sobre os autores",
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
