<div>
    <h1>ini halaman upload</h1>

    <form wire:submit.prevent="save">

        Ketik Disini : <input type="text" wire:model="isian">
        <br>

        @if ($photo)
            Photo Preview:
            <img src="{{ $photo->temporaryUrl() }}">
        @endif

        <br>

        <input type="file" wire:model="photo">
        <br>

        @error('photo') <span class="error">{{ $message }}</span> @enderror
        <br>

        <button type="submit">Save Photo</button>
    </form>
    <br>
    Isian : {{ $isian }} <br>
    Pesan : {{ $pesan }} <br>
    Path : {{ $path }}

</div>
