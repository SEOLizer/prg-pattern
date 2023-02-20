$(document).ready(
    $('.prglink').click(function() {
        $('#prgu').val($(this).attr('data-adr'));
        $('#prgh').val($(this).attr('data-hash'));
        document.getElementById('prgform').submit();
    })
);