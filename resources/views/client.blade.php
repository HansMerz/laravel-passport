<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Clientes</title>
</head>
<body>
    <form action="{{ url('/oauth/clients') }}" method="POST">
        {{ csrf_field() }}
        <input type="text" name="name">
        <input type="text" name="redirect">
        <input type="submit" name="send" value="Enviar">    
    </form>

    <table border="1" class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Redirect</th>
                <th>Secret</th>            
            </tr>            
        </thead>
        <tbody>
            @foreach($clients as $client)
                <tr>
                    <td>{{ $client->id }}</td>
                    <td>{{ $client->name }}</td>
                    <td>{{ $client->redirect }}</td>
                    <td>{{ $client->secret }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <h2>Personal Access Tokens</h2>
    <form action="{{ url('/oauth/personal-access-tokens') }}" method="POST">
        <input type="text" name="name" placeholder="Nombre">
        <input type="submit" value="Crear">        
        {{ csrf_field() }}
    </form>
</body>
</html>