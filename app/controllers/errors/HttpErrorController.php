<?php 

class HttpErrorController extends Controller {

    public function NotFound() {
        http_response_code(404);
        $this->view('errors/404');
    }

    public function InternalServerError() {
        http_response_code(500);
        $this->view('erros/500');
    }

    public function Unauthorized() {
        http_response_code(401);
        $this->view('errors/401');
    }
}