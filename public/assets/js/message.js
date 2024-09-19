$(document).ready(function () {
    $(document).on("click", "#sent_message", function (event) {
        event.preventDefault();

        const formSentMessage = $("#form_sent_message")[0];
        const formData = new FormData(formSentMessage);

        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
        });

        const getUrl = "{{ url('/sent_message') }}";
        const moduleName = "Submit";

        const errors = validateFields(formSentMessage);
        if (errors.length > 0) {
            Swal.fire({
                icon: 'error',
                title: 'Validation Errors',
                html: `<ul>${errors.map(err => `<li>${err}</li>`).join('')}</ul>`,
                showConfirmButton: true,
            });
            return;
        }

        const button = $("#submit");
        setLoadingState(button, true, moduleName);

        $.ajax({
            url: getUrl,
            method: "POST",
            contentType: false,
            processData: false,
            data: formData,
            dataType: "json",
            success: function (response) {
                handleResponse(response, button, moduleName);
                $("form").trigger("reset");
            },
            error: function (error) {
                handleError(error, button);
            },
        });
    });

    function validateFields(form) {
        const errors = [];
        const name = form.name.value.trim();
        const email = form.email.value.trim();
        const subject = form.subject.value.trim();
        const message = form.message.value.trim();

        if (!name) errors.push("Full Name is required.");
        if (!email) errors.push("Email Address is required.");
        if (!subject) errors.push("Subject is required.");
        if (!message) errors.push("Comment is required.");
        if (email && !/^\S+@\S+\.\S+$/.test(email)) {
            errors.push("Email Address is not valid.");
        }

        return errors;
    }

    function setLoadingState(button, isLoading, moduleName) {
        if (isLoading) {
            button.html("<span class='spinner-border spinner-border-sm' role='status' aria-hidden='true'></span> Processing...");
            button.prop("disabled", true);
        } else {
            button.html("Submit");
            button.prop("disabled", false);
        }
    }

    function handleResponse(response, button, moduleName) {
        setLoadingState(button, false, moduleName);

        if (response.message == 200) {
            Swal.fire({
                toast: true,
                icon: "success",
                title: "Message Sent Successfully..!",
                animation: false,
                position: "top-right",
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
            });
        } else {
            Swal.fire({
                toast: true,
                icon: "error",
                title: "Message Not Sent Successfully..! ",
                animation: false,
                position: "top-right",
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
            });
        }
    }

    function handleError(error, button) {
        setLoadingState(button, false, "module");
        const errors = error.responseJSON.errors;
        $.each(errors, function (index, value) {
            $("#" + index).html(value);
        });
    }
});
