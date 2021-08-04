{{--@props(['propName'])  //nombre de la variable que se manda desde la vista --}}

<div class="inline-block">
    <button type="button"
        class="focus:outline-none text-white text-sm py-2.5 px-5 rounded-full bg-gradient-to-r from-gray-100 to-gray-400 transform hover:scale-110">{{ $slot }}</button>
</div>
