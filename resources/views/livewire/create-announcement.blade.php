<div style="margin-top: 5%" class="formClass">
    <form class="custom-form2" wire:submit.prevent="announcementStore">
        @if (session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
        
        <div class="mb-3 display-9">
            <label class="display-9"for="announcementTitle" class="form-label">Titolo Annuncio</label>
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
            <textarea id="announcementBody" cols="30" rows="5" class="form-control @error('body') is-invalid @enderror"
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


        <div class="mb-3">
            <input wire:model="temporary_images" type="file" name="images" multiple class="form-control @error('temporary_images.*') is-invalid @enderror"placeholder="img">
            @error('temporary_images.*')
                <p class="text-danger mt-2">{{$message}}</p>
            @enderror
        </div>
        @if (!empty($images))
        <div class="row">
            <!-- Right Section: Image Previews -->
            <div class="col-md-6">
                @if (!empty($images))
                    <div class="row">
                        <div class="col-12">
                            <p>Photo preview:</p>
                            <div class="row border border-4 border-info rounded py-4">
                                @foreach ($images as $key => $image)
                                    <div class="col my-3">
                                        <div class="imgPreview mx-auto rounded" style="background-image: url({{$image->temporaryUrl()}});"></div>
                                        <button type="button" class="btn btn-danger d-block text-center mt-2 mx-auto" wire:click="removeImage({{$key}})">Cancella</button>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        
            <!-- Left Section: Form for Creating Announcement -->
            <div class="col-md-6">
                <form class="custom-form2" wire:submit.prevent="announcementStore">
                    <!-- ... (existing form code) ... -->
                    <div class="mb-3">
                        <input wire:model="temporary_images" type="file" name="images" multiple class="form-control @error('temporary_images.') is-invalid @enderror" placeholder="img">
                        @error('temporary_images.')
                            <p class="text-danger mt-2">{{$message}}</p>
                        @enderror
                    </div>
                    <!-- ... (existing code) ... -->
                    {{-- <button type="submit" class="btn btn-dark mb-3">Carica</button> --}}
                </form>
            </div>
        </div>
        
        @endif


        <button type="submit" class="btn btn-dark mb-3">Carica</button>
    </form>
</div>