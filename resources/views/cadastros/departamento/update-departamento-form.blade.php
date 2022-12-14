<x-app-layout>
    <x-slot name="header">
        <a href="{{route('departamento.index')}}">
            {{ __('Departamento')}}
        </a>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{route('departamento.update', $id->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="flex flex-col">
                            <div>
                                <label for="nomeInput">Nome departamento: </label>
                                <input type="text" name="nome" id="nomeInput" value="{{$id->nome}}">
                            </div>
                            <div>
                                <x-primary-button>
                                    <input type="hidden" name="id" value="{{$id->id}}">
                                    <input type="submit"/>
                                </x-primary-button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
