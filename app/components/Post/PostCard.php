<?php 

function PostCard( int $id, string $title, string $description, string $imageUrl ) {
    return "<div class='card mb-3'>
                <img src='".$imageUrl."' class='card-img-top' alt='...' />
                <div class='card-body'>
                    <h5 class='card-title'>". $title ."</h5>
                    <p class='card-text'>
                        ".$description."
                    </p>
                    <a href='post.php?id=".$id."' class='btn btn-success post-button' >Leia mais</a>
                </div>
            </div>";
}


