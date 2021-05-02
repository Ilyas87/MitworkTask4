<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="app.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="d-flex justify-content-center">
                <div class="col-8">
                    <nav class="navbar px-0 py-3 border-light">
                        <div class="input-group w-25 pl-0">
                            <input type="text" class="form-control" id="searchInput" placeholder="Search...">
                        </div>
                    </nav>
                    <table class="table table-bordered">
                        <thead class="bg-primary text-light text-center">
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">LOGIN</th>
                                <th scope="col">PASSWORD</th>
                                <th scope="col">NAME</th>
                                <th scope="col">AGE</th>
                                <th scope="col">ROLE</th>
                            </tr>
                        </thead>
                        <tbody id="table">
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>
