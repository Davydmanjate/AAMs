  
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
            <p>Informações dos Clientes que solicitam o apoio tecnico da nossa equipa.</p>
            <table  class="table table-bordered">
                <thead>
        <tr>
            <th>Nome</th>
            <th>Provincia</th>
            <th>Data Audiência</th>
            <th>Assunto</th>
            <th>Mensagem</th>
        </tr>
    </thead>
        @foreach($case as $item)<tbody>
            <tr>
                <td>{{ $item->name }}</td>
                <td>{{ $item->province }}</td>
                <td>{{ $item->audience }}</td>
                <td>{{ $item->subject }}</td>
                <td>{{ $item->message }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
    </div>
</body>
</html>
