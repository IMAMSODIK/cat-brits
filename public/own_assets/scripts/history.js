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

$(document).on("click", ".error-response", function () {
    closeModal($(`#${modal}`));
})

$(document).on("click", ".detail-user", function () {
    userDetail = $((this));
    $('body').css('cursor', 'wait');
    $("#is-error").removeClass('error-response');
    let id = $(this).data('id');
    
    location.href = `/history/detail?id=${id}`;
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

$("#search").on('input', function () {
    let text = $(this).val();

    $.ajax({
        url: "/history/search",
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
                        <div class="col-6 col-xl-3 col-sm-3 detail-user" style="cursor: pointer" data-id="${user.id}">
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
        url: "/history/load-more",
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
                        <div class="col-6 col-xl-3 col-sm-3 detail-user" style="cursor: pointer"
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
