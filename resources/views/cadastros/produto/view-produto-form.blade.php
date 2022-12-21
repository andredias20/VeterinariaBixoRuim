<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cadastros') }}
        </h2>
    </x-slot>

    <h1 class="text-center"> Tabela: Produtos</h1>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="col-8 m-auto">
                        @csrf
                        <table class="table table-striped">
                            <thead class="thead-light">
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Nome</th>
                                <th scope="col">Departamento</th>
                                <th scope="col">Preco</th>

                            </tr>

                            </thead>
                            <tbody>

                            @foreach($items as $item)

                                <tr>
                                    <th scope="row">{{$item->id}}</th>
                                    <td> {{$item->nome}}</td>
                                    <td>{{$item->departamento}}</td>
                                    <th>{{$item->preco}}</th>
                                    <th>
                                        @csrf
                                        <a href="{{route('produto.form.update' ,$item->id)}}">
                                            <x-secondary-button>
                                                editar
                                            </x-secondary-button>
                                        </a>
                                    </th>

                                    <th>

                                        <form action="{{route('produto.destroy',$departamento->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <x-danger-button>
                                                delete
                                            </x-danger-button>
                                        </form>

                                    </th>
                                </tr>
                            @endforeach

                            </tbody>

                        </table>

                    </div>

                    <div class="text-md-center mt-3 m-4">
                        <a href="{{route('produto.form.insert')}}">
                            <x-primary-button>
                                Inserir
                            </x-primary-button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
