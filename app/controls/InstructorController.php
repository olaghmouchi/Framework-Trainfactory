<?php
    namespace app\controls;

    use ao\php\framework\controls\AbstractController;

class InstructorController extends AbstractController
{
    public function defaultAction()
    {
       $gebruiker = $this->model->getGebruiker();
       $this->view->set("gebruiker",$gebruiker);
    }

    public function uitloggenAction()
    {
        $this->model->stopSession();
        $this->forward('default','bezoeker');
    }    
}
