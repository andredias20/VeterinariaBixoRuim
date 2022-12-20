<h1 class="text-center"> Tabelas: Departamento</h1> <hr>

    <div class="text-md-center mt-3 m-4">
        <a href="{{url('departamento/create')}}">
            <button class="btn btn-success">Inserir</button>
        </a>
    </div>
    <div class="col-8 m-auto">
        @csrf
        <table class="table table-striped">
            <thead class="thead-light">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nome</th>
            </tr>

            </thead>
            <tbody>
            @foreach($departamentos as $departamento)
                <!--
                <tr>
                    <th scope="row">{{$departamento->id}}</th>
                    <td> {{$departamento->name}}</td>
                    <th>
                        <a href="{{url("departamento/$departamento->id")}}">
                            <button class="btn btn-dark">Visualizar</button>
                        </a>
                    </th>
                    <th>
                        <a href="{{url("departamento/$departamento->id/edit")}}">
                            <button class="btn btn-primary">Editar</button>
                        </a>
                    </th>

                    <th>
                        <form action="{{route('departamento.destroy',$departamento->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">delete</button>
                    </th>
                </tr>

-->
            @endforeach


            </tbody>

        </table>

    </div>
