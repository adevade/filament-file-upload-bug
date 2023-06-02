<div class="max-w-3xl mx-auto my-12 p-6 bg-gray-100">
    <form wire:submit.prevent="submit">
        {{ $this->form }}

        <button type="submit" class="">
            Submit
        </button>
    </form>

    {{ $this->modal }}
</div>
