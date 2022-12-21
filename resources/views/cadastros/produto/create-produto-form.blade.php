@php use App\Models\Departamento; @endphp
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <a href="{{route('produto.index')}}">
                {{ __('Produto')}}
            </a>
            {{__('/')}}
            <a href="{{route('produto.form.insert')}}">
                {{__('Inserir')}}
            </a>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <a href="{{route('produto.index')}}">

                    </a>
                    <form action="{{route('produto.insert')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="flex flex-col">
                            <div>
                                <label for="nomeInput">Nome: </label>
                                <input type="text" name="nome" id="nomeInput">
                            </div>
                            <div>
                                @php $depList = Departamento::all() @endphp
                                <label for="depInput">Departamento: </label>
                                <select id="depInput" name="departamento_id">
                                    @foreach($depList as $depItem)
                                        <option value="{{$depItem->id}}">{{$depItem->nome}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div>
                                <label for="precoInput">Preço: </label>
                                <input type="number" min="0.01" name="preco" id="precoInput">
                            </div>
                            <div>
                                <x-primary-button>
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
