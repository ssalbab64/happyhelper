<?php

class FrontController {
    
    private $db;

    private $errorMessage = "";

    // Constructor
    public function __construct($get, $post) {        
        $this->db = new Database();
        $this->input = array_merge($get, $post);
        $this->requestMethod = $_SERVER['REQUEST_METHOD'];
    }

    // Default run
    // init handlers based on GET param
    public function run() {
        // Get the command
        $selector = "home";
        if (isset($this->input["selector"]))
            $selector = $this->input["selector"];
        
        switch($selector) {
            case "pet":
                $this->getPet();
                break;
            default:
                $this->showHome();
                break;
        }
    }

    private function getPet() {
        // Handle GET request for pet
    }

    private function showHome() {
        // Handle default request
    }

    private function showError($message) {
        // Show error message
        echo $message;
    }
}