<?php

namespace App\Providers;
use App\Repository\BaseInterface;
use App\Repository\DesignerInterface;
use App\Repository\Eloquent\DesignerRepository;
use App\Repository\Eloquent\ShowroomRepository;
use App\Repository\Eloquent\UserRepository;
use App\Repository\ShowroomInterface;
use App\Repository\UserInterface;
use Illuminate\Support\ServiceProvider;
use App\Repository\Eloquent\BaseRepository;

class RepoServiceProvider extends ServiceProvider
{
                   
    public function register()
    {
        $this->app->bind(BaseInterface::class, BaseRepository::class);
        $this->app->bind(DesignerInterface::class, DesignerRepository::class);
        $this->app->bind(ShowroomInterface::class, ShowroomRepository::class);
        $this->app->bind(UserInterface::class, UserRepository::class);
    }
    

                   
    public function boot()
    {
        
    }
}
