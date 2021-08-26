<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-body">
                <form wire:submit.prevent="update" method="POST" enctype="multipart/form-data" >
                    <div class="form-group">
                        <div class="row">
                            <div class="col">
                                <input wire:model="title" type="text" class="form-control @error('title') is-invalid @enderror" placeholder="Title">
                                @error('title')
                                    <span class="invalid-feedback">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col">
                                <input wire:model="price" type="text" class="form-control @error('title') is-invalid @enderror" placeholder="Price">
                                @error('price')
                                    <span class="invalid-feedback">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col">
                                <input wire:model="description" type="text" class="form-control @error('description') is-invalid @enderror" placeholder="Description">
                                @error('description')
                                    <span class="invalid-feedback">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="">Image</label>
                                    <input wire:model="image" type="file" class="form-control-file" id="image">
                                    @error('image')
                                        <span class="invalid-feedback">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                    {{-- melakukan review gambar yang ingin kita upload --}}
                                    @if ($image)
                                        <img src="{{ $image->temporaryUrl() }}" alt="" height="200">  
                                        @else
                                        <img src="{{ $imageOld }}" alt="" height="200">
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                    <button wire:click="$emit('formClose')" type="button" class="btn btn-secondary btn-sm">Close</button>
                </form>
            </div>
        </div>
    </div>
</div>
<br>