<?php

class LoginRoutes
{
  private UserService $userService;

  public function __construct(UserService $userService)
  {
    $this->userService = $userService;
  }

  public function login(): void
  {
    $data = json_decode(file_get_contents("php://input"));

    if (!isset($data->email) || !isset($data->name)) {
      http_response_code(400);
      echo json_encode(["error" => "Please provide email and name"]);
      return;
    }

    $user = new User(null, $data->name, $data->email);

    $user = $this->userService->loginOrRegister($user);

    echo json_encode($user);
  }
}

// Path: api/v1/auth/login.php

require_once __DIR__ . "/../../shared/database/database.php";
require_once __DIR__ . "/../../services/UserService.php";

$conn = connectDatabase();
$userService = new UserService($conn);
$loginRoutes = new LoginRoutes($userService);

$loginRoutes->login();
