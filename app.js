$(function(){
    $("#searchInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#table tr").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
        });
    });
});

$(function () {
    $.getJSON("users.php", function(user) {
        var user_data = '';
        $.each(user, function(key, value) {
            user_data += 
            "<tr>" +
                `<th scope='row'>${value.id}</th>` +
                `<td>${value.login}</td>` +
                `<td>${value.password}</td>` +
                `<td>${value.name}</td>` +
                `<td>${value.age}</td>` +
                `<td>${value.role}</td>` +
            "</tr>";
        });
        $("#table").append(user_data);

        $("tr th:nth-child(1)").addClass("text-center");
    });
})