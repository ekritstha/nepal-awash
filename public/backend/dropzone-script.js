// Dropzone.autoDiscover = false;
$(".dropzone").dropzone({
    addRemoveLinks: true,
    init: function () {
        myDropzone = this;
        $.ajax({
            // url: "/gallery",
            url: "/admin/gallery/get-images/" + ample.current_id,
            type: "GET",
            dataType: "json",
            success: function (data) {
                //console.log(data);
                $.each(data, function (key, value) {
                    var file = { name: value.name, size: value.size };
                    myDropzone.options.addedfile.call(myDropzone, file);
                    myDropzone.options.thumbnail.call(
                        myDropzone,
                        file,
                        value.path
                    );
                    myDropzone.emit("complete", file);
                });
            },
        });
    },
    removedfile: function (file) {
        if (this.options.dictRemoveFile) {
            return Dropzone.confirm(
                "Are You Sure to " + this.options.dictRemoveFile,
                function () {
                    if (file.previewElement.id != "") {
                        var name = file.previewElement.id;
                    } else {
                        var name = file.name;
                    }
                    //console.log(name);
                    $.ajax({
                        headers: {
                            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                                "content"
                            ),
                        },
                        type: "DELETE",
                        url: "/admin/gallery/destroy",
                        data: { filename: name },
                        success: function (data) {
                            alert(
                                data.success +
                                    " File has been successfully removed!"
                            );
                        },
                        error: function (e) {
                            console.log(e);
                        },
                    });
                    var fileRef;
                    return (fileRef = file.previewElement) != null
                        ? fileRef.parentNode.removeChild(file.previewElement)
                        : void 0;
                }
            );
        }
    },
});
