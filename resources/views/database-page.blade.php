<!DOCTYPE html>
<html>
    <head>
        <title>
            Database
        </title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>
    <body>
    <div class="card">
        <div class="card-header text-center font-weight-bold">
        Database pages    
        </div>
        <div class="card-body">
            <div class="form-group">
            @foreach($tables as $table)
                 {{ $table->posts }} 
            @endforeach
            </div>
        </div>
    </div>
    </body>
</html>