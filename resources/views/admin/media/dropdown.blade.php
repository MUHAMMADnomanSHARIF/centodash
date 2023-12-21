<!--begin::Input group-->

<div class="fv-row w-100">
    <!--begin::Dropzone-->
    <div class="needsclick dropzone" id="{{ $dropzone_name ?? 'kt_dropzonejs_example_2' }}">

        <!--begin::Message-->
        <div class="dz-message needsclick ">
            <!--begin::Icon-->
            <i class="bi bi-file-earmark-arrow-up text-primary fs-3x"></i>
            <!--end::Icon-->

            <!--begin::Info-->
            <div class="ms-4">
                <h3 class="fs-5 fw-bold text-gray-900 mb-1">Drop file here or click to upload.</h3>
                <span class="fs-7 fw-semibold text-gray-400">Upload file</span>
            </div>
            <!--end::Info-->
        </div>
    </div>
    <!--end::Dropzone-->
</div>
@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.3.3/dist/sweetalert2.min.js"
    integrity="sha384-0xU6Mwv6yjU6HGj6iCr0q0jDfQ4Ui0PBAOQFCxjmdOv8epflj6zthiJ5F5O5KjZ" crossorigin="anonymous"></script>

<script type="text/javascript">
    var uploadedDocumentMap = {};
        var myDropzone = new Dropzone(
            '#kt_dropzonejs_example_2', {
                url: '{{ route('file.upload') }}',
                maxFiles: 1, // MB
                addRemoveLinks: true,
                headers: {
                    'X-CSRF-TOKEN': "{{ csrf_token() }}"
                },
                success: function(file, response) {
                    $('form').append('<input type="hidden" name="image" value="' + response.name +
                        '">')
                    uploadedDocumentMap[file.name] = response.name
                },
                removedfile: function(file) {
                    file.previewElement.remove()
                    $('form').find('input[name="image"][value="' + file.name + '"]').remove()
                    var name = ''
                    if (typeof file.file_name !== 'undefined') {
                        name = file.file_name
                    } else {
                        name = uploadedDocumentMap[file.name]
                    }
                    $('form').find('input[name="image"][value="' + name + '"]').remove()
                },
                init: function() {
                    @if (isset($file) && $file->getFirstMediaUrl($collection_name))
                        var fileUrl = {!! json_encode($file->getFirstMediaUrl($collection_name)) !!}
                        var file = {
                            name: fileUrl
                        };
                        this.options.addedfile.call(this, file);
                        this.emit("thumbnail", file, fileUrl);
                        $('form').append('<input type="hidden" name="image" value="' + fileUrl + '">');

                        uploadedDocumentMap[file.name] = file;
                    @endif

                    this.on("maxfilesexceeded", function(file) {
                        myDropzone.removeFile(file);
                        Swal.fire({
                            title: 'Error !',
                            text: "You can't upload more than 1 file !",
                            icon: 'warning',
                            showCancelButton: true,
                            confirmButtonColor: '#3085d6',
                            cancelButtonColor: '#d33',
                            confirmButtonText: 'Remove Selected File'
                        }).then((result) => {
                            if (result.value) {
                                myDropzone.removeAllFiles();
                                Swal.fire(
                                    'Removed!',
                                    'Your file has been deleted.',
                                    'success'
                                )
                            }
                        })

                    });
                }
            });
</script>
@endpush
