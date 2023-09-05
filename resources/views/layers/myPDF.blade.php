<!DOCTYPE html>
<html>
<head>
    <title>Associação dos Advogado de Moçambique</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <h1>{{ $title }}</h1>
    <p>{{ $date }}</p>
    
    <div class="col-sm-12 col-xl-6">
        <div class="table-responsive">
            <p>Informações dos membros da AAM.</p>
            <table class="table text-start align-middle table-bordered table-hover mb-0">
                <thead>
        <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nome</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">Telefone</th>
                        <th scope="col">Categoria</th>
                        <th scope="col">Morada</th>
        </tr>
    </thead>
        @foreach($layer as $item)<tbody>
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->email }}</td>
                <td>{{ $item->telefone }}</td>
                <td>{{ $item->category }}</td>
                <td>{{ $item->address }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
    </div>
</body>
</html>
