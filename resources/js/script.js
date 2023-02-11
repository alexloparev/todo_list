function addTodo() {
    $tableLast = $('tbody tr').last();
    if ($tableLast.attr('class') == 'addition') {
        return false
    } else {
        $tableLast.after(
        '<tr class="addition">' +
        '   <th scope="row">' +
        '       <div class="form-floating">' +
        '           <textarea class="form-control" placeholder="Текст" id="floatingTextarea"></textarea>' +
        '           <label for="floatingTextarea"></label>' +
        '       </div>' +
        '   </th>' +
        '   <td>' +
        '       <input name="file" type="file" class="form-control form-control-lg" aria-label="Large file input example">' +
        '   </td>' +
        '   <td>' +
        '   <div class="w-100 h-100">'+
        '       <a type="button" class="btn btn-success w-100 h-100" onclick="saveTodo()">Добавить</a>' +
        '   </div>'+
        '   </td>' +
        '</tr>'
        );
    }
}
function saveTodo() {
    $textarea = $('tbody tr.addition textarea').val();
    $file = $('tbody tr.addition input')[0].files;
    var data = new FormData();
    data.append('text', $textarea);
    jQuery.each($file[0], function(i, file) {
        data.append('file-'+i, file);
    });
    $.ajax({
        url: 'test.php',
        data: data,
        // enctype: 'multipart/form-data',
        contentType: false,
        processData: false,
        method: 'POST',
        dataType: 'JSON',
        type: 'POST', // For jQuery < 1.9
        success: function(data){
            alert(data);
        }
    });
}