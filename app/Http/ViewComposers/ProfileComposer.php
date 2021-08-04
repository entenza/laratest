<?php namespace App\Http\ViewComposers;
use Illuminate\Contracts\View\View;
// use App\User as User;
class ProfileComposer {
    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        // $users = User::all();
        $friends = [
            'usuario 1',
            'usuario 2',
            'usuario 3'
        ];
        $view->with('countOfFriends', count($friends));
    }
}