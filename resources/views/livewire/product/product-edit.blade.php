<div>
    <section class="container p-6 mx-auto my-10 bg-white rounded-md shadow-md lg:mx-8 dark:bg-gray-800">
        <h2 class="text-lg font-semibold text-gray-700 capitalize dark:text-white">Add New Product</h2>
        <form wire:submit.prevent="updateProduct">
            <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
                <div>
                    <label class="text-gray-700 dark:text-gray-200" for="name">Name</label>
                    <input id="name" type="text" wire:model='name'
                        class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
                </div>
                <div>
                    <label class="text-gray-700 dark:text-gray-200" for="price">Price</label>
                    <input id="price" type="text" wire:model='price'
                        class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
                </div>
                <div>
                    <label for="Description" class="block text-sm text-gray-500 dark:text-gray-300">Description</label>
                    <textarea placeholder="input deskripsi..." wire:model='description'
                        class="block  mt-2 w-full  placeholder-gray-400/70 dark:placeholder-gray-500 rounded-lg border border-gray-200 bg-white px-4 h-32 py-2.5 text-gray-700 focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40 dark:border-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:focus:border-blue-300"></textarea>
                </div>
                <div class="form-group">
                    <label class="text-dark">Kategori Wisata</label>
                    <div class="input-group">
                        <select class="custom-select text-dark" id="category_id" wire:model='category_id'>
                            <option selected>Select category...</option>
                            @foreach ($category as $cats)
                                <option value="{{ $cats->id }}">{{ $cats->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    @error('category')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                {{-- <div>
                    <div class="form-group">
                        <label class="text-dark">Foto Wisata</label>
                        <div class="custom-file light-input">
                            <input wire:model="image" type="file" class="custom-file-input" id="customFile">
                            <label class="custom-file-label light-input" for="customFile">Choose file</label>
                        </div>
                        @error('image')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                        @if ($image)
                            <img src="{{ $image->temporaryUrl() }}" class="mt-3 img-fluid" alt="Preview Image">
                        @endif
                        @if ($imageUrl && !$image)
                            <img src="{{ asset('/storage/images/' . $imageUrl) }}" class="img-fluid" alt="Preview Image">
                        @endif
                    </div>
                </div> --}}
            </div>
            <div class="flex justify-end mt-6">
                <button type="submit" class="px-8 py-2.5 leading-5 text-white transition-colors duration-300 transform bg-gray-700 rounded-md hover:bg-gray-600 focus:outline-none focus:bg-gray-600">Save</button>
            </div>
        </form>
    </section>
</div>
