<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PasswordComponent extends Component
{
    public $password;
    public $showPassword = false;

    public function render()
    {
        return view('livewire.password-component');
    }

    public function togglePassword()
    {
        $this->showPassword = !$this->showPassword;
    }

    public function generatePassword()
    {
        $length = 8;
        $characters = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%&*";
        $charactersLength = strlen($characters);
        $randomString = '';
        for($i=0; $i<$length; $i++)
        {
            $randomString .= $characters[rand(0, $charactersLength -1)];
        }
        $this->password = $randomString;
    }
}
