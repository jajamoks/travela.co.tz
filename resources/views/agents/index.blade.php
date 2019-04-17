<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Agents</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>
    <div class="col-md-4">
        <form action="/agents/create" method="post">
            @csrf
            <div class="form-group">
                <label>Name</label>
                <input type="name" class="form-control" name="name">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="text" class="form-control" name="email">
            </div>
            <div class="form-group">
                <label>Phone Number</label>
                <input type="text" class="form-control" name="number">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Number</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($agents as $agent)
              <tr>
                <td>{{$agent->name}}</td>
                <td>{{$agent->email}}</td>
                <td>{{$agent->number}}</td>
            </tr>
          @endforeach
        </tbody>
    </table>
</body>

</html> 
