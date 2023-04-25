<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;

class Login extends Component
{
    public $email, $password;

    public function submit() {
        $this->validate([
            'email'     => 'required|email',
            'password'     => 'required|string'
        ]);

        $user = User::where('email', $this->email)->first();

        if (!$user) {
            $this->errorMsg = "Sorry your account does not fit the fitting room.";
            $this->email = '';
            $this->password = '';
        } else {
            $login = auth()->attempt([
                'email'     => $this->email,
                'password'  => $this->password
            ]);

            if (!$login) {
                $this->errorMsg = 'Invalid Credentials';
                $this->email = '';
                $this->password = '';
            } else {
                return redirect('/');
            }
        }
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
