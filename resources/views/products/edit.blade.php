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
                        <h1 class="text-xl font-bold">Edit product</h1>

                        <form action="{{ route('products.update',$product->id) }}" enctype="multipart/form-data" method="POST">
                        @csrf
                        @method('PUT')

                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Jenis Barang</strong><br />
                                        <input type="text" name="jenisbarang" class="w-3/4 text-gray-900" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Keterangan</strong><br />
                                        <textarea class="w-3/4 text-gray-900" style="height:150px" name="keterangan" placeholder="Detail"></textarea>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Kecacatan</strong><br />
                                        <input type="text" name="kecacatan" class="w-3/4 text-gray-900" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Image:</strong><br />
                                        <input type="file" name="image" class="form-control text-gray-900" placeholder="image">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Jumlah</strong><br />
                                        <input type="text" name="jumlah" class="w-3/4 text-gray-900" placeholder="100">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 bg-gray-900">
                                        <button type="submit" class="btn w-20 h-16 bg-gray-900">Submit</button>
                                </div>
                            </div>

                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
