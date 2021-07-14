@auth
    <form method="POST" action="/posts/{{ $post->slug }}/comments" class="border border-gray-200 p-6 rounded-xl mb-4">
        @csrf
        <header class="flex items-center">
            <img src="https://i.pravatar.cc/60?u={{ auth()->id() }}" alt="" width="40" height="40" class="rounded-full" />
            <h2 class="ml-4">Want to partecipate?</h2>
        </header>
        <div class="mt-6">
            <textarea name="body" class="w-full text-sm focus:outline-none focus:ring" cols="30" rows="5" placeholder="Write something" required></textarea>
            @error('body')
                <span class="text-red-800 text-xs">{{ $message }}</span>
            @enderror
        </div>
        <div class="flex justify-end mt-6 border-t border-gray-200 pt-6">
            <button class="bg-blue-500 text-white uppercase font-semibold text-xs py-2 px-10 rounded-2xl hover:bg-blue-600" type="submit">Post</button>
        </div>
    </form>
@else
    <p class="font-semibold mb-4"><a href="/login" title="" class="underline">Login</a> or <a href="/register" title="" class="underline">Register</a> to leave a comment</a></p>
@endauth
