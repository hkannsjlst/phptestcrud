<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>хххх</title>
</head>

<body>
    <div class="container-fluid p-5 text-center bg-dark">
        <h1 class="text-white">Типо админ панель </h1>
    </div>
    <div class="container my-5">
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between">
                    <h4>фотка  ( <span id="count"></span> )</h4>
                    <!-- для открытия модвального окна -->
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addImage">
                       Добавить картинку 
                    </button>
                </div>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Название </th>
                        <th>Картинка </th>
                        <th>Править </th>
                        <th>удалить </th>
                    </tr>
                </thead>
                <tbody id="image-data"></tbody>
            </table>
        </div>
    </div>

    <!--модальное окно  -->
    <div class="modal fade" id="addImage">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- заголовок окна r -->
                <div class="modal-header">
                    <h4 class="modal-title">Lj,fdbnm rfhnbyre </h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <form action="" id="save">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="">Название </label>
                            <input type="text" name="name" id="name" class="form-control form-control-lg">
                        </div>
                        <div class="form-group">
                            <label for="">картинка </label>
                            <input type="file" name="file" id="file" class="form-control form-control-lg">
                        </div>
                    </div>

                    <!-- подвал окна  -->
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">Сохранить </button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">закрыть </button>
                    </div>
                </form>


            </div>
        </div>
    </div>
    <!-- Tеще одно окно  -->
    <div class="modal fade" id="updateImage">
        <div class="modal-dialog">
            <div class="modal-content">

                <!--хеждер окна  -->
                <div class="modal-header">
                    <h4 class="modal-title">Сменить картинку </h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!--контент окна  -->
                <form action="" id="update">
                    
                        <div id="edit-image"></div>

                    <!-- футер окна  -->
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">изменить 

                        </button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">закрыть </button>
                    </div>
                </form>


            </div>
        </div>
    </div>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/app.js"></script>
</body>

</html>