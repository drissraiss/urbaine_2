$(document).ready(function () {
    $('#btn-filtre').click(filter_table)
    $('#input-filtre').keydown((e) => {
        if (e.keyCode == 13) {
            filter_table()
        }
    })
    function filter_table() {
        const value = $('#input-filtre').val().trim().toLowerCase();
        if (value == "") {
            $('.table-employes tbody tr').each(function () {
                $(this).show()
                return true
            })
        }
        $('.table-employes tbody tr').each(function () {
            var exist = false
            $(this).children().each(function () {
                if (!$(this).hasClass('td-status')) {
                    if ($(this).text().toLowerCase().includes(value)) {

                        let new_val = $(this).text().substr($(this).text().toLowerCase().indexOf(value), value.length)
                        exist = true
                        $(this).html($(this).text().replace(new_val, "<span class='bg-warning'>" + new_val + "</span>"))
                    } else {
                        $(this).html($(this).text())
                    }
                }
            })
            if (!$(this).hasClass('td-status')) {
                if (!exist) {
                    $(this).hide()
                } else {
                    $(this).show()
                }
            }
        })
    }

    $('#btn-add-employe').click(() => {
        $('#div-add-employe').fadeIn()
        $('#div-add-employe').click(() => {
            $('#div-add-employe').fadeOut(100)
        })
        $('#article-add-employe').click((e) => {
            e.stopPropagation()
        })
    })

    $("#btn-close-info-employe").click(() => {
        $("#div-info-employe").hide()
    })
    $("#div-info-employe").click(() => {
        $("#div-info-employe").hide()
    })
    $("#div-content-info-emp").click((e) => {
        e.stopPropagation()
    })

    $('.table-employes tbody tr').click(function () {
        $("#div-info-employe").slideDown()
        //console.log($(this).eq(0).attr('user-id'))
    })

    $('#btn-close-add-employe').click(() => {
        $('#div-add-employe').hide()
    })
})