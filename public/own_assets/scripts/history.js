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
        url: "/teacher/search",
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
                                        <span class="badge rounded-pill badge-primary text-white mb-2">Teacher</span>
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

let offset = 0;
const limit = 20;

function getType(text){
    switch(text){
        case 'tfng':
            return 'True / False / Not Given';
        case 'sa':
            return 'Short Answer';
        case 'tc':
            return 'Table Completion';
        case 'mh':
            return 'Matching Headings';
        case 'oc':
            return 'One Choice';
        case 'mse':
            return 'Matching Sentence Ending';
        case 'ynng':
            return 'Yes / No / Not Given';
        case 'nc':
            return 'Note Completion';
        case 'two_choices':
            return 'Tow Choices';
        default:
            return 'Unknown';
    }
}

function loadHistories() {
    $.ajax({
        url: '/history/load-data',
        method: 'GET',
        data: { offset: offset, limit: limit },
        beforeSend: function() {
            $("#loadMoreBtn").prop("disabled", true)
                .html('<i class="fa fa-spinner fa-spin me-2"></i> Loading...');
        },
        success: function(response) {
            const container = $("#historyContainer");

            if (response.status && response.data.length > 0) {
                response.data.forEach(h => {
                    const kategori = h.kategori ? h.kategori.toLowerCase() : '';
                    const tipe = h.tipe ? h.tipe.toLowerCase() : '';
                    const foto = h.student && h.student.foto
                        ? `/storage/foto_profile/${h.student.foto}`
                        : `/own_assets/images/avatar.png`;

                    const card = `
                        <div class="col-12 col-md-6 col-lg-4 history-card detail-user"
                             data-kategori="${kategori}"
                             data-tipe="${tipe}"
                             data-set="${h.set_soal_id}"
                             data-date="${h.created_at.substring(0, 10)}">
                            <div class="card shadow-sm border-0 mb-3">
                                <div class="card-body">
                                    <div class="d-flex align-items-center mb-3">
                                        <img src="${foto}" alt="User Photo"
                                             class="rounded-circle me-3"
                                             style="width: 50px; height: 50px; object-fit: cover;">
                                        <div>
                                            <h6 class="mb-0 fw-bold">${h.student?.name ?? 'Unknown'}</h6>
                                            <small class="text-muted">${h.student?.email ?? '-'}</small>
                                        </div>
                                    </div>
                                    <div class="mb-2">
                                        <span class="fw-semibold text-secondary">Category:</span>
                                        <span class="badge text-bg-primary">${kategori}</span>
                                    </div>
                                    <div class="mb-2">
                                        <span class="fw-semibold text-secondary">Type:</span>
                                        <span class="badge rounded-pill text-bg-info">${getType(tipe)}</span>
                                    </div>
                                    <div class="mb-2">
                                        <span class="fw-semibold text-secondary">Set:</span>
                                        <strong>${h.set_soal?.name ?? 'Unknown Set'}</strong>
                                    </div>
                                    <div class="mb-2">
                                        <span class="fw-semibold text-secondary">Score:</span>
                                        <span class="fw-bold">${h.score ?? 0}/${h.detail_histories?.length ?? 0}</span>
                                    </div>
                                    <div class="text-muted small">${new Date(h.created_at).toLocaleString()}</div>
                                </div>
                            </div>
                        </div>`;
                    container.append(card);
                });

                // Update offset dari server
                offset = response.next_offset;

                // Jika masih ada data, tampilkan tombol load more
                if (response.has_more) {
                    $("#loadMoreBtn").prop("disabled", false)
                        .html('<i class="fa fa-chevron-down me-1"></i> Load More')
                        .show();
                } else {
                    $("#loadMoreBtn").hide();
                }

            } else {
                if (offset === 0) {
                    container.html(`
                        <div class="col-12">
                            <div class="alert alert-info text-center">No history available.</div>
                        </div>
                    `);
                }
                $("#loadMoreBtn").hide();
            }
        },
        error: function(xhr) {
            console.error(xhr.responseText);
            $("#loadMoreBtn").prop("disabled", false).text("Load More");
        }
    });
}

$(document).ready(function() {
    loadHistories();

    $("#loadMoreBtn").on("click", function() {
        loadHistories();
    });
});
