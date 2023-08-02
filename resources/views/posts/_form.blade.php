@csrf

<label class="uppercase text-white text-xs">Titulo</label>

<span class="text-red-600 text-xs">
    @error('title') 

    {{$message}}

    @enderror
</span>

<input type="text" name="title" class="rounded border-gray-200 w-full text-black mb-4" value={{ old('title',$post->title) }}>

<label class="uppercase text-white text-xs">Slug</label>

<span class="text-red-600 text-xs">
    @error('slug') 

    {{$message}}

    @enderror
</span>

<input type="text" name="slug" class="rounded border-gray-200 w-full text-black mb-4" value={{ old('slug',$post->slug) }}>

<label class="uppercase text-white text-xs">Contenido</label>
<label class="text-red-600 text-xs">
    @error('body')
    
    {{$message}}

    @enderror
</label>
<textarea name="body" rows="5" class="rounded text-black border-gray-200 w-full mb-4">{{ old('body',$post->body) }}</textarea>

<div class="flex items-center justify-between">

    <a href="{{ route('posts.index') }}" class="text-indigo-600">Volver</a>

    <input type="submit" value="Guardar" class="bg-white text-black rounded px-4 py-2 hover:cursor-pointer">

</div>
