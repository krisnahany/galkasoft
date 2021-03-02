// function selectAccountTransaction() {
//     let x = $("input[name=transaction]:checked").val();
//     console.log(x);
// }
$('.settings').click(function(){
    $('.settings-list').removeClass('d-none');
    $('.settings').css('display', 'none');
    $('.settings-list').css('display', 'inline-block');
})
$('.settings-list').click(function(){
    $('.settings-list').css('display', 'none');
    $('.settings').css('display', 'block');
})

$('#tr2').click(function(){
    $('#accountTransactionGroup').removeClass('d-none');
    $('#accountTransactionGroup').css('display', 'block');
    $('#accountTransaction').css('display', 'none');
});

$('#tr1').click(function(){
    $('#accountTransaction').css('display', 'block');
    $('#accountTransactionGroup').css('display', 'none');
});

$('.searchFilter').on('keyup', function(){
    let value = $('.searchFilter').val().toLowerCase();
    $('.dataTransaction tr').filter(function(){
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
})