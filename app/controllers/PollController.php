<?php

class PollController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
        $this->view->varable=polls::find();
    }
     public function showAction($pollsid)
    {
        $this->view->polls=polls::findFirstByID($pollsid);
        $this->view->option=PollsOptions::find(array(
            'polls_id = ?0',
            'bind'=> array($pollsid),
            'order'=> 'number_votes DESC'
        ));
    }
    public function  voteAction($pollsid)
    {
       $option= PollsOptions::findFirstByid($pollsid);
       $option->number_votes++;
       $option->save();
       return $this->dispatcher->forward(array(
           'action'=> 'show',
           'params'=> array($option->polls_id)


       ));
    }
   public function addAction($id)
   {

    if($this->request->isPost())
    {$option= new PollsOptions();
    $option->polls_id=$id;// houoi ya3il auto incriment ?
    $option->name=$this->request->getPost('name');
    $option->number_votes=0;
    $option->save();
    return $this->dispatcher->forward(array(
        'action'=> 'show',
        'params'=> array($id)


    ));}
   }

}

