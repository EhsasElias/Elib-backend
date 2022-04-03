<?php
namespace coding\app\system;
class AppSystem{
    public Request $request;
    public Response $response;
    public Router $router;
    public static AppSystem $AppSystem;
    public Database $database;

    function __construct(array $dbconfig)
    {
        $this->database=new Database($dbconfig);
        self::$AppSystem=$this;
        $this->request=new Request();
        $this->response=new Response();
        $this->router=new Router($this->request);
    }
    public function start(){
       $this->router->executeRoute();
    }
}
?>