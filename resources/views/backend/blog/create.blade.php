<x-app-layout>
   <div class="container mx-auto px-4">
      <h1 class="text-4xl font-bold text-center my-8">Crear nueva entrada de blog</h1>
      <div class="grid grid-cols-3 gap-4">
        <div class="col-span-2">
            <form action="{{ route('backend.blog.store') }}" method="POST" class="bg-white p-4 rounded-lg shadow">
               @csrf
               <div class="mb-4">
                  <label for="title" class="block text-gray-700 font-bold mb-2">Título de la entrada:</label>
                  <input type="text" id="title" name="title" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
               </div>
               <div class="mb-4">
                  <label for="slug" class="block text-gray-700 font-bold mb-2">Slug:</label>
                  <input type="text" id="slug" name="slug" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
               </div>
               <div class="mb-4">
                  <label for="description" class="block text-gray-700 font-bold mb-2">Descripción:</label>
                  <textarea id="description" name="description" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>
               </div>
               <div class="mb-4">
                  <label for="content" class="block text-gray-700 font-bold mb-2">Contenido:</label>
                  <textarea id="content" name="content" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>
               </div>
               <x-button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"> {{ __('Publicar entrada') }} </x-button>
            </form>
        </div>
        <div>
          <div class="bg-white p-4 rounded-lg shadow mb-4">
            <h2 class="text-xl font-semibold mb-2">Categorías</h2>
            <ul class="list-none pl-0">
              <li><a href="#" class="text-blue-500 hover:underline">Categoría 1</a></li>
              <li><a href="#" class="text-blue-500 hover:underline">Categoría 2</a></li>
              <li><a href="#" class="text-blue-500 hover:underline">Categoría 3</a></li>
            </ul>
          </div>
          <div class="bg-white p-4 rounded-lg shadow">
            <h2 class="text-xl font-semibold mb-2">Etiquetas</h2>
            <ul class="list-none pl-0">
              <li><a href="#" class="text-blue-500 hover:underline">Etiqueta 1</a></li>
              <li><a href="#" class="text-blue-500 hover:underline">Etiqueta 2</a></li>
              <li><a href="#" class="text-blue-500 hover:underline">Etiqueta 3</a></li>
            </ul>
          </div>
         </div>
      </div>
   </div>
</x-app-layout>