<?php

namespace App\Http\Livewire;

use Filament\Forms;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Livewire\Component;
use Illuminate\Contracts\View\View;

class FileUploadForm extends Component implements HasForms
{
    use InteractsWithForms;

    public ?array $data = [];

    public function mount()
    {
        $this->form->fill();
    }

    protected function getFormSchema(): array
    {
        return [
            Forms\Components\FileUpload::make('working_field')
                ->panelLayout('integrated'),

            Forms\Components\FileUpload::make('also_working_field')
                ->multiple()
                ->panelLayout('compact'),

            Forms\Components\FileUpload::make('non_working_field')
                ->multiple()
                ->panelLayout('integrated'),
        ];
    }

    public function submit(): void
    {
        $data = $this->form->getState();

        //
    }

    protected function getFormStatePath(): string
    {
        return 'data';
    }

    public function render(): View
    {
        return view('livewire.file-upload-form');
    }
}
