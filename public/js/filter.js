$(document).ready(function() {
    $('#category').change(function() {
        var categoryId = $(this).val();
        $.ajax({
            url: '/filter/mains/' + categoryId,
            method: 'GET',
            success: function(data) {
                $('#main').html(data.html);
                $('#exam').html('<option value="">Sınav Seç</option>');
                $('#field').html('<option value="">Alan Seç</option>');
                $('#lesson').html('<option value="">Ders Seç</option>');
                $('#subject').html('<option value="">Konu Seç</option>');
            }
        });
    });

    $('#main').change(function() {
        var mainId = $(this).val();
        $.ajax({
            url: '/filter/exams/' + mainId,
            method: 'GET',
            success: function(data) {
                $('#exam').html(data.html);
                $('#field').html('<option value="">Alan Seç</option>');
                $('#lesson').html('<option value="">Ders Seç</option>');
                $('#subject').html('<option value="">Konu Seç</option>');
            }
        });
    });

    $('#exam').change(function() {
        var examId = $(this).val();
        $.ajax({
            url: '/filter/fields/' + examId,
            method: 'GET',
            success: function(data) {
                $('#field').html(data.html);
                $('#lesson').html('<option value="">Ders Seç</option>');
                $('#subject').html('<option value="">Konu Seç</option>');
            }
        });
    });

    $('#field').change(function() {
        var fieldId = $(this).val();
        $.ajax({
            url: '/filter/lessons/' + fieldId,
            method: 'GET',
            success: function(data) {
                $('#lesson').html(data.html);
                $('#subject').html('<option value="">Konu Seç</option>');
            }
        });
    });

    $('#lesson').change(function() {
        var lessonId = $(this).val();
        $.ajax({
            url: '/filter/subjects/' + lessonId,
            method: 'GET',
            success: function(data) {
                $('#subject').html(data.html);
            }
        });
    });
});
