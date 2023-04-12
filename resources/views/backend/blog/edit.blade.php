<x-app-layout>
    Crear
 
    <form action="{{ route('backend.blog.update', ['blog' => $blog->id]) }}"  method="POST">
       @csrf
       @method('PUT')
       <x-label for="title" :value="__('Title')" />
       <x-input name="title" type="text" value="{{ $blog->title }}" />
 
       <x-button class="ml-3">
          {{ __('Create') }}
       </x-button>
    </form>
    
 </x-app-layout>