<?php
    namespace Killallskywalker\TnbrMiddleware;

    use Illuminate\Support\ServiceProvider;
    use Killallskywalker\TnbrMiddleware\Middleware\AdminPermissionRole;

    class TnbrMiddlewareServiceProvider extends ServiceProvider {

        public function boot()
        {

        }

        public function register()
        {
            $this->app['router']->aliasMiddleware('admin-role-permission', AdminPermissionRole::class);
        }
   }
?>
