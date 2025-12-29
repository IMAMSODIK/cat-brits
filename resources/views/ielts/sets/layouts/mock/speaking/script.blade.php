<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Add animation to table rows
        const tableRows = document.querySelectorAll('tbody tr');
        tableRows.forEach((row, index) => {
            row.style.animationDelay = `${index * 0.1}s`;
        });

        // Add hover effects to session cards
        const sessionCards = document.querySelectorAll('.session-card');
        sessionCards.forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-3px)';
            });

            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
            });
        });
    });

    function confirmExit() {
        if (confirm('Are you sure you want to end the test?')) {
            location.href = '/ielts/categories?set-id={{ $set->kode }}';
        }
    }

    document.getElementById('infoBtn').addEventListener('click', function() {
        alert(
            'Instructions:\n' +
            '- This is a mock Speaking Test conducted via video call\n' +
            '- You will speak directly with a teacher/examiner\n' +
            '- Make sure your microphone and camera are working properly\n' +
            '- Answer clearly and confidently\n' +
            '- The test will end when the teacher finishes the session'
        );
    });
</script>

<script>
    $(document).ready(function() {
        let modal = null;

        function initModal() {
            modal = new bootstrap.Modal(document.getElementById('requestSessionModal'));
        }

        $(document).on('click', '.request-session', function(e) {
            e.preventDefault();
            setDefaultDateTime();
            initModal();
            modal.show();
        });

        function setDefaultDateTime() {
            const now = new Date();

            const tomorrow = new Date(now);
            tomorrow.setDate(tomorrow.getDate() + 1);

            // KONVERSI KE LOCAL DATETIME (BUKAN UTC)
            const localDateTime = new Date(
                tomorrow.getTime() - tomorrow.getTimezoneOffset() * 60000
            ).toISOString().slice(0, 16);

            $('#proposed_time').val(localDateTime);
            $('#proposed_time').attr('min', localDateTime);
        }


        function validateForm() {
            let isValid = true;
            $('.form-control, .form-select').removeClass('is-invalid');
            $('.invalid-feedback').hide();

            if (!$('#teacher_id').val()) {
                $('#teacher_id').addClass('is-invalid').next('.invalid-feedback').show();
                isValid = false;
            }

            if (!$('#title').val().trim()) {
                $('#title').addClass('is-invalid').next('.invalid-feedback').show();
                isValid = false;
            }

            const proposedTime = new Date($('#proposed_time').val());
            const now = new Date();
            if (!proposedTime || proposedTime <= now) {
                $('#proposed_time').addClass('is-invalid').next('.invalid-feedback').show();
                isValid = false;
            }

            return isValid;
        }

        function showSuccessMessage() {
            const form = $('#sessionRequestForm');
            const successHTML = `
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <i class="fas fa-check-circle me-2"></i>
                        <strong>Success!</strong> Your session request has been submitted. The teacher will review it soon.
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                `;

            form.before(successHTML);

            setTimeout(() => {
                $('.alert-success').alert('close');
            }, 5000);
        }

        function resetForm() {
            $('#sessionRequestForm')[0].reset();
            setDefaultDateTime();
            $('.form-control, .form-select').removeClass('is-invalid');
            $('.invalid-feedback').hide();
            $('.alert-success').alert('close');
        }

        $('.form-control, .form-select').on('blur', function() {
            if (this.checkValidity()) {
                $(this).removeClass('is-invalid').addClass('is-valid');
            } else {
                $(this).removeClass('is-valid').addClass('is-invalid');
            }
        });

        $('#description').on('input', function() {
            const charCount = $(this).val().length;
            const counter = $(this).parent().find('.char-counter') ||
                $(
                    '<small class="char-counter text-muted" style="display:block; margin-top:5px;"></small>'
                )
                .insertAfter($(this));

            counter.text(`${charCount}/500 characters`);

            if (charCount > 400) {
                counter.css('color', '#ef4444');
            } else if (charCount > 300) {
                counter.css('color', '#f59e0b');
            } else {
                counter.css('color', '#6b7280');
            }
        });

        $(document).on('keydown', function(e) {
            if (e.key === 'Escape' && modal) {
                modal.hide();
                resetForm();
            }
        });

        $("#submitRequestBtn").on("click", function() {
            let form = $("#mockTestForm");

            let formData = {
                teacher_id: $("#teacher_id").val(),
                title: $("#title").val(),
                description: $("#description").val(),
                proposed_time: $("#proposed_time").val(),
                duration_minutes: $("#duration_minutes").val(),
                setSoal: $("#set-id").val(),
                _token: "{{ csrf_token() }}"
            };

            $.ajax({
                url: "{{ route('mock-test.post') }}",
                method: "POST",
                data: formData,
                beforeSend: function() {
                    $("#submitRequestBtn").prop("disabled", true).html(`
                        <i class="fas fa-spinner fa-spin"></i> Processing...
                    `);
                },
                success: function(response) {
                    Swal.fire({
                        toast: true,
                        position: "top-end",
                        icon: "success",
                        title: "Mock test request submitted!",
                        showConfirmButton: false,
                        timer: 2500
                    });

                    setTimeout(() => {
                        location.reload();
                    }, 1200);
                },
                error: function(xhr) {
                    try {
                        if (xhr.status === 422) {
                            let errors = xhr.responseJSON.errors;
                            $(".is-invalid").removeClass("is-invalid");

                            for (let field in errors) {
                                $(`#${field}`).addClass("is-invalid");
                            }

                            Swal.fire({
                                toast: true,
                                position: "top-end",
                                icon: "error",
                                title: "Please check your input.",
                                showConfirmButton: false,
                                timer: 2500
                            });

                        } else {
                            Swal.fire({
                                icon: "error",
                                title: "Error!",
                                text: "Something went wrong. Please try again.",
                            });
                        }

                    } catch (e) {
                        Swal.fire({
                            icon: "error",
                            title: "Unexpected Error",
                            text: e.message,
                        });
                    }

                },
                complete: function() {
                    $("#submitRequestBtn").prop("disabled", false).html(`
                        <i class="fas fa-paper-plane me-2"></i> Submit Request
                    `);
                }
            });

        });

        setDefaultDateTime();
    });
</script>

<script>
    // aksi detial
    $(document).on("click", ".btn-detail", function() {
        let id = $(this).data("id");
        console.log(id);

        $("#detailModalContent").html(`
                <div class="p-5 text-center">
                    <i class="fa fa-spinner fa-spin fa-2x"></i>
                </div>
            `);

        $("#detailModal").modal("show");

        $.ajax({
            url: "/mock-test/" + id + "/show",
            method: "GET",
            success: function(res) {
                $("#detailModalContent").html(res.html);
            },
            error: function() {
                $("#detailModalContent").html(`
                        <div class="alert alert-danger m-3">
                            <i class="fa fa-exclamation-circle me-2"></i>
                            Failed to load session details.
                        </div>
                    `);
            }
        });
    });
</script>
