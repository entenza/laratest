<?php namespace App\Http\ViewCreators;
use Illuminate\Contracts\View\View;
// use App\User as User;
class ProfileCreator {
    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function create(View $view)
    {
        // $users = User::all();
        $friends = [
            'amigo 1',
            'amigo 2',
            'amigo 3'
        ];
        $view->with('countOfAmigos', count($friends));
    }
}