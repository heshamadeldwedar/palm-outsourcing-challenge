<?php

namespace App\Http\Controllers;

use App\Service\TaskService;

class TaskController extends Controller
{

    public function __construct(private readonly TaskService $taskService) {}

    function index() {
        return $this->taskService->index();
    }
}
