export class PostsRepository {
    async createComment(post, userId) {
        try {
            const posts = await fetch(`http://localhost:80/api/posts/${id}`, {
                method: "POST",
                body: JSON.stringify(post),
            });

            return posts;
        } catch (err) {
            console.log(err);
        }
    }
}
