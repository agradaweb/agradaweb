<x-app-layout>
   <a href="{{ route('backend.blog.create') }}" class="justify-center inline-flex items-center px-4 py-2 bg-slate-600 border border-transparent rounded-full font-semibold text-xs text-white tracking-widest hover:bg-slate-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">Creat</a>

   @forelse ($posts as $post)

         <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
               <a href="{{ route('backend.blog.edit', ['blog' => $post->id]) }}" class="text-lg text-gray-900 font-bold">{{ $post->title }}</a>
               <a href="{{ route('backend.blog.destroy', ['blog' => $post->id]) }}" class="text-lg text-gray-900 font-bold">Delete</a>
            </div>
         </div>

   @empty

   No hay post
       
   @endforelse

</x-app-layout>