$(document).ready(function () {


    // загрузка имгшек 
    const loadImage = () => {
        $.ajax({
            url: "php/select-image.php",
            type: "GET",
            success: (data) => {
                $("#image-data").html(data);
            }
        })
    }
    setTimeout(() => {
        loadImage();
    }, 1000);

    const count = () => {
        $.ajax({
            url: "php/total-count.php",
            type: "GET",
            success: (data) => {
                $("#count").html(data);
            }
        })
    }
    setTimeout(() => {
        count();
    }, 1000);
    //сейвы в бд 
    $("#save").on("submit", function (e) {
        e.preventDefault();

        const name = $("#name").val();
        const file = $("#file").val();

        const formData = new FormData(this);

        if (name == "" || file == "") {
            alert("Заполните все поля ");
        } else {
            $.ajax({
                url: "php/insert-image.php",
                type: "POST",
                data: formData,
                processData: false,
                contentType: false,
                success: (data) => {
                    console.log(data);
                    if (data == 1) {
                        alert("Фото успешно загружено ");
                        $("#save").trigger("reset");
                        $("#addImage").modal("hide");
                        loadImage();
                        count();
                    } else if (data == 2) {
                        alert("Слишком большой размер е");
                    } else if (data == 3) {
                        alert("invalid image extention");
                    } else {
                        alert("Что-то пошло не так ");
                    }
                }
            })
        }

    });

    $(document).on("click", '#edit-images', function () {
        const id = $(this).data("id");

        $.ajax({
            url: "php/edit-image.php",
            type: "POST",
            data: { id: id },
            success: (data) => {
                $("#edit-image").html(data);
            }
        })
    });

    $("#update").on("submit", function (e) {
        e.preventDefault();
        const name = $("#edit_name").val();
        const formData = new FormData(this);

        if (name == "") {
            alert("заполните поле ");
        } else {
            $.ajax({
                url: "php/update-image.php",
                type: "POST",
                data: formData,
                processData: false,
                contentType: false,
                success: (data) => {
                    move_uploaded_file($tmp_file, '../upload/'.$new_image);
                    unlink("../upload/".$old_file);
                    if (data == 1) {
                        alert("фотография успешно обновлена ");
                        $("#updateImage").modal("hide");
                        $("#update").trigger("reset");
                        loadImage();
                    } else if (data == 2) {
                        alert("Fразмер слишком большой ");
                    } else {
                        alert("что-то пошло не так ");
                    }
                }
            })
        }
    })

    $(document).on("click", "#delete-image", function () {
        const id = $(this).data("id");
        $.ajax({
            url: "php/delete-image.php",
            type: "POST",
            data: { id: id },
            success: (data) => {
                if (data == 1) {
                    alert("удаление прошло успешно ");
                    loadImage();
                    count();
                } else {
                    alert("что-то пошло не так ");
                }
            }
        })
    })
})