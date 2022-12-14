<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cadastros') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <a href="{{route('departamento.index')}}">
                        <button class="btn btn-dark">Departamento</button>
                    </a>
                </div>

                <div class="p-6 text-gray-900">
                    <a href="{{route('tipo-animal.index')}}">
                        <button class="btn btn-dark">Tipo Animal</button>
                    </a>
                </div>

                <div class="p-6 text-gray-900">
                    <a href="{{route('produto.index')}}">
                        <button class="btn btn-dark">Produto</button>
                    </a>
                </div>
                <div class="p-6 text-gray-900">
                    <a href="{{route('cliente.index')}}">
                        <button class="btn btn-dark">Cliente</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
