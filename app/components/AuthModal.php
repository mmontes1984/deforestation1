<?php

function AuthModal() {
    return "<div id='auth-modal-container'>
    <div id='auth-modal'>
        <div>
            <div>
                <h4>Você precisa ter uma conta para realizar essa ação</h4>
            </div>
            <!-- Modal Body -->
            <div class='modal-body'>
                <form id='contactForm'>
                    <div class='form-group'>
                        <label for='name'>Nome:</label>
                        <input type='text' class='form-control' id='name' placeholder='Digite seu nome' required>
                    </div>
                    <div class='form-group'>
                        <label for='email'>Email:</label>
                        <input type='email' class='form-control' id='email' placeholder='Digite seu email' required>
                    </div>
                    <div id='auth-modal-buttons'>
                        <button type='submit' class='btn btn-success' style='background-color: #053525; border-color: #053525;'>Enviar</button>
                        <button type='button' class='btn btn-danger' id='close-auth-modal'>Fechar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
";
}

?>