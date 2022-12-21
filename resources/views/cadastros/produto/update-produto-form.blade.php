@php use App\Models\Departamento;use App\Models\TipoAnimal; @endphp
<x-app-layout>
    <x-slot name="header">
        <a href="{{route('produto.index')}}">
            {{ __('Produtos')}}
        </a>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{route('produto.update', $id->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="flex flex-col">
                            <div>
                                <label for="nomeInput">Nome: </label>
                                <input type="text" name="nome" id="nomeInput" value="{{$id->nome}}">
                            </div>
                            <div>
                                @php $depList = Departamento::all() @endphp
                                <label for="depInput">Departamento: </label>
                                <select id="depInput" name="departamento_id">
                                    @foreach($depList as $depItem)
                                        <option @if($id->departamento_id == $depItem->id) selected
                                                @endif value="{{$depItem->id}}">{{$depItem->nome}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div>
                                @php $tipoList = TipoAnimal::all() @endphp
                                <label for="tipoInput">Animal: </label>
                                <select id="tipoInput" name="tipo_animal_id">
                                    @foreach($tipoList as $tipoItem)
                                        <option @if($id->departamento_id == $tipoItem->id) selected
                                                @endif value="{{$tipoItem->id}}">{{$tipoItem->nome}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div>
                                <label for="precoInput">Preço: </label>
                                <input type="number" min="0.00" name="preco" id="precoInput" value="{{$id->preco}}">
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
