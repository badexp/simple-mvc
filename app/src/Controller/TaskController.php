<?php

namespace App\Controller;

use App\Contract\ControllerInterface;
use Symfony\Component\HttpFoundation\Request;

class TaskController implements ControllerInterface
{
    public function show_list()
    {
        $tasks = Task::get();// get 3 tasks from current page

        return $this->render('task_list.html.twig', [
            'tasks' => $tasks
        ]);
    }

    public function show_one(int $id, Request $request)
    {
        $task = Task::getByPk($id);//get specified task by id

        if($request->isMethod('POST')) {
            // TODO: validate fields and update current task if the user can do it
        }

        return $this->render('task_show.html.twig', [
            'task' => $task
        ]);
    }
}