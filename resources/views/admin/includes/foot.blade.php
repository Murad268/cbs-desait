<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/30.0.0/classic/ckeditor.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="{{asset('assets/admin/scripts/script.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>

    $('#portfolio__item__category_id').select2({
        tags: true,
        multiple: true,
        tokenSeparators: [',']
    });



    const imgBtn = document.querySelector('.add_photo');
    const ed = document.querySelector('.about_service')
    let editor;

    ClassicEditor
        .create(document.querySelector('.about_service'))
        .then(newEditor => {
            newEditor.model.document.on('change:data', () => {
                // This function will be called whenever the content changes
                if (editor.getData().includes('ZRJBuchHuimage@F!e$N3')) {
                    imgBtn.disabled = true;
                } else {
                    imgBtn.disabled = false;
                }
            });
            editor = newEditor;
        })
        .catch(error => {
            console.error(error);
        });

    imgBtn.addEventListener('click', (e) => {

        const cursorPosition = editor.model.document.selection.getFirstPosition();


        editor.model.change(writer => {
            writer.insertText('ZRJBuchHuimage@F!e$N3', cursorPosition);
        });


        if (editor.getData().includes('ZRJBuchHuimage@F!e$N3')) {
            imgBtn.disabled = true;
        } else {
            imgBtn.disabled = false;
        }
    });


    function deleteConfirmation(event, text = false) {
        event.preventDefault();

        Swal.fire({
            title:  text?'Are you sure?' + text:'Are you sure?',
            text: "This action cannot be undone!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!',
        }).then((result) => {
            if (result.isConfirmed) {
                event.target.submit(); // Təsdiq edildikdə formu göndər
            }
        });
    }
</script>
