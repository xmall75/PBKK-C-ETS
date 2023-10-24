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

                <a class="text-xl font-bold" href="{{ route('products.create') }}">Add new product</a>

                <table class="table table-bordered my-10">
                    <tr class="text-center">
                        <th>No</th>            
                        <th class="w-1/5">Images</th>
                        <th>Jenis Barang</th>
                        <th class="w-1/5">Keterangan</th>
                        <th class="w-1/5">Kecacatan (jika ada)</th>
                        <th class="w-24">Jumlah</th>
                        <th width="280px">Action</th>
                    </tr>

                    @foreach ($products as $product)
	                <tr>
	                    <td>{{ ++$i }}</td>
                        <td><img class="m-auto" src="/image/{{ $product->image }}" width="100px"></td>
	                    <td>{{ $product->name }}</td>
	                    <td class="text-center">{{ $product->keterangan }}</td>
                        <td class="text-center">{{ $product->kecacatan }}</td>
                        <td class="text-center">{{ $product->jumlah }}</td>
	                    <td class="text-center">            
                            <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Show</a>
                            @can('product-edit')
                            <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Edit</a>
                            @endcan                

                            @can('product-delete')
                                {!! Form::open(['method' => 'DELETE','route' => ['products.destroy', $product->id],'style'=>'display:inline']) !!}
                                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                {!! Form::close() !!}
                            @endcan            
	                    </td>
	                </tr>
	                @endforeach
                </table>

                {!! $products->links() !!}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
