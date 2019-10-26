<!DOCTYPE html>
<html>
    <head>
        <title>Search and Filter - Laravel</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <!--Icons de Font awesome-->
        <script src="https://kit.fontawesome.com/b34a5f54ac.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container">
            
            <div class="row">
                
                <div class="col-md-4" style="margin-top:20px;">
                    
                <h4>Busqueda de usuarios: </h4></div>
                <div class="col-md-8" style="margin-top:20px;">
                    {!!Form::open(['route' => 'users', 'method' => 'GET', 'class' => 'form-inline pull-right'])!!}
                    <div class="form-group">
                        {!!Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre'])!!}
                    </div>
                    <div class="form-group" style="margin-left: 10px">
                        {!!Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Email'])!!}
                    </div>
                    <div class="form-group" style="margin-left: 10px">
                        {!!Form::text('bio', null, ['class' => 'form-control', 'placeholder' => 'Bio'])!!}
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-default">
                        
                        <span class="fas fa-search"> </span>
                        </button>
                    </div>
                    {!!Form::close()!!}
                </div>
                <div class="col-md-12" style="margin-top:20px;">
                    
                    <table class="table table-hover table-striped">
                        
                        <tbody>
                            @foreach($users as $user)
                            <tr>
                                <td>{{$user->id}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->bio }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="col-md-12 mx-auto">{{$users->render()}}</div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>