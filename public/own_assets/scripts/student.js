let modal = "", userDetail = "";

function closeModal(element) {
    element.modal("hide");
}

$("#filter").on("click", function () {
    let section = $("#filter-section");

    if (section.hasClass("d-none")) {
        section.removeClass("d-none").hide().slideDown(200);
    } else {
        section.slideUp(200, function () {
            section.addClass("d-none");
        });
    }
});


$("#cancel-edit").on("click", function () {
    closeModal($("#edit-data-modal"));
});

$("#cancel-add").on("click", function () {
    closeModal($("#tambah-data-modal"));
});

$(document).on("click", ".error-response", function () {
    closeModal($(`#${modal}`));
})

$("#tambah-data").on("click", function () {
    modal = "tambah-data-modal";
    $(`#${modal}`).modal("show");
});

$(document).on("click", ".detail-user", function () {
    userDetail = $((this));
    $('body').css('cursor', 'wait');
    $("#is-error").removeClass('error-response');
    let id = $(this).data('id');
    modal = "edit-data-modal";

    $.ajax({
        url: "/students/detail",
        method: "GET",
        data: {
            'id': id,
        },
        success: function (response) {
            $('body').css('cursor', 'default');
            if (response.status) {
                $("#id").val(response.data.id);
                $("#edit_nama").val(response.data.name);
                $("#edit_email").val(response.data.email);
                let foto = (response.data.foto) ? `../../storage/${response.data.foto}` : '/own_assets/images/avatar.png';
                $("#preview-edit_foto").attr("src", foto).removeClass("d-none");

                if (response.data.status == 1) {
                    $("#delete").show();
                    $("#activate").hide();
                } else {
                    $("#delete").hide();
                    $("#activate").show();
                }


                $(`#${modal}`).modal("show");
            } else {
                let message = `<div style="text-align: center; font-weight: bold; margin-bottom: 10px;">${response.message || "An error occurred."}</div>`;

                if (response.errors) {
                    const detailMessages = Object.values(response.errors)
                        .map(msgs => msgs[0])
                        .join("<br>");
                    message += `<div style="text-align: center;">${detailMessages}</div>`;
                }
                alertModal(false, message);
            }

        },
        error: function (xhr) {
            $('body').css('cursor', 'default');
            let message = `<div style="text-align: center; font-weight: bold; margin-bottom: 10px;">An error occurred.</div>`;

            if (xhr.responseJSON) {
                if (xhr.responseJSON.message) {
                    message = `<div style="text-align: center; font-weight: bold; margin-bottom: 10px;">${xhr.responseJSON.message}</div>`;
                }
                if (xhr.responseJSON.errors) {
                    const detailMessages = Object.values(xhr.responseJSON.errors)
                        .map(msgs => msgs[0])
                        .join("<br>");
                    message += `<div style="text-align: center;">${detailMessages}</div>`;
                }
            }
            alertModal(false, message);
        }
    });
})

$(document).on("click", ".error-response", function () {
    $(`#${modal}`).modal("show");
});

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

$("#foto").on("change", function () {
    let file = this.files[0];
    if (file) {
        let reader = new FileReader();
        reader.onload = function (e) {
            $("#preview-foto")
                .attr("src", e.target.result)
                .removeClass("d-none");
        };
        reader.readAsDataURL(file);
    } else {
        $("#preview-foto").attr("src", "#").addClass("d-none");
    }
});

$("#edit_foto").on("change", function () {
    let file = this.files[0];
    if (file) {
        let reader = new FileReader();
        reader.onload = function (e) {
            $("#preview-edit_foto")
                .attr("src", e.target.result)
                .removeClass("d-none");
        };
        reader.readAsDataURL(file);
    } else {
        $("#preview-edit_foto").attr("src", "#").addClass("d-none");
    }
});

$("#store").on("click", function () {
    let formData = new FormData();
    let button = $(this);

    $('body').css('cursor', 'wait');
    $(button).prop('disabled', true);

    let file = $("#foto")[0].files[0];
    if (file) {
        formData.append("foto", file);
    }
    formData.append("_token", $("meta[name='csrf-token']").attr("content"));
    formData.append("nama", $("#nama").val());
    formData.append("email", $("#email").val());

    $.ajax({
        url: "/students/store",
        method: "POST",
        processData: false,
        contentType: false,
        data: formData,
        success: function (response) {
            $(`#${modal}`).modal("hide");

            $('body').css('cursor', 'default');
            $(button).prop('disabled', false);

            if (response.status) {
                alertModal(true, response.message);
                $("#nama").val("");
                $("#email").val("");
                $("#foto").val("");
                $("#preview-foto").attr("src", "#").addClass("d-none");

                let foto = (response.data.foto) ? `../../storage/${response.data.foto}` : '/own_assets/images/avatar.png';

                let row = `
                    <div class="col-6 col-xl-3 col-md-3 detail-user" style="cursor: pointer" data-id="${response.data.id}" data-status="${response.data.status}">
                        <div class="card">
                            <div class="product-box">
                                <div class="product-img">
                                    <img class="img-fluid" src="${foto}" alt="Profile Picture">
                                    <div class="ribbon ribbon-${(response.data.status) ? 'success' : 'danger'}">${(response.data.status) ? 'Active' : 'Nonactive'}</div>
                                </div>
                                <div class="product-details">
                                    <span class="badge rounded-pill badge-primary text-white mb-2">Student</span>
                                    <h5>${response.data.name}</h5>
                                    <p>${response.data.email}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                `;

                $(".data-ctr").prepend(row);
                $("#is-error").removeClass('error-response');
            } else {
                let message = `<div style="text-align: center; font-weight: bold; margin-bottom: 10px;">${response.message || "An error occurred."}</div>`;

                if (response.errors) {
                    const detailMessages = Object.values(response.errors)
                        .map(msgs => msgs[0])
                        .join("<br>");
                    message += `<div style="text-align: center;">${detailMessages}</div>`;
                }

                $("#is-error").addClass('error-response');
                alertModal(false, message);
            }

        },
        error: function (xhr) {
            $(`#${modal}`).modal("hide");
            $('body').css('cursor', 'default');
            $(button).prop('disabled', false);

            let message = `<div style="text-align: center; font-weight: bold; margin-bottom: 10px;">An error occurred.</div>`;

            if (xhr.responseJSON) {
                if (xhr.responseJSON.message) {
                    message = `<div style="text-align: center; font-weight: bold; margin-bottom: 10px;">${xhr.responseJSON.message}</div>`;
                }
                if (xhr.responseJSON.errors) {
                    const detailMessages = Object.values(xhr.responseJSON.errors)
                        .map(msgs => msgs[0])
                        .join("<br>");
                    message += `<div style="text-align: center;">${detailMessages}</div>`;
                }
            }

            $("#is-error").addClass('error-response');
            alertModal(false, message);
        }
    });
})

$("#update").on("click", function () {
    let formData = new FormData();
    let button = $(this);

    $('body').css('cursor', 'wait');
    $(button).prop('disabled', true);

    let file = $("#edit_foto")[0].files[0];
    if (file) {
        formData.append("foto", file);
    }
    formData.append("_token", $("meta[name='csrf-token']").attr("content"));
    formData.append("id", $("#id").val());
    formData.append("nama", $("#edit_nama").val());
    formData.append("email", $("#edit_email").val());

    $.ajax({
        url: "/students/update",
        method: "POST",
        processData: false,
        contentType: false,
        data: formData,
        success: function (response) {
            $(`#${modal}`).modal("hide");

            $('body').css('cursor', 'default');
            $(button).prop('disabled', false);

            if (response.status) {
                alertModal(true, response.message);
                $("#edit_nama").val("");
                $("#edit_email").val("");
                $("#edit_foto").val("");
                $("#preview-edit_foto").attr("src", "#").addClass("d-none");

                let foto = (response.data.foto) ? `../../storage/${response.data.foto}` : '/own_assets/images/avatar.png';

                userDetail.find("img.img-fluid").attr("src", foto);
                userDetail.find("h5").text(response.data.name);
                userDetail.find("p").text(response.data.email);

                $("#is-error").removeClass('error-response');
            } else {
                let message = `<div style="text-align: center; font-weight: bold; margin-bottom: 10px;">${response.message || "An error occurred."}</div>`;

                if (response.errors) {
                    const detailMessages = Object.values(response.errors)
                        .map(msgs => msgs[0])
                        .join("<br>");
                    message += `<div style="text-align: center;">${detailMessages}</div>`;
                }

                $("#is-error").addClass('error-response');
                alertModal(false, message);
            }

        },
        error: function (xhr) {
            $(`#${modal}`).modal("hide");
            $('body').css('cursor', 'default');
            $(button).prop('disabled', false);

            let message = `<div style="text-align: center; font-weight: bold; margin-bottom: 10px;">An error occurred.</div>`;

            if (xhr.responseJSON) {
                if (xhr.responseJSON.message) {
                    message = `<div style="text-align: center; font-weight: bold; margin-bottom: 10px;">${xhr.responseJSON.message}</div>`;
                }
                if (xhr.responseJSON.errors) {
                    const detailMessages = Object.values(xhr.responseJSON.errors)
                        .map(msgs => msgs[0])
                        .join("<br>");
                    message += `<div style="text-align: center;">${detailMessages}</div>`;
                }
            }

            $("#is-error").addClass('error-response');
            alertModal(false, message);
        }
    });
})

$("#reset").on("click", function () {
    let formData = new FormData();
    let button = $(this);

    $('body').css('cursor', 'wait');
    $(button).prop('disabled', true);

    let file = $("#edit_foto")[0].files[0];
    if (file) {
        formData.append("foto", file);
    }
    formData.append("_token", $("meta[name='csrf-token']").attr("content"));
    formData.append("id", $("#id").val());

    $.ajax({
        url: "/students/reset-password",
        method: "POST",
        processData: false,
        contentType: false,
        data: formData,
        success: function (response) {
            $(`#${modal}`).modal("hide");

            $('body').css('cursor', 'default');
            $(button).prop('disabled', false);

            if (response.status) {
                alertModal(true, response.message);

                $("#is-error").removeClass('error-response');
            } else {
                let message = `<div style="text-align: center; font-weight: bold; margin-bottom: 10px;">${response.message || "An error occurred."}</div>`;

                if (response.errors) {
                    const detailMessages = Object.values(response.errors)
                        .map(msgs => msgs[0])
                        .join("<br>");
                    message += `<div style="text-align: center;">${detailMessages}</div>`;
                }

                $("#is-error").addClass('error-response');
                alertModal(false, message);
            }

        },
        error: function (xhr) {
            $(`#${modal}`).modal("hide");
            $('body').css('cursor', 'default');
            $(button).prop('disabled', false);

            let message = `<div style="text-align: center; font-weight: bold; margin-bottom: 10px;">An error occurred.</div>`;

            if (xhr.responseJSON) {
                if (xhr.responseJSON.message) {
                    message = `<div style="text-align: center; font-weight: bold; margin-bottom: 10px;">${xhr.responseJSON.message}</div>`;
                }
                if (xhr.responseJSON.errors) {
                    const detailMessages = Object.values(xhr.responseJSON.errors)
                        .map(msgs => msgs[0])
                        .join("<br>");
                    message += `<div style="text-align: center;">${detailMessages}</div>`;
                }
            }

            $("#is-error").addClass('error-response');
            alertModal(false, message);
        }
    });
})

$("#delete").on("click", function () {
    let formData = new FormData();
    let button = $(this);

    $('body').css('cursor', 'wait');
    $(button).prop('disabled', true);

    formData.append("_token", $("meta[name='csrf-token']").attr("content"));
    formData.append("id", $("#id").val());

    $.ajax({
        url: "/students/delete",
        method: "POST",
        processData: false,
        contentType: false,
        data: formData,
        success: function (response) {
            $(`#${modal}`).modal("hide");

            $('body').css('cursor', 'default');
            $(button).prop('disabled', false);

            if (response.status) {
                alertModal(true, response.message);
                userDetail.attr("data-status", response.data.status);
                if (response.data.status == 1) {
                    userDetail.find(".ribbon")
                        .removeClass("ribbon-danger")
                        .addClass("ribbon-success")
                        .text("Active");
                } else {
                    userDetail.find(".ribbon")
                        .removeClass("ribbon-success")
                        .addClass("ribbon-danger")
                        .text("Nonactive");
                }

                $("#is-error").removeClass('error-response');
            } else {
                let message = `<div style="text-align: center; font-weight: bold; margin-bottom: 10px;">${response.message || "An error occurred."}</div>`;

                if (response.errors) {
                    const detailMessages = Object.values(response.errors)
                        .map(msgs => msgs[0])
                        .join("<br>");
                    message += `<div style="text-align: center;">${detailMessages}</div>`;
                }

                $("#is-error").addClass('error-response');
                alertModal(false, message);
            }

        },
        error: function (xhr) {
            $(`#${modal}`).modal("hide");
            $('body').css('cursor', 'default');
            $(button).prop('disabled', false);

            let message = `<div style="text-align: center; font-weight: bold; margin-bottom: 10px;">An error occurred.</div>`;

            if (xhr.responseJSON) {
                if (xhr.responseJSON.message) {
                    message = `<div style="text-align: center; font-weight: bold; margin-bottom: 10px;">${xhr.responseJSON.message}</div>`;
                }
                if (xhr.responseJSON.errors) {
                    const detailMessages = Object.values(xhr.responseJSON.errors)
                        .map(msgs => msgs[0])
                        .join("<br>");
                    message += `<div style="text-align: center;">${detailMessages}</div>`;
                }
            }

            $("#is-error").addClass('error-response');
            alertModal(false, message);
        }
    });
})

$("#activate").on("click", function () {
    let formData = new FormData();
    let button = $(this);

    $('body').css('cursor', 'wait');
    $(button).prop('disabled', true);

    formData.append("_token", $("meta[name='csrf-token']").attr("content"));
    formData.append("id", $("#id").val());

    $.ajax({
        url: "/students/activate",
        method: "POST",
        processData: false,
        contentType: false,
        data: formData,
        success: function (response) {
            $(`#${modal}`).modal("hide");

            $('body').css('cursor', 'default');
            $(button).prop('disabled', false);

            if (response.status) {
                alertModal(true, response.message);
                userDetail.attr("data-status", response.data.status);
                if (response.data.status == 1) {
                    userDetail.find(".ribbon")
                        .removeClass("ribbon-danger")
                        .addClass("ribbon-success")
                        .text("Active");
                } else {
                    userDetail.find(".ribbon")
                        .removeClass("ribbon-success")
                        .addClass("ribbon-danger")
                        .text("Nonactive");
                }

                $("#is-error").removeClass('error-response');
            } else {
                let message = `<div style="text-align: center; font-weight: bold; margin-bottom: 10px;">${response.message || "An error occurred."}</div>`;

                if (response.errors) {
                    const detailMessages = Object.values(response.errors)
                        .map(msgs => msgs[0])
                        .join("<br>");
                    message += `<div style="text-align: center;">${detailMessages}</div>`;
                }

                $("#is-error").addClass('error-response');
                alertModal(false, message);
            }

        },
        error: function (xhr) {
            $(`#${modal}`).modal("hide");
            $('body').css('cursor', 'default');
            $(button).prop('disabled', false);

            let message = `<div style="text-align: center; font-weight: bold; margin-bottom: 10px;">An error occurred.</div>`;

            if (xhr.responseJSON) {
                if (xhr.responseJSON.message) {
                    message = `<div style="text-align: center; font-weight: bold; margin-bottom: 10px;">${xhr.responseJSON.message}</div>`;
                }
                if (xhr.responseJSON.errors) {
                    const detailMessages = Object.values(xhr.responseJSON.errors)
                        .map(msgs => msgs[0])
                        .join("<br>");
                    message += `<div style="text-align: center;">${detailMessages}</div>`;
                }
            }

            $("#is-error").addClass('error-response');
            alertModal(false, message);
        }
    });
})

$("#search").on('input', function () {
    let text = $(this).val();

    $.ajax({
        url: "/students/search",
        method: "GET",
        data: { q: text },
        success: function (response) {
            $(".data-ctr").empty();

            if (response.status) {
                response.data.forEach(function (user) {
                    let foto = (user.foto) ? `/storage/${user.foto}` : '/own_assets/images/avatar.png';
                    let statusRibbon = (user.status == 1) 
                        ? `<div class="ribbon ribbon-success">Active</div>`
                        : `<div class="ribbon ribbon-danger">Nonactive</div>`;

                    let row = `
                        <div class="col-6 col-xl-3 col-md-3 detail-user" style="cursor: pointer" data-id="${user.id}">
                            <div class="card">
                                <div class="product-box">
                                    <div class="product-img">
                                        <img class="img-fluid" src="${foto}" alt="Profile Picture">
                                        ${statusRibbon}
                                    </div>
                                    <div class="product-details">
                                        <span class="badge rounded-pill badge-primary text-white mb-2">Student</span>
                                        <h5>${user.name}</h5>
                                        <p>${user.email}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    `;
                    $(".data-ctr").append(row);
                });
            } else {
                $(".data-ctr").html(`
                    <div class="col-12 text-center">
                        <p style="font-weight:bold; color:#999;">${response.message}</p>
                    </div>
                `);
            }
        },
        error: function () {
            $(".data-ctr").html(`
                <div class="col-12 text-center">
                    <p style="font-weight:bold; color:red;">An error occurred while searching.</p>
                </div>
            `);
        }
    });
});

$("#apply-filter").on("click", function () {
    let status = $("#filter-status").val().trim();

    $(".detail-user").each(function () {
        let userStatus = $(this).attr("data-status");

        if (status === "" || userStatus == status) {
            $(this).show();
        } else {
            $(this).hide();
        }
    });
});

let offset = 20;

$("#load-more").on("click", function() {
    let button = $(this);
    button.prop("disabled", true).text("Loading...");

    $.ajax({
        url: "/students/load-more",
        method: "GET",
        data: { offset: offset },
        success: function(response) {
            if (response.status && response.data.length > 0) {
                response.data.forEach(user => {
                    let foto = user.foto 
                        ? `/storage/${user.foto}` 
                        : '/own_assets/images/avatar.png';
                    
                    let statusRibbon = (user.status == 1)
                        ? `<div class="ribbon ribbon-success">Active</div>`
                        : `<div class="ribbon ribbon-danger">Nonactive</div>`;

                    let row = `
                        <div class="col-6 col-xl-3 col-md-3 detail-user" style="cursor: pointer"
                             data-id="${user.id}" data-status="${user.status}">
                            <div class="card">
                                <div class="product-box">
                                    <div class="product-img">
                                        <img class="img-fluid" src="${foto}" alt="Profile Picture">
                                        ${statusRibbon}
                                    </div>
                                    <div class="product-details">
                                        <span class="badge rounded-pill badge-primary text-white mb-2">Student</span>
                                        <h5>${user.name}</h5>
                                        <p>${user.email}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    `;

                    $(".data-ctr").append(row);
                });

                offset += response.data.length;
                button.prop("disabled", false).html(`<i class="fa fa-plus-circle me-2"></i> Load More`);
            } else {
                button.prop("disabled", true).text("No more data");
            }
        },
        error: function() {
            button.prop("disabled", false).text("Load More");
            alert("Failed to load data.");
        }
    });
});
