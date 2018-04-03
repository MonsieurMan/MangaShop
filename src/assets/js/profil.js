$('.supprimer_offre').click(function () {
    $.ajax({
        method: 'post',
        url:'src/remove_offre.php',
        data: {
            idRef: $(this).attr('id')
        },
        success: function (data) {
            console.log(data)
            location.href = '/?rub=profil'
        },
        error: function (data) {
            console.log(data)
        }
    })
})

$('.supprimer_panier').click(function () {
    $.ajax({
        method: 'post',
        url:'src/remove_panier.php',
        data: {
            idRef: $(this).attr('id')
        },
        success: function (data) {
            console.log(data)
            location.href = '/?rub=profil'
        },
        error: function (data) {
            console.log(data)
        }
    })
})