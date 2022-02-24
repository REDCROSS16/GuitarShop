$(function() {

    function showCart(cart) {
        console.log(cart)
        $('#cart-modal .modal-cart-content').html(cart);
        $('#cart-modal').modal();


        let cartQty = $('#modal-cart-qty').text() ? $('#modal-cart-qty').text() : 0;
        $('.mini-cart-qty').text(cartQty);
    }

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
                    showCart(res.response);
                } else {
                    alert('error');
                }
            },
            error: function () {
                alert('Error');
            }
        })
    });


});