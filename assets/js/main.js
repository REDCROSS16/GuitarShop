$(function() {
    $('.add-to-cart').click( function (e) {
        e.preventDefault();
        let id = $(this).data('id');

        $.ajax({
            url: 'cart.php',
            type: 'GET',
            data: {
                cart: 'add',
                id: id
            },
            dataType: 'json',
            success: function (res) {
                if (res.code == 'ok') {
                    alert('ok');
                } else {
                    alert(res.answer);
                }
            },
            error: function () {
                alert('Error');
            }
        })
    });
});