const defaults = {
    text: {
        title: "Deforestación",
        home: "Inicio",
        authors: "Autores",
        footerCopy: "&copy; 2024 Deforestación. Todos los derechos reservados.",       
    },
    menus: {
        dropDownTitle: "Idioma",
    },
    inputs: {
        searchInput: "Buscar",
    },
    buttons: {}
}

export const es = {
    home: {
        text: {
            ...defaults.text,
            heroHeader: "Bienvenido a nuestro blog, aquí puedes leer y escribir publicaciones sobre deforestación",
            heroText: "Explora nuestros artículos",
            heroButtonText: "Ver más",
            lastPosts: "Últimas Publicaciones", 
            writePost: "Escribir publicación",
            postCard: "Leer más"
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
            commentSection: "Comentarios",
            commentHeader: "Agregar comentario",
            comentNameField: "Nombre",
            comentCommentField: "Comentario",
        },
        menus: {
            ...defaults.menus,
        },
        inputs: {
            ...defaults.inputs,
        },
        buttons: {
            comment: "Enviar Comentario",
        },
    },
    create: {
        text: {
            ...defaults.text,
            footerCopy: undefined,
            header: "Crear Publicación",
            image: "Imagen",
            title: "Título",
            content: "Contenido",
            createPostButton: "Crear"
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
            authorsHeader: "Sobre los autores",
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
