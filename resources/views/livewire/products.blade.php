<div>
    <div class="bg-white">

        <div class="mx-auto max-w-2xl py-16 px-4 sm:py-5 sm:px-6 lg:max-w-7xl lg:px-8">
            @if (session()->has('order_success'))
                <div class="rounded-md bg-green-50 p-4">
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <!-- Heroicon name: mini/check-circle -->
                            <svg class="h-5 w-5 text-green-400"
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20"
                                fill="currentColor"
                                aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="ml-3">
                            <p class="text-sm font-medium text-green-800">
                                {{ session('order_success')['message'] }}
                            </p>
                        </div>
                    </div>
                </div>
            @endif
            <h2 class="text-2xl font-bold tracking-tight text-gray-900">
                Products
            </h2>
            <div class="mt-6 grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
                @foreach ($products as $product)
                    <div class="group relative">
                        <div
                            class="min-h-80 aspect-w-1 aspect-h-1 lg:aspect-none w-full overflow-hidden rounded-md bg-gray-200 group-hover:opacity-75 lg:h-80">
                            <img src="{{ asset('image/shoes.webp') }}"
                                alt="Front of men&#039;s Basic Tee in black."
                                class="h-full w-full object-cover object-center lg:h-full lg:w-full">
                        </div>
                        <div class="mt-4 flex justify-between">
                            <div>
                                <h3 class="text-sm text-gray-700">
                                    <a
                                        href="{{ route('buy-now', [
                                            'product' => $product->id,
                                        ]) }}">
                                        <span aria-hidden="true"
                                            class="absolute inset-0"></span>
                                        {{ $product->name }}
                                    </a>
                                </h3>
                                <a href="#dasd"
                                    class="hover:bg-indigo-600">
                                    Buy now
                                </a>
                            </div>
                            <p class="text-sm font-medium text-gray-900">${{ $product->price }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
