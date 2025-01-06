<?php

namespace App\Service;

use App\Models\Task;

class TaskService {


    public function index () {
        return Task::with('status')->get();
    }
}
