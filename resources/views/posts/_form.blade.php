@csrf

<label class="uppercase text-white text-xs">Titulo</label>

<input type="text" name="title" class="rounded border-gray-200 w-full mb-4" value={{$post->title}}>

<label class="uppercase text-white text-xs">Contenido</label>
<textarea name="body" rows="5" class="rounded border-gray-200 w-full mb-4">{{$post->body}}</textarea>

<div>

    <a href="{{route('posts.index')}}" class="text-indigo-600">Volver</a>

    <input type="submit" value="Enviar" class="bg-white text-black rounded px-4 py-2 hover:cursor-pointer">

</div>