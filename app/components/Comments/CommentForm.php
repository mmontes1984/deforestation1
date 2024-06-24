<?php

function CommentForm() {
    return "
    <form id='commentForm'>
        <h5 style='color: #053525;'>Adicionar comentário</h5>  
        <div class='form-group'>
            <label for='commentName' style='color: #053525;'>Nome</label>
            <input type='text' class='form-control' id='commentName' required>
        </div>
        <div class='form-group'>
            <label for='commentText' style='color: #053525;'>Comentário</label>
            <textarea class='form-control' id='commentText' rows='3' required></textarea>
        </div>
        <button type='button' id='submitComment' class='btn btn-success' style='background-color: #053525; border-color: #053525;'>Enviar Comentário</button>
    </form>";
}

?>
