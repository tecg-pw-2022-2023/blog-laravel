<label for="category_id"
       class="block @error('category_id') text-red-600 @enderror mt-8 mb-2">Category</label>
@error('category_id') <p class="italic text-red-600">{{$message}}</p> @enderror
<select name="category_id[]"
        id="category_id"
        multiple
        class="p-4 w-full border-gray-300  @error('category_id') border-red-600  accent-red-600 @enderror rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
    @foreach ($categories as $category)
        <option value="{{ $category->id }}" @selected(in_array($category->id, old('category_id')??[]))>
            {{ ucwords($category->name)  }}
        </option>
    @endforeach
</select>
