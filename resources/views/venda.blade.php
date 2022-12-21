<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Venda') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <table>
                    <tr>
                        <th>Nome produto</th>
                        <th>Departamento</th>
                        <th>Quantidade</th>
                    </tr>
                    @foreach($items as $item)
                        <tr>
                            <td>{{$item->nome}}</td>
                            <td>{{$item->departamento_id}}</td>
                            <td>{{$item->quantidade}}</td>
                        </tr>

                    @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
