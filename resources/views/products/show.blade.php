<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                
                    <div class="form">
                        <h1 class="text-xl font-bold">Product Details</h1>

                        <div class="row">
                            <div class="my-5 col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Keterangan</strong><br />
                                    {{ $product->keterangan }}
                                </div>
                            </div>
                            <div class="my-5 col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Kecacatan</strong><br />
                                    {{ $product->kecacatan }}
                                </div>
                            </div>
                            <div class="my-5 col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Image</strong><br />
                                    <img class="py-5" src="/image/{{ $product->image }}" width="500px">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
