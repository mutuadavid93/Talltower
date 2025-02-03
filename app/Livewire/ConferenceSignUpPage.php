<?php

namespace App\Livewire;

use Filament\Actions\Action;
use Filament\Actions\Concerns\InteractsWithActions;
use Filament\Actions\Contracts\HasActions;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Livewire\Component;

class ConferenceSignUpPage extends Component implements HasForms, HasActions
{
    use InteractsWithActions, InteractsWithForms;


    public function signUpAction(): Action
    {
        return Action::make('signUp')
            ->slideOver()
            ->form([
                TextInput::make('reason')
                    ->label('Reason')
                    ->placeholder('Enter the reason for deleting this record')
                    ->required(),
            ])->action(
                function (array $data) {
                    dump("Hit");
                }
            );
    }

    public function render()
    {
        return view('livewire.conference-sign-up-page');
    }
}
