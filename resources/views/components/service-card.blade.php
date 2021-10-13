@props(['service'])

<article class="card">
    <img class="h-36 w-full object-cover" src="" alt="">
    <div class="card-body">
        <h1 class="card-title">{{ Str::limit($service->title, 40) }}</h1>
        <p class="text-gray-500 text-sm mb-2">Responsable: {{ $service->worker->name }}</p>

        <div clas="flex">

            <ul class="flex text-sm">
                <li class="mr-1">
                    <i class="fas fa-star text-{{ $service->rating >= 1 ? 'yellow' : 'gray' }}-400"></i>
                </li>
                <li class="mr-1">
                    <i class="fas fa-star text-{{ $service->rating >= 2 ? 'yellow' : 'gray' }}-400"></i>
                </li>
                <li class="mr-1">
                    <i class="fas fa-star text-{{ $service->rating >= 3 ? 'yellow' : 'gray' }}-400"></i>
                </li>
                <li class="mr-1">
                    <i class="fas fa-star text-{{ $service->rating >= 4 ? 'yellow' : 'gray' }}-400"></i>
                </li>
                <li class="mr-1">
                    <i class="fas fa-star text-{{ $service->rating >= 5 ? 'yellow' : 'gray' }}-400"></i>
                </li>
            </ul>

            <p class="text-md text-gray-500 ml-auto">
                <i class="fas fa-users"></i>
                ( {{ $service->worker_count }} )
            </p>

        </div>

        <a href="{{ route('services.show', $service) }}"
            class="btn btn-primary btn-block mt-4">
            Mas Información
        </a>
    </div>
</article>
