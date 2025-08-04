let table = $('#data-table').DataTable({
    columnDefs: [
        { targets: 0, className: 'text-center' },
        { targets: -1, className: 'text-center' }
    ]
});

function closeModal(element) {
    element.modal("hide");
}

$("#cancel-edit").on("click", function () {
    closeModal($("#edit-data-modal"));
});

$("#cancel-add").on("click", function () {
    closeModal($("#tambah-data-modal"));
});

$(document).on("click", ".error-response", function(){
    closeModal($(`#${modal}`));
})

let modal = "";
$("#tambah-data").on("click", function () {
    modal = "tambah-data-modal";
    $("#is-error").removeClass('error-response');
    $("#tambah-data-modal").modal('show');
})

function alertModal(status, message = null) {
    if (status) {
        $("#alert-image").attr(
            "src",
            "../../dashboard_assets/assets/images/gif/dashboard-8/successful.gif"
        );
        $("#alert-message").text("Success");
        $("#alert-message").text(message);
    } else {
        $("#alert-image").attr(
            "src",
            "../../dashboard_assets/assets/images/gif/danger.gif"
        );
        $("#alert-message").text("Gagal");
        $("#alert-message").html(message);
    }

    $("#alert").modal("show");
}

$("#tambah-data").on("click", function () {
    $("#tambah-data-modal").modal("show");
});

$(document).on("click", ".error-response", function () {
    $(`#${modal}`).modal("show");
});

$("#store").on("click", function () {
    $(`#${modal}`).modal('hide');
    let formData = new FormData();

    formData.append("_token", $("meta[name='csrf-token']").attr("content"));
    formData.append("nama", $("#nama").val());
    formData.append("email", $("#email").val());
    formData.append("username", $("#username").val());
    formData.append("token", $("#token").val());
    formData.append("foto", $("#foto")[0].files[0]);

    $.ajax({
        url: "/teacher/store",
        method: "POST",
        processData: false,
        contentType: false,
        data: formData,
        success: function (response) {
            if (response.status) {
                alertModal(true, "Berhasil memperbaharui data");
                $("#nama").val("");
                $("#email").val("");
                $("#username").val("");
                $("#token").val("");
                $("#foto").val("");


                let nextIndex = table.rows().count() + 1;

                let fotoUrl = response.data.foto
                    ? `../../storage/user/${response.data.foto}`
                    : `../own_assets/images/avatar.png`;

                let teacherCell = `
<div class="d-flex align-items-center">
    <div class="me-3">
        <img src="${fotoUrl}" alt="User Photo" class="rounded"
            style="width: 60px; height: 60px; object-fit: cover;">
    </div>
    <div class="d-flex flex-column">
        <strong>${response.data.name}</strong>
        <small class="text-muted">@${response.data.username}</small>
    </div>
</div>
`;

                let newRowData = [
                    nextIndex,
                    teacherCell,
                    response.data.email,
                    response.data.token,
                    `
<ul class="action d-flex justify-content-center">
    <li class="edit" data-id="${response.data.id}">
        <a href="#"><i class="icon-pencil-alt" style="font-size: 25px"></i></a>
    </li>
    <li class="delete" data-id="${response.data.id}">
        <a href="#"><i class="icon-trash" style="font-size: 25px"></i></a>
    </li>
</ul>
`
                ];

                table.row.add(newRowData).draw();

            } else {
                let message = `<div style="text-align: center; font-weight: bold; margin-bottom: 10px;">${response.message || "An error occurred."}</div>`;

                if (response.errors) {
                    const detailMessages = Object.values(response.errors)
                        .map(msgs => msgs[0])
                        .join("<br>");
                    message += `<div style="text-align: left;">${detailMessages}</div>`;
                }

                $("#is-error").addClass('error-response');
                alertModal(false, message);
            }

        },
        error: function (xhr) {
            let message = `<div style="text-align: center; font-weight: bold; margin-bottom: 10px;">An error occurred.</div>`;

            if (xhr.responseJSON) {
                if (xhr.responseJSON.message) {
                    message = `<div style="text-align: center; font-weight: bold; margin-bottom: 10px;">${xhr.responseJSON.message}</div>`;
                }
                if (xhr.responseJSON.errors) {
                    const detailMessages = Object.values(xhr.responseJSON.errors)
                        .map(msgs => msgs[0])
                        .join("<br>");
                    message += `<div style="text-align: left;">${detailMessages}</div>`;
                }
            }

            $("#is-error").addClass('error-response');
            alertModal(false, message);
        }
    });
})