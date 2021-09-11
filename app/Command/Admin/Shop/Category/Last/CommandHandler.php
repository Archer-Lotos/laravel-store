<?php

namespace App\Command\Admin\Shop\Category\Last;

use App\Repository\Shop\CategoryRepository;

class CommandHandler
{
    private $categories;

    public function __construct(CategoryRepository $categories)
    {
        $this->categories = $categories;
    }

    public function __invoke(Command $command)
    {
        $this->categories->last($command->category, $command->last);
    }
}