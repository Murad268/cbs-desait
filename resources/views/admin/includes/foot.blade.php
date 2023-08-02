<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/30.0.0/classic/ckeditor.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="{{asset('assets/admin/scripts/script.js')}}"></script>

<script>
    const editors = document.querySelectorAll("#editor");
    editors.forEach(editor => {
        ClassicEditor
            .create(editor)
            .catch(error => {
                console.error(error);
            });
    });

    $('#portfolio__item__category_id').select2({
        tags: true,
        multiple: true,
        tokenSeparators: [',']
    });
</script>
