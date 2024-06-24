<?php
function Navbar() {
    return "<nav class='navbar navbar-expand-lg navbar-light' style='background-color: #edeee8;'>
        <div class='container'>
            <a class='navbar-brand' href='/deforestation/app/views'>
                <img src='static/mawiza.png' alt='Logo' style='height: 30px; margin-right: 10px;'>
            </a>
            <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarNav' aria-controls='navbarNav' aria-expanded='false' aria-label='Toggle navigation'>
                <span class='navbar-toggler-icon'></span>
            </button>
            <div class='collapse navbar-collapse' id='navbarNav'>
                <ul class='navbar-nav ml-auto'>
                    <li class='nav-item active'>
                        <a class='nav-link' id='home-link' href='/deforestation/app/views' style='color: #053525; font-weight: 600;'>Home <span class='sr-only'>(current)</span></a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link' href='/deforestation/app/views/authors.php' id='authors-link' style='color: #053525; font-weight: 600;'>Autores</a>
                    </li>
                    <li class='nav-item'>
                        <div class='dropdown'>
                            <a class='nav-link dropdown-toggle' role='button' id='dropdownMenuLink' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false' style='color: #053525; font-weight: 600;'>
                                Linguagem
                            </a>
                            <div class='dropdown-menu' id='dropDown' aria-labelledby='dropdownMenuLink'>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>";
}
?>

