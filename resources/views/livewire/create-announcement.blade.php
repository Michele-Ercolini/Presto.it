<form wire:submit.prevent="announcementStore">
    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    <div class="mb-3">
        <label for="announcementTitle" class="form-label">Titolo Annuncio</label>
        <input type="text" class="form-control @error('title') is-invalid @enderror" id="announcementTitle"
            wire:model="title">
        @error('title')
            <p class="text-danger">{{ $message }}</p>
        @enderror
    </div>
    <div class="mb-3">
        <label for="announcementNumber" class="form-label">Prezzo</label>
        <input type="number" step="0.01" class="form-control @error('price') is-invalid @enderror" id="announcementNumber"
            wire:model="price">
        @error('price')
            <p class="text-danger">{{ $message }}</p>
        @enderror
    </div>
    <div class="mb-3">
        <label for="announcementBody" class="form-label">Descrivi il tuo Annuncio</label>
        <textarea id="announcementBody" cols="30" rows="10" class="form-control @error('body') is-invalid @enderror"
            wire:model="body"></textarea>
        @error('body')
            <p class="text-danger">{{ $message }}</p>
        @enderror
    </div>
    <div class="mb-3">
        <label for="category">Categoria</label>
        <select wire:model.defer="category" id="category" class="form-control">
            <option style="background-color: #9b9b9c" value="">Scegli la Categoria</option>
            @foreach ($categories as $category)
                <option style="background-color: #9b9b9c" value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-dark mb-3">Carica</button>
</form>
