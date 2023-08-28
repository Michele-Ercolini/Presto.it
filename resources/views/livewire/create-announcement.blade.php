<div style="background-color:  #db9b20; margin-top: 5%" class="formClass">
   
    <form style="background-color:  #db9b20" class="custom-form2" wire:submit.prevent="announcementStore">
        <h1 class="title-form text-dark text-center title-shadow ">{{__('ui.crea')}}</h1>

        <div class="display-9 mb-3 px-3">
            <label class="display-9 text-uppercase "for="announcementTitle" class="form-label">{{__('ui.creaTitolo')}}</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="announcementTitle"
                wire:model="title">
            @error('title')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3 px-3">
            <label for="announcementNumber " class="text-uppercase form-label">{{__('ui.creaPrezzo')}}</label>
            <input type="number" step="0.01" class="form-control @error('price') is-invalid @enderror" id="announcementNumber"
                wire:model="price">
            @error('price')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3 px-3">
            <label for="announcementBody " class="text-uppercase form-label">{{__('ui.creaDescri')}}</label>
            <textarea id="announcementBody" cols="30" rows="5" class="form-control @error('body') is-invalid @enderror"
                wire:model="body"></textarea>
            @error('body')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3 px-3">
            <label for="category " class="text-uppercase">{{__('ui.creaCategoria')}}</label>
            <select wire:model.defer="category" id="category" class="form-control">
                <option style="background-color:  #edbf67;" value="">{{__('ui.scegli')}}</option>
                @foreach ($categories as $category)
                    <option style="background-color:  #edbf67;" value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
        </div>


        <div class="mb-3 px-3">
            <input  wire:model="temporary_images" type="file" name="images" multiple  class="form-control @error('temporary_images.*') is-invalid @enderror" placeholder="Img"/>
            @error('temporary_images.*')
                <p class="text-danger mt-2">{{$message}}</p>
            @enderror
        </div>
        @if (!empty($images))
            <div class="row">
                <div class="col-12">
                    <p class="mb-3 px-3">Photo preview:</p>
                    <div class="preview row border border-4 border-dark rounded py-4">
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
        <div class="d-flex justify-content-end">
            <div class="mx-3">
                <button type="submit" class="btn btn-dark my-3">{{__('ui.btnCrea')}}</button>
                @if (session('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif
            </div>
        </div>
    </form>
</div>