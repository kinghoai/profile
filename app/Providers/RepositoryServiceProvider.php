<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    private $repositories = [
        \App\Models\Category::class => [
            \App\Repositories\Contracts\CategoryRepositoryInterface::class,
            \App\Repositories\Eloquent\EloquentCategoryRepository::class
        ],
        \App\Models\Post::class => [
            \App\Repositories\Contracts\PostRepositoryInterface::class,
            \App\Repositories\Eloquent\EloquentPostRepository::class
        ],
        \App\Models\User::class => [
            \App\Repositories\Contracts\UserRepositoryInterface::class,
            \App\Repositories\Eloquent\EloquentUserRepository::class
        ],
	    \App\Models\Page::class => [
            \App\Repositories\Contracts\PageRepositoryInterface::class,
            \App\Repositories\Eloquent\EloquentPageRepository::class
        ],
	    \App\Models\Skill::class => [
		    \App\Repositories\Contracts\SkillRepositoryInterface::class,
		    \App\Repositories\Eloquent\EloquentSkillRepository::class
	    ],
	    \App\Models\Experience::class => [
		    \App\Repositories\Contracts\ExperienceRepositoryInterface::class,
		    \App\Repositories\Eloquent\EloquentExperienceRepository::class
	    ],
	    \App\Models\Education::class => [
		    \App\Repositories\Contracts\EducationRepositoryInterface::class,
		    \App\Repositories\Eloquent\EloquentEducationRepository::class
	    ],
	    \App\Models\Project::class => [
		    \App\Repositories\Contracts\ProjectRepositoryInterface::class,
		    \App\Repositories\Eloquent\EloquentProjectRepository::class
	    ],
    ];

    public function register()
    {
        $this->registerServices();
    }

    protected function registerServices()
    {
        // Register repository
        foreach ($this->repositories as $modelClass => $bidding) {
            list($contract, $repository) = $bidding;
            $this->registerRepository($contract, $repository, $modelClass);
        }
    }

    protected function registerRepository($contract, $repository, $model)
    {
        if (!class_exists($model) || !interface_exists($contract) || !class_exists($repository)) {
            return;
        }

        $this->app->bind($contract, function () use ($repository, $model) {
            return new $repository(new $model);
        });
    }
}
