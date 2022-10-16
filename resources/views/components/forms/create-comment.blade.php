@props(['post'])

<form id="create-comment-form"
      action="/comments/post/{{$post->id}}"
      method="post">
    @csrf
    <h3 class="font-bold text-2xl mb-4">Add your comment</h3>
    <label for="body"
           class="block mb-2 @error('body') text-red-500 @enderror">What do you want to add?</label>
    <textarea name="body"
              id="body"
              cols="30"
              rows="10"
              class="block w-full p-4 border-2 shadow-inner @error('body') border-red-500 @enderror"></textarea>
    <button type="submit" class="mt-4 w-1/3 py-2 px-4 rounded bg-blue-700 text-white float-right shadow">Submit your comment</button>
</form>
